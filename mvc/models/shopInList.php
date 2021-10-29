<?php
 require_once './mvc/core/db.php';
    class shopInList {
        //Module Main
        public function getByLocation($location){
            $conn = new db();
            $don = new shopInList();
            if(is_array($location)){
                $qr = "SELECT * FROM tbl_user WHERE AddressPath = ".$location[0]."";
                for($i=1;$i<count($location);$i++){
                    $qr .= " or AddressPath = ".$location[$i]."";
                }
                $data = mysqli_query($conn->con, $qr);
                $allshop =[];
                while($row = mysqli_fetch_assoc($data)){
                    $shop = new oneShop();
                    $shop->setId($row['Id']);
                    $shop->setName($row['Name']);
                    $shop->setLocation($row['FullAdress'].', '.$don->getFullAddress($_POST['wards']).'');
                    $shop->setImage($don->getBanner($row['Id']));
                    $shop->setService($don->getService($row['Id']));
                    $shop->setRate("5");
                    $shop->setComment("299");
                    array_push($allshop,$shop);
                }
            }else{
                $qr = "SELECT * FROM tbl_user where AddressPath =".$location;
                $data = mysqli_query($conn->con, $qr);
                $allshop =[];
                while($row = mysqli_fetch_assoc($data)){
                    $shop = new oneShop();
                    $shop->setId($row['Id']);
                    $shop->setName($row['Name']);
                    $shop->setLocation($row['FullAdress'].', '.$don->getFullAddress($_POST['wards']).'');
                    $shop->setImage($don->getBanner($row['Id']));
                    $shop->setService($don->getService($row['Id']));
                    $shop->setRate("5");
                    $shop->setComment("299");
                    array_push($allshop,$shop);
                }
            }
            $conn->freeSystem($conn->con, $data);
            return $allshop;
        }

        //Module Elements
        public function getFullAddress($wards){
            $conn= new db(); $address ='';
            $qr = "SELECT * FROM tbl_addresspath WHERE Id=".$wards;
            $data = mysqli_query($conn->con, $qr);
            while ($row = mysqli_fetch_assoc($data)){
                $address.=$row['Name'];
                $temp = $row['ParentPathId'];
            }
            $qr = "SELECT * FROM tbl_addresspath WHERE Id=".$temp;
            $data = mysqli_query($conn->con, $qr);
            while ($row = mysqli_fetch_assoc($data)){
                $address.=$row['Name'];
                $temp = $row['ParentPathId'];
            }
            $qr = "SELECT * FROM tbl_addresspath WHERE Id=".$temp;
            $data = mysqli_query($conn->con, $qr);
            while ($row = mysqli_fetch_assoc($data)){
                $address.=$row['Name'];
            }
            $conn->freeSystem($conn->con, $data);
            return $address;
        }
        public function getBanner($id){
            $conn = new db();
            $qr= "SELECT * FROM tbl_shopbanner WHERE ShopId=".$id;
            $data = mysqli_query($conn->con, $qr);
            $img = '';
            while ($row = mysqli_fetch_assoc($data)){ $img = $row["Image"];}
            $conn->freeSystem($conn->con, $data);
            return $img;
        }
        public function getService($id){
            $conn = new db();
            $don = new shopInList();
            $qr = "SELECT * FROM tbl_shopservices WHERE ShopId=".$id;
            $data = mysqli_query($conn->con, $qr); $dem =0;
            $service=[];
            while ($row = mysqli_fetch_assoc($data)){
                if($dem==3){break;}
                else{
                    array_push($service, array( 'id'=>$row['ServiceId'],
                                                'name'=>$don->getNameService($row['ServiceId']),
                                                'price'=>$row['Price'],
                                                'time'=>$row['Time']
                                            ));
                    $dem++;}
            }
            $conn->freeSystem($conn->con, $data);
            return $service;
        }
        public function getNameService($id){
            $conn = new db();
            $qr = "SELECT * FROM tbl_services WHERE Id=".$id;
            $data = mysqli_query($conn->con, $qr);
            $row = mysqli_fetch_assoc($data);
            $name = $row['Name'];
            $conn->freeSystem($conn->con, $data);
            return $name;
        }
        public function getRate($id){
            
        }

}

?>