<?php 
session_start();
if(isset($_SESSION['user'])){
	session_destroy();
	echo "Logged out suucesfully";
}
else{
	 header("Location: http://127.0.0.1/signup/login.php");
}
?>