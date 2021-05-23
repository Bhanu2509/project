
<!DOCTYPE HTML>
<html>
<head>
<title>RegisterForm.php</title>
<!-- Using external stylesheet to make the registration form look attractive -->
<link rel = "stylesheet" type = "text/css" href="Style.css"/>
<!-- Javascript validation for user inputs -->
<script>
function validate()
{ 
var fullname = document.register.id.value;
var email = document.register.first_name.value;
var password = document.register.last_name.value; 
var repassword = document.register.last.value;
var conpassword= document.register.addres.value;
if (fullname==null || fullname=="")
{ 
alert("id  can't be blank"); 
return false; 
}
else if (email==null || email=="")
{ 
alert("name can't be blank"); 
return false; 
}

else if(password.length&amp;lt;6)
{ 
alert("Password must be at least 6 characters long."); 
return false; 
} 
else if (password!=repassword)
{ 
alert("Confirm Password should match with the Password"); 
return false; 
} 
else if (conpassword==null || conpassword=="")
{ 
alert("addresses can't be blank"); 
return false; 
}
} 
</script> 
</head>
<body>
 
<!-- Make a note that the method type used is post, action page is register.php and validate() function will get called on submit -->
 <div style="text-align:center"><h1>PHP Registration application using MySQL</h1></div>
 <br>
<form method="post" action="process.php" onsubmit="return validate();" >
 <!-- Not advised to use table within the form to enter user details -->
<table align="center" >
<tr>
<td>ID OF USER</td>
<td><input type="text" name="id" /></td>
</tr>
<tr>
<td>USERNAME</td>
<td><input type="text" name="first_name" /></td>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="text" name="last_name" /></td>
</tr>
<tr>
<td>RE-Password</td>
<td><input type="text" name="last" /></td>
</tr>
<tr>
<td>ADDRESSES</td>
<td><input type="text" name="addres" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="save" value="submit"></input><input
type="reset" value="Reset"></input></td>
</tr>
</table>
</form>
</body>
</html>