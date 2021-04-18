<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GuildQuest Home</title>
	<link rel="stylesheet" href="app.css">
</head>
<body class = "homeBody">
	<div class="header">
		<h1>Welcome to GuildQuest!</h1>
	</div>
        <div class="login">
	<h2>Login</h2>
	<form method="POST" action="login.php">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password"><br>
                <input type="submit" id = "loginButton" value = "Login">
        </form>
	</div>
	<br>
	<br>
	<br>
	<div class="signup">
	<h2>Sign Up</h2>
	<form method="POST" action="signup.php">
		<label for="signUpEmail">Email:</label><br>
		<input type="text" id="signUpEmail" name="signUpEmail"><br>
		<label for="signUpUser">Username:</label><br>
		<input type="text" id="signUpUser" name="signUpUser"><br>
		<label for="signUpPass">Password:</label><br>
		<input type="password" id="signUpPass" name="signUpPass"><br>
		<label for="robot">I am not a robot</label>
		<input type="checkbox"><br>	
		<input type="submit" id="signupButton" value="Sign Up">
		

	</form>
	</div>
	<br>
	<br>
	<br>
	<div class = "login">
	<h2>View Leaderboards</h2>
	<a href="leaderboard.php">Leaderboards</a>
	</div>

</body>
</html>
