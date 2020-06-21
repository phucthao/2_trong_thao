<?php 
	require_once("header.php");
?>
	<!--------------MAIN DSACH KH------------------>
	<div class="container">
		<div class="col-md-12" style="">
			<div class="col-md-6">
				<div class="navbar-form">
					<div class="form-group">
						<input id="text-search" type="text" class="form-control" placeholder="Tìm kiếm tên thuốc...">
					</div>
					<!-- <button type="button" class="btn btn-success">Kiểm tra</button> -->
				</div>
			</div>	
			<div class="col-md-6">
				<div style=" padding-top:8px; padding-left:80%;">
					<a href="themthuoc.php"><button type="submit" class="btn btn-danger">Thêm thuốc</button></a>
				</div>	
			</div>	
		</div>		
		<div class="col-md-12" style="padding:0;">
			<div style="height: 500px; overflow:scroll;"> 
				<table class="table table-striped table-bordered text-center" style="">
					<thead style="font-size:17px;">
						<tr>
					  		<td>STT</td>
					  		<td>Mã Thuốc</td>
					  		<td>Tên Thuốc</td>
					  		<td>Đơn Vị</td>
					  		<td>Số Lượng</td>
					  		<td>Đơn Giá</td>
					  		<td></td>
					  		<td></td>
						</tr>
					</thead>
					<tbody id="result-search">
						<?php 
							require_once "config/thuoc.php";
							$get = new KhoThuoc();
							$data = $get->get_thongtinthuoc();
							$i=1;
							foreach ($data as $row) {
								echo"<tr>";
							  		echo"<td>$i</td>";
							  		echo"<td>$row[Id]</td>";
							  		echo"<td>$row[TenThuoc]</td>";
							  		echo"<td>$row[DonVi]</td>";
							  		if($row['SoLuong']<30){
							  			if($row['SoLuong']==0){
							  				echo"<td>".$row['SoLuong']." <span style='color:#bd0103;'> (đã hết hàng!)</span>"."</td>";
							  			}else{
							  				echo"<td>".$row['SoLuong']." <span style='color:#bd0103;'> (cảnh báo sắp hết hàng!)</span>"."</td>";
							  			}
							  		}
							  		else
							  		{
							  			echo"<td>$row[SoLuong]</td>";
							  		}
							  		
							  		echo"<td>$row[DonGia]</td>";
							  		echo"<td style='padding: 0;'><a href='suathuoc.php?id=$row[Id]'><button type='submit' class='btn btn-info'>Sửa</button></a></td>";
							  		echo"<td style='padding: 0;'><a href='config/xoa.php?id=$row[Id]'><button type='submit'class='btn btn-warning'>Xoá</button></a></td>";
								echo"</tr>";
								$i++;
							}
						?>
					</tbody>
				</table>
			</div>	
		</div>
	</div>
	<!--SEARCH THÔNG TIN THUỐC BẰNG TÊN-->
	<script>
		$(document).ready(function() {
			$("#text-search").keyup(function() {
				var a = $(this).val();
				$.get("ajax/kiemtra-search-ten-thuoc.php",{text:a},function(data){
					$("#result-search").html(data);
				});
			});			
		});		
	</script>
<?php 
	require_once("footer.php");
?>