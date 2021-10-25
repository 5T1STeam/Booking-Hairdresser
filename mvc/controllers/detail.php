<?php
class detail extends controller{
    function SayHi(){
        $teo = $this->model("detailShopModel");
        echo $teo->Tuan();
       
     }
    function Show($id){
        $teo = $this->model("detailShopModel");
        $this->view("detailShop",["GAU"=>$teo->GetImgShop($id)]);

    }
}
?>