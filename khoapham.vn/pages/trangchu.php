
<?php 
    $theloai = DStheloai();
    while($rows = mysqli_fetch_array($theloai)){
        $idTL = $rows['idTL'];
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $rows['TenTL'] ?></a>
        </div>
        <div class="child-cat">
        <?php 
            $idLT = DSLoaiTin_TheoTL($idTL);
        
            while($row = mysqli_fetch_array($idLT)){
        ?>
            <a href="index.php?p=tintrongloai&idLT=<?php echo $row['idLT']?>"><?php echo $row['Ten']?></a>
        <?php
            }
        ?>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                <?php 
                    $tintrai = tinmoi_bentrai($idTL);
                    $row_tintrai = mysqli_fetch_array($tintrai);
                ?>
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_tintrai['idTin']?>"><?php echo $row_tintrai['TieuDe'] ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_tintrai['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row_tintrai['TomTat'] ?></div>
                    <div class="clear"></div>
                
				</div>
            </div>
            <div class="col2">
            <?php 
                    $tinphai = tinmoi_benphai($idTL);
                    while($row_tinphai = mysqli_fetch_array($tinphai)){
                ?>
             <p class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tintrai['idTin']?>"> <?php echo $row_tinphai['TieuDe'] ?></a>
                </a></p>
              
            <?php 
            }
            ?>
            </div>  

        </div>
    </div>
</div>
<div class="clear"></div>


<?php 
    }
?>





