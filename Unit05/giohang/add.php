<?php 
include_once('data.php');
session_start();

$GET=$_GET['MaSP'];

if(isset($_SESSION['cart'][$GET])){
	if ($_SESSION['cart'][$GET]['SoLuong']>=$products[$GET]['SoLuong']) {
		setcookie('soluonglonhon','Số lượng bạn muốn mua đang lớn hơn số lượng cửa hàng hiện có',time()+3);
	}
	else{
		$_SESSION['cart'][$GET]['SoLuong']++;
		setcookie('themsoluong','Thêm số lượng sản phẩm mua thành công',time()+3);
	}
	
}
else{
	$product_buy= $products[$GET];
	$product_buy['SoLuong']=1;

	$_SESSION['cart'][$GET]=$product_buy;
	setcookie('themsp','Thêm mới sản phẩm vào giỏ hàng thành công thành công',time()+3);
		
}
	header('location: cart.php');
?>