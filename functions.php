<?php

$databaseHost = 'localhost';
$databaseUsername = 'metrcgyx_Kelloks1288';
$databasePassword = 'YNWAlfc121237';
$databaseName = 'metrcgyx_dbase';
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

function check_verify(){
$databaseHost = 'localhost';
$databaseUsername = 'metrcgyx_Kelloks1288';
$databasePassword = 'YNWAlfc121237';
$databaseName = 'metrcgyx_dbase';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    if (mysqli_connect_error()){
        die("There was an error connecting to the database.");
    }
    $email_verified = mysqli_real_escape_string($conn, $_SESSION['user']);
    $query = "SELECT id FROM users WHERE email_verified = '$email_verified'";
    $result = $conn->query($query);
    if($result){
        if(mysqli_num_rows($result) > 0) {
            return true;
        }
    }
    else{
        return false;
    }
    $conn->close();
}

function database_run($query,$vars = array()){
$databaseHost = 'localhost';
$databaseUsername = 'metrcgyx_Kelloks1288';
$databasePassword = 'YNWAlfc121237';
$databaseName = 'metrcgyx_dbase';

$string = "mysql:host=localhost;dbname=metrcgyx_dbase";
	$con = new PDO($string, $databaseUsername, $databasePassword);
	if(!$con){
		return false;
	}
$stm = $con->prepare($query);
	$check = $stm->execute($vars);
  if($check){
		$data = $stm->fetchAll(PDO::FETCH_OBJ);
		if(count($data) > 0){
			return $data;
      
		}
	}
  return false;
  $query->close();
}

// function img_select(){
//   $databaseHost = 'localhost';
//   $databaseUsername = 'metrcgyx_Kelloks1288';
//   $databasePassword = 'YNWAlfc121237';
//   $databaseName = 'metrcgyx_dbase';
//   $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
//   $userid = "$_SESSION[user]";
//   $sql = "SELECT * FROM users  WHERE email = '$userid'";
//   $id = "SELECT id FROM users WHERE email = '$userid'";
//     $result = $mysqli->query($sql);
//     $row = $result->fetch_assoc();

//     if ($result) {
//       // Check if a user with the provided email exists
//       if ($result->num_rows > 0) {
//           while($row = $result->fetch_assoc()){
//             $id = $row['id'];
//             $sqlImg = "SELECT * FROM profileimg WHERE userid= '$id";
//             $resultImg = mysqli_query($mysqli, $sqlImg);

//             while($rowImg = mysqli_fetch_assoc($resultImg)){
//               echo "<div>";
//                 if($rowImg['status'] == 0){
//                   echo "<img src='uploads/profile".$id ."jpg'>";
//                 } else{
//                   echo "<img src='uploads/659e743e69cfd4.40779923.jpg'>";
//                 }
//               echo "</div>";
//             }
//           }
//       }
//     }
//     else{
//       echo " there are no users yet!";
//     }
//     $mysqli->close();
// }

function userIsValid($email, $password, $confirmPassowrd) {
  if ($email != '' && strlen($password) >= 8 &&  $password == $confirmPassowrd){
      return true;
  }
  return false;
}

function saveUserToDataBase($email, $password, $username, $conn) {
  $currentDate = date('Y-m-d');
  $query = "INSERT INTO users (email, username, date, password) VALUES 
          ('" . mysqli_real_escape_string($conn, $email). "', '"
          . mysqli_real_escape_string($conn, $username). "', '" 
          . mysqli_real_escape_string($conn, $currentDate). "', '" 
          . mysqli_real_escape_string($conn, password_hash($password, PASSWORD_BCRYPT)) . "')";
}

?>