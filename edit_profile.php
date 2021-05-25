<?php require "header.php";
 ?>

<style>
.emp-profile{
    margin-top: 8%;
    border-radius: 0.5rem;
    background: #fff;
    margin-bottom: 8%;
    padding: 4%;
}
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head{
    margin-top: 20px;
    flex-wrap: wrap-reverse;
}
.profile-head h5{
    margin: %;
    color: #333;
}
.nav-tabs{
    margin-bottom:5%;
}
.nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}

</style>
</head>
<body>
<?php

include 'dbconnection.php';

	if(isset($_SESSION['username'])){

        $user=$_SESSION['username'];

$sql="SELECT * FROM `profile` WHERE `username`='$user'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num>0){
    while($row=mysqli_fetch_assoc($result)){
        $firstnm=$row['F_name'];
        $lastnm=$row['L_name'];
        $gendr=$row['Gender'];
        $sts=$row['Status'];
        $hde1=$row['H_d_e'];
        $ctry=$row['contry'];
        $ste=$row['state'];
        $cty=$row['city'];
        $crnt_sts=$row['Current_status'];
        $inst=$row['Institution']; 
        $dob=$row['Birth'];    
        $prg=$row['Programming_Since'];  
        $img=$row['img'];  
    }
}

$sql2="SELECT * FROM `codeprg14` WHERE `username`='$user'";
$result2=mysqli_query($conn,$sql2);
$num1=mysqli_num_rows($result2);
if($num1>0){
    while($rows=mysqli_fetch_assoc($result2)){
        $email=$rows['email'];
    }
}


        
		
	echo '<nav class="navbar fixed-top navbar-expand-lg">
		<a class="navbar-brand xthJy" href="#" style="margin-left: 8px;">
			<img src="Capture2.PNG" width="150px" height="40px" class="d-inline-block align-top" alt="">
		</a>
			<div class="navbars">
				<div class="GiTyN">
					<a class="nav-item nav-link mobile" href="challenge_home.php"><svg class="svg-icon" width="26px" height="26px" fill="#fff" viewBox="0 0 20 20">
					<path d="M8.627,7.885C8.499,8.388,7.873,8.101,8.13,8.177L4.12,7.143c-0.218-0.057-0.351-0.28-0.293-0.498c0.057-0.218,0.279-0.351,0.497-0.294l4.011,1.037C8.552,7.444,8.685,7.667,8.627,7.885 M8.334,10.123L4.323,9.086C4.105,9.031,3.883,9.162,3.826,9.38C3.769,9.598,3.901,9.82,4.12,9.877l4.01,1.037c-0.262-0.062,0.373,0.192,0.497-0.294C8.685,10.401,8.552,10.18,8.334,10.123 M7.131,12.507L4.323,11.78c-0.218-0.057-0.44,0.076-0.497,0.295c-0.057,0.218,0.075,0.439,0.293,0.495l2.809,0.726c-0.265-0.062,0.37,0.193,0.495-0.293C7.48,12.784,7.35,12.562,7.131,12.507M18.159,3.677v10.701c0,0.186-0.126,0.348-0.306,0.393l-7.755,1.948c-0.07,0.016-0.134,0.016-0.204,0l-7.748-1.948c-0.179-0.045-0.306-0.207-0.306-0.393V3.677c0-0.267,0.249-0.461,0.509-0.396l7.646,1.921l7.654-1.921C17.91,3.216,18.159,3.41,18.159,3.677 M9.589,5.939L2.656,4.203v9.857l6.933,1.737V5.939z M17.344,4.203l-6.939,1.736v9.859l6.939-1.737V4.203z M16.168,6.645c-0.058-0.218-0.279-0.351-0.498-0.294l-4.011,1.037c-0.218,0.057-0.351,0.28-0.293,0.498c0.128,0.503,0.755,0.216,0.498,0.292l4.009-1.034C16.092,7.085,16.225,6.863,16.168,6.645 M16.168,9.38c-0.058-0.218-0.279-0.349-0.498-0.294l-4.011,1.036c-0.218,0.057-0.351,0.279-0.293,0.498c0.124,0.486,0.759,0.232,0.498,0.294l4.009-1.037C16.092,9.82,16.225,9.598,16.168,9.38 M14.963,12.385c-0.055-0.219-0.276-0.35-0.495-0.294l-2.809,0.726c-0.218,0.056-0.351,0.279-0.293,0.496c0.127,0.506,0.755,0.218,0.498,0.293l2.807-0.723C14.89,12.825,15.021,12.603,14.963,12.385"></path>
					</svg><span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link XiOhy" href="challenge_home.php">Challenges<span class="sr-only">(current)</span></a>
				</div>
				<div class="GiTyN">
					<a class="nav-item nav-link mobile" href="course_home.php"><svg class="svg-icon" width="26px" height="26px" fill="#fff" viewBox="0 0 20 20">
					<path d="M14.911,1.295H5.09c-0.737,0-1.339,0.603-1.339,1.339v14.733c0,0.736,0.603,1.338,1.339,1.338h9.821c0.737,0,1.339-0.602,1.339-1.338V2.634C16.25,1.898,15.648,1.295,14.911,1.295 M15.357,17.367c0,0.24-0.205,0.445-0.446,0.445H5.09c-0.241,0-0.446-0.205-0.446-0.445v-0.893h10.714V17.367z M15.357,15.58H4.644V4.42h10.714V15.58z M15.357,3.527H4.644V2.634c0-0.241,0.205-0.446,0.446-0.446h9.821c0.241,0,0.446,0.206,0.446,0.446V3.527z"></path>
					</svg></a>
					<a class="nav-item nav-link XiOhy" href="course_home.php">Courses</a>
				</div>
				<div class="GiTyN">
					<a class="nav-item nav-link mobile" href="practice_home.php"><svg class="svg-icon" width="26px" height="26px" fill="#fff" viewBox="0 0 20 20">
					<path d="M9.634,10.633c0.116,0.113,0.265,0.168,0.414,0.168c0.153,0,0.308-0.06,0.422-0.177l4.015-4.111c0.229-0.235,0.225-0.608-0.009-0.836c-0.232-0.229-0.606-0.222-0.836,0.009l-3.604,3.689L6.35,5.772C6.115,5.543,5.744,5.55,5.514,5.781C5.285,6.015,5.29,6.39,5.522,6.617L9.634,10.633z"></path>
					<path d="M17.737,9.815c-0.327,0-0.592,0.265-0.592,0.591v2.903H2.855v-2.903c0-0.327-0.264-0.591-0.591-0.591c-0.327,0-0.591,0.265-0.591,0.591V13.9c0,0.328,0.264,0.592,0.591,0.592h15.473c0.327,0,0.591-0.264,0.591-0.592v-3.494C18.328,10.08,18.064,9.815,17.737,9.815z"></path>
					</svg></a>
					<a class="nav-item nav-link XiOhy" href="practice_home.php">Practice</a>
				</div>
				<div class="GiTyN">
					<a class="nav-item nav-link mobile" href="community_home.php"><svg class="svg-icon" width="26px" height="26px" fill="#fff" viewBox="0 0 20 20">
						<path d="M17.534,10.458l-3.587-6.917c-0.088-0.168-0.262-0.275-0.452-0.275H6.571c-0.189,0-0.363,0.107-0.452,0.275L2.775,9.989c-0.081,0.134-0.159,0.261-0.211,0.409l-0.031,0.06c-0.027,0.05-0.006,0.104-0.014,0.157c-0.044,0.178-0.109,0.348-0.109,0.537v3.293c0,1.262,1.028,2.289,2.29,2.289h10.603c1.262,0,2.288-1.027,2.288-2.289v-3.293c0-0.097-0.043-0.178-0.055-0.271C17.594,10.747,17.607,10.597,17.534,10.458z M6.88,4.284h6.306l2.405,4.639c-0.1-0.013-0.188-0.059-0.289-0.059h-2.354c-0.27,0-0.491,0.208-0.508,0.477c-0.082,1.292-1.154,2.305-2.441,2.305c-1.287,0-2.359-1.013-2.44-2.305C7.542,9.073,7.32,8.865,7.052,8.865H4.7c-0.077,0-0.142,0.037-0.217,0.043L6.88,4.284zM16.573,14.445c0,0.7-0.57,1.271-1.271,1.271H4.7c-0.701,0-1.271-0.571-1.271-1.271v-3.293c0-0.122,0.038-0.231,0.07-0.343l0.235-0.455C3.966,10.073,4.306,9.882,4.7,9.882h1.907c0.324,1.595,1.732,2.782,3.394,2.782c1.66,0,3.07-1.188,3.394-2.782h1.909c0.7,0,1.271,0.57,1.271,1.271V14.445z"></path>
					</svg></a>
					<a class="nav-item nav-link XiOhy" href="community_home.php">Community</a>
				</div>
				<div class="GiTyN">
					<a class="nav-item nav-link mobile" href="mfriend.php"><svg class="svg-icon" width="26px" height="26px" fill="#fff" viewBox="0 0 20 20">
					<path d="M15.573,11.624c0.568-0.478,0.947-1.219,0.947-2.019c0-1.37-1.108-2.569-2.371-2.569s-2.371,1.2-2.371,2.569c0,0.8,0.379,1.542,0.946,2.019c-0.253,0.089-0.496,0.2-0.728,0.332c-0.743-0.898-1.745-1.573-2.891-1.911c0.877-0.61,1.486-1.666,1.486-2.812c0-1.79-1.479-3.359-3.162-3.359S4.269,5.443,4.269,7.233c0,1.146,0.608,2.202,1.486,2.812c-2.454,0.725-4.252,2.998-4.252,5.685c0,0.218,0.178,0.396,0.395,0.396h16.203c0.218,0,0.396-0.178,0.396-0.396C18.497,13.831,17.273,12.216,15.573,11.624 M12.568,9.605c0-0.822,0.689-1.779,1.581-1.779s1.58,0.957,1.58,1.779s-0.688,1.779-1.58,1.779S12.568,10.427,12.568,9.605 M5.06,7.233c0-1.213,1.014-2.569,2.371-2.569c1.358,0,2.371,1.355,2.371,2.569S8.789,9.802,7.431,9.802C6.073,9.802,5.06,8.447,5.06,7.233 M2.309,15.335c0.202-2.649,2.423-4.742,5.122-4.742s4.921,2.093,5.122,4.742H2.309z M13.346,15.335c-0.067-0.997-0.382-1.928-0.882-2.732c0.502-0.271,1.075-0.429,1.686-0.429c1.828,0,3.338,1.385,3.535,3.161H13.346z"></path>
					</svg></a>
				</div>
			<div class="GiTyN">
				<a class="nav-item nav-link mobile" href="mprofile.php"><svg class="svg-icon" width="26px" height="26px" fill="#fff" viewBox="0 0 20 20">
					<path d="M16.803,18.615h-4.535c-1,0-1.814-0.812-1.814-1.812v-4.535c0-1.002,0.814-1.814,1.814-1.814h4.535c1.001,0,1.813,0.812,1.813,1.814v4.535C18.616,17.803,17.804,18.615,16.803,18.615zM17.71,12.268c0-0.502-0.405-0.906-0.907-0.906h-4.535c-0.501,0-0.906,0.404-0.906,0.906v4.535c0,0.502,0.405,0.906,0.906,0.906h4.535c0.502,0,0.907-0.404,0.907-0.906V12.268z M16.803,9.546h-4.535c-1,0-1.814-0.812-1.814-1.814V3.198c0-1.002,0.814-1.814,1.814-1.814h4.535c1.001,0,1.813,0.812,1.813,1.814v4.534C18.616,8.734,17.804,9.546,16.803,9.546zM17.71,3.198c0-0.501-0.405-0.907-0.907-0.907h-4.535c-0.501,0-0.906,0.406-0.906,0.907v4.534c0,0.501,0.405,0.908,0.906,0.908h4.535c0.502,0,0.907-0.406,0.907-0.908V3.198z M7.733,18.615H3.198c-1.002,0-1.814-0.812-1.814-1.812v-4.535c0-1.002,0.812-1.814,1.814-1.814h4.535c1.002,0,1.814,0.812,1.814,1.814v4.535C9.547,17.803,8.735,18.615,7.733,18.615zM8.64,12.268c0-0.502-0.406-0.906-0.907-0.906H3.198c-0.501,0-0.907,0.404-0.907,0.906v4.535c0,0.502,0.406,0.906,0.907,0.906h4.535c0.501,0,0.907-0.404,0.907-0.906V12.268z M7.733,9.546H3.198c-1.002,0-1.814-0.812-1.814-1.814V3.198c0-1.002,0.812-1.814,1.814-1.814h4.535c1.002,0,1.814,0.812,1.814,1.814v4.534C9.547,8.734,8.735,9.546,7.733,9.546z M8.64,3.198c0-0.501-0.406-0.907-0.907-0.907H3.198c-0.501,0-0.907,0.406-0.907,0.907v4.534c0,0.501,0.406,0.908,0.907,0.908h4.535c0.501,0,0.907-0.406,0.907-0.908V3.198z"></path>
				</svg></a>
			</div>
		</div>
		<div class="VfdSE XiOhy">
			<div class="gytdq">
				<form class="form-inline sea my-2 my-lg-0" action="search.php" method="POST">
					<div class="FgraZ">
						<div class="CtyUo">
							<input class="form-control search ds-input" name="search" type="search" placeholder="Search" aria-label="Search"  dir="auto">
						</div>
					</div>
				</form>
			</div>
		</div>

		<div class="friends_chat XiOhy">
			<svg width="26px" height="26px" viewBox="0 0 16 16" class="bi bi-chat-right-quote-fill" fill="#b0b0b0" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM7.194 4.766c.087.124.163.26.227.401.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 7.333 4 6.587 4 5.667 4 4.747 4.776 4 5.734 4c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324.085.083.161.174.227.272zM11 7.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666 0-.92.777-1.667 1.734-1.667.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324.085.083.161.174.227.272.087.124.164.26.228.401.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z"/>
			</svg>
		</div>
		
		<div class="notifications XiOhy">
			<svg width="26px" height="26px" viewBox="0 0 16 16" class="bi bi-bell" fill="#b0b0b0" xmlns="http://www.w3.org/2000/svg">
				<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
				<path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
			</svg>
		</div>
		
		<div class="Profile_logout XiOhy">
		<div id="mainboxs">
		
		</div>
			<div class="dropdownmenu">
				<svg width="1.47em" height="1.47em" fill="#b0b0b0" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
				</svg>
				<button class="dropbtn" style="padding: 8px;"> '.$user.' </button>
					<div class="dropdown-content" id="navbarNav";">
						<a class="nav-item nav-link" href="profile.php?link='.$_SESSION['username'].'">Profile</a>
						<a class="nav-item nav-link" href="edit_profile.php">Edit Profile</a>
							 ';
						 if($user=="Admin"){
							echo '<a class="nav-item nav-link" href="adminDash.php">Dashboard</a>';
						}
						echo '
						<a class="nav-item nav-link" href="logout.php">Logout</a>
					</div>
			</div>
		</div>
	</nav>';
    }
