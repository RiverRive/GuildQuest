<?php
	// connect to DB
   	require "guildQuestConfig.php";

	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->connect_errno)
        {
        	printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}

	// prepare statement
	$stmt = $mysqli->prepare("INSERT INTO ACCOUNT (Email, Username, Password, Role, DateSignedUp) VALUES(?, ?, ?, ?, ?);");

	// bind
	$stmt->bind_param("sssss", $email, $username, $pass, $role, $currentDate);

	// set parameters
	$email = $_POST['signUpEmail'];
	$username = $_POST['signUpUser'];
	$pass = $_POST['signUpPass'];
	$role = 'User';
	$currentDate = date("Y-m-d");

	//execute
	$result = $stmt->execute();
	

	if($result == TRUE)
	{
		header("Location: playerHome.php");
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $mysqli->error;
		exit();
	}

	
	$stmt->close();
	$mysqli->close();
?>

