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
            color: white;
            background-color: #202020;
            font-family: Germania One,serif;
        }

        th{
          font-size: 24px;
        }
        
        body {
       background-color: #0f0f0f;
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
        background-image: url("images/darkestdark.webp");
        background-size: contain;
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
        background-image: url(images/bg12344.png);
        background-size: cover;
        background-position: top;
            
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
        background-image: url("images/arena1.png");
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
        background-image: url("images/arena.entrance_room_wall_darkest.png");
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
        background-image: url("images/loading_screen.town_circus_visit1.png");
        background-size: cover;
        background-position: center top;
        width: 100%;
        height: 350px;
        }
        
        .borderdarkimgtop{
            background-image: url("images/Loading_screen_Crypts.webp");
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
          font-size: 24px;
        }
        
        
  .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,102,203, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}     
        #navbarbg{
          background-color: #0d0000;
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
          background-color: #603D18;
        }
        .topplayer{
          background-color: #8c0000;
          
        }

        .herodiv{
          position: relative;
          float: left;
        }

        .champstats{
          background-size: cover;
          width: 300px;
          border: solid 5px;
          padding: 5px;
          font-size: 20px;
          border-color: #313131;
          display: block;
        }

        #champdropdown{
          position: relative;
          background-image: url("images/arrow12.jpg");
          height: 30px; 
          width: 80px; 
          background-size: cover;
          background-position: center center;
          rotate: 0deg;
        } 

        #trinketdropdown{
          position: relative;
          background-image: url("images/arrow12.jpg");
          height: 30px; 
          width: 80px; 
          background-size: cover;
          background-position: center center;
          rotate: 0deg;
        } 
        #bansdropdown{
          position: relative;
          background-image: url("images/arrow12.jpg");
          height: 30px; 
          width: 80px; 
          background-size: cover;
          background-position: center center;
          rotate: 0deg;
        }

        #tierdropdown{
          position: relative;
          background-image: url("images/arrow12.jpg");
          height: 30px; 
          width: 80px; 
          background-size: cover;
          background-position: center;
          rotate: 0deg;
        } 

        .tablecont{
          position: relative; 
          top: 10px;
        }

        .trinketportrait{
          width: 40px;
          height: 40px;
        }

        .tierportrait{
          width: 80px;
          height: 80px;
        }

        .tierportrait1{
          object-fit: contain;
          border: #313131 solid;
          border-width: 1px;
          width: 80px;
          height: 80px;
        }

        

        #tableborder{
          border: 45px solid transparent;
            border-image: url(images/border6.png) 25% round ;
            border-image-slice: 60;
            border-top: 0;
            overflow: auto;
        }

        #tableborder1{
            border: 45px solid transparent;
            border-image: url(images/border7.png) 25% round ;
            border-image-slice: 45;
            border-bottom: 0;
            border-left: 0;
            border-right: 0;
        }

        #tableborder::-webkit-scrollbar {
  width: 12px;               /* width of the entire scrollbar */
}

#tableborder::-webkit-scrollbar-track {
  background: rgb(54, 35, 0);        /* color of the tracking area */
}

