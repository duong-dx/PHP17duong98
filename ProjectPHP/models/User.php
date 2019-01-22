<?php 
require_once('models/Model.php');
class User extends Model{

		var $conn;
		var $table_name='categories';
		var $primary_key='category_code';

		function All2(){
			$sql = "SELECT c.category_name,c.category_code,  p.product_code, p.product_name,p.product_price ,p.product_image FROM categories c JOIN products p on p.category_code = c.`category_code`";
		$result = $this->conn->query($sql);

		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] =$row;

		}

		return $data;
		}
		function find_category($code){
		
		$sql ="SELECT * FROM products  where category_code ='".$code."'";

		$result = $this->conn->query($sql);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] =$row;

		}
		return $data;
	} 
	
	
	
	

}
?>