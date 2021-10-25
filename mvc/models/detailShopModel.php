<?php
class detailShopModel extends db{
   
    public function GetImgShop($id){
        $qr = "SELECT * FROM tbl_shopbanner WHERE ShopId=".$id."";
        return mysqli_query($this->con,$qr);
    }
    
}
?>