#tableborder::-webkit-scrollbar-thumb {
  background-color: rgb(110, 2, 2);    /* color of the scroll thumb */
  border-radius: 20px;       /* roundness of the scroll thumb */
  border: 3px solid rgb(0, 0, 0);  /* creates padding around scroll thumb */
}
        
    
    </style>
    
    <title>Buther's Circus</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
  
    <div>
    <nav class="navbar navbar navbar-expand-md" id="navbarbg">
      <div class="container-fluid ">
      <img src="images/circus.jpg" class="navbar-brand-img" alt="Brand">
          
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <a class="nav-link" href="#top">Butcher's Darkest League</a>
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
            <h4>Kelloks1299</h4>
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
    <div style="position: sticky; top: 0px; background-image: url(images/headerbg1.png); background-size: cover; background-repeat: no-repeat; z-index: 2; width: 100%;">
    <div class="text-center" style="width: 400px; margin: 0 auto;"><h1 style="position: relative; top: 20px;">STAT CENTER</h1></div>
    <div class=" text-center">
      <div class="text-center" style="margin-top: 50px; width: auto; max-width: 100px; display: inline-block; margin-right: 30px;"class="">
      <h1 class=""> Hero</h1>
      <a href="#top"><button id="champdropdown" class="" style="background-color: #313131;"></button></a>
    </div>

    <div class="text-center" style="width: auto; max-width: 100px; margin: 0 auto; margin-top: 50px; display: inline-block; margin-right: 30px;"class="m">
      <h1 class="">Trinket</h1>
      <a href="#top"><button id="trinketdropdown" class="" style="background-color: #313131;"></button></a>
      </div>

      <div style="max-width: 100px; width: auto; margin: 0 auto; margin-top: 50px; display: inline-block; margin-right: 30px;" class="">
        <h1 class=""> Tiers</h1>
        <a href="#top"><button id="tierdropdown" class="" style="background-color: #313131;"></button></a>
        </div>
        <div style="max-width: 80px; width: auto; margin: 0 auto; margin-top: 50px; display: inline-block;" class="">
          <h1 class="">Bans</h1>
          <a href="#top"><button id="bansdropdown" class="" style="background-color: #313131;"></button></a>
          </div>
      </div>
    </div>

        <div class="container-fluid" id="chamionstats" style="margin-top: 50px; display: none;">
          <div class="row" style="margin-top: 1px;">
    <div class="col"><h1>Abomination</h1><img src="ddheroicon/abomination_portrait_roster.png" style="height:100px; width:110px;">
    
    <div class="champstats" style="background-image: url(ddheroheader/abomination_guild_header.png);">
    <p>Direct Damage dealt : 234</p>
    <p>Stress dealt : 24</p>
    <p>Health healed : 88</p>
    <p>Health Bars dropped : 20</p>
    <p>Death Blow Resists : 12</p>
    <p>Death Blow checks : 12</p>
    <p>Death Blows dealt : 4</p>
    </div>
    </div>
    <div class="col"><h1>Antiquarian</h1><img src="ddheroicon/antiquarian_portrait_roster.png" style="height:100px; width:110px;">

      <div class="champstats" style="background-image: url(ddheroheader/antiquarian_guild_header.png);">
      <p>Direct Damage dealt : 134</p>
      <p>Stress dealt : 24</p>
      <p>Health healed : 88</p>
      <p>Health Bars dropped : 20</p>
      <p>Death Blow Resists : 22</p>
      <p>Death Blow checks : 12</p>
      <p>Death Blows dealt : 4</p>
      </div>
      </div>

      <div class="col"><h1>Arbalest</h1><img src="ddheroicon/arbalest_portrait_roster.png" style="height:100px; width:110px;">
        <div class="champstats" style="background-image: url(ddheroheader/arbalest_guild_header.png);">
        <p>Direct Damage dealt : 134</p>
        <p>Stress dealt : 24</p>
        <p>Health healed : 88</p>
        <p>Health Bars dropped : 20</p>
        <p>Death Blow Resists : 22</p>
        <p>Death Blow checks : 12</p>
        <p>Death Blows dealt : 4</p>
        </div>
        </div>

        <div class="col"><h1>Bounty Hunter</h1><img src="ddheroicon/bounty_hunter_portrait_roster.png" style="height:100px; width:110px;">
          <div class="champstats" style="background-image: url(ddheroheader/bounty_hunter_guild_header.png);">
          <p>Direct Damage dealt : 134</p>
          <p>Stress dealt : 24</p>
          <p>Health healed : 88</p>
          <p>Health Bars dropped : 20</p>
          <p>Death Blow Resists : 22</p>
          <p>Death Blow checks : 12</p>
          <p>Death Blows dealt : 4</p>
          </div>
          </div>  
  </div>

  <div class="row">
    <div class="col"><h1>Crusader</h1><img src="ddheroicon/crusader_portrait_roster.png" style="height:100px; width:110px;">
    
    <div class="champstats" style="background-image: url(ddheroheader/crusader_guild_header.png);">
    <p>Direct Damage dealt : 234</p>
    <p>Stress dealt : 24</p>
    <p>Health healed : 88</p>
    <p>Health Bars dropped : 20</p>
    <p>Death Blow Resists : 12</p>
    <p>Death Blow checks : 12</p>
    <p>Death Blows dealt : 4</p>
    </div>
    </div>
    <div class="col"><h1>Flagellant</h1><img src="ddheroicon/flagellant_portrait_roster.png" style="height:100px; width:110px;">

      <div class="champstats" style="background-image: url(ddheroheader/flagellant_guild_header.png);">
      <p>Direct Damage dealt : 134</p>
      <p>Stress dealt : 24</p>
      <p>Health healed : 88</p>
      <p>Health Bars dropped : 20</p>
      <p>Death Blow Resists : 22</p>
      <p>Death Blow checks : 12</p>
      <p>Death Blows dealt : 4</p>
      </div>
      </div>

      <div class="col"><h1>Grave Robber</h1><img src="ddheroicon/grave_robber_portrait_roster.png" style="height:100px; width:110px;">
        <div class="champstats" style="background-image: url(ddheroheader/grave_robber_guild_header.png);">
        <p>Direct Damage dealt : 134</p>
        <p>Stress dealt : 24</p>
        <p>Health healed : 88</p>
        <p>Health Bars dropped : 20</p>
        <p>Death Blow Resists : 22</p>
        <p>Death Blow checks : 12</p>
        <p>Death Blows dealt : 4</p>
        </div>
        </div>

        <div class="col"><h1>Hellion</h1><img src="ddheroicon/hellion_portrait_roster.png" style="height:100px; width:110px;">
          <div class="champstats" style="background-image: url(ddheroheader/hellion_guild_header.png);">
          <p>Direct Damage dealt : 134</p>
          <p>Stress dealt : 24</p>
          <p>Health healed : 88</p>
          <p>Health Bars dropped : 20</p>
          <p>Death Blow Resists : 22</p>
          <p>Death Blow checks : 12</p>
          <p>Death Blows dealt : 4</p>
          </div>
          </div>  
  </div>

  <div class="row">
    <div class="col"><h1>Highwayman</h1><img src="ddheroicon/highwayman_portrait_roster.png" style="height:100px; width:110px;">
    
    <div class="champstats" style="background-image: url(ddheroheader/highwayman_guild_header.png);">
    <p>Direct Damage dealt : 234</p>
    <p>Stress dealt : 24</p>
    <p>Health healed : 88</p>
    <p>Health Bars dropped : 20</p>
    <p>Death Blow Resists : 12</p>
    <p>Death Blow checks : 12</p>
    <p>Death Blows dealt : 4</p>
    </div>
    </div>
    <div class="col"><h1>Houndmaster</h1><img src="ddheroicon/houndmaster_portrait_roster.png" style="height:100px; width:110px;">

      <div class="champstats" style="background-image: url(ddheroheader/houndmaster_guild_header.png);">
      <p>Direct Damage dealt : 134</p>
      <p>Stress dealt : 24</p>
      <p>Health healed : 88</p>
      <p>Health Bars dropped : 20</p>
      <p>Death Blow Resists : 22</p>
      <p>Death Blow checks : 12</p>
      <p>Death Blows dealt : 4</p>
      </div>
      </div>

      <div class="col"><h1>Jester</h1><img src="ddheroicon/jester_portrait_roster.png" style="height:100px; width:110px;">
        <div class="champstats" style="background-image: url(ddheroheader/jester_guild_header.png);">
        <p>Direct Damage dealt : 134</p>
        <p>Stress dealt : 24</p>
        <p>Health healed : 88</p>
        <p>Health Bars dropped : 20</p>
        <p>Death Blow Resists : 22</p>
        <p>Death Blow checks : 12</p>
        <p>Death Blows dealt : 4</p>
        </div>
        </div>

        <div class="col"><h1>Leper</h1><img src="ddheroicon/leper_portrait_roster.png" style="height:100px; width:110px;">
          <div class="champstats" style="background-image: url(ddheroheader/leper_guild_header.png);">
          <p>Direct Damage dealt : 134</p>
          <p>Stress dealt : 24</p>
          <p>Health healed : 88</p>
          <p>Health Bars dropped : 20</p>
          <p>Death Blow Resists : 22</p>
          <p>Death Blow checks : 12</p>
          <p>Death Blows dealt : 4</p>
          </div>
          </div>  
  </div>

  <div class="row">
    <div class="col"><h1>Manatarms</h1><img src="ddheroicon/man_at_arms_portrait_roster.png" style="height:100px; width:110px;">
    
    <div class="champstats" style="background-image: url(ddheroheader/man_at_arms_guild_header.png);">
    <p>Direct Damage dealt : 234</p>
    <p>Stress dealt : 24</p>
    <p>Health healed : 88</p>
    <p>Health Bars dropped : 20</p>
    <p>Death Blow Resists : 12</p>
    <p>Death Blow checks : 12</p>
    <p>Death Blows dealt : 4</p>
    </div>
    </div>
    <div class="col"><h1>Musketeer</h1><img src="ddheroicon/musketeer_portrait_roster.png" style="height:100px; width:110px;">

      <div class="champstats" style="background-image: url(ddheroheader/musketeer_guild_header.png);">
      <p>Direct Damage dealt : 134</p>
      <p>Stress dealt : 24</p>
      <p>Health healed : 88</p>
      <p>Health Bars dropped : 20</p>
      <p>Death Blow Resists : 22</p>
      <p>Death Blow checks : 12</p>
      <p>Death Blows dealt : 4</p>
      </div>
      </div>

      <div class="col"><h1>Occultist</h1><img src="ddheroicon/occultist_portrait_roster.png" style="height:100px; width:110px;">
        <div class="champstats" style="background-image: url(ddheroheader/occultist_guild_header.png);">
        <p>Direct Damage dealt : 134</p>
        <p>Stress dealt : 24</p>
        <p>Health healed : 88</p>
        <p>Health Bars dropped : 20</p>
        <p>Death Blow Resists : 22</p>
        <p>Death Blow checks : 12</p>
        <p>Death Blows dealt : 4</p>
        </div>
        </div>

        <div class="col"><h1>PlagueDoctor</h1><img src="ddheroicon/plague_doctor_portrait_roster.png" style="height:100px; width:110px;">
          <div class="champstats" style="background-image: url(ddheroheader/plague_doctor_guild_header.png);">
          <p>Direct Damage dealt : 134</p>
          <p>Stress dealt : 24</p>
          <p>Health healed : 88</p>
          <p>Health Bars dropped : 20</p>
          <p>Death Blow Resists : 22</p>
          <p>Death Blow checks : 12</p>
          <p>Death Blows dealt : 4</p>
          </div>
          </div>  
  </div>

  <div class="row">
    <div class="col"><h1>Shieldbreaker</h1><img src="ddheroicon/shieldbreaker_portrait_roster.png" style="height:100px; width:110px;">
    
    <div class="champstats" style="background-image: url(ddheroheader/shieldbreaker_guild_header.png);">
    <p>Direct Damage dealt : 234</p>
    <p>Stress dealt : 24</p>
    <p>Health healed : 88</p>
    <p>Health Bars dropped : 20</p>
    <p>Death Blow Resists : 12</p>
    <p>Death Blow checks : 12</p>
    <p>Death Blows dealt : 4</p>
    </div>
    </div>
    <div class="col"><h1>Vestal</h1><img src="ddheroicon/vestal_portrait_roster.png" style="height:100px; width:110px;">

      <div class="champstats" style="background-image: url(ddheroheader/vestal_guild_header.png);">
      <p>Direct Damage dealt : 134</p>
      <p>Stress dealt : 24</p>
      <p>Health healed : 88</p>
      <p>Health Bars dropped : 20</p>
      <p>Death Blow Resists : 22</p>
      <p>Death Blow checks : 12</p>
      <p>Death Blows dealt : 4</p>
      </div>
      </div>
      <div class="col"></div>
      <div class="col"></div>

  </div>

    </div>
  <div id="trinketstats" class="container-fluid text-nowrap" style="margin-top: 20px; display: none;">
    
    <div id="tablebg" style="max-width: 700px; margin: auto;">
      <div id="tableborder1">
      <div id="tableborder">
    <table class="table table-sm table-borderless" style="opacity: 1; color: white;">
    <thead class="" >
        
        <tr>
        <th scope="col" class="ps-2"><abbr>Pos</abbr></th>
        <th scope="col" class="" style="position: relative; left: 50px;">Trinket</th>
        <th scope="col" class=""><abbr>GP</abbr></th>
        <th scope="col" class=""><abbr>WR</abbr></th>
        <th scope="col" class=""><abbr>Used most by</abbr></th>
        </tr>
                        </thead>
