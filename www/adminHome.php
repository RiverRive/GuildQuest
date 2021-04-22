<html>
<head>
<title>Administration</title>
<link rel="stylesheet" href="app.css">
<link rel="stylesheet" href="tables.css">
<link rel="stylesheet" href="adminPages.css">
</head>
<body class="adminHome">
	<h1>Welcome Admin!</h1>

	<table class="adminTable">
	<th>Display Tables</th>
	<tr>
		<td><a href = displayAccounts.php>Display User Accounts</a></td>
	</tr>
	<tr>
		<td><a href = displayPlayers.php>Display Players</td>
	</tr>
	<tr>
		<td><a href = displayWorlds.php>Display Worlds</td>
	</tr>
	<tr>
		<td><a href = displayQuests.php>Display Quests</td>
	</tr>
	<tr>
		<td><a href = displayGuilds.php>Display Guilds</td>
	</tr>
	<tr>
		<td><a href = displayPlots.php>Display Plots</td>
	</tr>
	<tr>
		<td><a href = displayMissions.php>Display Missions</td>
	</tr>
	</table>

	<br>
	<br>
	<div class="adminHome">
	<h2>Account Actions</h2>

	<form method="POST" action="adminActions.php" class="adminForm">
		<div class="row">
		  <div class="col-left">
		    <label for="user">Username:</label>
		  </div>
		  <div class="col-right">
		    <input type="text" id="user" name="user" placeholder="Enter username.."><br>
		  </div>
		</div>
		<br>
		<select id="adminAction" name="adminAction">
			<option value="banUser">Ban User</option>
			<option value="unBanUser">Unban User</option>
			<option value="removeUser">Remove Account</option>
		</select>
		<input type="submit" id="performAction" value="Perform Action">
	</form>

	<br>
	<br>

	<div class="adminHome">
        <h2>Search</h2>
	<h3>Note: not all values need to be filled in for search</h3>
        <form method="POST" action="search.php" class="adminForm">
                <div class="row">
                  <div class="col-left">
                    <label for="user">Username:</label>
                  </div>
                  <div class="col-right">
                    <input type="text" id="user" name="user" placeholder="Enter username.."><br>
                  </div>
		</div>
		<div class="row">
                  <div class="col-left">
                    <label for "guildName">Guild Name:</label>
                  </div>
                  <div class="col-right">
                    <input type="text" id="guildName" name="guildName" placeholder="Enter guild name.."><br>
                  </div>
                </div>
		<div class="row">
                  <div class="col-left">
                    <label for "moneySpent">Money Spent:</label>
                  </div>
                  <div class="col-right">
                    <input type="text" id="moneySpent" name="moneySpent" placeholder="Enter minimum money spent.."><br>
                  </div>
                </div>
		<div class="row">
                  <div class="col-left">
                    <label for "worldName">World Name:</label>
                  </div>
                  <div class="col-right">
                    <input type="text" id="worldName" name="worldName" placeholder="Enter World name.."><br>
                  </div>
                </div>

                <br>
                <select id="search" name="search">
                        <option value="findUser">Find Single User</option>
                        <option value="findBanned">Find Banned Users</option>
			<option value="findGuild">Find Guild</option>
			<option value="findSpender">Find Spenders</option>
			<option value="findWorld">Find World</option>
                </select>
                <input type="submit" id="performAction" value="Perform Action">
        </form>


	<br>
	<br>
	<h2>Create World</h2>

	<form method="POST" action="createWorld.php" class="adminForm">
		<div class="row">
		  <div class="col-left">
		    <label for="worldName">World Name:</label>
		  </div>
		  <div class="col-right">
		    <input type="text" id="worldName" name="worldName" placeholder="Enter world name.."><br>
		  </div>
		</div>
		
		<div class="row">
		  <div class="col-left">
		    <label for="maxPlots">Max Plots:</label>
		  </div>
		  <div class="col-right">
		    <input type="text" id="maxPlots" name="maxPlots" placeholder="Enter max plots.."><br>
		  </div>
		</div>

		<div class="row">
		  <div class="col-left">
		    <label for ="playerCap">Player Capacity:</label>
		  </div>
		  <div class="col-right">
		    <input type="text" id="playerCap" name="playerCap" placeholder="Enter player capacity.."><br>
		  </div>
		</div>

		<div class="row">
  		  <div class="col-left">
		    <label for="plotPrices">Plot Prices:</label>
		  </div>
		  <div class="col-right">
		    <input type="text" id="plotPrices" name="plotPrices" placeholder="Enter initial plot prices.."><br>
		  </div>
		</div>

		<div class="row">
		  <div class="col-left">
		    <label for="pvp">PVP:</label>
		  </div>
  		  <div class="col-right">
   		    <label for="TRUE">Yes</label>
                    <input type="radio" id="TRUE" name="pvp" value=TRUE>
                    <label for="FALSE">No</label>
                    <input type="radio" id="FALSE" name="pvp" value=FALSE><br>
		  </div>
		</div>
		
		<br>
		<input type="submit" id="createWorld" value="Create World">
	</form>
	</div>

	 <br>
        <br>
        <h2>Create Quest</h2>

        <form method="POST" action="createQuest.php" class="adminForm">
                <div class="row">
                  <div class="col-left">
                    <label for="questName">Quest Name:</label>
                  </div>
                  <div class="col-right">
                    <input type="text" id="questName" name="questName" placeholder="Enter quest name.."><br>
                  </div>
		</div>

		<div class="row">
                  <div class="col-left">
                    <label for="questDescription">Quest Description:</label>
                  </div>
                  <div class="col-right">
                    <input type="text" id="questDescription" name="questDescription" placeholder="Enter description.."><br>
                  </div>
                </div>

		<div class="row">
                  <div class="col-left">
                    <label for="coinsGain">Coins Gained:</label>
                  </div>
                  <div class="col-right">
                    <input type="text" id="coinsGain" name="coinsGain" placeholder="Enter coins gained.."><br>
                  </div>
                </div>

		<div class="row">
                  <div class="col-left">
                    <label for="xpGain">XP Gained:</label>
                  </div>
                  <div class="col-right">
                    <input type="text" id="xpGain" name="xpGain" placeholder="Enter XP gained.."><br>
                  </div>
                </div>

		<div class="row">
                  <div class="col-left">
                    <label for="attackGain">Attack Gained:</label>
                  </div>
                  <div class="col-right">
                    <input type="text" id="attackGain" name="attackGain" placeholder="Enter attack gained.."><br>
                  </div>
                </div>
	
		<div class="row">
                  <div class="col-left">
                    <label for="defGain">Defence Gained:</label>
                  </div>
                  <div class="col-right">
                    <input type="text" id="defGain" name="defGain" placeholder="Enter defence gained.."><br>
                  </div>
                </div>

		<div class="row">
                  <div class="col-left">
                    <label for="healthGain">Health Gained:</label>
                  </div>
                  <div class="col-right">
                    <input type="text" id="healthGain" name="healthGain" placeholder="Enter health gained.."><br>
                  </div>
                </div>

		<div class="row">
                  <div class="col-left">
                    <label for="timeLimit">Time Limit:</label>
                  </div>
                  <div class="col-right-time">
		    <input type="text" id="hr" name="hr" placeholder="Hour..">
		    <input type="text" id="min" name="min" placeholder="Min..">
		    <input type="text" id="sec" name="sec" placeholder="Sec..">
                  </div>
                </div>

		<div class="row">
                  <div class="col-left">
                    <label for="minLevel">Minimum Level:</label>
                  </div>
                  <div class="col-right">
                    <input type="text" id="minLevel" name="minLevel" placeholder="Enter minimum level.."><br>
                  </div>
                </div>




		<br>
                <input type="submit" id="createQuest" value="Create Quest">

	</form>

	<br>
	<br>
	<br>
	<a href = index.php id="returnButton">Logout</a>

	<br>
	<br>
</body>


</html>
