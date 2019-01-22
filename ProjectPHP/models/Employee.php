<?php 
require_once('models/Model.php');
class Employee extends Model{
	var $conn;
	var $table_name='employees';
	var $primary_key='employee_code';
	function check($data){
		$sql ="SELECT * FROM employees where employee_email='".$data['username']."' and employee_password='".md5($data['password'])."'";

		$result= $this->conn->query($sql)->fetch_assoc();
		return $result;
	}
	function birthday($month,$day){
		$sql="SELECT * FROM employees WHERE employee_birthday LIKE '%-".$month."-".$day."'";
		$data = array();
		$result = $this->conn->query($sql);
		while ($row = $result->fetch_assoc()) {
			$data[] =$row;

		}

		return $data;
	}
}
?>