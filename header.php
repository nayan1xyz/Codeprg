<?php
    session_start();
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Codeprg | Home</title>
	 <link rel="icon" href="favicon.ico" type="image/gif/icon"> 
		<meta charset="UTF-8">		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="Keywords" content=" ">
		<meta name="Description" content=" ">
		<meta name="author" content="Pratish Shrivastava, Nayan Vishwakarma">
		<meta name="google-site-verification" content="9WPKtE_6WWuR6twpjfDydSinIJS-okDcqYt3q4Q5ikY" />

		<link rel="stylesheet" href="style2.css">
		<link rel="stylesheet" href="style.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
.mobile{
	display: none;
}

.liDuG {
    width: 150px;
    height: 40px;
}

.XiOhy{
    margin: 0 2px 0 0;
}
@media only screen and (max-width: 880px) {
  /* For tablets:*/
	.navbar{
		width: 100%;
	}
    
    .navbars{
	    margin-left: 20rem;
	}

	.navbar-nav, .VfdSe, .friends_chats, .notification{
		display: none;
	}
	
	/*lg_nav*/
	.xthJy{
		width: 100%;
		text-align: center;
	}

	.navbar-brand img{
		height: 50px;
	}

	.mobile{
	    display: contents;

	}

	.XiOhy{
		display: none;
	}

	.GiTyN{
		width: 100%;
	}
	

}

@media only screen and (max-width: 520px) {
  /* For phone:*/

	.navbar{
		width: 100%;
	}

	.navbar-brand{
		margin-right: 6%;
	}
	
	.navbars{
	    margin-left: auto;
	}

	.navbar-nav, .VfdSe, .friends_chats, .notification, .rightside, .homeImg {
		display: none;
	}
	
	/*lg_nav*/
	.xthJy{
		width: 100%;
		text-align: center;
	}

	.navbar-brand img{
		height: 50px;
	}

	.mobile{
	display: contents;

	}

	.XiOhy{
		display: none;
	}

	.GiTyN{
		width: 100%;
		text-align: center;
	}
	
	.challenge_nav{
	    margin-top: 120px !important;
	    font-size: 1rem;
	}

}

@media only screen and (max-width: 419px) {
  /* For phone:*/
	.navbar{
		width: 100%;
	}

    .navbar-brand{
        margin-right: 0;   
    }
    

	.navbar-nav, .VfdSe, .friends_chats, .notification, .rightside, .homeImg {
		display: none;
	}
	
	.text{
		font-size: 36px;
	}
	
   .media{
	flex-direction: column;
  }
  
  .media-body{
	padding: inherit;
  }
  
  
  .challenge_sub_nav{
	  font-size: 1rem;
  }

  .challenge_nav{
	  margin-top: 134px;
  }

}

}

@media only screen and (max-width: 400px) {
  /* For phone:*/
	body{
		background: cover;
		background-size: fixed;
	}

	.navbar{
		width: 100%;
	}

	.liDuG {
		width: 100px;
		height: 40px;
	}	

	.navbar-brand {
		margin-right: 1.626rem;
	}

	.navbar-nav, .VfdSe, .friends_chats, .notification, .rightside, .homeImg {
		display: none;
	}

	.text{
		font-size: 32px;
	}
	
	

}

@media only screen and (max-width: 340px) {
  /* For phone:*/
	body{
		background: cover;
		background-size: fixed;
	}

	.navbar{
		width: 100%;
	}

	.liDuG {
		width: 100px;
		height: 40px;
	}

	.navbar-brand {
		margin-right: 0;
	}

	.navbars {
		margin-left: 2px;
	}

	.navbar-nav, .VfdSe, .friends_chats, .notification, .rightside, .homeImg {
		display: none;
	}

	.text{
		font-size: 32px;
	}

}

.navbars, .navbarss{
    display: flex;
    flex-basis: auto;
    flex-grow: 1;
    align-items: center;
}

.row1 {
	margin-top: 120px;
}

.leftside, .rightside{
	margin-top: 20px;
	height: 400px;
	width: 100%;
}

.leftside {
	margin: 0 0 0 16px;
}

.leftside h1{
	color: #097bbf;
}

.leftside .btn .XDr{
	text-decoration: none;
}

.leftside .wel{
	color: #000;
	font-size: 20px;
}

.rightside img {
	transform: translateX(-20px);
}

.containers{

	margin-top: 100px;
	width: 100%;
	height: 80px;
	/*background: #fff;*/
}

.containers h3{
	margin: auto;
	padding: 20px 0 0 20px;
	justify-content: center;
}


.poLhy{
    margin: 140px 6px 0;
}

.hiweo{
    display: block ruby; ;
    font-size: 24px;
    font-weight: 600;
    text-transform: uppercase;
}

.pag{
    text-decoration: none;
    color: #222;
}

.whtus{
    background-color: #fff;
    height: 40px;
    margin: 60px 20px;
    text-align: center;
    font-size: 20px;
}

.whtus p{
    font-weight: 400;
    text-transform: uppercase;
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
	box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);
	border-radius: 10px;
}

@media only screen and (max-width: 419px) {
    .leftside{
        height: 300px;
    }
    .row{
        margin-top: 60px;
    }
}

@media only screen and (max-width: 520px) {
  
.challenge_nav{
    margin-top: 120px;
}

.challenge_sub_nav{
	font-size: 1rem;
}

  }
}

.challenge_main {
    background-color: #ffffff;
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
</style>
