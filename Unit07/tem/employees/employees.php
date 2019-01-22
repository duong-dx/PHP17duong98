<?php 
include_once('../layout/header.php');
include_once('../../db_connect.php');
$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
	$data[] =$row;

}
?>
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
	<a href="employee_add.php?themmoi=<?php echo 'themmoi' ?>" class="btn btn-primary">Thêm mới nhân viên</a>
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
						<a data-id="<?= $row['employee_code']?>" href="javascript:;" class="btn btn-success btn-detailnv" >Detail
						</a>
						

						<a href="employee_edit.php?employee_code=<?= $row['employee_code']?>" class="btn btn-warning">Update</a>  
						<a href="employee_delete.php?employee_code=<?php echo $row['employee_code']?>" class="btn btn-danger">Delete</a>

					</td>
				</tr>
			<?php  } ?>
		</tbody>
		

	</table>

</div>
<div class="modal fade" id="modal_detailnv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Thông tin nhân viên</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="container">
					<p>Mã nhân viên : <span id="id_detail"></span></p>
					<p>Tên nhân viên : <span id="name_detail"></span></p>
					<p>Ngày sinh : <span id="birthday_detail"></span></p>
					<p>Địa chỉ : <span id="address_detail"></span></p>
					
					<p>Email : <span id="email_detail"></span></p>
					<p>Số điện thoại : <span id="mobile_detail"></span></p>


				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
		$('#myTable').DataTable();
		$('.btn-detailnv').click(function(){
			//Bật modal
			$('#modal_detailnv').modal('show');
			//Lấy id cần gửi lên server xử lý
			$employee_code=$(this).attr("data-id");
			$.ajax({
				type: "GET",
				url: "employee_info.php?employee_code="+$employee_code,
				dataType:"json",
				data:{

				},
				success: function(response)
				{

					$("#id_detail").html(response.employee_code);
					$("#name_detail").html(response.employee_name);
					$("#birthday_detail").html(response.employee_birthday);
					$("#address_detail").html(response.employee_address);
					$("#email_detail").html(response.employee_email);
					$("#mobile_detail").html(response.employee_mobile);

				},
				error: function (xhr, ajaxOptions, thrownError) {

				}
			});
		});
		
	} );

</script>

<?php 
include_once('../layout/footer.php');
?>