<tbody id="leaderboardBody">
  <tr>
    <td scope="col" class="tablecont p-3">1</td>
    <td scope="col"><img src="trinket/inv_trinket+brass_knuckles.png" style="width: 40px; height: 60px;"> Brass Knucles</td>
    <td scope="col" class="tablecont">41</td>
    <td scope="col" class="tablecont">53%</td>
    <td scope="col" class=""><img src="ddheroicon/crusader_portrait_roster.png" class="trinketportrait">  
      <img src="ddheroicon/abomination_portrait_roster.png" class="trinketportrait">  <img src="ddheroicon/vestal_portrait_roster.png" class="trinketportrait"> </td>
  </tr>

  <tr>
    <td scope="col" class="tablecont p-3">2</td>
    <td scope="col"><img src="trinket/inv_trinket+the_finisher.png" style="width: 40px; height: 60px;"> The Finisher</td>
    <td scope="col" class="tablecont">60</td>
    <td scope="col" class="tablecont">50%</td>
    <td scope="col" class=""><img src="ddheroicon/bounty_hunter_portrait_roster.png" class="trinketportrait"> <img src="ddheroicon/jester_portrait_roster.png" class="trinketportrait">
      <img src="ddheroicon/highwayman_portrait_roster.png" class="trinketportrait"></td>
  </tr>

  <tr>
    <td scope="col" class="tablecont p-3">3</td>
    <td scope="col"><img src="trinket/inv_trinket+rancid_cure_all.png" style="width: 40px; height: 60px;"> Rancid Cure All</td>
    <td scope="col" class="tablecont">24</td>
    <td scope="col" class="tablecont">49%</td>
    <td scope="col" class=""><img src="ddheroicon/man_at_arms_portrait_roster.png" class="trinketportrait"> <img src="ddheroicon/vestal_portrait_roster.png" class="trinketportrait">
      <img src="ddheroicon/arbalest_portrait_roster.png" class="trinketportrait"></td>
  </tr>

  <tr>
    <td scope="col" class="tablecont p-3">4</td>
    <td scope="col"><img src="trinket/inv_trinket+pitfighter_helm.png" style="width: 40px; height: 60px;"> Pitfighter Helm</td>
    <td scope="col" class="tablecont">12</td>
    <td scope="col" class="tablecont">59%</td>
    <td scope="col" class=""><img src="ddheroicon/man_at_arms_portrait_roster.png" class="trinketportrait"> <img src="ddheroicon/crusader_portrait_roster.png" class="trinketportrait">
      <img src="ddheroicon/leper_portrait_roster.png" class="trinketportrait"></td>
  </tr>

  <tr>
    <td scope="col" class="tablecont p-3">5</td>
    <td scope="col"><img src="trinket/inv_trinket+monkey_paw.png" style="width: 40px; height: 60px;"> Monkey's Paw</td>
    <td scope="col" class="tablecont">36</td>
    <td scope="col" class="tablecont">44%</td>
    <td scope="col" class=""><img src="ddheroicon/jester_portrait_roster.png" class="trinketportrait"> <img src="ddheroicon/shieldbreaker_portrait_roster.png" class="trinketportrait">
      <img src="ddheroicon/grave_robber_portrait_roster.png" class="trinketportrait"></td>
  </tr>

  <tr>
    <td scope="col" class="tablecont p-3">6</td>
    <td scope="col"><img src="trinket/inv_trinket+crimson_hook.png" style="width: 40px; height: 60px;"> Crimson hook</td>
    <td scope="col" class="tablecont">36</td>
    <td scope="col" class="tablecont">44%</td>
    <td scope="col" class=""><img src="ddheroicon/houndmaster_portrait_roster.png" class="trinketportrait"> <img src="ddheroicon/flagellant_portrait_roster.png" class="trinketportrait">
      <img src="ddheroicon/jester_portrait_roster.png" class="trinketportrait"></td>
  </tr>

  <tr>
    <td scope="col" class="tablecont p-3">7</td>
    <td scope="col"><img src="trinket/inv_trinket+crushed_hemlock.png" style="width: 40px; height: 60px;"> Crushed Hemlock</td>
    <td scope="col" class="tablecont">36</td>
    <td scope="col" class="tablecont">44%</td>
    <td scope="col" class=""><img src="ddheroicon/flagellant_portrait_roster.png" class="trinketportrait"> <img src="ddheroicon/jester_portrait_roster.png" class="trinketportrait">
      <img src="ddheroicon/hellion_portrait_roster.png" class="trinketportrait"></td>
  </tr>

  <tr>
    <td scope="col" class="tablecont p-3">8</td>
    <td scope="col"><img src="trinket/inv_trinket+spiked_bat.png" style="width: 40px; height: 60px;"> Spiked Bat</td>
    <td scope="col" class="tablecont">36</td>
    <td scope="col" class="tablecont">44%</td>
    <td scope="col" class=""><img src="ddheroicon/flagellant_portrait_roster.png" class="trinketportrait"> <img src="ddheroicon/jester_portrait_roster.png" class="trinketportrait">
      <img src="ddheroicon/houndmaster_portrait_roster.png" class="trinketportrait"></td>
  </tr>

  <tr>
    <td scope="col" class="tablecont p-3">9</td>
    <td scope="col"><img src="trinket/inv_trinket+eagle_eye_talisman.png" style="width: 40px; height: 60px;"> Eagle Eye Talisman</td>
    <td scope="col" class="tablecont">36</td>
    <td scope="col" class="tablecont">44%</td>
    <td scope="col" class=""><img src="ddheroicon/highwayman_portrait_roster.png" class="trinketportrait"> <img src="ddheroicon/leper_portrait_roster.png" class="trinketportrait">
      <img src="ddheroicon/arbalest_portrait_roster.png" class="trinketportrait"></td>
  </tr>

  <tr>
    <td scope="col" class="tablecont p-3">10</td>
    <td scope="col"><img src="trinket/inv_trinket+exotic_snuff.png" style="width: 40px; height: 60px;"> Exotic Snuff</td>
    <td scope="col" class="tablecont">36</td>
    <td scope="col" class="tablecont">44%</td>
    <td scope="col" class=""><img src="ddheroicon/leper_portrait_roster.png" class="trinketportrait"> <img src="ddheroicon/arbalest_portrait_roster.png" class="trinketportrait">
      <img src="ddheroicon/man_at_arms_portrait_roster.png" class="trinketportrait"></td>
  </tr>
