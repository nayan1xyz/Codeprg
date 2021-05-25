<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css" />
		  
		<link rel="stylesheet"
		  type="text/css"
		  href="style.css"
	      />  
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	      <meta charset="UTF-8">
	      
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Keywords" content=" ">
<meta name="Description" content=" ">
<meta name="author" content="Nayan Vishwakarma">
<title>Codeprg | Home</title>
<style>

@import url('https://fonts.googleapis.com/css2?family=Playball&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap');
</style>
<script src="https://use.fontawesome.com/59ea012274.js"></script>
</head>
<body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>   
   AOS.init();
   
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 900, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});
</script>

<?php


session_start();
if(isset($_SESSION['username'])){


	$user=$_SESSION['username'];
	
echo '<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#">
		<img src="logo.png" width="150px" height="40px" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="#">Challenges<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Courses</a>
      <a class="nav-item nav-link" href="#">Practice</a>
      <a class="nav-item nav-link" href="#">Community</a>
    </div>
	
	<form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
				<input class="form-control ds-input" name="search" type="search" placeholder="Search" aria-label="Search" dir="auto">
      <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
    </form>
	
	<div class="friends_chats">
	<svg width="1.875em" height="1.875em" viewBox="0 0 16 16" class="bi bi-chat-right-quote-fill" fill="#b0b0b0" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM7.194 4.766c.087.124.163.26.227.401.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 7.333 4 6.587 4 5.667 4 4.747 4.776 4 5.734 4c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324.085.083.161.174.227.272zM11 7.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666 0-.92.777-1.667 1.734-1.667.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324.085.083.161.174.227.272.087.124.164.26.228.401.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z"/>
</svg>
	</div>
	
	<div class="notification">
		<svg width="1.875em" height="1.875em" viewBox="0 0 16 16" class="bi bi-bell" fill="#b0b0b0" xmlns="http://www.w3.org/2000/svg">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
  <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
</svg>
	</div>

  
  <div class="log_sign">
  
		<button class="btn btn-primary btn-sm" href="#" role="button"><svg width="1.875em" height="1.875em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="#b0b0b0" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> Login</span></button>
		
		<button class="btn btn-primary btn-sm" href="#" role="button"><span class="input-group">
  <svg width="1.875em" height="1.875em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="#b0b0b0" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
</svg> Signup</button>
  </div>
  
  <div class="Profile_logout">
	<div class="dropdown">
	<svg width="1.875em" height="1.875em" fill="#b0b0b0" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
</svg>
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
    '.$user.'
  </button>
  <div class="dropdown-menu profile_cs" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="profile.php?link='.$_SESSION['username'].'">Profile</a>
    <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
    <a class="dropdown-item" href="logout.php">Logout</a>
  </div>
</div>
</div>
  </div>
  
    </div>
</nav>';
}

