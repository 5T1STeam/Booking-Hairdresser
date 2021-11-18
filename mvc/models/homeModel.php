<?php
class homeModel extends db{
    public function GetShopSuggest(){
        $sql = "SELECT * FROM tbl_user ORDER BY RatingNum DESC LIMIT 12";
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
        $sql = "SELECT * FROM tbl_promotion WHERE DateStart <= now() and DateEnd >= now() LIMIT 3";
        $qr = mysqli_query($this->con,$sql);
        $data = array();
        while($row = mysqli_fetch_array($qr,1)){
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
   
}
?>