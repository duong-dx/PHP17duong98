<?php 
	echo"<br>";
	for ($i=8; $i >=0 ; $i--) { 
		for ($j=0; $j <8 ; $j++) { 
			if($j<$i){
				echo "#";
			}
			else{
				echo "&nbsp&nbsp";
			}
		}
		echo "<br>";
	}
 ?>