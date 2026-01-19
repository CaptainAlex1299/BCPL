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
    <link rel="stylesheet" type="text/css" href="leaderboard.css">
    <style type="text/css"></style>
    
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
    <h1 class="text-center headerfix mt-4" style="position: relative; top: 20px;"></h1> <div class=""><img src="images/Torch.png" width="140px" height="158px"></div></div>
    
    <div id="bodybgcolor" class="container-fluid align-items-center justify-content-center" style="max-width:1400px">
        
    <div class=" text-white align-items-center col" >
    <div id="tableborder1" class="">
        <div id="tableborder" class="">
            <table class="table table-borderless" id="table1">
            <thead class="league-table-sm__thead sticky-top top-0" style="background-color: #100303; z-index: 1;">
                <div>
                <tr>
                <th scope="col"><abbr>Pos</abbr></th>
                <th class="team" scope="col">Player</th>
                <th scope="col" class="text-center"><abbr>Points</abbr></th>
                <th scope="col" class="text-center"><abbr>Played</abbr></th>
                <th scope="col" class="text-center"><abbr>gd</abbr></th>
                <th scope="col" class="text-center"><abbr>Won</abbr></th>
                <th scope="col" class="text-center"><abbr>Drawn</abbr></th>
                <th scope="col" class="text-center"><abbr title="Lost">Lost</abbr></th>
                </tr>
                </div>
                                </thead>
      <tbody id="leaderboardBody"></tbody>
        </table>
        </div>
    </div>
        
        
        
        
        <div style="height: 140px; width: 100%;"></div>
        
  </div>
        
    </div>
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
      <p>© 2022 Company, Inc. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
      </ul>
    </div>
            </div>
            
  </footer>
  <script src="tables.js"></script>
<script type="text/javascript" ></script>
</body>
</html>