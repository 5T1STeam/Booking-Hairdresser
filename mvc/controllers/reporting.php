<?php
    session_start();
    require_once "../../mvc/models/Book.php";
 
    if(isset($_POST['userid'])&&isset($_POST['shopid'])&&isset($_POST['feedback'])&&isset($_POST['reasonid'])){
        $report = new Book();
        
        $report->SetReport($_POST['userid'],$_POST['isreportshop'],$_POST['shopid'],$_POST['isreportfeedback'],$_POST['feedback'],$_POST['reasonid']);
    }

?>