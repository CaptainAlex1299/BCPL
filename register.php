<?php
require "functions.php";
    session_start();

    $subject = "verify your email";
    $body = "Veryify your email";
    $header = "From: kelloks1288@plumcafe.host";

if(array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)){
    $currentDate = date('Y-m-d');
    $password = $_POST['password'];
    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    if (mysqli_connect_error()){
        die("There was an error connecting to the database.");
    }

    if($_POST['email'] == ''){
        echo "<p>" . "Email address is required" . "</p>";
    }
    elseif(strlen($password) <= 8){
        echo "<p>" . "Your password must atleast be 8 characters" . "</p>";
    }
    //see if email doesn't already exis
    else{
        $query = "SELECT id FROM users WHERE email = '"
        . mysqli_real_escape_string($conn, $_POST['email']) . "'";
        $result = mysqli_query($conn, $query);
        //if emal/array exist alert  user 
        if(mysqli_num_rows($result) > 0) {
            echo "<p>" . "That email address has already been taken" . "</p>";
        }

        //insert into database
        elseif($_POST['email'] != '' && $_POST['password'] == $_POST['confirm_password']){
            $query = "INSERT INTO users (email, username, date, password) VALUES 
            ('" . mysqli_real_escape_string($conn, $_POST['email']). "', '"
            . mysqli_real_escape_string($conn, $_POST['username']). "', '" 
            . mysqli_real_escape_string($conn, $currentDate). "', '" 
            . mysqli_real_escape_string($conn, password_hash($_POST['password'], PASSWORD_BCRYPT)) . "')";

            $query1 = "SELECT * FROM users WHERE email = '"
                . mysqli_real_escape_string($conn, $_POST['email']) . "'";
            //alert the user that sign up is sucfull
            if(mysqli_query($conn, $query)){
                $result1 = mysqli_query($conn, $query1);
                if (mysqli_num_rows($result1) > 0){ 
                    while($row = mysqli_fetch_assoc($result1)){
                    $userid = $row['id'];
                    $query1 = "INSERT INTO profileimg (userid, status) VALUES ('$userid', 1)";
                    mysqli_query($conn, $query1);
                    echo "<script>alert('Sign up successfull');</script>"; 
                }
            }
                
            }
        }
        else{
            echo "<p>" . "That you need to confirm your password" . "</p>";
        }
    }
    $conn->close();
}

// validate sign up details are valid


?>
<html>
<head>
        <title>Register</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
	<style type="text/css">

		.form-bg{
		background-color: black;
		color: white;
		position: fixed; 
        top: 0;
        left: 0; 
        right: 0;
        bottom: 0;
        margin: auto; 
          z-index: 2;
          max-width: 600px;
          height: 100%;
          max-height: 900px;
          opacity: 1;
          transition: 0.5s;
          border: solid 2px;
          border-radius: 25px;
          font-size: 30px;
		}
		body{
            color: white;
			background-color: black;
		}

	</style>
	
</head>
    <body>
<div class="form-bg" style="width: 500px; height:500px;">
<div style="text-align: center;">
<form id="login1" method="post">
    <p>Signup.</p>
    <p><input type="text" name="email" placeholder="Email address"></p>
    <p><input type="text" name="username" placeholder="username"></p>
    <p><input type="password" name="password" placeholder="Password"></p>
    <p><input type="password" name="confirm_password" placeholder="Confirm Password"></p>
    <p><input type="submit" value="Submit" name="submit1" id="button1"></p>
    </form>
    <p>Already registered?<a href="login.php">Login</a> here!</p> 
</div>
</div>
    </body>
</html>