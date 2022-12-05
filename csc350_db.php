<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "csc350_project";

$conn = mysqli_connect( $dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) { // Check connection
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// $conn->close();
?>