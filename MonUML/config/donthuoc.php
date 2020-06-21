<?php
require_once "database.php";
/**
 * 
 */
class DonThuoc
{
	public function get_row_thongtinbenhnhan($id){
		$db = new Database();
		$sql = "SELECT * FROM thongtin_benhnhan WHERE Id = '$id' ";
		$result = $db->getrow($sql);
		return $result;
	}

	public function nhapkhambenh($idBenhNhan,$chuandoan,$loidan){
		date_default_timezone_set('Asia/Ho_Chi_Minh');
	 	$time = date("Y-m-d H:i:sa");
		$db = new Database();
		if(isset($chuandoan)){
			$sql = "INSERT INTO khambenh(IdBenhNhan,ChuanDoan,LoiDan,NgayKhamBenh)
			VALUES('$idBenhNhan','$chuandoan','$loidan','$time')";
			$result = $db->query($sql);
		}else{
			echo "Vui lòng quay về trang chủ!";
		}
		
	}
	public function get_khambenh($id){
		$db = new Database();
		$sql = "SELECT Max(IdKhamBenh) as MaxIdKhamBenh FROM khambenh Where IdBenhNhan ='$id' ";
		$result = $db->getrow($sql);
		return $result;
	}
	public function get_data_khambenh($id){
		$db = new Database();
		$sql = "SELECT * FROM khambenh Where IdBenhNhan ='$id' ORDER BY IdKhamBenh DESC ";
		$result = $db->getdata($sql);
		return $result;
	}
	public function nhapdonthuoc($IdKhamBenh,$IdBenhNhan,$TenThuoc,$DonVi,$SoLuong,$DonGia,$ThanhTien,$CachDung){
		date_default_timezone_set('Asia/Ho_Chi_Minh');
	 	$time = date("Y-m-d H:i:sa");
		$db = new Database();
		$sql = "INSERT INTO donthuoc(IdKhamBenh,IdBenhNhan,TenThuoc,DonVi,SoLuong,DonGia,ThanhTien,CachDung,NgayKhamBenh)
		VALUES('$IdKhamBenh','$IdBenhNhan','$TenThuoc','$DonVi','$SoLuong','$DonGia','$ThanhTien','$CachDung','$time')";
		$result = $db->query($sql);
		return $result;
	}

	public function get_row_khambenh($IdKhamBenh){
		$db = new Database();
		$sql = "SELECT * FROM khambenh Where IdKhamBenh ='$IdKhamBenh' ";
		$result = $db->getrow($sql);
		return $result;
	}
	public function getdata_donthuoc($IdKhamBenh){
		$db = new Database();
		$sql = "SELECT * FROM donthuoc Where IdKhamBenh ='$IdKhamBenh' ";
		$result = $db->getdata($sql);
		return $result;
	}
}