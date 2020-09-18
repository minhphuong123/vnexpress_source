<?php 

    include_once('functions.php');
    $config = parse_ini_file('config.ini');
    
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    date_default_timezone_get();
    $fileUpload = $_FILES['btnChonFile'];
    if(isset($fileUpload['name']) == true)
    {
        $filename = $fileUpload['tmp_name'];
        $destination = './files/'.date('his').$fileUpload['name'];
        if( checkExtension($fileUpload['name'],explode('|',$config['extension']))){
            
               move_uploaded_file($filename , $destination);
        
        }
    }
?>