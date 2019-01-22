<?php 
include_once('views/layout/header.php');

?> 


<div style="width: 60%;margin: auto;">
	<form action="?mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
		<h3 align="center">Cập nhât thông tin loại sản phẩm</h3>
		<label for="">Mã sản phẩm : <?php echo $category['category_code']; ?></label>
		<div class="form-group">
			<label for="">Mã mới loại sản phẩm </label>
			<input type="text" class="form-control" name="category_code" value="<?php echo $category['category_code']; ?>" placeholder="Mã sản phẩm" readonly>
		</div>
		<div class="form-group">
			<label for="">Tên mớiloại sản phẩm</label>
			<input type="text" class="form-control" name="category_name" value="<?php echo  $category['category_name']; ?>" placeholder="Tên mới sản phẩm">
		</div>
		




	<button type="submit"  value="submit" class="btn btn-primary">Cập nhập</button>
</form>
</div>

<?php 
include_once('views/layout/footer.php');
?>

