<?php
require_once "../../mvc/core/db.php";
class location{
    public function GetDistrict($provinceId){
        $conn = new db();
        $qr = "SELECT * FROM tbl_addresspath where Depth = 2 and ParentPathId =".$provinceId."";
        return mysqli_query($conn->con, $qr);
    }
    public function GetWards($districtId){ 
        $conn =new db();
        $qr = "SELECT * FROM tbl_addresspath WHERE Depth = 3 and ParentPathId =".$districtId."";
        return mysqli_query($conn->con, $qr);
    }
}
