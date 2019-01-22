<?php 
require_once('views/layout_user/header_user.php');
?>
<div style="margin-top: 5%;" class="container">    
		<div class="row">
			<div class="col-md-8 mx-auto">				
				<div class="panel panel-default  panel--styled">
					<div class="panel-body">
						<div class="col-md-12 panelTop">	
							<div class="col-md-4">	
								<img class="img-responsive" src="public/images/product/<?php echo $product_detail['product_image']; ?>" alt="">
							</div>
							<div class="col-md-8">	
								<h2><?php echo $product_detail['product_name']; ?></h2>
								<p><?php echo $category_name['category_name']; ?></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
						
						<div class="col-md-12 panelBottom">
							<div class="col-md-4 text-center">
								<a href="?mod=sale_online&act=add2cart_online&product_code=<?php echo $product_detail['product_code']; ?>" class="btn btn-lg btn-add-to-cart add2cart"><span class="glyphicon glyphicon-shopping-cart"></span>   Add to Cart</a>						
							</div>
							<div class="col-md-4 text-left">
								<h5>Price : <span class="itemPrice"><?php echo number_format($product_detail['product_price']); ?></span></h5>
							</div>
							<div class="col-md-4">
								<div class="stars">
								 <div id="stars" class="starrr"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
<?php 
require_once('views/layout_user/footer_user.php');
?>
<script type="text/javascript">
      $(document).ready(function(){


        $('.add2cart').click(function(e){
          e.preventDefault();
          var url = $(this).attr('href');
          console.log(url);
          swal({
            title: "Bạn có thêm vào giỏ hàng không ?",
            text: "Thêm vào giỏ hàng!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              window.location.href=url;
              swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
              });
            } else {
              swal("Bạn đã hủy chọn thêm vào giỏ hàng!");
            }
          })
        });
      });
      
    </script>