<?php
// script to create a new world and insert it into the WORLD table

require "guildQuestConfig.php";

$worldName = $_POST['worldName'];
$maxPlots = $_POST['maxPlots'];
$playerCap = $_POST['playerCap'];
$plotPrice = $_POST['plotPrices'];
$worldType = $_POST['worldType'];
$pvp = $_POST['pvp'];

echo "$worldName <br>";
echo "$maxPlots <br>";
echo "$playerCap <br>";
echo "$plotPrice <br>";
echo "$worldType <br>";
echo "$pvp <br>";
settype($pvp, "boolean");
$type = gettype($pvp);

echo "$type";
// create random worldID
$worldID = "W" . rand(0, 9999999999);;

echo "$worldID"; 

// connect to the database
$mysqli = new mysqli($host, $user, $password, $dbname, $port);

if ($mysqli ->connect_errno)
{
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

$result = $mysqli->query("INSERT INTO WORLD (WorldID, WorldName, MaxPlots, MaxPlayerCapacity, WorldType, InitialPlotPrices, PVP) VALUES ('$worldID', '$worldName', '$maxPlots', '$playerCap', '$worldType', '$plotPrice', '$pvp');");

if ($result == FALSE)
{
	echo ("error:" . $mysqli->error);
	exit();
}

$result->close();
$mysqli->close();
?>
