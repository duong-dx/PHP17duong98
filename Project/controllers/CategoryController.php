<?php 
require_once('models/Product.php');
require_once('models/Category.php');
class CategoryController{
	var $model;
	
	function __construct(){
		$this->model= new Category();
		
	}
	function list(){
		$data= $this->model->All();
		require_once('views/product_type/list.php');
	}
	function detail(){
		$code= $_GET['product_type_code'];
		$product_type= $this->model->find($code);
		require_once('views/product_type/detail.php');
	}
	function add(){
		require_once('views/product_type/add.php');
	}
	function store(){
		  $data = $_POST;
		if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 

        $target_dir = "public/images/category/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["image"]["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            // echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        	$data['image']=basename($_FILES["image"]["name"]);
        } else { // Upload file có lỗi 
        	$data['image']="imgdefault.jpg";
        }
    }
  
    $status = $this->model->insert($data);
    if($status==true){
    	setcookie('themnvtc',' thành công', time()+10);
    	header("Location: index.php?mod=product_type&act=list");
    }
    else{
    	setcookie('themnvktc','không thành công', time()+10);
    	header("Location: index.php?mod=product_type&act=add");
    }

}
function edit(){
	$code= $_GET['product_type_code'];

	$product= $this->model->find($code);


	require_once('views/product_type/edit.php');
}
function update(){
	$data= $_POST;
	if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 

        $target_dir = "public/images/category/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["image"]["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            // echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        	$data['image']=basename($_FILES["image"]["name"]);
        } else { // Upload file có lỗi 
        	$data['image']="imgdefault.jpg";
        }
    }
    var_dump($data);

	$status = $this->model->update($data);

	if($status==true){
		setcookie('editnvtc','không thành công', time()+10);
		header('location: index.php?mod=product_type&act=list');
	}
	else{
		setcookie('khongtontai','không thành công', time()+10);
		header('location: index.php?mod=product_type&act=list');

	}
}
function delete(){
	$code=$_GET['product_type_code'];
	$status= $this->model->delete_process($code);
	if ($status==true) {
		setcookie('xoanv','Không thành công', time()+10);
		echo "ok";
		header('location: index.php?mod=product_type&act=list');
	}
	else{
		setcookie('khongtontai','không thành công', time()+10);
		echo "Đéo ok";
		header('location: index.php?mod=product_type&act=list');
	}


}

} ?>