<?php 
	
	$max=0;
	$arr= array(4,9,6,8,11,1);
	$max=$arr[0];
	echo "Mảng đầu vào là : ";
	for ($i=0; $i <count($arr); $i++) { 
		
		echo $arr[$i] ."&nbsp";
		
		if($arr[$i]>$max){
			$max=$arr[$i];
		}
	}
	echo "<br><br>Số lớn nhất trong mảng là : ".$max;
 ?>