<?php
include 'dbconnection.php';
// $openAlert=false;

if(isset($_POST['authorname'])){
if($_SERVER['REQUEST_METHOD']){
	
	$author=$_POST['authorname'];
   $mbno=$_POST['mbno'];
   $stdate=$_POST['stdate'];
   $vdurl=$_POST['url'];
	$price=$_POST['price'];
}
$sql="INSERT INTO `registercontesthere` (`authorname`, `authormbno`, `stdate`, `courselink`, `courseprice`, `datetime`, `isapprove`) VALUES ( '$author', '$mbno', '$stdate', '$vdurl', '$price', CURRENT_TIMESTAMP, '0')";
$result=mysqli_query($conn,$sql);
if($result){
//   $openAlert=true;
//  echo "sent";
 header("Location:../register_for_contest.php?status=success");

}
}

?>