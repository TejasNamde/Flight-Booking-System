<?php
$flightno = $_GET['flightno'];
include_once 'dbconnect.php';

$var = array();
$sql = "SELECT * FROM flight WHERE flight.number = '$flightno'";
if(! ($result = pg_query($conn, $sql)))
{
	
	echo "Errormessage: ".pg_error($conn)."\n";
}
else
{
	while($row = pg_fetch_object($result))
	{
		$var[] = $row;	
	}
	echo '{"flights":'.json_encode($var).' , ';
}

$var2 = array();
$sql = "SELECT * FROM class WHERE number = '$flightno'";
if(! ($result = pg_query($conn, $sql)))
{
	echo "Errormessage: ".pg_error($conn)."\n";
}
else
{
	while($row = pg_fetch_object($result))
	{
		$var2[] = $row;	
	}
	echo '"classes":'.json_encode($var2).'}';
}

pg_close($conn);


?>