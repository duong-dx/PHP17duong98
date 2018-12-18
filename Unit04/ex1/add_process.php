<?php 
session_start();

if (isset($_POST['maSV'])&&isset($_POST['nameSV'])&&isset($_POST['school'])&&isset($_POST['city'])) {

	$maSV=$_POST['maSV'];
	$nameSV=$_POST['nameSV'];
	$school=$_POST['school'];
	$city=$_POST['city'];

	$student=array();
	$student['maSV']=$maSV;
	$student['nameSV']=$nameSV;
	$student['school']=$school;
	$student['city']=$city;

	$_SESSION['student'][$maSV]=$student;
	


		setcookie('thanhcong','Thêm mới sinh viên thành công ',time()+60);
		
		header('location: list.php');
		
	
}
else{
	echo "Kiểm tra lại trường thông tin";
	header('location: add.php');

}
?>