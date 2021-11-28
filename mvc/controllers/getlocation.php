<?php
if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){
    header('location: nearby/'.$_POST['latitude'].'/'.$_POST['longtitude']);
}


?>
