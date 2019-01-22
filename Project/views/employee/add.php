
	<?php
	include_once('layout/header.php'); 
	 if(isset($_COOKIE['themnvktc'])){
			?>
			<script type="text/javascript">
				toastr["error"]("Thêm mới không thành công !", "Thông báo :");
			</script>
			<?php
		}
		?> 
	<div style="width: 60%;margin: auto;">
		<form action="?mod=employee&act=store" method="POST" role="form">
		<h3 align="center">Thêm mới nhân viên</h3>
		<div class="form-group">
			<label for="">Mã nhân viên</label>
			<input type="text" class="form-control" name="employee_new_code" placeholder="Mã nhân viên" >
		</div>
		<div class="form-group">
			<label for="">Tên nhân viên</label>
			<input type="text" class="form-control" name="employee_new_name" placeholder="Tên nhân viên">
		</div>
		<div class="form-group">
			<label for="">Ngày sinh nhân viên</label>
			<input type="date" class="form-control" name="employee_new_birthday" placeholder="Ngày sinh">
		</div>
		<div class="form-group">
			<label for="">Địa chỉ</label>
			<input type="text" class="form-control" name="employee_new_address" placeholder="Địa chỉ">
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="email" class="form-control" name="employee_new_email" placeholder="Địa chỉ email">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="password" class="form-control" name="employee_new_password" placeholder="Mật khẩu">
		</div>
		<div class="form-group">
			<label for="">Số điện thoại</label>
			<input type="number" class="form-control" name="employee_new_mobile" placeholder="Số điện thoại">
		</div>

		
	
		
	
		<button type="submit" name="themnv" class="btn btn-primary">Thêm mới</button>
	</form>
	</div>
	
<?php include_once('layout/footer.php'); ?>

