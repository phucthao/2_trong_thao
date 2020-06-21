<?php 
	require_once("header.php");
?>
	<div class="container">
		<div class="col-md-12 text-center">
			<h3 style="margin: 5px 0 30px 0; color:#bd0103;">THÊM THUỐC</h3>
		</div>
		<div class="col-md-6 col-md-offset-3">
			<?php 
				require_once "config/thuoc.php";
				   
				if(isset($_POST['submit'])){
			        $nhap = new KhoThuoc();  
					$error=$nhap->themthuoc(
						$_POST['TenThuoc'],
						$_POST['DonVi'],
						$_POST['SoLuong'],
						$_POST['DonGia']
					);
					if($error){
						echo"<div id='alert-sdt' class='alert alert-success' role='alert'>";
							echo"Thêm thuốc ".$_POST['TenThuoc']." thành công";
						echo"</div>";
					}				
				}
			?>	
			<form method="post" role="form" >
				<div id="alert-tenthuoc" >
					
				</div>
				<div class="form-group">
					<label>Tên Thuốc</label>
					<input id="tenthuoc" type="text" class="form-control"  name='TenThuoc' required >
				</div>
				<div id="form-info">
					<div class="form-group">
						<label>Đơn Vị</label>
						<input type="text" class="form-control"  name="DonVi" required>
					</div>
					<div class="form-group">
						<label>Số Lượng</label>
						<input type="text" class="form-control"  name="SoLuong" required>
					</div>
					<div class="form-group">
						<label>Đơn Giá</label>
						<input type="text" class="form-control"  name="DonGia" required>
					</div>
				</div>
				<button name="submit" type="submit" class="center-block btn btn-success">Thêm Thuốc</button>
			</form>
		</div>
	</div>
	<!--KIỂM TRA THUỐC ĐÃ CÓ TRONG CƠ SỞ DỮ LIỆU HAY CHƯA-->
	<script>
		$(document).ready(function() {
			$("#tenthuoc").blur(function() {
				var a = $(this).val();
				$.get("ajax/kiemtra-tenthuoc.php",{tenthuoc:a},function(data){
					$("#alert-tenthuoc").html(data);
				});
			});			
		});		
	</script>
<?php 
	require_once("footer.php");
?>
	
