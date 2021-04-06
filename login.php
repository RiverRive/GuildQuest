<?php

   	require "guildQuestConfig.php";
        $mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->conect_errno)
        {
        	printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}

	$result = $mysqli->query("SELECT * FROM ACCOUNT");

	echo "result:\n";
	foreach ($result as $row)
	{
		echo " id = " . $row['UserID'] . "\n";
	}

	


?>
