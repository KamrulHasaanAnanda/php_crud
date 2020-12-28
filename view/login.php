<?php

	if(isset($_GET['msg'])){
		
		if($_GET['msg'] == "invalid_user"){
			echo "username/password not valid...";
		}

		if($_GET['msg'] == "null_username"){
			echo "Username field is empty...";
		}

		if($_GET['msg'] == "null_password"){
			echo "Password field is empty...";
		}
	}

	/*if(isset($_COOKIE['rm'])){
		header('location: home.php');
	}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
</head>
<body>
	<form method="post" action="../php/loginCheck.php">
		<fieldset>
			<legend>LOGIN</legend>
			<div class="form-group">
  					<label for="usr">Name:</label>
  					<input type="text" class="form-control" id="usr" name="username">
				</div>
				<div class="form-group">
  					<label for="pwd">Password:</label>
  					<input type="password" class="form-control" id="pwd" name="password">
				</div>
				<button type="submit" class="btn btn-default" name="submit"  value="Submit">Submit</button>
		</fieldset>
	</form>
</body>
</html>