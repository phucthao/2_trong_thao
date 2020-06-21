<?php 
 	if($_GET['SoLuong'] !== ''){
 		$SoLuong = $_GET['SoLuong'];
		$DonGia = $_GET['DonGia'];
		$IdThuoc = $_GET['IdThuoc'];  

 		require_once ("../config/thuoc.php");
 		$thuoc = new KhoThuoc();
 		$result = $thuoc->get_row_thongtinthuoc($IdThuoc);
 		if($result['SoLuong']==0){
 			echo "<span style='color:#bd0103'>Lỗi hết thuốc: </span>"."Thuốc '".$result['TenThuoc']. "' ở trong kho đã hết sạch  !!";
 		}
 		else
 		{
 			if($SoLuong>$result['SoLuong']){
 				echo "<span style='color:#bd0103'>Lỗi vượt quá số lượng trong kho: </span>"."Thuốc '".$result['TenThuoc']."' chỉ còn ".$result['SoLuong']." ".$result['DonVi']." ở trong kho!";
	 		}else{
	 			$ThanhTien = $SoLuong*$DonGia;
			
				echo number_format($ThanhTien) ;
	 		}
 		}
 		
 		

		
 	}
	

?>