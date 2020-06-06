<?php
$host ="localhost";
$username ="root";
$password ="";
$db_name ="travelancar";
$dbconnect = new mysqli($host, $username, $password, $db_name);

if (mysqli_connect_errno()) {
	echo "Sorry, you can't connect to database";
	exit;
}
?>