s<html>
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
</style>  

</head>
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h2>Login Here</h2>
        <form method ="post" action="checking.php"> 
            <p>DealerName</p>
            <input type="text" name="user" placeholder="Enter DealerName" id="a">
            <p>Password</p>
            <input type="password"  name="password" placeholder="Enter Password" id="b">
            <input type="submit" value="Login" name="sasvsa"><br><br>
            <a href="dealer.php">Don't have an account?</a>
        </form>
    </div>
</body>
</html>