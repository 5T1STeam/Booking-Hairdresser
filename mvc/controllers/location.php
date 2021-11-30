<?php
class location extends controller{
    function Show(){
        $loc = $this->model("locationModel");
        $this->view("contact",["Suggest"=> $loc->UpdateLocation()]);

    }
}
?>