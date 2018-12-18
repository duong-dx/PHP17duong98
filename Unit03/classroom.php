<?php 
	$a="Đinh Xuân Dương - KMA";
		var_dump(in_array('Dương', $a)); // Kết quả là true
   		 var_dump(in_array('Zent', $a));// Kết quả là false
    	
		$c=explode(" ", $a); //cắt chuỗi theo " " (khoagr trắng)

		$info = array(
        'ID'   =>  '20092671',
        'NAME'   =>  'Dinh Hoai Nam',
        'PHONE'   =>  '012346567899',
        'EMAIL'   =>  'namdinhhoai@gmail.com',
   		 );// Kiểm tra key có trong mảng hay không
   		   if(array_key_exists('ID',$info)){
        	  echo "ID: " . $info['ID'];
    		}else{
   	    		  echo "Không tồn tại key";
  			}

  		echo "<br>" .array_search("Dương", $a); //kiểm tra xem phần tử trong mảng không . có sẽ trả về vị trí của phần tử đó

  		//đếm số lượng phần tử trong mảng 
  		$arr = array(1,3,1,5,"zent",1,5,"zent");
  		$arr_result = array_count_values($arr);

 		echo "<pre>";
		    print_r($arr_result);
 		echo "</pre>";

 		array_push($a,"new 1","new 2","abc"); //thêm phần tử vào CUỐI mảng , ĐẶC ĐIỂM LÀ THÊM ĐC NHIỀU PHẦN TỬ


 		$del = array_pop($a);//Xóa phần tử ở CUỐI mảng 
 		echo "Phần tử bị xóa là : " . $del;//trả về phần tử vừa xóa

 		array_unshift($arr,"new 1","new 2","abc");//thêm phần tử vào ĐẦU mảng , ĐẶC ĐIỂM LÀ THÊM ĐC NHIỀU PHẦN TỬ

 		$array_shift = array_shift($arr); // Xóa phần tử ĐẦU mảng
  		echo "Phần tử bị xóa là : " . $array_shift; //trả về phần tử vừa xóa

  		unset($arr[4]);//XÓA VỊ TRÍ BẤT KÌ




		echo "<pre>";
	 		print_r($c);
	 	echo "</pre>";
	 	echo implode("&",$c);//nối chuỗi theo kí tưu &;
	 	echo "<br>strlen :" .strlen($a);//kiểm tra độ dài chuỗi
	 	echo "<br> str_word_count :" .str_word_count($a); //đếm số từ trong chuỗi
	 	echo "<br> str_repeat(input, multiplier) :".str_repeat("<br> Zent",10);//lặp in chữ Zent 10 lần;
	 	echo "<br> str_replace(search, replace, subject) :" .str_replace("KMA","KTMM",$a);//thay chuỗi KMA thành KTMM
	 	echo "<br>md5" .md5("123456");
	 	echo "<br>md5" .sha1("123456");
	 	echo "<br>" .substr($a,2,8);//tar về chuỗi từ 2 đến 8
	 	echo "<br>" .strpos($a,"i");//tìm vị trí của chuỗi
	 	strtoupper() //chuyển đổi một chuỗi thành chữ in Hoa
	 	strtolower () //chuyển đổi một chuỗi thành chữ thường
		lcfirst () //chuyển đổi ký tự đầu tiên của chuỗi thành chữ thường
		ucfirst () //chuyển đổi ký tự đầu tiên của chuỗi thành chữ hoa
		ucwords () //chuyển đổi ký tự đầu tiên của mỗi từ trong chuỗi thành chữ hoa

 ?>