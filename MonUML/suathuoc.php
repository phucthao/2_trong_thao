<?php 
	require_once("header.php");
?>
	<div class="container">
		<div class="col-md-12 text-center">
			<h3 style="margin: 5px 0 30px 0; color:#bd0103;">SỬA THUỐC</h3>
		</div>
		<div class="col-md-6 col-md-offset-3">
			<form method="post" role="form" >
				<div id="alert-sdt" >
					
				</div>
				<?php 
					require_once "config/thuoc.php";
					$get = new KhoThuoc();
					$data = $get->get_row_thongtinthuoc($_GET['id']);

					if(isset($_POST['submit'])){
						$thongbao=$get->sua_thongtinthuoc(
							$_POST['MaThuoc'],
							$_POST['TenThuoc'],
							$_POST['DonVi'],
							$_POST['SoLuong'],
							$_POST['DonGia']
						);				
					}
				?>
				<div class="form-group">
					<label>Mã Thuốc</label>
					<input type="text" class="form-control"  name='MaThuoc' readonly value="<?php echo $data['Id']?>">
				</div>
				<div id="form-info">
					<div class="form-group">
						<label>Tên Thuốc</label>
						<input type="text" class="form-control"  name="TenThuoc" required value="<?php echo $data['TenThuoc']?>">
					</div>
					<div class="form-group">
						<label>Đơn Vị</label>
						<input type="text" class="form-control"  name="DonVi" required value="<?php echo $data['DonVi']?>">
					</div>
					<div class="form-group">
						<label>Số Lượng</label>
						<input type="text" class="form-control"  name="SoLuong" required value="<?php echo $data['SoLuong']?>">
					</div>
					<div class="form-group">
						<label>Đơn Giá</label>
						<input type="text" class="form-control"  name="DonGia" required value="<?php echo $data['DonGia']?>">
					</div>
				</div>
				<button name="submit" type="submit" class="btn btn-success">Sửa</button>
			</form>
		</div>
	</div>
	<!--KIỂM TRA TÊN THUỐC ĐÃ CÓ TRONG CSDL HAY CHƯA-->
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
	
