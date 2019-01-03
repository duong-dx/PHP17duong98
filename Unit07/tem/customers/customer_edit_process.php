<?php 
if (isset($_POST['updatekh'])) {
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$customer_update_code = $_POST['customer_update_code'];
	$customer_update_name = $_POST['customer_update_name'];
	$customer_update_address = $_POST['customer_update_address'];
	$customer_update_birthday = $_POST['customer_update_birthday'];
	$customer_update_email = $_POST['customer_update_email'];
	$customer_update_mobile = $_POST['customer_update_mobile'];
	$demvipham=0;
	 
	include_once('../../db_connect.php');
	$updatekh="UPDATE customers SET customer_code='$customer_update_code', customer_name='$customer_update_name', customer_address= '$customer_update_address', customer_birthday='$customer_update_birthday', customer_email='$customer_update_email', customer_mobile='$customer_update_mobile'
	WHERE customer_code = '".$customer_update_code."'";
	$runupdate = $conn->query($updatekh);
	echo "ok";
	setcookie('editkhtc','không thành công', time()+10);
	header('location: customers.php');

	
}
else{
	echo "Chưa submit";

	header('location: customer_edit.php');
}

?>