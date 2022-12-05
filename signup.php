<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>

    <p id="login"> 

    <div class="center">

      <form method="post">
        <div class="txt_field">
          <input type="text" required = "required" name="username"></input></style><br> 
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required="required" name="password"></input> <br>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Sign Up">
        <div class="signup_link">
           <a href="login.php">Back to Login</a>
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
$userID = random_num(9);
$username = $_POST['username'];
$password = $_POST['password'];
$q = "insert into users (userID,username,password) values ('$userID','$username','$password')";
mysqli_query($connect, $q);
header("Location: login.php");
}
?>
