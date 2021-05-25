<nav class="navbar fixed-top navbar-expand-lg">
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
			<form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
				<div class="">
					<div class="">
						<input class="form-control ds-input" name="search" type="search" placeholder="Search" aria-label="Search" dir="auto">
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
				<button class="dropbtn" style="padding: 8px;"> <?php echo $user ?></button>
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
	</nav>