<?php 
	$arr=array(99,2,9,3,8,1);
	$min=0;
	$viTri=0;
	$tg=0;


	echo "Mảng đầu vào là : ";
	for ($i=0; $i <count($arr) ; $i++) { 
		echo $arr[$i] ."&nbsp";
	}

	for ($i=0; $i <count($arr) ; $i++) { 
		$min=$arr[$i];
		$viTri=$i;
		for ($j=$i; $j <count($arr) ; $j++) { 
			if ($arr[$j]<$min) {
				$min=$arr[$j];
				$viTri=$j;
			}
		}
		$tg=$arr[$i];
		$arr[$i]=$arr[$viTri];
		$arr[$viTri]=$tg;
		

	}
	echo "<br><br>Mảng sau sắp xếp là : ";
	for ($i=0; $i <count($arr) ; $i++) { 
		echo $arr[$i] ."&nbsp";
	}
 ?>