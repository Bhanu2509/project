<?php
$c=mysql_connect("localhost","root","") or die(mysql_error());
$x=mysql_select_db("college",$c);
mysql_query($x);
echo "connected to database"."<br>";
$q="CREATE TABLE emp(eid INT,PRIMARY KEY(eid),name VARCHAR(20),age INT(30))" or die(mysql_error());
mysql_query($q);
echo "Database created"."<br>";
?>
