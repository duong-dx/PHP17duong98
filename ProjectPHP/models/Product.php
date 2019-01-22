<?php 
require_once('models/Model.php');
class Product extends Model{

		var $conn;
		var $table_name='products';
		var $primary_key='product_code';

		function All2(){
			$sql = "SELECT p.product_code,p.product_image, p.product_name,p.product_quantity,p.product_price , c.category_name FROM products p JOIN categories c on p.category_code = c.`category_code`;";
		$result = $this->conn->query($sql);

		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] =$row;

		}

		return $data;
		}
		function reduceQuantity($product_code,$quantity_buy){
			$quantity_con=$this->getQuantity($product_code)-$quantity_buy;
			$query ="UPDATE ".$this->table_name." SET product_quantity = ".$quantity_con." WHERE ".$this->primary_key."= '".$product_code."'";
			$result = $this->conn->query($query);
			return $result;

		}
		function getQuantity($code){
			$query = "SELECT product_quantity FRom ".$this->table_name." WHERE ".$this->primary_key." = '".$code."' ";
			$result = $this->conn->query($query)->fetch_assoc()['product_quantity'];
			return $result;

		}
		function search_name($name){
			$sql="SELECT * FROM products WHERE product_name LIKE '%".$name['search']."%'";
			// echo $sql;
			$result = $this->conn->query($sql);
			$data = array();
			while ($row = $result->fetch_assoc()) {
			$data[] =$row;

			}
				// echo "<pre>";
			 // 		print_r($data);
			 // 	echo "</pre>";
			 // 	die;
			return $data;
		}

	
	
	
	

}
?>