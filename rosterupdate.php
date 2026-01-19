<?php
session_start();
require "functions.php";
$id = $_SESSION['user_id'];
$userid = "$_SESSION[user]";
echo $id;

if(isset($_POST['submit'])){
        
    $hero1 = $_POST['hero1'];
    $hero2 = $_POST['hero2'];
    $hero3 = $_POST['hero3'];
    $hero4 = $_POST['hero4'];
    $hero5 = $_POST['hero5'];
    $hero6 = $_POST['hero6'];

    if($hero6 != ""){

        //insertdata
        $query = "SELECT * FROM users WHERE email = '$userid'";
        $result = mysqli_query($conn, $query);
        //if emal/array exist alert  user 
        if(mysqli_num_rows($result) > 0) {
        $sql1 = "UPDATE users SET hero1='$hero1' WHERE id='$id'";
        $sql2 = "UPDATE users SET hero2='$hero2' WHERE id='$id'";
        $sql3 = "UPDATE users SET hero3='$hero3' WHERE id='$id'";
        $sql4 = "UPDATE users SET hero4='$hero4' WHERE id='$id'";
        $sql5 = "UPDATE users SET hero5='$hero5' WHERE id='$id'";
        $sql6 = "UPDATE users SET hero6='$hero6' WHERE id='$id'";
        mysqli_query($conn,$sql1);
        mysqli_query($conn,$sql2);
        mysqli_query($conn,$sql3);
        mysqli_query($conn,$sql4);
        mysqli_query($conn,$sql5);
        mysqli_query($conn,$sql6);
        header("Location: logedin.php");
        }
        
     else{
        echo "<p> error! </p>";

        
    }
    }
    header("Location: logedin.php");
      }

?>
