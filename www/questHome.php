<html>
<head>
<title>Quests</title>
<link rel="stylesheet" href="tables.css">
<link rel="stylesheet" href="adminPages.css">
<link rel="stylesheet" href="playerHome.css">
</head>

<body class="displayPage">
<h2>Available Quests</h2>

<?php
	
	require "guildQuestConfig.php";

	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->connect_errno)
        {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
        }

    // run query to obtain player level
	$stmt = $mysqli->prepare("SELECT Level FROM PLAYER WHERE PlayerName = ?;");
	$stmt->bind_param("s", $playerName);
    $playerName = $_GET['player'];
	$stmt->execute();
	$result = $stmt->get_result();
	$stmt->close();

    $level = NULL;
	// getting player level from above query
	if($result && $row = $result->fetch_row())
	{
		$level = $row[0];
    }
    $result->close();

    // run query to obtain all available quests according to level
	$stmt = $mysqli->prepare("SELECT * FROM QUEST WHERE QUEST.MinLevel <= ? AND QuestName NOT IN (SELECT QUEST.QuestName FROM QUEST,MISSION WHERE QUEST.QuestName = MISSION.QuestName AND QUEST.MinLevel <= ? AND PlayerName = ?);");
	$stmt->bind_param("iis", $level, $level, $playerName);
	$stmt->execute();
	$availableQuests = $stmt->get_result();
	$stmt->close();
?>
<br>
<table class="displayTable">
<TR>
<TH></TH>
<?php
        // print headers
		if($head = $availableQuests->fetch_fields())
			for($i = 0; $i < $availableQuests->field_count; $i++)
			{
				$temp = $head[$i];
				echo "<TH>";
                echo " $temp->name";
                echo "</TH>";
			}
        echo "</TR>";

	if ($availableQuests)
	{
		while($row=$availableQuests->fetch_row())
		{	
			echo "<tr>
					<td>
						<form method=\"POST\" action=\"addQuest.php\">
							<input type=\"hidden\" id=\"quest\" name=\"quest\" value=\"" . $row[0] . "\">
							<input type=\"hidden\" id=\"player\" name=\"player\" value=\"" . $_GET["player"] . "\">
                            <input type=\"hidden\" id=\"world\" name=\"world\" value=\"" . $_GET["world"] . "\">
                            <input type=\"hidden\" id=\"username\" name=\"username\" value=\"" . $_GET["username"] . "\">
							<input type=\"submit\" id=\"addQuestHomeButton\" value=\"Add Quest\">
						</form>
					</td>";
			for($i = 0; $i < $availableQuests->field_count; $i++)
			{

				echo "<td> $row[$i] </td>";
			}
			echo "</tr>";
		}
	}

	$availableQuests->close();
?>

</table>
<br>
<br>
<?php
    $urlpara = "playerHome.php?username=" . $_GET["username"] . "&world=" . $_GET["world"];
?>
<form method="POST" action="<?php echo "$urlpara";?>">
    <input type="submit" style="padding: 10px;border-radius: 10px;font-family: monaco, Helvetica, sans-serif; float:none; font-size: 16;" value="Back">
</form>
<br>
<br>
<a href = index.php id="returnButton">Logout</a>
<br>
<br>

</body>
</html>
