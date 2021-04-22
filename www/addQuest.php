<?php

    require "guildQuestConfig.php";

    $mysqli = new mysqli($host, $user, $password, $dbname, $port);

    if ($mysqli->connect_errno)
    {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
        
    // prepared statement for inserting into mission table
    $stmt = $mysqli->prepare("INSERT INTO MISSION (PlayerName, QuestName, DateStart) VALUES(?, ?, ?);");
    $stmt->bind_param("sss", $playerName, $questName, $currentDate);

    $playerName = $_POST['player'];
    $questName = $_POST['quest'];
    $currentDate = date("Y-m-d");

    $accountUsername = $_POST['username'];
    $worldName = $_POST['world'];

    if($stmt->execute())
    {   
        header("Location: questHome.php?username=" . $accountUsername . "&world=" . $worldName . "&player=" . $playerName);
    }
    else
    {
        echo "Something when wrong!";
    }
    $stmt->close();
	$mysqli->close();
?>