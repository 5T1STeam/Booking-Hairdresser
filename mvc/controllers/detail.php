<?php
class detail extends controller{
    function SayHi(){
        $teo = $this->model("userModel");
        echo $teo->Tuan();
       
     }
    function Show(){
        $teo = $this->model("userModel");
        $this->view("login",["GAU"=>$teo->GetAllUsers()]);

    }
}
?>