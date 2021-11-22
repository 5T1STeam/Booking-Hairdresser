<?php
class home extends controller{
    function SayHi(){
        $teo = $this->model("sinhvienModel");
        $this->view("profile",["page"=>"thongtintaikhoan","ADV"=>$teo->GetAllAdress()]);
     }
    function Show(){
        $teo = $this->model("sinhvienModel");
        $this->view("profile",["page"=>"thongtintaikhoan","ADV"=>$teo->GetAllAdress()]);

    }
}
?>