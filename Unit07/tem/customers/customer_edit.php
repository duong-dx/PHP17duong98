<?php  
$customer_code=$_GET['customer_code'];
include_once('../../db_connect.php');
			$detailkh = "SELECT * FROM customers WHERE customer_code = '".$customer_code."'";
			$result= $conn->query($detailkh);
			$row2 = $result->fetch_assoc();
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
		<form action="customer_edit_process.php" method="POST" role="form">
			<h3 align="center">Cập nhât thông tin khách hàng</h3>
			<label for="">Mã khách hàng : <?php echo $customer_code; ?></label>
			<div class="form-group">
				<input type="text" class="form-control" name="customer_update_code" value="<?php echo $customer_code; ?>" placeholder="Tên khách hàng" readonly>
			</div>
			<div class="form-group">
				<label for="">Tên khách hàng</label>
				<input type="text" class="form-control" name="customer_update_name" value="<?php echo $row2['customer_name']; ?>" placeholder="Tên khách hàng">
			</div>
			<div class="form-group">
				<label for="">Địa chỉ</label>
				<input type="text" class="form-control" name="customer_update_address" value="<?php echo $row2['customer_address']; ?>" placeholder="Địa chỉ">
			</div>
			<div class="form-group">
				<label for="">Ngày sinh</label>
				<input type="date" class="form-control" name="customer_update_birthday" value="<?php echo $row2['customer_birthday']; ?>" placeholder="Ngày sinh">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" class="form-control" name="customer_update_email" value="<?php echo $row2['customer_email']; ?>" placeholder="Địa chỉ email">
			</div>
			<div class="form-group">
				<label for="">Số điện thoại khách hàng</label>
				<input type="number" class="form-control" name="customer_update_mobile" value="<?php echo $row2['customer_mobile']; ?>" placeholder="Số điện thoại">
			</div>




			<button type="submit" name="updatekh" class="btn btn-primary">Cập nhập</button>
		</form>
	</div>

</body>
</html>