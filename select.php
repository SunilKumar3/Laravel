<?php
$host ="host=127.0.0.1";
$port ="port=5432";
$dbname ="dbname=mydb";
$credentials = "user=postgres password=dubbaka123";

$db = pg_connect("$host $port $dbname $credentials");
if(!$db){
	echo "Error: Unable to open database\n";
}else {
	echo "Opened database successfully\n";
}

$sql =<<<EOF
SELECT * from company;
EOF;
$ret = pg_query($db,$sql);
if(!$ret){
	echo pg_last_error($db);
	exit;
}
while($row =pg_fetch_row($ret)){
	echo "ID =".$row[0]."\n";
	echo "<br><br>";
	echo "NAME =".$row[1]."\n";
	echo "<br><br>";
	echo "ADDRESS =".$row[2]."\n";
	echo "<br><br>";
	echo "SALARY = ".$row[4]."\n\n";
	echo "<br><br>";
}
echo "Operation done successfully\n";
pg_close($db);
?>