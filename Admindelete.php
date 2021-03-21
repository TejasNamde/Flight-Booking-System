<?php
$flightno = $_GET['flightno'];

include_once 'dbconnect.php';

$sql = "DELETE FROM flight WHERE number = '$flightno'";
if(! pg_query($conn, $sql))
{
	
	echo "Errormessage: ".pg_error($conn)."\n";
}
else
{
	echo "Deleted!";	
}

pg_close($conn);

?>