<?php 
	require_once "../config/ajax.php";
	$nhap = new Ajax(); 
	$text = $_GET['text']; 
	$data = $nhap->search_thuoc_dongia($text);
	echo"<input id='text-dongia1' type='text' class='form-control' value ='$data[DonGia]'>";	
?>