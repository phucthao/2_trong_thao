<?php  
  require_once "../config/ajax.php";
  $nhap = new Ajax(); 
  $query = $_POST['query']; 
  $IdBenhNhan = $_POST['IdBenhNhan'];
  $data = $nhap->form_search_thuoc($query);
  foreach ($data as $row) {
  echo"<tr>";
    echo"<td id='ValueTenThuoc'>$row[TenThuoc]</td>";
    echo"<td>$row[DonVi]</td>";
    echo"<td>"."Số Lượng: ".$row['SoLuong']."</td>";
    echo"<td>"."Đơn Giá: ".$row['DonGia']."</td>";
    echo"<td style='padding: 0;'><button type='button' class='btn btn-info' onclick='nhap($row[Id],$IdBenhNhan)'>Thêm</button></td>";
  echo"</tr>";
  }

?> 
