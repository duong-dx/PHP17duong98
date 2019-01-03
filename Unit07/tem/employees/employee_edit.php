<?php 
	$employee_code=$_GET['employee_code'];
	include_once('../../db_connect.php');
			$detailnv = "SELECT * FROM employees WHERE employee_code = '".$employee_code."'";
			$result= $conn->query($detailnv);
			$row = $result->fetch_assoc();
	?> 
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Thông tin khách hàng</title>
		<!-- Latest compiled and minified CSS & JS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		<!-- link css toastr -->

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	</head>
	<body>
		
		<div style="width: 60%;margin: auto;">
			<form action="employee_edit_process.php" method="POST" role="form">
				<h3 align="center">Cập nhât thong tin nhân viên</h3>
				<label for="">Mã nhân viên : <?php echo $employee_code; ?></label>
				<div class="form-group">
					<label for="">Mã nhân viên </label>
					<input type="text" class="form-control" name="employee_update_code" value="<?php echo $employee_code; ?>" placeholder="Tên khách hàng" readonly>
				</div>
				<div class="form-group">
					<label for="">Tên nhân viên</label>
					<input type="text" class="form-control" name="employee_update_name" value="<?php echo $row['employee_name']; ?>" placeholder="Tên khách hàng">
				</div>
				<div class="form-group">
					<label for="">Địa chỉ</label>
					<input type="text" class="form-control" name="employee_update_address" value="<?php echo $row['employee_address']; ?>" placeholder="Địa chỉ">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" name="employee_update_email" value="<?php echo $row['employee_email']; ?>" placeholder="Địa chỉ email">
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" name="employee_update_password" value="<?php echo $row['employee_pw']; ?>" placeholder="Mật khẩu khách hàng">
				</div>
				<div class="form-group">
					<label for="">Số điên thoại</label>
					<input type="number" class="form-control" name="employee_update_mobile" value="<?php echo $row['employee_mobile']; ?>" placeholder="Mật khẩu khách hàng">
				</div>




				<button type="submit" name="updatenv" class="btn btn-primary">Cập nhập</button>
			</form>
		</div>

	</body>
	</html>