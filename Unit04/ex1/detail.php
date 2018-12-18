<?php 
	session_start();
	?>
	<h1>Thông tin sinh viên với mã sinh viên : <?php $_SESSION['student'][$_GET['id']]['maSV'] ?></h1>
	<?php  
		
 	echo "Mã sinh viên :" .$_SESSION['student'][$_GET['id']]['maSV'];
 	echo "<br>Tên sinh viên :" .$_SESSION['student'][$_GET['id']]['nameSV'];
 	echo "<br>Trường :" .$_SESSION['student'][$_GET['id']]['school'];
 	echo "<br>Quê quán :" .$_SESSION['student'][$_GET['id']]['city'];

	 
?>