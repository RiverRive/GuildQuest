<?php

    require "guildQuestConfig.php";

    $mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->connect_errno)
        {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
        }

    $accountUsername = $_POST['username'];
    $result = $mysqli->query("SELECT Email FROM ACCOUNT WHERE Username = \"" . $accountUsername . "\";");

    $account = NULL;
    if($result && $row = $result->fetch_row())
    {
        $account = $row[0];
    }
    $playerName = $_POST['playerName'];
    $worldID = $_POST['world'];
    $playerID = "P" . rand(0, 9999999999);;
    $currentDate = date("Y-m-d");

	$sql = "INSERT INTO PLAYER (PlayerID, PlayerName, Account, DateLastLogged, World)  
                VALUES('$playerID', '$playerName', '$account', '$currentDate', '$worldID');";

	if ($mysqli->query($sql) == FALSE)
	{
		exit();
	}
    header("Location: playerHome.php?username=" . $accountUsername . "&world=" . $worldID);

    $result->close();
	$mysqli->close();
?>