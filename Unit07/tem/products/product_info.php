<?php if (isset($_GET['product_code'])) {
	$product_code=$_GET['product_code'];
	include_once('../../db_connect.php');
			$detailnv = "SELECT * FROM products WHERE product_code = '".$product_code."'";
			$result= $conn->query($detailnv);
			$row = $result->fetch_assoc();
			echo json_encode($row);
} 
else{
	echo "Yêu cầu click";
	echo "Yêu cầu click";
	
	header('location: products.php');

}
?>