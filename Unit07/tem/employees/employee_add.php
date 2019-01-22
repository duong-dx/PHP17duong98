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
	<?php if(isset($_COOKIE['themnvktc'])){
			?>
			<script type="text/javascript">
				toastr["error"]("Thêm mới không thành công !", "Thông báo :");
			</script>
			<?php
		}
		?> 
	<div style="width: 60%;margin: auto;">
		<form action="employee_add_process.php" method="POST" role="form">
		<h3 align="center">Thêm mới nhân viên</h3>
		<div class="form-group">
			<label for="">Mã nhân viên</label>
			<input type="text" class="form-control" name="employee_new_code" placeholder="Mã nhân viên" >
		</div>
		<div class="form-group">
			<label for="">Tên nhân viên</label>
			<input type="text" class="form-control" name="employee_new_name" placeholder="Tên nhân viên">
		</div>
		<div class="form-group">
			<label for="">Ngày sinh nhân viên</label>
			<input type="date" class="form-control" name="employee_new_birthday" placeholder="Ngày sinh">
		</div>
		<div class="form-group">
			<label for="">Địa chỉ</label>
			<input type="text" class="form-control" name="employee_new_address" placeholder="Địa chỉ">
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="email" class="form-control" name="employee_new_email" placeholder="Địa chỉ email">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="password" class="form-control" name="employee_new_password" placeholder="Mật khẩu">
		</div>
		<div class="form-group">
			<label for="">Số điện thoại</label>
			<input type="number" class="form-control" name="employee_new_mobile" placeholder="Số điện thoại">
		</div>

		
	
		
	
		<button type="submit" name="themnv" class="btn btn-primary">Thêm mới</button>
	</form>
	</div>
	
</body>
</html>

