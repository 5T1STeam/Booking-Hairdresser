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

    public $lat_a = 0;
    public $lon_a = 0;
 
    public $measure_unit = 'kilometers';
 
    public $measure_state = false;
 
    public $measure = 0;
 
    public $error = '';
 
 
 
    public function DistAB($lat_b, $lon_b)
 
      {
          $delta_lat = $lat_b - $this->lat_a ;
          $delta_lon = $lon_b - $this->lon_a ;
 
          $earth_radius = 6372.795477598;
 
          $alpha    = $delta_lat/2;
          $beta     = $delta_lon/2;
          $a        = sin(deg2rad($alpha)) * sin(deg2rad($alpha)) + cos(deg2rad($this->lat_a)) * cos(deg2rad($lat_b)) * sin(deg2rad($beta)) * sin(deg2rad($beta)) ;
          $c        = asin(min(1, sqrt($a)));
          $distance = 2*$earth_radius * $c;
          $distance = round($distance, 4);
 
          $this->measure = $distance;
 
      }
      //function get list of user nearest by lat and long in tbl_user
    public function GetShopNearby($lat_b, $lon_b){
        $sql = "SELECT * FROM tbl_user";
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
            $this->lat_a = $row['Latitude'];
            $this->lon_a = $row['Longtitude'];
            $this->DistAB($lat_b, $lon_b);
            $row['Distance'] = $this->measure;
            array_push($data,$row);   
        }
        return $data;
   
}
}
?>