<?php

	require "guildQuestConfig.php";

        $mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->connect_errno)
        {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                        exit();
        }

	$stmt = $mysqli->prepare("UPDATE PLAYER SET Guild = NULL WHERE PlayerName = ?;");
	$stmt->bind_param("s", $playerName);

	$playerName = $_POST['player'];    

	$stmt->execute();
	$stmt->close();
    
	$worldName = $_POST['world'];
	$accountUser = $_POST['username'];
	
	header("Location: playerHome.php?username=" . $accountUser . "&world=" . $worldName );

?>

