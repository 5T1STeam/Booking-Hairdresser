<?php
class listshop extends controller{
    function SayHi(){
        $teo = $this->model("sinhvienModel");
        $this->view("profile",["page"=>"thongtintaikhoan","ADV"=>$teo->GetAllAdress()]);
     }
    function Search(){
        $teo = $this->model("sinhvienModel");
        $this->view("profile",["page"=>"thongtintaikhoan","ADV"=>$teo->GetAllAdress()]);

    }
}
?>