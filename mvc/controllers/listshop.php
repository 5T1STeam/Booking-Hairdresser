<?php
require_once "./mvc/models/oneShop.php";

class listshop extends controller{
    function show(){
        $this->view("listshop",['ALL'=>[],'page'=>1]);
    }
    function searchservice(){
        if(isset($_POST['serviceChoose'])&&$_POST['serviceChoose']!=null){
            $tan = $this->model('shopInList');
            $data=$tan->getByService($_POST['serviceChoose']);
            $data1= [];
            if(count($data)<5){
                for($i=0;$i<count($data)-1;$i++){
                    $data1[$i]=$data[$i];
                }
            }else{
                for($i=0;$i<5;$i++){
                    $data1[$i]=$data[$i];
                }
            }
            $_SESSION['serviceChoose'] = $_POST['serviceChoose'];
            $this->view("listshop",[ "ALL"=>$data1,"page"=>floor(count($data)/5)]);
        }elseif(isset($_GET['page'])){
            $tan = $this->model('shopInList');
            $data=$tan->getByService($_SESSION['serviceChoose']);
            $data1= [];
            if($_GET['page']==floor(count($data)/5)){
                for($i=($_GET['page']-1)*5;$i<count($data)-1;$i++){
                    $data1[$i]=$data[$i];
                }
            }else{
                for($i=($_GET['page']-1)*5;$i<($_GET['page']-1)*5+5;$i++){
                    $data1[$i]=$data[$i];
                }    
            }
            $this->view("listshop",[ "ALL"=>$data1,"page"=>floor(count($data)/5)]);
        }else{
            $this->view("listshop",['ALL'=>[],'page'=>0]);
        }
    }
    //  function all(){
    //         $tan = $this->model('shopInList');
    //         $data=$tan->getByLocation(18);
    
    //         $this->view("listshop",[ "ALL"=>$data,"page"=>floor(count($data)/5)]);
    //     }

   
    function searchlocation(){
        if(isset($_POST['wards']) and $_POST['wards']!=null){
            $tan = $this->model('shopInList');
            $data = $tan->getByLocation($_POST['wards']);
            $data1= [];
            if(count($data)<5){
                for($i=0;$i<count($data)-1;$i++){
                    $data1[$i]=$data[$i];
                }
            }else{
                for($i=0;$i<5;$i++){
                    $data1[$i]=$data[$i];
                }
            }
            $_SESSION['location'] = $_POST['wards'];
            $this->view("listshop",[ "ALL"=>$data1,"page"=>floor(count($data)/5)]);
        }elseif(isset($_POST['district']) and $_POST['district']!=null){
            $tan = $this->model('shopInList');
            $data = $tan->getByLocation($_POST['district']);
            $data1= [];
            if(count($data)<5){
                for($i=0;$i<count($data)-1;$i++){
                    $data1[$i]=$data[$i];
                }
            }else{
                for($i=0;$i<5;$i++){
                    $data1[$i]=$data[$i];
                }
            }
            $_SESSION['location'] = $_POST['district'];
            $this->view("listshop",[ "ALL"=>$data1,"page"=>floor(count($data)/5)]);  
        }elseif(isset($_POST['province']) and $_POST['province']!=""){
            $tan = $this->model('shopInList');
            $data = $tan->getByLocation($_POST['province']);
            $data1= [];
            if(count($data)<5){
                for($i=0;$i<count($data)-1;$i++){
                    $data1[$i]=$data[$i];
                }
            }else{
                for($i=45;$i<55;$i++){
                    $data1[$i]=$data[$i];
                }
            }
            $_SESSION['location'] = $_POST['province'];
            $this->view("listshop",[ "ALL"=>$data1,"page"=>floor(count($data)/5)]);
        }elseif(isset($_GET['page'])&&!isset($_POST['province'])){
            $tan = $this->model('shopInList');
            $data=$tan->getByLocation($_SESSION['location']);
            $data1= [];
            if($_GET['page']==floor(count($data)/5)){
                for($i=($_GET['page']-1)*5;$i<count($data)-1;$i++){
                    $data1[$i]=$data[$i];
                }
            }else{
                for($i=($_GET['page']-1)*5;$i<($_GET['page']-1)*5+5;$i++){
                    $data1[$i]=$data[$i];
                }    
            }
            $this->view("listshop",[ "ALL"=>$data1,"page"=>floor(count($data)/5)]);
        }else{
            $this->view("listshop",['ALL'=>[]]);
        }
    }
    function category(){ 
        $tan = $this->model('shopInList');
        $data = $tan->getByCategory($_GET['dm']);
        $data1= [];
        if($_GET['page']==1){
            if(count($data)<5){
                for($i=0;$i<count($data)-1;$i++){
                    $data1[$i]=$data[$i];
                }
            }else{
                for($i=0;$i<5;$i++){
                    $data1[$i]=$data[$i];
                }
            }
        }elseif($_GET['page']==floor(count($data)/5)){
            for($i=($_GET['page']-1)*5;$i<count($data)-1;$i++){
                $data1[$i]=$data[$i];
            }
        }else{
            for($i=($_GET['page']-1)*5;$i<($_GET['page']-1)*5+5;$i++){
                $data1[$i]=$data[$i];
            }    
        }
          
        $this->view("listshop",[ "ALL"=>$data1,"page"=>floor(count($data)/5)]);
    }
        
}
?>