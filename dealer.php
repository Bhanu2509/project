<!DOCTYPE html>
<html>
<head>
<title>PHP insertion</title>
<link rel = "stylesheet" type = "text/css" href="Style.css"/>

<style>
body {
  background-image: url('water.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

</style>
</head>
<body>
<div style="text-align:center"><h1>Create a new  Dealer Registeration Here </h1></div>
 <br>
<form action="proce.php" method="post" name="register">
<!-- Method can be set as POST for hiding values in URL-->
<table align="center">
<tr>
<td>ID OF DEALER:</td><td>
<input name="id" type="text" /></td></tr>
<tr><td>DEALER NAME:</td><td>
<input  name="first_name" type="text" / ></td></tr>
<tr><td>PASSWORD:</td><td>
<input  name="last_name" type="password" /></td></tr>
<tr><td>RE- PASSWORD:</td><td>
<input  name="last" type="password"/ ></td></tr>
<tr><td>SECTION:</td><td>
<input type="text" name="addres"/></td></tr><tr><td></td>
<td><input name="save" type="submit" value="submit"/></td></tr></table>
</form>
</div>
</div>

</body>
</html>