<?php
	require "guildQuestConfig.php";
	
	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->connect_errno)
        {
        	printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}

	$stmt = $mysqli->prepare("INSERT INTO QUEST(QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?);");

	$stmt->bind_param("ssiiiiisi", $questName, $questDescription, $coins, $xp, $attack, $defence, $health, $time, $level);

	$questName = $_POST['questName'];
	$questDescription = $_POST['questDescription'];
	$coins = $_POST['coinsGain'];
	$xp = $_POST['xpGain'];
	$attack = $_POST['attackGain'];
	$defence = $_POST['defGain'];
	$health = $_POST['healthGain'];

	// construct time
	$hr = $_POST['hr'];
	$min = $_POST['min'];
	$sec = $_POST['sec'];

	$time = $hr . ":" . $min . ":" . $sec;

	$level = $_POST['minLevel'];

	$stmt->execute();



	$stmt->close();
	$mysqli->close();

	header("Location: adminHome.php");

?>

