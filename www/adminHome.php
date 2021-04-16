<html>
<head>
<title>Administration</title>
<link rel="stylesheet" href="app.css">
<link rel="stylesheet" href="tables.css">
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
	<div>
	<h2>Account Actions</h2>

	<form method="POST" action="adminActions.php">
		<label for="user">Username:</label>
		<input type="text" id="user" name="user"><br>
		<select id="adminAction" name="adminAction">
			<option value="banUser">Ban User</option>
			<option value="unBanUser">Unban User</option>
			<option value="removeUser">Remove Account</option>
		</select>
		<input type="submit" id="performAction" value="Perform Action">
	</form>


	</div>


	<br>
	<br>
	<br>
	<a href = index.php>Logout</a>


</body>


</html>
