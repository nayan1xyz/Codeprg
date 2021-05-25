<?php
include 'dbconnection.php';

$fal = "";
if(isset($_POST['username'])){
if($_SERVER['REQUEST_METHOD']){
	$username=mysqli_escape_string($conn, $_POST['username']);
	$password=mysqli_escape_string($conn, $_POST['password']);
}

$sql="SELECT * FROM `codeprg14` WHERE `username` LIKE '$username'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num<1){
    $pre=true;
	echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
	<strong>Failed!</strong> Username doesn't exits you must signup first!!
	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	<span aria-hidden='true'>&times;</span>
	</button>
	</div>";
	
} 

if($num>0){
	while($row=mysqli_fetch_assoc($result)){
	    $hash = $row['password'];
	    $admin=$row['isadmin'];
		  
	    $veri = password_verify($password, $hash);
	    if($admin=="1" && $veri == 1){
	        session_start();
			header("location:adminconfirm.php");	
	    }elseif($veri == 1){
			$pre=true;
			session_start();
			$_SESSION['username']=$username;
			session_regenerate_id(true);
			header("location:index.php");
	    }else{
	        $fal = "Invalid username or password.";//only password were check
	    }
	}
}else
{
    $fal = "Invalid username or password.";//only username were check
}
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
	<title>login</title>

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
    color: red;
    text-align: center;
    font-size: 18px;
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
					<div class="title">Login</div>
                        <?php
                            echo '<p class="error">'.$fal.'</p>';
                         ?>

					<div class="fields">
						<div class="username"><svg class="svg-icon" fill="#999" viewBox="0 0 20 20">
							<path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
						</svg>
						
						<input type="username" name="username" class="user-name" placeholder="Your username" autofocus autocomplete="off"></div>

						<div class="password"><svg class="svg-icon" fill="#999" viewBox="0 0 20 20">
							<path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
						</svg>
						
						<input type="password" name="password" class="user-password" placeholder="Your password"></div>

					</div>
					<button class="signin-button">Login</button>
					<div class="link">
						<a class="link-forgotpassword" href="Forgot_Password.php">Forgot password?</a> or <a class="link-signup" href="nsignup.php">Signup</a>
					</div>
					
					<hr style="color: #555; opacity: 0.5;">

					<div class="icons-link">
						<img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" alt="google">
					</div>
				</div>
			</form>	
		</div>
	</div>

			<!-- <?php
			echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Launch demo modal
		  </button>
		  
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body">
				  ...
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				  <button type="button" class="btn btn-primary">Save changes</button>
				</div>
			  </div>
			</div>
		  </div>';
		  ?>	 -->
		
	
	<?php require "footer_bg.php"; ?>
	
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
</body>
</html>