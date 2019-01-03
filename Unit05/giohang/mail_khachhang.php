
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1 align="center">Thông tin khách hàng</h1>
	<h3>Tên khách hàng  : <?php echo $name ?> </h3>
	<h3>Số điện thoại : <?php echo $sdt ?></h3>
	<h3>Địa chỉ email : <?php echo $email ?> </h3>
	<h3>Địa chỉ khách hàng : <?php echo $address ?></h3>
	<h3>Giới tính : <?php echo $gioitinh ?></h3>
	<table style="text-align: center;" class="table">
		<tr style="font-size: 15px; background: #222222; color: white;" class="thead-dark">
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
			 foreach ($product_buyy as $product) { 
					
			 		$i++;
			 		$tong_tien+=$product['DonGia']*$product['SoLuong'];
				?>
				

				<tr>
					
					<td><?php echo $i ?></td>
					<td><?php echo $product['MaSP'] ?></td>
					<td><?php echo $product['TenSP'] ?></td>
					<td><?php echo $product['SoLuong'] ?></td>
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
</body>
</html>