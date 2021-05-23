<?php
include_once 'data.php';
if(isset($_POST['saw']))
{	 
	   $first_name = $_POST['idsa'];$pass=$_POST['id'];
	$password= $_POST['ids'];
$pa=$_POST['date'];
  $as= $_POST['idv'];
 $sql="INSERT INTO data (user_name,water_quantity,dealer_name,date_supply,address)
	 VALUES ('$first_name','$pass','$password','$pa','$as')";
                
 if (mysqli_query($conn, $sql)) {
session_start();

header("Location:newfile.php");
	
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

if(isset($_POST['sawing']))
{
session_start();

header("Location:loginnew.php");
}
?>