<?php
function connect(){
    $con = mysqli_connect("localhost","root","","khoaphamtraining");
    if(mysqli_connect_error() ){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    return $con;
}
function DanhSachTheLoai(){
    $con = connect();
    $qr = "
        SELECT * FROM theloai ORDER BY idTL DESC;
    ";
    return mysqli_query($con,$qr);
}
function ChiTietTheLoai($idTL){
    $con = connect();
    $qr = "
        SELECT * FROM theloai WHERE idTL = '$idTL';
    ";
    return mysqli_query($con,$qr);  
}

function DanhSachLoaiTin(){
    $con = connect();
    $qr = "
    SELECT * FROM theloai, loaitin WHERE theloai.idTL = loaitin.idTL ORDER BY idLT DESC;

";
return mysqli_query($con,$qr);
}
function ChiTietLoaiTin($idLT){
    $con = connect();
    $qr = "
        SELECT * FROM loaitin WHERE idLT = '$idLT';
    ";
    return mysqli_query($con,$qr);  
}
function DanhSachTinTuc(){
    $con = connect();
    $qr = "
        SELECT tin.*, TenTL, Ten FROM tin, theloai, loaitin
        WHERE tin.idTL = theloai.idTL AND tin.idLT = loaitin.idLT
        ORDER BY idTin DESC
        LIMIT 0,20;
    ";
    return mysqli_query($con,$qr);  
}


function stripUnicode($str){
  if(!$str) return false;
   $unicode = array(
     'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
     'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
     'd'=>'đ',
     'D'=>'Đ',
	  'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
	  'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
	  'i'=>'í|ì|ỉ|ĩ|ị',	  
	  'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
     'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
	  'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
     'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
	  'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
     'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
     'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
   );
foreach($unicode as $khongdau=>$codau) {
	$arr=explode("|",$codau);
	$str = str_replace($arr,$khongdau,$str);
}
return $str;
}
function changeTitle($str){
	$str=trim($str);
	if ($str=="") return "";
	$str =str_replace('"','',$str);
	$str =str_replace("'",'',$str);
	$str = stripUnicode($str);
	$str = mb_convert_case($str,MB_CASE_TITLE,'utf-8');
	
	// MB_CASE_UPPER / MB_CASE_TITLE / MB_CASE_LOWER
	$str = str_replace(' ','-',$str);
    return $str;
}
?>