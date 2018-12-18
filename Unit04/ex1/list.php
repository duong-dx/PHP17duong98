<?php session_start(); ?>

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
<body style="text-align: center;">
  <h1>DANH SÁCH NGƯỜI DÙNG</h1>
  <form action="ex2.php" method="POST" role="form">
    
    <a class="btn btn-primary" href="add.php">+ Thêm Khách Hàng</a>

  </form>
  <?php 
      if (isset($_COOKIE['thanhcong'])){
        ?>
        <div class="alert alert-success" role="alert">
        <?php echo $_COOKIE['thanhcong']; ?>
        </div>
        <?php  
      }
      if (isset($_COOKIE['xoathanhcong'])){
        ?>
        <div class="alert alert-success" role="danger ">
        <?php echo $_COOKIE['xoathanhcong']; ?>
        </div>
        <?php  
      }

      ?>
      <table class="table">
        <tbody>
          <?php foreach ($_SESSION['student'] as $key => $value) { ?>


            
          
          <tr>
            <th scope="row"><?php echo $value['maSV'] ?></th>
            <td><?php echo $value['nameSV'] ?></td>
            <td><?php echo $value['school'] ?></td>
            <td>
              
                
              <a href="detail.php?id=<?php echo $value['maSV']; ?>" class="btn btn-primary">Detial</a>
              
              
              <a href="delete.php?id=<?php echo $value['maSV']; ?>"  class="btn btn-secondary">Delete</button>
              
            </td>

          </tr>
          
          <?php } ?>

        </tbody>
      </table>
</body>
</html>