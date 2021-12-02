<?php
class detail extends controller{
    function Show($id){
        $teo = $this->model("detailShopModel");
        $feedbackarr=array();
        
        $list=$teo->GetServiceFeedback($id);
        
        foreach($list as $innerArray)
        {
            $ss = $teo->GetServicebyIdBook($innerArray['BookId']);
            
               $innerArray['ServiceName'] =  $ss;
               $user = $teo->GetNameUser($innerArray['UserId']);               
                
                $innerArray['UserName']= $user['Name'];
                $innerArray['Province']= $user['Province'];
            $like= $teo -> GetLikeDisLike($innerArray['Id']);
            $innerArray['Like']=0;
            $innerArray['DLike']=0;
            foreach($like as $item){
                if($item['IsLike']){
                    $innerArray['Like']++;
                }
                if($item['IsDisLike']){
                    $innerArray['DLike']++;
                }
            }
            array_push($feedbackarr,$innerArray);
        }   
        $arrz=$teo->GetCalendar($id);
        $results=[];
        foreach($arrz as $items){
            $item = mysqli_fetch_array($teo->GetDayOfWEEK($items['DayOfWeekId']),1);
            $item['Start']=$items['StartTime'];
            $item['End']=$items['EndTime'];
            array_push($results,$item);
        }
        $location =$teo->GetNameUser($id);
        $Fullad=$location['FullAdress'] . " , " .$location['Ward'] . " , " .$location['District']." , " .$location['Province']  ;
        $Fullad=$teo->convert_name( $Fullad);
         $Fullad=  str_replace(" ","%20",$Fullad); 

        $this->view("detailShop",["GAU"=>$teo->GetImgShop($id),
                                    "GN"=>$teo->GetNameUser($id),
                                    "GS"=>$teo->GetServiceShop($id),
                                    "GR"=>$teo->GetRule($id),
                                    "GM"=>$teo->GetService(),
                                    "GI"=>$teo->GetFiveImage($id),
                                    "GF"=>$teo->GetFeedBack($id),
                                    "GZ"=>$teo->GetFeedBack($id),
                                    "GP"=>$teo->GetService(),
                                    "GQ"=>$feedbackarr,
                                    "GT"=>$teo->GetStaff($id),
                                    "GC"=>$results,
                                    "GP"=>$teo->GetService(),
                                    "GO"=>$teo->GetServiceShop($id),
                                    "ID"=>$id,
                                    "Get"=>$teo->getFavourite($id),
                                    "GL"=>$Fullad
                                    ]
                                        );

    }
}
?>