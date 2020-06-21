<?php 
	require_once "../config/ajax.php";
	$nhap = new Ajax(); 
	$text = $_GET['text']; 
	$data = $nhap->search_thuoc_donvi($text);
	foreach ($data as $row) {
		echo"<input type='text' class='form-control' value ='$row[DonVi]'>";
	}	
?>