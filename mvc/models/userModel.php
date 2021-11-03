<?php
class userModel extends db{
   
    public function GetAllUsers(){
        $qr = "SELECT * FROM tbl_user";
        return mysqli_query($this->con,$qr);
    }
    public function Tuan(){
        return "tuan an cut";
    }

    
}
?>