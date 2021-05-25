<?php
include 'dbconnection.php';

$thname=$_GET['id'];
$sql_fetch="UPDATE `registercontesthere` SET `isapprove` = '1' WHERE `registercontesthere`.`s.no` = $thname";
$result_fetch=mysqli_query($conn,$sql_fetch);

if($result_fetch){
    echo "Approved";
    header("Location:..\adminDash.php?status=Approved");
}


?>