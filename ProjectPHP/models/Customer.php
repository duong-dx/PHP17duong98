<?php 
require_once('models/Model.php');
class Customer extends Model{ 
		var $conn;
		var $table_name='customers';
		var $primary_key='customer_code';
	
	function birthday($month,$day){
		$sql="SELECT * FROM customers WHERE customer_birthday LIKE '%-".$month."-".$day."'";
		$data = array();
		$result = $this->conn->query($sql);
		while ($row = $result->fetch_assoc()) {
			$data[] =$row;

		}

		return $data;
	}
	function check($data){
		$sql ="SELECT * FROM customers where customer_email='".$data['username']."' and customer_password='".md5($data['password'])."'";

		$result= $this->conn->query($sql)->fetch_assoc();
		return $result;
	}
}

?>