<?php 
if (isset($_GET['employee_code'])) {
	include_once('../../db_connect.php');
	$employee_code=$_GET['employee_code'];
	$deletenv= "DELETE FROM employees WHERE employee_code ='".$employee_code."'";
	$rundeletenv= $conn->query($deletenv);
	header('location: employees.php');
	setcookie('xoanv','Không thành công', time()+10);

}
else{
	echo "Chờ xử lý";
	echo "Yêu cầu click";
	setcookie('khongtontai','Không thành công', time()+10);
	header('location: employees.php');
}

 ?>