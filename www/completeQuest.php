<?php

    require "guildQuestConfig.php";

    $mysqli = new mysqli($host, $user, $password, $dbname, $port);

    if ($mysqli->connect_errno)
    {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

	// getting quests stats from mission given a player
    $stmt = $mysqli->prepare("SELECT SUM(CoinsGain), SUM(ExperienceGain), SUM(AttackGain), SUM(DefenceGain), SUM(HealthGain) FROM QUEST WHERE QuestName IN (SELECT QuestName FROM MISSION WHERE PlayerName = ?);");
	$stmt->bind_param("s", $playerName);
    $playerName = $_POST['player'];
	if(!$stmt->execute())
    {
        echo "You do not have any quests!";
    }
    $increments = $stmt->get_result();
    $stmt->close();

    $totalCoinGain = NULL;
    $totalExperienceGain = NULL;
    $totalAttackGain = NUll;
    $totalDefenceGain = NULL;
    $totalHealthGain = NULL;
    if($increments && $inc = $increments->fetch_row())
	{
        $totalCoinGain = $inc[0];
        $totalExperienceGain = $inc[1];
        $totalAttackGain = $inc[2];
        $totalDefenceGain = $inc[3];
        $totalHealthGain = $inc[4];
    }
    $increments->close();

    // update the player states using the increment amounts
    $stmt = $mysqli->prepare("UPDATE PLAYER SET Coins = Coins + $totalCoinGain, Experience = Experience + $totalExperienceGain, Attack = Attack + $totalAttackGain, Defence = Defence + $totalDefenceGain, Health = Health + $totalHealthGain WHERE PlayerName = ?;");
	$stmt->bind_param("s", $playerName);
    $stmt->execute();
    $stmt->close();

    // remove the player's quest from the mission table
    $stmt = $mysqli->prepare("DELETE FROM MISSION WHERE PlayerName = ?");
    $stmt->bind_param("s", $playerName);

    $accountUsername = $_POST['username'];
    $worldName = $_POST['world'];

    if($stmt->execute())
    {   
        header("Location: playerHome.php?username=" . $accountUsername . "&world=" . $worldName);
    }
    else
    {
        echo "Something when wrong!";
    }
    $stmt->close();
	$mysqli->close();
?>