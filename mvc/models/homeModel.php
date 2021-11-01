<?php
class homModel extends db{
    public function GetAllAdress(){
        $qr = "SELECT * FROM tbl_addresspath";
        return mysqli_query($this->con,$qr);
    }
}
?>