<?php
 require "functions.php";
   //$id = "SELECT id FROM users WHERE email = '$userid'";
   
   if(isset($_SESSION['user'])){
    $useremal1 = $_SESSION['user'];
    $sql = "SELECT * FROM users where email = '$useremal1'";
    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      $username = $row['username'];
      $sqlImg = "SELECT * FROM profileimg WHERE userid= '$id'";
      $resultImg = mysqli_query($conn, $sqlImg);
      while($rowImg = mysqli_fetch_assoc($resultImg)){
        $divbtn = '<div class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="display: block;">';
        $divend= "</div>";
          if($rowImg['status'] == 0) {
            $loginlink = "";
            $profileimg = "<img src='uploads/profile". $id . "." .$rowImg['imgtype']."?". mt_rand(). "'" . "style='width: 50px; height: 50px; object-fit: cover;'" . ">";
          } else{
            $loginlink =  "";
            $profileimg = "<img src='images/iconuser.png" . "'" ."style='width: 50px; height: 50px;'" .">";
          }
      }
    }
  }
  else{
    $divbtn = "";
    $divend= "";
    $loginlink = "<a class='nav-link' href='https://metrolink.host/AlexanderForrest/BCPL/login.php>" . "<p style='position: relative; top: 10px;'>" . "Login" . "</p>" ."</a>";
    $profileimg = "<img src='images/iconuser.png" . "'" ."style='width: 50px; height: 50px;'" .">";
    $username = "stoppit";
  }
  $conn->close();
} else{
  $divbtn = "";
  $divend= "";
  $loginlink = "<a class='nav-link' href=https://metrolink.host/AlexanderForrest/BCPL/login.php>" . "<p style='position: relative; top: 10px;'>" . "Login" . "</p>" ."</a>";
  $profileimg = "<img src='images/iconuser.png" . "'" ."style='width: 50px; height: 50px;'" .">";
  $username = "stoppit";
}
?>