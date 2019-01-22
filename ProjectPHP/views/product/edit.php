<?php 
include_once('views/layout/header.php');

?> 


<div style="width: 95%;margin: 5% auto 5%;">
	<form action="?mod=product&act=update" method="POST" role="form" enctype="multipart/form-data">
		<h3 style="margin:5% auto 5%;" align="center">Cập nhât thông tin sản phẩm</h3>
		<div class="row">
			<div class="col-lg-4">
				<div class="form-group">
					<label for="">Ảnh sản phẩm</label>
					<img style=" border: 1px grey solid;" class="img-fluid" id="blah" src="public/images/product/<?php echo $product['product_image']; ?>">
				</div>
				<div class="form-group">
					<label for="">Chọn file ảnh mới</label>
					<input  type="file"  onchange="readURL(this)" name="product_image" value="<?php echo $product['product_image']; ?>" placeholder="Số lượng mới">
				</div>
				
			</div>
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-8 form-group">
						<label for="">Mã sản phẩm </label>
						<input type="text" class="form-control" name="product_code" value="<?php echo $code; ?>" placeholder="Mã sản phẩm" readonly>
					</div>
					<div class="col-lg-8 form-group">
						<label for="">Tên mới sản phẩm</label>
						<input type="text" class="form-control" name="product_name" value="<?php echo $product['product_name']; ?>" placeholder="Tên mới sản phẩm">
					</div>
					<div class="col-lg-8 form-group">
						<label for="">Số lượng mới</label>
						<input type="number" class="form-control" name="product_quantity" value="<?php echo $product['product_quantity']; ?>" placeholder="Số lượng mới">
					</div>
					<div class="col-lg-8 form-group">
						<label for="">Đơn giá nhập</label>
						<input type="number" class="form-control" name="product_price_enter" value="<?php echo $product['product_price_enter']; ?>" placeholder="Số lượng mới">
					</div>
					<div class="col-lg-8 form-group">
						<label for="">Đơn giá bán</label>
						<input type="number" class="form-control" name="product_price" value="<?php echo $product['product_price']; ?>" placeholder="Số lượng mới">
					</div>

					<div class="col-lg-8 form-group">
						<select name='category_code'>
							<?php foreach ($data as $row) {?>
								<option <?php if($row['category_code']==$product['category_code']){
									echo "selected";
								} ?> value="<?php echo $row['category_code'] ?>"  >
								<?php echo $row['category_name'] ?>

							</option>



						<?php } ?>


					</select>
				</div>
			</div>




			<button type="submit" name="submit" value="submit" class="btn btn-primary">Cập nhập</button>
		</div>
	</div>
</form>
</div>

<?php 
include_once('views/layout/footer.php');
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

