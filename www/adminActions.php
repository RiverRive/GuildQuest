<?php
	// connect to DB
	require "guildQuestConfig.php";
	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

	if ($mysqli->connect_errno)
        {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
        }
	
	$adminAction = $_POST['adminAction'];

	if ($adminAction == 'removeUser')
	{
		// prepare statement
        	$stmt = $mysqli->prepare("DELETE FROM ACCOUNT WHERE Username = ?;");
	}
	else if ($adminAction == 'banUser')
	{
		$stmt = $mysqli->prepare("UPDATE ACCOUNT SET IsBanned = TRUE WHERE Username = ?;");
	}
	else if ($adminAction == 'unBanUser')
	{
		$stmt = $mysqli->prepare("UPDATE ACCOUNT SET IsBanned = FALSE WHERE Username = ?;");
	}

	// query database
	$stmt->bind_param("s", $username);

	$username = $_POST['user'];
	
	$stmt->execute();

	$stmt->close();
	$mysqli->close();
	header("Location: adminHome.php");
	exit();
?>
