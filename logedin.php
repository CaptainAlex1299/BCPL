<?php
session_start();
require "functions.php";

$userid = "$_SESSION[user]";
$sql = "SELECT * FROM users WHERE email = '$userid'";
$result = mysqli_query($conn, $sql);
$sql1 = "SELECT * FROM scoreboard";
$result1 = mysqli_query($conn, $sql1);

    $points = "";
    $played = "";
    $kd = "";
    $wins = "";
    $drawn = "";
    $lost = "";
    $kills = "";

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $user = "SELECT * FROM users WHERE email = '$userid'";
        $userresult = mysqli_query($conn, $user);
    }

    while($row = mysqli_fetch_assoc($userresult)){
        $useremail = $row['email'];
        $username = $row['username'];
        $datecreated = $row['date'];
        $hero1 = $row['hero1'];
        $hero2 = $row['hero2'];
        $hero3 = $row['hero3'];
        $hero4 = $row['hero4'];
        $hero5 = $row['hero5'];
        $hero6 = $row['hero6'];
    }

} else{
    echo "there was error";
}

if(mysqli_num_rows($result1) > 0){
  while($row1 = mysqli_fetch_assoc($result1)){
    $userstats = "SELECT * FROM scoreboard WHERE username = '$username'";
    $statsresult = mysqli_query($conn, $userstats);
  }
  while($row1 = mysqli_fetch_assoc($statsresult)){
    $points = $row1['points'];
    $played = $row1['played'];
    $kd = $row1['k/d'];
    $wins = $row1['won'];
    $drawn = $row1['drawn'];
    $lost = $row1['lost'];
    $kills = $row1['kills'];
}
  
} else{
  echo "there was error";
  echo $userid;
        }
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="master.css">
    
    <style type="text/css"></style>
    
    <title>Buther's Circus</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
  
    <div id="nav-toggled">
    <nav class="navbar navbar navbar-expand-md mb-4" id="navbarbg">
      <div class="container-fluid ">
      <img src="images/circus.jpg" class="navbar-brand-img" alt="Brand">
          
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <a class="nav-link" href="#">Butcher's Darkest League</a>
            </li>
            <li class="nav-item">
            <a class="nav-link"href="https://metrolink.host/AlexanderForrest/BCPL/index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="https://metrolink.host/AlexanderForrest/BCPL/fixtures.php">Fixtures</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="https://metrolink.host/AlexanderForrest/BCPL/fixtures.php">Results</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="https://metrolink.host/AlexanderForrest/BCPL/tables.php">Tables</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="https://metrolink.host/AlexanderForrest/BCPL/stats.php">Stats</a>
            </li>
          </ul>
        </div>
          
        <div class="d-flex flex-row bd-highlight">    
        <a class="nav-link" href="https://metrolink.host/AlexanderForrest/BCPL/signout.php">Sign Out</a>
      </div>
    </nav>
    </div><! navbar >

    <div class="text-center text-white" style="margin: 12px;"><h1>YOUR ACCOUNT</h1></div>
    <div id="body-toggled" class="row text-white" style="margin: 0 auto;">
      <div style=" height: auto; background-image: url(images/edgybg.jpg) ; border: solid rgba(245, 245, 244, 0.041); border-width: 1px 1px 1px 1px;" class="col text-white">
        <div style=" margin-top: 20px; margin-bottom: 40px;">
      <h2><div><?php 
      $sql = "SELECT * FROM users WHERE email = '$userid'";
  
  $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
  $result = mysqli_query($conn, $sql);
  //$row = $result->fetch_assoc();

      // Check if a user with the provided email exists
      if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $sqlImg = "SELECT * FROM profileimg WHERE userid= '$id'";
            $resultImg = mysqli_query($conn, $sqlImg);

            while($rowImg = mysqli_fetch_assoc($resultImg)){
              
                if($rowImg['status'] == 0) {
                  echo "<img src='uploads/profile". $id . "." .$rowImg['imgtype']."?". mt_rand(). "'" . "style='width: 200px; height: 200px;border: solid 2px; object-fit: cover;'" .">";
                } else {
                  echo "<img src='uploads/659e743e69cfd440779923.jpg'>";
                }
            }
          }
      }
    else{
      echo " there are no users yet!";
    } $conn->close(); 
    ?><h2> <?php echo $username ?></h2></div></h2>
      <h2>Personal inforation</h2>
      <hr>
      <h2>Email <?php echo $useremail; ?></h2>
      <h2>Account Creation Date <?php echo $datecreated ?></h2>
      <h2><?php if(!check_verify()): ?>
