<?php 
require_once('models/Employee.php'); 
class EmployeeController{
	var $model;
	function __construct(){
		$this->model = new Employee();
	}
	function list(){
		$data= $this->model->All();
		require_once('views/employee/list.php');
	}
	function detail(){
		$code= $_GET['employee_code'];
		$employee= $this->model->find($code);
		require_once('views/employee/detail.php');
	}
	function add(){
		require_once('views/employee/add.php');
	}
	function store(){
		$data = $_POST;
		$status= $this->model->insert($data);
		if($status==true){
			setcookie('themnvtc',' thành công', time()+10);
			header("location: index.php?mod=employee&act=list");
		}
		else{
			setcookie('themnvktc','không thành công', time()+10);
			header("location: index.php?mod=employee&act=add");
		}
	}
	function edit(){
		$code= $_GET['employee_code'];
		$employee= $this->model->find($code);
		require_once('views/employee/edit.php');
	}
	function modal(){
		$code= $_GET['code'];
		$employee= $this->model->find2($code);
		
		require_once('views/employee/list.php');
	}

	function update(){
		$data= $_POST;
		$status= $this->model->update($data);
		if($status==true){
			setcookie('editnvtc','không thành công', time()+10);
			header('location: index.php?mod=employee&act=list');
		}
		else{
			echo "Chưa submit";
			setcookie('khongtontai','không thành công', time()+10);
			header('location: index.php?mod=employee&act=list');
		}

	}
	function delete(){
		$code = $_GET['employee_code'];
		$status = $this->model->delete_process($code);
		if($status==true){
			header('location: index.php?mod=employee&act=list');
			setcookie('xoanv','Không thành công', time()+10);
		}
		else{

			setcookie('khongtontai','Không thành công', time()+10);
			header('location: index.php?mod=employee&act=list');
		}

	}
}
?>