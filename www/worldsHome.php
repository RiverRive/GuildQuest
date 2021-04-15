<html>
<head>
<title>Worlds</title>
<link rel="stylesheet" href="tables.css">
<link rel="stylesheet" href="adminPages.css">
</head>

<body class="displayPage">
<h2>Worlds</h2>

<?php
	
	require "guildQuestConfig.php";

	$mysqli = new mysqli($host, $user, $password, $dbname, $port);

        if ($mysqli->connect_errno)
        {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
        }



        // run query to select all from Account table
        $activeWorlds = $mysqli->query("SELECT DISTINCT WorldID, WorldName, MaxPlots, MaxPlayerCapacity, WorldType, InitialPlotPrices, PvP FROM WORLD, PLAYER, ACCOUNT 
										WHERE PLAYER.World = WORLD.WorldID AND PLAYER.Account = ACCOUNT.Email AND Username = \"" . $_GET["username"] . "\";");
		$unregisteredWorlds = $mysqli->query("SELECT WorldID, WorldName, MaxPlots, MaxPlayerCapacity, WorldType, InitialPlotPrices, PvP FROM WORLD 
												WHERE WorldID NOT IN
												(SELECT WorldID FROM WORLD, PLAYER, ACCOUNT 
												WHERE PLAYER.World = WORLD.WorldID AND PLAYER.Account = ACCOUNT.Email AND Username = \"" . $_GET["username"] . "\");");
?>

<table class="displayTable">

<tr>
<TH></TH>
<?php
        // print headers
		if($head = $activeWorlds->fetch_fields())
			for($i = 1; $i < $activeWorlds->field_count; $i++)
			{
				$temp = $head[$i];
				echo "<TH>";
                echo " $temp->name";
                echo "</TH>";
			}
        echo "</TR>";

	if ($activeWorlds)
	{
		while($row=$activeWorlds->fetch_row())
		{	
			echo "<tr>
					<td>
						<form method=\"POST\" action=\"playerHome.php?username=" . $_GET["username"] . "&world=" . $row[0] . "\">
							<input type=\"hidden\" id=\"joinWorldButton\" name=\"username\" value=\"" . $_GET["username"] . "\">
							<input type=\"hidden\" id=\"joinWorldButton\" name=\"world\" value=\"" . $row[0] . "\">
							<input type=\"submit\" id=\"joinWorldButton\" value=\"Join\">
						</form>
					</td>";
			for($i = 1; $i < $activeWorlds->field_count; $i++)
			{

				echo "<td> $row[$i] </td>";
			}
			echo "</tr>";
		}
	}

	$activeWorlds->close();

?>

</table>

<h2>Unregistered Worlds</h2>

<table class="displayTable">

<tr>
<TH></TH>
<?php
        // print headers
        if($head = $unregisteredWorlds->fetch_fields())
			for($i = 1; $i < $unregisteredWorlds->field_count; $i++)
			{
				$temp = $head[$i];
				echo "<TH>";
				echo " $temp->name";
				echo "</TH>";
			}
		echo "</TR>";

	if ($unregisteredWorlds)
	{
		while($row=$unregisteredWorlds->fetch_row())
		{	
			echo "<tr>
					<td>
						<form method=\"POST\" action=\"newWorldLogin.php\">
							<input type=\"hidden\" id=\"joinWorldButton\" name=\"username\" value=\"" . $_GET["username"] . "\">
							<input type=\"hidden\" id=\"joinWorldButton\" name=\"world\" value=\"" . $row[0] . "\">
							<input type=\"hidden\" id=\"joinWorldButton\" name=\"worldName\" value=\"" . $row[1] . "\">
							<input type=\"submit\" id=\"joinWorldButton\" value=\"Add\">
						</form>
					</td>";
			for($i = 1; $i < $unregisteredWorlds->field_count; $i++)
			{

				echo "<td> $row[$i] </td>";
			}
			echo "</tr>";
		}
	}

	$unregisteredWorlds->close();
	$mysqli->close();

?>

</table>

<br>
<br>
<a href = index.php>Logout</a>


</body>
</html>
