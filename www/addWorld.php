<?php

    require "guildQuestConfig.php";

    $mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->connect_errno)
        {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
        }

    // prepared statement and execution for getting email from the account (Email is PK)
    $stmt = $mysqli->prepare("SELECT Email FROM ACCOUNT WHERE Username = ?;");
    $stmt->bind_param("s", $accountUsername);

    $accountUsername = $_POST['username'];
    $stmt->execute();


    $result = $stmt->get_result();

    $stmt->close();

    // get infromation to insert new player in database
    $account = NULL;

    if($result && $row = $result->fetch_row())
    {
        $account = $row[0];
    }

    // prepared statement for inserting into player table
    $stmt = $mysqli->prepare("INSERT INTO PLAYER (PlayerName, Account, DateLastLogged, World) VALUES(?, ?, ?, ?);");
    $stmt->bind_param("ssss", $playerName, $account, $currentDate, $worldName);

    $playerName = $_POST['playerName'];
    $worldName = $_POST['worldName'];
    $currentDate = date("Y-m-d");

    $stmt->execute();
    $result = $stmt->get_result();

  
    header("Location: playerHome.php?username=" . $accountUsername . "&world=" . $worldName);

    $result->close();
    $stmt->close();
    $mysqli->close();
?>
