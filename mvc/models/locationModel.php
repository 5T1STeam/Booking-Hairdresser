<?php
class locationModel extends db{
    public function UpdateLocation(){
        $sql = "SELECT * FROM tbl_user WHERE Latitude = 0 OR Longtitude = 0";
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

        foreach($data as $item)
        {
            $address = $item['FullAdress']." , ".$item['AddressPath3'].", ".$item['AddressPath2'].",".$item['AddressPath1'];
            $queryString = http_build_query([
                'auth' => '',
                'scantext' => $address,
                'region' => 'VN',
                'geojson' => '1'
            ]);
    
            $ch = curl_init(sprintf('%s?%s', 'https://geocode.xyz', $queryString));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
            $json = curl_exec($ch);
    
            curl_close($ch);
    
            $apiResult = json_decode($json, true);
            $lat = $apiResult['properties']['lat'];
            $lng = $apiResult['properties']['lon'];
            $id = $item['Id'];
            $sqlupdate = "UPDATE tbl_user SET Latitude = $lat, Longtitude = $lng WHERE id = $id";
            mysqli_query($this->con, $sqlupdate);
        }
    }
   
}
?>