?>
<?php
  
    echo '<div class="container emp-profile">
            <h5>Edit Profile</h5>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4"> 
                        <div class="profile-head">
                            
                        </div>
                        <div class="profile-img">';
                        if($img == 2){
                            echo '<img src="/upload/'.$user.'.png?'.mt_rand().'" width="315" height="315" alt="profile"/>';
                        }else{
                            echo '<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="default profile"/>';
                        }
                            
                        echo '<div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                            <button type="submit" name="Submits">UPLOAD</button>
                        </div>
                    </div>
                </div>
                </form>
                <form class="md-form" action="config_sql_\inserteditprofile.php" method="post">
                <div class="row">
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                    </li>
                                </ul>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p>'.$user.'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>First Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                
                                            <div class="Name">
                                                <input type="text" name="F_name" class="name" placeholder="First name" value="'.$firstnm.'" required>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                
                                            <div class="Name">
                                                <input type="text" name="L_name"  class="lname" placeholder="Last name" value="'.$lastnm.'" required>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$email.'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="Gender">
                                                    <input type="radio" class="gender" id="male" name="gender" value="male" required>
                                                    <label for="male">Male</label>
                                                    <input type="radio" class="gender" id="female" name="gender" value="female" required>
                                                    <label for="female">Female</label>
                                                    <input type="radio" class="gender" id="other" name="gender" value="other" required>
                                                    <label for="other">Other</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="birthday">Birthday:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="Birth">
                                                    <input type="date" id="birthday" name="Birth" value="'.$dob.'" required>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Status</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="Status">
                                                    <input type="radio" id="beginner" name="Status" value="beginner">
                                                    <label for="beginner">Beginner</label>
                                                    <input type="radio" id="intermeditate" name="Status" value="intermeditate">
                                                    <label for="intermeditate">Intermeditate</label>
                                                    <input type="radio" id="professional" name="Status" value="professional">
                                                    <label for="professional">Professional</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="pro_since">Programming since</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="Pro_since">
                                                    <input name="Programming_Since" type="number" placeholder="y y y y" value="'.$prg.'" min="1985" max="2020">
                                                </div>
                                            </div>
                                        </div>
                                            <script>
                                                document.querySelector("input[type=number]").oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
                                            </script>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Highest degree earned</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="H_D_E">
                                                    <input type="text" id="h_d_e" name="H_d_e" placeholder="Highest degree earned" value="'.$hde1.'" required>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Locatation</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="Contry">  
                                                    <select name="country" class="countries" id="countryId" required>
                                                        <option value="'.$ctry.'">Select Country</option>
                                                    </select>
                                                    <select name="state" class="states" id="stateId" required>
                                                        <option value="'.$ste.'">Select State</option>
                                                    </select>
                                                    <select name="city" class="cities" id="cityId" required>
                                                        <option value="'.$cty.'">Select City</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
                                            <script src="//geodata.solutions/includes/countrystatecity.js"></script>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Status</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="Current_status">
                                                    <input type="radio" id="student" name="Current_status" value="student">
                                                    <label for="current_status">Student</label>
                                                    <input type="radio" id="professionals" name="Current_status" value="professional">
                                                    <label for="current_status">Professional</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Institution</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="Institution">
                                                    <input type="text" id="institution" name="institution" value="'.$inst.'" placeholder="Institution" required>
                                                </div>
                                                    <br>
                                                    
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <input  class="btn btn-primary" type="submit" id="submit" value="Submit" name="submit">
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>       
                </div>
            </form>    
        </div>
    </div>';
    ?>
