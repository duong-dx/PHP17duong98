<?php 
if (isset($_POST['updatenv'])) {
	$product_update_code = $_POST['product_update_code'];
	$product_update_name = $_POST['product_update_name'];
	$product_update_quantity = $_POST['product_update_quantity'];
	$product_update_price_enter = $_POST['product_update_price_enter'];
	$product_update_price = $_POST['product_update_price'];
	
	$demvipham=0;
	include_once('../../db_connect.php');
	$updatenv="UPDATE products SET product_code='$product_update_code', product_name='$product_update_name', product_quantity= '$product_update_quantity', product_price_enter='$product_update_price_enter', product_price='$product_update_price'
		WHERE product_code = '".$product_update_code."'";
	$runupdate = $conn->query($updatenv);
		echo "ok";
		setcookie('editnvtc','không thành công', time()+10);
		header('location: products.php');
		
	
}
else{
	echo "Chưa submit";

	header('location: product_edit.php');
}

?>