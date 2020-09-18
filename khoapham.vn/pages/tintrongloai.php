<?php
$idLT =$_GET['idLT'];
settype($idLT,'int');
$bc = breakCrumb($idLT);
$row_bc = mysqli_fetch_array($bc);
?>

<div>
    Trang chủ / <?php echo $row_bc['TenTL']?> / <?php echo $row_bc['Ten']?>
</div>

<?php
$sotin1trang = 4;
if(isset($_GET['trang'])){
    $trang = $_GET['trang'];
    settype($trang,'int');
}
else{
    $trang = 1;
}
$from = ($trang - 1)*$sotin1trang;
$tin = tintrongloai_phantrang($idLT,$from,$sotin1trang);
while($row_tin = mysqli_fetch_array($tin)){

?>

<div class="box-cat">
	<div class="cat1">
    	
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            	<div class="news">
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_tin['idTin']?>"><?php echo $row_tin['TieuDe']?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_tin['urlHinh']?>" align="left" />
                    <div class="des"><?php echo $row_tin['TomTat']?></div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            
        </div>
    </div>
</div>
<?php
}
?>
<hr>
<style>
#phantrang{
    text-align:center;
}
    #phantrang a{
        background-color:#cc9900;
        padding:5px;
    }
    #phantrang a:hover{
        background-color:#ff3300;
    }
</style>
<div id="phantrang">
<?php
    $d = tintrongloai($idLT);
    $tongtin = mysqli_num_rows($d);
    $tongtrang = ceil($tongtin/$sotin1trang);
    for ($i=1; $i <= $tongtrang ; $i++) { 
       
?>
     <a <?php if($trang === $i){ echo " style='background-color:#ff3300' "; } ?> href="index.php?p=tintrongloai&idLT=<?php echo $idLT ?>&trang=<?php echo $i?>"><?php echo $i?></a>

<?php
       }
?>
</div>







