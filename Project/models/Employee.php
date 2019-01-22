<?php 
class Employee{
	function All(){
		include_once('models/db_connect.php');
		$sql = "SELECT * FROM employees";
		$result = $conn->query($sql);

		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] =$row;

		}

		return $data;

	}
	function find($code){
		include_once('models/db_connect.php');
		$sql ="SELECT * FROM employees where employee_code ='".$code."'";
		$employee = $conn->query($sql)->fetch_assoc();
		return $employee;
	}
	function find2($code){
		include_once('models/db_connect.php');
		$sql ="SELECT * FROM employees where employee_code ='".$code."'";
		$employee = $conn->query($sql)->fetch_assoc();
		return json_encode($employee);
		 
	}
	function insert($data){
		include_once('models/db_connect.php');
		$sql="INSERT INTO employees(employee_code,employee_name,employee_birthday,employee_address,employee_email,employee_password,employee_mobile) VALUES('".$data['employee_new_code']."','".$data['employee_new_name']."','".$data['employee_new_birthday']."','".$data['employee_new_address']."','".$data['employee_new_email']."','".$data['employee_new_password']."','".$data['employee_new_mobile']."')";
		$status= $conn->query($sql);
		return $status;
	}
	function update($data){
		include_once('models/db_connect.php');
		$sql="UPDATE employees SET employee_code='".$data['employee_update_code']."',employee_name='".$data['employee_update_name']."',employee_birthday='".$data['employee_update_birthday']."',employee_address='".$data['employee_update_address']."',employee_email='".$data['employee_update_email']."',employee_password='".$data['employee_update_password']."',employee_mobile='".$data['employee_update_mobile']."'  WHERE employee_code='".$data['employee_update_code']."'" ;



		$status = $conn->query($sql);
		return $status;
	}
	function delete_process($code){
		include_once('models/db_connect.php');
		$sql="DELETE FROM employees WHERE employee_code ='".$code."'";
		$status = $conn->query($sql);
		return $status;
	}
}
?>