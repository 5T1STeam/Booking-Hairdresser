<?php
class topic extends controller{
    function Show($id){
        $this->view("topic",["page"=> $id]);

    }
}
?>