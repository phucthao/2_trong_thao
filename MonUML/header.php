<?php session_start();
	if(!isset($_SESSION['username'])){
		header('location:login.php');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Phần mềm quản lý phòng khám</title>
	<script src="jquery/jquery.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>

	<script src="highcharts/code/highcharts.js"></script>
	<script src="highcharts/code/modules/data.js"></script>
	<script src="highcharts/code/modules/drilldown.js"></script>
	<script src="highcharts/code/modules/exporting.js"></script>
	<script src="highcharts/code/modules/export-data.js"></script>
	<script src="highcharts/code/modules/accessibility.js"></script>
	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/style.css">
</head>
<body>
	<header>
		<div class="container-fluid" style="padding: 0;">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li style="padding: 0;"><a href="index.php">Trang Chủ</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Bệnh Nhân <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="thembenhnhan.php">Thêm Bệnh Nhân</a></li>
									<li class="divider"></li>
									<li><a href="index.php">D.Sách Bệnh Nhân</a></li>
								</ul>
							</li>
							<li><a href="quanlythuoc.php">Kho Thuốc</a></li>
							<li><a href="thongke.php">Thống kê</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Quản lý <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="danhsachnhanvien.php">Danh sách nhân viên</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<?php
							if(isset($_SESSION['username'])){
								echo"<li><a href='#'>Welcome $_SESSION[username]!</a></li>";
								echo"<li><form method='POST' name='logout' role='form'><button type='submit' class='btn btn-Logout' name='logout' style='margin-top:8px;'>Đăng xuất</button></form></li>";

									if(isset($_POST['logout']))
									{
										session_destroy();
										header('location:login.php');
									}
								}
							?>
						</ul>	
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>