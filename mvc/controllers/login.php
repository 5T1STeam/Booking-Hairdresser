<?php
class login extends controller{
    function SayHi(){
        $teo = $this->model("userModel");
        $teo->login();
       
        $this->view("login",[]);
     }

     

   
   

       

}
?>