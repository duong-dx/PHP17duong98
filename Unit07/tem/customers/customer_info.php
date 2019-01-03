<?php if (isset($_GET['customer_code'])) {
	$customer_code=$_GET['customer_code'];
	include_once('../../db_connect.php');
			$detailkh = "SELECT * FROM customers WHERE customer_code = '".$customer_code."'";
			$result= $conn->query($detailkh);
			$row = $result->fetch_assoc();
	 echo json_encode($row);
} 
else{
	echo "Yêu cầu click";
	echo "Yêu cầu click";
	
	header('location: customers.php');

}
?>