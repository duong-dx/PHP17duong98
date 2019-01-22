<?php 
	/**
	 * 
	 */
	class auth
	{
		
		function check_login(){
			if(!isset($_SESSION['isLogin'])){
				header('location: ?mod=login&act=formlogin');
			}

		}
		function check_login_online(){
			if(!isset($_SESSION['isLogin_customer'])){
				header('location: ?mod=user&act=customer_cart');
			}
		}
		
	}


 ?>