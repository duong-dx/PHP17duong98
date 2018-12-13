<?php 
	$a=2;
	$b=-3;
	$c=4;
	echo "Giải phương trình aX<sup>2</sup> + bX + c=0 ";
	$delTa = ($b*2)-(4*$a*$c);

	if ($delTa<0) {
		echo "Phương trình vô nghiệm";
	}
	else if ($delTa==0) {
		echo "Phuong trình có 2 nghiệm kép X<sub>1</sub> X<sub>2</sub> = " .((-$b)/(2*$a));
	}
	else if ($delTa>0) {
		echo "Phuong trình có 2 nghiệm phân biệt X<sub>1</sub> = " .(-b+sqrt($delTa))/(2*$a);
		echo " X<sub>2</sub> = " .(-b-sqrt($delTa))/(2*$a);
	}
	 ?>