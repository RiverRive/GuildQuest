<?php

	require "guildQuestConfig.php";

        $mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->connect_errno)
        {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                        exit();
        }

	$stmt = $mysqli->prepare("DELETE FROM MISSION WHERE PlayerName = ? AND QuestName = ?;");
	$stmt->bind_param("ss", $playerName, $questName);

	$playerName = $_POST['player'];    
    $questName = $_POST['quest']; 

	$stmt->execute();
	$stmt->close();
    
	$worldName = $_POST['world'];
	$accountUser = $_POST['username'];
	
	header("Location: playerHome.php?username=" . $accountUser . "&world=" . $worldName );

?>

