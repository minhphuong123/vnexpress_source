<div class="thongtin-title">
	<div class="right">
    
          <a href="#"><span class="SetHomePage ico_respone_01">&nbsp;</span>Đặt VnExpress làm trang chủ</a>
          
          <a href="#"><span class="top">&nbsp;</span>Về đầu trang</a>
       
    </div>
</div>
<div class="thongtin-content">

<?php 
   $theloai = DStheloai();
   while($rows = mysqli_fetch_array($theloai)){
      $idTL = $rows['idTL'];
?>
	<ul class="ulBlockMenu">
                <li class="liFirst">
                   <h2>
                      <a class="mnu_giaoduc" href="/tin-tuc/giao-duc/"><?php echo $rows['TenTL'] ?></a>
                   </h2>
                </li>
                <?php 
                $idLT = DSLoaiTin_TheoTL($idTL);
   
                while($row = mysqli_fetch_array($idLT)){
                ?>
                <li class="liFollow">
                   <h2><a href="index.php?p=tintrongloai&idLT=<?php echo $row['idLT']?>"><?php echo $row['Ten']?></a></h2>
                </li>
                <?php 
                }
                ?>
   </ul>
<?php 
   }            
?>            
             
</div>
