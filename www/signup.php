<?php

   	require "guildQuestConfig.php";

	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->conect_errno)
        {
        	printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	echo "this workd";

	$email = $_POST['signUpEmail'];
	$username = $_POST['signUpUser'];
	$pass = $_POST['signUpPass'];
	$currentDate = date("Y-m-d");
	
	$sql = "INSERT INTO ACCOUNT (Email, Username, Password, Role, DateSignedUp, IsBanned) VALUES('$email', '$username', '$pass', 'User', '$currentDate', FALSE);";

	if($mysqli->query($sql) == TRUE)
	{
		header("Location: playerHome.php");
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $mysqli->error;
		exit();
	}

	

	$mysqli->close();
?>

