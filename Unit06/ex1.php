<?php 
	class SanPham{
		var $maSP;
		var $tenSP;
		var $soLuong;
		var $donGia;
		var $hangSX;
		function inTT(){
			echo "<br> Mã sản phẩm: " .$this->maSP;
			echo "<br> Tên sản phẩm: " .$this->tenSP;
			echo "<br> Số lượng: " .$this->soLuong;
			echo "<br> Đơn giá: " .number_format($this->donGia) ."VNĐ";
			echo "<br> Hãng sản xuất: " .$this->hangSX;
		}
	}


	$s600 = new SanPham();
	$s600->maSP="S600";
	$s600->soLuong="1";
	$s600->tenSP="Maybach";
	$s600->donGia="16000000000";
	$s600->hangSX="Mercedes Benz";
	echo "<br><h1>Thông tin xe " .$s600->tenSP ." : </h1>" ;
	$s600->inTT();


	$bugati = new SanPham();
	$bugati->maSP="Veyron ";
	$bugati->soLuong="1";
	$bugati->tenSP="Bugatti Veyron";
	$bugati->donGia="64000000000";
	$bugati->hangSX="Bugatti";
	echo "<br><h1>Thông tin xe " .$bugati->tenSP ." : </h1>" ;
	$bugati->inTT();

	$rR = new SanPham();
	$rR->maSP="Sweptail";
	$rR->soLuong="1";
	$rR->tenSP="Rolls-Royce Sweptail";
	$rR->donGia="296000000000";
	$rR->hangSX="Rolls-Royce";
	echo "<br><h1>Thông tin xe " .$rR->tenSP ." : </h1>" ;
	$rR->inTT();
 ?>