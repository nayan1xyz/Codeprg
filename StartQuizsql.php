<?php session_start();
include 'dbconnection.php';

$uname = $_SESSION['username'];
$sql="UPDATE `custom_quiz` SET Time = '1' WHERE username = '$uname'";
$result=mysqli_query($conn,$sql);
header('Location: Quiz_Admin.php?sucess=2');
?>