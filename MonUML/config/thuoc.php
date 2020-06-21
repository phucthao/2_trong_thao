<?php
require_once "database.php";
/**
 * 
 */
class KhoThuoc
{
	public function themthuoc($tenthuoc,$donvi,$soluong,$dongia){
		$db = new Database();
		$check = "SELECT * FROM kho_thuoc WHERE TenThuoc = '$tenthuoc'";
		$num = $db->num_rows($check);
		if($num>0)
		{
			echo"<script>";
			    echo"alert('Tên thuốc này đã có trong kho thuốc !')";
			echo"</script>";
		}
		else
		{
			$sql = "INSERT INTO kho_thuoc(TenThuoc,DonVi,SoLuong,DonGia,TrangThai)
			VALUES('$tenthuoc','$donvi','$soluong','$dongia','1')";
			$result = $db->query($sql);
			return $result;
		}
	}
	public function get_thongtinthuoc(){
		$db = new Database();
		$sql = "SELECT * FROM kho_thuoc WHERE TrangThai ='1' ORDER BY SoLuong";
		$result = $db->getdata($sql);
		return $result;
	}

	public function get_row_thongtinthuoc($id){
		$db = new Database();
		$sql = "SELECT * FROM kho_thuoc WHERE Id = '$id' ";
		$result = $db->getrow($sql);
		return $result;
	}

	public function sua_thongtinthuoc($id,$tenthuoc,$donvi,$SoLuong,$dongia){
		$db = new Database();
		$sql = "UPDATE kho_thuoc SET TenThuoc ='$tenthuoc', DonVi='$donvi', SoLuong='$SoLuong', DonGia='$dongia' 
				WHERE Id = '$id' ";
		$result = $db->query($sql);
		if($result){
			header("location:quanlythuoc.php");
			return $thongbao = "Bạn đã sửa thành công";
		}
	}
	public function delete_thuoc($id)
		{
			$db = new database();
			$sql = "UPDATE kho_thuoc SET TrangThai = '0' WHERE Id = '$id' ";
			$result = $db->query($sql);
		}
}