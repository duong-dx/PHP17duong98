<?php 
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	echo time();
	$int_time=1544529059;
	echo "<br>" .date('d/m/Y H:i:s',time());
	echo "<br>" .date('d/m/Y H:i:s',1544529059);
	echo"<br>" .strtotime(date("11/12/2018 18:50:59"));//chuyển kiểu ngày tháng thành kiểu int
	$dateint = mktime(0, 0, 0, 12, (50 + 11), 2018);
	echo"<br>" .date('d/m/Y', $dateint); 
 ?>