</div>
</div>
</div>
</div>

    
    <?php require "footer_bg.php"; ?>
    
    <script>
        var x = '<?php echo $gendr?>';
        if('male' === x){
            document.getElementById("male").checked = true;
        } else{
            document.getElementById("male").checked = false;
        }
        if('female' === x){
            document.getElementById("female").checked = true;
        } else{
            document.getElementById("female").checked = false;
        }
        if('other' === x){
            document.getElementById("other").checked = true;
        } else{
            document.getElementById("other").checked = false;
        }        
        var y = '<?php echo $crnt_sts?>';
        if('student' === y){
            document.getElementById("student").checked = true;
        } else{
            document.getElementById("student").checked = false;
        }
        if('professional' === y){
            document.getElementById("professionals").checked = true;
        } else{
            document.getElementById("professionals").checked = false;
        }
        var z = '<?php echo $sts?>';
        if('beginner' === z){
            document.getElementById("beginner").checked = true;
        } else{
            document.getElementById("beginner").checked = false;
        }
        if('intermeditate' === z){
            document.getElementById("intermeditate").checked = true;
        } else{
            document.getElementById("intermeditate").checked = false;
        }
        if('professional' === z){
            document.getElementById("professional").checked = true;
        } else{
            document.getElementById("professional").checked = false;
        }
    </script>
</body>
</html>
