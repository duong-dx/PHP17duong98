<?php 
include_once('layout/header.php');

?> 


<div style="width: 60%;margin: auto;">
	<form action="?mod=product_type&act=update" method="POST" role="form" enctype="multipart/form-data">
		<h3 align="center">Cập nhât thông tin thương hiệu</h3>
		<label for="">Mã sản phẩm : <?php echo $code; ?></label>
		<div class="form-group">
			<label for="">Mã sản phẩm </label>
			<input type="text" class="form-control" name="code" value="<?php echo $code; ?>" placeholder="Mã sản phẩm" readonly>
		</div>
		<div class="form-group">
			<label for="">Tên mới thương hiệu</label>
			<input type="text" class="form-control" name="name" value="<?php echo $product['product_type_name']; ?>" placeholder="Tên mới sản phẩm">
		</div>
		<div class="form-group">
			<label for="">Ảnh mới thương hiệu</label>
			<input  type="file" class="form-control" name="image" onchange="readURL(this)" value="<?php echo $product['product_type_image']; ?>" placeholder="Số lượng mới">
			<img class="img-fluid" id="blah" src="public/images/category/<?php echo $product['product_type_image']; ?>">
		</div>





	<button type="submit" name="submit" value="submit" class="btn btn-primary">Cập nhập</button>
</form>
</div>

<?php 
include_once('layout/footer.php');
?>
<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

