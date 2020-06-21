<?php 
 	if($_GET['SoLuong'] !== ''){
 		$SoLuong = $_GET['SoLuong'];
		$IdThuoc = $_GET['IdThuoc'];  

 		require_once ("../config/thuoc.php");
 		$thuoc = new KhoThuoc();
 		$result = $thuoc->get_row_thongtinthuoc($IdThuoc);
		if($SoLuong>$result['SoLuong'] OR $result['SoLuong']==0 )
		{
			echo "<input name='LoiSoLuong' value='Lỗi Số Lượng'/>";
		}
 	}
?>