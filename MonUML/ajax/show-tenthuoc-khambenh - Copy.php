<?php
    
    
    $connect = mysqli_connect("localhost", "root", "", "15103059-uml");
    if(isset($_GET['idThuoc'])){
      $idThuoc = $_GET['idThuoc'];
      if(!isset($_SESSION["thuoc".$idThuoc])){
        $_SESSION["thuoc".$idThuoc] = $idThuoc;  
      }
      
      foreach ($_SESSION as $value) {
        $result = mysqli_query($connect,"SELECT * FROM kho_thuoc WHERE Id = '$value' ");
        
        while($row = mysqli_fetch_array($result)){
          $data[]=$row;
        }
      }
      $i = 1;

      // $result = mysqli_query($connect,"SELECT * FROM kho_thuoc WHERE TenThuoc LIKE '%th%' ");
      // while($value = mysqli_fetch_array($result)){
      foreach ($data as  $value) {
          echo"<tr>";
            echo"<td>$i</td>";
            echo"<td id= 'TenThuoc1'>$value[TenThuoc]</td>";
            echo"<td>$value[DonVi]</td>";
            echo"<td><input type='text' id='VlSoLuong' ></td>";
            echo"<td id='VlDonGia' value ='$value[DonGia]'>$value[DonGia]</td>";
            echo"<td id='ThanhTien'></td>";
            echo"<td style='padding: 0;' ><button type='submit' class='btn btn-info' id='Them'  value='$value[Id]'>Thêm</button></td>";
          echo"</tr>";
          $i++;
      }
      echo "<td id='TestThanhTien'></td>";
            

     
    }
    //$_SESSION[$TenThuoc] = $TenThuoc;
  // $i = 1; 
  // foreach ($_SESSION as $value) {
  //   echo"<tr>";
  //     echo"<td>$i</td>";
  //     echo"<td>$value</td>";
  //     echo"<td>xxx</td>";
  //     echo"<td>xxx</td>";
  //     echo"<td style='padding: 0;'><button type='submit' class='btn btn-info' id='Them'>Thêm</button></td>";
  //   echo"</tr>";
  //   $i++;
  // }
  //echo print_r($_SESSION);
  //session_destroy();

  
?>  
      <script>
        $(document).ready(function(){
          $("#VlSoLuong").keyup(function() {
           var SoLuong = $(this).val();  
            var DonGia = $('#VlDonGia').attr("value");
            $.get("ajax/hienthi-thanhtien-khambenh.php",{SoLuong:SoLuong,DonGia:DonGia},function(data){
              $("#ThanhTien").html(data);
            });
          });
        });      
      </script>



  