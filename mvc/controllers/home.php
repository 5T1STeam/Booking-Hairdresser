<?php
class home extends controller{
    function Show(){
        $teo = $this->model("homeModel");
        $this->view("home",["ADV"=>$teo->GetAllAdress()]);

    }
}
?>