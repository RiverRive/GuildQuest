<?php

    require "guildQuestConfig.php";

    $mysqli = new mysqli($host, $user, $password, $dbname, $port);

    if ($mysqli->connect_errno)
    {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $stmt = $mysqli->prepare("SELECT MaxPlots FROM WORLD WHERE WorldName = ?;");
    $stmt->bind_param("s", $worldName);

    $worldName = $_POST['world'];
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    $maxPlots = NULL;
    if($result && $row = $result->fetch_row())
	{
		$maxPlots = $row[0];
	}
	$result->close();

    $stmt = $mysqli->prepare("SELECT COUNT(*) FROM PLOT WHERE World = ?;");
    $stmt->bind_param("s", $worldName);

    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    $currentPlots = NULL;
    if($result && $row = $result->fetch_row())
	{
		$currentPlots = $row[0];
	}
	$result->close();

    if($maxPlots > $currentPlots)
    {
        // prepared statement for inserting into plot table
        $stmt = $mysqli->prepare("INSERT INTO PLOT (PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory) 
                                    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
        $stmt->bind_param("ssssssssssss", $plotID, $worldName, $playerName, $dailyUpKeep, $dailyWood, $dailyFish, $dailyFood, $dailyDiamond, $woodInventory, $fishInventory, $foodInventory, $diamondInventory);

        $plotID = "P" . rand(0, 9999999999);
        $playerName = $_POST['player'];
        $dailyUpKeep = rand(0, 1000);
        $dailyWood = rand(0, 1000);
        $dailyFish = rand(0, 1000);
        $dailyFood = rand(0, 1000);
        $dailyDiamond = rand(0, 1000);
        $woodInventory = 0;
        $fishInventory = 0;
        $foodInventory = 0;
        $diamondInventory = 0;

        $accountUsername = $_POST['username'];

        if($stmt->execute())
        {   
            header("Location: playerHome.php?username=" . $accountUsername . "&world=" . $worldName);
        }
        else
        {
            echo "Something when wrong!";
        }
        $stmt->close();
    } 
    else
    {
        echo "The world has reached its plot limit!";
    }
	$mysqli->close();
?>