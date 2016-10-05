<?php
$host ="host=127.0.0.1";
$port ="port=5432";
$dbname = "dbname=mydb";
$credentials ="user=postgres password=dubbaka123";

$db= pg_connect("$host $port $dbname $credentials");
if(!$db){
	echo "Error: Unable to open database\n";
}else{
	echo "Opened database successfully\n";
}

$sql =<<<EOF
INSERT INTO company(ID, NAME,AGE,ADDRESS,SALARY) VALUES(1,'Paul',32,'Hyderabad',20000.00);
INSERT INTO company(ID, NAME, AGE, ADDRESS, SALARY) VALUES(2,'Allen',25,'Texas',15000.00);
INSERT INTO company(ID, NAME, AGE, ADDRESS, SALARY) VALUES (3, 'Teddy', 23,'Norway',20000.00);
INSERT INTO company(ID, NAME, AGE, ADDRESS, SALARY) VALUES (4, 'Mark',25,'Rich-Mond',65000.00);
EOF;

$ret=pg_query($db,$sql);
if(!$ret){
	echo pg_last_error($db);
}else{
	echo "Records created Successfully\n";
}
pg_close($db);
?>