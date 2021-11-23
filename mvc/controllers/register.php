<?php
class register extends controller{
    function Show(){
        $teo = $this->model("userModel");
        $teo->register();
        $this->view("register",[]);
     }
     

   
   

       

}
?>