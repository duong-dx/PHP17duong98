<?php
	include_once('layout/header.php'); ?>
	<p>Mã nhân viên:<?php echo $employee['employee_code']; ?></p>
	<p>Tên nhân viên:<?php echo $employee['employee_name']; ?></p>
	<p>Email :<?php echo $employee['employee_email']; ?></p>
	<p>Địa chỉ :<?php echo $employee['employee_address']; ?></p>
	<p>Ngày sinh :<?php echo $employee['employee_birthday']; ?></p>
	<p>Số điện thoại liên hệ :<?php echo $employee['employee_mobile']; ?></p>
<?php include_once('layout/footer.php'); ?>