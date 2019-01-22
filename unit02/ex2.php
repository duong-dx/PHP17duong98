<?php 
			$arr=array(1,2,3,4,5,6);
			echo "Mảng đầu vào : ";
			for ($i=0; $i <count($arr); $i++) { 
				echo $arr[$i] ."&nbsp";
			}


			echo "<br>Mảng in ngược lại : ";
			for ($i=count($arr)-1; $i>=0; $i--) { 
				echo $arr[$i] ."&nbsp";
			}
			


 ?>