<?php 
	require_once("header.php");
?>
	<div class="container">
		<div class="col-md-12 text-center">
			<h3 style="margin: 5px 0 30px 0; color:#bd0103;">SỬA THÔNG TIN BỆNH NHÂN</h3>
		</div>
		<div class="col-md-6 col-md-offset-3">
			<form method="post" role="form" >
				<div id="alert-sdt" >
					
				</div>
				<?php 
					require_once "config/benhnhan.php";
					$get = new Nhapdulieu();
					$data = $get->get_row_thongtinbenhnhan($_GET['id']);

					if(isset($_POST['submit'])){
						$thongbao=$get->sua_Benhnhan(
							$_POST['MaBN'],
							$_POST['TenBN'],
							$_POST['NgaySinh'],
							$_POST['GioiTinh'],
							$_POST['SoCMND'],
							$_POST['SDT']
						);
						echo"<div class='col-md-12' style='padding:0;' >";
							echo"<div class='alert alert-success' role='alert'>";
								echo $thongbao;
							echo"</div>";
						echo"</div>";				
					}
				?>
				<div class="form-group">
					<label>Mã BN</label>
					<input type="text" class="form-control"  name='MaBN' readonly value="<?php echo $data['Id']?>">
				</div>
				<div id="form-info">
					<div class="form-group">
						<label>Tên bệnh nhân</label>
						<input type="text" class="form-control"  name="TenBN" required value="<?php echo $data['HoVaTen']?>">
					</div>
					<div class="form-group">
						<label>Ngày sinh</label>
						<input type="date" class="form-control"  name="NgaySinh" required value="<?php echo $data['NgaySinh']?>">
					</div>
					<div class="form-group">
						<label>Giới Tính</label>
						<input type="text" class="form-control"  name="GioiTinh" required value="<?php echo $data['GioiTinh']?>">
					</div>
					<div class="form-group">
						<label>Số CMND</label>
						<input type="text" class="form-control"  name="SoCMND" required value="<?php echo $data['SoCMND']?>">
					</div>
					<div class="form-group">
						<label>Số điện thoại</label>
						<input type="text" class="form-control"  name="SDT" required value="<?php echo $data['SoDT']?>">
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
	