<a href="verify.php">
<button class="ormstyle btn btn-outline-dark" style="color: white; width: 160px; text-align:start;">Verify Your Account</button>
</a>
<?php endif;?> <?php if(check_verify()): ?>
Verified Yes
<?php endif;?></h2>
      <h2>Email updates No</h2>
      <button class="formstyle btn btn-outline-dark mt-2" onclick="toggle3()">Change Profile image</button>
      <form action="upload.php" method="POST" enctype="multipart/form-data" id="profilepic">
    <input class="formstyle custom-file-upload" type="file" name="file">
    <button class="formstyle btn btn-outline-dark" type="submit" name="submit">upload</button>
    </form>
      <hr>
      <h2>Security</h2>
      <button class="formstyle btn btn-outline-dark mt-2" onclick="toggle1()">Change Username</button>
      <div id="usernameblock">
        <form action="updateusername.php" id="updateusernameForm" method="post" class="">
            <p ><input class="formstyle" id="usernameupdate" type="text" name="newusername" placeholder="new username" ></p>
            <p ><input class="formstyle btn " type="submit" value="Update Username" name="submit" id="usernamesubmit"></p>
            
            </form> 
            </div>
      
      
      <div style="margin-top: 20px;">
        <button class="formstyle btn btn-outline-dark mt-2"onclick="toggle2()" style="z-index: 2;">Change Password</button>
            </div>
      </div>
      </div>
    <div style=" height: auto; background-image: url(images/reviewbg.jpg); background-position: center;background-repeat: no-repeat;
  background-size: cover; border: solid rgba(245, 245, 244, 0.041); border-width: 1px 1px 1px 1px;" class="col-lg-6 col-12 text-center">
      
      <div class="" style="margin: 0 auto; margin-top: 20px; margin-bottom: 20px;">
        <h3>Your Roster</h3>
      <div class="col">
        <div class="col">
      <img id="arb" src="ddheroicon/<?php echo "$hero1"; ?>.png" style="width: 85px; height: 85px;">
          <img id="" src="ddheroicon/<?php echo "$hero2"; ?>.png" style="width: 85px; height: 85px;">
          <img id="" src="ddheroicon/<?php echo "$hero3"; ?>.png" style="width: 85px; height: 85px;">
        </div>
        <div class="col">
          <img id="" src="ddheroicon/<?php echo "$hero4"; ?>.png" style="width: 85px; height: 85px;">
          <img id="" src="ddheroicon/<?php echo "$hero5"; ?>.png" style="width: 85px; height: 85px;">
          <img id="" src="ddheroicon/<?php echo "$hero6"; ?>.png" style="width: 85px; height: 85px;">
        </div>
          
          
      </div>
      <button class="formstyle btn btn-outline-dark mt-2" onclick="toggle()">Update Roster</button></div>

      <div class="" style="margin: 0 auto;">
        <h3>Your Stats this season</h3>
      <div class="col text-white">
        
        <div class="col"><h1></h1>

          <div class="champstats" style="background-image: url(images/headerbg.png); background-position: center; margin: 0 auto;">
            <div class="text-start">
              <table class=" table-borderless" style="opacity: 1; color: white;margin: 0 auto; width: 100px;">
              <thead class="">

                <tr>
                  <td scope="col" class="tablecont">Points</td>
                  <td scope="col"> : <?php echo $points ?></td>
                </tr>
                <tr>
                  <td scope="col" class="tablecont">Played</td>
                  <td scope="col"> : <?php echo $played ?></td>
                </tr>
              <tr>
                <td scope="col" class="tablecont">Wins</td>
                <td scope="col"> : <?php echo $wins ?></td>
              </tr>
              <tr>
                <td scope="col" class="tablecont">Draws</td>
                <td scope="col"> : <?php echo $drawn ?></td>
              </tr>
              <tr>
                <td scope="col" class="tablecont">Losses</td>
                <td scope="col"> : <?php echo $lost ?></td>
              </tr>
              <tr>
                <td scope="col" class="tablecont">Kills</td>
                <td scope="col"> : <?php echo $kills ?></td>
              </tr>
              <tr>
                <td scope="col" class="tablecont">KD</td>
                <td scope="col"> : <?php echo $kd ?></td>
              </tr>

            </thead>
          </table>
        </div>
          </div>
          </div>
          
      </div>
      </div>
      </div>
      
    
  </div>
  <div  id="overlayform">
    <div class="text-center text-white">
      <div class="overformbtn"onclick="toggleclose()">&times;</div>
      <div>
      <form action="rosterupdate.php" id="rosterupdateForm" method="post" class="">
        <h1>Submit Your Roster Here!</h1>
        <h3>Choose 6 Heroes</h3>
        <h4 style="width: 50%; margin: 0 auto;" class="">Remember once the season starts you won't be able to change your roster, so choose wisely!<h4>
        <p ><input readonly type="text" class="formstyle" id="hero1" type="text" name="hero1" placeholder="" ></p>
        <p ><input readonly type="text" class="formstyle" id="hero2" type="text" name="hero2" placeholder="" ></p>
        <p ><input readonly type="text" class="formstyle" id="hero3" type="text" name="hero3" placeholder="" ></p>
        <p ><input readonly type="text" class="formstyle" id="hero4" type="text" name="hero4" placeholder="" ></p>
        <p ><input readonly type="text" class="formstyle" id="hero5" type="text" name="hero5" placeholder="" ></p>
        <p ><input readonly type="text" class="formstyle" id="hero6" type="text" name="hero6" placeholder="" ></p>
        <p ><input  class="formstyle btn " type="submit" value="UPDATE ROSTER" name="submit" id="inputroster" ></p>
        
        </form> 
        
      </div>
        

        <div class="">
          <div class="col" style="width: auto; height: auto;">
            <h4>Select Your Heroes!</h4>
          <p class=""><img id="abom" src="ddheroicon/abomination.png">
          <img id="antiq" src="ddheroicon/antiquarian.png" >
          <img id="arbalest" src="ddheroicon/arbalest.png">
          <img id="bountyhunter" src="ddheroicon/bountyhunter.png">
          <img id="crusader" src="ddheroicon/crusader.png">
          <img id="flagellant" src="ddheroicon/flagellant.png">
          <img id="graverobber" src="ddheroicon/graverobber.png">
          <img id="hellion" src="ddheroicon/hellion.png">
          <img id="highwayman" src="ddheroicon/highwayman.png">
          <img id="houndmaster" src="ddheroicon/houndmaster.png">
          <img id="jester" src="ddheroicon/jester.png">
          <img id="leper" src="ddheroicon/leper.png">
          <img id="manatarms" src="ddheroicon/manatarms.png">
          <img id="musketeer" src="ddheroicon/musketeer.png">
          <img id="occultist" src="ddheroicon/occultist.png">
          <img id="plaguedoctor" src="ddheroicon/plaguedoctor.png">
          <img id="shieldbreaker" src="ddheroicon/shieldbreaker.png">
          <img id="vestal" src="ddheroicon/vestal.png"></p>
        </div>
        </div>
      </div>  
    </div>
        
    <div style="height: 200px; width: 100%;"></div>

    <div id="passwordblock">
      <div class="overformbtn"onclick="toggle2close()">&times;</div>
      <h2 style="margin-top: 31px;">Enter New Password</h2>
      <form action="resetpw.php" id="resetpwForm" method="post" class="" style="margin-top: 10%; font-size: 24px; color: aliceblue;">
          <p><input class="formstyle" id="passwordupdate" type="password" name="oldpassword" placeholder="Old password"></p>
          <p style="margin-top: 20px;"><input class="formstyle" id="newpassword" type="password" name="newpassword" placeholder="New password"></p>
          <p style="margin-top: 20px;"><input class="formstyle" id="confirmpassword" type="password" name="confirmpassword" placeholder="Confirm new password"></p>
          <p style="margin-top: 10px;"><input disabled class=" btn btn-light " type="submit" value="Update password" name="submit2" id="newpasswordsubmit"></p>
          
          </form> 
          </div>


        <footer class="py-5 px-5" id="footercontain">
            <div></div>
            <div id="footerimg1"></div>
        <div id="footertext">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>Butcher's Circus League</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Fixtures</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Results</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tables</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Stats</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">News</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Community Discord links</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Darkest Dungeon</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Circus of Shepard</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">DD Tournament Grounds</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Social Media</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Youtube</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Twitter</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Twitch</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Facebook</a></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form id="newsletterForm">
          <h5>GET THE LATEST ON BCL</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-outline-dark" id="newslettersubmitSub" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>© 2022 Company, Inc. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
      </ul>
    </div>
            </div>
            
  </footer>
  
