<?php

?>
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
<!------------------------>
<nav class="navbar fixed-top navbar-expand-lg">
		
		<a class="navbar-brand" href="#">
			<img src="Capture2.PNG" class="liDuG d-inline-block align-top" alt="codeprgImg">
		</a>
		
		<div class="navbars" id="navbarNavAltMarkup">
		<div class="NiOh">
			<div class="navbar-nav">
				<a class="nav-item nav-link" href="#">Challenges</a>
				<a class="nav-item nav-link" href="#">Courses</a>
				<a class="nav-item nav-link" href="#">Practice</a>
				<a class="nav-item nav-link" href="#">Community</a>
			</div>
			</div>
		
			<div class="VfdSe">
				<div class="vFges">
					<form class="form-inline sea my-1 my-lg-0" action="search.php" method="POST">
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
	
		
		<div class="log_sign1">
			<a class="loginbtn" href="login.php">
			<button class="btn btn-sm" href="#" role="button">LOGIN</a></button>
						
			<button class="btn btn-sm" href="#" role="button"><span class="input-group">
			<a class="loginbtn" href="nsignup.php">SIGNUP</a></button>		
		</div>
	</div>
		
	</nav>

	<div class="row row1 no-gutters">
			<div class="col-md-6 no-gutters mt-5">
				<div class="leftside d-flex justify-content-left align-items-top mt-5 pl-3 ml-3">
					<h1><span class="text">Enjoy your developer <br>
					life with codeprg.</span><br>
					<span class="wel">Welcome to the codeprg community.</span><br>
					<a href="nsignup.php" class="XDr"><button class="btn btn-primary ml-5 mt-5">Get Started</button></a>
				</h1>
				</div>
				
			</div>
			
			<div class="col-md-6 no-gutters GhPlr">
				<div class="rightside d-flex justify-content-left align-items-left">
					<img class="homeImg img img-fluid" src="home-img.png" alt="codeprgHomeImg">
				</div>
			</div>
  </div>
  </div>
  <!--cards for features-->
  <div class="container" >
  <h2 class="text-center mt-5 mb-3">WHAT WE DO</h2>
  <hr width="50%" height="30%" color="gray">
  <div class="row">
  <div class="col-sm-6" data-aos="fade-right">
    <div class="card border-0 m-2" style="background-image: url(cardback.jpg);">
      <div class="card-body">
        <h5 class="card-title"><b>For Developers</b></h5>
        <p class="card-text pb-5">We provide the best culture and a plateform which help you to boost up your skills.
</p>
        <a href="#" class="btn mt-3 btn-outline-primary ">Learn More</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" data-aos="flip-right">
    <div class="card border-0 m-2"  style="background-image: url(cardback.jpg);">
      <div class="card-body">
        <h5 class="card-title"><b>For Beginners</b></h5>
        <p class="card-text">Codeprg contains a lots of materials such as no. of practice questions , quizes , courses etc. with a varaity of difficulity levels which you can learn and enhance your skills in a very short span of time.</p>
        <a href="#" class="mt-3 btn btn-outline-primary">Learn More</a>
      </div>
    </div>
  </div>
</div>
</div>
<div class="container">
<div class="row">
  <div class="col-sm-6 " data-aos="flip-left">
    <div class="card border-0 m-2" style="background-image: url(cardback.jpg);">
      <div class="card-body">
        <h5 class="card-title"><b>For Teachers</b></h5>
        <p class="card-text">Codeprg is not for only coders but it also take care of teachers as well!!.
Here teacher can also be a part of us which can become a 'techmemebers' of Codeprg where they can provide a problem statements to their students/members of Codeprg Community.
</p>
        <a href="#" class="btn btn-outline-primary ">Learn More</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" data-aos="zoom-in">
    <div class="card border-0 m-2"  style="background-image: url(cardback.jpg);">
      <div class="card-body">
        <h5 class="card-title"><b>For Instructors</b></h5>
        <p class="card-text p-2 mt-3 ml-0">Hey Instructor!! now you can able to upload your best course link so that students came directly to your uploaded course link..</p>
        <a href="#" class="mt-4 btn btn-outline-primary">Learn More</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="container">
<div class="row">
  <div class="col-sm-6 " data-aos="flip-up">
    <div class="card border-0 m-2" style="background-image: url(cardback.jpg);">
      <div class="card-body">
        <h5 class="card-title"><b>Our Community</b></h5>
        <p class="card-text mt-4">We provide an open community where students can came across with their problems statements and able to post it so that other students/any users can give the relevant solution of it.

</p>
        <a href="#" class="btn mt-3 btn-outline-primary ">Learn More</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" data-aos="flip-down">
    <div class="card border-0 m-2"  style="background-image: url(cardback.jpg);">
      <div class="card-body">
        <h5 class="card-title"><b>Online Quizes</b></h5>
        <p class="card-text">Create an interactive quiz to generate leads or engage your audience.We provide an interactive tool for creating online quizzes that generate leads, segment your audience, and drive traffic to your quizes.
</p>
        <a href="#" class="btn btn-outline-primary">Learn More</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
