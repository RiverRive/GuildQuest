<html>
<head>
<title>Leaderboards</title>
<link rel="stylesheet" href="leader.css">
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

	$stmt = $mysqli->prepare("SELECT PlayerName, Experience, Coins, Attack, Defence, Health, Level, GuildName FROM PLAYER LEFT JOIN GUILD ON PLAYER.Guild = GUILD.GuildName ORDER BY Level DESC;");

	$stmt->execute();

	$result = $stmt->get_result();

	if (!$result)
	{
		echo("Error: " . $mysqli->error());
		exit();
	}
?>

<table class="displayTable">
<tr>
<?php
	$index = 0;
	// print headers
	while($head = $result->fetch_field())
	{
		echo "<TH>";
		if ($index > 0 && $index < 7)
			echo "<a href=\"$head->name.php\">$head->name</a>";
		else
			echo "$head->name";
		echo "</TH>";
		$index += 1;
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
	$stmt->close();
        $mysqli->close();

?>
</table>
<br>
<br>
<a href = "index.php" id="returnButton">Return to Home Screen</a>
</body>
</html>

