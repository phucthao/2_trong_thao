<?php 
	require_once "../config/ajax.php";
	$nhap = new Ajax(); 
	$text = $_GET['text']; 
	if($text!=''){
		$data = $nhap->form_search_sodt($text);
		$i=1;
		foreach ($data as $row) {
			if($row['GioiTinh']==0){
				$GioiTinh = 'Nam';
			}else{
				$GioiTinh = 'Nữ';
			}
			echo"<tr>";
		  		echo"<td>$i</td>";
		  		echo"<td>$row[Id]</td>";
		  		echo"<td>$row[HoVaTen]</td>";
		  		echo"<td>$row[NgaySinh]</td>";
		  		echo"<td>$GioiTinh</td>";
		  		echo"<td>$row[SoCMND]</td>";
		  		echo"<td>$row[SoDT]</td>";
		  		echo"<td style='padding: 0;'><a href='khambenh.php?id=$row[Id]'><button type='button' class='btn btn-info'>Khám bệnh</button></a></td>";
		  		echo"<td style='padding: 0;'><a href='chitietbenhnhan.php?id=$row[Id]'><button type='button'class='btn btn-warning'>Xem lịch sử</button></a></td>";
		  		echo"<td style='padding: 0;'><a href='suabenhnhan.php?id=$row[Id]'><button type='button' class='btn btn-info'>Sửa</button></a></td>";
			echo"</tr>";
			$i++;
		}
	}
	
?>