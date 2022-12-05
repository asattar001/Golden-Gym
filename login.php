<!-- <!DOCTYPE html>
<html>
<head>
<title>Login Page</title>

</head>
<body>

<p id="login"> 
<h4>Login</h4> 

<div id="box">
		
<form method="post">
<input type="text" required="required" placeholder="username" name="username"></input> <br>
<input type="password" required="required" placeholder="password" name="password"></input> <br>
<button class="but" type="submit">Login</button>
<a href="signup.php">Sign up</a>
</form>

</div>

</body>
</html> -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>

    <p id="login"> 

    <div class="center">
      <h1 class="title">Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text"  required="required" name="username"></input> <br>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required="required"  name="password"></input> <br>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="signup.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>



<?php 
include 'databaseConnect.php';
include 'insert.php';
session_start();



if($_SERVER['REQUEST_METHOD'] == "POST")
{

$username = $_POST['username'];
$password = $_POST['password'];

if(!empty($username) && !empty($password) && !is_numeric($username))
{

$q = "select * from users where username = '$username'";
$r = mysqli_query($connect, $q);

if($r)
{

if($r && mysqli_num_rows($r) > 0)
{
$d = mysqli_fetch_assoc($r);
					
if($d['password'] === $password)
{
$_SESSION['userID'] = $d['userID'];
header("Location: Website 350.htm");
}
}
}
echo " ";
echo " ";
echo "username or password is not match";
}
else
{
echo " ";
echo " ";
echo "username or password is not match";
}
}
?>