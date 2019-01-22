<?php 
class Customer{ 
	function All(){
		include_once('db_connect.php');
		$sql= "SELECT * FROM customers";
		$result = $conn->query($sql);

		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] =$row;

		}

		return $data;
	}
	function find($code){
		include_once('db_connect.php');
		$sql ="SELECT * FROM customers WHERE customer_code='".$code."'";
		$customer = $conn->query($sql)->fetch_assoc();
		return $customer;
	}
	function insert($data){
		include_once('models/db_connect.php');
		$sql="INSERT INTO customers(customer_code,customer_name,customer_birthday,customer_address,customer_email,customer_password,customer_mobile) VALUES('".$data['customer_new_code']."','".$data['customer_new_name']."','".$data['customer_new_birthday']."','".$data['customer_new_address']."','".$data['customer_new_email']."','".$data['customer_new_password']."','".$data['customer_new_mobile']."')";
		$status= $conn->query($sql);
		return $status;
	}
	function update($data){
		include_once('models/db_connect.php');
		$sql="UPDATE customers SET customer_code='".$data['customer_update_code']."',customer_name='".$data['customer_update_name']."',customer_birthday='".$data['customer_update_birthday']."',customer_address='".$data['customer_update_address']."',customer_email='".$data['customer_update_email']."',customer_password='".$data['customer_update_password']."',customer_mobile='".$data['customer_update_mobile']."'  WHERE customer_code='".$data['customer_update_code']."'" ;



		$status = $conn->query($sql);
		return $status;
	}
	function delete_process($code){
		include_once('models/db_connect.php');
		$sql="DELETE FROM customers WHERE customer_code='".$code."'";
		$status=$conn->query($sql);
		return $status;
	}
}

?>