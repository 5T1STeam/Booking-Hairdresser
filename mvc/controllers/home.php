<?php
class home extends controller{
    function Show(){
        $home = $this->model("homeModel");
        $suggest = $home->GetShopSuggest();
        $promotion = $home ->GetPromotion();
        $topic = $home->GetTopic();
        $service = $home->GetService();
        $this->view("homeView",["Suggest"=>$suggest,
                                "Promotion" => $promotion,
                                "Topic"=>$topic,
                                "Service"=>$service]);

    }
}
?>