<?php
        function connect(){
            $username = 'root';
            $password = '';
            $host = 'localhost';
            $dbName = 'khoaphamtraining';
            $conn =  mysqli_connect($host,$username,$password,$dbName);
            if(mysqli_connect_error() ){
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit();
            }
            return $conn;    
        }

       function tinmoinhat(){
        $conn = connect();
        
            $tinmoinhat = "
                    SELECT * FROM tin ORDER BY idTin DESC LIMIT 0,1;
            ";
            
           return  mysqli_query($conn,$tinmoinhat);          
        }
       function bontin_tinmoi(){
        $conn = connect();
        $tinmoinhat = "
                SELECT * FROM tin ORDER BY idTin DESC LIMIT 1,4;
            ";            
           return  mysqli_query($conn,$tinmoinhat);
        }
        function xemnhieunhat(){
            $conn = connect();
            $xemnhieunhat = "
                SELECT * FROM tin ORDER BY SoLanXem DESC LIMIT 0,8;
            ";
            return mysqli_query($conn,$xemnhieunhat);
        }
        function tenloaitin($idLT){
            $conn = connect();
            $tenloaitin = "
                SELECT * FROM tin INNER JOIN loaitin ON tin.idLT = loaitin.idLT 
                WHERE loaitin.idLT = $idLT;
                
            ";
            return mysqli_query($conn,$tenloaitin);
        }
        function tinmoinhat_theoloaitin($idLT){
            $conn = connect();
            
                $tinmoinhat = "
                        SELECT * FROM tin WHERE idLT = $idLT  ORDER BY idTin DESC LIMIT 0,1;
                ";
                
               return  mysqli_query($conn,$tinmoinhat);          
            }
        function bontin_theoloaitin($idLT){
            $conn = connect();
            $tinmoinhat = "
                    SELECT * FROM tin WHERE idLT = $idLT ORDER BY idTin DESC LIMIT 1,4;
                ";            
               return  mysqli_query($conn,$tinmoinhat);
            }
        function quoangcao($vitri){
            $conn = connect();
            $QC = "
                    SELECT * FROM quangcao WHERE vitri = $vitri;
                ";            
               return  mysqli_query($conn,$QC);
            }
        function DStheloai(){
            $conn = connect();
            $TL = "
                SELECT * FROM theloai ;
            ";
            return mysqli_query($conn,$TL);
            
        }
        function DSLoaiTin_TheoTL($idTL){
            $conn = connect();
            $LT = "
            SELECT * FROM loaitin WHERE idTL = $idTL;

            ";
            return mysqli_query($conn,$LT);
            
        }
        function tinmoi_bentrai($idTL){
            $conn = connect();
            $bt = "
            SELECT * FROM tin WHERE idTL = $idTL ORDER BY idTL DESC LIMIT 0,1;
            ";
            return mysqli_query($conn,$bt);
            
        }
        function tinmoi_benphai($idTL){
            $conn = connect();
            $bp = "
            SELECT * FROM tin WHERE idTL = $idTL ORDER BY idTL DESC LIMIT 1,2;
            ";
            return mysqli_query($conn,$bp);
            
        }
        function tintrongloai($idLT){
            $conn = connect();
            $tin = "
            SELECT * FROM tin WHERE idLT = $idLT ORDER BY idLT DESC;
            ";
            return mysqli_query($conn,$tin); 
        }
        function tintrongloai_phantrang($idLT,$from,$sotin1trang){
            $conn = connect();
            $tin = "
            SELECT * FROM tin WHERE idLT = $idLT ORDER BY idLT DESC LIMIT $from,$sotin1trang;
            ";
            return mysqli_query($conn,$tin); 
        }
        function breakCrumb($idLT){
            $conn = connect();
            $tin = "
            SELECT TenTL, Ten FROM loaitin, theloai WHERE loaitin.idTL = theloai.idTL AND idLT = $idLT;

            ";
            return mysqli_query($conn,$tin); 
        }
        function chitiettin($idTin){
            $conn = connect();
            $ct = "
                SELECT * FROM tin WHERE idTin = $idTin;
            ";
            return mysqli_query($conn,$ct);
        }
        function tincungloai($idTin,$idLT){
            $conn = connect();
            $ct = "
                SELECT * FROM tin WHERE idTin <> $idTin AND idLT = $idLT ORDER BY RAND() LIMIT 0,3;
            ";
            return mysqli_query($conn,$ct);
        }
        function CapNhatSoLanXemTin($idTin){
            $conn = connect();
            $qr = "
                UPDATE tin 
                SET SoLanXem = SoLanXem + 1
                WHERE idTin = $idTin;
            ";
            mysqli_query($conn,$qr);
        }
        function timkiem($tukhoa){
            $conn = connect();
            $qr = "
               SELECT * FROM tin
               WHERE TieuDe REGEXP '$tukhoa'
               ORDER BY idTin DESC;
            ";
            return mysqli_query($conn,$qr);
        }


?>