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
    <link rel="stylesheet" type="text/css" href="homepage.css">
    <style type="text/css"></style>
    <title>Butcher's Circus</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <div id="imgHamlet">
    <div>
    <nav class="navbar navbar navbar-expand-md mb-5" id="navbarbg">
      <div class="container-fluid ">
      <img src="images/circus.jpg" class="navbar-brand-img" alt="Brand">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="nav-link" href="#">Butcher's Darkest League</a>
            </li>
              <li class="nav-item">
              <a class="nav-link"href="https://metrolink.host/AlexanderForrest/BCPL/">Home</a>
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
            <li class="nav-item">
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
              <a class="nav-link"href="https://metrolink.host/AlexanderForrest/BCPL/logedin.php">My Account</a>
            </li>
            <hr>
            <li class="nav-item row">
              <a class="nav-link" href="https://metrolink.host/AlexanderForrest/BCPL/signout.php">Sign Out</a>
            </li>
          </ul>
        </div>
          </div>
      </div>
    </nav>
    </div><! navbar >
        <div id="darkest" class=" container-fluid d-flex align-items-center justify-content-center">
            <div id="">
    <div class="">
    <div class="row" id="">
        <! fixtures >
        <div class="col d-none d-xl-block p-3 text-white ">
        <div id="" class="">
        <div id="">
        <div id="imgborder">
          <div class="text-center mt-4">
      <p class=""><span class="fs-4">Fixtures/Results</span></p>
      <h5>22 April</h5>
      </div>
    <hr>
    <div id="Mondayfixtures" class="fixfonts px-4"></div>
    <div id="Tuesdayfixtures" class="fixfonts px-4"></div>
    <div id="Wednesdayfixtures" class="fixfonts px-4"></div>
    <div id="Thursdayfixtures" class="fixfonts px-4"></div>
    </div>
    <div id="imgborder">
          <div class="text-center mt-4" style="margin-right: 40px;">
      <h5 style="position:relative; left: 15px;">27 April</h5>
      </div>
    <hr>
    <div id="Fridayfixtures" class="fixfonts px-4"></div>
    <div id="Saturdayfixtures" class="fixfonts px-4"></div>
    <div id="Sundayfixtures" class="fixfonts px-4"></div>
    </div>
            </div>
        </div>
  </div>
       <! news> <div class="card-group col-12 col-xxl-8 col-xl-8">
    <div class="row col col-sm-8 col-md-8 p-lg-3">
    <div class="card">
    <a href="https://www.youtube.com/watch?v=zAJ8w12Gxa8&ab_channel=OmniPeasant"><img src="images/hopeless.jpg" class="card-img-top zoom" alt="..." ></a>
    <div class="card-body">
        <h3 class="card-title">News</h3>
      <h5 class="card-title">Shepard Doggy Loses His Mind!</h5>
      <p class="">After failing the 50% deathblow on the flagellant,
          Shep lost his sanity. Rng was not on his side today, bringing
        his win streak to an end. 
        Shepard : "The match got robbed from me! Stolen from me!"</p>
    </div>
    </div>
            </div>
    <div class="row col-8 col-xl-4 col-sm-4 col-md-4 pt-lg-4 ms-4">
    <div class="card">
        <a href="https://metrolink.host/AlexanderForrest/BCPL/metabuilds.php"><img src="images/ringmom.jpg" class="card-img-top zoom" alt="..." ></a>
        <h3 class="card-title">Meta Builds</h3>
      <h5 class="card-title">Take a look at our handpicked meta-defining teams and trinkets!</h5>
      <p class=""></p></div>
        <div class="card">
        <a href="https://metrolink.host/AlexanderForrest/BCPL/stats.php"><img src="images/flagellant.jpg" class="card-img-top zoom" alt="..." ></a>
        <h3 class="card-title">Statistics</h3>
      <h5 class="card-title">Get the stats of heroes, trinkets and more!</h5>
      <p class=""></p></div>
        </div>
            </div>
        </div>
        <! extra news>
     <! row>
    </div>
        </div>
    </div>
        <!page1>
        <div id="imgdiv"></div>
        <!page1>
      <!row3>  <div id="footercontain1">
        <div id="footerimg2"></div>
    <div id="leadertext" class="row container-fluid">
     <! Table ><div class="col d-none d-xxl-block p-3 text-white align-items-center">
        <div id="tablebg" class="" style="margin: 0 auto;">
            <table class="table table-borderless table-sm" id="table1">
              <div class="text-center" style="width: 100%; height:35px; background-color:#5F1C0E; border-radius: 25px 25px 0px 0px;"> <h3>LeaderBoard</h3></div>
            <thead class="league-table-sm__thead" >
                <tr>
                <th scope="col"><abbr>Pos</abbr></th>
                <th class="team" scope="col">Player</th>
                <th scope="col"><abbr>Points</abbr></th>
                <th scope="col"><abbr>Played</abbr></th>
                <th scope="col"><abbr>k/d</abbr></th>
                </tr>
                                </thead>
      <tbody id="leaderboardBody"></tbody>
        </table>
        </div>    
  </div>
        <div class="col p-4 text-white align-items-center" style="width: 600px;">
        <div id="" class="">
      <img src="images/ring1515.jpg" style="width: 100%; height: 100%; min-width: 300px">
            <h3>Watch: Butcher's League star rate BCL players </h3>
            </div>
        </div>
            <div class="col text-white "style="width:360px;">
        <div id="leaderboard1">
      <p class="cebter"><span class="fs-4"></span></p>
        <div class="flex-row">
            <div class="d-inline-flex">
            <img src="images/thumbnail4.jpg" style="width: 200px; height: 100px;">
                <h4 class =" p-3 ">
                Leper; Petals must fall and rain in the mud.
                </h4>
                </div>
            </div>
            <div class="flex-row">
            <div class="d-inline-flex">
            <img src="images/thumbnail1.jpg" style="width: 180px; height: 100px;">
                <h4 class =" p-3 ">
                Duelist gets the sixty on the arbalest last round!
                </h4>
                </div>
            </div>
            <div class="flex-row">
            <div class="d-inline-flex">
            <img src="images/thumbnail2.png" style="width: 180px; height: 100px;">
                <h4 class =" p-3 ">
                Off meta team stays in top 5; here's how. 
                </h4>
                </div>
            </div>
            <div class="flex-row">
            <div class="d-inline-flex">
            <img src="images/thumbnail3.jpg" style="width: 180px; height: 100px;">
                <h4 class =" p-3 ">
                Chad;
                I'm on a 10 game losing streak, I aim to turn that around next match.
                </h4>
                </div>
            </div>
            </div>
        </div>
  </div>
  </div>
        </div>
        <div class="borderdarkimgtop">
        <div class="finisherbot"></div>
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
      <p>Site Built By Alexander Forrest</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
      </ul>
    </div>
            </div>
  </footer>
  <script src="ajaxleaderboard.js"></script>
<script type="text/javascript" ></script>
</body>
</html>