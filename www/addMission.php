<?php

 require "guildQuestConfig.php";

        $mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->connect_errno)
        {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                        exit();
        }

	$mysqli-<close();
?>
