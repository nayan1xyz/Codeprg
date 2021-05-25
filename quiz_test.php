<?php session_start();
 $_SESSION['username'];
	include 'dbconnection.php';

	if(isset($_POST['testid']) && isset($_POST['password']))
	{
		$meeting=mysqli_escape_string($conn, $_POST['testid']);
		$password=mysqli_escape_string($conn, $_POST['password']);
		
		$sql="SELECT * FROM custom_quiz WHERE meeting_id Like '$meeting' AND meeting_password LIKE '$password'";
		$result=mysqli_query($conn,$sql);
		$num=mysqli_num_rows($result);

		if($num>0)
        {	while($row=mysqli_fetch_assoc($result))
            {	
                $time=$row['Time'];
                $start=$row['start'];
                $end=$row['end'];
                if($time==0){
                    header("Location:quiz_login.php?error=4");
                }elseif($time == 1){
                    $contest=$row['name_of_contest'];
                }
                else{
                    header("Location:quiz_login.php?error=5");
                }
            }
        }
        else
        {
            header("Location:quiz_login.php?error=2");
			die();
        }
		
	}
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
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        height: 100vh;
        width: 100vw;
        font-family: 'lato', 'sans-serif';
        font-weight: 700;
        align-items: center;
        justify-content: center;
        color: #555;
        background: #ecf0f3;
    }
    .heloo{
        display: flex;
		align-items: center;
		justify-content: center;

    }

    .logindiv {
        margin: 10rem 0 0 0;
        width: 980px;
        height: 800px;
        padding: 60px 35px 35px 35px;
        border: 1px solid rgba(102, 153, 255,0.5);
        border-radius: 40px;
        background: #ecf0f3;
        box-shadow: 13px 13px 20px #cbced1,
            -13px -13px 20px #ffffff;
    }

    .title {
        text-align: center;
        font-size: 30px;
        padding-top: 0px;
        letter-spacing: 0.5px;
    }

    .fields {
        width: 100%;
        padding: 50px 5px 5px 5px;
    }

    .modal_body{
        width: 100%;
    }

    .fields svg {
        height: 22px;
        margin: 0 10px -3px;
    }
    .modal_body svg{
        height: 22px;
        margin: 0 -35px 7px 0;
    }

    .fields input {
        border: none;
        outline: none;
        background: none;
        font-size: 18px;
        color: #555;
        padding: 20px 10px 20px 5px;
    }

    .modal_body input {
        border: none;
        outline: none;
        background: none;
        font-size: 18px;
        color: #555;
    }

    .Otp_div .Get_otp_button{
        letter-spacing: 2px;
        font-size: 15px;
        font-weight: 900;
        border: none;
        color:#668cff;
    }
    .Otp_div .Get_otp_button:hover {
        color:blue;
    }

    .username,
    .Otp_div,
    .password {
        margin-bottom: 30px;
        border-radius: 25px;
        box-shadow: inset 8px 8px 8px #cbced1,
            inset -8px -8px 8px #ffffff;
    }

    .Email{
        padding: 10px 20px 15px 30px;
        margin: 0 16px 15px 1px;
        border-radius: 10px;
        box-shadow: inset 8px 8px 8px #cbced1,
            inset -8px -8px 8px #ffffff;
    }

    .signin-button {
        outline: none;
        border: none;
        cursor: pointer;
        width: 100%;
        height: 58px;
        border-radius: 30px;
        font-size: 20px;
        font-weight: 700;
        font-family: 'lato', 'sans-serif';
        color: #ffffff;
        text-align: center;
        background: #24cfaa;
        box-shadow: 3px 3px 8px #b1b1b1 -3px -3px 8px #ffffff;
        transition: 0.5s;
    }

    .signin-button:hover {
        background: #2fdbb6;
    }

    .signin-button:active {
        background: #1da88a;
    }

    .link {
        padding: 20px 0 10px 0;
        text-align: center;
    }

    .link a {
        text-decoration: none;
        color: #0000ee;
        font-size: 18px;
    }

    .link a:hover {
        color: #5edd5e;
    }

    .link svg {
        height: 16px;
        margin: 0 5px -1px;
    }

    .icons-link {
        float: left;
        width: 40px;
        height: 40px;
        cursor: pointer;
        margin: 20px;
        border-radius: 50%;
        box-shadow: 0px 0px 2px #5f5f5f,
            0px 0px 0px 5px #ecf0f3,
            2px 2px 15px #a7aaaf,
            -8px -8px 15px #ffffff;
    }

    .footer_links ul li a{
        font-size: 16px;
        color: #dbdbdb;
        text-decoration: none;
    }

    .footer_links ul li a:hover{
        color: #fff;
    }

    h5{
		font-size: 1.125rem;
		font-weight: 500;
	}
	  
  @media only screen and (max-width: 419px) {
    /* For phone:*/
      .logindiv {
        width: 380px;
      }
  
  }
  
  @media only screen and (max-width: 400px) {
    /* For phone:*/
      .logindiv{
		width: 360px;
      }
  
  }

  @media only screen and (max-width: 350px) {
    /* For phone:*/
      .logindiv{
		width: 320px;
      }
  
  }