</tbody>
</table>
      </div>
  </div>
</div>
</div>

<div id="tierlist" class="container-fluid text-nowrap" style="margin-top: 50px; display: none;">
  
  <table class="table table-sm table-borderless" id="tablebg" style="max-width: 700px; margin: auto; border: solid 2px; border-color: #603D18;">
  <thead class="" >
      
      <tr>
      <th scope="col" class="text-center" style="background-color: #8c0000; width: 100px;"><h1 style="position: relative; top:-5px;">S</h1></th>
      <td scope="col" class=""><img src="ddheroicon/crusader_portrait_roster.png" class="tierportrait"> <img src="ddheroicon/flagellant_portrait_roster.png" class="tierportrait">
        <img src="ddheroicon/arbalest_portrait_roster.png" class="tierportrait"> <img src="ddheroicon/abomination_portrait_roster.png" class="tierportrait"></td>
      </tr>

      <tr>
        <th scope="col" class="text-center" style="background-color:#ac5a0d; width: 100px;"><h1 style="position: relative; top:-5px;">A</h1></th>
        <td scope="col" class=""><img src="ddheroicon/man_at_arms_portrait_roster.png" class="tierportrait"> <img src="ddheroicon/bounty_hunter_portrait_roster.png" class="tierportrait">
          <img src="ddheroicon/houndmaster_portrait_roster.png" class="tierportrait"> <img src="ddheroicon/antiquarian_portrait_roster.png" class="tierportrait"></td>
        </tr>

        <tr>
          <th scope="col" class="text-center" style="background-color:#adab13; width: 100px;"><h1 style="position: relative; top:-5px;">B</h1></th>
          <td scope="col" class=""><img src="ddheroicon/grave_robber_portrait_roster.png" class="tierportrait"> <img src="ddheroicon/jester_portrait_roster.png" class="tierportrait">
            <img src="ddheroicon/occultist_portrait_roster.png" class="tierportrait"> <img src="ddheroicon/highwayman_portrait_roster.png" class="tierportrait"> <img src="ddheroicon/vestal_portrait_roster.png" class="tierportrait"></td>
          </tr>
          <tr>
            <th scope="col" class="text-center" style="background-color:#225703; width: 100px;"><h1 style="position: relative; top:-5px;">C</h1></th>
            <td scope="col" class=""><img src="ddheroicon/musketeer_portrait_roster.png" class="tierportrait"> <img src="ddheroicon/shieldbreaker_portrait_roster.png" class="tierportrait">
              <img src="ddheroicon/leper_portrait_roster.png" class="tierportrait"></td>
            </tr>
            <tr>
              <th scope="col" class="text-center" style="background-color:#07aa33; width: 100px;"><h1 style="position: relative; top:-5px;">D</h1></th>
              <td scope="col" class=""><img src="ddheroicon/plague_doctor_portrait_roster.png" class="tierportrait"> <img src="ddheroicon/hellion_portrait_roster.png" class="tierportrait">
                </td>
              </tr>
                      </thead>
