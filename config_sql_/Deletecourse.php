<?php
include 'dbconnection.php';

$thname=$_GET['id'];
$sql_fetch="DELETE FROM `registercontesthere` WHERE `registercontesthere`.`s.no` = $thname";
$result_fetch=mysqli_query($conn,$sql_fetch);

if($result_fetch){
    header("Location:..\adminDash.php?status=Deleted");
}


?>