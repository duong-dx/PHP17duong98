<?php require_once('views/layout_user/header_user.php'); ?>
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
if(isset($_COOKIE['themsanpham'])){ 
	?>
	<script type="text/javascript">
		toastr["success"]("Thêm sản phẩm vào giỏ hàng thành công !", "Thông báo :");
	</script>
	<?php

}
if(isset($_COOKIE['huydonhang'])){ 
	?>
	<script type="text/javascript">
		toastr["error"]("Hủy đơn hàng thành công !", "Thông báo :");
	</script>
	<?php

}
?>


<div class="container">
	
	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(public_user/images/mac111.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span style="color: black;" class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							MacBook in 2020
						</span>

						<h2 style="color: black;" class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							New options
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="javascript:;" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(public_user/images/xsmax11.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
							Iphone XS Max
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
							
							Great product
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
							<!-- Button -->
							<a href="javascript:;" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(public_user/images/galaxynote99.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							Galaxy note 9
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
							Super sharp camera
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
							<!-- Button -->
							<a href="javascript:;" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<hr style="margin: 5% auto 5%;border:1px grey solid;">
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Smart Phone
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					<?php 
					foreach ($category['CT01'] as $row) {
						?>
						<div class="item-slick2 p-l-15 p-r-15">
							<!-- Block2 -->
							<div class="block2">
								<div style="height: 300px;" class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="public/images/product/<?php  echo $row['product_image']; ?>" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<a href="?mod=user&act=detail_product&product_code=<?php echo $row['product_code']; ?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Detail
											</a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="javascript:;" class="block2-name dis-block s-text3 p-b-5">
										<?php  echo $row['product_name']; ?>
									</a>

									<span class="block2-price m-text6 p-r-5">
										<?php  echo number_format($row['product_price']) ; ?>
									</span>
								</div>
							</div>
						</div>

					<?php  } ?>	

				</div>

			</div>

			<a style="margin: 5% 45% 3%;" href="?mod=user&act=category&category_code=<?php echo $CT01; ?>" class="btn btn-danger">Learn More</a>
		</div>

	</section>

	<hr style="margin: 5% auto 5%;border:1px grey solid;">
	<div class="container">
		<h3 style="text-align:center;">Máy tính </h3>
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
			foreach ($category['CT02'] as $row) {
				?>
				<div class="item col-xs-4 col-lg-4">
					<div class="thumbnail card">
						<div style="height: 350px;" class="img-event">
							<img class="group list-group-image img-fluid" src="public/images/product/<?php  echo $row['product_image']; ?>" alt="" />
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
											<a class="btn btn-success" href="?mod=user&act=detail_product&product_code=<?php echo $row['product_code']; ?>">
											Detail</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php  } ?>	

				</div>
				<a style="margin: 5% 45% 3%;" href="?mod=user&act=category&category_code=<?php echo $CT02; ?>" class="btn btn-danger">Learn More</a>
			</div>
			<hr style="margin: 5% auto 5%;border:1px grey solid;">
			<div style="margin: 5% auto 5%;" class="container">
				<h2 style="text-align:center;margin: 5% auto 5%;">Smart Watch</h2>
				<div class="row">
					<div class="col-md-12">
						<?php 
						foreach ($category['CT04'] as $row) {
							?>
							<div class="col-sm-6 col-md-4">
								<div class="thumbnail" >
									<h4 class="text-center"><span class="label label-info">Apple Watch</span></h4>
									<img style="height: 300px;" src="public/images/product/<?php  echo $row['product_image']; ?>" class="img-responsive">
									<hr style="border:1px grey solid;">
									<div class="caption">
										<div class="row">
											<div class="col-md-6 col-xs-6">
												<h4><?php  echo $row['product_name']; ?></h4>
											</div>
											<div class="col-md-6 col-xs-6 price">
												<h5>
													<label><?php  echo number_format($row['product_price']); ?></label></h5>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<a href="javascript:;" class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a> 
												</div>
												<div class="col-md-6">
													<a href="?mod=user&act=detail_product&product_code=<?php echo $row['product_code']; ?>" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Detail</a></div>
												</div>

												<p> </p>
											</div>
										</div>
									</div>
								<?php  } ?>	

							</div> 

						</div>
						<a style="margin: 5% 45% 3%;" href="?mod=user&act=category&category_code=<?php echo $CT04; ?>" class="btn btn-danger">Learn More</a>
					</div>
					<hr style="margin: 5% auto 5%;border:1px grey solid;">
					<section class="banner2 bg5 p-t-55 p-b-55">
						<h3 style="text-align:center;">Xế hộp siêu hạng sang</h3>
						<div class="container">

							<div class="row">
								<?php 
								foreach ($category['CT05'] as $row) {
									?>
									<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
										<div class="hov-img-zoom pos-relative">
											<img src="public/images/product/<?php  echo $row['product_image']; ?>" alt="IMG-BANNER">


										</div>
										<div style="margin: 3% auto 3%; text-align: center;">
											<span style="color: black;" class="m-text9 p-t-45 fs-20-sm">
												<?php  echo number_format($row['product_price']) ; ?></p>
											</span>

											<h6 style="color: black;" >
												<?php  echo $row['product_name']; ?></h4>
											</h6>

											<a style="color: black;" href="?mod=user&act=detail_product&product_code=<?php echo $row['product_code']; ?>" class="s-text4 hov2 p-t-20 ">
												Detail
											</a>
										</div>

									</div>
								<?php  } ?>	

							</div>
						</div>
						<a style="margin: 5% 45% 3%;" href="?mod=user&act=category&category_code=<?php echo $CT05; ?>" class="btn btn-danger">Learn More</a>
					</section>

					<section style="margin: 3%;" class="instagram p-t-20">
						<div class="sec-title p-b-52 p-l-15 p-r-15">
							<h3 class="m-text5 t-center">
								Durex
							</h3>
						</div>

						<div class="flex-w">
							<!-- Block4 -->
							<?php 

							foreach ($category['CT03'] as $row) {

								?>
								<div class="block4 wrap-pic-w">
									<img style="height: 300px;" src="public/images/product/<?php  echo $row['product_image']; ?>">

									<a href="?mod=user&act=detail_product&product_code=<?php echo $row['product_code']; ?>" class="block4-overlay sizefull ab-t-l trans-0-4">
										<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
											<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
											<span class="p-t-2">39</span>
										</span>

										<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
											<p class="s-text10 m-b-15 h-size1 of-hidden">
												<p><?php  echo $row['product_name']; ?></p>
												<p><?php  echo number_format($row['product_price']); ?></p>
											</p>

											<p  class="s-text9">
												Click to see product details
											</p>

										</div>

									</a>
								</div>

							<?php  } ?>	
						</div>
						<a style="margin: 5% 45% 3%;" href="?mod=user&act=category&category_code=<?php echo $CT03; ?>" class="btn btn-danger">Learn More</a>	
					</section>





				</div>
				
				<?php require_once('views/layout_user/footer_user.php'); ?>

				<script type="text/javascript">
					$(document).ready(function() {
						$('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
						$('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
					});
				</script>
				