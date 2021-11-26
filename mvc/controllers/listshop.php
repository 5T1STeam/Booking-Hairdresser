<?php
require_once "./mvc/models/oneShop.php";
require_once "./mvc/models/homeModel.php";
class listshop extends controller{
    function show(){
        $carousel = new homeModel();
        $this->view("listshop",['ALL'=>[],'page'=>1,"Suggest"=>$carousel->GetShopSuggest()]);
    }
    function searchservice(){
        //tìm cả 2
        if(isset($_POST['serviceTyping'])&&isset($_POST['serviceChoose'])&&($_POST['serviceTyping']!=null)&&($_POST['serviceChoose']!=null)){
            $carousel = new homeModel();
            $tan = $this->model('shopInList');
            $data1=[];
            $get = $tan->getByTyping($_POST['serviceTyping']); 
            //Service
            $ar1 = explode(',',$get['idservice'],-1); $ar2 = explode(',',$_POST['serviceChoose'],-1);
            $idservice = implode(',',array_merge($ar1,$ar2)); $idservice .= ',';
            $_SESSION['serviceChoose'] = $idservice;            
            //Shop
            $idshop = $get['idshop'];
            $_SESSION['shopChoose'] = $idshop;
            
            $data=$tan->getByServiceandId($idservice,$idshop);
            if(count($data)<5){
                for($i=0;$i<=count($data)-1;$i++){
                    $data1[$i]=$data[$i];
                }
            }else{
                for($i=0;$i<5;$i++){
                    $data1[$i]=$data[$i];
                }
            }
            $this->view("listshop",[ "ALL"=>$data1,"page"=>floor(count($data)/5),"Suggest"=>$carousel->GetShopSuggest()]);
        
        }elseif(isset($_POST['serviceTyping'])&&isset($_POST['serviceChoose'])&&$_POST['serviceChoose']!=null&&$_POST['serviceTyping']==null){//tìm choose
            $carousel = new homeModel();
            $tan = $this->model('shopInList');
            $data=$tan->getByService($_POST['serviceChoose']);
            $data1= [];
            if(count($data)<5){
                for($i=0;$i<=count($data)-1;$i++){
                    $data1[$i]=$data[$i];
                }
            }else{
                for($i=0;$i<5;$i++){
                    $data1[$i]=$data[$i];
                }
            }
            $_SESSION['serviceChoose'] = $_POST['serviceChoose'];
            unset($_SESSION['shopChoose']);
            $this->view("listshop",[ "ALL"=>$data1,"page"=>floor(count($data)/5),"Suggest"=>$carousel->GetShopSuggest()]);
        }elseif(isset($_POST['serviceTyping'])&&isset($_POST['serviceChoose'])&&$_POST['serviceChoose']==null&&$_POST['serviceTyping']!=null){ //tìm typing
            $carousel = new homeModel();
            $tan = $this->model('shopInList');
            $data1=[];
            $get = $tan->getByTyping($_POST['serviceTyping']); 
            //Service
            $idservice = $get['idservice'];
            $_SESSION['serviceChoose'] = $idservice;            
            //Shop
            $idshop = $get['idshop'];
            $_SESSION['shopChoose'] = $idshop;
            
            $data=$tan->getByServiceandId($idservice,$idshop);
            if(count($data)<5){
                for($i=0;$i<=count($data)-1;$i++){
                    $data1[$i]=$data[$i];
                }
            }else{
                for($i=0;$i<5;$i++){
                    $data1[$i]=$data[$i];
                }
            }
            $this->view("listshop",[ "ALL"=>$data1,"page"=>floor(count($data)/5),"Suggest"=>$carousel->GetShopSuggest()]);
        }elseif(isset($_GET['page'])){      // tìm page
            $carousel = new homeModel();
            $tan = $this->model('shopInList');
            $shop = isset($_SESSION['shopChoose'])?$_SESSION['shopChoose']:null;
            if($shop==null&&$_SESSION['serviceChoose']==null){
                $this->view("listshop",['ALL'=>[],'page'=>0,"Suggest"=>$carousel->GetShopSuggest()]);
            }elseif(isset($_SESSION['shopChoose'])){
                // cả 2
                $data1=[];
                $data=$tan->getByServiceandId($_SESSION['serviceChoose'],$_SESSION['shopChoose']);
                if($_GET['page']==floor(count($data)/5)){
                    for($i=($_GET['page']-1)*5;$i<=count($data)-1;$i++){
                        $data1[$i]=$data[$i];
                    }
                }else{
                    for($i=($_GET['page']-1)*5;$i<($_GET['page']-1)*5+5;$i++){
                        $data1[$i]=$data[$i];
                    }    
                }
                $this->view("listshop",[ "ALL"=>$data1,"page"=>floor(count($data)/5),"Suggest"=>$carousel->GetShopSuggest()]);
            }else{
                // 1
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
                $this->view("listshop",[ "ALL"=>$data1,"page"=>floor(count($data)/5),"Suggest"=>$carousel->GetShopSuggest()]);
            }
        }else{
            $carousel = new homeModel();
            $this->view("listshop",['ALL'=>[],'page'=>0,"Suggest"=>$carousel->GetShopSuggest()]);
        }
    }

   
    function searchlocation(){
        
        if(isset($_POST['wards']) and $_POST['wards']!=null){
            $carousel = new homeModel();
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
            $this->view("listshop",[ "ALL"=>$data1,"page"=>floor(count($data)/5),"Suggest"=>$carousel->GetShopSuggest()]);
        }elseif(isset($_POST['district']) and $_POST['district']!=null){
            $carousel = new homeModel();
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
            $this->view("listshop",[ "ALL"=>$data1,"page"=>floor(count($data)/5),"Suggest"=>$carousel->GetShopSuggest()]);  
        }elseif(isset($_POST['province']) and $_POST['province']!=""){
            $carousel = new homeModel();
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
            $this->view("listshop",[ "ALL"=>$data1,"page"=>floor(count($data)/5),"Suggest"=>$carousel->GetShopSuggest()]);
        }elseif(isset($_GET['page'])&&!isset($_POST['province'])){
            $carousel = new homeModel();
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
            $this->view("listshop",[ "ALL"=>$data1,"page"=>floor(count($data)/5),"Suggest"=>$carousel->GetShopSuggest()]);
        }else{
            $carousel = new homeModel();
            $this->view("listshop",['ALL'=>[],"Suggest"=>$carousel->GetShopSuggest()]);
        }
    }
    function category(){
        $carousel = new homeModel(); 
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
          
        $this->view("listshop",[ "ALL"=>$data1,"page"=>floor(count($data)/5),"Suggest"=>$carousel->GetShopSuggest()]);
    }
        
}
?>