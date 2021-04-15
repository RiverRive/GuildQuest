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
        $result = $mysqli->query("SELECT * FROM WORLD;");
?>

<table class="displayTable">

<tr>
<TH></TH>
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
			echo "<tr>
					<td>
						<form method=\"POST\" action=\"playerHome.php\">
							<input type=\"hidden\" id=\"joinWorldButton\" name=\"username\" value=\"" . $_GET["username"] . "\">
							<input type=\"hidden\" id=\"joinWorldButton\" name=\"world\" value=\"" . $row[0] . "\">
							<input type=\"submit\" id=\"joinWorldButton\" value=\"Join\">
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
	$mysqli->close();

?>

</table>

<br>
<br>
<a href = index.php>Logout</a>


</body>
</html>
