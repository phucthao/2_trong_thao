<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Phần mềm quản lý phòng khám</title>
	<script src="jquery/jquery.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/style.css">
</head>
<body>	
	<!--------register--------------->
	<div class="container-fluid">
		<div class="col md-6 col-md-offset-4" style="background: red;">
			<div class="col-md-6" style="margin-top: 15%;">
				<?php 
					require_once "config/nguoidung.php";    
					if(isset($_POST['submit'])){
				        $nhap = new Nguoidung();
						$nhap->Register($_POST['username'],$_POST['password'],$_POST['quyentruycap']);
					}
				?>	
				<form method="post" role="form">
					<div id="alert-username" >
					
					</div>
					<div class="form-group">
						<label for="Username">Tài khoản</label>
						<input id="username" type="username" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label for="">Mật khâu</label>
						<input type="password" class="form-control" name="password">
					</div>
					<div class="form-group">
						<label>Quyền truy cập</label>
						<select class="form-control" name="quyentruycap">
							<option value="admin">Quản trị viên</option>
							<option value="staff">Nhân viên</option>
						</select>
					</div>
					<button type="submit" class="btn btn-success" name="submit">Đăng Ký</button>
				</form>	
			</div>
		</div>
	</div>
<?php 
	require_once("footer.php");
?>
<!--KIỂM TRA SỐ ĐIỆN THOẠI CỦA KHÁCH HÀNG ĐÃ CÓ TRONG CƠ SỞ DỮ LIỆU HAY CHƯA-->
	<script>
		$(document).ready(function() {
			$("#username").blur(function() {
				var a = $(this).val();
				$.get("ajax/kiemtra-username.php",{username:a},function(data){
					$("#alert-username").html(data);
				});
			});			
		});		
	</script>
