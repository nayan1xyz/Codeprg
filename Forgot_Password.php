<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="style2.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>Forgot Password</title>
<style>
@media only screen and (max-width: 419px) {
  .XEdOp .pOxje .logindiv {
      width: 380px;
      height: 700px;
  }
}

@media only screen and (max-width: 380px) {
  .XEdOp .pOxje .logindiv {
      width: 360px;
      height: 700px;
  }
  svg{
      margin: 0 2px -3px;
  }
}
@media only screen and (max-width: 360px) {
  .XEdOp .pOxje .logindiv {
      width: 340px;
      height: 700px;
  }
 .fields input{
     padding: 20px 10px 14px 10px;
 }
  .fields svg{
     display:none;
  }
}

.text-center{
	color: red;
	font-size: 15px;
}
</style>
</head>
<body>

<?php
include 'dbconnection.php';
global $notexits_email;
$notexits_email=false;
$email_exits=false;
if(isset($_POST['email']))
{	
	$email = $_REQUEST['email'];	
    
	$sql="SELECT * FROM `codeprg14` WHERE `email`='$email'";
	$result=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($result);
	if($num<1){
		$notexits_email=true;
	}
	if($num>0){
		$email_exits=true;
    $otp = rand(10001,99999);
     $_SESSION['otp']=$otp;
     $_SESSION['email']=$email;
    
    //the subject
    $sub = "RESET PASSWORD";
    //the message
	$msg = "Hi! this is codeprg and your otp is " . $otp. " Enter the given OTP and RESET YOUR PASSWORD
				
			We are happy to see you soon in community!			
				
			Thanks for choosing us!! 
				
			Note : Please don't share your OTP with anyone.
					
			with regards

			Team CodePrg
			THANKYOU!!";
		//recipient email here
		$rec = $email;
		
		//send email
		//mail($rec,$sub,$msg);
       }
	}?>

		<nav class="navbar fixed-top navbar-expand-lg">	
			<a class="navbar-brand" href="#">
				<img src="logo.jpg" width="150px" height="40px" class="d-inline-block align-top">
			</a>
		</nav>
		
	<div class="XEdOp">
		<div class="pOxje">
			<form method="post">
				<div class="logindiv">
					<div class="title">Forgot Password</div>
<?php
if($notexits_email){
	echo "<div class='text-center'>
	Email doesn't exits you must signup to continue
	</div>";
}
if($email_exits){
	header("location:Forget_password_validation.php");
}
?>
					<div class="fields">
						<div class="username"><svg class="svg-icon" fill="#999" viewBox="0 0 20 20">
							<path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
						</svg>
					
						<input type="email" name="email" class="user-name" placeholder="Your registered email"></div>

					</div>	
					<input type="submit" class="signin-button" value="Get Otp">

				</div>
			</form>
		</div>
	</div>

<?php require "footer_bg.php"; ?>
</body>
</html>