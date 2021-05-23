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
session_start();
if(isset($_POST['sas']))
{
    extract($_POST);
    include 'data.php';
  $email = $_POST['user'];
  
  $pass= $_POST['password'];
   
if (empty($email))
    {
   
echo "<h1>Hello customer plz fill up the user name fields<h1><br>";

      exit();
    }
  
 if (empty($pass))
    {
   
echo "<h1>Hello customer plz fill up the password fields<h1><br>";

      exit();
    }
  
    $sql=mysqli_query($conn,"SELECT * FROM customer where first_name='$email' and password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id_number"] = $row['id_number'];
        $_SESSION["first_name"]=$row['first_name'];
        $_SESSION["password"]=$row['password'];
        $_SESSION["confirm"]=$row['confirm']; 
       include_once 'newfile.php';  
    }
    else
    {
        echo "Invalid user name/Password";
    }
}
?>
</html>
