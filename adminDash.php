<?php
include 'dbconnection.php';
session_start();
session_regenerate_id(true);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="adminDash.css">
    <title>Admin-Dashboard</title>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Bangers&display=swap');
        </style>
  </head>
  <body>
<?php
// session_start();
	if(isset($_SESSION['username'])){
	if($_SESSION['username']=="Admin"){
		
$sql="SELECT * FROM `codeprg14`";
$result=mysqli_query($conn,$sql);
$account=mysqli_num_rows($result);
$sql="SELECT * FROM `question_asked`";
$result=mysqli_query($conn,$sql);
$questionasked=mysqli_num_rows($result);
$sql="SELECT * FROM `com_categories`";
$result=mysqli_query($conn,$sql);
$totalcat=mysqli_num_rows($result);
$sql="SELECT * FROM `registercontesthere` WHERE `isapprove`='0'";
$result=mysqli_query($conn,$sql);
$approvereq=mysqli_num_rows($result);
echo '
<div class="container text-center">
  <h2 class="mt-4">Admin panel</h2>
          <hr  width="10%"><div class="row text-center mt-5  ">
            <div class="col-md-4 col-sm-6 mt-4">
                  <div class="card shadowcard" style="width: 18rem;">
                    <img src="images/noofcourses.jpg" class="card-img-top" alt="...">
                    <div class="card-body cardcontent">
                      <p class="card-text">Total no of courses : 5000 <br><button class="cardcontent btn ml-4"  data-toggle="modal" data-target="#total_courses">Show all</button></p>
                      </div>
                  </div>
                </div>
          
                
                <div class="col-md-4 col-sm-6  mt-4">
            <div class="card shadowcard" style="width: 18rem;">
              <img src="images/coursereq.jpg" class="card-img-top" alt="...">
                <div class="card-body cardcontent">
                  <p class="card-text">Pending course request : '.$approvereq.' <button class="cardcontent btn ml-4"  data-toggle="modal" data-target="#Approve"> + Approve</button></p>
                </div>
              </div>
        </div>
        
        <div class="col-md-4 col-sm-6 mt-4 ">
          <div class="card shadowcard" style="width: 18rem;">
            <img src="images/noofcat.png" class="card-img-top " alt="...">
            <div class="card-body cardcontent">
              <p class="card-text">No of Categories : '.$totalcat.'<br><button class="cardcontent btn ml-4"  data-toggle="modal" data-target="#add_cat"> + ADD</button></p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-4 ">
              <div class="card shadowcard" style="width: 18rem;">
                <img src="images/loginusers.jpg" class="card-img-top " alt="...">
                <div class="card-body cardcontent">
                  <p class="card-text">Total no. of account : '.$account.'</p>
                </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mt-4 ">
          <div class="card shadowcard" style="width: 18rem;">
            <img src="images/askedque.jpg" class="card-img-top " alt="...">
            <div class="card-body cardcontent">
              <p class="card-text">No of Asked Question : '.$questionasked.' <button class="cardcontent btn ml-4"  data-toggle="modal" data-target="#approve_question"> + Approve</button></p>
                </div>
              </div>
            </div>
          </div>
    <p>
      <div class="container">
        <h3 class="mt-5">Post Information Regarding contest</h3>
        <hr color="gray" width="60%">
        <form method="POST" action="config_sql_\Addannounce.php">
  <div class="form-group">
    
  <h4>Write new Announcement</h4>
 <textarea placeholder="New Announcements" class="form-control" id="exampleFormControlTextarea1" rows="5" name="content" required>
 </textarea>
 <h5>Any link (Optional)</h5>
  <input type="url" name="link" class="form-control"  placeholder="link">
<input type="submit" class="btn btn-primary">
</div>
</form>
    </div>
  </p>';
    }
    else{
        // Admin error message
      echo '<div class="jumbotron">
            <h1 class="display-4">Unable to fetch!</h1>
            <p class="lead"><ul>
            <li>May be you are not <strong>ADMIN</strong> that\'s why this may be caused!!</li>
            <li>May be you have not follow each steps or directly come into the site</li>  
            </ul></p>
            <hr class="my-4">
            <p>To Continue Click on the button below</p>
            <a class="btn btn-primary btn-lg" href="home.php" role="button">Home</a>
          </div>';
        }
  }
  else{
          // not login error msg
    echo '<div class="jumbotron">
          <h1 class="display-4">Unable to fetch!</h1>
          <p class="lead"><ul>
          <li>May be you are not logged in that\'s why this may be caused!!</li>
          <li>May be you have not follow each steps or directly come into the site</li>  
          </ul></p>
          <hr class="my-4">
          <p>To Continue Click on the button below</p>
          <a class="btn btn-primary btn-lg" href="home.php" role="button">Home</a>
        </div>';
      }
