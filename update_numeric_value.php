<?php
require "functions.php";
// Your PHP logic to calculate multiple values
$sql = "SELECT * FROM scoreboard";
$result = mysqli_query($conn, $sql);
//$player1 = "SELECT * FROM scoreboard WHERE username= 'Shepard'";

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $player1 = "SELECT * FROM scoreboard WHERE id = '1'";
        $player1result = mysqli_query($conn, $player1);

        $player2 = "SELECT * FROM scoreboard WHERE id = '2'";
        $player2result = mysqli_query($conn, $player2);

        $player3 = "SELECT * FROM scoreboard WHERE id = '3'";
        $player3result = mysqli_query($conn, $player3);

        $player4 = "SELECT * FROM scoreboard WHERE id = '4'";
        $player4result = mysqli_query($conn, $player4);

        $player5 = "SELECT * FROM scoreboard WHERE id = '5'";
        $player5result = mysqli_query($conn, $player5);

        $player6 = "SELECT * FROM scoreboard WHERE id = '6'";
        $player6result = mysqli_query($conn, $player6);

        $player7 = "SELECT * FROM scoreboard WHERE id = '7'";
        $player7result = mysqli_query($conn, $player7);

        $player8 = "SELECT * FROM scoreboard WHERE id = '8'";
        $player8result = mysqli_query($conn, $player8);

        $player9 = "SELECT * FROM scoreboard WHERE id = '9'";
        $player9result = mysqli_query($conn, $player9);

        $player10 = "SELECT * FROM scoreboard WHERE id = '10'";
        $player10result = mysqli_query($conn, $player10);

        $player11 = "SELECT * FROM scoreboard WHERE id = '11'";
        $player11result = mysqli_query($conn, $player11);

        $player12 = "SELECT * FROM scoreboard WHERE id = '12'";
        $player12result = mysqli_query($conn, $player12);

        $player13 = "SELECT * FROM scoreboard WHERE id = '13'";
        $player13result = mysqli_query($conn, $player13);

        $player14 = "SELECT * FROM scoreboard WHERE id = '14'";
        $player14result = mysqli_query($conn, $player14);

        $player15 = "SELECT * FROM scoreboard WHERE id = '15'";
        $player15result = mysqli_query($conn, $player15);

        $player16 = "SELECT * FROM scoreboard WHERE id = '16'";
        $player16result = mysqli_query($conn, $player16);

        $player17 = "SELECT * FROM scoreboard WHERE id = '17'";
        $player17result = mysqli_query($conn, $player17);

        $player18 = "SELECT * FROM scoreboard WHERE id = '18'";
        $player18result = mysqli_query($conn, $player18);

        $player19 = "SELECT * FROM scoreboard WHERE id = '19'";
        $player19result = mysqli_query($conn, $player19);

        $player20 = "SELECT * FROM scoreboard WHERE id = '20'";
        $player20result = mysqli_query($conn, $player20);
    }

    while($row = mysqli_fetch_assoc($player1result)){
        $name1 = $row['username'];
        $points1 = $row['points'];
        $played1 = $row['played'];
        $kd1 = $row['k/d'];
        $won1 = $row['won'];
        $drawn1 = $row['drawn'];
        $lost1 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player2result)){
        $name2 = $row['username'];
        $points2 = $row['points'];
        $played2 = $row['played'];
        $kd2 = $row['k/d'];
        $won2 = $row['won'];
        $drawn2 = $row['drawn'];
        $lost2 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player3result)){
        $name3 = $row['username'];
        $points3 = $row['points'];
        $played3 = $row['played'];
        $kd3 = $row['k/d'];
        $won3 = $row['won'];
        $drawn3 = $row['drawn'];
        $lost3 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player4result)){
        $name4 = $row['username'];
        $points4 = $row['points'];
        $played4 = $row['played'];
        $kd4 = $row['k/d'];
        $won4 = $row['won'];
        $drawn4 = $row['drawn'];
        $lost4 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player5result)){
        $name5 = $row['username'];
        $points5 = $row['points'];
        $played5 = $row['played'];
        $kd5 = $row['k/d'];
        $won5 = $row['won'];
        $drawn5 = $row['drawn'];
        $lost5 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player6result)){
        $name6 = $row['username'];
        $points6 = $row['points'];
        $played6 = $row['played'];
        $kd6 = $row['k/d'];
        $won6 = $row['won'];
        $drawn6 = $row['drawn'];
        $lost6 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player7result)){
        $name7 = $row['username'];
        $points7 = $row['points'];
        $played7 = $row['played'];
        $kd7 = $row['k/d'];
        $won7 = $row['won'];
        $drawn7 = $row['drawn'];
        $lost7 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player8result)){
        $name8 = $row['username'];
        $points8 = $row['points'];
        $played8 = $row['played'];
        $kd8 = $row['k/d'];
        $won8 = $row['won'];
        $drawn8 = $row['drawn'];
        $lost8 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player9result)){
        $name9 = $row['username'];
        $points9 = $row['points'];
        $played9 = $row['played'];
        $kd9 = $row['k/d'];
        $won9 = $row['won'];
        $drawn9 = $row['drawn'];
        $lost9 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player10result)){
        $name10 = $row['username'];
        $points10 = $row['points'];
        $played10 = $row['played'];
        $kd10 = $row['k/d'];
        $won10 = $row['won'];
        $drawn10 = $row['drawn'];
        $lost10 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player11result)){
        $name11 = $row['username'];
        $points11 = $row['points'];
        $played11 = $row['played'];
        $kd11 = $row['k/d'];
        $won11 = $row['won'];
        $drawn11 = $row['drawn'];
        $lost11 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player12result)){
        $name12 = $row['username'];
        $points12 = $row['points'];
        $played12 = $row['played'];
        $kd12 = $row['k/d'];
        $won12 = $row['won'];
        $drawn12 = $row['drawn'];
        $lost12 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player13result)){
        $name13 = $row['username'];
        $points13 = $row['points'];
        $played13 = $row['played'];
        $kd13 = $row['k/d'];
        $won13 = $row['won'];
        $drawn13 = $row['drawn'];
        $lost13 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player14result)){
        $name14 = $row['username'];
        $points14 = $row['points'];
        $played14 = $row['played'];
        $kd14 = $row['k/d'];
        $won14 = $row['won'];
        $drawn14 = $row['drawn'];
        $lost14 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player15result)){
        $name15 = $row['username'];
        $points15 = $row['points'];
        $played15 = $row['played'];
        $kd15 = $row['k/d'];
        $won15 = $row['won'];
        $drawn15 = $row['drawn'];
        $lost15 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player16result)){
        $name16 = $row['username'];
        $points16 = $row['points'];
        $played16 = $row['played'];
        $kd16 = $row['k/d'];
        $won16 = $row['won'];
        $drawn16 = $row['drawn'];
        $lost16 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player17result)){
        $name17 = $row['username'];
        $points17 = $row['points'];
        $played17 = $row['played'];
        $kd17 = $row['k/d'];
        $won17 = $row['won'];
        $drawn17 = $row['drawn'];
        $lost17 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player18result)){
        $name18 = $row['username'];
        $points18 = $row['points'];
        $played18 = $row['played'];
        $kd18 = $row['k/d'];
        $won18 = $row['won'];
        $drawn18 = $row['drawn'];
        $lost18 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player19result)){
        $name19 = $row['username'];
        $points19 = $row['points'];
        $played19 = $row['played'];
        $kd19 = $row['k/d'];
        $won19 = $row['won'];
        $drawn19 = $row['drawn'];
        $lost19 = $row['lost'];
    }

    while($row = mysqli_fetch_assoc($player20result)){
        $name20 = $row['username'];
        $points20 = $row['points'];
        $played20 = $row['played'];
        $kd20 = $row['k/d'];
        $won20 = $row['won'];
        $drawn20 = $row['drawn'];
        $lost20 = $row['lost'];
    }

} else{
    echo "there was error";
}
            

