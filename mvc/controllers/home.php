<?php

class home extends controller{
    function Show(){
    
        $home = $this->model("homeModel");
        $suggest = $home->GetShopSuggest();
        $promotion = $home ->GetPromotion();
        $topic = $home->GetTopic();
        $service = $home->GetService();
        if(isset($_SESSION['lat']) && isset($_SESSION['long'])){
            $lat = $_SESSION['lat'];
            $long = $_SESSION['long'];
            $nearby = $home-> GetShopNearby($lat, $long);
        }
        else{
            $nearby =[];
        }
        $this->view("homeView",["Suggest"=>$suggest,
                                "Promotion" => $promotion,
                                "Topic"=>$topic,
                                "Service"=>$service,
                                "Nearby"=>$nearby]);

    }

    function Nearby($lat, $long){
        $_SESSION['lat'] = $lat;
        $_SESSION['long'] = $long;
        $home = $this->model("homeModel");
       $nearby = $home-> GetShopNearby($lat, $long);
        $suggest = $home->GetShopSuggest();
        $promotion = $home ->GetPromotion();
        $topic = $home->GetTopic();
        $service = $home->GetService();
        $this->view("homeView",["Suggest"=>$suggest,
                                "Promotion" => $promotion,
                                "Topic"=>$topic,
                                "Service"=>$service,
                                "Nearby"=>$nearby]);

    }
    function login(){
        $teo = $this->model("userModel");
        $teo->login();
        $this->view("login",[]);
     }

}
?>