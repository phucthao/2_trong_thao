<?php 
	require_once "../config/ajax.php";
	$nhap = new Ajax(); 
	$query = $_GET['text']; 
	$data = $nhap->form_search_thuoc($query);
	$i=1;
	foreach ($data as $row) {
		echo"<tr>";
	  		echo"<td>$i</td>";
	  		echo"<td>$row[Id]</td>";
	  		echo"<td>$row[TenThuoc]</td>";
	  		echo"<td>$row[DonVi]</td>";
	  		if($row['SoLuong']<30){
	  			if($row['SoLuong']==0){
	  				echo"<td>".$row['SoLuong']." <span style='color:#bd0103;'> (đã hết hàng!)</span>"."</td>";
	  			}else{
	  				echo"<td>".$row['SoLuong']." <span style='color:#bd0103;'> (cảnh báo sắp hết hàng!)</span>"."</td>";
	  			}
	  		}
	  		else
	  		{
	  			echo"<td>$row[SoLuong]</td>";
	  		}
	  		
	  		echo"<td>$row[DonGia]</td>";
	  		echo"<td style='padding: 0;'><a href='suathuoc.php?id=$row[Id]'><button type='submit' class='btn btn-info'>Sửa</button></a></td>";
	  		echo"<td style='padding: 0;'><a href='config/xoa.php?id=$row[Id]'><button type='submit'class='btn btn-warning'>Xoá</button></a></td>";
		echo"</tr>";
		$i++;
	}
?>