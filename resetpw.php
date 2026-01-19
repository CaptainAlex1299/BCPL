<?php
session_start();
require "functions.php";
$databaseHost = 'localhost';
$databaseUsername = 'plumzsgp_Kelloks1299';
$databasePassword = 'YNWAlfc121237';
$databaseName = 'plumzsgp_dbase';
$email = "$_SESSION[user]";
$id = $_SESSION['user_id'];

if($_POST['oldpassword']){
    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    if (mysqli_connect_error()){
        die("There was an error connecting to the database.");
    }
    $password = mysqli_real_escape_string($mysqli, $_POST['oldpassword']);

    // Hash the password (use a strong hashing algorithm, such as bcrypt)
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $idUser = "SELECT id FROM users";
    $query = "SELECT id, email, password FROM users WHERE email = '$email'";
    $result = $mysqli->query($query);

    if ($result) {
        // Check if a user with the provided email exists
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
    
            // Verify the password
            if (password_verify($password, $row['password'])) {
                if($_POST['newpassword'] == $_POST['confirmpassword'] && strlen($_POST['newpassword']) >= 8){
                    // Authentication successful
                $passwordhashed = mysqli_real_escape_string($mysqli, password_hash($_POST['newpassword'], PASSWORD_BCRYPT));
                $query12 = "UPDATE users SET password='$passwordhashed' WHERE id='$id'";
                mysqli_query($mysqli,$query12);
                header("Location: logedin.php");
                //mysqli_real_escape_string($conn, password_hash($_POST['password'], PASSWORD_BCRYPT))
                } else{
                    echo "<p> New password needs to be atleast 8 characters </p>";
                }
            } else {
                // Incorrect password
                echo "Incorrect password!";
            }
        } 
        else {
            echo "User not found!";
        }
        
        $result->close();
    } else {
        echo "Query failed: " . $mysqli->error;
    }
    $mysqli->close();
}


?>
<html>
    <head>
        <title>aeadsf</title>
    </head>
    <body>

    <div>
    
</div>
<div>

    </body>
</html>