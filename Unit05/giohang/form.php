<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thông tin khách hàng</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<form action="xuly_email.php" method="POST" role="form">
		<h3 align="center">Thông tin khách hàng</h3>
	
		<div class="form-group">
			<label for="">Tên khách hàng</label>
			<input type="text" class="form-control" name="name" placeholder="Tên khách hàng">
		</div>
		<div class="form-group">
			<label for="">Số điện thoại</label>
			<input type="number" class="form-control" name="sdt" placeholder="Số điện thoại">
		</div>
		<div class="form-group">
			<label for="">Địa chỉ email</label>
			<input type="text" class="form-control" name="email" placeholder="Địa chỉ email">
		</div>
		<div class="form-group">
			<label for="">Địa chỉ khách hàng</label>
			<input type="text" class="form-control" name="address" placeholder="Địa chỉ khách hàng">
		</div>
		<div class="form-group">
			<label for="">Giới tính</label>
			<input type="radio" name="gioitinh" value="Nam">Nam
			<input type="radio" name="gioitinh" value="Nữ">Nữ
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Gửi</button>
	</form>
</body>
</html>