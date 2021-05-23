<?php
include_once 'data.php';
if(isset($_POST['saws']))
{	 
	   $first_name = $_POST['ids'];
	
         $da1=$_POST['idv'];
$da2=$_POST['idc'];
 $sql = "SELECT  user_name,water_quantity,dealer_name,date_supply,address from  data   WHERE  dealer_name='$first_name' AND date_supply BETWEEN '$da1' AND 'da2'";
  

  if($retval = mysqli_query( $conn,$sql))
{ 
    
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
      echo "USER ID :{$row['user_name']}  <br> ".
               "DEALER_NAME;{$row['dealer_name']} <br>".
         "WATER QUANTITY TO USER : {$row['water_quantity']} <br> ".
         "DATE TO SUPPLY : {$row['date_supply']} <br> ".
 "ADDRESS TO SUPPLY : {$row['address']} <br> ".
         "--------------------------------<br>";
   
}
if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
   echo "Fetched data successfully\n";
  mysqli_close($conn);
} 
 	
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }




if(isset($_POST['sawsing']))
{
session_start();

header("Location:loginnew.php");
}

?><!DOCTYPE HTML>
<html>
<head>THANK YOU </head>
<style>
body {
  background-image: url('water.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
</head>
</html>
<!DOCTYPE HTML>




 