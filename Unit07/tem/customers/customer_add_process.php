<?php 
if (isset($_POST['themkh'])) {
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$customer_new_code = $_POST['customer_new_code'];
	$customer_new_name = $_POST['customer_new_name'];
	$customer_new_address = $_POST['customer_new_address'];
	$customer_new_birthday = $_POST['customer_new_birthday'];
	$customer_new_email = $_POST['customer_new_email'];
	$customer_new_password = $_POST['customer_new_password'];
	$customer_new_mobile = $_POST['customer_new_mobile'];
	$demvipham1=0;
	include_once('../../db_connect.php');
	$sql = "SELECT * FROM customers";
	$result = $conn->query($sql);
	$data = array();
	while ($row = $result->fetch_assoc()) {
		$data[] =$row;

	}
	foreach ($data as $row) {
		if($customer_new_code!==strtoupper($row['customer_code'])){
			echo "thành công";
		}
		else{
			echo "không thành công";
			$demvipham1++;
		}
	}
	if ($demvipham1==0) {
		$themmoikh="INSERT INTO customers(customer_code,customer_name,customer_address,customer_birthday,customer_email,customer_mobile,customer_password) VALUES('".$customer_new_code."','".$customer_new_name."','".$customer_new_address."','".
		$customer_new_birthday."','".$customer_new_email."','".$customer_new_mobile."','".$customer_new_password."')";
		$runthemmoi = $conn->query($themmoikh);
		setcookie('themkhtc','Không thành công', time()+10);
		header("location: customers.php");


	}
	else{
		$demvipham1=0;
		setcookie('themkhktc','không thành công', time()+10);

		header("location: customer_add.php");

	}
}
else{
	echo "Chưa submit";
	
	header("location: customer_add.php");
}

?>