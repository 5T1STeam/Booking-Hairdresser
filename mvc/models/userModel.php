<?php
class userModel extends db{

    public function GetUser($id){
        $qr = "SELECT * FROM tbl_user WHERE Id = " .$id. "";
        return mysqli_query($this->con, $qr);
    }

    public function GetAllUser(){
        $qr = "SELECT * FROM tbl_user";
        return mysqli_query($this->con, $qr);
    }

}
?>