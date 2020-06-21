<?php 
	require_once "../config/ajax.php";
	$nhap = new Ajax(); 
	$username = $_GET['username']; 
	$data = $nhap->Username($username);
	if($data == 'yes'){
		echo"<div id='alert-sdt' class='alert alert-danger' role='alert'>";
			echo"Tài khoản này đã được đăng ký!, vui lòng kiểm tra lại!";
		echo"</div>";
	}else{
		
	}	
?>