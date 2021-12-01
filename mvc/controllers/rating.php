<?php
// INSERT INTO `tbl_feedbacks`(`Id`, `Content`, `UserId`, `CreateDate`, `UpdateDate`, `IsDeleded`, `ShopId`, `BookId`, `Rating`, `Image`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')
session_start();
require_once "../../mvc/models/Book.php";

if(isset($_POST['userid'])&&isset($_POST['content-rate'])&&isset($_POST['rate'])&&isset($_POST['shopid'])&&isset($_POST['bookid'])){
    $rate = new Book();
    $rate->SetRating($_POST['userid'],$_POST['shopid'],$_POST['bookid'],$_POST['content-rate'],$_POST['rate']); 
}