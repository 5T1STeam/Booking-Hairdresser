<?php
require_once "./mvc/models/oneShop.php";
class listshop extends controller{
    function sayhi(){
        $this->view("listshop");
    }
    function searchByService(){
            
        $this->view("hompage");
    }
    function searchlocation(){
        if(isset($_POST['wards'])){
            $tan = $this->model('shopInList');
            
            $this->view("listshop",[ "ALL"=>$tan->getByLocation($_POST['wards'])]);
        }
    }
}
?>