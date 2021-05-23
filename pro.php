<?php
include_once 'data.php';
if(isset($_POST['saswe']))
{	 
	 $first = $_POST['fullname'];
                    $first_name = $_POST['username'];
	 $last_name = $_POST['password'];
	$last = $_POST['conpassword'];
                    $name = $_POST['conpass'];
	 $sql = "INSERT INTO admin (id_number,first_name,password,repassword,section_category)
	 VALUES ('$first','$first_name','$last_name','$last','$name')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>