<link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/userprofileStyle/style-favorite-page.css">
<div class="container">
    <div class=" head-infor-account">
        <h3> Cửa hàng yêu thích </h3>
    </div>
    <div class="list-fvr">
        <?php
        $list = [];
        while ($col = mysqli_fetch_array($data["GU"])) {
            array_push($list, $col);
        }
        while ($rows = mysqli_fetch_array($data["GE"])) {
            foreach ($list as $key) {
                if ($rows["ShopId"] == $key["Id"]) {
                    echo '
           <div class="row">
               <div class="col-lg-6 col-xl-5 col-md-6 ">
               
                   <img src="' . $key["Avatar"] . '" width="100%" height="250px" style="border-radius: 5px;">
                   <div class="review text-center"> <span class="rate">'. $key["RatingNum"] .'</span> <br> '. $key["QuantityRating"] .' reviews</div>
               </div>
               <div class="col-lg-4 col-xl-5 col-md-4 col-xs-5">
                   <h4>' . $key["Name"] . '</h4>
                   <p>' .$data['Gf']['FullAdress'].",".$data['Gf']['Ward'].",".$data['Gf']['District']. '</p>
                   <p>' . $key["Introduction"] . '</p>
                </div>  
                <div class="col-lg-2 col-md-2 "><span class="unlike"> Bỏ thích</span></div>
                </div>
                <hr>';
                }
            }
        }
        ?>
    </div>
</div>