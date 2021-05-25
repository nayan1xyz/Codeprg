<?php session_start();
include 'dbconnection.php';

$uname = $_SESSION['username'];
$sql="SELECT * FROM `custom_quiz` WHERE username = '$uname';";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num>0){
    while($row=mysqli_fetch_assoc($result)){
        $s_no=$row['s_no'];
		$username=$row['username'];
		$contest=$row['name_of_contest'];
		$date=$row['date'];
		$start=$row['start'];
		$end=$row['end'];
		$ques=$row['question'];
		$option1=$row['option1'];
		$option2=$row['option2'];
		$option3=$row['option3'];
		$option4=$row['option4'];
		$answer=$row['answer'];
		
		$sql1 = "INSERT INTO `quiz_database` (question, option1, option2, option3, option4, answer) VALUES ('$ques', '$option1', '$option2', '$option3', '$option4', '$answer');";
        $result1 = mysqli_query($conn,$sql1);
        
        if($result){
            $sql3="DELETE FROM `custom_quiz` WHERE username = '$uname';";
            $result3=mysqli_query($conn,$sql3);
            if($result3){
                $sql4="DELETE FROM `quiz_admin` WHERE username = '$uname';";
                $result4=mysqli_query($conn,$sql4);
            }
        }
        
    }
}
header('Location: index.php');
?>