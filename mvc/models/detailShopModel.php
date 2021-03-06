<?php
class detailShopModel extends db{
   
    public function GetImgShop($id){
        $qr = "SELECT * FROM tbl_shopbanner WHERE ShopId=".$id."";
        return mysqli_query($this->con,$qr);
    }
    public function GetNameShop($id){
        $qr = "SELECT * FROM tbl_user WHERE Id=".$id."";
        return mysqli_query($this->con,$qr);
    }
    public function GetServiceShop($id){
        $qr = "SELECT * FROM tbl_shopservices WHERE ShopId=".$id."";
        return mysqli_query($this->con,$qr);
    }
    public function GetService(){
        $qr = "SELECT * FROM tbl_services";
        return mysqli_query($this->con,$qr);
    }
    public function GetRule($id){
        $qr = "SELECT * FROM tbl_shoprules WHERE ShopId=". $id. "" ;
        return mysqli_query($this->con,$qr);
    }
    public function GetFiveImage($id){
        $qr = "SELECT  * FROM tbl_feedbacks WHERE ShopId= $id  "  ;
        return mysqli_query($this->con,$qr);
    }
    public function GetFeedBack($id){
        $qr = "SELECT * FROM tbl_feedbacks WHERE ShopId=".$id."";
        $querry= mysqli_query($this->con,$qr);
        $result =array();
        $sumR=0;
        $z=0;
        $x=0;
        $c=0;
        $v=0;
        $b=0;
        while($rows=mysqli_fetch_array($querry))
        {
            array_push($result,$rows);
            $sumR+=$rows['Rating'];

            switch($rows['Rating']){
                case 5: {
                    $z++;
                    break;
                }
                case 4: {
                    $x++;
                    break;
                }
                case 3:{
                    $c ++;
                    break;
                }
                case 2:{
                    $v++;
                }
                case 1:{
                    $b++;
                }
                case 0:{
                   
                }
                default: {
                    break;
                }
            }
        }
        if($result != null){
            $ts= round($sumR / count($result),1);
            $result['AverageRating']=$ts;
            $result['QuantityRating']=$z+$x+$c+$v+$b;
            $result['FiveStarRating']=$z;
            $result['FourStarRating']=$x;
            $result['ThreeStarRating']=$c;
            $result['TwoStarRating']=$v;
            $result['OneStarRating']=$b;
        }
        
        return $result;
    }
    public function GetServiceById($id){
        $qr = "SELECT * FROM tbl_services WHERE Id=$id";
        return mysqli_query($this->con,$qr);
    }
    public function GetServiceFeedback($id){
        $qr = "SELECT * FROM tbl_feedbacks WHERE ShopId=".$id."";
        $retreat= mysqli_query($this->con,$qr);
        $result=array();
        while($rows= mysqli_fetch_array($retreat,1)){
            array_push($result,$rows);
        }
        return $result;
    }
    public function GetServicebyIdBook($id){
        $qr = 'SELECT * FROM tbl_bookingservice WHERE BookingId='.$id;
        $querry = mysqli_query($this->con,$qr);
        $data =[];
        while($row = mysqli_fetch_array($querry)){
            $qa = 'SELECT * FROM  `tbl_services` WHERE Id = ' . $row['ShopserviceId'];
            $quarry = mysqli_query($this->con,$qa);
            $item = mysqli_fetch_array($quarry);
            array_push($data,$item['Name']);
        }
        $str = implode(", ",$data);
        return $str;
    }
    public function GetNameUser($id){
        $qr ="SELECT * FROM tbl_user WHERE Id=$id";
        $querry= mysqli_query($this->con,$qr);
        $item= mysqli_fetch_array($querry);
            $a= $item["AddressPath"];
            if($a!=0){
            $qa= "SELECT * FROM  tbl_addresspath where Id=$a";
            $querry1= mysqli_query($this->con,$qa);
            $row1=mysqli_fetch_array($querry1);
            $item['Ward']= $row1['Name'];
            $a= $row1['ParentPathId'];
            $qs= "SELECT * FROM  tbl_addresspath where Id=$a";
            $querry2=mysqli_query($this->con,$qs);
            $row2=mysqli_fetch_array($querry2);
            $item['District'] =$row2['Name'];
            $a =$row2['ParentPathId'];
            $qc= "SELECT * FROM  tbl_addresspath where Id=$a";
            $querry3=mysqli_query($this->con,$qc);
            $row3=mysqli_fetch_array($querry3);
            $item['Province']= $row3['Name'];
            }
            else {
                $item['Ward']='';
                $item['District'] ='';
                $item['Province']='';
            }
        return $item;
    }
    public function GetStaff($id){
        $qr = "SELECT * FROM tbl_staff WHERE ShopId=$id";
        return mysqli_query($this->con,$qr);
    }
    public function GetCalendar($id){
        $qr = "SELECT * FROM tbl_calendar WHERE ShopId=$id";
        $querry= mysqli_query($this->con,$qr);
        $result =array();
        while($row=mysqli_fetch_array($querry)){
            array_push($result,$row);
        }
        return $result;
    }
    public function GetDayOfWEEK($id){
        $qr = "SELECT * FROM tbl_dayofweek WHERE Id=$id";
        return mysqli_query($this->con,$qr);
    }
    public function GetLikeDisLike($id){
        $qr = "SELECT * FROM tbl_likefeedback WHERE FeedbackId=$id";
        $querry= mysqli_query($this->con,$qr);
        $result =array();
        while($row=mysqli_fetch_array($querry)){
            array_push($result,$row);
        }
        return $result;
    }
    
   
    


       
     
