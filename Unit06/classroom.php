<?php 
class Oto
{
	var $ten;
	var $hang_xe;
	var $mau;
	var $so_cho;

	function chay(){
		echo  "Đây là phương thức chạy của lớp Ô tô";
	}
	function inTT(){
		echo "<h1>Thông tin xe oto </h1>";
		echo "<br> Tên xe : " .$this->ten;
		echo "<br> Hãng xe : " .$this->hang_xe;
		echo "<br> Màu xe : " .$this->mau;
		echo "<br> Số chỗ : " .$this->so_cho;

	}
}	


	$bmw= new Oto();
	$bmw->ten="BMW i8";
	$bmw->hang_xe="BMW";
	$bmw->mau="Grey";
	$bmw->so_cho="4";
	$bmw->inTT();
	

?>
