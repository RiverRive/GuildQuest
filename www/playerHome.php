<html>
<head>
<title>Player Homepage</title>
<link rel="stylesheet" href="tables.css">
<link rel="stylesheet" href="adminPages.css">
</head>

<body class="displayPage">

<h2>Welcome to Player Homepage!</h2>


<?php

   	require "guildQuestConfig.php";
	
	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->connect_errno)
        {
        	printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}


	$worldID = $_POST['world'];
    $accountUsername = $_POST['username'];

	// run query to select player stats
	$result = $mysqli->query("SELECT PlayerName, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Wood, Fish, Food, Diamonds 
							FROM PLAYER, ACCOUNT WHERE PLAYER.Account = ACCOUNT.Email AND World = '$worldID' AND Username = '$accountUsername';");
?>

<table class="displayTable">

<tr>

<?php
        // print headers
        while($head = $result->fetch_field())
        {
                echo "<TH>";
                echo "$head->name";
                echo "</TH>";
        }

        echo "</TR>";

	if ($result)
	{
		while($row=$result->fetch_row())
		{
			echo "<tr>";
			for($i = 0; $i < $result->field_count; $i++)
			{
				echo "<td> $row[$i] </td>";
			}	
			echo "</tr>";
		}
	}

	$result->close();
	$mysqli->close();

?>
</table>


<br>
<br>
<a href = worldsHome.php?username=<?php  echo "$accountUsername" ?>>Worlds</a>
<br>
<br>
<a href = index.php>Logout</a>


</body>
</html>