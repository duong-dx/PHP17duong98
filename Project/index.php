<?php 
 



$mod = isset($_GET['mod'])?$_GET['mod']:''; //module
$act = isset($_GET['act'])?$_GET['act']:''; // action
switch ($mod) {
	case 'product':
		require_once('controllers/ProductController.php');
		$product_controller= new ProductController();

		
		switch ($act) {
			case 'list':
				$product_controller->list();
				break;
			case 'add':
				$product_controller->add();
				break;
			case 'store':
				$product_controller->store();
				break;		
			case 'detail':
				$product_controller->detail();
				break;
			case 'edit':
				$product_controller->edit();
				break;	
			case 'update':
				$product_controller->update();
			break;	
			case 'delete':
				$product_controller->delete();
			break;	
			case 'sell':
				$product_controller->sell();
			break;
			default:
				# code...
				break;	
		}

	break;
	case 'product_type':
		require_once('controllers/CategoryController.php');
		$category_controller= new CategoryController();

		
		switch ($act) {
			case 'list':
				$category_controller->list();
				break;
			case 'add':
				$category_controller->add();
				break;
			case 'store':
				$category_controller->store();
				break;		
			case 'detail':
				$category_controller->detail();
				break;
			case 'edit':
				$category_controller->edit();
				break;	
			case 'update':
				$category_controller->update();
			break;	
			case 'delete':
				$category_controller->delete();
			break;	
			default:
				# code...
				break;	
		}

	break;
	case 'employee':
		require_once('controllers/EmployeeController.php');
		$employee_controller= new EmployeeController();

		
		switch ($act) {
			case 'list':
				$employee_controller->list();
				break;
			case 'add':
				$employee_controller->add();
				break;
			case 'store':
				$employee_controller->store();
				break;		
			case 'detail':
				$employee_controller->detail();
				break;
			case 'edit':
				$employee_controller->edit();
				break;
			case 'update':
				$employee_controller->update();
				break;
			case 'delete':
				$employee_controller->delete();
				break;
			case 'modal':
				$employee_controller->modal();
				break;
			default:
				# code...
				break;	
		}

	break;
	
	case 'customer':
		require_once('controllers/CustomerController.php');
		$customer_controller= new CustomerController();

		
		switch ($act) {
			case 'list':
				$customer_controller->list();
				break;
			case 'add':
				$customer_controller->add();
				break;
			case 'store':
				$customer_controller->store();
				break;		
			case 'detail':
				$customer_controller->detail();
				break;
			case 'edit':
				$customer_controller->edit();
				break;
			case 'update':
				$customer_controller->update();
				break;
			case 'delete':
				$customer_controller->delete();
				break;
			default:
				# code...
				break;	
		}

	break;
default:
		
		 ?>
		 
		 <a class="btn btn-success" href="?mod=product&act=sell">Bán Hàng</a>
		 <?php
		break;
}


 ?>

 