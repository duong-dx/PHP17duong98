<?php 
include_once('models/Customer.php');
class CustomerController{
	var $model;
	function __construct(){
		$this->model = new Customer();
	}
	function list(){
		$data= $this->model->All();
		require_once('views/customer/list.php');
	}
	function detail(){
		$code= $_GET['customer_code'];
		$customer = $this->model->find($code);
		require_once('views/customer/detail.php');
	}
	function add(){
		require_once('views/customer/add.php');
	}
	function store(){
		$data =$_POST;
		$status=$this->model->insert($data);
		if($status==true){
			setcookie('themkhtc','Không thành công', time()+10);
			header("location: index.php?mod=customer&act=list");
		}
		else{
			setcookie('themkhktc','không thành công', time()+10);
			header("location: index.php?mod=customer&act=add");

		}
	}
	function edit(){
		$code= $_GET['customer_code'];
		$customer = $this->model->find($code);
		require_once('views/customer/edit.php');
	}
	function update(){
		$data =$_POST;
		$status=$this->model->update($data);
		if($status==true){
			setcookie('editkhtc','không thành công', time()+10);
			header('location: index.php?mod=customer&act=list');
		}
		else{
			echo "Chưa submit";
			setcookie('khongtontai','không thành công', time()+10);
			header('location: index.php?mod=customer&act=list');
		}
	}
	function delete(){
		$code=$_GET['customer_code'];
		$status=$this->model->delete_process($code);
		if($status==true){
			header('location: index.php?mod=customer&act=list');
			setcookie('xoakh','Không thành công', time()+10);
		}
		else{

			setcookie('khongtontai','Không thành công', time()+10);
			header('location: index.php?mod=customer&act=list');
		}
	}
}
?>