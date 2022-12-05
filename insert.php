<?php

function random_num()
{

$t = "";
for ($i=0; $i < 9; $i++) 
{
$t .= rand(0,9);
}
return $t;
}

function check_login($connect)
{

if(isset($_SESSION['userID']))
{

$id = $_SESSION['userID'];
$q = "select * from users where userID = '$id'";

$r = mysqli_query($connect,$q);
if($r && mysqli_num_rows($r) > 0)
{

$d = mysqli_fetch_assoc($r);
return $d;
}
}
header("Location: login.php");
}
