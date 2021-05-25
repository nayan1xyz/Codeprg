<?php session_start();
include 'dbconnection.php';

$uname = $_SESSION['username'];

$sql2 = "SELECT * FROM `quiz_admin` WHERE username = '$uname';";
$result2 = mysqli_query($conn,$sql2);
$html = '<table><tr><td>NAME</td><td>SCORE</td></tr>';
while($row=mysqli_fetch_assoc($result2)){
    $html.='<tr><td>'.$row['name'].'</td><td>'.$row['score'].'</td>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=CodeprgQuizResult.xls');
echo $html;
?>