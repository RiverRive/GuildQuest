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
	$stmt = $mysqli->prepare("SELECT PlayerName, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Wood, Fish, Food, Diamonds, Guild, GuildPosition FROM PLAYER, ACCOUNT WHERE PLAYER.Account = ACCOUNT.Email AND World= ? AND Username = ?;");

	$stmt->bind_param("ss", $worldName, $accountUsername);


	$worldName = $_GET['world'];
    $accountUsername = $_GET['username'];

	// run query to select player stats
	$stmt->execute();
	$result = $stmt->get_result();
	$stmt->close();
	
	
	// variable declarations
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
	$guildName = NULL;
	$guildPos = NULL;

	// getting player stats from above query
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
		$guildName = $row[12];
		$guildPos = $row[13];
	}

	$result->close();
?>

<h2>
	<a style="float: left; margin-left: 20px;" id="returnButtonPlayer" href = index.php>Logout</a>
	Welcome to <?php echo "$worldName"?>!
	<a style="float: right; margin-right: 20px;" id="returnButtonPlayer" href = worldsHome.php?username=<?php  echo "$accountUsername" ?>>Worlds</a>
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
	<form style="margin: 0px; float: left; padding-left: 20px;" method="POST" action="completeQuest.php">
		<input type="hidden" id="player" name="player" value="<?php echo "$playerName"?>">
		<input type="hidden" id="world" name="world" value="<?php echo "$worldName"?>">
		<input type="hidden" id="username" name="username" value="<?php echo "$accountUsername"?>">
		<input type="submit" id = "completeQuestButton" value = "Complete Quests">
	</form>
	Active Quests: <?php echo "$playerName"?>
	<form style="margin: 0px; float: right; padding-right: 20px;" method="POST" action="questHome.php?username=<?php  echo "$accountUsername" ?>&world=<?php  echo "$worldName" ?>&player=<?php  echo "$playerName" ?>">
		<input type="submit" id = "addQuestButton" value = "Add Quest">
	</form>
</h2>

<?php
	// run query to select all quest active for a given player
	$stmt = $mysqli->prepare("SELECT QUEST.QuestName, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel  FROM QUEST,MISSION WHERE QUEST.QuestName = MISSION.QuestName AND QUEST.MinLevel <= ? AND PlayerName = ?;");
	$stmt->bind_param("is", $level, $playerName);
	$stmt->execute();
	$result = $stmt->get_result();

	$stmt->close();
?>
<br>
<table class="displayTable">

