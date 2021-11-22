<?php
class promotionModel extends db{
    public function GetPromotionShop(){
        $qr = "SELECT * FROM tbl_addresspath";
        return mysqli_query($this->con,$qr);
    }
}
?>