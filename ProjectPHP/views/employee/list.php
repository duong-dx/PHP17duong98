<?php 
include_once('views/layout/header.php'); ?>
<?php if(isset($_COOKIE['khongtontai'])){
	?>
	<script type="text/javascript">
		toastr["error"]("Trang hiện không tồn tại", "Thông báo :");
	</script>
	<?php
}
if(isset($_COOKIE['xoanv'])){ 
	?>
	<script type="text/javascript">
		toastr["success"]("Xóa nhân viên thành công!", "Thông báo :");
	</script>
	<?php

}
if(isset($_COOKIE['themnvtc'])){ 
	?>
	<script type="text/javascript">
		toastr["success"]("Thêm mới nhân viên thành công !", "Thông báo :");
	</script>
	<?php

}
if(isset($_COOKIE['editnvtc'])){ 
	?>
	<script type="text/javascript">
		toastr["success"]("Chỉnh sửa thông tin nhân viên thành công !", "Thông báo :");
	</script>
	<?php

}
?>
<div class="container">
	<h2 align="center">DANH SÁCH NHÂN VIÊN</h2>
	<a href="index.php?mod=employee&act=add" class="btn btn-primary">Thêm mới nhân viên</a>
	<table id="myTable" class="table">
		<thead>
			<tr>
				<th>Mã nhân viên</th>
				<th>Tên nhân viên</th>
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
					<td><?php  echo $row['employee_code']; ?></td>
					<td><?php  echo $row['employee_name']; ?></td>
					<td><?php  echo $row['employee_address']; ?></td>
					
					<td><?php  echo ($row['employee_mobile']) ; ?></td>
					<td>
						<a href="?mod=employee&act=detail&employee_code=<?= $row['employee_code']?>" class="btn btn-success">Detail</a> 
						<a href="?mod=employee&act=edit&employee_code=<?= $row['employee_code']?>" class="btn btn-warning">Update</a>  
						<a href="?mod=employee&act=delete&employee_code=<?= $row['employee_code']?>" class="btn btn-danger delete">Delete</a>

					</td>
				</tr>
			<?php  } ?>
		</tbody>
		

	</table>

</div>

<?php include_once('views/layout/footer.php'); ?>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
		$('#myTable').DataTable();
		
	} );

</script>



