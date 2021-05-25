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
.challenge{
	color: #fff;
}

.challenge_nav{
	background-color: #ffffff;
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
    border: 2px solid black;
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
    padding: 20px 0 0 12px;
    font-size: 16px;
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

</style>

</head>
<body>
<?php
	session_start();
	if(isset($_SESSION['username'])){


		$user=$_SESSION['username'];
		
	echo '<nav class="navbar fixed-top navbar-expand-lg">
	<a class="navbar-brand" href="#">
			<img src="logo.jpg" width="150px" height="40px" class="d-inline-block align-top" alt="">
	</a>
	<button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
		<a class="nav-item nav-link challenge" href="challenge_home.php">Challenges<span class="sr-only">(current)</span></a>
		<a class="nav-item nav-link" href="course_home.php">Courses</a>
		<a class="nav-item nav-link" href="practice_home.php">Practice</a>
		<a class="nav-item nav-link" href="community_home.php">Community</a>
		</div>
		
		<form class="form-inline my-2 my-lg-0" sea action="search.php" method="POST">
					<input class="form-control search ds-input" name="search" type="search" placeholder="Search" aria-label="Search" dir="auto">
		<!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
		</form>
		
		<div class="friends_chats">
		<svg width="1.875em" height="1.875em" viewBox="0 0 16 16" class="bi bi-chat-right-quote-fill" fill="#b0b0b0" xmlns="http://www.w3.org/2000/svg">
	<path fill-rule="evenodd" d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM7.194 4.766c.087.124.163.26.227.401.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 7.333 4 6.587 4 5.667 4 4.747 4.776 4 5.734 4c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324.085.083.161.174.227.272zM11 7.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666 0-.92.777-1.667 1.734-1.667.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324.085.083.161.174.227.272.087.124.164.26.228.401.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z"/>
	</svg>
		</div>
		
		<div class="notification">
		<div class="dropdown">
			<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" style="border:none; background-color: #393f60 !important;">
				<svg width="1.875em" height="1.875em" viewBox="0 0 16 16" class="bi bi-bell" fill="#b0b0b0" xmlns="http://www.w3.org/2000/svg">
					<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
					<path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
				</svg>
			</button>
		
			<div class="dropdown-menu profile_cs" style="border:2px solid black;" aria-labelledby="dropdownMenuButton">
				<div class="dropdown-item">
					<button type="button" class="btn btn-primary">ADD</button>
					<button type="button" class="btn btn-danger">Cancel</button>
					
				</div>
				<a class="dropdown-item" href="#">Profile</a>
			</div>
		</div>
		</div>
	
		<div class="Profile_logout">
			<div class="dropdownmenu">
				<button class="dropbtn">
					<svg width="1.47em" height="1.47em" fill="#b0b0b0" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
					</svg> '.$user.'
				</button>
					<div class="dropdown-content">
						<a href="profile.php?link='.$_SESSION['username'].'">Profile 1</a>
						<a href="edit_profile.php">Edit Profile</a>
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
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link challenge_sub_nav" href="#">Quizes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link challenge_sub_nav" href="practice_home.php">Practices</a>
    </li>
    <li class="nav-item">
      <a class="nav-link challenge_sub_nav custom_challenge" href="custom_challenge.php">Custom Events</a>
    </li>
    <!--<li class="nav-item">
      <a class="nav-link challenge_sub_nav" href="#">Custom Quiz</a>
    </li>-->
  </ul>
</div>
<!--All plans -->
    <div class="container plan">
	    <div class="flex-container">
            <div class="container content">
                    <div class="form-group">
                    <form>
                        Select your favorite fruit:
                        <select id="mySelect">
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        
                        <input type="button" onclick="getIndex()" value="Go">
                    </form>
            
                <div class="quizdiv">

                    <div class="quiz-inner">
                        <h1>Quiz</h1>
                    </div>

                    <div class="custom_quiz_div">
                        <div class="over_Question"></div>
                        <textarea class="textarea" name="quiz_custom" rows="2" placeholder="Questions"></textarea>
                        <br>
                        <input type="input" class="custom_quiz_options" id="" name="" placeholder="option" /><br>
                        <input type="input" class="custom_quiz_options" id="" name="" placeholder="option" /><br>
                        <input type="input" class="custom_quiz_options" id="" name="" placeholder="option" /><br>
                        <input type="input" class="custom_quiz_options" id="" name="" placeholder="option" /><br><br>

                        <input type="input" class="custom_quiz_options" id="" name="" placeholder="Write your answer here" />         
                    </div>
                    <div id="addd"></div>
                </div>
	        </div>
        </div>
    </div>
</div>
<hr color="gray">
        
        
<footer class="page-footer sticky-bottom font-small blue mb-0 pb-0 pt-4" style="background-color: #393f60; color: #b0b0b0; bottom: 0;">
    
    
        <div class="container-fluid text-center text-md-left">
    
    
        <div class="row">
    
    
            <div class="col-md-6 mt-md-0 mt-3">
    
            
            <h5 class="text-uppercase">CODEPRG</h5>
            <p><a href="contactus.html">Contact us</a></p>
    
            </div>
            
    
            <hr class="clearfix w-100 d-md-none pb-3">
    
            
            <div class="footer_links col-md-3 mb-md-0 mb-3">
    
    
            <h5 class="text-uppercase">Products</h5>
    
            <ul class="list-unstyled">
                <li>
                <a href="#!">Codeprg for Developers</a>
                </li>
                <li>
                <a href="#!">Codeprg for Institutions</a>
                </li>
                <li>
                <a href="#!">Challenges</a>
                </li>
                <li>
                <a href="#!">Courses</a>
                </li>
            </ul>
    
            </div>
            
            <div class="footer_links col-md-3 mb-md-0 mb-3">
    
    
            <h5 class="text-uppercase">Contact Codeprg</h5>
    
            <ul class="list-unstyled">
                <li>
                <a href="#!">About us</a>
                </li>
                <li>
                <a href="#!">Contact us</a>
                </li>
                <li>
                <a href="#!">Feed Back</a>
                </li>
            </ul>
    
            </div>  
        </div>      
        </div> 
    
    <div class="footer-copyright text-center py-3">Copyright © 2020 CODEPRG
        <br><a href="#">Privacy Policy</a>
    </div>
     
</footer>


<script>

  function getIndex() {
    var count = document.getElementById("mySelect").selectedIndex + 1;
    /*var x = "", i;*/
    /*console.log(count);*/
    for (var i=0; i<count; i++) {
        var x = document.createElement("DIV");
        var y = document.createElement("DIV");
        var z = document.createElement("TEXTAREA");
        var a = document.createElement("INPUT");
        var b = document.createElement("INPUT");
        var c = document.createElement("INPUT");
        var d = document.createElement("INPUT");
        var e = document.createElement("INPUT");
        var br1 = document.createElement("br");
        var br2 = document.createElement("br");
        var br3 = document.createElement("br");
        var br4 = document.createElement("br");
        var br5 = document.createElement("br");
        var br6 = document.createElement("br");

        x.classList.add("custom_quiz_div");
        x.setAttribute("id", "add");
        y.classList.add("over_Question");
        z.setAttribute("row", "2");
        z.setAttribute("placeholder", "Question");
        z.setAttribute("name", "quiz_custom");
        z.classList.add("textarea");
        a.setAttribute("type", "input");
        a.setAttribute("placeholder", "option");
        a.setAttribute("name", "");
        a.classList.add("custom_quiz_options");
        b.setAttribute("type", "input");
        b.setAttribute("placeholder", "option");
        b.setAttribute("name", "");
        b.classList.add("custom_quiz_options");
        c.setAttribute("type", "input");
        c.setAttribute("placeholder", "option");
        c.setAttribute("name", "");
        c.classList.add("custom_quiz_options");
        d.setAttribute("type", "input");
        d.setAttribute("placeholder", "option");
        d.setAttribute("name", "");
        d.classList.add("custom_quiz_options");
        e.setAttribute("type", "input");
        e.setAttribute("placeholder", "Answer");
        e.setAttribute("name", "");
        e.classList.add("custom_quiz_options");

        document.getElementById("addd").appendChild(x);
        document.getElementById("add").appendChild(y);
        document.getElementById("add").appendChild(z);
        document.getElementById("add").appendChild(br1);
        document.getElementById("add").appendChild(a);
        document.getElementById("add").appendChild(br2);
        document.getElementById("add").appendChild(b);
        document.getElementById("add").appendChild(br3);
        document.getElementById("add").appendChild(c);
        document.getElementById("add").appendChild(br4);
        document.getElementById("add").appendChild(d);
        document.getElementById("add").appendChild(br5);
        document.getElementById("add").appendChild(br6);
        document.getElementById("add").appendChild(e);
  }
  document.getElementById("myForm").reset();
}
    



</script>

</body>
</html>