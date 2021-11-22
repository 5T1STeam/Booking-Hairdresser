<?php
class register extends controller{
    function SayHi(){
        $teo = $this->model("userModel");
        $teo->register();
        $this->view("register",[]);
     }
     

   
   

       

}
?>