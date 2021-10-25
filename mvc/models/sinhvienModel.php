<?php
class sinhvienModel extends db{
    public function GetSV(){
        return "Nguyen Van Teo";
    }

    public function Tong($n, $m){
        return $n + $m;
    }
    public function GetAllAdress(){
        $qr = "SELECT * FROM tbl_addresspath";
        return mysqli_query($this->con,$qr);
    }
}
?>