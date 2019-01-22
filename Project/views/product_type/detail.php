<?php 
include_once('layout/header.php'); ?>
	<p>Mã thương hiệu : <?php echo $product_type['product_type_code']; ?></p>
	<p>Tên thương hiệu : <?php echo $product_type['product_type_name']; ?></p>
	<div class="jumbotron jumbotron-fluid"><img class="img-fluid" src="public/images/category/<?php echo $product_type['product_type_image']; ?>">
		</div>
		
<?php 
include_once('layout/footer.php'); ?>
	
