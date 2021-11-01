<?php
class userModel extends db{
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
   
}
?>