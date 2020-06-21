<?php
	require_once"thuoc.php";
	$id= $_GET['id'];
	$db = new khothuoc();
	$result = $db->delete_thuoc($id);
	header('location:../quanlythuoc.php');
?>