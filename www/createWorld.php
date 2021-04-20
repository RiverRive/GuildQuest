<?php
	require "guildQuestConfig.php";

	// connect to the database
	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

	if ($mysqli ->connect_errno)
	{
        	printf("Connect failed: %s\n", $mysqli->connect_error);
        	exit();
	}

	// prepare statement
	$stmt = $mysqli->prepare("INSERT INTO WORLD (WorldID, WorldName, MaxPlots, MaxPlayerCapacity, InitialPlotPrices, PVP) VALUES (?, ?, ?, ?, ?, ?);");

	// bind
	$stmt->bind_param("ssssss", $worldID, $worldName, $maxPlots, $playerCap, $plotPrice, $pvp);

	// get values from form
	$worldName = $_POST['worldName'];
	$maxPlots = $_POST['maxPlots'];
	$playerCap = $_POST['playerCap'];
	$plotPrice = $_POST['plotPrices'];
	$pvp = $_POST['pvp'];

	// set pvp to boolean
	settype($pvp, "boolean");

	// create random worldID
	$worldID = "W" . rand(0, 9999999999);;


	// insert into DB
	$stmt->execute();

	header("Location: adminHome.php");
	$stmt->close();
	$mysqli->close();
?>


