<?php 
function check($number){
	// if ($number%2==0) {
 // 	return true;

 // }
 // else{
 // 	return false;

 // } 
	return($number%2==0)?true:false;

}
function check1($number){
	// if ($number%2==0) {
 // 	return true;

 // }
 // else{
 // 	return false;

 // } 
	return($number%2==0)?"chẵn":"lẻ";

}


echo "10 là số " .((check(10)) ?"Chắn ":"Lẻ");
echo "<br>11 là số " .check1(11);

$so1 =12;
$so2 =11;
echo "<br>" .tinhtong($so1,$so2);
echo "<br>" .tinhtong($so1,$so2,10);
function tinhtong($a, $b, $c=false){
	$tong= $a+$b;
	if($c!=false){
		$tong=$tong+$c;
	}
	return $tong;
}
?>