    public function danhgia($id){
        $qr = "SELECT * FROM tbl_feedbacks WHERE UserId=$id";
        $quer = mysqli_query($this->con,$qr); 
        $result=[];
        while($row=mysqli_fetch_array($quer)){
            $a= $row["ShopId"];
            $qa= "SELECT * FROM  tbl_user where Id=$a";
            $QE= mysqli_query($this->con,$qa);
            $row1=mysqli_fetch_array($QE);
            $it['ShopName']= $row1['Name'];
            $it['ShopId']=$a;
            $qq= "SELECT * FROM  tbl_booking where Id=".$row["BookId"];
            $QS= mysqli_query($this->con,$qq);
            $rows=mysqli_fetch_array($QS);
            $it['Price']= $rows['TotalBill'];

            $b= $row["BookId"];
            $qb= "SELECT * FROM  tbl_bookingservice where BookingId=$b";
            $QW= mysqli_query($this->con,$qb);
            $str=[];
            while($row2=mysqli_fetch_array($QW)){
                $qc="SELECT * FROM tbl_services WHERE Id=".$row2['ShopserviceId'];
                $QZ = mysqli_query($this->con,$qc);
                array_push($str,mysqli_fetch_array($QZ)['Name']);
            }
            $str1= implode(", ",$str);

            $it['ServiceName']= $str1;

            $t= $row["CreateDate"];
            $it['CreateDate']=$t;
             

            $c= $row["Rating"];
            $it['Rating']=$c;
            array_push($result,$it);

        
            
        }
        return $result;
    }
    public function magiamall(){
        $qr = "SELECT * FROM tbl_promotion WHERE PromotionRecipientId = 1";
        return mysqli_query($this->con,$qr);
    } 
    public function magiamrankdong(){
        $qr = "SELECT * FROM tbl_promotion WHERE PromotionRecipientId = 5";
        return mysqli_query($this->con,$qr);
    } 
    public function magiamrankbac(){
        $qr = "SELECT * FROM tbl_promotion WHERE PromotionRecipientId = 4";
        return mysqli_query($this->con,$qr);
    } 
    public function magiamrankvang(){
        $qr = "SELECT * FROM tbl_promotion WHERE PromotionRecipientId = 3";
        return mysqli_query($this->con,$qr);
    } 
    public function magiamrankkc(){
        $qr = "SELECT * FROM tbl_promotion WHERE PromotionRecipientId = 2";
        return mysqli_query($this->con,$qr);
    } 

    

