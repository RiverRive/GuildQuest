<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>New Player</title>
	<link rel="stylesheet" href="adminPages.css">
</head>
<body class = "displayPage">

<?php
    $accountUsername = $_POST['username'];
    $worldID = $_POST['world'];
    $worldName = $_POST['worldName'];
?>

	<div class="header">

		<h1>Welcome to <?php echo "$worldName"; ?>!</h1>
	</div>
        <div class="login">
	<h2>Register</h2>
	<form method="POST" action="addWorld.php">
                <label for="username">Player Name:</label><br>
                <input type="text" id="playerName" name="playerName"><br>
                <input type="hidden" id="world" name="world" value="<?php echo "$worldID"; ?>"><br>
				<input type="hidden" id="world" name="username" value="<?php echo "$accountUsername"; ?>"><br>
				<input type="hidden" id="world" name="worldName" value="<?php echo "$worldName"; ?>"><br>
                <input type="submit" id = "loginButton" value = "Login">
        </form>
	</div>
	<br>


<br>
<a href = worldsHome.php?username=<?php  echo "$accountUsername" ?>>Worlds</a>
<br>
<br>
<a href = index.php>Logout</a>

</body>
</html>



