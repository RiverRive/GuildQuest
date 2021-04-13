<html>
<head>
<title>Administration</title>
<link rel="stylesheet" href="app.css">
<link rel="stylesheet" href="tables.css">
</head>
<body class="adminHome">
<center>
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
	</table>

	<br>
	<br>
	<div>
	<h2>Remove An Account</h2>

	<form method="POST" action="removeAccount.php">
		<label for="rmuser">Username:</label>
		<input type="text" id="rmuser" name="rmuser"><br>
		<input type="submit" id="removeAccount" value="Remove Account">
	</form>

	<h2>Ban An Account</h2>
	<form method="POST" action="banAccount.php">
                <label for="banuser">Username:</label>
                <input type="text" id=banuser" name="banuser"><br>
                <input type="submit" id="banAccount" value="Ban Account">
        </form>

	</div>


	<br>
	<br>
	<br>
	<a href = index.php>Logout</a>


</body>


</html>
