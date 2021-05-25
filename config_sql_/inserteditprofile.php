<?php

// session_start();
include '../dbconnection.php';
session_start();
$sql="SELECT * FROM `codeprg14`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
   
if($row['username']==$_SESSION['username']){
    
$userupdate=$_SESSION['username'];

if(isset($_POST['F_name'])){
$fname = mysqli_escape_string($conn, $_POST['F_name']);
$lname = mysqli_escape_string($conn, $_POST['L_name']);
$gender = mysqli_escape_string($conn, $_POST['gender']);
$Status =mysqli_escape_string($conn, $_POST['Status']);
$Birth = mysqli_escape_string($conn, $_POST['Birth']);
$Programming_Since = mysqli_escape_string($conn, $_POST['Programming_Since']);
$H_D_E = mysqli_escape_string($conn, $_POST['H_d_e']);
$country = mysqli_escape_string($conn, $_POST['country']);
$state = mysqli_escape_string($conn, $_POST['state']);
$city = mysqli_escape_string($conn, $_POST['city']);
$Current_status = mysqli_escape_string($conn, $_POST['Current_status']);
$institution = mysqli_escape_string($conn, $_POST['institution']);
//$img = isset($_POST['img']);

$sql = "UPDATE `profile` SET `F_name`='$fname',`L_name`='$lname',`Gender`='$gender',`Status`='$Status',`Birth`='$Birth',`Programming_Since`='$Programming_Since',`H_d_e`='$H_D_E',`contry`='$country',`state`='$state',`city`='$city',`Current_status`='$Current_status',`Institution`='$institution' WHERE `username`='$userupdate'";
//   $result = mysqli_query($conn,$sql);
  
   $result1=mysqli_query($conn,$sql);
   
  if($result){
    header("Location:..\profile.php?link=$userupdate");
  }
  echo var_dump($result1);
}
}
}

?>
