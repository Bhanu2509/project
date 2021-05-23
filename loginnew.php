<html>
<head>
<title>Login Form Design</title>
<link rel="stylesheet" type="text/css" href="style1.css">

 <style>
body {
  background-image: url('water.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>   <script>
function validate()
{ 
var username = document.register.user.value;
 
var password = document.register.password.value;

if (username==null || username=="")
{ 
alert("Username can't be blank"); 
return false; 
}
else if(password.length&amp;lt;6)
{ 
alert("Password must be at least 6 characters long."); 
return false; 
} 
else if (password=null || password=="")
{ 
alert(" Password should not blank"); 
return false; 
} 
} 
</script> 

</head>
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h2>Login Here</h2>
        <form method ="post" action="check.php" onsubmit="return validate();"> 
            <p>Username</p>
            <input type="text" name="user" placeholder="Enter Username" id="a">
            <p>Password</p>
            <input type="password"  name="password" placeholder="Enter Password" id="b">
            <input type="submit" value="Login" name="sas"><br><br>
 <a href="forget.php">Lost your password?</a><br>
            <a href="sample2.php">Don't have an account?</a>
        </form>
    </div>
</body>
</html>