// Create an associative array to hold the values

$data1 = [
    [ "name" => $name1, "score" => $points1, "played" => $played1, "kd" => $kd1, "won" => $won1, "drawn" => $drawn1, "lost" => $lost1],
    [ "name" => $name2, "score" => $points2, "played" => $played2, "kd" => $kd2, "won" => $won2, "drawn" => $drawn2, "lost" => $lost2 ],
    [ "name" => $name3, "score" => $points3, "played" => $played3, "kd" => $kd3, "won" => $won3, "drawn" => $drawn3, "lost" => $lost3 ],
    [ "name" => $name4, "score" => $points4, "played" => $played4, "kd" => $kd4, "won" => $won4, "drawn" => $drawn4, "lost" => $lost4 ],
    [ "name" => $name5, "score" => $points5, "played" => $played5, "kd" => $kd5, "won" => $won5, "drawn" => $drawn5, "lost" => $lost5 ],
    [ "name" => $name6, "score" => $points6, "played" => $played6, "kd" => $kd6, "won" => $won6, "drawn" => $drawn6, "lost" => $lost6 ],
    [ "name" => $name7, "score" => $points7, "played" => $played7, "kd" => $kd7, "won" => $won7, "drawn" => $drawn7, "lost" => $lost7 ],
    [ "name" => $name8, "score" => $points8, "played" => $played8, "kd" => $kd8, "won" => $won8, "drawn" => $drawn8, "lost" => $lost8 ],
    [ "name" => $name9, "score" => $points9, "played" => $played9, "kd" => $kd9, "won" => $won9, "drawn" => $drawn9, "lost" => $lost9 ],
    [ "name" => $name10, "score" => $points10, "played" => $played10, "kd" => $kd10, "won" => $won10, "drawn" => $drawn10, "lost" => $lost10 ],
    [ "name" => $name11, "score" => $points11, "played" => $played11, "kd" => $kd11, "won" => $won11, "drawn" => $drawn11, "lost" => $lost11 ],
    [ "name" => $name12, "score" => $points12, "played" => $played12, "kd" => $kd12, "won" => $won12, "drawn" => $drawn12, "lost" => $lost12 ],
    [ "name" => $name13, "score" => $points13, "played" => $played13, "kd" => $kd13, "won" => $won13, "drawn" => $drawn13, "lost" => $lost13 ],
    [ "name" => $name14, "score" => $points14, "played" => $played14, "kd" => $kd14, "won" => $won14, "drawn" => $drawn14, "lost" => $lost14 ],
    [ "name" => $name15, "score" => $points15, "played" => $played15, "kd" => $kd15, "won" => $won15, "drawn" => $drawn15, "lost" => $lost15 ],
    [ "name" => $name16, "score" => $points16, "played" => $played16, "kd" => $kd16, "won" => $won16, "drawn" => $drawn16, "lost" => $lost16 ],
    [ "name" => $name17, "score" => $points17, "played" => $played17, "kd" => $kd17, "won" => $won17, "drawn" => $drawn17, "lost" => $lost17 ],
    [ "name" => $name18, "score" => $points18, "played" => $played18, "kd" => $kd18, "won" => $won18, "drawn" => $drawn18, "lost" => $lost18 ],
    [ "name" => $name19, "score" => $points19, "played" => $played19, "kd" => $kd19, "won" => $won19, "drawn" => $drawn19, "lost" => $lost19 ],
    [ "name" => $name20, "score" => $points20, "played" => $played20, "kd" => $kd20, "won" => $won20, "drawn" => $drawn20, "lost" => $lost20 ],
];
// Convert the array to JSON
echo json_encode($data1);

?>