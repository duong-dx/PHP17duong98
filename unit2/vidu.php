<?php 
$info1 = array();
  $info1['name']='Đinh Xuân Dương';
  $info1['address']='Hà Nội';
 	
 	foreach ($info1 as $key => $value) {
 		echo "<br> Key: " .$key;
 		echo "<br> Value: " .$value;
 		echo "<br><br>";
 	}
 	foreach ($info1 as $val) {
 		echo"<br>" .$val;
 		echo "<br>";
 	}
 ?>