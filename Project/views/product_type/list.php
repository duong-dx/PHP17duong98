<?php 
include_once('layout/header.php'); ?>
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
		toastr["success"]("Xóa thương hiệu thành công!", "Thông báo :");
	</script>
	<?php

}
if(isset($_COOKIE['themnvtc'])){ 
	?>
	<script type="text/javascript">
		toastr["success"]("Thêm mới thương hiệu thành công !", "Thông báo :");
	</script>
	<?php

}
if(isset($_COOKIE['editnvtc'])){ 
	?>
	<script type="text/javascript">
		toastr["success"]("Chỉnh sửa thông tin thương hiệu thành công !", "Thông báo :");
	</script>
	<?php

}
?>
<div class="container">
	<h2 align="center">DANH SÁCH THƯƠN HIỆU</h2>
	<a href="?mod=product_type&act=add" class="btn btn-primary">Thêm mới thương hiệu</a>
	<table id="myTable" class="table">
		<thead>
			<tr>
				<th>Mã Thương hiệu</th>
				<th>Tên thương hiệu</th>				
				<th>Logo thương hiệu</th>
				<th>Lựa chọn</th>
			</tr>
		</thead>
		<tbody>
			<?php 

			foreach ($data as $row) {

				?>

				<tr>
					<td><?php  echo $row['product_type_code']; ?></td>
					<td><?php  echo $row['product_type_name']; ?></td>
					<td> <div style="width: 200px; height: 100px;"><img style="height: 100%; width: 100%;" class="img-fluid" src="public/images/category/<?php  echo $row['product_type_image']; ?>"></div> </td>
					<td>
						<a data-id="<?= $row['product_code']?>" href="javascript:;" class="btn btn-success btn-detailnv" >Detail
						</a>
						
						<a href="?mod=product_type&act=detail&product_type_code=<?= $row['product_type_code']?>" class="btn btn-warning">Detail2</a> 
						<a href="?mod=product_type&act=edit&product_type_code=<?= $row['product_type_code']?>" class="btn btn-warning">Update</a>  
						<a href="?mod=product_type&act=delete&product_type_code=<?php echo $row['product_type_code']?>" class="btn btn-danger delete">Delete</a>

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
				<h5 class="modal-title" id="exampleModalLabel">Thông tin sản phẩm</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="container">
					<p>Mã sản phẩm : <span id="id_detail"></span></p>
					<p>Tên sản phẩm : <span id="name_detail"></span></p>
					<p>Số lượng : <span id="quantity_detail"></span></p>
					<p>Đơn giá : <span id="price_detail"></span></p>


				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

			</div>
		</div>
	</div>
</div>
<?php include_once('layout/footer.php'); ?>

<script type="text/javascript" src="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
		$('#myTable').DataTable();
		$('.btn-detailnv').click(function(){
			//Bật modal
			$('#modal_detailnv').modal('show');
			//Lấy id cần gửi lên server xử lý
			$product_code=$(this).attr("data-id");
			$.ajax({
				type: "GET",
				url: "product_info.php?product_code="+$product_code,
				dataType:"json",
				data:{

				},
				success: function(response)
				{

					$("#id_detail").html(response.product_code);
					$("#name_detail").html(response.product_name);
					$("#quantity_detail").html(response.product_quantity);
					$("#price_detail").html(response.product_price);
				

				},
				error: function (xhr, ajaxOptions, thrownError) {

				}
			});
		});
		
	} );

</script>



