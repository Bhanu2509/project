< ?php
 
$serverName = "localhost";
$dBUsername = "system";    //Database username
$dBPassword = "password";    //Database password
$dBName = "loginsystem"; //Database servername
 
$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName, 3306);
 
if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}