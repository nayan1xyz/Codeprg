<!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<style>
.svg-icon{
 width: 1em;
  height: 1em;
  
}

.button{
  border:none;
  cursor: pointer;
}
</style>

</head>
<body>


<script>
function showpw() {
  var pw = document.getElementById('showpw');

  if (pw.type == 'text') {
    pw.type = "password";
  } else {
    pw.type = "text";
  }
}
</script>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" id="showpw" placeholder="Enter Password" name="psw" required>
<svg class="svg-icon" fill="#000" onclick="showpw()" viewBox="0 0 20 20">
							<path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
						</svg>

<form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file">
    <button type="Submit" name="Submit"> UPLOAD</button><br><br>-->
    <?php
/*include 'dbconnection.php';
$user = '2';
$sql = "SELECT * FROM test";
$result = mysqli_query($conn, $sql);
$username=isset($_POST['username']);

  $sql1 = "UPDATE `test` SET `usdata`='$username'";

  $result2 = mysqli_query($conn, $sql1);
  
  echo var_dump($result2);
while($row=mysqli_fetch_assoc($result)){
  

  if($row['userid']==$user){
    
$value=$row['usdata'];
 echo '<input type="text" id="text" placeholder="Text" value="username" '.$value.'" name=""><br>
 ';
}
}
 

?><button type="Submit" name="Submit">Submit</button><br></form> 
</body>
</html>*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <title>fff</title>
</head>
<body>

<?php
    function hit() {
      <?php
function hit(){
$main_user = $_SESSION['username'];
echo $main_user;
$number2 = "1";//1 is equal to sent friend request
$uname2=$_GET['link'];
echo $uname2;
echo $number2;
// $sql1="UPDATE `friends` SET `friend1`='$number2', WHERE `username`='$uname2'";
// $result1=mysqli_query($conn,$sql1);
}
?>
<script>
function myfunction(){
    document.getElementById("cancel_request").innerHTML = "request sent"; 
    document.getElementById("cancel_btn").innerHTML = "Cancel";
}
</script>

<script>
$(document).ready(function(){
    $("#cancel_btn").on("click",function(e){
    $.ajax({
    url: "Friends.php",
    type: "POST",
    success: function(){
        //$("#cancel_request").html(data);
        //document.getElementById("cancel_request").innerHTML = "request sent"; 
        //document.getElementById("cancel_btn").innerHTML = "Cancel";
    }
    });
});
    
}
});
</script>
?>

<?php
  function runMyFunction() {
        hit();
    
    //$num=mysqli_num_rows($result1);
    //if($num>0){
    //while($row=mysqli_fetch_assoc($result1)){
  }
?>

  <?php
    $_SESSION['s_no'] = 1;

    include 'dbconnection.php';

    include 'Friends.php';

    $sql = "SELECT * FROM friends";
    $result = mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);

    if($num > 0) {
      while($row=mysqli_fetch_assoc($result)) {
        $id = $row['s_no'];
        $username = $row['username'];
        ?>
        <div>
          <h3><?php echo $username; ?></h3>
          <div class="actions">
            <?php
              if($id != $_SESSION['s_no']){
                if(Friends::renderFriendShip($_SESSION['s_no'], $id, 'isThereRequestPending') == 1){
                  ?>
                  <button class="request_pending" disable>Request pending</button>
                  <?php
                }
              }else{

              }
              ?>
          </div>
        </div>
        <?php
      }
    }
      ?>

</body>
</html>