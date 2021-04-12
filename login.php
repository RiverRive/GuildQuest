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
		printf("Success! Welcome: %s", $suppliedUsername);
	}
	

	


?>