else{

	echo '<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
	<a class="navbar-brand" href="#">
		  <img src="logo.png" width="150px" height="40px" class="d-inline-block align-top" alt="">
	</a>
	<button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	  <div class="navbar-nav">
		<a class="nav-item nav-link" href="#">Challenges<span class="sr-only">(current)</span></a>
		<a class="nav-item nav-link" href="#">Courses</a>
		<a class="nav-item nav-link" href="#">Practice</a>
		<a class="nav-item nav-link" href="#">Community</a>
	  </div>
	  
	  <form class="form-inline my-2 my-lg-0">
				  <input class="form-control ds-input" type="search" placeholder="Search" aria-label="Search" dir="auto">
		<!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
	  </form>
	  
	  <div class="friends_chats">
	  <svg width="1.875em" height="1.875em" viewBox="0 0 16 16" class="bi bi-chat-right-quote-fill" fill="#b0b0b0" xmlns="http://www.w3.org/2000/svg">
	<path fill-rule="evenodd" d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM7.194 4.766c.087.124.163.26.227.401.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 7.333 4 6.587 4 5.667 4 4.747 4.776 4 5.734 4c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324.085.083.161.174.227.272zM11 7.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666 0-.92.777-1.667 1.734-1.667.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324.085.083.161.174.227.272.087.124.164.26.228.401.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z"/>
  </svg>
	  </div>
	  
	  <div class="notification">
		  <svg width="1.875em" height="1.875em" viewBox="0 0 16 16" class="bi bi-bell" fill="#b0b0b0" xmlns="http://www.w3.org/2000/svg">
	<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
	<path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
  </svg>
	  </div>
  
	
	<div class="log_sign1">
	
		  <button class="btn btn-primary btn-sm" href="#" role="button"><svg width="1.875em" height="1.875em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="#b0b0b0" xmlns="http://www.w3.org/2000/svg">
	<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  </svg> <a href="login.php">Login</a></span></button>
		  
		  <button class="btn btn-primary btn-sm" href="#" role="button"><span class="input-group">
	<svg width="1.875em" height="1.875em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="#b0b0b0" xmlns="http://www.w3.org/2000/svg">
	<path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
	<path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
  </svg><a href="signup.php"> Signup</button>
	</div>
	
	<div class="Profile_logout1">
	  <div class="dropdown">
	  <svg width="1.875em" height="1.875em" fill="#b0b0b0" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	<path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  </svg>
	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
	  else wala
	</button>
	<div class="dropdown-menu profile_cs" aria-labelledby="dropdownMenuButton">
	  <a class="dropdown-item" href="#">Profile</a>
	  <a class="dropdown-item" href="#">Edit Profile</a>
	  <a class="dropdown-item" href="#">Logout</a>
	</div>
  </div>
  </div>
	</div>
	
	  </div>
  </nav>';
  }
  


?>

<div class="jumbotron" style="background-image: url(1.jpeg);">
	<div class="container">
		
			<div class="row">
				<div class="headers">
					<div class="col-md-12 text-center">
						Codeprg..!
						</div>
						<div class="typewriter">
						<div class="coding">
						<br>#include&lt;programming.h&gt;<br>
						#include&lt;codeprg.h&gt;<br>
						void main()<br>
						{<br>
						cout<<"Welcome to Codeprg";<br>
						}
						
						</div>
					</div>		
				</div>
					
			</div>
		
	</div>
</div>


<div class="jumbotron" style="background-color:#220a2e;">
	<div class="container">
		
			<div class="row" data-aos="zoom-out">
				<div class="colcnt text-center">
					
					<div class="col-md-12">
						<img src="sharpen.png" height="20%" width="50%">
						<h1><u>Sharpen your Skills..!</u></h1>
						<h4 class="maincnt">Challenge yourself on coding, created by the community to Strengthen different skills. 
						Master your current language of choice or expand your understanding of a new one.</h4>
					</div>

					
				</div>		
			</div>			
			<hr color="gray">
			<div class="row" data-aos="fade-left">
				<div class="colcnt text-center">
					
					<div class="col-md-12">
						<img src="qa.png" height="20%" width="50%">
						<h1><u>Questions, Community & Contest </u></h1>
						<h4 class="maincnt">Over thousands of questions for you to practice.Come and join of the largest tech communities with hundreds of thousands of active users and participate in
						our contest to challenge youself and earn rewards....</h4>
					</div>

					
				</div>		
			</div>
			
			<hr color="gray">
	</div>
			<div class="row">
				<div class="colcnt text-center">
					
					<div class="col-md-12 footerl">
						<span class="footerl">&copy Copyright Codeprg</span>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i class="fa fa-facebook space" aria-hidden="true"  style="font-size:5px color:white"></i>
					    &nbsp&nbsp&nbsp&nbsp <i class="fa fa-google space" style="font-size:5px color:white" aria-hidden="true"></i>
						&nbsp&nbsp&nbsp&nbsp <i class="fa fa-instagram space" style="font-size:5px color:white"  aria-hidden="true"></i>
						&nbsp&nbsp&nbsp&nbsp <i class="fa fa-twitter space" style="font-size:5px color:white"  aria-hidden="true"></i>
					</div>

					
				</div>		
			</div>
			
			