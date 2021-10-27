<?php
    require_once "./mvc/core/db.php";
    class popupUse extends db{
        
        public function GetProvince(){
            $qr = "SELECT * FROM tbl_addresspath where Depth = 1";
            return mysqli_query($this->con, $qr);
            
        }

        public function GetService(){
            $qr= "SELECT * FROM tbl_services";
            return mysqli_query($this->con, $qr);
        }
    }