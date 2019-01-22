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
		toastr["success"]("Xóa sản phẩm thành công!", "Thông báo :");
	</script>
	<?php

}
if(isset($_COOKIE['themnvtc'])){ 
	?>
	<script type="text/javascript">
		toastr["success"]("Thêm mới sản phẩm thành công !", "Thông báo :");
	</script>
	<?php

}
if(isset($_COOKIE['editnvtc'])){ 
	?>
	<script type="text/javascript">
		toastr["success"]("Chỉnh sửa thông tin sản phẩm thành công !", "Thông báo :");
	</script>
	<?php

}
?>
<div class="container">
	<h2 align="center">DANH SÁCH SẢN PHẨM</h2>
	<a href="?mod=product&act=add" class="btn btn-primary">Thêm mới sản phẩm</a>
	<table id="myTable" class="table">
		<thead>
			<tr>
				<th>Mã Sản phẩm</th>
				<th>Tên sản phẩm</th>
				<th>Loại sản phẩm</th>
				<th>Số lượng</th>
				<th>Đơn giá</th>
				<th>Ảnh sản phẩm</th>
				<th>Lựa chọn</th>
			</tr>
		</thead>
		<tbody>
			<?php 

			foreach ($data as $row) {

				?>

				<tr>
					<td><?php  echo $row['product_code']; ?></td>
					<td><?php  echo $row['product_name']; ?></td>
					<td><?php  echo $row['category_name']; ?></td>
					<td><?php  echo $row['product_quantity']; ?></td>
					<td><?php  echo number_format($row['product_price']) ; ?></td>
					<td><img style="width: 100px;height: 150px; border: 1px grey solid;" src="public/images/product/<?php echo $row['product_image'] ?>"></td>
					<td>
						<a data-id="<?= $row['product_code']?>" href="javascript:;" class="btn btn-success btn-detailnv" >Detail
						</a>
						<a href="?mod=product&act=edit&product_code=<?= $row['product_code']?>" class="btn btn-warning">Update</a>  
						<a href="?mod=product&act=delete&product_code=<?php echo $row['product_code']?>" class="btn btn-danger delete">Delete</a>

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
<?php include_once('views/layout/footer.php'); ?>
 <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript">
	$(document).ready( function () {
		
		$('.btn-detailnv').click(function(){
			//Bật modal
			$('#modal_detailnv').modal('show');
			//Lấy id cần gửi lên server xử lý
			$product_code=$(this).attr("data-id");
			debugger;
			
			$.ajax({
				type: "GET",
				url: "index.php?mod=product&act=detail&product_code="+$product_code,
				dataType:"json",
				success: function(response)
				{
					console.log(response);
					$("#id_detail").html(response.product_code);
					$("#name_detail").html(response.product_name);
					$("#quantity_detail").html(response.product_quantity);
					$("#price_detail").html(response.product_price);
				

				},
				error: function (xhr, ajaxOptions, thrownError) {

				}
			});
		});
		$('#myTable').DataTable();
		
	} );

</script>