<tbody id="leaderboardBody">
</tbody>
</table>
</div>


<div id="banlist" class="container-fluid text-nowrap" style="margin-top: 50px; display: none;">
  
  <table class="table table-sm table-borderless" id="tablebg" style="max-width: 700px; margin: auto; border: solid 2px; border-color: #603D18;">
  <thead class="" >
      
      <tr>
      <th scope="col" class="text-center" style="background-color: #8c0000; width: 100px;"><h1 style="position: relative; top:-15px; font-size: 25px;">Banned</h1></th>
      <td scope="col" class=""><img src="trinket/inv_trinket+gauntlet_of_absolution.png" class="tierportrait1"> <img src="trinket/inv_trinket+sacred_blade.png" class="tierportrait1">
        <img src="trinket/inv_trinket+stabilizing_tiller.png" class="tierportrait1"></td>
      </tr>

      <tr>
        <th scope="col" class="text-center" style="background-color:#ac5a0d; width: 100px;"><h1 style="position: relative; top:-15px; font-size: 25px;">Limited</h1></th>
        <td scope="col" class=""><img src="trinket/inv_trinket+brass_knuckles.png" class="tierportrait1">
          <img src="heroskills/flagellant.ability.four.png" class="tierportrait1"> <img src="heroskills/crusader.ability.three.png" class="tierportrait1">
          <img src="heroskills/arbalest.ability.seven.png" class="tierportrait1">
        </td>
        </tr>

        <tr>
          <th scope="col" class="text-center" style="background-color:#adab13; width: 80px;"><h1 style="position: relative; top:25px; font-size: 20px;">Semi-limited</h1></th>
          <td scope="col" class="">
          <img src="trinket/inv_trinket+pitfighter_helm.png" class="tierportrait1">
          <img src="heroskills/flagellant.ability.five.png" class="tierportrait1"> 
          <img src="heroskills/crusader.ability.five.png" class="tierportrait1">
          <img src="heroskills/flagellant.ability.three.png" class="tierportrait1">
          </td>
          </tr>
          <tr>
            <th scope="col" class="text-center" style="background-color:#adab13; width: 80px;"><h1 style="position: relative; top:-5px;"></h1></th>
            <td scope="col" class="">
            <img src="heroskills/occultist.ability.nine.png" class="tierportrait1">
            <img src="heroskills/occultist.ability.eight.png" class="tierportrait1">
            </td>
            </tr>
                      </thead>
