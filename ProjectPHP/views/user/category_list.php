<?php require_once('views/layout_user/header_user.php'); ?>
<div class="container">
		<h3 style="text-align:center;"><?php echo $category_name['category_name']; ?> </h3>
		<div class="row">
			<div class="col-lg-12 my-3">
				<div class="pull-right">
					<div class="btn-group">
						<button class="btn btn-info" id="list">
							List View
						</button>
						<button class="btn btn-danger" id="grid">
							Grid View
						</button>
					</div>
				</div>
			</div>
		</div> 
		<div id="products" class="row view-group">
			<?php 
			foreach ($category as $row) {
				?>
				<div class="item col-xs-4 col-lg-4">
					<div class="thumbnail card">
						<div  class="img-event">
							<img style="height: 350px;" class="group list-group-image img-fluid" src="public/images/product/<?php  echo $row['product_image']; ?>" alt="" />
						</div>
						<div " class="caption card-body">
							<h4 class="group card-title inner list-group-item-heading">
								<?php  echo $row['product_name']; ?></h4>
								<p class="group inner list-group-item-text">
									Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
								sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<p class="lead">
											<?php  echo number_format($row['product_price']) ; ?></p>
										</div>
										<div class="col-xs-12 col-md-6">
											<a class="btn btn-success" href="?mod=user&act=detail_product&product_code=<?php echo $row['product_code']; ?>">Detail</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php  } ?>	

				</div>
			</div>
<?php require_once('views/layout_user/footer_user.php'); ?>

				<script type="text/javascript">
					$(document).ready(function() {
						$('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
						$('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
					});
				</script>