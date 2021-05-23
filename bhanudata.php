<html>
<head>
<title>
</title>
</head>
<body>
<center>
<form method="post" action="bhanudata.php">
EID : <input type="text" name="e" value=""><br>
NAME : <input type="text" name="n" value=""><br>
AGE : <input type="text" name="a" value=""><br>

<input type="submit" name="s" value="submit"><br>
</form>
</center>
<?php
$c=mysql_connect("localhost","root","") or die(mysql_error());
$x=mysql_select_db("college",$c);

$eid=$_POST['e'];
$name=$_POST['n'];
$age=$_POST['a'];
if($eid !=''||$name !=''){
$query = mysql_query("insert into emp(eid, name,age) values ($eid, '$name', $age)");
echo "Row Inserted"."<br>";

mysql_close($c); // Closing Connection with Server
?>
</body>
</html>

