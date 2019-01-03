<?php 
	include_once('db_connect.php');
	$sql = "SELECT * FROM product";
	$result = $conn->query($sql);

	$data = array();
	while ($row = $result->fetch_assoc()) {
		$data[] =$row;

	}
    
		  
	
		  	   
        	 
   
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
        <h2 align="center">DANH SÁCH SẢN PHẨM</h2>
        <a href="add.php" class="btn btn-primary">Thêm mới</a>
        <table class="table">
            <thead>
              <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            	<?php 
            		
            		foreach ($data as $row) {
            			
            	   ?>

              <tr>
                <td><?php  echo $row['product_id']; ?></td>
                <td><?php  echo $row['product_name']; ?></td>
                <td><?php  echo $row['product_quatity']; ?></td>
                <td><?php  echo number_format($row['product_price']) ; ?></td>
                <td>
                    <a href="add.php?product_id=<?= $row['product_id']?>" class="btn btn-success">Detail</a> 
                     <a href="update.php" class="btn btn-warning">Update</a>  
                    <a href="delete.php" class="btn btn-danger">Delete</a>

                </td>
              </tr>
              <?php  } ?>
            </tbody>
          </table>
    </div>
</body>
</html>