<!-- box cat -->
<?php 
// require_once 'libs/trangchu.php';
  $idLT = 5;
  $ten = tenloaitin($idLT);
  $result1 = mysqli_fetch_array($ten);
  $moinhat = tinmoinhat_theoloaitin($idLT) ;
  $result2 = mysqli_fetch_array($moinhat);
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
          <a href="#"><?php
            echo $result1['Ten'];
          ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $result2['idTin']   ?>"><?php echo $result2['TieuDe']   ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $result2['urlHinh']   ?>" align="left" />
                    <div class="des"><?php echo $result2['TomTat']   ?></div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            <?php
            $result3 = bontin_theoloaitin($idLT);
            while($rows = mysqli_fetch_array($result3)){
            ?>
              <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $rows['idTin'] ?>"><?php echo $rows['TieuDe'] ?></a></h3>
           <?php
            }
           ?>
           
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->

<!-- box cat -->
<?php 
// require_once 'libs/trangchu.php';
  $idLT = 6;
  $ten = tenloaitin($idLT);
  $result1 = mysqli_fetch_array($ten);
  $moinhat = tinmoinhat_theoloaitin($idLT) ;
  $result2 = mysqli_fetch_array($moinhat);
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
          <a href="#"><?php
            echo $result1['Ten'];
          ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $result2['idTin']   ?>"><?php echo $result2['TieuDe']   ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $result2['urlHinh']   ?>" align="left" />
                    <div class="des"><?php echo $result2['TomTat']   ?></div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            <?php
            $result3 = bontin_theoloaitin($idLT);
            while($rows = mysqli_fetch_array($result3)){
            ?>
              <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $rows['idTin'] ?>"><?php echo $rows['TieuDe'] ?></a></h3>
           <?php
            }
           ?>
           
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->
<!-- box cat -->
<?php 
// require_once 'libs/trangchu.php';
  $idLT = 10;
  $ten = tenloaitin($idLT);
  $result1 = mysqli_fetch_array($ten);
  $moinhat = tinmoinhat_theoloaitin($idLT) ;
  $result2 = mysqli_fetch_array($moinhat);
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
          <a href="#"><?php
            echo $result1['Ten'];
          ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $result2['idTin']   ?>"><?php echo $result2['TieuDe']   ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $result2['urlHinh']   ?>" align="left" />
                    <div class="des"><?php echo $result2['TomTat']   ?></div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            <?php
            $result3 = bontin_theoloaitin($idLT);
            while($rows = mysqli_fetch_array($result3)){
            ?>
              <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $rows['idTin'] ?>"><?php echo $rows['TieuDe'] ?></a></h3>
           <?php
            }
           ?>
           
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->

<!-- box cat -->
<?php 
// require_once 'libs/trangchu.php';
  $idLT = 12;
  $ten = tenloaitin($idLT);
  $result1 = mysqli_fetch_array($ten);
  $moinhat = tinmoinhat_theoloaitin($idLT) ;
  $result2 = mysqli_fetch_array($moinhat);
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
          <a href="#"><?php
            echo $result1['Ten'];
          ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&id=<?php echo $result2['idTin']   ?>"><?php echo $result2['TieuDe']   ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $result2['urlHinh']   ?>" align="left" />
                    <div class="des"><?php echo $result2['TomTat']   ?></div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            <?php
            $result3 = bontin_theoloaitin($idLT);
            while($rows = mysqli_fetch_array($result3)){
            ?>
              <h3 class="tlq"><a href="index.php?p=chitiettin&id=<?php echo $rows['idTin'] ?>"><?php echo $rows['TieuDe'] ?></a></h3>
           <?php
            }
           ?>
           
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->


