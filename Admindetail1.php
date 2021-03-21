<?php
include_once 'dbconnect.php';

$sql = "SELECT * FROM airplane";
if(! ($result = pg_query($conn, $sql)))
{
	
	echo "Errormessage: ".pg_error($conn)."\n";
}
else
{
	echo "<table>
		<tr><th>ID</th>
		<th>Type</th>
		<th>Company</th></tr>";
	while($row = pg_fetch_array($result))
	{
		echo "<tr><td>".$row['ID']."</td><td>".$row['type']."</td><td>".$row['company']."</td></tr>";
	}
	echo "</table>";
}

pg_close($conn);


?>