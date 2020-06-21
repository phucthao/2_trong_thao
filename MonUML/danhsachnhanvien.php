<?php 
	require_once("header.php");
?>
	<!--------------MAIN DSACH KH------------------>
	<div class="container">
		<div class="col-md-12" style="">
			<div class="col-md-6">

			</div>	
			<div class="col-md-6">
				<div style=" padding-top:8px; padding-left:70%;">
					<a href="themtaikhoan.php"><button type="submit" class="btn btn-danger">Thêm Người Dùng</button></a>
				</div>	
			</div>	
		</div>
		<?php
			// require_once"config/nguoidung.php";
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
					  		<td>Mã Người Dùng</td>
					  		<td>Username</td>
					  		<td>Password</td>
					  		<td>Quyền Truy Cập</td>
<!-- 					  		<td></td>
					  		<td></td> -->
						</tr>
					</thead>
					<form method="POST" role="form">
						<tbody id="result-search">
							<?php 
								require_once "config/nguoidung.php";
								$get = new Nguoidung();
								$data = $get->Get_nguoidung();
								$i=1;
								foreach ($data as $row) {
									echo"<tr>";
								  		echo"<td>$i</td>";
								  		echo"<td>$row[Id]</td>";
								  		echo"<td>$row[Username]</td>";
								  		echo"<td>$row[Password]</td>";
								  		echo"<td>$row[QuyenTruyCap]</td>";
								  		// echo"<td style='padding: 0;'><button type='submit' class='btn btn-danger' name='delete' value='$row[Id]'>Xóa</button></td>";
								  		// echo"<td style='padding: 0;'><a href='suabenhnhan.php?id=$row[Id]'><button type='submit' class='btn btn-info'>Sửa</button></a></td>";
									echo"</tr>";
									$i++;
								}
							?>
						</tbody>
					</form>
				</table>
			</div>	
		</div>
	</div>
	<!--SEARCH THÔNG TIN KHÁCH HÀNG BẰNG TÊN-->
	<script>
		$(document).ready(function() {
			$("#text-search").keyup(function() {
				var a = $(this).val();
				$.get("ajax/kiemtra-search-ten.php",{text:a},function(data){
					$("#result-search").html(data);
				});
			});			
		});		
	</script>
	<!--SEARCH THÔNG TIN KHÁCH HÀNG BẰNG SỐ ĐT-->
	<script>
		$(document).ready(function() {
			$("#text-search").keyup(function() {
				var a = $(this).val();
				$.get("ajax/kiemtra-search-sodt.php",{text:a},function(data){
					$("#result-search").html(data);
				});
			});			
		});		
	</script>
	<!--SEARCH THÔNG TIN KHÁCH HÀNG BẰNG SỐ CMND-->
	<script>
		$(document).ready(function() {
			$("#text-search").keyup(function() {
				var a = $(this).val();
				$.get("ajax/kiemtra-search-socmnd.php",{text:a},function(data){
					$("#result-search").html(data);
				});
			});			
		});		
	</script>
<?php 
	require_once("footer.php");
?>