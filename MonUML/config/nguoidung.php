<?php
require_once "database.php";
/**
 * 
 */
class Nguoidung
{
	public function Register($username,$password,$quyentruycap){
		$db = new Database();
		$check = "SELECT * FROM user WHERE Username = '$username'";
		$num = $db->num_rows($check);
		if($num>0)
		{
			echo"<script>";
			    echo"alert('Tài khoản này đã được đăng kí!')";
			echo"</script>";
		}
		else
		{
			$sql = "INSERT INTO user(Username,Password,QuyenTruyCap)
			VALUES('$username',md5($password),'$quyentruycap')";
			$result = $db->query($sql);
			if($result){
				echo"<script>";
				    echo"alert('Thêm thành công')";
				echo"</script>";
				header('location:login.php');

			}	
		}
	}
	public function Login($username,$password){
		$db = new Database();
		$check = "SELECT * FROM user WHERE Username = '$username' AND Password = '$password' ";
		$result = $db->num_rows($check);
		if($result > 0){
			session_start();
			$_SESSION['username']=$username;
			header('location:index.php');
		}else{
			echo"<script>";
			    echo"alert('Tài khoản hoặc mật khẩu sai !!')";
			echo"</script>";
		}	
	
	}
	public function Get_nguoidung(){
		$db = new Database();
		$sql = "SELECT * FROM user ";
		$result = $db->getdata($sql);
		return $result;
	
	}
}