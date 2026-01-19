<?php
session_start();
$databaseHost = 'localhost';
$databaseUsername = 'metrcgyx_Kelloks1288';
$databasePassword = 'YNWAlfc121237';
$databaseName = 'metrcgyx_dbase';

if(array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)){
    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    if (mysqli_connect_error()){
        die("There was an error connecting to the database.");
    }
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);

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
                // Authentication successful
                echo "Login successful!";
                $_SESSION['user'] = $row["email"];
                $_SESSION['user_id'] = $row["id"];
                header('Location: logedin.php');

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
        <title>Login</title>

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
    </head>
    <body>

    <div>
    
</div>
<div class="form-bg" style="width: 500px; height:500px;">
<div style="text-align: center;">
<form id="login1" method="post">
    <p>Login.</p>
    <p><input type="text" name="email" placeholder="Email address"></p>
    <p><input type="password" name="password" placeholder="Password"></p>
    <p><input type="submit" value="Submit" name="submit1" id="button1"></p>
    </form>
    <p>Don't have an account?<a href="register.php">Register</a> here!</p> 
</div>
</div>
    </body>
</html>