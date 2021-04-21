<?php

	require "guildQuestConfig.php";

        $mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->connect_errno)
        {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                        exit();
        }
	
	// check to make sure guild exists
	$stmt = $mysqli->prepare("SELECT * FROM GUILD WHERE GuildName = ?;");
	$stmt->bind_param("s", $guildName);
	$guildName = $_POST['guildName'];
	$stmt->execute();

	$result = $stmt->get_result();

	$row = $result->fetch_row();

	if ($row == FALSE)
	{
		echo"That guild does not exist try again!";
		exit();
	}

	// get max number of members allowed
	$maxMembers = $row[1];

	$result->close();
	$stmt->close();	
	
	$stmt = $mysqli->prepare("SELECT COUNT(*) FROM PLAYER WHERE PLAYER.Guild = ?;");
	$stmt->bind_param("s", $guildName);


	$stmt->execute();

	$result = $stmt->get_result();

	$row = $result->fetch_row();

	$currentCount = $row[0];
	$result->close();
	$stmt->close();


	// check to see if guild if full if so exit
	if ($currentCount >= $maxMembers)
	{
		echo"This guild is full!";
		exit();
	}

	$stmt = $mysqli->prepare("UPDATE PLAYER SET Guild = ? WHERE PlayerName = ?;");
	$stmt->bind_param("ss", $guildName, $username);

	$username = $_POST['username'];

	$stmt->execute();

	$stmt->close();

	$worldName = $_POST['worldID'];
	$accountUser = $_POST['accountName'];
	
	header("Location: playerHome.php?username=" . $accountUser . "&world=" . $worldName );

?>

