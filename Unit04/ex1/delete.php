<?php 
	session_start();
	unset($_SESSION['student'][$_GET['id']]);
	// header('location: list.php');
	echo "string";
	setcookie('xoathanhcong','Xóa thành công thông tin sinh viên ',time()+60);
		
	header('location: list.php');

 ?>