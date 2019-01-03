<?php 
include_once('data.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Xuân Dương</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<!-- link css toastr -->
	<script src="//code.jquery.com/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<body style="text-align: center;">
	<?php if(isset($_COOKIE['huydonhang'])){
		?>
		<script type="text/javascript">
			toastr["error"]("Hủy đơn hàng thành công", "Thông báo :");
		</script>
		<?php
	}
	if(isset($_COOKIE['khongtontai'])){ 
		?>
		<script type="text/javascript">
			toastr["error"]("Giỏ hàng không tồn tại !", "Thông báo :");
		</script>
		<?php

	}
	if(isset($_COOKIE['guithanhcong'])){ 
		?>
		<script type="text/javascript">
			toastr["success"]("Gửi email cho khách hàng thành công !", "Thông báo :");
		</script>
		<?php
	}
	?>
	<h1>DANH SÁCH NGƯỜI DÙNG</h1>
	<a class="btn btn-primary" href="cart.php">Xem giỏ hàng</a>
	<table class="table">
		<tr style="font-size: 20px; background: #222222; color: white;" class="thead-dark">
			<td scope="col">STT</td>
			<td scope="col">Mã sản phẩm</td>
			<td scope="col">Tên sản phẩm</td>
			<td scope="col">Số lượng</td>
			<td scope="col">Đơn giá</td>
			<td scope="col">Lựa chọn</td>
		</tr>
		<?php $i=0 ?>
		<tbody>
			<?php foreach ($products as $key => $product) { ?>
				<?php $i++; ?>
				<tr>

					<td><?php echo $i ?></td>
					<td><?php echo $product['MaSP'] ?></td>
					<td><?php echo $product['TenSP'] ?></td>
					<td><?php echo $product['SoLuong'] ?></td>
					<td><?php echo number_format($product['DonGia']) ?></td>
					<td>
						<a href="add.php?MaSP=<?php echo $key; ?>"  class="btn btn-primary">Thêm vào giỏ hàng</a>              
					</td>

				</tr>

			<?php } ?>

		</tbody>
	</table>
</body>
</html>