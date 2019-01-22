<?php 
if (isset($_GET['product_code'])) {
	include_once('../../db_connect.php');
	$product_code=$_GET['product_code'];
	$deletenv= "DELETE FROM products WHERE product_code ='".$product_code."'";
	$rundeletenv= $conn->query($deletenv);
	header('location: products.php');
	setcookie('xoanv','Không thành công', time()+10);

}
else{
	echo "Chờ xử lý";
	echo "Yêu cầu click";
	setcookie('khongtontai','Không thành công', time()+10);
	header('location: products.php');
}

 ?>