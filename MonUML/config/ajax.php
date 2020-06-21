<?php
require_once "database.php";
/**
 * 
 */
class Ajax
{	
	//Dang Ki
	public function Username($username){
		$db = new Database();
		$check = "SELECT * FROM user WHERE Username = '$username'";
		$num = $db->num_rows($check);
		if($num>0)
		{
			return $error = 'yes';
		}	
	}

	public function sodt($sodt){
		$db = new Database();
		$check = "SELECT * FROM thongtin_benhnhan WHERE SoDT = '$sodt'";
		$num = $db->num_rows($check);
		if($num>0)
		{
			return $error = 'yes';
		}	
	}
	public function tenthuoc($tenthuoc){
		$db = new Database();
		$check = "SELECT * FROM kho_thuoc WHERE TenThuoc = '$tenthuoc'";
		$num = $db->num_rows($check);
		if($num>0)
		{
			return $error = 'yes';
		}	
	}
	//Search trong danh sách bệnh nhân
	public function form_search_ten($text){
		$db = new Database();
		$sql = "SELECT * FROM thongtin_benhnhan WHERE HoVaTen LIKE '%$text%' ";
		$result = $db->getdata($sql);
		return $result;
	}
	public function form_search_sodt($text){
		$db = new Database();
		$sql = "SELECT * FROM thongtin_benhnhan WHERE SoDT LIKE '%$text%' ";
		$result = $db->getdata($sql);
		return $result;
	}
	public function form_search_socmnd($text){
		$db = new Database();
		$sql = "SELECT * FROM thongtin_benhnhan WHERE SoCMND LIKE '%$text%' ";
		$result = $db->getdata($sql);
		return $result;
	}
	//Search trong danh sách thuốc
	public function form_search_thuoc($text){
		$db = new Database();
		$sql = "SELECT * FROM kho_thuoc WHERE TenThuoc LIKE '%$text%' AND TrangThai ='1' ORDER BY SoLuong ";
		$result = $db->getdata($sql);
		return $result;
	}
	//Search tên thuốc trong khambenh.php
	public function form_search_thuoc_khambenh($text){
		$db = new Database();
		$sql = "SELECT * FROM kho_thuoc WHERE TenThuoc LIKE '%$text%' AND TrangThai ='1' ";
		$result = $db->getdata($sql);
		return $result;
	}
	//Search đơn vị bằng tên thuốc
	public function search_thuoc_donvi($text){
		$db = new Database();
		$sql = "SELECT * FROM kho_thuoc WHERE TenThuoc = '$text' AND TrangThai ='1' ";
		$result = $db->getdata($sql);
		return $result;
	}
	//Search đơn giá bằng tên thuốc
	public function search_thuoc_dongia($text){
		$db = new Database();
		$sql = "SELECT * FROM kho_thuoc WHERE TenThuoc = '$text' AND TrangThai ='1' ";
		$result = $db->getrow($sql);
		return $result;
	}
}
