<?php
$pass= "";
	if (isset($_POST['signup-submit'])) {
	    $username = $_POST['username'];
    	$email = $_POST['email'];
    	$password = $_POST['password'];
    	$cpassword = $_POST['cpassword'];
	    
		if($password == $cpassword){
			$otp = rand(10001,99999);
			session_start();
			session_regenerate_id(true);
			$_SESSION['otp']=$otp;
        	$_SESSION['username']=$username;
        	$_SESSION['email']=$email;
        	$_SESSION['password']=$password;
        	
        	

			$sub = "OTP Confirmation!!";
			//the message
			$msg = "Hi! this is codeprg and your otp is " . $otp . " 
			
				We are happy to see you soon in community!
					
					
				Thanks for choosing us!! 
					
				Note : Please don't share your OTP with anyone.
						
				with regards

				Team CodePrg";
			$rec = $email;
		
			$mail = mail($rec,$sub,$msg);
			if($mail){
				header("Location: osignup.php");
			}else{
			   $pass = "The service is temporary disable please try again later."; 
			}
		}else{
		    $pass= "Your password does not match.";
		}
	}else{
	
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="style2.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>Codeprg | Signup</title>

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
.error{
    text-align: center;
    color: red;
    font-size: 20px;
    margin: 8px 0 0 0;
}
</style>

</head>
<body>

	<nav class="navbar fixed-top navbar-expand-lg">
		<a class="navbar-brand" href="#">
			<img src="logo.jpg" width="150px" height="40px" class="d-inline-block align-top">
		</a>
	</nav>

	<div class="XEdOp">
		<div class="pOxje">
			<form method="post">
				<div class="logindiv">
					<div class="title">Sign Up</div>
					<?php echo '<p class="error">'.$pass.'</p>';?>

					<div class="fields">
						<div class="username"><svg class="svg-icon" fill="#999" viewBox="0 0 20 20">
							<path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
						</svg>
						
						<input type="text" name="username" class="user-name" placeholder="Username" autofocus autocomplete="off" required></div>

						<div class="username"><svg class="svg-icon" fill="#999" viewBox="0 0 20 20">
							<path d="M17.388,4.751H2.613c-0.213,0-0.389,0.175-0.389,0.389v9.72c0,0.216,0.175,0.389,0.389,0.389h14.775c0.214,0,0.389-0.173,0.389-0.389v-9.72C17.776,4.926,17.602,4.751,17.388,4.751 M16.448,5.53L10,11.984L3.552,5.53H16.448zM3.002,6.081l3.921,3.925l-3.921,3.925V6.081z M3.56,14.471l3.914-3.916l2.253,2.253c0.153,0.153,0.395,0.153,0.548,0l2.253-2.253l3.913,3.916H3.56z M16.999,13.931l-3.921-3.925l3.921-3.925V13.931z"></path>
						</svg>
						
						<input type="email" name="email" class="user-name" placeholder="Email"  autocomplete="off" required></div>

						<div class="username"><svg class="svg-icon" fill="#999" viewBox="0 0 20 20">
							<path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
						</svg>
						
						<input type="password" name="password" class="user-name" placeholder="Password" autocomplete="off" required></div>


						<div class="password"><svg class="svg-icon" fill="#999" viewBox="0 0 20 20">
							<path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
						</svg>
						
						<input type="password" name="cpassword" class="user-password" placeholder="Conform Password" autocomplete="off" required></div>

					</div>
					<button type="submit" name="signup-submit" class="signin-button">Signup</button>
					<div class="link">
						<a class="link-signup" href="login.php">Login</a>
					</div>
					
					<hr style="color: #555; opacity: 0.5;">

					<div class="icons-link">
						<img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" alt="google">
					</div>
				</div>
			</form>	
		</div>
	</div>
		
	<?php require "footer_bg.php"; ?>
	
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
</body>
</html>