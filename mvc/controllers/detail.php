<?php
class detail extends controller{
    function SayHi(){
        $teo = $this->model("detailShopModel");
        echo $teo->Tuan();
       
     }
    function Show($id){
        $teo = $this->model("detailShopModel");
        $feedbackarr=array();
        
        $list=$teo->GetServiceFeedback($id);
        
        foreach($list as $innerArray)
        {
            $rawz=mysqli_fetch_array($teo->GetServiceById($innerArray['ServiceId']),1);
               $innerArray['ServiceName'] =  $rawz['Name'];
               $user = $teo->GetNameUser($innerArray['UserId']);               
                
                $innerArray['UserName']= $user['Name'];
                $innerArray['Province']= $user['Province'];
<<<<<<< HEAD
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
=======
                
                
            
            $like=mysqli_fetch_array($teo->GetLikeDisLike($innerArray['UserId']),1);
            $innerArray['Like']= $like['IsLike'];
            $innerArray['DLike']= $like['IsDisLike'];
                array_push($feedbackarr,$innerArray);


            
>>>>>>> origin/profilephp
        }   
        $arrz=$teo->GetCalendar($id);
        $results=[];
        foreach($arrz as $items){
            $item = mysqli_fetch_array($teo->GetDayOfWEEK($items['DayOfWeekId']),1);
            $item['Start']=$items['StartTime'];
            $item['End']=$items['EndTime'];
            array_push($results,$item);
        }
<<<<<<< HEAD
        
=======

        
        
        
       
        


       
       
>>>>>>> origin/profilephp
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
<<<<<<< HEAD
                                    "GO"=>$teo->GetServiceShop($id),
=======
                                    "GO"=>$teo->GetServiceShop($id)
>>>>>>> origin/profilephp

                                    ]
                                        );

    }
}
?>