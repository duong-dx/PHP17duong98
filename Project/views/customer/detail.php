<?php 
include_once('layout/header.php'); ?>
	<p>Mã khách hàng :<?php echo $customer['customer_code']; ?></p>
	<p>Tên khách hàng :<?php echo $customer['customer_name']; ?></p>
	<p>Email khách hàng :<?php echo $customer['customer_email']; ?></p>
	<p>Địa chỉ khách hàng :<?php echo $customer['customer_address']; ?></p>
	<p>Ngày sinh :<?php echo $customer['customer_birthday']; ?></p>
	<p>Số điện thoại :<?php echo $customer['customer_mobile']; ?></p>
	
	<?php 
include_once('layout/footer.php'); ?>