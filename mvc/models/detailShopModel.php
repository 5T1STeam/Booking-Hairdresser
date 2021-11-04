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
                default: {
                    break;
                }
            }
        }
       
        $ts= round($sumR / count($result),1);
        $result['AverageRating']=$ts;
        $result['QuantityRating']=$z+$x+$c+$v+$b;
        $result['FiveStarRating']=$z;
        $result['FourStarRating']=$x;
        $result['ThreeStarRating']=$c;
        $result['TwoStarRating']=$v;
        $result['OneStarRating']=$b;
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
        while($rows= mysqli_fetch_array($retreat)){
            array_push($result,$rows);
        }
        return $result;
    }
    public function GetNameUser($id){
        $qr ="SELECT * FROM tbl_user WHERE Id=$id";
        $querry= mysqli_query($this->con,$qr);
        $item= mysqli_fetch_array($querry);
            $a= $item["AddressPath"];
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
        return mysqli_query($this->con,$qr); 
    }
    public function delete($id){
        $qr = "DELETE * FROM tbl_favoriteshop WHERE Id=$id";
        return mysqli_query($this->con,$qr);
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
            $qq= "SELECT * FROM  tbl_shopservices where ShopId=$a";
            $QS= mysqli_query($this->con,$qq);
            $rows=mysqli_fetch_array($QS);
            $it['Price']= $rows['Price'];

            $b= $row["ServiceId"];
            $qb= "SELECT * FROM  tbl_services where Id=$b";
            $QW= mysqli_query($this->con,$qb);
            $row2=mysqli_fetch_array($QW);
            $it['ServiceName']= $row2['Name'];
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

}
?>
