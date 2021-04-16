<html>
<head>
<title>Player Homepage</title>
<link rel="stylesheet" href="adminPages.css">
<link rel="stylesheet" href="playerHome.css">
<link rel="stylesheet" href="tables.css">
</head>

<body class="displayPage">

<?php

   	require "guildQuestConfig.php";
	
	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->connect_errno)
        {
        	printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}


	$worldID = $_GET['world'];
    $accountUsername = $_GET['username'];

	// run query to select player stats
	$result = $mysqli->query("SELECT PlayerName, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Wood, Fish, Food, Diamonds, Guild, GuildPosition, PlayerID  
							FROM PLAYER, ACCOUNT WHERE PLAYER.Account = ACCOUNT.Email AND World = '$worldID' AND Username = '$accountUsername';");

	$playerName = NULL;
	$experience = NULL;
	$coins = NULL;
	$attack = NULL;
	$defence = NULL;
	$health = NULL;
	$level = NULL;
	$titleRank = NULL;
	$wood = NULL;
	$fish = NULL;
	$food = NULL;
	$diamond = NULL;
	$guild = NULL;
	$guildPos = NULL;
	$playerID = NULL;
	// getting player stats
	if($result && $row = $result->fetch_row())
	{
		$playerName = $row[0];
		$experience = $row[1];
		$coins = $row[2];
		$attack = $row[3];
		$defence = $row[4];
		$health = $row[5];
		$level = $row[6];
		$titleRank = $row[7];
		$wood = $row[8];
		$fish = $row[9];
		$food = $row[10];
		$diamond = $row[11];
		$guild = $row[12];
		$guildPos = $row[13];
		$playerID = $row[14];
	}

	$result->close();
	$result = $mysqli->query("SELECT worldName FROM WORLD WHERE WorldID = '$worldID';");

	$worldName = NULL;
	// getting world name
	if($result && $row = $result->fetch_row())
	{
		$worldName = $row[0];
	}

	$result->close();
	$result = $mysqli->query("SELECT GuildName, MaxNumMembers, GuildExperience, GuildLevel FROM Guild WHERE GuildID = '$guild';");

	$guildName = NULL;
	$maxNumMembers = NULL;
	$guildExperience = NULL;
	$guildLevel = NULL;
	$guildCount = NULL;
	// getting guild stats if any
	if($result && $row = $result->fetch_row())
	{
		$guildName = $row[0];
		$maxNumMembers = $row[1];
		$guildExperience = $row[2];
		$guildLevel = $row[3];

		$result->close();
		$result = $mysqli->query("SELECT COUNT(*) FROM GUILD, PLAYER WHERE GuildID = '$guild' AND PLAYER.Guild = '$guild';");
		if($result && $row = $result->fetch_row())
		{
			$guildCount = $row[0];
		}
	}
	$result->close();
?>

<h2>
	<a style="float: left; margin-left: 20px;" href = index.php>Logout</a>
	Welcome to <?php echo "$worldName"?>!
	<a style="float: right; margin-right: 20px;" href = worldsHome.php?username=<?php  echo "$accountUsername" ?>>Worlds</a>
</h2>
<br>
<h2>Profile: <?php echo "$playerName"?></h2>
<br>
<div class="mainPlayerBody">
	<ul class="playerList">
		<li> 
			<h3>Player</h3>
			<p>TitleRank: <?php echo "$titleRank"?> </p>
			<p>Level: <?php echo "$level"?> </p>
			<p>Experience: <?php echo "$experience"?> </p>
			<p style="background-color: #009879;">&nbsp;</p>
		</li>
		<li> 
			<h3>Stats</h3>
			<p>Coins: <?php echo "$coins"?> </p>
			<p>Attack: <?php echo "$attack"?> </p>
			<p>Defence: <?php echo "$defence"?> </p>
			<p>Health: <?php echo "$health"?> </p>
		</li>
		<li> 
			<h3>Resources</h3>
			<p>Wood: <?php echo "$wood"?> </p>
			<p>Fish: <?php echo "$fish"?> </p>
			<p>Food: <?php echo "$food"?> </p>
			<p>Diamonds: <?php echo "$diamond"?> </p>
		</li>
	</ul>
</div>
<br>

<h2>
	Active Quests: <?php echo "$playerName"?>
	<form style="margin: 0px; float: right; padding-right: 20px;" method="POST" action="index.php">
		<input type="hidden" id="addQuestButton" name="player" value="<?php echo "$playerID"?>">
		<input type="submit" id = "addQuestButton" value = "Add Quest">
	</form>
	<form style="margin: 0px; float: left; padding-left: 20px;" method="POST" action="index.php">
		<input type="hidden" id="removeQuestButton" name="player" value="<?php echo "$playerID"?>">
		<input type="submit" id = "removeQuestButton" value = "Remove Quest">
	</form>
</h2>

<?php
	// run query to select all from PLAYER table
	$result = $mysqli->query("SELECT QuestName, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel 
								FROM QUEST;");
?>

<table class="displayTable">
<tr>

<?php
        // print headers
        while($head = $result->fetch_field())
        {
                echo "<TH>";
                echo "$head->name";
                echo "</TH>";
        }

        echo "</TR>";

        if ($result)
        {
                while($row=$result->fetch_row())
                {
                        echo "<tr>";
                        for($i = 0; $i < $result->field_count; $i++)
                        {
                                echo "<td> $row[$i] </td>";
                        }
                        echo "</tr>";
                }
        }

        $result->close();

?>
</table>
<br>
<br>
<h2>
	Plots: <?php echo "$playerName"?>
	<form style="margin: 0px; float: right; padding-right: 20px;" method="POST" action="index.php">
		<input type="hidden" id="addPlotButton" name="player" value="<?php echo "$playerID"?>">
		<input type="hidden" id="addPlotButton" name="world" value="<?php echo "$worldID"?>">
		<input type="submit" id = "addPlotButton" value = "Add Plot">
	</form>
	<form style="margin: 0px; float: left; padding-left: 20px;" method="POST" action="index.php">
		<input type="hidden" id="removePlotButton" name="player" value="<?php echo "$playerID"?>">
		<input type="hidden" id="removePlotButton" name="world" value="<?php echo "$worldID"?>">
		<input type="submit" id = "removePlotButton" value = "Remove Plot">
	</form>
</h2>

<?php
	// run query to select all from PLAYER table
	$result = $mysqli->query("SELECT DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType 
								FROM PLOT WHERE Owner = '$playerID';");
?>

<table class="displayTable">
<tr>

<?php
        // print headers
        while($head = $result->fetch_field())
        {
                echo "<TH>";
                echo "$head->name";
                echo "</TH>";
        }

        echo "</TR>";

        if ($result)
        {
                while($row=$result->fetch_row())
                {
                        echo "<tr>";
                        for($i = 0; $i < $result->field_count; $i++)
                        {
                                echo "<td> $row[$i] </td>";
                        }
                        echo "</tr>";
                }
        }

        $result->close();
        $mysqli->close();

?>
</table>
<br>
<br>
<h2>Guild: <?php echo "$guildName"?> </h2>
<br>
<div class="mainPlayerBody">
	<ul class="playerList">	
<?php 
	if($guild != NULL)
		echo "
			<li id=\"guildOptions\">
				<h3>Guild Options</h3>
				<form method=\"POST\" action=\"index.php\">
					<label for=\"view\">View Guild Members:</label>
					<input type=\"hidden\" id=\"viewGuildButton\" name=\"guild\" value=\"" . $guild . "\">
					<input type=\"submit\" id = \"viewGuildButton\" value = \"View\">
				</form>
				<form method=\"POST\" action=\"index.php\">
					<label for=\"leave\">Leave Guild:</label>
					<input type=\"hidden\" id=\"leaveGuildButton\" name=\"player\" value=\"" . $playerName . "\">
					<input type=\"hidden\" id=\"leaveGuildButton\" name=\"guild\" value=\"" . $guild . "\">
					<input type=\"submit\" id = \"leaveGuildButton\" value = \"Leave\">
				</form>
				<p style=\"background-color: #009879;\">&nbsp;</p>
			</li>
			<li>
				<h3>Guild Stats</h3>
				<p>Guild Level: $guildLevel </p>
				<p>Guild Experience: $guildExperience </p>
				<p>Member Count: $guildCount </p>
				<p>Max Number of Members: $maxNumMembers </p>	
			</li>	
		";
	else
	{
		echo "
			<li>
				<h3>Guild Options</h3>
				<form method=\"POST\" action=\"index.php\">
					<label for=\"view\">Join a Guild:</label>
					<input type=\"hidden\" id=\"joinGuildButton\" name=\"guild\" value=\"" . $playerID . "\">
					<input type=\"submit\" id = \"joinGuildButton\" value = \"Join\">
				</form>
				<p style=\"background-color: #009879;\">&nbsp;</p>
			</li>
		";
	}
?>  
	</ul>
</div>
<br>
<br>

</body>
</html>