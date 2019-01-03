<?php 
	include_once('db_connect.php');
	$product_idd = $_GET['product_id'];
	$sql = "SELECT * FROM product WHERE product_id = '".$product_idd."'";
	$result= $conn->query($sql);
	$row = $result->fetch_assoc();
 ?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 align="center">Thông tin sản phẩm</h2>
        
        <p>Mã sản phẩm :<?php echo  $row['product_id']; ?></p>
        <p>Tên sản phẩm :<?php echo  $row['product_name']; ?></p>
        <p>Số lượng :<?php echo  $row['product_quatity']; ?></p>
        <p>Đơn giá :<?php echo  $row['product_price']; ?></p>
        
    </div>
</body>
</html>