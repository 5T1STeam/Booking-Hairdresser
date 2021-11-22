<?php
header('location: Nearby/'.$_POST['latitude'].'/'.$_POST['longtitude']);
if(isset($_POST['latitude'])&&isset($_POST['longtitude'])){
    header('location: Nearby/'.$_POST['latitude'].'/'.$_POST['longtitude']);
}
?>
