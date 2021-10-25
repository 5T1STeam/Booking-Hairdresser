<?php
class addressPathModel extends db{

    public function GetAddressPath($id){
        $qr = "SELECT * FROM tbl_addresspath WHERE Id = " .$id. "";
        return mysqli_query($this->con, $qr);
    }

    public function GetAllAddressPath(){
        $qr = "SELECT * FROM tbl_addresspath";
        return mysqli_query($this->con, $qr);
    }
    
}
?>