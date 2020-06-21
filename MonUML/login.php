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
						$nhap->Login($_POST['username'],md5($_POST['password']));
					}
				?>	
				<form method="post" role="form">
					<div class="form-group">
						<label>Tài khoản</label>
						<input type="username" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label>Mật khẩu</label>
						<input type="password" class="form-control" name="password">
					</div>
					<div class="center-block" style="">
						<button type="submit" class="btn btn-success" name="submit">Đăng Nhập</button>
						<!-- <a href="register.php"><button type="button" class="btn btn-success" name="submit">Đăng Ký</button></a> -->
					</div>
				</form>	
			</div>
		</div>
	</div>
<?php 
	require_once("footer.php");
?>
