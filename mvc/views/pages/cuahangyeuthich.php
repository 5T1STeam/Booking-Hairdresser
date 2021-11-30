<link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/userprofileStyle/style-favorite-page.css">
<div class="container">
    <br/>
    <div class=" head-infor-account">
        <h3> Cửa hàng yêu thích </h3>
    </div>
    <div class="list-fvr">
        <?php
       
     
       foreach($data['Gf'] as $item ){
                    echo '
           <div class="row">
               <div class="col-lg-6 col-xl-5 col-md-6 ">
               
                   <img src="' . $item["Avatar"] . '" width="100%" height="250px" style="border-radius: 5px;">
                   <div class="review text-center"> <span class="rate">'. $item["RatingNum"] .'</span> <br> '. $item["QuantityRating"] .' reviews</div>
               </div>
               <div class="col-lg-4 col-xl-5 col-md-4 col-xs-5">
                   <h4 name="nameShop">' . $item["Name"] . '</h4>
                   <p>' .$item['FullAdress'].",".$item['Ward'].",".$item['District']. '</p>
                   <p class="ita">' . $item["Introduction"] . '</p>
                </div>  
                <div class="col-lg-2 col-md-2 " >
                <form action="" method="POST" class="up" enctype="multipart/form-data">
                <input type="hidden" name="shopid" value="'.$item['Id'].'">
                <button type="submit" name="xoa" class="unlike btn"> Bỏ thích </button>
                </form>
                </div>
                </div>              
                <hr>';
                

        }
        ?>
    </div>
</div>