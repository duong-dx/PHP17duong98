<?php if (isset($_GET['employee_code'])) {
	$employee_code=$_GET['employee_code'];
	include_once('../../db_connect.php');
			$detailnv = "SELECT * FROM employees WHERE employee_code = '".$employee_code."'";
			$result= $conn->query($detailnv);
			$row = $result->fetch_assoc();
			echo json_encode($row);
} 
else{
	echo "Yêu cầu click";
	echo "Yêu cầu click";
	
	header('location: employees.php');

}
?>