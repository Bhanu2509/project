<!DOCTYPE HTML>
<html>
<head>
<title>RegisterForm.php</title>
<!-- Using external stylesheet to make the registration form look attractive -->
<link rel = "stylesheet" type = "text/css" href="Style.css"/>
<!-- Javascript validation for user inputs -->
<style>
body {
  background-image: url('water.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<script>
function validate()
{ 
var fullname = document.register.fullname.value;
var username = document.register.username.value; 
var password = document.register.password.value;
var conpassword= document.register.conpassword.value;
if (fullname==null || fullname=="")
{ 
alert("ID  can't be blank"); 
return false; 
}

else if (username==null || username=="")
{ 
alert("Username can't be blank"); 
return false; 
}
else if(password.length&amp;lt;6)
{ 
alert("Password must be at least 6 characters long."); 
return false; 
} 
else if (password!=conpassword)
{ 
alert("Confirm Password should match with the Password"); 
return false; 
} 
} 
</script> 
</head>
<body>
 
<!-- Make a note that the method type used is post, action page is register.php and validate() function will get called on submit -->
 <div style="text-align:center"><h1>Create a new Registeration Here </h1></div>
 <br>
<form method="post" action="pro.php" onsubmit="return validate();" >
 <!-- Not advised to use table within the form to enter user details -->
<table align="center" >
<tr>
<td>ID OF ADMIN</td>
<td><input type="text" name="fullname" /></td>
</tr>
<tr>
<td>Admin name</td>
<td><input type="text" name="username" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" /></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" name="conpassword" /></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" name="conpass" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="submit" name="saswe"></input></td>
</tr>
</table>
</form>
</body>
</html>