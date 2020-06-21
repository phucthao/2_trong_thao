
	<!--------------MAIN DSACH KH------------------>
	<div class="container">
		<div class="col-md-12" style="">
			<div class="col-md-6">
				<div class="navbar-form">
					<div class="form-group">
						<input id="text-search" type="text" class="form-control" placeholder="Họ tên, Số ĐT, số CMND...">
					</div>
					<button id="click-search" type="button" class="btn btn-success">Kiểm tra</button>
				</div>
			</div>	
			<div class="col-md-6">
				<div style=" padding-top:8px; padding-left:70%;">
					<a href="thembenhnhan.php"><button type="submit" class="btn btn-danger">Thêm Bệnh Nhân</button></a>
				</div>	
			</div>	
		</div>
		<?php
			// require_once"config/benhnhan.php";
			// if(isset($_POST['delete']))
			// {
			
			// 	$id = $_POST['delete'];
			// 	$db = new Nhapdulieu();
			// 	$thongbao = $db->get_row_thongtinbenhnhan($id);
			// 	$delete = $db->delete_bn($id);
			// 		echo"<div class='col-md-12' >";
			// 			echo"<div class='alert alert-success' role='alert'>";
			// 			echo"<p class='text-center'>Xóa Thành Công bệnh nhân $thongbao[HoVaTen]</p>";
			// 			echo"</div>";
			// 		echo"</div>";
			// }
		?>		
		<div class="col-md-12" style="padding:0;">
			<div style="height: 500px; overflow:scroll;"> 
				<table class="table table-striped table-bordered text-center" style="">
					<thead style="font-size:17px;">
						<tr>
					  		<td>STT</td>
					  		<td>Mã KH</td>
					  		<td>Họ Tên</td>
					  		<td>Ngày Sinh</td>
					  		<td>Giới Tính</td>
					  		<td>Số CMND</td>
					  		<td>Số Điện Thoại</td>
					  		<td></td>
					  		<td></td>
					  		<td></td>
						</tr>
					</thead>
					<form method="POST" role="form">
						<tbody id="result-search">
							<?php 
								require_once "config/benhnhan.php";
								$get = new Nhapdulieu();
								$data = $get->get_thongtinbenhnhan();
								$i=1;
								foreach ($data as $row) {
									if($row['GioiTinh']==0){
										$GioiTinh = 'Nam';
									}else{
										$GioiTinh = 'Nữ';
									}
									echo"<tr>";
								  		echo"<td>$i</td>";
								  		echo"<td>$row[Id]</td>";
								  		echo"<td>$row[HoVaTen]</td>";
								  		echo"<td>$row[NgaySinh]</td>";
								  		echo"<td>$GioiTinh</td>";
								  		echo"<td>$row[SoCMND]</td>";
								  		echo"<td>$row[SoDT]</td>";
								  		echo"<td style='padding: 0;'><a href='khambenh.php?id=$row[Id]'><button type='button' class='btn btn-info'>Khám bệnh</button></a></td>";
								  		echo"<td style='padding: 0;'><a href='chitietbenhnhan.php?id=$row[Id]'><button type='button'class='btn btn-warning'>Xem lịch sử</button></a></td>";
								  		echo"<td style='padding: 0;'><a href='suabenhnhan.php?id=$row[Id]'><button type='button' class='btn btn-info'>Sửa</button></a></td>";
									echo"</tr>";
									$i++;
								}
							?>
						</tbody>
						<tbody id="result-search-sdt"></tbody>
						<tbody id="result-search-cmnd"></tbody>
					</form>
				</table>
			</div>	
		</div>
	</div>
	<!--SEARCH THÔNG TIN KHÁCH HÀNG BẰNG TÊN-->
	<script>
		$(document).ready(function() {
			$("#click-search").click(function() {
				var a = $("#text-search").val();
				$.get("ajax/kiemtra-search-ten.php",{text:a},function(data){
					$("#result-search").html(data);
				});
			});			
		});		
	</script>
	<!--SEARCH THÔNG TIN KHÁCH HÀNG BẰNG SỐ ĐT-->
	<script>
		$(document).ready(function() {
			$("#click-search").click(function() {
				var a = $("#text-search").val();
				$.get("ajax/kiemtra-search-sodt.php",{text:a},function(data){
					$("#result-search-sdt").html(data);
				});
			});			
		});		
	</script>
	<!--SEARCH THÔNG TIN KHÁCH HÀNG BẰNG SỐ CMND-->
	<script>
		$(document).ready(function() {
			$("#click-search").click(function() {
				var a = $("#text-search").val();
				$.get("ajax/kiemtra-search-socmnd.php",{text:a},function(data){
					$("#result-search-cmnd").html(data);
				});
			});			
		});		
	</script>
<?php 
	require_once("footer.php");
?>