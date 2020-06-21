<?php
require_once "database.php";
/**
 * 
 */
class Nhapdulieu
{	

	public function thembenhnhan($sodt,$hovaten,$ngaysinh,$gioitinh,$socmnd){
		$db = new Database();
		$check = "SELECT * FROM thongtin_benhnhan WHERE SoDT = '$sodt'";
		$num = $db->num_rows($check);
		if($num>0)
		{
			echo"<script>";
			    echo"alert('Số điện thoại này đã được đăng kí !')";
			echo"</script>";
		}
		else
		{
			$sql = "INSERT INTO thongtin_benhnhan(HoVaTen,NgaySinh,GioiTinh,SoDT,SoCMND,TrangThai)
			VALUES('$hovaten','$ngaysinh','$gioitinh','$sodt','$socmnd','1')";
			$result = $db->query($sql);
			if($result){
				return $result;
			}	
		}
	}

	public function get_thongtinbenhnhan(){
		$db = new Database();
		$sql = "SELECT * FROM thongtin_benhnhan WHERE TrangThai = '1' ORDER BY Id DESC";
		$result = $db->getdata($sql);
		return $result;
	}

	public function get_row_thongtinbenhnhan($id){
		$db = new Database();
		$sql = "SELECT * FROM thongtin_benhnhan WHERE Id = '$id' AND TrangThai = '1' ";
		$result = $db->getrow($sql);
		return $result;
	}
	public function sua_benhnhan($id,$tenbn,$ngaysinh,$gioitinh,$socmnd,$sodt)
		{
			$db= new Database();
			$sql = "UPDATE thongtin_benhnhan SET HoVaTen = '$tenbn',NgaySinh = '$ngaysinh',GioiTinh = '$gioitinh',
			SoCMND = '$socmnd',SoDT = '$sodt' WHERE Id = $id";
			$result = $db->query($sql);
			if($result)
			{
				return "Bạn đã cập nhật thành công thông tin bệnh nhân $tenbn";
			}
		}
	public function delete_bn($id)
		{
			$db = new Database();
			$sql = "UPDATE thongtin_benhnhan SET TrangThai ='0' WHERE Id = '$id' ";
			$result = $db->query($sql);
		}
}
