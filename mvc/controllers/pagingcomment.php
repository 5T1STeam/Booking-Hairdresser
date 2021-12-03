<?php

include_once "../../mvc/core/db.php";
include_once "../../mvc/models/detailShopModel.php";

$teo = new DetailShopModel();
$con = 3; //số phần tử
if(isset($_GET["page"]))
{
    $id = $_GET["id"];
    $feedbackarr = array();
    $list = $teo->GetServiceFeedback($id);

    foreach ($list as $innerArray) {
        $rawz = $teo->GetServiceByIdBook($innerArray['BookId']);
        $innerArray['ServiceName'] =  $rawz;
        $user = $teo->GetNameUser($innerArray['UserId']);

        $innerArray['UserName'] = $user['Name'];
        $innerArray['Province'] = $user['Province'];
        $like = $teo->GetLikeDisLike($innerArray['Id']);
        $innerArray['Like'] = 0;
        $innerArray['DLike'] = 0;
        foreach ($like as $item) {
            if ($item['IsLike']) {
                $innerArray['Like']++;
            }
            if ($item['IsDisLike']) {
                $innerArray['DLike']++;
            }
        }
        array_push($feedbackarr, $innerArray);
    }
    if($_GET['page']==round(count($feedbackarr)/$con)){
        for($z=($_GET['page']-1)*$con;$z< count($feedbackarr) ;$z++){
            $items = $feedbackarr[$z];
            echo "<div class='card-rating'>
            <div class='row'>
                <div class='col-md-6 mb-1 stars'>";
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $items['Rating']) {
                        echo "<i class='fa fa-star'></i>";
                    } else {
                        echo "<span class='fa fa-star'></span>";
                    }
                }
                echo "   
                </div>
                <div class='col-md-6 text-md-right'>
                    <span class='location'>" . $items['Province'] . ",</span>
                    <span class='date-rating'>" . $items['CreateDate'] . "</span>
                </div>
            </div>
            
               <h6 class='service-name mb-1'>" . $items['ServiceName'] . "</h6>
            <h6 class='client-name mb-2'>" . $items['UserName'] . "</h6>
            <p class='comment'>" . $items['Content'] . "</p>
            <img class='pb-3' src='" . $items['Image'] . "' width='auto' height='200'>
            <div class='row'>
                <div class='col-md-2'>
                    <button type='button' class='btn-in-rate'> " . $items['Like'] . "<span class='material-icons text-center ml-2'>thumb_up</span></button>
                </div>
                <div class='col-md-2'>
                    <button type='button' class='btn-in-rate'> " . $items['DLike'] . "<span class='material-icons text-center ml-2'>thumb_down</span></button>
                </div>
                <div class='col-md-4'></div>
                <div class='col-md-4 text-right'>
                    <button type='button' class='btn-in-rate' data-toggle='modal' data-target='#popup-report'> Report <span class='material-icons text-center ml-2'>flag</span></button>
    
                </div>
    
            </div>
            <div class=' row'>
                <div class='col-md'>
                    <hr>
                </div>
            </div>
        </div>";   
        }
    }else{
        for($z=($_GET['page']-1)*$con;$z< ($_GET['page']-1)*$con+$con ;$z++){
            $items = $feedbackarr[$z];
            echo "<div class='card-rating'>
            <div class='row'>
                <div class='col-md-6 mb-1 stars'>";
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $items['Rating']) {
                        echo "<i class='fa fa-star'></i>";
                    } else {
                        echo "<span class='fa fa-star'></span>";
                    }
                }
                echo "   
                </div>
                <div class='col-md-6 text-md-right'>
                    <span class='location'>" . $items['Province'] . ",</span>
                    <span class='date-rating'>" . $items['CreateDate'] . "</span>
                </div>
            </div>
            
               <h6 class='service-name mb-1'>" . $items['ServiceName'] . "</h6>
            <h6 class='client-name mb-2'>" . $items['UserName'] . "</h6>
            <p class='comment'>" . $items['Content'] . "</p>
            <img class='pb-3' src='" . $items['Image'] . "' width='auto' height='200'>
            <div class='row'>
                <div class='col-md-2'>
                    <button type='button' class='btn-in-rate'> " . $items['Like'] . "<span class='material-icons text-center ml-2'>thumb_up</span></button>
                </div>
                <div class='col-md-2'>
                    <button type='button' class='btn-in-rate'> " . $items['DLike'] . "<span class='material-icons text-center ml-2'>thumb_down</span></button>
                </div>
                <div class='col-md-4'></div>
                <div class='col-md-4 text-right'>
                    <button type='button' class='btn-in-rate' data-toggle='modal' data-target='#popup-report'> Report <span class='material-icons text-center ml-2'>flag</span></button>
    
                </div>
    
            </div>
            <div class=' row'>
                <div class='col-md'>
                    <hr>
                </div>
            </div>
        </div>";   
        }
    }


}
    