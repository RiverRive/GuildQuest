<html>
<head>
<title>Member Accounts</title>
<link rel="stylesheet" href="tables.css">
<link rel="stylesheet" href="adminPages.css">
</head>

<body class="displayPage">
<center>
<h2>Display Missions</h2>

<?php
	
	require "guildQuestConfig.php";

	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->connect_errno)
        {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
        }

        // run query to select all from mission table
	$stmt = $mysqli->prepare("SELECT * FROM MISSION");
	$stmt->execute();
	$result = $stmt->get_result();
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
		}
	}

	$result->close();
	$stmt->close();
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

