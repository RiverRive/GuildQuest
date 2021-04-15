<?php
	require "guildQuestConfig.php";

	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->connect_errno)
        {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
        }

	$username = $_POST['banuser'];

	$sql = "UPDATE ACCOUNT SET IsBanned = TRUE WHERE Username = '$username';";

	if ($mysqli->query($sql) == FALSE)
	{
		exit();
	}
	
	$mysqli->close();
	header("Location: adminHome.php");
?>

