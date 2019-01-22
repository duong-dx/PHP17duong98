<?php 
include_once('views/layout/header.php'); ?>
<?php if(isset($_COOKIE['khongtontai'])){
			?>
			<script type="text/javascript">
				toastr["error"]("Trang hiện không tồn tại", "Thông báo :");
			</script>
			<?php
		}
		if(isset($_COOKIE['xoakh'])){ 
			?>
			<script type="text/javascript">
				toastr["success"]("Xóa nhân viên thành công!", "Thông báo :");
			</script>
			<?php

		}
		if(isset($_COOKIE['themkhtc'])){ 
			?>
			<script type="text/javascript">
				toastr["success"]("Thêm mới nhân viên thành công !", "Thông báo :");
			</script>
			<?php

		}
		if(isset($_COOKIE['editkhtc'])){ 
			?>
			<script type="text/javascript">
				toastr["success"]("Chỉnh sửa thông tin khách hàng thành công !", "Thông báo :");
			</script>
			<?php

		}
		?>
<div class="container">
	<h2 align="center">DANH SÁCH KHÁCH HÀNG</h2>
	<a href="?mod=customer&act=add" class="btn btn-primary">Thêm mới khách hàng</a>
	<table id="myTable" class="table">
		<thead>
			<tr>
				<th>Mã khách hàng</th>
				<th>Tên khách hàng</th>
				<th>Địa chỉ</th>
				<th>Số điện thoại</th>
				<th>Lựa chọn</th>
			</tr>
		</thead>
		<tbody>
			<?php 

			foreach ($data as $row) {

				?>

				<tr>
					<td><?php  echo strtoupper($row['customer_code']); ?></td>
					<td><?php  echo $row['customer_name']; ?></td>
					<td><?php  echo $row['customer_address']; ?></td>
					<td><?php  echo ($row['customer_mobile']) ; ?></td>
					<td>
						
						<a href="?mod=customer&act=detail&customer_code=<?php echo $row['customer_code']; ?>" class="btn btn-success">Profile</a>  

						<a href="?mod=customer&act=edit&customer_code=<?php echo $row['customer_code']; ?>" class="btn btn-warning">Update</a>  
						<a href="?mod=customer&act=delete&customer_code=<?php echo $row['customer_code']; ?>" class="btn btn-danger delete">Delete</a>

					</td>
				</tr>
			<?php  } ?>
		</tbody>
		

	</table>

</div>

	<?php 
include_once('views/layout/footer.php'); ?>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
		$('#myTable').DataTable();
		
		
	} );


</script>

