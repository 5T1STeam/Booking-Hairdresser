<?php
class homeModel extends db{
    public function GetShopSuggest(){
        $sql = "SELECT * FROM tbl_user WHERE RoleId = 2 ORDER BY RatingNum DESC LIMIT 12";
        $qr = mysqli_query($this->con,$sql);
        $data = array();
        while($row = mysqli_fetch_array($qr,1)){
            for($i=3;$i>=1;$i--){
                if($i==3){
                    $idAddressPath = $row['AddressPath'];
                }
                $sql2 = "SELECT * FROM tbl_addresspath WHERE id = $idAddressPath";
                $qr2 = mysqli_query($this->con,$sql2);
                $row2 = mysqli_fetch_array($qr2,1);
                $row['AddressPath'.$i.'']=$row2['Name'];
                $idAddressPath =  $row2['ParentPathId'];
            }
            array_push($data,$row);   
        }
        return $data;   
    }
    public function GetPromotion(){
        $sql = "SELECT * FROM tbl_promotion WHERE DateStart <= now() and DateEnd >= now()";
        $qr = mysqli_query($this->con,$sql);
        $data = array();
        while($row = mysqli_fetch_array($qr,1)){
            if($row['TypePromotionId'] == 2){
                $row['Value'] = "Giảm ".$row['ValuePromotion'].".000 VNĐ ";
            }
            else{
                $row['Value'] = "Giảm ".$row['ValuePromotion']."% ";
            }
            if($row['MinInvoice'] == null){
                $row['Condition'] = "cho hóa đơn từ 0đ. ";
            }
            else{
                $row['Condition'] = "cho hóa đơn từ ".$row['MinInvoice'].".000 VNĐ. ";
            }
            if($row['MaxValuePromotion'] == null){
                $row['Max'] = "Không giới hạn giá trị khuyến mãi. ";
            }
            else{
                $row['Max'] = "Giảm tối đa ".$row['MaxValuePromotion'].".000 VNĐ, ";
            }
            switch ($row['PromotionRecipientId']){
                case 1: $row['Recipient'] = "Áp dụng cho tất cả khách hàng. "; break;
                case 2: $row['Recipient'] = "Áp dụng cho khách hàng hạng Kim cương. "; break;
                case 3: $row['Recipient'] = "Áp dụng cho khách hàng hạng vàng. "; break;
                case 4: $row['Recipient'] = "Áp dụng cho khách hàng hạng Bạc. "; break;
                case 5: $row['Recipient'] = "Áp dụng cho khách hàng hạng Đồng. "; break;
                case 6: $row['Recipient'] = "Áp dụng cho khách hàng là thành viên của cửa hàng trong chương trình khuyến mãi. "; break;
            }
            array_push($data,$row);   
        }
        return $data;
    }
    // function get topic from tbl topic
    public function GetTopic(){
        $sql = "SELECT * FROM tbl_topic";
        $qr = mysqli_query($this->con,$sql);
        $data = array();
        while($row = mysqli_fetch_array($qr,1)){
            array_push($data,$row);   
        }
        return $data;
    }

    // function get service name from tbl service
    public function GetService(){
        $sql = "SELECT * FROM tbl_services LIMIT 6";
        $qr = mysqli_query($this->con,$sql);
        $data = array();
        while($row = mysqli_fetch_array($qr,1)){
            array_push($data,$row);   
        }
        return $data;
    }
    public function DistAB($latitude1,   $longitude1,  $latitude2, $longitude2)
      {
        //Converting to radians
        $longi1 = deg2rad($longitude1); 
        $longi2 = deg2rad($longitude2); 
        $lati1 = deg2rad($latitude1); 
        $lati2 = deg2rad($latitude2); 
   
        //Haversine Formula 
        $difflong = $longi2 - $longi1; 
        $difflat = $lati2 - $lati1; 
   
        $val = pow(sin($difflat/2),2)+cos($lati1)*cos($lati2)*pow(sin($difflong/2),2); 
        $res2 =6378.8 * (2 * asin(sqrt($val))); 
        return $res2;//for kilometers
      }
      //function get list of user nearest by lat and long in tbl_user
    public function GetShopNearby($lat_b, $lon_b){
        $sql = "SELECT * FROM tbl_user WHERE RoleId = 2";
        $qr = mysqli_query($this->con,$sql);
        $data = array();
        while($row = mysqli_fetch_array($qr,1)){
            for($i=3;$i>=1;$i--){
                if($i==3){
                    $idAddressPath = $row['AddressPath'];
                }
                $sql2 = "SELECT * FROM tbl_addresspath WHERE id = $idAddressPath";
                $qr2 = mysqli_query($this->con,$sql2);
                $row2 = mysqli_fetch_array($qr2,1);
                $row['AddressPath'.$i.'']=$row2['Name'];
                $idAddressPath =  $row2['ParentPathId'];
            }
            $lat_1 = $row['Latitude'];
            $lon_1 = $row['Longtitude'];
            $row['Distance'] = $this-> DistAB($lat_1, $lon_1, $lat_b, $lon_b);
            array_push($data,$row);   
        }
        usort($data, function($a, $b) {
            return $a['Distance'] <=> $b['Distance'];});
        return $data;
   
}
}
?>