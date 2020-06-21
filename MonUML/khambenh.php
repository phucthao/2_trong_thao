<?php 
	require_once("header.php");
	ob_start();
?>
	<div class="container">
		<div class="col-md-12 text-center">
			<h3 style="margin: 5px 0px 25px 0; color:#bd0103;">KHÁM BỆNH</h3>
		</div>
		<div class="col-md-12" style="padding: 0;">
			<?php 
				require_once "config/benhnhan.php";
				$get = new Nhapdulieu();
				$data = $get->get_row_thongtinbenhnhan($_GET['id']);
			?>
			<div class="col-md-4">
				<div class="form-group">
					<label>Tên Bệnh Nhân: </label>
					<span><?php echo $data['HoVaTen'] ?></span>
					<input type="text" id="IdBenhNhan" hidden value="<?php echo $_GET['id'] ?>">	
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label>Ngày sinh: </label>
					<span><?php echo $data['NgaySinh'] ?></span>	
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label>Giới tính: </label>
					<span>
						<?php
							if($data['GioiTinh'] == 0){
								echo "Nam";
							}else{
								echo "Nữ";
							}
						 ?>
					</span>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label>Số điện thoại: </label>
					<span><?php echo $data['SoDT'] ?></span>	
				</div>
			</div>
		</div>
		<form action="xuatdonthuoc.php?id=<?php echo $_GET['id']; ?>" method='POST' role='form'>
			<div class="col-md-12">
				<div class="form-group">
					<label class="control-label" >Chuẩn đoán: </label>
					<input name="ChuanDoan" required type="text" class="form-control" placeholder="Chuẩn đoán lâm sàn, tên bệnh...">
				</div>
			</div>
			<div class="col-md-12" >
				<div class="form-group">
					<label class="control-label" >Kê đơn thuốc</label>
					<input id="tenthuoc" type="text" class="form-control" placeholder="Search tên thuốc...">
				</div>
				<div style="overflow:scroll;"> 
					<table class="table table-striped table-bordered text-center" style="">
						<tbody id="thuocList">
							
						</tbody>
					</table>
				</div>	
				<div style="overflow:scroll;"> 
					<table class="table table-striped table-bordered text-center" style="">
						<thead style="font-size:17px;">
							<tr>
								<td style="width: 2%;">STT</td>
								<td style="width: 2%;">Mã Thuốc</td>
								<td>Tên Thuốc</td>
								<td style="width: 7%;">Đơn Vị</td>
								<td style="width: 8%;">SL</td>
								<td style="width: 10%;">Đơn giá</td>
								<td style="width: 12%;">Thành tiền</td>
								<td>Cách dùng</td>
								<td style="width: 3%;"></td>
							</tr>
						</thead>
						<tbody id="hienthi-thuoc">
							<?php
								// ob_start();
								// include("ajax/show-tenthuoc-khambenh.php");
							?>
						</tbody>
						</form>
					</table>
				</div>	
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label class="control-label" >Lợi dặn của bác sĩ: </label>
					<input name="LoiDan" required type="text" class="form-control" placeholder="Uống thuốc đúng giờ...10 ngày sau tái khám" >
				</div>
			</div>
			<button name="submit" type="submit" class="center-block btn btn-success">Xuất Đơn Thuốc</button>
		</form>
	</div>
	<!-----------SEARCH TÊN THUỐC------------>
		<script>
			$(document).ready(function(){  
			    $('#tenthuoc').keyup(function(){  
			           var query = $(this).val(); 
			           var IdBenhNhan = $('#IdBenhNhan').val();
			           if(query != '')  
			           {  
			                $.ajax({  
			                    url:"ajax/search-tenthuoc-khambenh.php",  
			                    method:"POST",  
			                    data:{query:query,IdBenhNhan:IdBenhNhan},  
			                    success:function(data)  
			                    {  
			                        $('#thuocList').fadeIn();  
			                        $('#thuocList').html(data);  
			                    }  
			                });  
			           }  
			    }); 
			   
			});  
		</script>
		<!-- hiển thị thuốc -->
		<script>
			function nhap(id,IdBenhNhan){
				$.ajax({
					url:"ajax/show-tenthuoc-khambenh.php",
					method:"POST",
					dataType:"text",
					data:{idThuoc:id,IdBenhNhan:IdBenhNhan},
					success : function (result){
			            $('#hienthi-thuoc').html(result);
			            $('#thuocList').fadeOut();
					}

				})
				return false;
			};
		</script>

<?php 
	require_once("footer.php");
?>
	
