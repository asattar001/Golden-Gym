<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>

</head>
<body>
<h1> Login Successful <h1>
<a href="logout.php">Logout</a>
</body>
</html>


<?php 
include 'databaseConnect.php';
include 'insert.php';
session_start();
$data = check_login($connect);
?>
