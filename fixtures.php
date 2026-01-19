<?php
 session_start();
 require "checksession.php";
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
    
    
    <style type="text/css">

body{
            background-color: black;
            font-family: Germania One,serif;
        }

        th{
          font-size: 24px;
        }
        
        #bodybgcolor {
       background-color: #2A2525;
        }

        .zoom {
  transition: transform .2s; /* Animation */
}
        .zoom:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

        
        #imgHamlet {
       background-color: black;
        }
        
        #imgHamlet1 {
        background-image: url("images/fire1.jpg");
        background-size: cover;
        background-position: center center;
        height: 300px;
        padding: 300px;
        }
        
        #darkest{
        background-image: url("images/darkestdark1.png");
        background-size: cover;
        background-position: center center;
        }
        
        .navbar-brand-img {
            height: 50px;
            width: 50px;
            margin-right: 10px;
        }
        
        .navbar-brand{
            color:azure;
            font-family: Germania One,serif;
        }
        
        .navbar {
            background-color: rgb(4, 0, 1);
            color:azure;
            font-family: Germania One,serif;
        }
        
        .nav-link{
            color:azure;
            font-family: Germania One,serif;
        }
        
        .nav-link:hover {
            color: red;
        }
        
        .nav-link:focus{
            color: red;
        }
        
        #tablebg{
            background-color: #0f0101;
            
            opacity: 0.9;
            border-radius: 0px 25px 25px 0px;
            
        }
        
        #leaderboard1{
            
            background-color: rgb(4, 0, 1,0.8);
            
        }
        
        #imgborder{
            border: 15px solid transparent;
            border-image: url(https://pics.craiyon.com/2023-05-24/8d5cdd60a38d46fc9d8590054a38c01f.webp) 25% round ;
        }
        
        #imgborder3{
            border: 30px solid transparent;
            border-image: url(circus11.jpg) 10% round ;
            border-bottom: 0px;
        }
        
        #imgborder1{
            border: 15px solid transparent;
            border-image: url(https://pics.craiyon.com/2023-05-24/8d5cdd60a38d46fc9d8590054a38c01f.webp) 25% round ;
        }
        
        
        
        
        
        #footercontain{
            background: #211918;
            position: relative;
            color: azure;
        }
        
        #footerimg1{
        background-image: url("arena1.png");
        background-size: cover;
        background-position: center center;
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0.3;
        }
        
        #footercontain1{
            background: #211918;
            position: relative;
            color: azure;
            
        
        }
        
        #footerimg2{
        background-image: url("arena.entrance_room_wall_darkest.png");
        background-size: cover;
        background-position: center center;
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0.3;
        }
        
        #footertext{
            isolation: isolate;
            
        }
        
         #leadertext{
            isolation: isolate;
        }
        
        #imgdiv {
        background-image: url("loading_screen.town_circus_visit1.png");
        background-size: cover;
        background-position: center top;
        width: 100%;
        height: 350px;
        }
        
        .borderdarkimgtop{
            background-image: url("Loading_screen_Crypts.webp");
        background-size: cover;
        background-position: center center;
        width: 100% auto;
        height: 200px;
        position: relative;
        }
        
        .finisherbot{
        background-color: #211918;
        background-size: cover;
        background-position: center center;
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0.3;
        }
        
        #table1{
          opacity: 1;
          color: white;
        }

        .fixfonts{
          border-style: solid;
          border-width: 7px;
          border-color: black;
          border-radius: 25px 25px 25px 25px;
          font-size: 24px;
          width: 500px; background-color: black;
          margin: auto;
          position:relative;
          text-overflow: hidden;
        }
        
        
  .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,102,203, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}     
        #navbarbg{
          background-color: #0d0000;
border: 5px solid;
border-width: 0px 0px 1px 0px;
border-color: rgba(87, 1, 1, 0.253);
        }

        #newsletter1{
          color: white;
          background-color: #0d0000;
        }

        #leaderboardBody{
          font-size: 20px;
        }

        .textContent{
          text-align: center;
          font-size: 20px;
        }

        .bottomplayer{
          background-color: #720000;
        }
        .topplayer{
          background-color: #002244;
        }

        .headerfix{
          position:relative; 
          left:-20px;
        }

    </style>
    
    <title>Buther's Circus</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
  
    <div>
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
            <a class="nav-link"href="https://metrolink.host/AlexanderForrest/BCPL/fixtures.php">Fixtures</a>
            </li>
            <li class="nav-item">
            <a class="nav-link"href="https://metrolink.host/AlexanderForrest/BCPL/fixtures.php">Results</a>
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
          <?php
          echo $divbtn;
          echo $loginlink;
          echo $profileimg;
          echo $divend;
          ?>
          <div class="collapse" id="navbarSupportedContent1">
          <h4><?php echo $username; ?></h4>
            <hr>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 row">
            <li class="nav-item row">
              <a class="nav-link"href="https://metrolink.host/metrolink.host/Finished%20bcpl/logedin.php">My Account</a>
            </li>
            <hr>
            <li class="nav-item row">
              <a class="nav-link" href="https://metrolink.host/metrolink.host/Finished%20bcpl/signout.php">Sign Out</a>
            </li>
          </ul>
        </div>
            
          </div>
         
      </div>
    </nav>
    </div><! navbar >
    <div class="container text-white d-flex flex-row mb-3 justify-content-around"><div class="d-xs-none d-md-block"><img src="images/Torch.png" width="140px" height="158px"></div>
    <h1 class="text-center headerfix"></h1> <div class=""><img src="images/Torch.png" width="140px" height="158px"></div></div>
    <div id="darkest">
    <div id="" class="container text-white" style="overflow-x: auto;">
        <div class="row mt-4">
        <h3 class=" text-center">Monday 1 April 2024</h3>
        <p></p>
        <div id="Mondayfixtures" class="fixfonts p-3"></div>
        </div>

        <div class="row mt-4" style="margin: auto;">
            <h3 class="col text-center">Tuesday 2 April 2024</h3>
            <p></p>
            <div id="Tuesdayfixtures" class="fixfonts p-3"></div>
            </div>

        <div class="row mt-4">
            <h3 class="text-center">Wednesday 3 April 2024</h3>
            <p></p>
            <div id="Wednesdayfixtures" class="fixfonts p-3"></div>
            </div>

        <div class="row mt-4">
            <h3 class="text-center">Thursday 4 April 2024</h3>
            <p></p>
            <div id="Thursdayfixtures" class="fixfonts p-3"></div>
            </div>
            
        <div class="row mt-4">
            <h3 class="text-center">Friday 5 April 2024</h3>
            <p></p>
            <div id="Fridayfixtures" class="fixfonts p-3"></div>
            </div>

        <div class="row mt-4">
            <h3 class="text-center">Saturday 6 April 2024</h3>
            <p></p>
            <div id="Saturdayfixtures" class="fixfonts p-3"></div>
            </div>

        <div class="row mt-4">
            <h3 class="text-center">Sunday 7 April 2024</h3>
            <p></p>
            <div id="Sundayfixtures" class="fixfonts p-3"></div>
            </div>
    </div>
    </div>

    <div style="height: 100px;"></div>
        
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
        <form>
          <h5>GET THE LATEST ON BCL</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-outline-dark" id="newsletter1" type="button">Subscribe</button>
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
  
<script type="text/javascript" ></script>

<script src="fixtures.js"></script>
</body>
</html>