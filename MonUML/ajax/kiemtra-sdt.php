<?php 
	require_once "../config/ajax.php";
	$nhap = new Ajax(); 
	$sodt = $_GET['sdt']; 
	$data = $nhap->sodt($sodt);
	if($data == 'yes'){
		echo"<div id='alert-sdt' class='alert alert-warning' role='alert'>";
			echo"Số điện thoại này đã được đăng ký!, vui lòng kiểm tra lại trong danh sách bệnh nhân";
			echo"<a href='danhsachbenhnhan.php'> tại đây</a>";
		echo"</div>";
	}else{
		
	}	
?>