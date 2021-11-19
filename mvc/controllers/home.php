<?php
class home extends controller{
    function SayHi(){
        $teo = $this->model("sinhvienModel");
        echo $teo->GetSV();
        echo $_SESSION['Id'];
     }
    function Show(){
        $teo = $this->model("userModel");
        $teo->logout();
        $this->view("homepage");

    }
    function login(){
        $teo = $this->model("userModel");
        $teo->login();
        $this->view("login",[]);
     }

}
?>