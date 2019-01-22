<?php 
	$n=3;
	$giaiThua=1;
	$s=0;
	for ($i=1; $i <=$n ; $i++) { 
		$giaiThua=1;
		for ($j=$i; $j>=1 ; $j--) { 
			$giaiThua=$giaiThua*$j;

		}
		$s+=($i/$giaiThua);
	}
	echo "Tổng của S= 1/1! +2/2! +3/3!+...+n/n! = "  .$s;
 ?>