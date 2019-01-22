<?php 
include_once('layout/header.php'); ?>
<!--  -->
	<?php if(isset($_COOKIE['themnvktc'])){
			?>
			<script type="text/javascript">
				toastr["error"]("Thêm mới không thành công !", "Thông báo :");
			</script>
			<?php
		}
		?> 
	<div style="width: 60%;margin: auto;">
		<form action="?mod=product_type&act=store" method="POST" role="form" enctype="multipart/form-data">
		<h3 align="center">Thêm thương hiệu</h3>
		<div class="form-group">
			<label for="">Mã thương hiệu</label>
			<input type="text" class="form-control" name="code" placeholder="Mã thương hiệu" >
		</div>
		<div class="form-group">
			<label for="">Tên thương hiệu</label>
			<input type="text" class="form-control" name="name" placeholder="Tên thương hiệu">
		</div>
		<div class="form-group">
			<label for="">Logo thương hiệu</label>
			<input  type="file" class="form-control" onchange="readURL(this)" name="image" placeholder="Logo thương hiệu">
		</div>
		<div class="form-group">
			<label for="">Ảnh Logo thương hiệu</label>
			<img class="img-fluid" id="blah" src="public/images/category/default.jpg">
		</div>

		<button type="submit" name="submit" class="btn btn-primary" value="submit">Thêm mới</button>
	</form>
	</div>
	
<?php 
include_once('layout/footer.php'); ?>
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



