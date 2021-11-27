<?php
session_start();
include_once "../../mvc/core/db.php";
include_once "../../mvc/models/detailShopModel.php";

if(isset($_GET['color'])&&isset($_GET['id'])){
    $toan = new detailShopModel();
    if($toan->favour($_GET['id'],$_GET['color'])){
        echo 'true';
    }else{
        echo 'false';
    }
}
?>