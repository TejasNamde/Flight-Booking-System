<?php
include_once 'dbconnect.php';

$sql = "SELECT * FROM airport";
if(! ($result = pg_query($conn, $sql)))
{
	
	echo "Errormessage: ".pg_error($conn)."\n";
}
else
{
	echo "<table>
		<tr><th>code</th>
		<th>name</th>
		</tr>";
	while($row = pg_fetch_array($result))
	{
		echo "<tr><td>".$row['code']."</td><td>".$row['name']."</td></tr>";
	}
	echo "</table>";
}

pg_close($conn);


?>