    public function mem($id){
        $qr = "SELECT * FROM  tbl_shopmember WHERE UserId=$id";
        $quer = mysqli_query($this->con,$qr);  
        $result=[];
        while($row=mysqli_fetch_array($quer)){
           $cr= $row["CreateDate"];
            $a= $row["ShopId"];
            $qa= "SELECT * FROM  tbl_user where Id=$a";
            $QE= mysqli_query($this->con,$qa);
            $it=mysqli_fetch_array($QE);
                $a= $it["AddressPath"];
                $qa= "SELECT * FROM  tbl_addresspath where Id=$a";
                $querry1= mysqli_query($this->con,$qa);
                $row1=mysqli_fetch_array($querry1);
                $it['Ward']= $row1['Name'];
                $a= $row1['ParentPathId'];
                $qs= "SELECT * FROM  tbl_addresspath where Id=$a";
                $querry2=mysqli_query($this->con,$qs);
                $row2=mysqli_fetch_array($querry2);
                $it['District'] =$row2['Name'];
                $a =$row2['ParentPathId'];
                $qc= "SELECT * FROM  tbl_addresspath where Id=$a";
                $querry3=mysqli_query($this->con,$qc);
                $row3=mysqli_fetch_array($querry3);
                $it['Province']= $row3['Name'];
                $it['CR']=$cr;
                array_push($result,$it);
      


        }
        return $result;

    }
    public function NEW($id){
        $qr = "SELECT * FROM  tbl_favoriteshop WHERE UserId=$id";
        $quer = mysqli_query($this->con,$qr);
        $result=[];
        while($row=mysqli_fetch_array($quer)){
           
            $a= $row["ShopId"];
            $qa= "SELECT * FROM  tbl_user where Id=$a";
            $QE= mysqli_query($this->con,$qa);
            $it=mysqli_fetch_array($QE);
                $a= $it["AddressPath"];
                $qa= "SELECT * FROM  tbl_addresspath where Id=$a";
                $querry1= mysqli_query($this->con,$qa);
                $row1=mysqli_fetch_array($querry1);
                $it['Ward']= $row1['Name'];
                $a= $row1['ParentPathId'];
                $qs= "SELECT * FROM  tbl_addresspath where Id=$a";
                $querry2=mysqli_query($this->con,$qs);
                $row2=mysqli_fetch_array($querry2);
                $it['District'] =$row2['Name'];
                $a =$row2['ParentPathId'];
                $qc= "SELECT * FROM  tbl_addresspath where Id=$a";
                $querry3=mysqli_query($this->con,$qc);
                $row3=mysqli_fetch_array($querry3);
                $it['Province']= $row3['Name'];
                array_push($result,$it);

        }
        return $result;

    }
    public function getBooking($id){
        $qr = "SELECT * FROM tbl_booking WHERE UserId=$id AND (Isrequest = 1 OR IsAccept =1)";
        $querry= mysqli_query($this->con,$qr);
        $result=[];
        while($row=mysqli_fetch_array($querry,1)){
            $bookingId=$row['Id'];
            $qr2= "SELECT * FROM tbl_bookingservice WHERE BookingId=$bookingId";
            $querry2=mysqli_query($this->con,$qr2);
            $row['Bookingservice'] =array();
            while($row2=mysqli_fetch_array($querry2,1)){
                $shopServiceId= $row2['ShopserviceId'];
                $qr3="SELECT * FROM tbl_shopservices WHERE Id=$shopServiceId";
                $querry3=mysqli_query($this->con,$qr3);
                
                while($row3=mysqli_fetch_array($querry3)){
                    $row2['Price'] = $row3['Price'];
                    $row2['Time'] = $row3['Time'];
                    $serviceId= $row3['ServiceId'];
                    $qr4= "SELECT `Name` FROM tbl_services WHERE Id=$serviceId";
                    $querry4=mysqli_query($this->con,$qr4);
                    $row4=mysqli_fetch_array($querry4);
                    $row2['Name'] = $row4['Name'];
                    array_push($row['Bookingservice'],$row2);
                }
            }
            array_push($result,$row);
        }
        return $result;
        
    }

