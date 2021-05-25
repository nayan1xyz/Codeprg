<?php
include 'dbconnection.php';

if(isset($_POST['content'])){
        if($_SERVER['REQUEST_METHOD']){
          $content=mysqli_escape_string($conn, $_POST['content']);
          $link=mysqli_escape_string($conn, $_POST['link']);
        }
        
        $sql="INSERT INTO `announce` (`content`, `link`) VALUES ('$content', '$link')";
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