<?php 
class Nguoi{
	var $ten;
	var $diaChi;
	var $email;
	var $sĐT;
	function nhapTT(){
		echo "<br>Nhập vào thông tin";
	}
	function inTT(){
		echo "<br>In thông tin";
	}
	function __construct(){
		echo "<br> PT khởi tạo construct";
	}

}

class NhanVien extends Nguoi{
var $bangCap;

}
class KhachHang extends Nguoi{
	var $loaiKH;

}
	$nv= new NhanVien();
	$nv->inTT();
	
 ?>