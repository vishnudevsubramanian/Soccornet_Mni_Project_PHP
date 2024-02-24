<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
if($conn->connect_error)
{
die("connection failed :".$conn->connect_error);
}
echo "connected successfully";
?>

