<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GuildQuest Home</title>
	<link rel="stylesheet" href="app.css">
</head>
<body>
	<div class="header">
		<h1>Welcome to GuildQuest!</h1>
	</div>
        <div class="login">
        <form method="post" action="processLogin.php">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="password">Password:</label><br>
                <input type="text" id="password" name="password"><br>
                <input type="submit" id = "loginButton" value = "Login">
                </form>
        </div>

</body>
</html>
