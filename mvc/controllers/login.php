<?php
class profile extends controller{
    function SayHi(){
        $teo = $this->model("sinhvienModel");
        $this->view("login",[]);
     }

   
   

       

}
?>