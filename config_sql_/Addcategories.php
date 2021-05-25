<?php
include 'dbconnection.php';

if(isset($_POST['cat_title'])){
        if($_SERVER['REQUEST_METHOD']){
          $cat_title=mysqli_escape_string($conn, $_POST['cat_title']);
          $cat_desc=mysqli_escape_string($conn, $_POST['cat_desc']);
        }
        
        $sql="INSERT INTO `com_categories` ( `cat_name`, `cat_desc`) VALUES ('$cat_title', '$cat_desc')";
        $result=mysqli_query($conn,$sql);
        if($result){
        //   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        //   <strong>added</strong> You should check in on some of those fields below.
        //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">&times;</span>
        //   </button>
        // </div>';

        header("Location:..\adminDash.php?status=Added");
    
        }
      }
?>