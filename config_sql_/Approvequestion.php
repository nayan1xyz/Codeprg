<?php
include 'dbconnection.php';

$thname=$_GET['id'];
$sql_fetch="UPDATE `question_asked` SET `isapprove` = '1' WHERE `question_asked`.`s.no` = $thname";
$result_fetch=mysqli_query($conn,$sql_fetch);

if($result_fetch){
     header("Location:..\adminDash.php?status=Approved");
}
?>