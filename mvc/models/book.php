<?php

require_once '../../mvc/core/db.php';
class Book
{
    public function SetReport($iduser, $isreportshop, $shopid, $isreportfeedback, $idfeedback, $reason)
    {
        //INSERT INTO `tbl_report`(`Id`, `UserId`, `IsReportShop`, `ShopId`, `IsReportFeedback`, `FeedbackId`, `ReasonId`, `CreateDate`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
        $conn = new db();
        $day = date('Y-m-d H:i:s');
        if ($isreportshop == 1 ) {
            //shop
            $qr = "INSERT INTO `tbl_report` VALUES (NULL,$iduser,$isreportshop,$shopid,NULL,$idfeedback,$reason,'$day')";
            $kq = mysqli_query($conn->con, $qr);
        }elseif($isreportfeedback == 1){
            $qr = "INSERT INTO `tbl_report` VALUES (NULL,$iduser,NULL,$shopid,$isreportfeedback,$idfeedback,$reason,'$day')";
            $kq = mysqli_query($conn->con, $qr);

        }
        if ($kq) {
            //thành công
            echo "<div id='kqReport' class='modal fade'>
                <div class='modal-dialog modal-dialog-centered'>
                    <div style='background:#00ffff; border-radius: 30px; padding: 50px; '>
                         <h2 style='text-align: center; color: #fff'> Báo cáo thành công</h2>
                    </div>  
                </div>
            </div>";
        } else {
            //không thành công
            echo "<div id='kqReport' class='modal fade'>
            <div class='modal-dialog modal-dialog-centered'>
                <div style='background:#ff0000; border-radius: 30px; padding: 50px; '>
                    <h2 style='text-align: center; color: #fff'> Báo cáo không thành công</h2>
                </div>  
            </div>
        </div>";
        }
    }

    public function SetBooking($idshop, $idservice, $iduser, $timebooked)
    {
        $base = 'http://localhost/Booking-Hairdresser';
        $conn = new db();
        $pop = new Book();
        $time = explode(" ", $timebooked);
        $check = $pop->checkLogin($iduser);
        if ('non-user'===$check) {
            echo $check;
            echo "<div id='kqBook' class='modal fade'>
                <div class='modal-dialog modal-dialog-centered'>
                    <div style='background:#F0B716; border-radius: 30px; padding: 50px; '>
                        <h2 style='text-align: center; color: #000'>Vui lòng đăng nhập tài khoản Khách hàng.</h2>
                    </div>  
                </div>
            </div>";
        } elseif ($check==1) {
            if ($pop->checkBooked($idshop, $iduser, $time[0])) {
                echo "<div id='kqBook' class='modal fade'>
                <div class='modal-dialog modal-dialog-centered'>
                    <div style='background:#FFD700; border-radius: 30px; padding: 50px; '>
                        <h2 style='text-align: center; color: #fff'> Lịch của bạn đã bị trùng với cửa hàng khác, vui lòng kiểm tra lại</h2>
                    </div>  
                </div>
            </div>";
            } else {
                $qr = "SELECT * FROM tbl_booking WHERE `ShopId` =" . $idshop . " AND `UserId` =" . $iduser . " AND `DateTime` = '" . $time[0] . "' AND `StartTime`='" . $time[1] . "'  AND IsCanceled =0 AND IsCompleted =0";
                $data = mysqli_query($conn->con, $qr);
                $kq = 1;
                $temp = mysqli_fetch_array($data);

                if ($temp == NULL) {
                    //tạo mới
                    $qr = "INSERT INTO `tbl_booking` VALUES (NULL," . $iduser . "," . $idshop . ",'" . $time[0] . "','" . $time[1] . "',1,0,0,0,NULL,0)";
                    $add = mysqli_query($conn->con, $qr);
                    $qr0 = "SELECT * FROM tbl_booking WHERE `ShopId` =" . $idshop . " AND `UserId` =" . $iduser . " AND `DateTime` = '" . $time[0] . "'";
                    $temp1 = mysqli_query($conn->con, $qr0);
                    while ($temp = mysqli_fetch_assoc($temp1)) {
                        $qr1 = "INSERT INTO tbl_bookingservice VALUES (NULL," . $temp['Id'] . "," . $idservice . ",0)";
                        $mmm = $pop->getPrice($idshop, $idservice);
                        $qr2 = "UPDATE `tbl_booking` SET `TotalBill`=" . $mmm . " WHERE `Id`=" . (int)$temp['Id'] . ";";
                        $add = mysqli_query($conn->con, $qr1);
                        $add = mysqli_query($conn->con, $qr2);
                        $kq = 2;
                    }
                } else {
                    //thêm dịch vụ
                    if ($pop->checkServiceBooked((int)$temp['Id'], $idservice)) {
                        $kq = 0;
                    } else {
                        $kq = $pop->addSeviceBook((int)$temp['Id'], $idservice, (int)$temp['ShopId'], (int)$temp['TotalBill']);
                        $kq  = 3;
                    }
                }



                if ($kq == 1) {
                    $conn->freeSystem($conn->con, $data);
                    // echo implode("\n",mysqli_fetch_array($data));
                    //Không thành công
                    echo "<div id='kqBook' class='modal fade'>
                    <div class='modal-dialog modal-dialog-centered'>
                        <div style='background:#ff0000; border-radius: 30px; padding: 50px; '>
                            <h2 style='text-align: center; color: #fff'> Đặt lịch không thành công</h2>
                        </div>  
                    </div>
                </div>";
                } elseif ($kq == 0) {
                    $conn->freeSystem($conn->con, $data);
                    //Đã đặt rồi
                    echo "<div id='kqBook' class='modal fade'>
                    <div class='modal-dialog modal-dialog-centered'>
                        <div style='background:#00ffff; border-radius: 30px; padding: 50px; '>
                            <h2 style='text-align: center; color: #fff'> Lịch đã được đặt rồi, chỉ chờ bạn đến thôi...</h2>
                        </div>  
                    </div>
                </div>";
                } elseif ($kq == 2) {
                    $conn->freeSystem($conn->con, $data);
                    //thành công
                    echo "<div id='kqBook' class='modal fade'>
                    <div class='modal-dialog modal-dialog-centered'>
                        <div style='background:#ff421a; border-radius: 30px; padding: 50px; '>
                            <h2 style='text-align: center; color: #fff'> Đặt lịch thành công</h2>
                        </div>  
                    </div>
                </div>";
                } elseif ($kq == 3) {
                    $conn->freeSystem($conn->con, $data);
                    //thành công
                    echo "<div id='kqBook' class='modal fade'>
                    <div class='modal-dialog modal-dialog-centered'>
                        <div style='background:#ff421a; border-radius: 30px; padding: 50px; '>
                            <h2 style='text-align: center; color: #fff'> Đặt lịch thành công</h2>
                        </div>  
                    </div>
                </div>";
                }
            }
        } else {
            echo "<div id='kqBook' class='modal fade'>
                <div class='modal-dialog modal-dialog-centered'>
                    <div style='background:#F0B716; border-radius: 30px; padding: 50px; '>
                        <h2 style='text-align: center; color: #000'>Vui lòng đăng nhập để Đặt lịch sớm nhất.</h2>
                    </div>  
                </div>
            </div>
            <script>
            setTimeout(function(){
                $('#kqBook').modal('hide');
                $('.overlay').show(); 
            },4000)
            setTimeout(function(){window.location.href = '".$base."/login'; },6000) </script>";
        }
    }

