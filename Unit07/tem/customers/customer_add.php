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
	<?php if(isset($_COOKIE['themkhktc'])){
			?>
			<script type="text/javascript">
				toastr["error"]("Thêm mới không thành công !", "Thông báo :");
			</script>
			<?php
		}
		?>
	<div style="width: 60%;margin: auto;">
		<form action="customer_add_process.php" method="POST" role="form">
		<h3 align="center">Thêm mới khách hàng</h3>
		<div class="form-group">
			<label for="">Mã khách hàng</label>
			<input type="text" class="form-control" name="customer_new_code" placeholder="Tên khách hàng">
		</div>
		<div class="form-group">
			<label for="">Tên nhân viên</label>
			<input type="text" class="form-control" name="customer_new_name" placeholder="Tên khách hàng">
		</div>
		<div class="form-group">
			<label for="">Địa chỉ</label>
			<input type="text" class="form-control" name="customer_new_address" placeholder="Địa chỉ">
		</div>
		<div class="form-group">
			<label for="">Ngày sinh</label>
			<input type="date" class="form-control" name="customer_new_birthday" placeholder="Ngày sinh">
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="email" class="form-control" name="customer_new_email" placeholder="Địa chỉ email">
		</div>
		<div class="form-group">
			<label for="">Số điện thoại khách hàng</label>
			<input type="number" class="form-control" name="customer_new_mobile" placeholder="Số điện thoại">
		</div>
		
	
		
	
		<button type="submit" name="themkh" class="btn btn-primary">Thêm mới</button>
	</form>
	</div>
	
</body>
</html>

