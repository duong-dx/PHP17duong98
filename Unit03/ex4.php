<?php 
	$name="Đinh Xuân Xuân Dương";

	$str_explode= explode(" ", $name);
	
	echo "Họ và tên : " .$str_explode[0];
	echo "<br>Tên đệm : ";
	for ($i=1; $i <count($str_explode)-1; $i++) { 
		 echo $str_explode[$i];
		 echo "&nbsp";
	}
	echo "<br> Tên : " .$str_explode[count($str_explode)-1];

 ?>