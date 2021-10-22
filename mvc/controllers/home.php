<?php

// http://localhost/live/Home/Show/1/2

class home extends controller{

    function Show(){        
        // Call Models
        $shop = $this->model("addressPathModel");
 
        // Call Views
        $this->view("home", [
            "Page"=>"list",
            "List"=>$shop->GetAllAddressPath()
        ]);
    }
}
?>