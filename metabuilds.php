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
    
    <link rel="stylesheet" type="text/css" href="metabuilds.css" />
    <style type="text/css"></style>
    
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
    
    <div style="background-image: url(images/headerbg1.png); background-size: cover; background-repeat: no-repeat; z-index: 2; width: 100%; height: 250px;">
    <div class="">
      <div >
      <h1 class="text-center" style="font-size: 30px; padding-top:100px; margin-top: 0px;">Take a look at our hand-picked meta teams to help you get started!</ class="">
      </div>
    </div>
    </div>

    <div class="container">
      <h2 class="text-center">1. World Domination</h2>
    <div class="row">
      <div class="block">
          <div class="big"><img src="ddheroicon/arbalest.png" class="metateamicon"></div>
          <div class="small-container">
              <div class="small"><img src="trinket/inv_trinket+piercing_quarrel.png" class="metateamicon metatrinketicon"></div>
              <div class="small"><img src="trinket/inv_trinket+stabilizing_tiller.png" class="metateamicon metatrinketicon"></div>
          </div>
      </div>
      <div class="block">
          <div class="big"><img src="ddheroicon/bountyhunter.png" class="metateamicon"></div>
          <div class="small-container">
              <div class="small"><img src="trinket/inv_trinket+the_finisher.png" class="metateamicon metatrinketicon"></div>
              <div class="small"><img src="trinket/inv_trinket+grappling_mits.png" class="metateamicon metatrinketicon"></div>
          </div>
      </div>
      <div class="block">
          <div class="big"><img src="ddheroicon/crusader.png" class="metateamicon"></div>
          <div class="small-container">
              <div class="small"><img src="trinket/inv_trinket+brass_knuckles.png" class="metateamicon metatrinketicon"></div>
              <div class="small"><img src="trinket/inv_trinket+sacred_blade.png" class="metateamicon metatrinketicon"></div>
          </div>
      </div>
      <div class="block">
          <div class="big"><img src="ddheroicon/abomination.png" class="metateamicon"></div>
          <div class="small-container">
              <div class="small"><img src="trinket/inv_trinket+brass_knuckles.png" class="metateamicon metatrinketicon"></div>
              <div class="small"><img src="trinket/inv_trinket+spiked_chain.png" class="metateamicon metatrinketicon"></div>
          </div>
      </div>
  </div>
</div>


<div class="container">
  <h2 class="text-center">2. Oppresive Vestal</h2>
  <div class="row">
    <div class="block">
        <div class="big"><img src="ddheroicon/vestal.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+brass_knuckles.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+calling_saltes.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/shieldbreaker.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+monkey_paw.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+eagle_eye_talisman.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/highwayman.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+the_finisher.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+spiked_bat.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/crusader.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+brass_knuckles.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+sacred_blade.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
</div>
</div>

<div class="container">
  <h2 class="text-center">3. Shep stress #1</h2>
  <div class="row">
    <div class="block">
        <div class="big"><img src="ddheroicon/houndmaster.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+spiked_bat.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+monkey_paw.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/abomination.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+eagle_eye_talisman.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+wretch_cloak.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/manatarms.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+numbing_incense.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+cloak_and_dagger.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/flagellant.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+spiked_bat.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+gauntlet_of_absolution.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
</div>
</div>

<div class="container">
  <h2 class="text-center">4. Immortal Musketeer</h2>
  <div class="row">
    <div class="block">
        <div class="big"><img src="ddheroicon/musketeer.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+black_diamond_mirror.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+insignia_of_rank.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/abomination.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+reaper_shroud.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+impossible_glyph.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/man_at_arms_portrait_roster.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+heartseeker.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+sharpening_stone.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/flagellant.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+shattered_padlock.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+tears_of_the_lost.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
</div>
</div>

<div class="container">
  <h2 class="text-center">5. Team #1</h2>
  <div class="row">
    <div class="block">
        <div class="big"><img src="ddheroicon/abomination.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+razor_pin.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+sharpening_stone.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/flagellant.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+sanity_bane.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+rotting_trophy.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/leper.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+durable_armlet.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+rancid_cure_all.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/shieldbreaker.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+grappling_mits.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+medic_fullplate.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
</div>
</div>

<div class="container">
  <h2 class="text-center">6. Team #2</h2>
  <div class="row">
    <div class="block">
        <div class="big"><img src="ddheroicon/arbalest.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+sanity_bane.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+silver_syringe.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/bounty_hunter_portrait_roster.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+iron_sights.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+treated_bandage.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/hellion.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+durable_armlet.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+sharpening_stone.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/manatarms.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+hunters_charm.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+hunters_charm.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
</div>
</div>

<div class="container">
  <h2 class="text-center">7. Team #3</h2>
  <div class="row">
    <div class="block">
        <div class="big"><img src="ddheroicon/jester.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+purgation_talisman.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+iron_sights.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/grave_robber_portrait_roster.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+purgation_talisman.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+rotting_trophy.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/arbalest.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+purgation_talisman.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+stabilizing_tiller.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/flagellant.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+pitfighter_helm.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+tattered_chewtoy.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
</div>
</div>

<div class="container">
  <h2 class="text-center">8. Tean #4</h2>
  <div class="row">
    <div class="block">
        <div class="big"><img src="ddheroicon/plaguedoctor.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+silver_syringe.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+well_tuned_lute.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/arbalest.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+hunters_charm.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+impossible_glyph.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/manatarms.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+duelist_pistol.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+pitfighter_helm.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/flagellant.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+fang_talisman.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+tome_of_fury.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
</div>
</div>

<div class="container">
  <h2 class="text-center">9. Team #5</h2>
  <div class="row">
    <div class="block">
        <div class="big"><img src="ddheroicon/jester.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+hazard_mask.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+infamous_visage.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/bountyhunter.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+monkey_paw.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+grappling_mits.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/houndmaster.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+grappling_mits.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+idol_of_purity.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/abomination.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+durable_armlet.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+amputation_saw.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
</div>
</div>

<div class="container">
  <h2 class="text-center">10. Team #6</h2>
  <div class="row">
    <div class="block">
        <div class="big"><img src="ddheroicon/manatarms.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+acrid_vial.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+durable_armlet.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/arbalest.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+insignia_of_rank.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+parrying_dagger.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/flagellant.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+harlequin_masque.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+padded_armguard.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
    <div class="block">
        <div class="big"><img src="ddheroicon/houndmaster.png" class="metateamicon"></div>
        <div class="small-container">
            <div class="small"><img src="trinket/inv_trinket+razor_pin.png" class="metateamicon metatrinketicon"></div>
            <div class="small"><img src="trinket/inv_trinket+tears_of_the_lost.png" class="metateamicon metatrinketicon"></div>
        </div>
    </div>
</div>
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
  
<script type="text/javascript" ></script>
</body>
</html>