<html>
<head>
<title>Leaderboards</title>
<link rel="stylesheet" href="tables.css">
<link rel="stylesheet" href="adminPages.css">
</head>
<body class="displayPage">

<h2>Leaderboards</h2>

<?php

	require "guildQuestConfig.php";

	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->connect_errno)
        {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
        }


	$result = $mysqli->query("SELECT PlayerName, Experience, Coins, Attack, Defence, Health, Level, GuildName FROM PLAYER LEFT JOIN GUILD ON PLAYER.Guild = GUILD.GuildID ORDER BY Experience DESC;");

	if (!$result)
	{
		echo("Error: " . $mysqli->error());
		exit();
	}
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
		while($row = $result->fetch_row())
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
<a href = "index.php">Return to Home Screen</a>

</body>
</html>
