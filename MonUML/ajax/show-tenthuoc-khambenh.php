<?php
  session_start();
  if(!isset($_POST['IdBenhNhan'])){
    $_POST['IdBenhNhan']=$_GET['id'];
  }

  if(isset($_POST['idThuoc'])){  
    if(!isset($_SESSION["thuoc".$_POST['IdBenhNhan']]))
    {
      $_SESSION["thuoc".$_POST['IdBenhNhan']][0] = $_POST['idThuoc'];  
    }
    else
    {
      if(!in_array($_POST['idThuoc'], $_SESSION["thuoc".$_POST['IdBenhNhan']]))
      {
        $_SESSION["thuoc".$_POST['IdBenhNhan']][]=$_POST['idThuoc'];
      }
    }
  } 
  //Xoá session
  if(isset($_GET['xoa'])){
    
    if(isset($_SESSION["thuoc".$_POST['IdBenhNhan']]))
    {
      if(in_array($_GET['xoa'], $_SESSION["thuoc".$_POST['IdBenhNhan']]))
      {
        $m=1;$i=0;
        while ($m==1){
            if(isset($_SESSION["thuoc".$_POST['IdBenhNhan']][$i])){
              if($_SESSION["thuoc".$_POST['IdBenhNhan']][$i]==$_GET['xoa'])
            {
              unset($_SESSION["thuoc".$_POST['IdBenhNhan']][$i]);
              $m=0;
            } 
            
            }$i++;
        }
      }
    }
  }


  $connect = mysqli_connect("localhost", "root", "", "15103059-uml");
  mysqli_set_charset($connect,'UTF8');
  if(isset($_SESSION["thuoc".$_POST['IdBenhNhan']])){
    $i = 1;
    foreach ($_SESSION["thuoc".$_POST['IdBenhNhan']] as $value) {
      $result = mysqli_query($connect,"SELECT * FROM kho_thuoc WHERE Id = '$value' ");
      while($row = mysqli_fetch_array($result)){
        echo"<tr>";
          echo"<td hidden><div id='LoiSoLuong".$row['Id']."'></div></td>";
          echo"<td>$i</td>";
          echo"<td id='IdThuoc".$row['Id']."'>".$row['Id']."</td>";
          echo"<td>".$row['TenThuoc']."</td>";
          echo"<td>".$row['DonVi']."</td>";
          echo"<td><input type='text' class='form-control' required id='VlSoLuong".$row['Id']."' name='SoLuong".$row['Id']."' >";
          echo"<td id='VlDonGia".$row['Id']."'>".$row['DonGia']."</td>";
          echo"<td id='ThanhTien".$row['Id']."'> </td>";
          echo"<td><input type='text' class='form-control' required placeholder='Sáng 2 viên - tối 2 viên' name='CachDung".$row['Id']."' ></td>";
          echo"<td><a href='?xoa=$value&id=$_POST[IdBenhNhan]'><button type='button' class='btn btn-danger center-block' >Xóa</button></a></td>";
        echo"</tr>";
        $i++;
        // xử lý số lượng nhân đơn giá + //xử lý nhập quá số lượng thuốc trong kho
        echo"
         <script>
            $(document).ready(function(){
                $('#VlSoLuong".$row['Id']."').keyup(function() {
                  var SoLuong = $(this).val();  
                  var DonGia = $('#VlDonGia".$row['Id']."').text();
                  var IdThuoc = $('#IdThuoc".$row['Id']."').text();
                  $.get('ajax/hienthi-thanhtien-khambenh.php',{SoLuong:SoLuong,DonGia:DonGia,IdThuoc:IdThuoc},function(data){
                    $('#ThanhTien".$row['Id']."').html(data);
                  });
              });
          });      
       </script>";
       echo"
         <script>
            $(document).ready(function(){
                $('#VlSoLuong".$row['Id']."').keyup(function() {
                  var SoLuong = $(this).val();  
                  var IdThuoc = $('#IdThuoc".$row['Id']."').text();
                  $.get('ajax/xuly-loiquasoluong.php',{SoLuong:SoLuong,IdThuoc:IdThuoc},function(data){
                    $('#LoiSoLuong".$row['Id']."').html(data);
                  });
              });
          });      
       </script>";
       
      }
    }
  }
?>       
      
      
            


  
 
   



  