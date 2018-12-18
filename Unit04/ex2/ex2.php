<?php 
if(isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['user'])&&isset($_POST['city'])&&isset($_POST['state'])&&isset($_POST['zip'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$user=$_POST['user'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];
	?>
	<h1 style="margin: auto">Thông Tin Sinh Viên</h1>
	<?php  

	echo "First Name :" .$firstname;
	echo "<br>Last Name :" .$lastname;
	echo "<br>User Name :" .$user;
	echo "<br>City :" .$city;
	echo "<br>State :" .$state;
	echo "<br>Zip :" .$zip;
}
else{
	echo "Không hợp lệ";
}
?>
