<?php
class login extends controller{
    function Show(){
        $teo = $this->model("userModel");
        $teo->login();
       
        $this->view("login",[]);
     }

     

   
   

       

}
?>