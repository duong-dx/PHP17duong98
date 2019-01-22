<?php
class Category{
	function All(){

		

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "qlbh";

// Create connection
		$connn = new mysqli($servername, $username, $password, $dbname);
		$connn->set_charset("utf8");
// Check connection
		if ($connn->connect_error) {
			die("Connection failed: " . $connn->connect_error);
		} 
		$sql = "SELECT * FROM product_types";
		$result = $connn->query($sql);

		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] =$row;

		}

		return $data;
	}
	function find($code){
		include_once('models/db_connect.php');
		$sql ="SELECT * FROM product_types where product_type_code ='".$code."'";
		$product_type = $conn->query($sql)->fetch_assoc();
		return $product_type;
	} 
	function insert($data){
		include_once('models/db_connect.php');
		$sql="INSERT INTO product_types(product_type_code,product_type_name,product_type_image) VALUES('".$data['code']."','".$data['name']."','".$data['image']."')";
		$status= $conn->query($sql);
		return $status;
	}
	function update($data){
		include_once('models/db_connect.php');
		$sql="UPDATE product_types SET product_type_code='".$data['code']."',product_type_name='".$data['name']."',product_type_image='".$data['image']."'  WHERE product_type_code='".$data['code']."'" ;



		$status = $conn->query($sql);
		return $status;
	}
	function delete_process($code){
		include_once('models/db_connect.php');
		$sql= "DELETE FROM product_types WHERE product_type_code ='".$code."'";
		$status= $conn->query($sql);
		return $status;

	}
	
}
?>