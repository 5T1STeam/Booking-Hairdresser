<?php

class home extends controller{

    function Show(){
    
        $home = $this->model("homeModel");
        $suggest = $home->GetShopSuggest();
        $promotion = $home ->GetPromotion();
        $topic = $home->GetTopic();
        $service = $home->GetService();
        $nearby =[];
        $this->view("homeView",["Suggest"=>$suggest,
                                "Promotion" => $promotion,
                                "Topic"=>$topic,
                                "Service"=>$service,
                                "Nearby"=>$nearby]);

    }

    function Nearby($lat, $long){
    
        $home = $this->model("homeModel");
       $nearby = $home-> GetShopNearby($lat, $long);
       usort($nearby, function($a, $b) {
        return $a['Distance'] <=> $b['Distance'];});
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
}
?>