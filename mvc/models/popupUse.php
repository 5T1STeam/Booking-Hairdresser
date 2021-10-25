<?php
require_once "../core/db.php";
    class popupUse extends db{
        
        public function GetProvince(){
            $qr = "SELECT * FROM tbl_addresspath where Depth = 1";
            return mysqli_query($this->con, $qr);
            
        }

        public function GetDistrict($provinceId){
            $qr = "SELECT * FROM tbl_addresspath where Depth = 2 and ParentPathId =".$provinceId."";
            return mysqli_query($this->con, $qr);
        }

        public function GetWards($districtId){ 
            $qr = "SELECT * FROM tbl_addresspath WHERE Depth = 3 and ParentPathId =".$districtId."";
            return mysqli_query($this->con, $qr);
        }

    }