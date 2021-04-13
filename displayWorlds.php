<html>
<head>
<title>Worlds</title>
</head>

<body>
<center>
<h2>Display Worlds</h2>

<?php
	
	require "guildQuestConfig.php";

	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->conect_errno)
        {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
        }



        // run query to select all from Account table
        $result = $mysqli->query("SELECT * FROM WORLD;");
?>

<table Border = "1">

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
<a href = adminHome.php>Return to Admin Home Page</a>


</body>
</html>

