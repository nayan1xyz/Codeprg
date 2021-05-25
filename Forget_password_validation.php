<?php
include 'dbconnection.php';
session_start();
$otpsent=$_SESSION['otp'];
$email=$_SESSION['email'];
//echo $email;
$updated=false;
$redirect=false;
$password_doesnotmatch=false;
$otp_doesnotmatch=false;


if(isset($_POST['verifyotp']))
{
    if($_SERVER['REQUEST_METHOD']){
        $otp=mysqli_escape_string($conn, $_POST['verifyotp']);
        $password=mysqli_escape_string($conn, $_POST['password']);
        $cpassword=mysqli_escape_string($conn, $_POST['cpassword']);
        if($password==$cpassword){
           if($otp==$otpsent){
            $sql="UPDATE `codeprg14` SET `password` = '$password' WHERE `codeprg14`.`email` = '$email'";
            $result=mysqli_query($conn,$sql);
            if($result){
                $updated=true;
            }
           } else{
            $otp_doesnotmatch=true;
           }
        }
        else{
            $password_doesnotmatch=true;
        }
    }
}

?>


<!-- ////////////////////////////////////////////// -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style2.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <title>signup</title>

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

</style>

</head>

<body>


    <nav class="navbar fixed-top navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="logo.jpg" width="150px" height="40px" class="d-inline-block align-top">
        </a>
    </nav>

    <div class="heloo">
        <div class="XEdOp">
		    <div class="pOxje">
                <form method="post">
                    <div class="logindiv">
                        <div class="title text-center">CHANGE PASSWORD </div>
                        <?php
                    
                        if($updated){
                            header("Location: login.php"); 
                        if(isset($_SESSION['email'])){
                        
                            $emailm = $_SESSION['email'];
                            
                            //the subject
                            $sub = "PASSWORD CHANGED!!";
                            //the message
                            $msg = "Hi! this is codeprg your password has been successfully changed.Please login to continue...
                            
                            
                                
                            
                            We are happy to see you soon in community!
                                                
                                                
                            Thanks for choosing us!! 
                                                
                            Note : If password is not changed you then pls contact us or you can reply us we are happy to solve your problems 
                                                    
                            With Regards
                                            
                            Team CodePrg
                            THANKYOU";
                                //recipient email here
                            $rec = $emailm;
                            
                            //send email
                            mail($rec,$sub,$msg);
                            }
                        
                            
                        }
                        if($password_doesnotmatch){
                            echo '<h5 class="text-center">Password doesnot matched!</h5>'; 
                            }
                            if($otp_doesnotmatch){
                                echo '<h5 class="text-center">OTP doesnot matched!</h5>'; 
                                }    
                                
                        ?>
                        <div class="fields">

                            <div class="username"><svg class="svg-icon" fill="#999" viewBox="0 0 20 20">
                                    <path
                                        d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z">
                                    </path>
                                </svg>

                                <input required type="text" name="verifyotp" class="user-name"
                                    placeholder="Enter OTP"></div>


                            <div class="password"><svg class="svg-icon" fill="#999" viewBox="0 0 20 20">
                                    <path
                                        d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878">
                                    </path>
                                </svg>

                                <input required type="password" name="password" class="user-password"
                                    placeholder="new password"></div>

                            <div class="password"><svg class="svg-icon" fill="#999" viewBox="0 0 20 20">
                                    <path
                                        d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878">
                                    </path>
                                </svg>

                                <input required type="confirm-password" name="cpassword" class="user-password"
                                    placeholder="Confirm new password">
                            </div>

                        </div>
                        <input type="submit" class="signin-button" value="Change Password">

                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php require "footer_bg.php"; ?>

</body>
</html>