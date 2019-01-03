<?php 
if (isset($_GET['customer_code'])) {
	include_once('../../db_connect.php');
	$customer_code=$_GET['customer_code'];
	$deletekh= "DELETE FROM customers WHERE customer_code ='".$customer_code."'";
	$rundeletekh= $conn->query($deletekh);
	header('location: customers.php');
	setcookie('xoakh','Không thành công', time()+10);

}
else{
	echo "Chờ xử lý";
	echo "Yêu cầu click";
	setcookie('khongtontai','Không thành công', time()+10);
	header('location: customers.php');
}

 ?>