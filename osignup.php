<?php
include 'dbconnection.php';
session_start();
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$otp = $_SESSION['otp'];

if(isset($_POST['otp'])){
    if($otp == $_POST['otp']){
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql="INSERT INTO `codeprg14` (`username`, `password`, `email`,`date`) VALUES ('$username', '$hash', '$email', CURRENT_TIMESTAMP)";
        $result=mysqli_query($conn,$sql);

        $sql2="INSERT INTO `profile` (`F_name`, `L_name`, `Gender`, `Status`, `Birth`, `Programming_Since`, `H_d_e`, `contry`, `state`, `city`, `Current_status`, `Institution`, `img`, `username`) VALUES ('Not set', NULL, 'Not set', 'Not set', NULL, NULL, 'Not set', 'Not set', NULL, NULL, 'Not set', 'Not set', '0', '$username')";
       $result1= mysqli_query($conn,$sql2);
       if($result && $result1){
           session_start();
           header("Location: index.php");
       }
    }else{
        $ERROR = "Your otp does not match please try again.";
    }
}
$ERROR = "";
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
}..error{
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
                        <?php echo '<p class="error">'.$ERROR.'</p>'; ?>
					<div class="fields">
						<div class="username"><svg class="svg-icon" fill="#999" viewBox="0 0 20 20">
							<path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
						</svg>
						
						<input type="text" name="otp" class="user-name" placeholder="Otp"></div>

					</div>
					<button type="submit" class="signin-button">Signup</button>
					<hr style="color: #555; opacity: 0.5;">
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