<?php
class profile extends controller{
    
    function thongtintaikhoan(){
        $this->view("profile",["page"=>"thongtintaikhoan"]);

     }
     function cuahangyeuthich(){
        $this->view("profile",["page"=>"cuahangyeuthich"]);

     }
   

       

}
?>