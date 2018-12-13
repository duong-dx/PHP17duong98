<?php 
	$n=9;
	for($i=0; $i <$n; $i++) { 
		echo "Anh yêu em " .$i ."<br><hr>";
	}
 ?>
 
 <?php 
 $arr = array('Dương' ,'Đinh Xuân Dương ',10 );
 	var_dump($arr);
 	$arr[]=20.0;//thêm phâng tử vào mảng;
 	//in mảng thoe định dạng
 	echo "<pre>";
 		print_r($arr);
 	echo "</pre>";

  ?>
  <?php  
  echo "Thoong tin sinh viên";
   $info = array();
  $info[]='Đinh Xuân Dương';
  $info[]='Hà Nội';
  echo "<br> Họ tên" .$info[0];
  echo "<br> Quê Quán" .$info[1];
//mảng không tuần tự
  $info1 = array();
  $info1['name']='Đinh Xuân Dương';
  $info1['address']='Hà Nội';
 	echo "<br> Họ tên" .$info1['name'];
 	echo "<br> Quê Quán" .$info1['address'];

 	$point= array();

 	$point['Toán']= array(10,9);
 	$point['Lý']=8;
 	$point['Hóa']=9;

 	$info1['point']=$point;
 	echo "<pre>";
 		print_r($info1);
 	echo "</pre>";
 	echo "<br> Điểm toán giữa kì :" . $info1['point']['Toán'][0];
 	echo "<br> Điểm lý :" . $info1['point']['Lý'];
 	echo "<br> Điểm hóa :" . $info1['point']['Hóa'];
 	echo"<br><br>";

 	$row1=array(1,2,3,4);
 	$row2=array(5,6,7,8);
 	$data=array($row1,$row2);
 	echo "<pre>";
 		print_r($data);
 	echo "</pre>";
 	for ($i=0; $i <count($data) ; $i++) { 
 		for ($j=0; $j <count($data[$i]); $j++) { 
 			echo $data[$i][$j] .'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp';
 		}
 		echo"<br><br>";
 	}


  ?>
