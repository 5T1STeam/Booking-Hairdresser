<?php
session_start();
include_once "../../mvc/core/db.php";
include_once "../../mvc/models/userModel.php";
    $id = isset($_SESSION['Id'])? $_SESSION['Id'] : '';
    $up = new userModel();
    echo $id;
    $up-> updateInfo($id);

?>