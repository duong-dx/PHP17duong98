<?php 
include_once('layout/header.php');

?> 


<div style="width: 60%;margin: auto;">
	<form action="?mod=product&act=update" method="POST" role="form" enctype="multipart/form-data">
		<h3 align="center">Cập nhât thông tin sản phẩm</h3>
		<label for="">Mã sản phẩm : <?php echo $code; ?></label>
		<div class="form-group">
			<label for="">Mã sản phẩm </label>
			<input type="text" class="form-control" name="product_code" value="<?php echo $code; ?>" placeholder="Mã sản phẩm" readonly>
		</div>
		<div class="form-group">
			<label for="">Tên mới sản phẩm</label>
			<input type="text" class="form-control" name="product_name" value="<?php echo $product['product_name']; ?>" placeholder="Tên mới sản phẩm">
		</div>
		<div class="form-group">
			<label for="">Số lượng mới</label>
			<input type="number" class="form-control" name="product_quantity" value="<?php echo $product['product_quantity']; ?>" placeholder="Số lượng mới">
		</div>
		<div class="form-group">
			<label for="">Đơn giá nhập</label>
			<input type="number" class="form-control" name="product_price_enter" value="<?php echo $product['product_price_enter']; ?>" placeholder="Số lượng mới">
		</div>
		<div class="form-group">
			<label for="">Đơn giá bán</label>
			<input type="number" class="form-control" name="product_price" value="<?php echo $product['product_price']; ?>" placeholder="Số lượng mới">
		</div>
		<div class="form-group">
			<label for="">Chọn file ảnh mới</label>
			<input  type="file" class="form-control"  onchange="readURL(this)" name="product_image" value="<?php echo $product['product_image']; ?>" placeholder="Số lượng mới">
		</div>
		<div class="form-group">
			<label for="">Ảnh sản phẩm</label>
			<img class="img-fluid" id="blah" src="public/images/product/<?php echo $product['product_image']; ?>">
		</div>
		<div class="form-group">
			<select name='category_code'>
				<?php foreach ($data as $row) {?>
					<option <?php if($row['category_code']==$product['product_type']){
						echo "selected";
					} ?> value="<?php echo $row['category_code'] ?>"  >
					<?php echo $row['category_name'] ?>
					
				</option>

				
				
			<?php } ?>


		</select>
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

