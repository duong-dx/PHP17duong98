<?php 
include_once('views/layout/header.php'); ?>
<div id="decss">
<div class="container portfolio">
	<div class="row">
		<div class="col-md-12">
			<div class="heading">				
				<img src="https://image.ibb.co/cbCMvA/logo.png" />
			</div>
		</div>	
	</div>
	<div class="bio-info">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<div class="bio-image">
							<img style="width: 300px;height: 300px;" src="public/images/customer/<?php echo $customer['customer_image']; ?>" alt="image" />
						</div>			
					</div>
				</div>	
			</div>
			<div class="col-md-6">
				<div  class="bio-content">
					<h3 style="margin-bottom: 8%;"><?php echo $customer['customer_name']; ?></h3>
					<h4>ID : <?php echo $customer['customer_code']; ?></h4>
					<p style="font-size: 20px !important;">Email : <?php echo $customer['customer_email']; ?></p>
					<p style="font-size: 20px !important;">Address : <?php echo $customer['customer_address']; ?></p>
					<p style="font-size: 20px !important;">Birthday : <?php echo $customer['customer_birthday']; ?></p>
					<p style="font-size: 20px !important;">Mobile : <?php echo $customer['customer_mobile']; ?></p>
				</div>
			</div>
		</div>	
	</div>
</div>

</div>
<?php 
include_once('views/layout/footer.php'); ?>