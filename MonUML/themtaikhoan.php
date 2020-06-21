<?php
	require_once("header.php");
?>
<div class="container">
	<div class="col-md-12 text-center">
		<h3 style="margin: 5px 0 30px 0; color:#bd0103;">Tạo Tài Khoản Mới</h3>
	</div>
	<div class="col-md-6 col-md-offset-3">
		<form method="post" role="form" >
			<div id="alert-sdt" >
				
			</div>
			<?php 
				require_once "config/nguoidung.php";
				$get = new nguoidung();
				if(isset($_POST['submit'])){
					$result=$get->Register(
						$_POST['username'],
						$_POST['password'],
						$_POST['phanquyen']
					);				
				}
			?>
			<div class="form-group">
				<label>Tên đăng nhập</label>
				<input type="text" class="form-control"  name='username' required>
			</div>
			<div id="form-info">
				<div class="form-group">
					<label>Mật Khẩu</label>
					<input type="text" class="form-control"  name="password" required>
				</div>
				<div class="form-group">
					<label>Quyền đăng nhập</label>
					<select class="form-control" name="phanquyen">
						<option value="nguoidung">người dùng</option>
						<option value="admin">admin</option>
					</select>
				</div>
			</div>
			<button name="submit" type="submit" class="btn btn-success">Tạo tài khoản</button>
		</form>
	</div>
</div>
<?php
	require_once("footer.php");
?>