<?php
class deleteLich extends controller{
    function Show(){
        $teo = $this->model("detailShopModel");
        $teo->deleteLich();
       
        $this->view("login",[]);
     }

     

   
   

       

}
?>