    public function getBookingHistory($id){
        $qr = "SELECT * FROM tbl_booking WHERE UserId=$id AND (IsCanceled = 1 OR IsCompleted =1)";
        $querry= mysqli_query($this->con,$qr);
        $result=[];
        while($row=mysqli_fetch_array($querry,1)){
            $bookingId=$row['Id'];
            $qr2= "SELECT * FROM tbl_bookingservice WHERE BookingId=$bookingId";
            $querry2=mysqli_query($this->con,$qr2);
            $row['Bookingservice'] =array();
            while($row2=mysqli_fetch_array($querry2,1)){
                $shopServiceId= $row2['ShopserviceId'];
                $qr3="SELECT * FROM tbl_shopservices WHERE Id=$shopServiceId";
                $querry3=mysqli_query($this->con,$qr3);
                
                while($row3=mysqli_fetch_array($querry3)){
                    $row2['Price'] = $row3['Price'];
                    $row2['Time'] = $row3['Time'];
                    $serviceId= $row3['ServiceId'];
                    $qr4= "SELECT `Name` FROM tbl_services WHERE Id=$serviceId";
                    $querry4=mysqli_query($this->con,$qr4);
                    $row4=mysqli_fetch_array($querry4);
                    $row2['Name'] = $row4['Name'];
                    array_push($row['Bookingservice'],$row2);
                }
            }
            array_push($result,$row);
        }
        return $result;
        
    }
    public function convert_name($str) {
		$str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/", 'a', $str);
		$str = preg_replace("/(??|??|???|???|???|??|???|???|???|???|???)/", 'e', $str);
		$str = preg_replace("/(??|??|???|???|??)/", 'i', $str);
		$str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/", 'o', $str);
		$str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???)/", 'u', $str);
		$str = preg_replace("/(???|??|???|???|???)/", 'y', $str);
		$str = preg_replace("/(??)/", 'd', $str);
		$str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/", 'A', $str);
		$str = preg_replace("/(??|??|???|???|???|??|???|???|???|???|???)/", 'E', $str);
		$str = preg_replace("/(??|??|???|???|??)/", 'I', $str);
		$str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/", 'O', $str);
		$str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???)/", 'U', $str);
		$str = preg_replace("/(???|??|???|???|???)/", 'Y', $str);
		$str = preg_replace("/(??)/", 'D', $str);
		// $str = preg_replace("/(\???|\???|\???|\???|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '-', $str);
		
		return $str;
	}
    public function getFavourite($id){
        $qr ="SELECT * FROM tbl_favoriteshop WHERE ShopId= $id ";
        return mysqli_query($this->con,$qr);
    }
    public function favour($id, $color){
        $post_id=isset($_SESSION['Id'])? $_SESSION['Id']:'';
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $day =date("Y-m-d h:i:s");
        
        if($color=='lightgray'){
            $qr ="INSERT INTO `tbl_favoriteshop` VALUES (NULL,".$post_id.",".$id.",'".$day."');";
            return mysqli_query($this->con,$qr);      
        }elseif($color=='red'){
            $qr ="DELETE FROM tbl_favoriteshop WHERE UserId=".$post_id." AND ShopId= ".$id;
            return mysqli_query($this->con,$qr);
        }else{
            return false;
        }
        
    }
    
    



}


?>
