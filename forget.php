
<?php
session_start();
include_once 'data.php';
if(isset($_POST['submit']))
{
    $user_id = $_POST['user_id'];
    $result = mysqli_query($conn,"SELECT * FROM customer where id_number='" . $_POST['user_id'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_id_number=$row['id_number'];
	$first_name=$row['first_name'];
	$password=$row['password'];
	if($user_id==$fetch_id_number) {
				$to = "your user name is: $first_name";
            
                $txt = "Your password is : $password.";
              echo "<h2>" . $to . "</h2>";
echo "<h2>" . $txt . "</h2>";
               
			}
				else{
					echo 'invalid userid';
				}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }
body {
  background-image: url('water.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>user id:</td><td><input type='text' name='user_id'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>
</html>