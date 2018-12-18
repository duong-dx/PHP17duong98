<?php 
	if (isset($_GET['user'])) {
		$user = $_GET['user'];
		echo "User :" .$user;
	}
	else{
		echo "Không để trống";
	}
	if (isset($_GET['pwd'])) {
		$password =$_GET['pwd'];
		echo "<br>Password :" .$password;
	}
	else{
		echo "Không để trống";
	}
 ?>