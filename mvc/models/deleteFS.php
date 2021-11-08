<?php
require_once "./mvc/core/db.php";
 $ShopId= $_GET['ShopId'];
 $ge = "DELETE * FROM tbl_favoriteshop WHERE ShopId=$ShopId";
 if(mysqli_query($this->con,$ge)){
    echo "thanh cong deleting record";
} else {
    echo "Error deleting record";
}

