<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline2";

// Create connection
$conn = pg_connect($servername, $username, $password, $dbname);

// Check connection
if(pg_connect_errno()) {
	echo "Failed to connect to MySQL: " . pg_connect_error();
}
?>