<?php	session_start();
session_regenerate_id(true);

$numbers=$_POST['num'];
if($numbers >= 20){
    header("Location: custom_basic_form2.php?error=1");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Codeprg | Home</title>
		<meta charset="UTF-8">		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="Keywords" content=" ">
		<meta name="Description" content=" ">
		<meta name="author" content="Nayan Vishwakarma">

		<link rel="stylesheet" href="style2.css">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">		

<style>
.Profile_logout{
    padding: 0 90px 0 40px;
    display: flex;
    align-items: center;
}

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
	/*margin: 40px 120px 10px 120px;*/
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
    margin:10px;
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
<?php
	if(isset($_SESSION['username'])){


		$user=$_SESSION['username'];
		
	echo '<nav class="navbar fixed-top navbar-expand-lg">
	<a class="navbar-brand" href="#">
			<img src="Capture.PNG" width="150px" height="40px" class="d-inline-block align-top" alt="">
	</a>
	<button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-item nav-link" href="challenge_home.php">Challenges<span class="sr-only">(current)</span></a>
			<a class="nav-item nav-link" href="course_home.php">Courses</a>
			<a class="nav-item nav-link" href="practice_home.php">Practice</a>
			<a class="nav-item nav-link" href="community_home.php">Community</a>
		</div>
		<div class="VfdSe">
			<div class="">
			<form class="form-inline sea my-2 my-lg-0" action="search.php" method="POST">
				<div class="">
					<div class="">
						<input class="form-control search ds-input" name="search" type="search" placeholder="Search" aria-label="Search" dir="auto">
					</div>
				</div>
			</form>
			</div>
		</div>

		<div class="friends_chats">
			<svg width="26px" height="26px" viewBox="0 0 16 16" class="bi bi-chat-right-quote-fill" fill="#b0b0b0" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM7.194 4.766c.087.124.163.26.227.401.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 7.333 4 6.587 4 5.667 4 4.747 4.776 4 5.734 4c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324.085.083.161.174.227.272zM11 7.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666 0-.92.777-1.667 1.734-1.667.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324.085.083.161.174.227.272.087.124.164.26.228.401.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z"/>
			</svg>
		</div>
		
		<div class="notification">
			<svg width="26px" height="26px" viewBox="0 0 16 16" class="bi bi-bell" fill="#b0b0b0" xmlns="http://www.w3.org/2000/svg">
				<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
				<path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
			</svg>
		</div>
		
		<div class="Profile_logout">
		<svg width="1.47em" height="1.47em" fill="#b0b0b0" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
		</svg>
			<div class="dropdownmenu">			
				<button class="dropbtn" style="padding: 8px;"> '.$user.' </button>
					<div class="dropdown-content">
						<a href="profile.php?link='.$_SESSION['username'].'">Profile</a>
						<a href="edit_profile.php">Edit Profile</a>
						 ';
						 if($user=="Admin"){
							echo '<a href="adminDash.php">Dashboard</a>';
						}
						echo '
						<a href="logout.php">Logout</a>
					</div>
			</div>
		</div>
	</nav>';
    }

    else{
        header("Location: login.php");  
    exit; 
    }

?>

<div class="container challenge_nav">
</div>
<!--All plans -->


    <div class="container plan">
        <div class="flex-container">
            <div class="container content">
                <form method="post" action="multiple-insert-2.php">
                    <div class="quizdiv">

                        <div class="quiz-inner">
                            <h1>Quiz form</h1>
                        </div>
                        
                        <?php
                            $numbers=$_POST['num'];
                            $name = $_POST['contest_name'];
                            $date = $_POST['date'];
                            $start=$_POST['start_time'];
                            $end=$_POST['end_time'];
                            $am=$_POST['am'];
                            $pm=$_POST['pm'];
                            $start1=$start." ".$am;
                            $end1=$end." ".$pm;

                        ?>
                        <div class="quiz-exinner">
                            <p>Fill this form. This is <strong>First step of Three:-</strong></p>
                        </div>
                        <div class="quiz-ininner">
                        

                        <p value="<?php echo $name;?>" name="" >Contest Name:- <?php echo $name;?></p>
                        <p value="<?php echo $date;?>" name="" >Date of Contest:- August <?php echo $date;?> 2020</p>
                        <p value="<?php echo $start1;?>" name="" >Contest starts At:- <?php echo $start1;?></p>
                        <p value="<?php echo $end1;?>" name="" >Contest end at:- <?php echo $end1;?></p>
                        
                        </div>

                        <?php

                            for($i=1;$i<=$numbers;$i++)
                            {
                        ?>
                        <div class="custom_quiz_div">
                            <div class="noQues">
                            <p>Question :- <?php echo $i;?></p>
                            </div>

                            <div class="over_Question"></div>
                            <textarea class="textarea" name="question[]" rows="2" placeholder="Questions"></textarea>
                            <br>
                            <input type="input" class="custom_quiz_options" id="" name="option1[]" placeholder="option" /><br>
                            <input type="input" class="custom_quiz_options" id="" name="option2[]" placeholder="option" /><br>
                            <input type="input" class="custom_quiz_options" id="" name="option3[]" placeholder="option" /><br>
                            <input type="input" class="custom_quiz_options" id="" name="option4[]" placeholder="option" /><br><br>

                            <input type="input" class="custom_quiz_options" id="" name="answer[]" placeholder="Write your answer here" />         
                        </div>
                        <?php } ?>
                        <input type="hidden" value="<?php echo $numbers;?>" name="number" />
                        <input type="hidden" value="<?php echo $end1;?>" name="end" />
                        <input type="hidden" value="<?php echo $name;?>" name="name" />
                        <input type="hidden" value="<?php echo $date;?>" name="date" />
                        <input type="hidden" value="<?php echo $start1;?>" name="start" />
                        
                        <input type="submit" class="submit" value="Insert" name="Submit" style="float: right;" />
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php require "footer_bg.php"; ?>
</body>
</html>