<?php
class topic extends controller{
    function Show($id){
        $this->view("detailBlog".$id."");

    }
}
?>