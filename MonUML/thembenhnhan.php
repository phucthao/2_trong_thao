<?php 
	require_once("header.php");
?>
	<div class="container">
		<div class="col-md-12 text-center">
			<h3 style="margin: 5px 0 30px 0; color:#bd0103;">THÊM BỆNH NHÂN</h3>
		</div>
		<div class="col-md-6 col-md-offset-3">
			<?php 
				require_once "config/benhnhan.php";
				   
				if(isset($_POST['submit'])){
			        $nhap = new Nhapdulieu();  
					$error=$nhap->thembenhnhan(
						$_POST['sodt'],
						$_POST['hovaten'],
						$_POST['ngaysinh'],
						$_POST['gioitinh'],
						$_POST['socmnd']
					);
					if($error){
						echo"<div id='alert-sdt' class='alert alert-success' role='alert'>";
							echo"Thêm bệnh nhân ".$_POST['hovaten']." thành công";
						echo"</div>";
					}				
				}
			?>	
			<form method="post" role="form" >
				<div id="alert-sdt" >
					
				</div>
				<div class="form-group">
					<label>Số điện thoại</label>
					<input id="sodienthoai" type="text" class="form-control"  name='sodt' required >
				</div>
				<div id="form-info">
					<div class="form-group">
						<label>Họ và tên</label>
						<input type="text" class="form-control"  name="hovaten" required>
					</div>
					<div class="form-group">
						<label>Ngày sinh</label>
						<input type="date" class="form-control" placeholder="dd/mm/yyy" name="ngaysinh" required>
					</div>
					<div class="form-group">
						<label>Giới tính</label>
						<select class="form-control" name="gioitinh" style="width: 35%;">
							<option value="0">Nam</option>
							<option value="1">Nữ</option>
						</select>
					</div>
					<div class="form-group">
						<label>Số CMND</label>
						<input type="text" class="form-control"  name="socmnd" required>
					</div>
				</div>
				<button name="submit" type="submit" class="center-block btn btn-success">Thêm Bệnh Nhân</button>
			</form>
		</div>
	</div>
	<!--KIỂM TRA SỐ ĐIỆN THOẠI CỦA KHÁCH HÀNG ĐÃ CÓ TRONG CƠ SỞ DỮ LIỆU HAY CHƯA-->
	<script>
		$(document).ready(function() {
			$("#sodienthoai").blur(function() {
				var a = $(this).val();
				$.get("ajax/kiemtra-sdt.php",{sdt:a},function(data){
					$("#alert-sdt").html(data);
				});
			});			
		});		
	</script>
<?php 
	require_once("footer.php");
?>
	
