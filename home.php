<?php 
session_start();
if (!isset($_SESSION['user'])) { 
	  header("Location: http://127.0.0.1/signup/login.php");
	}


	  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-center text-primary">Welcome to our website</h1>
		<hr>
		<h2 class="text-center">You are successfully Logged in. <a href="logout.php" name="logout">log out</a></h2>
	</div>
</body>
</html>