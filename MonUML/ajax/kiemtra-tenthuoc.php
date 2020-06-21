<?php 
	require_once "../config/ajax.php";
	$nhap = new Ajax(); 
	$tenthuoc = $_GET['tenthuoc']; 
	$data = $nhap->tenthuoc($tenthuoc);
	if($data == 'yes'){
		echo"<div id='alert-tenthuoc' class='alert alert-warning' role='alert'>";
			echo"Tên thuốc này đã có trong cơ sở dữ liệu, vui lòng kiểm tra lại !";
			echo"<a href='khothuoc.php'> tại đây</a>";
		echo"</div>";
	}else{
		
	}	
?>