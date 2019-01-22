<?php 
	echo "<h1>Bảng Cửu Chương</h1><br>";
	for ($i=1; $i <=10; $i++) { 
		for ($j=2; $j <=9 ; $j++) { 
			echo $j ."x" .$i ."=" .$i*$j ."&nbsp&nbsp&nbsp";

		}
		echo "<br>";
	}
 ?>