<tbody id="leaderboardBody">
</tbody>
</table>
</div>


  <div style="height: 200px;"></div>

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
  
<script type="text/javascript" >
      var display1 = true;
      var display2 = true;
      var display3 = true;
      var display4 = true;
      document.getElementById("champdropdown").onclick = function leperDropdown(){
        

        if(display1){
          display1 = false;
          display2 = true;
          display3 = true;
          display4 = true;
          document.getElementById("champdropdown").style. transform = 'rotate(180deg)';
          document.getElementById("trinketdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("tierdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("bansdropdown").style. transform = 'rotate(360deg)';

          document.getElementById("trinketstats").style.display = "none";
          document.getElementById("tierlist").style.display = "none";
          document.getElementById("banlist").style.display = "none";
          document.getElementById("chamionstats").style.display = "block";
          
        }
        else{
          document.getElementById("chamionstats").style.display = "none";
          document.getElementById("trinketstats").style.display = "none";
          document.getElementById("tierlist").style.display = "none";
          document.getElementById("banlist").style.display = "none";
          document.getElementById("champdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("trinketdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("tierdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("bansdropdown").style. transform = 'rotate(360deg)';
          display1 = true;
          display2 = true;
          display3 = true;
          display4 = true;
        }
        
      }

      document.getElementById("trinketdropdown").onclick = function trinketDropdown(){
        

        if(display2){
          display1 = true;
          display2 = false;
          display3 = true;
          display4 = true;
          document.getElementById("champdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("trinketdropdown").style. transform = 'rotate(180deg)';
          document.getElementById("tierdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("bansdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("banlist").style.display = "none";
          document.getElementById("trinketstats").style.display = "block";
          document.getElementById("tierlist").style.display = "none";
          document.getElementById("chamionstats").style.display = "none";
          
        }
        else{
          document.getElementById("trinketstats").style.display = "none";
          document.getElementById("tierlist").style.display = "none";
          document.getElementById("chamionstats").style.display = "none";
          document.getElementById("champdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("trinketdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("tierdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("bansdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("banlist").style.display = "none";
          display1 = true;
          display2 = true;
          display3 = true;
          display4 = true;
        }
        
      }

      document.getElementById("tierdropdown").onclick = function tierDropdown(){
        

        if(display3){
          display3 = false;
          display1 = true;
          display2 = true;
          display4 = true;
          document.getElementById("tierlist").style.display = "block";
          document.getElementById("champdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("trinketdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("tierdropdown").style. transform = 'rotate(180deg)';
          document.getElementById("bansdropdown").style. transform = 'rotate(360deg)';

          document.getElementById("trinketstats").style.display = "none";
          document.getElementById("tierlist").style.display = "block";
          document.getElementById("chamionstats").style.display = "none";
          document.getElementById("banlist").style.display = "none";
          
        }
        else{
          document.getElementById("trinketstats").style.display = "none";
          document.getElementById("tierlist").style.display = "none";
          document.getElementById("chamionstats").style.display = "none";
          document.getElementById("banlist").style.display = "none";
          document.getElementById("champdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("trinketdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("tierdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("bansdropdown").style. transform = 'rotate(360deg)';
          display1 = true;
          display2 = true;
          display3 = true;
          display4 = true;
        }
        
      }
      document.getElementById("bansdropdown").onclick = function bansDropdown(){
        

        if(display4){
          display3 = true;
          display1 = true;
          display2 = true;
          display4 = false;
          document.getElementById("banlist").style.display = "block";
          document.getElementById("champdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("trinketdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("tierdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("bansdropdown").style. transform = 'rotate(180deg)';

          document.getElementById("trinketstats").style.display = "none";
          document.getElementById("tierlist").style.display = "none";
          document.getElementById("chamionstats").style.display = "none";
          
        }
        else{
          document.getElementById("trinketstats").style.display = "none";
          document.getElementById("tierlist").style.display = "none";
          document.getElementById("chamionstats").style.display = "none";
          document.getElementById("banlist").style.display = "none";
          document.getElementById("champdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("trinketdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("tierdropdown").style. transform = 'rotate(360deg)';
          document.getElementById("bansdropdown").style. transform = 'rotate(360deg)';
          display1 = true;
          display2 = true;
          display3 = true;
          display4 = true;
        }
        
      }

      /*var display1 = "false";
      document.getElementById("leperDropdown").onclick = function leperDropdown(){
        

        if(display1 == "false"){
          display1 = "true";
          document.getElementById("displaystats").style.display = "block";
          
        }
        else{
          document.getElementById("displaystats").style.display = "none";
          display1 = "false";
        }
        
      } */

</script>
</body>
</html>