<?php
require_once "../../mvc/models/Book.php";
if(isset($_POST['time'])&&isset($_POST['idshop'])&&isset($_POST['idservice'])&&isset($_POST['iduser'])){
    $book = new Book();
    $book->setBooking((int)$_POST['idshop'],(int)$_POST['idservice'],(int)$_POST['iduser'],$_POST['time']);
}