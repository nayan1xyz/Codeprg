<?php
include 'dbconnection.php';
session_start();


if(isset($_SESSION['username'])){

    $user=$_SESSION['username'];

global $thname;
if((isset($_GET['link']))&&$_GET['link']!=''){


$thname=$_GET['link'];
}
if (isset($_POST['title']))
{   
    if($_SERVER['REQUEST_METHOD']){
        $title=mysqli_escape_string($conn, $_POST['title']);
        $desc=mysqli_escape_string($conn, $_POST['desc']);
        $key1=mysqli_escape_string($conn, $_POST['keyword1']);
        $key2=mysqli_escape_string($conn, $_POST['keyword2']);
        $key3=mysqli_escape_string($conn, $_POST['keyword3']);
        $keywords=$key1.$key2.$key3;
        // echo $keywords;
        $sql_data="INSERT INTO `question_asked` ( `question_title`, `question_desc`, `username`, `date`, `keywords`, `categories`) VALUES ( '$title', '$desc', '$user', CURRENT_TIMESTAMP, '$keywords', '$thname')";
        $result=mysqli_query($conn,$sql_data);
        // if($result){
        //     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //     <strong>Success</strong> Posted Successfully!!
        //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //       <span aria-hidden="true">&times;</span>
        //     </button>
        //   </div>';

        //     }
        }
    }
}
header("Location:..\AskQuestion.php?link=$thname& status=success");
exit();
?>