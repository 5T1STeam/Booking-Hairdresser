<link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/userprofileStyle/memberstyle.css">
<div class="container">
    <div class="  head-infor-account">
        <h3> Hội viên </h3>
    </div>
    <div class="list-fvr">
    <?php
    foreach ($data['MM'] as $item) {
        echo '
    <div class="row">
                <div class="col-lg-6 col-xl-5 col-md-6 ">
                
                    <img src="' . $item["Avatar"] . '" width="100%" height="250px" style="border-radius: 5px;">
                    <div class="review text-center"> <span class="rate">' . $item["RatingNum"] . '</span> <br>' . $item["QuantityRating"] . ' reviews</div>
                </div>
                <div class="col-lg-4 col-xl-5 col-md-4 col-xs-5">
                    <h4>' . $item["Name"] . '</h4>
                    <p>' . $item['FullAdress'] . "," . $item['Ward'] . "," . $item['District'] . '</p>
             </div>
             <div class="col-lg-2 col-xl-2 col-md-3 text-center "> <h6>Ngày tham gia</h6>'. $item["CR"] .'
             </div>
         
     </div>
     <hr>
                ';
    }
    ?>


</div>