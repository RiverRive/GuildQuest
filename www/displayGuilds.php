<html>
<head>
<title>All Guilds</title>
<link rel="stylesheet" href="tables.css">
<link rel="stylesheet" href="adminPages.css">
</head>

<body class="displayPage">

<h2>Display All Guilds</h2>

<?php
	
	require "guildQuestConfig.php";

	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->connect_errno)
        {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
        }



        // run query to select all from Account table
        $result = $mysqli->query("SELECT * FROM GUILD;");
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
<a href = adminHome.php id="returnButton">Return to Admin Home Page</a>
<br>
<br>
</body>
</html>

