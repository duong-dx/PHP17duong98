<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Xuân Dương</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body >
  <h1 style="text-align: center;">Thêm Thông Tin Khách Hàng</h1>

  <form action="add_process.php" method="POST" role="form"  >
    <div class="form-row">
      <div class="col-md-7 mb-6">
        <label for="validationServer01">Mã sinh viên</label>
        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Mã sinh viên" name="maSV" value="Mã sinh viên" required>
        
      </div>
      <div class="col-md-7 mb-6">
        <label for="validationServer02">Tên sinh viên</label>
        <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Tên sinh viên" value="Tên sinh viên" name="nameSV" required>
        
      </div>
      <div class="col-md-7 mb-6">
        <label for="validationServer02">Trường</label>
        <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Trường" value="Trường" name="school" required>
        
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-7 mb-6">
        <label for="validationServer03">Địa chỉ</label>
        <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Địa chỉ" value="Địa chỉ" name="city" required>
        
      </div>
      
      
    </div>
    <br>
    <hr>
    <button class="btn btn-primary col-md-7 mb-6 active" type="submit">Lưu thông tin</button>
  </form>
</body>
</html>