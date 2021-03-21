<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline2";

// Create connection
$con = pg_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die('Could not connect: ' . pg_error($con));
} 
?>