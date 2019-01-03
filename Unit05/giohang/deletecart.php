<?php 
	session_start();
	unset($_SESSION['cart']);
	setcookie('huydonhang','Hủy đơn hàng thành công',time() +5);
	header('location: index.php');
 ?>