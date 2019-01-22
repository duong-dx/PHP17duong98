<?php 
include_once('../layout/header.php');
$product_code=$_GET['product_code'];
include_once('../../db_connect.php');
$detailnv = "SELECT * FROM products WHERE product_code = '".$product_code."'";
$result= $conn->query($detailnv);
$row = $result->fetch_assoc();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thông tin khách hàng</title>
	<!-- Latest compiled and minified CSS & JS -->
	<script src="//code.jquery.com/jquery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<!-- link css toastr -->

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>

	<div style="width: 60%;margin: auto;">
		<form action="product_edit_process.php" method="POST" role="form">
			<h3 align="center">Cập nhât thông tin sản phẩm</h3>
			<label for="">Mã sản phẩm : <?php echo $product_code; ?></label>
			<div class="form-group">
				<label for="">Mã sản phẩm </label>
				<input type="text" class="form-control" name="product_update_code" value="<?php echo $product_code; ?>" placeholder="Mã sản phẩm" readonly>
			</div>
			<div class="form-group">
				<label for="">Tên mới sản phẩm</label>
				<input type="text" class="form-control" name="product_update_name" value="<?php echo $row['product_name']; ?>" placeholder="Tên mới sản phẩm">
			</div>
			<div class="form-group">
				<label for="">Số lượng mới</label>
				<input type="number" class="form-control" name="product_update_quantity" value="<?php echo $row['product_quantity']; ?>" placeholder="Số lượng mới">
			</div>
			<div class="form-group">
				<label for="">Đơn giá nhập</label>
				<input type="number" class="form-control" name="product_update_price_enter" value="<?php echo $row['product_price_enter']; ?>" placeholder="Số lượng mới">
			</div>
			<div class="form-group">
				<label for="">Đơn giá bán</label>
				<input type="number" class="form-control" name="product_update_price" value="<?php echo $row['product_price']; ?>" placeholder="Số lượng mới">
			</div>
			




			<button type="submit" name="updatenv" class="btn btn-primary">Cập nhập</button>
		</form>
	</div>

</body>
</html>
<?php 
include_once('../layout/footer.php');
?>

