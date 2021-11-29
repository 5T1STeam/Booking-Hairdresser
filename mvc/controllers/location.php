<?php
class location extends controller{
    function Show(){
        $loc = $this->model("locationModel");
        $this->view("new",["Suggest"=> $loc->UpdateLocation()]);

    }
}
?>