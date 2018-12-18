<?php 
session_start();
if (isset($_POST['user'])&&isset($_POST['pwd'])) {
	$user=$_POST['user'];
	$password=$_POST['pwd'];
}
if($user=='admin' && $password==123456){
	$_SESSION['user']= $user;
	$_SESSION['password']=$password;
	setcookie('smg','Đăng nhập thành công !' ,time()+10);

	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Form</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</head>
	<body>		
		<?php
		if (isset($_COOKIE['msg'])) {
		  	?>
		  	<p>
		  		<?php 
		  		echo $_COOKIE['msg'];
		  		 ?>
		  	</p>
			
		  }  
		?>
		<a type="submit" class="btn btn-primary" href="logout.php">Logout</a>
	</body>
	</html>
	<?php 

}else{
	echo "Vui lòng kiểm tra lại thông tin tài khoản và mật khẩu";
	header('location: login.html');
}

?>
