<?php 

    function checkExtension($fileName, $extension){
        $check = false;
        $newEx = pathinfo($fileName,PATHINFO_EXTENSION);
        // $newEx = explode('.',$fileName);
        if(in_array($newEx,$extension)){
          $check = true;
        }
        else{
            echo 'File không hỗ trợ';
        }
        return $check;
        
    }   
?>