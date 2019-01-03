<?php  
if (isset($_POST['themnv'])) {
	$employee_new_code = $_POST['employee_new_code'];
	$employee_new_name = $_POST['employee_new_name'];
	$employee_new_address = $_POST['employee_new_address'];
	$employee_new_email = $_POST['employee_new_email'];
	$employee_new_password = $_POST['employee_new_password'];
	$employee_new_mobile = $_POST['employee_new_mobile'];
	$demvipham=0;
	include_once('../../db_connect.php');
	$sql = "SELECT * FROM employees";
	$result = $conn->query($sql);
	$data = array();
	while ($row = $result->fetch_assoc()) {
		$data[] =$row;

	}
	foreach ($data as $row) {
		if($employee_new_code!==$row['employee_code']){
			echo "thành công";
		}
		else{
			echo "không thành công";
			$demvipham++;
		}
	}
	if ($demvipham==0) {
		$themmoinv="INSERT INTO employees(employee_code,employee_name,employee_address,employee_email,employee_password,employee_mobile) VALUES('".$employee_new_code."','".$employee_new_name."','".$employee_new_address."','".$employee_new_email."','".$employee_new_password."','".$employee_new_mobile."')";
		$runthemmoi = $conn->query($themmoinv);
		setcookie('themnvtc',' thành công', time()+10);
		header("location: employees.php");

	}
	else{
		$demvipham=0;
		setcookie('themnvktc','không thành công', time()+10);
		header("location: employee_add.php");

	}
}
else{
	echo "Chưa submit";
	
	header("location: employee_add.php");
}

?>