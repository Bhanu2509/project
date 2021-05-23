<?php
include_once 'data.php';
if(isset($_POST['save']))
{	 
	 $first = $_POST['id'];
                    $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	$last = $_POST['last'];
                    $name = $_POST['addres'];
	 $sql = "INSERT INTO dealer (id_number,first_name,password,repassword,section_category)
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