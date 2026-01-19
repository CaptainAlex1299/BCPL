<?php
	session_start();
	require "mail.php";
	require "functions.php";

	$errors = array();

	if($_SERVER['REQUEST_METHOD'] == "GET" && !check_verify()){

		//send email
		$vars['code'] =  rand(10000,99999);

		//save to database
		$vars['expires'] = (time() + (60 * 10));
		$vars['email'] = $_SESSION['user'];

		$query = "insert into verify (code,expires,email) values (:code,:expires,:email)";
		database_run($query,$vars);

		$message = "your code is " . $vars['code'];
		$subject = "Email verification";
		$recipient = $vars['email'];
		send_mail($recipient,$subject,$message);
	}

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		if(!check_verify()){

			$query = "select * from verify where code = :code && email = :email";
			$vars = array();
			$vars['email'] = $_SESSION['user'];
			$vars['code'] = $_POST['code'];

			$row = database_run($query,$vars);

			if(is_array($row)){
				$row = $row[0];
				$time = time();

				if($row->expires > $time){

					$id = $_SESSION['user'];
					$query = "update users set email_verified = '$id' limit 1";
					
					database_run($query);

					header("Location: logedin.php");
					die;
				}else{
					echo "Code expired";
				}

			}else{
				echo "wrong code";
			}
		}else{
			echo "You're already verified";
		}
	}

?>

<!DOCTYPE html>
<html>
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
		}
		body{
			background-color: black;
		}

	</style>
	<title>Verify</title>
	
</head>
<body>

	
  
	
 	<div class="form-bg" style="width: 500px; height:500px;">
		<div style="text-align: center;">
		<h1 style="font-size:45px;">Account Verification</h1>
			<br><h2 style="font-size:30px;">A code was sent was sent to your email address.</h2>
			<hr>

			<form method="post">
			<input type="text" name="code" placeholder="Enter Code Here" style="margin-top: 20px; height:100px; width:350px; text-align: center; font-size:35px;"><br>
 			<br>
			<input type="submit" value="Verify" style="margin-top: 20px; height:50px; width:100px; text-align: center; font-size:20px;">
		</form>
		</div><br>
	</div>

</body>
</html>