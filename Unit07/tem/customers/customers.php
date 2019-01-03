<?php 
include_once('../layout/header.php');
include_once('../../db_connect.php');
$sql = "SELECT * FROM customers";
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
	<a href="customer_add.php" class="btn btn-primary">Thêm mới khách hàng</a>
	<table id="myTable" class="table">
		<thead>
			<tr>
				<th>Mã khách hàng</th>
				<th>Tên khách hàng</th>
				<th>Địa chỉ</th>
				<th>Email</th>
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

					<td><?php  echo ($row['customer_email']) ; ?></td>
					<td><?php  echo ($row['customer_mobile']) ; ?></td>
					<td>
						<a data-id="<?php echo $row['customer_code']; ?>" href="javascript:;" class="btn btn-success btn_detail" >Detail
						</a>
						

						<a href="customer_edit.php?customer_code=<?php echo $row['customer_code']; ?>" class="btn btn-warning">Update</a>  
						<a href="customer_delete.php?customer_code=<?php echo $row['customer_code']; ?>" class="btn btn-danger">Delete</a>

					</td>
				</tr>
			<?php  } ?>
		</tbody>
		

	</table>

</div>
<div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Thông tin sản phẩm</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<p>Mã khách hàng : <span id="id_detail"></span></p>
					<p>Tên khách hàng : <span id="name_detail"></span></p>
					<p>Địa chỉ : <span id="address_detail"></span></p>
					<p>Ngày sinh : <span id="birthday_detail"></span></p>
					<p>Email : <span id="email_detail"></span></p>

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
		$('.btn_detail').click(function(){
			//Bật modal
			$('#modal_detail').modal('show');
			//Lấy id cần gửi lên server xử lý
			$customer_code=$(this).attr("data-id");
			$.ajax({
            type: "GET",
            url: "customer_info.php?customer_code="+$customer_code,
            dataType:"json",
            data:{
              
            },
            success: function(response)
            {
              
              $("#id_detail").html(response.customer_code);
              $("#name_detail").html(response.customer_name);
              $("#address_detail").html(response.customer_address);
              $("#birthday_detail").html(response.customer_birthday);
              $("#email_detail").html(response.customer_email);

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
