<html>
<head>
<link rel="stylesheet" href="tables.css">
<link rel="stylesheet" href="adminPages.css">
<title>Search Results</title>
</head>
<body class="displayPage">

<h1>Search Results</h1>

<?php
	// connect to DB
	require "guildQuestConfig.php";
	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

	if ($mysqli->connect_errno)
        {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
        }

	// get option selected from search form	
	$searchAction = $_POST['search'];
	
	if ($searchAction == 'findUser')
	{
		$stmt = $mysqli->prepare("SELECT * FROM ACCOUNT WHERE Username = ?;");
		$stmt->bind_param("s",$username); 
	}
	else if ($searchAction == 'findBanned')
	{
		$stmt = $mysqli->prepare("SELECT * FROM ACCOUNT WHERE IsBanned = TRUE;");	
	}
	else if ($searchAction == 'findGuild')
	{
		$stmt = $mysqli->prepare("SELECT * FROM GUILD WHERE GuildName = ?;");
		$stmt->bind_param("s", $guildName);
	}
	else if ($searchAction == 'findSpender')
	{
		$stmt = $mysqli->prepare("SELECT * FROM ACCOUNT WHERE MoneySpent >= ?;");
		$stmt->bind_param("s", $moneySpent);
	}
	else if ($searchAction == 'findWorld')
	{
		$stmt = $mysqli->prepare("SELECT * FROM WORLD WHERE WorldName = ?;");
		$stmt->bind_param("s", $worldName);
	}

	// query database
	$username = $_POST['user'];
	$guildName = $_POST['guildName'];
	$moneySpent = $_POST['moneySpent'];
	$worldName = $_POST['worldName'];
	$stmt->execute();

	// get result from query
	$result = $stmt->get_result();


?>

<table class="displayTable">
	<tr>
	<?php
		while($head = $result->fetch_field())
		{
			echo "<th>";
			echo "$head->name";
			echo "</th>";
		}

		echo "</tr>";

		if ($result)
		{
			while($row=$result->fetch_row())
			{
				echo "<tr>";
				for($i = 0; $i < $result->field_count; $i++)
					echo "<td> $row[$i] </td>";

			}
		}
	?>
</table>

<?php

	$result->close();
	$stmt->close();
	$mysqli->close();

?>

<br>
<br>
<a href = adminHome.php id="returnButton">Return to Admin Home Page</a>
<br>
<br>

</body>
</html>
