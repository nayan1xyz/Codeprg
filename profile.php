<?php require "header.php";
include 'dbconnection.php';

?>
<style>
.emp-profile{
    padding:3%;
    margin-top: 3%;

    border-radius: 0.5rem;
    background: #fff;
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
    margin-top: 180px;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
@media only screen and (max-width: 419px) {
  .profile-head{
    margin-top: 60px;
  }
  .GvByh{
      display: none;
  }
  .lohui{
      flex-wrap: wrap-reverse;
  }
  .pOuyQ{
      margin-top: 10px;
  }
  .profile-work{
    padding: 14%;
    margin-top: -15%;
    }
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
@media only screen and (max-width: 419px) {
  .profile-work{
    padding: 4%;
    margin-top: -15%;
    }
    .hytRe{
        margin-top: 18px;
    }
}
@media only screen and (max-width: 580px) {
	.GiTyN .svg-icon6{
		background-color: #000;
		border-radius: 4px;
		padding: 4px;
	}  
}
</style>

</head>
<body>
<?php
	if(isset($_SESSION['username'])){


		$user=$_SESSION['username'];
		
	echo '<nav class="navbar fixed-top navbar-expand-lg">
		<a class="navbar-brand xthJy" href="index.php" style="margin-left: 8px;">
			<img src="Capture2.PNG" width="150px" height="40px" class="d-inline-block align-top" alt="">
		</a>
			<div class="navbars">
			    <div class="GiTyN">
					<a class="nav-item nav-link mobile" href="index.php">
					<svg class="svg-icon0" width="26px" height="26px" fill="#fff" viewBox="0 0 20 20">
							<path d="M15.971,7.708l-4.763-4.712c-0.644-0.644-1.769-0.642-2.41-0.002L3.99,7.755C3.98,7.764,3.972,7.773,3.962,7.783C3.511,8.179,3.253,8.74,3.253,9.338v6.07c0,1.146,0.932,2.078,2.078,2.078h9.338c1.146,0,2.078-0.932,2.078-2.078v-6.07c0-0.529-0.205-1.037-0.57-1.421C16.129,7.83,16.058,7.758,15.971,7.708z M15.68,15.408c0,0.559-0.453,1.012-1.011,1.012h-4.318c0.04-0.076,0.096-0.143,0.096-0.232v-3.311c0-0.295-0.239-0.533-0.533-0.533c-0.295,0-0.534,0.238-0.534,0.533v3.311c0,0.09,0.057,0.156,0.096,0.232H5.331c-0.557,0-1.01-0.453-1.01-1.012v-6.07c0-0.305,0.141-0.591,0.386-0.787c0.039-0.03,0.073-0.066,0.1-0.104L9.55,3.75c0.242-0.239,0.665-0.24,0.906,0.002l4.786,4.735c0.024,0.033,0.053,0.063,0.084,0.09c0.228,0.196,0.354,0.466,0.354,0.76V15.408z"></path>
						</svg>
					<span class="sr-only">(current)</span></a>
				</div>
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
				<a class="nav-item nav-link mobile" href="mprofile.php"><svg class="svg-icon6" width="26px" height="26px" fill="#fff" viewBox="0 0 20 20">
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
$pgs="";
global $firstnm,$lastnm,$gendr,$sts,$hde1,$ctry,$ste,$cty,$crnt_sts,$inst;
//$firstnm=$gendr=$sts=$hde1=$cty=$crnt_sts=$inst='Not Available';
$uname=$_GET['link'];
$sql="SELECT * FROM `profile` WHERE `username`='$uname'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num>0){
while($row=mysqli_fetch_assoc($result)){
   
   // if($row['username']==$_SESSION['username']){
       
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
        $pgs=$row['Programming_Since'];
    //}
}


    $current_usr=$_SESSION['username'];
    $req_already_sent=false;
    $sql_add="SELECT * FROM `requestingtable` WHERE `rqsendby`='$current_usr' AND `rqrecievedby`='$uname'";
    $result=mysqli_query($conn,$sql_add);
    $num=mysqli_num_rows($result);
    if($num>0){
        $req_already_sent=true;
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
       $username=$_POST['addfriend'];
       
       if($num<1){
       $sql_insert="INSERT INTO `requestingtable` ( `rqsendby`, `rqrecievedby`, `date`) VALUES ( '$current_usr', '$uname', CURRENT_TIMESTAMP)";
       $result_insert=mysqli_query($conn,$sql_insert);
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
       <strong>Sucess!</strong> Your request has been sent!!
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>';
       /* this is the place pratish remove req button*/
            echo $req_already_sent;
            echo "hello";
            if(!$req_already_sent){ 
                echo '<h3 class="dark-color">
                <form class="form-inline my-2 my-lg-0" method="POST">
                <p id="cancel_request"></p>                          
                <input id="cancel_btn" onclick="myfuntion()" name="addfriend" data-loading-text="loading stuff..." type="submit" class="btn btn-outline-primary" value="Add friend">
                </form>
                </h3>';
            }
            else {
                echo '<h3 class="dark-color">      
                <h5><span class="badge badge-secondary mt-2">Request Sent</span></h5>
                </h3>';
            }
        
        
       }
    else{
        $req_already_sent=true;
    }
    }
        
        
        
} else{


    echo '<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">User Name Not Found!!</h1>
      <p class="lead"><ul>
      Suggestions:

<li>Make sure that all words are spelled correctly.</li>
<li>Try different keywords.</li>
<li>Try more general keywords.</li>
<li>Try fewer keywords.</li>
      </ul>.</p>
    </div>
  </div>';
}
?>


<br>
<br>

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <!--<h5>
                                        
                                    </h5>
                                    <h6>
                                        
                                    </h6>
                                    <p class="proile-rating"><span></span></p>-->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 GvByh">
                        <a class="profile-edit-btn" href="edit_profile.php">Edit Profile</a>
                    </div>
                </div>
                <div class="row lohui">
                    <div class="col-md-4 hytRe">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row pOuyQ">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>@<?php echo $uname;?></p>
                                            </div>
                                        </div>
                                        <div class="row pOuyQ">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $firstnm." ".$lastnm;?></p>
                                            </div>
                                        </div>
                                        <div class="row pOuyQ">
                                            <div class="col-md-6">
                                                <label>Status</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $sts;?></p>
                                            </div>
                                        </div>
                                        <div class="row pOuyQ">
                                            <div class="col-md-6">
                                                <label>current Status</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $crnt_sts;?></p>
                                            </div>
                                        </div>
                                        <div class="row pOuyQ">
                                            <div class="col-md-6">
                                                <label>Institution</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $inst;?></p>
                                            </div>
                                        </div>
                                        <div class="row pOuyQ">
                                            <div class="col-md-6">
                                                <label>Programming Since</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $pgs;?></p>
                                            </div>
                                        </div>
                                        <div class="row pOuyQ">
                                            <div class="col-md-6">
                                                <label>Location</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $ctry." ".$ste." ".$cty;?></p>
                                            </div>
                                        </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>
            <div class="media-body">
                <h5 class="mt-0" style="font-weight: 800;">List Course</h5>
                <p style="font-weight: 400;">list your course here</p>
                <a href="register_for_contest.php">Register Now</a>
            </div>
        </div>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	function myfuntion(){
        document.getElementById("cancel_request").innerHTML = "request sent"; 
        document.getElementById("cancel_btn").value = "Cancel";
    }
</script>

<?php require "footer_bg.php"; ?>
</body>
</html>