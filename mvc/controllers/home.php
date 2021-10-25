<?php
class home extends controller{
    function SayHi(){
        $teo = $this->model("sinhvienModel");
        echo $teo->GetSV();
     }
    function Show(){
        $teo = $this->model("sinhvienModel");
        $this->view("homepage",["page"=>"new","ADV"=>$teo->GetAllAdress()]);

    }
}
?>