<?php 
	require_once("header.php");
?>
<div class="container">
	<div class="col-md-10 col-md-offset-1" style="border: 2px solid #ccc;">
		<div class="col-md-12">
			<div class="col-md-3 text-center" style="padding: 0;">
				<h4>PHÒNG KHÁM ĐA KHOA PHÚC THẢO</h4>
			</div>
			<div class="col-md-3 col-md-offset-6 text-right">
				<?php 
					if(!isset($_POST['LoiSoLuong'])){
						require "config/donthuoc.php";
						$nhap = new DonThuoc();
						$nhap->nhapkhambenh($_GET['id'],$_POST['ChuanDoan'],$_POST['LoiDan']);
						$data = $nhap->get_khambenh($_GET['id']);
						echo "<h4>Mã hoá đơn: ".$data['MaxIdKhamBenh']."</h4>";
					}else{
						echo "<span style='color:#bd0103; font-size:19px;'>Bị lỗi số lượng thuốc</span>";
					} 
				?>
				
			</div>
		</div>
		<div class="col-md-12 text-center" >
			<h3><b>ĐƠN THUỐC</b></h3>
		</div>
		<?php 
			require_once "config/benhnhan.php";
			$get = new Nhapdulieu();
			$data = $get->get_row_thongtinbenhnhan($_GET['id']);
		?>
		<div class="col-md-12">
			<form class="form-horizontal" role="form">
				<div class="col-md-4">
					<div class="form-group">
						<label>Tên Bệnh Nhân: </label>
						<span><?php echo $data['HoVaTen'] ?></span>	
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
			</form>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label>Chuẩn đoán: </label>
				<span><?php echo $_POST['ChuanDoan'] ?></span>	
			</div>
		</div>
		<div class="col-md-12" >
			<div style="overflow:scroll;"> 
				<table class="table table-striped table-bordered text-center" style="">
					<thead style="font-size:17px;">
						<tr>
							<td>STT</td>
							<td>Tên Thuốc</td>
							<td>Đơn Vị</td>
							<td>Số Lượng</td>
							<td>Đơn giá</td>
							<td>Thành tiền</td>
							<td>Cách dùng</td>
						</tr>
					</thead>
					<tbody>
						<?php
							if(!isset($_POST['LoiSoLuong'])){
								$data = $nhap->get_khambenh($_GET['id']);
								$connect = mysqli_connect("localhost", "root", "", "15103059-uml");
	  							mysqli_set_charset($connect,'UTF8');
								if(!isset($_POST['IdBenhNhan'])){
								    $_POST['IdBenhNhan']=$_GET['id'];
								}
								$tongtien = 0;
								$stt=1;
						        foreach ($_SESSION["thuoc".$_POST['IdBenhNhan']] as $value){
									$result = mysqli_query($connect,"SELECT * FROM kho_thuoc WHERE Id = '$value' ");
									while($row = mysqli_fetch_array($result)){
										$thanhtien = $_POST['SoLuong'.$row['Id']]*$row['DonGia'];
										echo"<tr>";
											echo"<td>$stt</td>";
											echo"<td>".$row['TenThuoc']."</td>";
											echo"<td>".$row['DonVi']."</td>";
											echo"<td>".$_POST['SoLuong'.$row['Id']]."</td>";
											echo"<td>".number_format($row['DonGia'])."</td>";
											echo"<td>".number_format($thanhtien)."</td>";
											echo"<td>".$_POST['CachDung'.$row['Id']]."</td>";
										echo"</tr>";
										$tongtien = $tongtien+$thanhtien;
										$stt++;
										$nhap->nhapdonthuoc(
											$data['MaxIdKhamBenh'],
											$_GET['id'],
											$row['TenThuoc'],
											$row['DonVi'],
											$_POST['SoLuong'.$row['Id']],
											$row['DonGia'],
											$thanhtien,
											$_POST['CachDung'.$row['Id']]
										);
										$update_soluong = $row['SoLuong'] - $_POST['SoLuong'.$row['Id']];
										$update = mysqli_query($connect,"UPDATE kho_thuoc SET SoLuong = '$update_soluong' WHERE Id = '$value' ");
										$update = mysqli_query($connect,"UPDATE khambenh SET TongTien = '$tongtien' WHERE IdKhamBenh = '$data[MaxIdKhamBenh]' AND IdBenhNhan = '$_GET[id]' ");
										
									}
									unset($_SESSION["thuoc".$_POST['IdBenhNhan']]);
								}
							}else{
								echo "<span style='color:#bd0103; font-size:19px;'>Nhập quá số lượng thuốc trong kho (hoặc thuốc trong kho đã hết) vui lòng kiểm tra lại !!!<a href ='khambenh.php?id=$_GET[id]'> Bấm vô đây để quay lại</a></span>";
							}   
						?>
					</tbody>
				</table>
			</div>	
		</div>
		<div class="col-md-12 text-right" style="font-size: 17px;">
			<div class="form-group">
				<label>Tổng tiền: </label>
				<span style="color:#bd0103;"><b>
					<?php 
						if(isset($tongtien)){
							echo number_format($tongtien); 
						}else{
							echo "0";
						}
					?></b>

				</span>	
			</div>
		</div>
		<div class="col-md-12" >
			<div class="form-group">
				<label>Lời dặn của Bác Sĩ: </label>
				<span><?php echo $_POST['LoiDan'] ?></span>	
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-5 col-md-offset-7 text-center">
				<div class="form-group">
					<label>
							<?php 

							echo "Ngày ".date("d")." Tháng ".date("m")." Năm ".date("Y") ;
							?>
						</label>
					<br/>
					<b>Bác sĩ điều trị</b>
					<br/>
					<br/>
					<br/>
					<br/>
					<b>Bs Đặng Lê Phúc Thảo</b>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12" style="margin-top:15px;">
		<div class="col-md-6">
			<a href="index.php"><button name="submit" type="submit" class="center-block btn btn-success">Quay về trang chủ</button></a>
		</div>
		<div class="col-md-6">
			<button name="submit" type="submit" class="center-block btn btn-info">In hoá đơn</button>
		</div>
	</div>
</div>


<?php 
	require_once("footer.php");
?>
	
