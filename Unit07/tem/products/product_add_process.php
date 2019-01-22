<?php  
if (isset($_POST['themnv'])) {
	$product_new_code = $_POST['product_new_code'];
	$product_new_name = $_POST['product_new_name'];
	$product_new_quantity = $_POST['product_new_quantity'];
	$product_new_price = $_POST['product_new_price'];
	$product_new_price_enter = $_POST['product_new_price_enter'];
	$demvipham=0;
	include_once('../../db_connect.php');
	$sql = "SELECT * FROM products";
	$result = $conn->query($sql);
	$data = array();
	while ($row = $result->fetch_assoc()) {
		$data[] =$row;

	}
	foreach ($data as $row) {
		if($product_new_code!==$row['product_code']){
			echo "thành công";
		}
		else{
			echo "không thành công";
			$demvipham++;
		}
	}
	if ($demvipham==0) {
		$themmoinv="INSERT INTO products(product_code,product_name,product_quantity,product_price,product_price_enter) VALUES('".$product_new_code."','".$product_new_name."','".$product_new_quantity."','".$product_new_price."','".$product_new_price_enter."')";
		$runthemmoi = $conn->query($themmoinv);
		setcookie('themnvtc',' thành công', time()+10);
		header("location: products.php");

	}
	else{
		$demvipham=0;
		setcookie('themnvktc','không thành công', time()+10);
		header("location: product_add.php");

	}
}
else{
	echo "Chưa submit";
	
	header("location: product_add.php");
}

?>