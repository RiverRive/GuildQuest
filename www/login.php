<?php

   	require "guildQuestConfig.php";
	
	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->conect_errno)
        {
        	printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}


	$suppliedUsername = $_POST['username'];
	$suppliedPassword = $_POST['password'];

	$result = $mysqli->query("SELECT * FROM ACCOUNT WHERE Username = '$suppliedUsername' AND Password = '$suppliedPassword';");

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
			header("Location: playerHome.php");
			exit();
		}
	}
	
	$result->close();
	$mysqli->close();
		

?>
