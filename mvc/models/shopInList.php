<?php
 require_once './mvc/core/db.php';
    class shopInList {
        //Module Main
        public function getByLocation($loca){
            $conn = new db();
            $don = new shopInList();
            $location = $don->getAllWards($loca);
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
                    $shop->setLocation($row['FullAdress'].', '.$don->getFullAddress($row['AddressPath']));
                    $shop->setImage($don->getBanner($row['Id']));
                    $shop->setService($don->getService($row['Id']));
                    $shop->setRate($row['RatingNum']=null? 0: $row['RatingNum']);
                    $shop->setComment($row['QuantityRating']=null? 0: $row['QuantityRating'].' comments');
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
                    $shop->setLocation($row['FullAdress'].', '.$don->getFullAddress($row['AddressPath']).'');
                    $shop->setImage($don->getBanner($row['Id']));
                    $shop->setService($don->getService($row['Id']));
                    $shop->setRate($row['RatingNum']=null? 0: $row['RatingNum']);
                    $shop->setComment($row['QuantityRating']=null? 0: $row['QuantityRating'].' comments');
                    array_push($allshop,$shop);
                }
            }
            $conn->freeSystem($conn->con, $data);
            return $allshop;
        }
        public function getByService($chos){
            $conn = new db();
            $don = new shopInList();
            $serviceId = explode(',',$chos,-1);
            $idshop = $don->getIdShopbyServices($serviceId);
            $qr ="SELECT * FROM tbl_user WHERE Id=".$idshop[0];
            if(count($idshop)>1){ for($i=1;$i<count($idshop);$i++){
                $qr .=" OR Id=".$idshop[$i];
            }}
            $data = mysqli_query($conn->con, $qr);
            $allshop=[];
            while($row = mysqli_fetch_assoc($data)){
                $shop = new oneShop();
                $shop->setId($row['Id']);
                $shop->setName($row['Name']);
                $shop->setLocation($row['FullAdress'].', '.$don->getFullAddress($row['AddressPath']));
                $shop->setImage($don->getBanner($row['Id']));
                $shop->setService($don->getService($row['Id']));
                $shop->setRate($row['RatingNum']=null? 0: $row['RatingNum']);
                $shop->setComment($row['QuantityRating']=null? 0: $row['QuantityRating'].' comments');
                array_push($allshop,$shop);
            }
            $conn->freeSystem($conn->con, $data);
            return $allshop;
        }
        public function getByCategory($id){
            $conn = new db();
            $don = new shopInList();
            $idshop = $don->getIdShopbyCategory($id);
            $qr ="SELECT * FROM tbl_user WHERE Id=".$idshop[0];
            if(count($idshop)>1){ for($i=1;$i<count($idshop);$i++){
                $qr .=" OR Id=".$idshop[$i];
            }}
            $data = mysqli_query($conn->con, $qr);
            $allshop=[];
            while($row = mysqli_fetch_assoc($data)){
                $shop = new oneShop();
                $shop->setId($row['Id']);
                $shop->setName($row['Name']);
                $shop->setLocation($row['FullAdress'].', '.$don->getFullAddress($row['AddressPath']));
                $shop->setImage($don->getBanner($row['Id']));
                $shop->setService($don->getService($row['Id']));
                $shop->setRate($row['RatingNum']=null? 0: $row['RatingNum']);
                $shop->setComment($row['QuantityRating']=null? 0: $row['QuantityRating'].' comments');
                array_push($allshop,$shop);
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
                $address.=$row['Name'].', ';
                $temp = $row['ParentPathId'];
            }
            $qr = "SELECT * FROM tbl_addresspath WHERE Id=".$temp;
            $data = mysqli_query($conn->con, $qr);
            while ($row = mysqli_fetch_assoc($data)){
                $address.=$row['Name'].', ';
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
        public function getNumComments($id){
            $conn = new db();
            $qr = "SELECT * FROM tbl_user WHERE Id =".$id;
            $data = mysqli_query($conn->con, $qr);
            while($row = mysqli_fetch_assoc($data)){ $num = $row['QuantityRating'];}
            $conn->freeSystem($conn->con, $data);
            return $num;
        }
        public function getAllWards($location){
            $conn = new db();
            $qr = "SELECT * FROM tbl_addresspath WHERE Id=".$location;
            $data = mysqli_query($conn->con, $qr);
            $depth =0;
            while ($row = mysqli_fetch_assoc($data)){$depth = $row['Depth'];};
            if($depth == 2){
                $qr = "SELECT * FROM tbl_addresspath WHERE ParentPathId=".$location;
                $data = mysqli_query($conn->con,$qr);
                $district = [];
                while ($row = mysqli_fetch_assoc($data)){
                    array_push($district,$row['Id']);
                }
                $conn->freeSystem($conn->con, $data);
                return $district;
            }if($depth == 1){
                $qr = "SELECT * FROM tbl_addresspath WHERE ParentPathId=".$location;
                $data = mysqli_query($conn->con, $qr);
                $temp =[];
                while ($row = mysqli_fetch_assoc($data)){
                    array_push($temp,$row['Id']);
                }
                $qr = "SELECT * FROM tbl_addresspath WHERE ParentPathId = ".$temp[0];
                for($i=1;$i<count($temp);$i++){
                    $qr .= " or ParentPathId = ".$temp[$i]."";
                }
                $data = mysqli_query($conn->con, $qr);
                $province=[];
                while ($row = mysqli_fetch_assoc($data)){
                    array_push($province,$row['Id']);
                }
                $conn->freeSystem($conn->con, $data);
                return $province;
            }if($depth==3){ 
                $conn->freeSystem($conn->con,$data);
                return $location;
            }
        }
        public function getIdShopbyServices($id){
            $conn = new db();
            $qr = "SELECT * FROM tbl_shopservices WHERE ServiceId=".$id[0];
            if(count($id)>1){ for($i=1;$i<count($id);$i++){
                $qr .= ' OR ServiceId='.$id[$i];
            }}
            $data= mysqli_query($conn->con, $qr);
            $idshop=[];
            while ($row = mysqli_fetch_assoc($data)){
                array_push($idshop,$row['ShopId']);
            }
            $conn->freeSystem($conn->con, $data);
            
            return $idshop;
        }
        public function getIdShopbyCategory($id){
            $conn =new db();
            $qr= "SELECT * FROM `tbl_shopcategory` WHERE `CategoryId` =".$id;
            $data= mysqli_query($conn->con, $qr);
            $idshop=[];
            while ($row = mysqli_fetch_assoc($data)){
                array_push($idshop,$row['ShopId']);
            }
            $conn->freeSystem($conn->con, $data);
            
            return $idshop;
        }   

}

?>