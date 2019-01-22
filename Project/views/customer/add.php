<?php 
include_once('layout/header.php'); ?>
<?php if(isset($_COOKIE['themkhktc'])){
	?>
	<script type="text/javascript">
		toastr["error"]("Thêm mới không thành công !", "Thông báo :");
	</script>
	<?php
}
?> 
<div style="width: 60%;margin: auto;">
	<form action="?mod=customer&act=store" method="POST" role="form">
		<h3 align="center">Thêm mới khách hàng</h3>
		<div class="form-group">
			<label for="">Mã khách hàng</label>
			<input type="text" class="form-control" name="customer_new_code" placeholder="Tên khách hàng">
		</div>
		<div class="form-group">
			<label for="">Tên nhân viên</label>
			<input type="text" class="form-control" name="customer_new_name" placeholder="Tên khách hàng">
		</div>
		<div class="form-group">
			<label for="">Địa chỉ</label>
			<input type="text" class="form-control" name="customer_new_address" placeholder="Địa chỉ">
		</div>
		<div class="form-group">
			<label for="">Ngày sinh</label>
			<input type="date" class="form-control" name="customer_new_birthday" placeholder="Ngày sinh">
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="email" class="form-control" name="customer_new_email" placeholder="Địa chỉ email">
		</div>
		<div class="form-group">
			<label for="">Mật khẩu</label>
			<input type="password" class="form-control" name="customer_new_password" placeholder="Mật khẩu">
		</div>
		<div class="form-group">
			<label for="">Số điện thoại khách hàng</label>
			<input type="number" class="form-control" name="customer_new_mobile" placeholder="Số điện thoại">
		</div>
		
		

		

		<button type="submit" name="themkh" class="btn btn-primary">Thêm mới</button>
	</form>
</div>
<?php 
include_once('layout/footer.php'); ?>

