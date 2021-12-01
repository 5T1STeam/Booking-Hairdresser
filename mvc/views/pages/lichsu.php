<link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/userprofileStyle/historyStyle.css">
<div class="container-fluid">
    <div class="col-lg-8 col-xl-9 col-12">
        <div id="history-booking" class="container active">
            <div class="history-booking__title   head-infor-account">
                <h3>Lịch sử booking</h3>
            </div>
            <pre>
            <?php
            print_r($data['booked']);
            ?>
            </pre>
            <?php
            $id = $_SESSION['Id'];

            foreach ($data['booked'] as $item) {
                echo '
                            <div class=" ' . ($item['IsCompleted'] == true ? "history-booking--success " : "history-booking--cancel ") . ' col-xl-12 col-12 row">
                            
                            <div class="col-9 ' . ($item['IsCompleted'] == true ? "history-booking--success__info " : "history-booking--cancel__info ") . ' row align-content-around">
                                <button type="button" class="' . ($item['IsCompleted'] == true ? "history-booking--success__info--btn btn-success " : "history-booking--cancel__info--btn btn-outline-danger bg-white ") . ' col-sm-7 col-md-5 col-9" disabled>
                                ' . ($item['IsCompleted'] == true ? "Đã hoàn thành" : "Đã hủy") . '
                                </button>
                                <div class="history-booking__info--main-text col-12 row">';
                foreach ($item['Bookingservice'] as $bs) {
                    echo '
                                    <div class="col-12">' . $bs['Name'] . '</div>';
                }
                echo ' 
                                   <p class="col-12"><img width="30px" height="30px" he style="border-radius: 100%;" src="' . $item['ShopImg'] . '"> ' . $item['ShopName'] . '</p>
                                    <span class="col-12">' . $item['Adress'] . '</span>
                                </div>
                                <div class="row">
                                <div class="col-6">
                                <button class="' . ($item['IsCompleted'] == true ? "history-booking--success__info--btn btn-danger" : "history-booking--cancel__info--btn btn-danger") . '">Đặt lại</button>
                                </div>
                                <div class="col-6">
                                ' . ($item['IsCompleted'] == true ?  '<button class=" history-booking--success__info--btn btn-warning" data-toggle="modal" data-target="#rate-' . $id . '-' . $item['ShopId'] . '-' . $item['Id'] . '">Đánh giá </button>' : '') . '
                                </div>
                                </div>
                            </div>';
                $datatime = date_create($item['DateTime']);
                $date = date_format($datatime, 'd');
                $month = date_format($datatime, 'm');
                $timeDone = $item['StartTime'];
                echo '
                            <div class="col-3  history-booking__time">
                                <h3 class="col-12"><b>' . $date . '</b></h3>
                                <p class="col-12 ">Tháng ' . $month . '</p>
                                <p class="col-12">' . $timeDone . '</p>
                            </div>
                        </div>';
            }

            ?>


        </div>

    </div>

</div>