<script type="text/javascript" >

function toggle1() {
  var usernameblock = document.getElementById("usernameblock");
  usernameblock.classList.toggle("toggled");
}
function toggle() {
  var inputroster = document.getElementById("inputroster");
  var div = document.getElementById("overlayform");
  var div2 = document.getElementById("footercontain");
  var div3 = document.getElementById("nav-toggled");
  var div4 = document.getElementById("body-toggled");
  div.classList.toggle("toggled");
  div2.classList.toggle("toggled");
  div3.classList.toggle("toggled");
  div4.classList.toggle("toggled");
  inputroster.removeAttribute('disabled');
}

function toggle3() {
  var profilepic = document.getElementById("profilepic");
  profilepic.classList.toggle("toggled");
}

function toggleclose() {
  toggle();
  inputroster.setAttribute("disabled", "disabled");
}

function toggle2() {
  var newpasswordsubmit = document.getElementById("newpasswordsubmit");
  var passwordblock = document.getElementById("passwordblock");
  var div2 = document.getElementById("footercontain");
  var div3 = document.getElementById("nav-toggled");
  var div4 = document.getElementById("body-toggled");
  passwordblock.classList.toggle("toggled");
  div2.classList.toggle("toggled");
  div3.classList.toggle("toggled");
  div4.classList.toggle("toggled");
  newpasswordsubmit.removeAttribute('disabled');
  
}
function toggle2close(){
  toggle2();
  newpasswordsubmit.setAttribute("disabled", "disabled")
}

        var hero1 = true;
        var hero2 = true;
        var hero3 = true;
        var hero4 = true;
        var hero5 = true;
        var hero6 = true;

        document.getElementById("flagellant").onclick = function(){
        
        var heroval = "flagellant";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("flagellant").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("flagellant").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("flagellant").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("flagellant").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("flagellant").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("flagellant").style.display = "none";
          hero6 = false;
        }
        
      }

      document.getElementById("abom").onclick = function(){
        
        var heroval = "abomination";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("abom").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("abom").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("abom").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("abom").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("abom").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("abom").style.display = "none";
          hero6 = false;
        }
        
      }

      document.getElementById("antiq").onclick = function(){
        
        var heroval = "antiquarian";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("antiq").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("antiq").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("antiq").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("antiq").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("antiq").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("antiq").style.display = "none";
          hero6 = false;
        }
        
      
      }

      document.getElementById("arbalest").onclick = function(){
        
        var heroval = "arbalest";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("arbalest").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("arbalest").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("arbalest").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("arbalest").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("arbalest").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("arbalest").style.display = "none";
          hero6 = false;
        }
      
      }

      document.getElementById("bountyhunter").onclick = function(){
        
        var heroval = "bountyhunter";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("bountyhunter").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("bountyhunter").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("bountyhunter").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("bountyhunter").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("bountyhunter").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("bountyhunter").style.display = "none";
          hero6 = false;
        }
      
      }

      document.getElementById("crusader").onclick = function(){
        
        var heroval = "crusader";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("crusader").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("crusader").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("crusader").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("crusader").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("crusader").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("crusader").style.display = "none";
          hero6 = false;
        }
      
      }

      document.getElementById("graverobber").onclick = function(){
        
        var heroval = "graverobber";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("graverobber").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("graverobber").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("graverobber").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("graverobber").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("graverobber").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("graverobber").style.display = "none";
          hero6 = false;
        }
      
      }

      document.getElementById("hellion").onclick = function(){
        
        var heroval = "hellion";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("hellion").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("hellion").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("hellion").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("hellion").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("hellion").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("hellion").style.display = "none";
          hero6 = false;
        }
      
      }

      document.getElementById("highwayman").onclick = function(){
        
        var heroval = "highwayman";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("highwayman").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("highwayman").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("highwayman").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("highwayman").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("highwayman").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("highwayman").style.display = "none";
          hero6 = false;
        }
      
      }

      document.getElementById("houndmaster").onclick = function(){
        
        var heroval = "houndmaster";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("houndmaster").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("houndmaster").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("houndmaster").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("houndmaster").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("houndmaster").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("houndmaster").style.display = "none";
          hero6 = false;
        }
      
      }

      document.getElementById("jester").onclick = function(){
        
        var heroval = "jester";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("jester").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("jester").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("jester").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("jester").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("jester").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("jester").style.display = "none";
          hero6 = false;
        }
      
      }

      document.getElementById("leper").onclick = function(){
        
        var heroval = "leper";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("leper").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("leper").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("leper").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("leper").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("leper").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("leper").style.display = "none";
          hero6 = false;
        }
      
      }

      document.getElementById("manatarms").onclick = function(){
        
        var heroval = "manatarms";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("manatarms").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("manatarms").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("manatarms").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("manatarms").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("manatarms").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("manatarms").style.display = "none";
          hero6 = false;
        }
      
      }

      document.getElementById("musketeer").onclick = function(){
        
        var heroval = "musketeer";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("musketeer").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("musketeer").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("musketeer").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("musketeer").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("musketeer").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("musketeer").style.display = "none";
          hero6 = false;
        }
      
      }

      document.getElementById("occultist").onclick = function(){
        
        var heroval = "occultist";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("occultist").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("occultist").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("occultist").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("occultist").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("occultist").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("occultist").style.display = "none";
          hero6 = false;
        }
      
      }

      document.getElementById("plaguedoctor").onclick = function(){
        
        var heroval = "plaguedoctor";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("plaguedoctor").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("plaguedoctor").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("plaguedoctor").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("plaguedoctor").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("plaguedoctor").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("plaguedoctor").style.display = "none";
          hero6 = false;
        }
      
      }

      document.getElementById("shieldbreaker").onclick = function(){
        
        var heroval = "shieldbreaker";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("shieldbreaker").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("shieldbreaker").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("shieldbreaker").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("shieldbreaker").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("shieldbreaker").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("shieldbreaker").style.display = "none";
          hero6 = false;
        }
      
      }

      document.getElementById("vestal").onclick = function(){
        
        var heroval = "vestal";
        if(hero1){
          document.getElementById("hero1").value = heroval;
          document.getElementById("vestal").style.display = "none";
          hero1 = false;
        }
        else if(hero2){
          document.getElementById("hero2").value = heroval;
          document.getElementById("vestal").style.display = "none";
          hero2 = false;
        }
        else if(hero3){
          document.getElementById("hero3").value = heroval;
          document.getElementById("vestal").style.display = "none";
          hero3 = false;
        }
        else if(hero4){
          document.getElementById("hero4").value = heroval;
          document.getElementById("vestal").style.display = "none";
          hero4 = false;
        }
        else if(hero5){
          document.getElementById("hero5").value = heroval;
          document.getElementById("vestal").style.display = "none";
          hero5 = false;
        }
        else if(hero6){
          document.getElementById("hero6").value = heroval;
          document.getElementById("vestal").style.display = "none";
          hero6 = false;
        }
      
      }
    

</script>
</body>
</html>