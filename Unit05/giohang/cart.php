<?php
	
session_start();
if (isset($_SESSION['cart'])) {
	$product_buyy=$_SESSION['cart'];
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

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
		<script src="//code.jquery.com/jquery.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<!-- link js toastr -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	</head>
	<body >
		<?php if(isset($_COOKIE['giamsoluong'])){
			?>
			<script type="text/javascript">
				toastr["error"]("Giảm số lượng hàng mua thành công", "Thông báo :");
			</script>
			<?php
		}
		if(isset($_COOKIE['huysanpham'])){ 
			?>
			<script type="text/javascript">
				toastr["error"]("Hủy sản phẩm thành công !", "Thông báo :");
			</script>
			<?php

		}
		if(isset($_COOKIE['themsoluong'])){ 
			?>
			<script type="text/javascript">
				toastr["success"]("Thêm số lượng sản phẩm mua thành công !", "Thông báo :");
			</script>
			<?php

		}
		if(isset($_COOKIE['themsp'])){ 
			?>
			<script type="text/javascript">
				toastr["success"]("Thêm mới sản phẩm vào giỏ hàng thành công thành công !", "Thông báo :");
			</script>
			<?php

		}
		if(isset($_COOKIE['soluonglonhon'])){ 
			?>
			<script type="text/javascript">
				toastr["error"]("Số lượng bạn muốn mua đang lớn hơn số lượng cửa hàng hiện có !", "Thông báo :");
			</script>
			<?php

		}
		
		?>
		<h1 style="text-align: center;">Giỏ Hàng</h1>
		<a class="btn btn-primary" href="index.php">Xem danh sách sản phẩm</a>
		<table style="text-align: center;" class="table">
			<tr style="font-size: 20px; background: #222222; color: white;" class="thead-dark">
				<td scope="col">STT</td>
				<td scope="col">Mã sản phẩm</td>
				<td scope="col">Tên sản phẩm</td>
				<td scope="col">Số lượng</td>
				<td scope="col">Đơn giá</td>
				<td scope="col">Thành tiền</td>
			</tr>

			<tbody>


				<?php
				$tong_tien=0;$i=0;
				foreach ($product_buyy as  $key => $product) { 
					
					$i++;
					$tong_tien+=$product['DonGia']*$product['SoLuong'];
					?>


					<tr>

						<td><?php echo $i ?></td>
						<td><?php echo $product['MaSP'] ?></td>
						<td><?php echo $product['TenSP'] ?></td>
						<td>
							<?php echo $product['SoLuong'] ?>
							<a href="add.php?MaSP=<?php echo $key; ?>"  class="btn btn-primary">+</a>
							<a href="giam.php?MaSP=<?php echo $key; ?>"  class="btn btn-primary">-</a> 

							
						</td>
						<td><?php echo number_format($product['DonGia']) ?></td>
						<td align="right">
							<?php echo number_format($product['DonGia']*$product['SoLuong']) ?>

						</tr>

						<?php

					} ?>
					<tr>
						<td colspan="5">Tổng tiền thanh toán :</td>
						<td align="right"><?= number_format($tong_tien) ?></td>
					</tr>

				</tbody>

			</table>

			<a class="btn btn-primary" href="form.php">Thanh Toán</a>
			<a class="btn btn-primary" href="deletecart.php">Hủy đơn hàng</a>
		</body>
		</html>
		<?php


	}
	else{
		setcookie('khongtontai','Giỏ hàng không tồn tại',time()+3);
		header('location: index.php');
	}
	


	?>