.clockbox{
    width: 100px;
    height: 60px;
    border: 4px solid red;
    text-align: center;
}
.clockbox span{
    font-size: x-large;
    color: aliceblue;
}
</style>

</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg">
		<a class="navbar-brand" href="#">
			<img src="logo.jpg" width="150px" height="40px" class="d-inline-block align-top">
		</a>
		<div class="clockbox"><span class="clock" id="clco">02:00<span><div>


    </nav>
    <div class="heloo">
        <form method="post" action="quiz_result.php">
            <div class="logindiv">
                <div class="title text-center">Quiz</div>
                    <h5 class="text-center">Contest Name: <?php echo $contest;?></h5>
                <div class="fields">


    <?php

        include 'dbconnection.php';
        
        $meeting=mysqli_escape_string($conn, $_POST['testid']);
		$password=mysqli_escape_string($conn, $_POST['password']);

        $sql1="SELECT * FROM custom_quiz WHERE  meeting_id Like '$meeting' AND `meeting_password` LIKE '$password'";
        $result=mysqli_query($conn,$sql1);
        $num=mysqli_num_rows($result);
    if($num>0) 
    {
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
    ?>

			<div class="media position-relative">
				<div class="media-body">
				
                    <h3><?php echo $ques;?><h3>
                            <input type="radio" id="label1" name="LABEL[<?php echo $s_no;?>]" value="<?php echo $option1;?>">
                            <label for="label1" id="color1"><?php echo $option1;?></label>

                            <span class="checkmark"></span><br>
                            <input type="radio" id="label2" name="LABEL[<?php echo $s_no;?>]" value="<?php echo $option2;?>">
                            <label for="label2" id="color2"><?php echo $option2;?></label><br>

                            <input type="radio" id="label3" name="LABEL[<?php echo $s_no;?>]" value="<?php echo $option3;?>">
                            <label for="label3" id="color3"><?php echo $option3;?></label><br>

                            <input type="radio" id="label4" name="LABEL[<?php echo $s_no;?>]" value="<?php echo $option4;?>">
                            <label for="label4" id="color4"><?php echo $option4;?></label>

				</div>
			</div>
			
		<?php
			}
        }
        

		?>
		    </div>
            <input type="submit" name="Submit" value="Submit" class="btn btn-info btn-lg">
	        </div>
            
        </div>
        <input type="hidden" value="<?php echo $contest;?>" name="contest2" />
    </form>
</div>
    	
		
<hr color="gray">
				
    <footer class="page-footer font-small pt-4" style="background-color: #393f60; color: #b0b0b0;">
        <div class="footer-copyright text-center py-3">Copyright © 2020 CODEPRG
            <br><a href="#">Privacy Policy</a>
        </div>
    </footer>

</body>
</html>


<body>
 