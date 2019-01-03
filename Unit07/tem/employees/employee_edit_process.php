<?php 
if (isset($_POST['updatenv'])) {
	$employee_update_code = $_POST['employee_update_code'];
	$employee_update_name = $_POST['employee_update_name'];
	$employee_update_address = $_POST['employee_update_address'];
	$employee_update_email = $_POST['employee_update_email'];
	$employee_update_password = $_POST['employee_update_password'];
	$employee_update_mobile = $_POST['employee_update_mobile'];
	$demvipham=0;
	include_once('../../db_connect.php');
	$updatenv="UPDATE employees SET employee_code='$employee_update_code', employee_name='$employee_update_name', employee_address= '$employee_update_address', employee_email='$employee_update_email', employee_password='$employee_update_password', employee_mobile='$employee_update_mobile'
		WHERE employee_code = '".$employee_update_code."'";
	$runupdate = $conn->query($updatenv);
		echo "ok";
		setcookie('editnvtc','không thành công', time()+10);
		header('location: employees.php');
		
	
}
else{
	echo "Chưa submit";

	header('location: employee_edit.php');
}

?>