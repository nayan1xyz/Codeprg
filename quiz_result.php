<?php session_start();
include 'dbconnection.php';

$uname = $_SESSION['username'];
$sql="SELECT * FROM `profile` WHERE `username`='$uname'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num>0){
    while($row=mysqli_fetch_assoc($result)){
        $firstnm=$row['F_name'];
        $lastnm=$row['L_name'];
    }
}
$name = $firstnm." ".$lastnm;
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Quiz Test</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style2.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    

    <style>
.challenge{
	color: #fff;
}

.challenge_nav{
    margin-top: 100px;
}

.challenge_sub_nav{
	color: #393f60;
	font-size: 1.125rem;
	font-weight: 800;
	cursor: pointer;
}

.challenge_sub_nav:hover{
	color: #000;
	/*border-left: 2px solid #393f60;
    border-right: 2px solid #393f60;*/
    box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);
	border-radius: 10px;

}

.custom_challenge{
    /*border-top: 1px solid #393f60;*/
    /*border-bottom: 1px solid #393f60;*/
    box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);
}

.challenge_main {
    background-color: #dbdbdb;
    margin-top: 60px;
}

.inner {
    background-color: #fff;
    margin-top: 20px;
}

.container {
  padding: 2px 16px;

}

.media{
	margin: 10px;
	padding: 8px;
	/*border: 2px solid black;*/
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	transition: 0.3s;
	cursor: pointer;
}

.media:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.6);
  display: flex;
}

.plan {
	border: none;
	margin-top:40px;
    /*border: 2px solid black;*/
}

.flex-container {
	margin: 0 0 40px 0 ;
	padding: 20px;
	display: flex;
	border: none;
	flex-wrap: nowrap;
    /*border: 2px solid black;*/
}

.content{
    border: 1px solid black;
    border: 1px solid rgba(102, 153, 255,0.5);
    border-radius: 14px;
    padding:12px;
    margin: 10px 10px 80px 10px;
    box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);
}

.sub_content{
    padding:8px;
}

.sub_content h4 {
    font-weight: 600;
}

.content h5 {
    font-weight:400;
    font-size: 24px;
}

.content ul li{
    font-weight: 400;
    font-size: 20px;
}
/*custom quiz area*/
.custom_quiz_div{
    /*border: 2px solid black;*/
}

.noQues p{
    font-size: 1rem;
    margin: 16px 4px 12px 10px;
    font-weight: 400;
}

.over_Question{
    background-color:  #e0e6eb;
    width: 90%;
    height: 9px;
    margin-top: 20px;
}

.textarea{
    width: 90%;
    height: 40px;
    border: none;
    resize: none;
    background-color:  #e0e6eb;
    margin: 0;
    font-size: 16px;
    font-weight: 700;
    padding: 0 16px 16px 16px;
    background-repeat: no-repeat;
    overflow: hidden;          
}

.custom_quiz_options{
    border: none;
    background-color: #ecf0f3;
    font-weight: 800;
    padding: 20px 0 4px 12px;
    font-size: 16px;
}

.quiz-inner{
    margin: 8px 4px 8px 10px;
    font-weight: 800;
}

.quiz-exinner{
    margin: 8px 4px 8px 10px;
    font-weight: 400;
}

.quiz-ininner p{
    font-size: 1.2rem;
    margin: 12px 4px 8px 10px;
    font-weight: 400;
}

.custom_quiz_add_option {
    border: none;
    cursor: pointer;
    float: right;
    margin: 24px 280px 0 0;
    color: #555;
    font-size: 14px;
    font-weight: 600;
}

.quiz_div input, label{
    font-size: 24px;
    margin: 8px 4px 24px 10px;
    font-weight: 400;
}

.submit {
    outline: none;
    border: none;
    cursor: pointer;
    width: 120px;
    height: 48px;
    border-radius: 10px;
    margin: 24px 14px 24px 10px;
    font-size: 20px;
    font-weight: 700;
    font-family: 'lato', 'sans-serif';
    color: #ffffff;
    text-align: center;
    background: #24cfaa;
    box-shadow: 3px 3px 8px #b1b1b1 -3px -3px 8px #ffffff;
    transition: 0.5s;
}

.submit:hover {
    background: #28a745;
}

.sumbit:active {
    background: #1da88a;
}

</style>

</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg">
		<a class="navbar-brand" href="#">
			<img src="logo.jpg" width="150px" height="40px" class="d-inline-block align-top">
		</a>
    </nav>

    <div class="container challenge_nav">
</div>
<!--All plans -->

    <div class="container plan">
        <div class="flex-container">
            <div class="container content">
                    <div class="quizdiv">

    <?php
    if(isset($_POST['Submit']))
    {
        if(!empty($_POST['LABEL']))
        {
            $count=count($_POST['LABEL']);
            ?>
            <div class="quiz-inner">
                <h1>Quiz Result</h1>
            </div>
            <hr>
        
        <div class="quiz-exinner">
        <p>You have selected <strong><?php echo $count ?></strong></p>
            <p>Your result has been recorded.</p>
            
        </div>
            <br>
            <?php
        }
    }

        include 'dbconnection.php';

        $contest=mysqli_escape_string($conn, $_POST['contest2']);
        $sql="SELECT * FROM `custom_quiz` WHERE name_of_contest Like '$contest'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        $results=0;
    if($num>0) 
    {
        while($row=mysqli_fetch_assoc($result))
        {
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
            //echo $answer;
            //echo trim($answer," ");

            //print_r(gettype($answer));
            

            

            $selected = $_POST['LABEL'];
            //echo $s_no;
            $y = $selected[$s_no];
            //echo $y;
            $z = trim($y," ");
            //echo '<br>';
            //var_dump($answer == $z);
            
            if($answer == $z)
            {
                $results++ ;                
            }

            //echo '<br>';
            
            //echo "<br>";
            
            //echo "<br>";
            //echo $selected[74];

                

        } ?>


    <div class="custom_quiz_div">
        
    <?php
        echo "<h3>";
        echo "<br> Your total score is <strong>".$results."</strong>"; 
        echo "</h3>";        
    }  

        ?>
        <br>
        <hr color="gray">
        <br>

    <input type="button" class="submit" value="Done" onclick="window.location='index.php'" style="float: right;" />
                        
    </div>
					</div>
            </div>
        </div>
    </div>
<?php 
$sql1="INSERT INTO `quiz_admin` (username, contest_name, name, score) VALUES ('".$uname."', '".$contest."', '".$name."', '".$results."');";
$result1=mysqli_query($conn,$sql1);
?>
    }
<hr color="gray">
				
    <footer class="page-footer font-small pt-4" style="background-color: #393f60; color: #b0b0b0;">
        <div class="footer-copyright text-center py-3">Copyright © 2020 CODEPRG
            <br><a href="#">Privacy Policy</a>
        </div>
    </footer>

</body>
</html>