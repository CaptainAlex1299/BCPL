<?php

// Your PHP logic to calculate multiple values
     $scorestyle = '<div class="col-3 ms-4 ps-3 bd-highlight">';
     $scorestyle1 = '</div>';
     $style = "<div class='col bd-highlight'>";
     $style1 = "</div>";

     $player1 = $style . '<img class="rounded-circle imgcover" src="images/shepard.jpg" width="40px" height="38px" style="object-fit: cover; object-position: 50% 50%;">'. " Sheperd" . $style1;
     $player2 = $style . '<img class="rounded-circle" src="images/giganiga.jpg" width="40px" height="38px" style="object-fit: cover;">'. " 123Jman" . $style1;
     $player3 = $style . '<img class="rounded-circle" src="images/simp.jpg" width="40px" height="38px" style="object-fit: cover;">'. " Simp" . $style1;
     $player4 = $style . '<img class="rounded-circle" src="images/gigachad.jpg" width="40px" height="38px" style="object-fit: cover;">'. " Gigachad" . $style1;
     $player5 = $style . '<img class="rounded-circle" src="images/kickass_trailer3.jpg" width="40px" height="38px"  style="object-fit: cover;">'. " Kelloks" . $style1;
     $player6 = $style . '<img class="rounded-circle" src="images/avocado.jpg" width="40px" height="38px" style="object-fit: cover;">'. " Avocado" . $style1;
     $player7 = $style . '<img class="rounded-circle" src="images/smiggles.jpg" width="40px" height="38px" style="object-fit: cover;">'. " Smiggles" . $style1;
     $player8 = $style . '<img class="rounded-circle" src="images/purple.jpg" width="40px" height="38px" style="object-fit: cover;">'. " Jmoon" . $style1;
     $player9 = $style . '<img class="rounded-circle" src="images/grimwulf.jpg" width="40px" height="38px" style="object-fit: cover;">'. " Grimwulf" . $style1;
     $player10 = $style . '<img class="rounded-circle" src="images/adil.jpg" width="40px" height="38px" style="object-fit: cover;">'. " Adil" . $style1;
     $player11 = $style . '<img class="rounded-circle" src="images/cat.jpg" width="40px" height="38px" style="object-fit: cover;">'. " Kitty" . $style1;
     $player12 = $style . '<img class="rounded-circle" src="images/zealot.jpg" width="40px" height="38px" style="object-fit: cover;">'. " Fanatic" . $style1;
     $player13 = $style . '<img class="rounded-circle" src="images/zurgespark.jpg" width="40px" height="38px" style="object-fit: cover;">'. " Zrgspark" . $style1;
     $player14 = $style . '<img class="rounded-circle" src="images/sandman.jpg" width="40px" height="38px" style="object-fit: cover;">'. " Sandman" . $style1;
     $player15 = $style . '<img class="rounded-circle" src="images/jimmy.jpg" width="40px" height="38px" style="object-fit: cover;">'. " Jimmy" . $style1;
     $player16 = $style . '<img class="rounded-circle" src="images/myers.jpg" width="40px" height="38px" style="object-fit: cover;">'. " M'Myers" . $style1;
     $player17 = $style . '<img class="rounded-circle" src="images/dracula.png" width="40px" height="38px" style="object-fit: cover;">'. " Clote" . $style1;
     $player18 = $style . '<img class="rounded-circle" src="images/duelist.jpg" width="40px" height="38px" style="object-fit: cover;">'. " Duelist" . $style1;
     $player19 = $style . '<img class="rounded-circle" src="images/lazark.jpg" width="40px" height="38px" style="object-fit: cover;">'. " Lazark" . $style1;
     $player20 = $style . '<img class="rounded-circle" src="images/stormy.jpg" width="40px" height="38px" style="object-fit: cover;">'. " Stormy" . $style1;
     
     //playerString = playerString + "<div class='row'>" + "<div class='col'>" + "<p>" + "<span>" + Monday1fix[i] +"</span>" + "</p>" + "</div>" + "<div class='col'>" + "<p>" + Monday2fix[i] + "</p>" + "</div>" + "</div>";
// Create an associative array to hold the values
     $player1score = $scorestyle . "8-5" . $scorestyle1;
     $player2score = $scorestyle . "3-1" . $scorestyle1;
     $player3score = $scorestyle . "1-4" . $scorestyle1;
     $player4score = $scorestyle . "2-2" . $scorestyle1;
     $player5score = $scorestyle . "2-6" . $scorestyle1;
     $player6score = $scorestyle . "3-1" . $scorestyle1;
     $player7score = $scorestyle . "1-0" . $scorestyle1;
     $player8score = $scorestyle . "0-0" . $scorestyle1;
     $player9score = $scorestyle . "7-8" . $scorestyle1;
     $player10score = $scorestyle . "2-5" . $scorestyle1;
     $player11score = $scorestyle . "4-2" . $scorestyle1;
     $player12score = $scorestyle . "0-8" . $scorestyle1;
     $player13score = $scorestyle . "1-1" . $scorestyle1;
     $player14score = $scorestyle . "3-4" . $scorestyle1;
     $player15score = $scorestyle . "tbp" . $scorestyle1;
     $player16score = $scorestyle . "tbp" . $scorestyle1;
     $player17score = $scorestyle . "tbp" . $scorestyle1;
     $player18score = $scorestyle . "tbp" . $scorestyle1;
     $player19score = $scorestyle . "tbp" . $scorestyle1;
     $player20score = $scorestyle . "tbp" . $scorestyle1;

$data = [
     "Monday1"  => [$player1 . $player1score, $player2 . $player2score],
                    //vs
     "Monday2"  => [$player3 , $player4],

     "Tuesday1"  => [$player5 . $player5score,],
                    //vs
     "Tuesday2"  => [$player6 ,],
     
     "Wednesday1"  => [$player7 . $player7score, $player8 . $player8score],
                         //vs
     "Wednesday2"  => [$player9, $player10],

     "Thursday1"  => [$player11 . $player11score, $player12 . $player12score],
                    //vs
     "Thursday2"  => [$player13 , $player14],

     "Friday1"  => [$player15 . $player15score, $player16 . $player16score],
                    //vs
     "Friday2"  => [$player17 , $player18],

     "Saturday1"  => [$player17 . $player17score, $player18 . $player18score],
                    //vs
     "Saturday2"  => [$player19 , $player20],

     "Sunday1"  => [$player1 . $player17score, $player12 . $player17score],
                    //vs
     "Sunday2"  => [$player5 , $player9],
     
     
];



// Convert the array to JSON
echo json_encode($data);

?>