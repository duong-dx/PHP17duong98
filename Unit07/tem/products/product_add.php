<?php 
include_once('../layout/header.php');?>
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
	<?php if(isset($_COOKIE['themnvktc'])){
			?>
			<script type="text/javascript">
				toastr["error"]("Thêm mới không thành công !", "Thông báo :");
			</script>
			<?php
		}
		?> 
	<div style="width: 60%;margin: auto;">
		<form action="product_add_process.php" method="POST" role="form">
		<h3 align="center">Thêm mới nhân viên</h3>
		<div class="form-group">
			<label for="">Mã sản phảm</label>
			<input type="text" class="form-control" name="product_new_code" placeholder="Mã sản phẩm" >
		</div>
		<div class="form-group">
			<label for="">Tên sản phảm</label>
			<input type="text" class="form-control" name="product_new_name" placeholder="Tên sản phảm">
		</div>
		
		<div class="form-group">
			<label for="">Số lượng nhập</label>
			<input type="number" class="form-control" name="product_new_quantity" placeholder="Số lượng">
		</div>
		<div class="form-group">
			<label for="">Đơn giá nhập</label>
			<input type="number" class="form-control" name="product_new_price_enter" placeholder="Đơn giá">
		</div>
		<div class="form-group">
			<label for="">Đơn giá bán</label>
			<input type="number" class="form-control" name="product_new_price" placeholder="Đơn giá">
		</div>
		
		

		
	
		
	
		<button type="submit" name="themnv" class="btn btn-primary">Thêm mới</button>
	</form>
	</div>
	
</body>
</html>
<?php 
include_once('../layout/footer.php');
?>


