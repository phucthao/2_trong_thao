<?php
require_once "database.php";
/**
 * 
 */
class ThongKe
{
	public function kiemtra($fistDay,$lastDay){
		$db = new Database();
		$sql = "SELECT * FROM `khambenh` WHERE NgayKhamBenh BETWEEN '$fistDay' AND '$lastDay' ";
		$result = $db->getdata($sql);
		return $result;

	}
	public function chooseYear($year){
		$db = new Database();
		$sql = "SELECT * 
				FROM 
				(
				    SELECT *, Year(NgayKhamBenh) as Y, Month(NgayKhamBenh) as M, Day(NgayKhamBenh) as D 
				    FROM khambenh 
				    WHERE Year(NgayKhamBenh)='$year' 
				) t 
				
			";
		$result = $db->getdata($sql);
		return $result;
	}
	public function chooseMonth($month,$year){
		$db = new Database();
		$sql = "SELECT * 
				FROM 
				(
				    SELECT *, Year(NgayKhamBenh) as Y, Month(NgayKhamBenh) as M, Day(NgayKhamBenh) as D 
				    FROM khambenh 
				    WHERE Month(NgayKhamBenh)='$month' AND Year(NgayKhamBenh)='$year' 
				) t 
				
			";
		$result = $db->getdata($sql);
		return $result;
	}




}