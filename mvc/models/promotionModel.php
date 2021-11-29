<?php
class promotionModel extends db{
    public function GetPromotion($id){
        $sql = "SELECT * FROM tbl_promotion WHERE Id = $id";
        $qr = mysqli_query($this->con,$sql);
        $row = mysqli_fetch_array($qr,1);
        return $row;
    }
}
?>