    public function SetRating(){
        
    }

    //Check lịch trùng
    public function checkBooked($idshop, $iduser, $daybook)
    {
        $conn = new db();
        $qr = "SELECT * FROM `tbl_booking` WHERE `UserId`=" . $iduser . " AND `DateTime`='" . $daybook . "'AND`IsCanceled`=0 AND`IsCompleted`=0;";
        $data = mysqli_query($conn->con, $qr);

        while ($temp = mysqli_fetch_assoc($data)) {
            if ($idshop != (int) $temp['ShopId']) {
                $conn->freeSystem($conn->con, $data);
                return true;
            } else {
                $conn->freeSystem($conn->con, $data);
                return false;
            }
        }
    }
    public function getPrice($idshop, $idservice)
    {
        $conn = new db();
        $qr = "SELECT * FROM `tbl_shopservices` WHERE `ShopId`=" . $idshop . " AND`ServiceId`=" . $idservice . ";";
        $price = 0;
        $data = mysqli_query($conn->con, $qr);
        while ($row = mysqli_fetch_assoc($data)) {
            $price = (int)$row['Price'];
        }
        $conn->freeSystem($conn->con, $data);
        return $price;
    }
    public function checkServiceBooked($idbook, $idservice)
    {
        $conn = new db();
        $qr =  "SELECT * FROM `tbl_bookingservice` WHERE `BookingId` =" . $idbook . " AND `ShopserviceId`=" . $idservice . ";";
        $data = mysqli_query($conn->con, $qr);
        if (mysqli_fetch_array($data) == null) {
            $conn->freeSystem($conn->con, $data);
            return false;
        } else {
            $conn->freeSystem($conn->con, $data);
            return true;
        }
    }
    public function addSeviceBook($idbook, $idservice, $idshop, $bill)
    {
        $pop = new book();
        $conn = new db();
        $qr = "INSERT INTO tbl_bookingservice VALUES (NULL," . $idbook . "," . $idservice . ",'non')";
        $data = mysqli_query($conn->con, $qr);
        $qr = "UPDATE `tbl_booking` SET `TotalBill`=" . $pop->getPrice($idshop, $idservice) + $bill . " WHERE `Id`=" . $idbook . ";";
        $data = mysqli_query($conn->con, $qr);
        $conn->freeSystem($conn->con, $data);
    }
    public function checkId($id)
    {
        $conn = new db();
        $ss = isset($_SESSION['Password'])? $_SESSION['Password'] : 0;
        $qr = "SELECT * FROM `tbl_user` WHERE `Id` = " . $id . ";";
        $data = mysqli_query($conn->con, $qr);
        $rows = mysqli_fetch_assoc($data);
        if ($rows == null) {
            return false;
        } elseif ($rows['RoleId'] == 1) {
            if (md5($rows['PasswordHash']) == $ss){ 
                return true;
            }else { 
                return false;
            }
        } else{
            return 'non-user';
        }

    }
    public function checkLogin($id)
    {
        $pop = new book();
        $check = $pop->checkId($id);
        if ($id == 'non') {
            return false;
        }elseif ((int)$check==1) {
            //Đã đăng nhập
            return true;
        }elseif ($check === 'non-user') {
            return 'non-user';
        } else {
            return false;
        }
    }
}
