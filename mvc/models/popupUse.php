<?php
    require_once "./mvc/core/db.php";
    class popupUse{  
        public function GetProvince(){
            $conn = new db();
            $qr = "SELECT * FROM tbl_addresspath where Depth = 1";
            $data = mysqli_query($conn->con, $qr);
            $id=[]; $name=[]; 
            while ($row = mysqli_fetch_array($data)){
                array_push($id,$row['Id']);
                array_push($name,$row['Name']);
            }
            $province = array_combine($id,$name);
            $conn->freeSystem($conn->con,$data);
            return $province;   
        }

        public function GetService(){
            $conn = new db();
            $qr= "SELECT * FROM tbl_services";
            $data = mysqli_query($conn->con, $qr);
            $id=[]; $name=[]; 
            while ($row = mysqli_fetch_array($data)){
                array_push($id,$row['Id']);
                array_push($name,$row['Name']);
            }
            $services = array_combine($id,$name);
            $conn->freeSystem($conn->con,$data);
            return $services;
        }
    }