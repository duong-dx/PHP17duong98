<?php 

	// include_once('add.php');
	session_start();
	
	include_once('../../FormEmail/email.php');
	$product_buyy=$_SESSION['cart'];
		


	if(isset($_POST['name'])&&isset($_POST['sdt'])&&isset($_POST['email'])&&isset($_POST['address'])&&isset($_POST['gioitinh'])){
		$name=$_POST['name'];
		$sdt=$_POST['sdt'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$gioitinh=$_POST['gioitinh'];
		
	}

	ob_start();
	include_once 'mail_khachhang.php';
	$contents= ob_get_contents();
	ob_clean();
	send_email($email,$name,$contents,'Thông báo đặt hàng tại cửa hàng Apple Xuân Dương ');
	unset($_SESSION['cart']);

 ?>