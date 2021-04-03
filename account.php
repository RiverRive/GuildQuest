<html>
<head>
<title>Accounts</title>
</head>

<body bgcolor = Azure>

<h1>All Accounts</h1>

<?php
/* Connect to MySQL */


$mysqli = new mysqli($host, $user, $password, $dbname, $port);


/* Check connection error */
if ($mysqli->connect_errno)
{
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}
?>
</body>

</html>
