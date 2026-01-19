<?php
session_start();
require "functions.php";
$id = $_SESSION['user_id'];
echo $id;
if(isset($_POST['submit'])){
        $file = $_FILES['file'];
    
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
    
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
    
        $allowed = array('jpg', 'jpeg', 'png', 'pdf');
        
        if(in_array($fileActualExt, $allowed)){
    
          if($fileError === 0){
            if($fileSize < 500000){
              $fileNameNew = "profile".$id. ".".$fileActualExt;
              $fileDestination = 'uploads/'.$fileNameNew;
              move_uploaded_file($fileTmpName, $fileDestination);
              $sql1 = "UPDATE profileimg SET status= 0 WHERE userid= '$id';";
              $sql = "UPDATE profileimg SET imgtype='$fileActualExt' WHERE userid= '$id';";
              $result = mysqli_query($conn,$sql);
              $result1 = mysqli_query($conn,$sql1);
              echo "image uploaded";
              header("Location: logedin.php");
            }
            else{
              echo "img file size is too big";
            }
    
          }else{
            echo "there was an error uploading ur file";
          }
    
        } else{
          echo "you cannot upload files of this type!";
        }
    
      }
      ?>