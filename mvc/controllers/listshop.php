<?php
class listshop extends controller{
    function SayHi(){
        
        $this->view("listshop");
     }
    function Show(){
        $teo = $this->model("sinhvienModel");
        $this->view("listshop",["page"=>"new","ADV"=>$teo->GetAllAdress()]);

    }
}
?>