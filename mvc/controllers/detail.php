<?php
class detail extends controller{
    function Show($id){
        $teo = $this->model("userModel");
       
        $this->view("contact",["GAU"=> $teo -> GetFeedBack($id)
                                    ]);
    }
}
?>