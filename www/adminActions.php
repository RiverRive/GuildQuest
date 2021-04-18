<?php
	require "guildQuestConfig.php";
	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

	if ($mysqli->connect_errno)
        {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
        }
	// get username and write sql statement
	$username = $_POST['user'];
	$adminAction = $_POST['adminAction'];

	if ($adminAction == 'removeUser')
	{
		$sql = "DELETE FROM ACCOUNT WHERE Username = '$username';";
	}
	else if ($adminAction == 'banUser')
	{
		$sql = "UPDATE ACCOUNT SET IsBanned = TRUE WHERE Username = '$username';";
	}
	else if ($adminAction == 'unBanUser')
	{
		$sql = "UPDATE ACCOUNT SET IsBanned = FALSE WHERE Username = '$username'";
	}

	// query database
	if ($mysqli->query($sql) == FALSE)
		exit();

	$mysqli->close();
	header("Location: adminHome.php");
	exit();
?>
