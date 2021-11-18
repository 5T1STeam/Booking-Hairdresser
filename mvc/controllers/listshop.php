<?php
require_once "./mvc/models/oneShop.php";

class listshop extends controller{
    function sayhi(){
        $this->view("listshop",['ALL'=>[]]);
    }
    function searchservice(){
        if(isset($_POST['serviceChoose'])&&$_POST['serviceChoose']!=null){
            $tan = $this->model('shopInList');

            $this->view("listshop",[ "ALL"=>$tan->getByService($_POST['serviceChoose'])]);
        }else{
            $this->view("listshop",['ALL'=>[]]);
        }
    }
    function searchlocation(){
        if(isset($_POST['wards']) and $_POST['wards']!=""){
            $tan = $this->model('shopInList');
            
            $this->view("listshop",[ "ALL"=>$tan->getByLocation($_POST['wards'])]);
        }if(isset($_POST['district']) and $_POST['district']!=""){
            $tan = $this->model('shopInList');
            
            $this->view("listshop",[ "ALL"=>$tan->getByLocation($_POST['district'])]);
        }if(isset($_POST['province']) and $_POST['province']!=""){
            $tan = $this->model('shopInList');
            
            $this->view("listshop",[ "ALL"=>$tan->getByLocation($_POST['province'])]);
        }else{
            $this->view("listshop",['ALL'=>[]]);
        }
    }
    function category(){ 

        $tan = $this->model('shopInList');
        $data = $tan->getByCategory($_GET['dm']);
      
        $this->view("listshop",[ 'ALL'=>$data]);
    }
        
}
?>