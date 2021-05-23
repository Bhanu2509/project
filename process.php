<?php
include_once 'data.php';
if(isset($_POST['saswe']))
{	 
	 $first = $_POST['fullname'];
                    $first_name = $_POST['username'];
	
	$last = $_POST['password'];
                    $name = $_POST['conpassword'];
$sname=$_POST['conpass'];
	 $sql = "INSERT INTO customer (id_number,first_name,password,confirm,address)
	 VALUES ('$first','$first_name','$last','$name','$sname')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>