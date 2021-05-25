<?php
include 'dbconnection.php';
?>
<?php

$main_user = $_SESSION['username'];
echo $main_user;
$number2 = 0;//1 is equal to sent friend request
$uname2=$_GET['link'];
echo $uname2;
echo $number2;
//$sql1="UPDATE `friends` SET `friend1`='$number2' WHERE `username`='$uname2'";
//$result1=mysqli_query($conn,$sql1);
//echo var_dump($result1);

echo $_SESSION[$data];
?>