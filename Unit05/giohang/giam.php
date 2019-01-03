<?php 
	session_start();

	$GET=$_GET['MaSP'];
	if($_SESSION['cart'][$GET]['SoLuong']>1){
		$_SESSION['cart'][$GET]['SoLuong']--;
		setcookie('giamsoluong','Giảm số lượng mua thành công',time()+3);

	}
	else{
		unset($_SESSION['cart'][$GET]);
		setcookie('huysanpham','Hủy sản phẩm thành công',time()+3);
	}
	header('location: cart.php');
 ?>