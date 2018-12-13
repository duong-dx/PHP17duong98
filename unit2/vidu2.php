<?php 
	$name=array('Nam','Tuấn','Khánh','Dương');
	var_dump(in_array('Nam1', $name));

	$quyenhan= array('view','add');

	if(in_array("view",$quyenhan)){
		echo "<br>Được phép xem";

	}
	if(in_array("add",$quyenhan)){
		echo "<br>Được phép thêm";

	}

 ?>