?>
 <!-- Button trigger modals starts here -->

<!--Approve Modal -->
<div class="modal fade" id="Approve" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Approve Pending request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php
         $sql="SELECT * FROM `registercontesthere` WHERE `isapprove`='0'";
         $result=mysqli_query($conn,$sql);
         $num=mysqli_num_rows($result);
         if($num>0){
          echo '<div class="table-responsive">
          <table class="table table-striped">
          <thead>
            <tr>
              
              <th scope="col">Author</th>
              <th scope="col">mobile-no</th>
              <th scope="col">Starting Date</th>
              <th scope="col">Video link</th>
              <th scope="col">Price</th>
              <th scope="col">Requested time</th>
              <th scope="col">Approve/Not</th>
            </tr>
          </thead>
          ';
         while($row=mysqli_fetch_assoc($result)){
             $authorname=$row['authorname'];
             $mbno=$row['authormbno'];
             $stdate=$row['stdate'];
             $vdurl=$row['courselink'];
             $price=$row['courseprice'];
             $datetime=$row['datetime'];
             $sno=$row['s.no'];
            echo'
            
             <tbody>
               <tr>
                 
                 <td>'.$authorname.'</td>
                 <td>'.$mbno.'</td>
                 <td>'.$stdate.'</td>
                 <td>'.$vdurl.'</td>
                 <td>'.$price.'</td>
                 <td>'.$datetime.'</td>
                 <td class="row">
                 <a href="config_sql_\Approvecourse.php?id='.$sno.'" class="btn btn-info" value="OK">OK</a> 
                 <a href="config_sql_\Deletecourse.php?id='.$sno.'" class="btn btn-info" value="DEL">DEL</a> 
                 </td>
               </tr>
             </tbody>
           ';
          
         }
         echo ' </table>
         </div>';
        
        }
        else{
          echo "NO pending request";
        }
         
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Ok</button>
      </div>
    </div>
  </div>
</div>


<!--Total Courses Modal -->
<div class="modal fade" id="total_courses" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Total Courses</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


<!--Add Categories Modal -->
<div class="modal fade" id="add_cat" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Categories</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- adding categories into community -->
      <?php
     
      echo '<form method="POST" action="config_sql_\Addcategories.php">
          <div class="form-group">
          <label for="cat-title">Category-Title</label>
          <input type="text" class="form-control" id="cat_title" name="cat_title" aria-describedby="categories_title">
          </div>
          <div class="form-group">
          <label for="descTextarea">Description</label>
          <textarea class="form-control" id="Catdesc" name="cat_desc" rows="4"></textarea>
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-info">+Add</button>
          </div>
      </form>';
      ?>
      </div>
    </div>
  </div>
</div>


<!--Approve Asked question Modal -->
<div class="modal fade" id="approve_question" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Approve Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
         $sql="SELECT * FROM `question_asked` WHERE `isapprove`='0'";
         $result=mysqli_query($conn,$sql);
         $num=mysqli_num_rows($result);
         if($num>0){
          echo '<div class="table-responsive">
          <table class="table table-striped">
          <thead>
            <tr>
            <th scope="col">#S.NO</th>
              <th scope="col">Title</th>
              <th scope="col">Categories</th>
              <th scope="col">Description</th>
              <th scope="col">Username</th>
              <th scope="col">Approve/not</th>
            </tr>
          </thead>
          ';
         while($row=mysqli_fetch_assoc($result)){
             $ques_title=$row['question_title'];
             $ques_desc=$row['question_desc'];
             $posted_user=$row['username'];
             $posted_date=$row['date'];
             $sno=$row['s.no'];
             $cat=$row['categories'];
            echo'
            
             <tbody>
               <tr>
               <td>'.$sno.'</td>
                 <td>'.$ques_title.'</td>
                 <td>'.$cat.'</td>
                 <td>'.$ques_desc.'</td>
                 <td>'.$posted_user.'</td>
                 <td class="row">
                
                 <a href="config_sql_\Approvequestion.php?id='.$sno.'" class="btn btn-info" value="OK">OK</a> 
                 <a href="config_sql_\deleteAskedques.php?id='.$sno.'" class="btn btn-info" value="DEL">DEL</a> 
                 
                 </td>
               </tr>
             </tbody>
           ';
          
         }
         echo ' </table>
         </div>';
        
        }
        else{
          echo "NO pending request";
        }
         
        ?>
        
       
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <!-- <button type="button" class="btn btn-primary">Understood</button> -->
       </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
  </html>