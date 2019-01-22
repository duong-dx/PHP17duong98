 	<?php
	include_once('layout/header.php');  ?>
	<div style="width: 60%;margin: auto;">
		<form action="?mod=customer&act=update" method="POST" role="form">
			<h3 align="center">Cập nhât thông tin nhân viên</h3>
			<label for="">Mã nhân viên : <?php echo $code; ?></label>
			<div class="form-group">
				<label for="">Mã nhân viên </label>
				<input type="text" class="form-control" name="customer_update_code" value="<?php echo $code;; ?>" placeholder="Tên khách hàng" readonly>
			</div>
			<div class="form-group">
				<label for="">Tên nhân viên mới</label>
				<input type="text" class="form-control" name="customer_update_name" value="<?php echo $customer['customer_name']; ?>" placeholder="Tên khách hàng">
			</div>
			<div class="form-group">
				<label for="">Ngày sinh nhân viên mới</label>
				<input type="date" class="form-control" name="customer_update_birthday" value="<?php echo $customer['customer_birthday']; ?>" placeholder="Ngày sinh">
			</div>
			<div class="form-group">
				<label for="">Địa chỉ mới</label>
				<input type="text" class="form-control" name="customer_update_address" value="<?php echo $customer['customer_address']; ?>" placeholder="Địa chỉ">
			</div>
			<div class="form-group">
				<label for="">Email mới</label>
				<input type="email" class="form-control" name="customer_update_email" value="<?php echo $customer['customer_email']; ?>" placeholder="Địa chỉ email">
			</div>
			<div class="form-group">
				<label for="">Password mới</label>
				<input type="password" class="form-control" name="customer_update_password" value="<?php echo $customer['customer_pw']; ?>" placeholder="Mật khẩu khách hàng">
			</div>
			<div class="form-group">
				<label for="">Số điên thoại mới</label>
				<input type="number" class="form-control" name="customer_update_mobile" value="<?php echo $customer['customer_mobile']; ?>" placeholder="Mật khẩu khách hàng">
			</div>




			<button type="submit" name="updatenv" class="btn btn-primary">Cập nhập</button>
		</form>
	</div>

<?php include_once('layout/footer.php'); ?>