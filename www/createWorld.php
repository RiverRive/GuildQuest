<?php
require "guildQuestConfig.php";

// get values from form
$worldName = $_POST['worldName'];
$maxPlots = $_POST['maxPlots'];
$playerCap = $_POST['playerCap'];
$plotPrice = $_POST['plotPrices'];
$worldType = $_POST['worldType'];
$pvp = $_POST['pvp'];

// set pvp to boolean
settype($pvp, "boolean");

// create random worldID
$worldID = "W" . rand(0, 9999999999);;

// connect to the database
$mysqli = new mysqli($host, $user, $password, $dbname, $port);

if ($mysqli ->connect_errno)
{
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

// insert into DB
$result = $mysqli->query("INSERT INTO WORLD (WorldID, WorldName, MaxPlots, MaxPlayerCapacity, WorldType, InitialPlotPrices, PVP) VALUES ('$worldID', '$worldName', '$maxPlots', '$playerCap', '$worldType', '$plotPrice', '$pvp');");


header("Location: adminHome.php");
$result->close();
$mysqli->close();
?>