<TR>
<TH></TH>
<?php

		// print headers
		if($head = $result->fetch_fields())
			for($i = 0; $i < $result->field_count; $i++)
			{
				$temp = $head[$i];
				echo "<TH>";
                echo " $temp->name";
                echo "</TH>";
			}
        echo "</TR>";

        if ($result)
        {
            while($row=$result->fetch_row())
            {
				echo "<tr>
						<td>	
							<form method=\"POST\" action=\"removeQuest.php\">
								<input type=\"hidden\" id=\"quest\" name=\"quest\" value=\"" . $row[0] . "\">
								<input type=\"hidden\" id=\"player\" name=\"player\" value=\"" . $playerName . "\">
								<input type=\"hidden\" id=\"world\" name=\"world\" value=\"" . $worldName . "\">
								<input type=\"hidden\" id=\"username\" name=\"username\" value=\"" . $accountUsername . "\">
								<input type=\"submit\" style=\"padding: 5px;\" id = \"removeQuestButton\" value = \"Remove Quest\">
							</form>
                		</td>";
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
	<form style="margin: 0px; float: right; padding-right: 20px;" method="POST" action="addPlot.php">
		<input type="hidden" id="player" name="player" value="<?php echo "$playerName"?>">
		<input type="hidden" id="world" name="world" value="<?php echo "$worldName"?>">
		<input type="hidden" id="username" name="username" value="<?php echo "$accountUsername"?>">
		<input type="submit" id = "addPlotButton" value = "Add Plot">
	</form>
</h2>
<br>
<?php
	// run query to select all plots
	$stmt = $mysqli->prepare("SELECT PlotID, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType FROM PLOT WHERE Owner = ?;");

	$stmt->bind_param("s", $playerName);
	$stmt->execute();
	$result = $stmt->get_result();
	$stmt->close();
?>

<table class="displayTable">

<TR>
<TH></TH>
<?php

		// print headers
		if($head = $result->fetch_fields())
			for($i = 1; $i < $result->field_count; $i++)
			{
				$temp = $head[$i];
				echo "<TH>";
                echo " $temp->name";
                echo "</TH>";
			}
        echo "</TR>";

        if ($result)
        {
            while($row=$result->fetch_row())
            {
				echo "<tr>
						<td>	
							<form method=\"POST\" action=\"removePlot.php\">
								<input type=\"hidden\" id=\"plot\" name=\"plot\" value=\"" . $row[0] . "\">
								<input type=\"hidden\" id=\"world\" name=\"world\" value=\"" . $worldName . "\">
								<input type=\"hidden\" id=\"username\" name=\"username\" value=\"" . $accountUsername . "\">
								<input type=\"submit\" style=\"padding: 5px;\" id = \"removePlotButton\" value = \"Remove Plot\">
							</form>
                		</td>";
                for($i = 1; $i < $result->field_count; $i++)
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
<?php
	$stmt = $mysqli->prepare("SELECT MaxNumMembers, GuildExperience, GuildLevel FROM GUILD WHERE GuildName = ?;");

	$stmt->bind_param("s", $guildName);
	$stmt->execute();
	$result = $stmt->get_result();

	// variable declarations
    $maxNumMembers = NULL;
    $guildExperience = NULL;
    $guildLevel = NULL;
    $guildCount = NULL;
	
	// getting guild stats if any
        if($result && $row = $result->fetch_row())
        {
            $maxNumMembers = $row[0];
            $guildExperience = $row[1];
            $guildLevel = $row[2];
            $result->close();

			$stmt = $mysqli->prepare("SELECT COUNT(*) FROM GUILD, PLAYER WHERE GuildName = PLAYER.Guild AND GuildName = ?;");
			$stmt->bind_param("s", $guildName);
			$stmt->execute();
			$result = $stmt->get_result();


        	if($result && $row = $result->fetch_row())
        	{
            	$guildCount = $row[0];
        	}
		}

	$result->close();
	$stmt->close();
	
        
?>

<br>
<h2>Guild: <?php echo "$guildName"?> </h2>
<br>
<div class="mainPlayerBody">
	<ul class="playerList">	
<?php 
	if($guildName != NULL)
	{
		// run query to select members of a guild
		$stmt = $mysqli->prepare("SELECT PlayerName, Level, Experience, Coins, Attack, Defence, Health, Wood, Fish, Food, Diamonds, GuildPosition FROM GUILD, PLAYER WHERE GUILD.GuildName = PLAYER.Guild AND GuildName = ?;");

		$stmt->bind_param("s", $guildName);
		$stmt->execute();
		$result = $stmt->get_result();
		$stmt->close();

		echo "
			<li id=\"guildOptions\">
				<h3>Guild Options</h3>
				<form method=\"POST\" action=\"leaveGuild.php\">
					<label for=\"leave\">Leave Guild:</label>
					<input type=\"hidden\" id=\"player\" name=\"player\" value=\"" . $playerName . "\">
					<input type=\"hidden\" id=\"guild\" name=\"guild\" value=\"" . $guildName . "\">
					<input type=\"hidden\" id=\"world\" name=\"world\" value=\"" . $worldName . "\">
					<input type=\"hidden\" id=\"username\" name=\"username\" value=\"" . $accountUsername . "\">
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
		echo "			</ul>
					</div>
				<br>";
		echo "	<br>
					<h2>Guild Members: $guildName </h2>
				<br>";		

		echo "<table class=\"displayTable\">";

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

		echo "</table>";

		$result->close();
	}
	else
	{
		echo "
			<li>
				<h3>Guild Options</h3>
				<form method=\"POST\" action=\"joinGuild.php\">
					<label for=\"view\">Join a Guild:</label>
					<input type=\"text\" id=\"guildName\" name=\"guildName\" placeholder=\"Enter guild name..\">
					<input type=\"hidden\" id=\"username\" name=\"username\" value=\"" . $playerName . "\">
					<input type=\"hidden\" id=\"world\" name=\"world\" value=\"" . $worldName . "\">
					<input type=\"hidden\" id=\"accountName\" name=\"accountName\" value=\"" . $accountUsername . "\">
					<input type=\"submit\" id = \"joinGuildButton\" value = \"Join\">
				</form>
				<p style=\"background-color: #009879;\">&nbsp;</p>
			</li>
		";
	}

	$mysqli->close();
?>  
<br>

</body>
</html>
