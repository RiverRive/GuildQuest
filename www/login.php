<?php

   	require "guildQuestConfig.php";
	
	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->connect_errno)
        {
        	printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}


	// prepare
	$stmt = $mysqli->prepare("SELECT * FROM ACCOUNT WHERE Username = ? AND Password = ?;");

	// bind
	$stmt->bind_param("ss", $suppliedUsername, $suppliedPassword);

	// set parameters
	$suppliedUsername = $_POST['username'];
        $suppliedPassword = $_POST['password'];


	// execute
	$stmt->execute();

	// get result
	$result = $stmt->get_result();
	$length = $result->num_rows;


	if ($length == 0)
	{
		printf("Invalid username or password");
		exit();
	}
	else
	{
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		// go to admin page if admin
		if ($row['Role'] == 'Admin')
		{
			header("Location: adminHome.php");
			exit();
		}
		else
		{
			// go to player homepage
			header("Location: worldsHome.php?username=" . $row['Username']);
			exit();
		}
	}

	$stmt->close();	
	$result->close();
	$mysqli->close();
		

?>
