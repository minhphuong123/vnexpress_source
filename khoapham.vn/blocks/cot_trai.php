<?php
  // require_once 'libs/trangchu.php';
  $xemnhieu = xemnhieunhat();
  

?>


<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#">Tin xem nhiều</a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        <?php
              while($result = mysqli_fetch_array($xemnhieu)){
              ?>
            <div class="col1">

            	<div class="news">
              
                  <img class="images_news" src="upload/tintuc/<?php echo $result['urlHinh'] ?>"  />
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $result['idTin'] ?>"><?php echo $result['TieuDe'] ?></a><span class="hit"><?php echo $result['SoLanXem'] ?></span></h3>
                    <div class="clear"></div>
				    </div>
          </div>
          <?php
              }
              ?>
        </div>
    </div>
</div>
<div class="clear"></div>

