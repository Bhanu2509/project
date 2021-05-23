<html>
<style>
body {
  background-image: url('water.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

</style>
<?php
include_once 'data.php';
if(isset($_POST['saws']))
{	 
	   $first_name = $_POST['ids'];
	
         $da1=$_POST['idv'];
$da2=$_POST['idc'];



$sq="select sum(water_quantity) from data where dealer_name='$first_name' AND date_supply BETWEEN '$da1' AND 'da2'";
if($retv= mysqli_query( $conn,$sq))
{ 
    
   while($row = mysqli_fetch_array($retv, MYSQLI_ASSOC)) {
      echo "TOTAL :{$row['sum(water_quantity)']}  liters supplied<br> ";}
if(! $retv ) {
      die('Could not get data: ' . mysqli_error());
   }



   echo "Fetched data from database of mysql\n";

  mysqli_close($conn);
} 
 	
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }




if(isset($_POST['sawsing']))
{
session_start();

header("Location:adminlogin.php");
}
?>
</body>