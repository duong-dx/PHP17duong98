<?php 
	$name="ZenttneZ";
	$revert="";
	$chuoiDau="";
	$tu="";
	$nguocTu="";
	
	for ($i=0; $i <(strlen($name)/2) ; $i++) { 
		$chuoiDau= $name[$i];
		$tu= $tu .$chuoiDau;
		
	}
	for ($i=(strlen($name)/2)-1; $i >=0 ; $i--) { 
		$revert= $name[$i];
		$nguocTu =$nguocTu .$revert;
		
	}
	$chuoiMoi=$tu .$nguocTu;
	echo "<h1>".$chuoiMoi."</h1>";
	if ($name===$chuoiMoi) {
		echo "Đây là chuỗi paraldime";
	}
	else{
		echo "Đây không phải";
	}
	
	
 ?>