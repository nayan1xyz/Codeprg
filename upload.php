<?php session_start();
$imgss = $_SESSION['username'];
include 'dbconnection.php';

    if (isset($_POST['Submits'])) {
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 10000000) {
                    $fileNameNew = ".".$fileActualExt;
                    $fileDestination = '/storage/ssd5/176/14374176/public_html/upload/'.$imgss.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $sql="UPDATE `profile` SET img=2 WHERE username='$imgss';";
                    $result=mysqli_query($conn,$sql);
                    header("Location: edit_profile.php?uploadsuccess");
                } else {
                    echo "your file is big";
                }
            } else{
                echo "error to upload";
            }
        } else{
            echo "cant upload";
        }

    }
?>