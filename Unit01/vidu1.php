<?php 
	echo "Hello <br><br>"; 
	echo "Unit1 <br>"; 
	echo "Unit2 <br>"; 
	$Name='Dương';
	echo "Xin chào " . $Name;
	echo '<br> Chao Xìn ' .$Name;
	echo "<br>Xin chào  $Name" ;
	echo '<br> Chao Xìn  $Name <br>';//nháy đơn không nối chuỗi được trong biến
	//die('ok');//sau die không chạy hoặc exit;
	var_dump($Name);

	$a=10;
	$b='10';
	var_dump($a===$b);
	var_dump(9==10)

?>