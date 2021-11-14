
<?php
require_once '../../mvc/core/db.php';
class Book
{

    public function SetReport($iduser, $isreportshop, $shopid, $isreportfeedback, $idfeedback, $reason)
    {
        //INSERT INTO `tbl_report`(`Id`, `UserId`, `IsReportShop`, `ShopId`, `IsReportFeedback`, `FeedbackId`, `ReasonId`, `CreateDate`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
        $conn = new db();
        $day = date('Y-m-d H:i:s');
        if ($isreportshop = 1 || $isreportfeedback = 1) {
            //shop
            $qr = "INSERT INTO tbl_report VALUES (NULL,$iduser,$isreportshop,$shopid,$isreportfeedback,$idfeedback,$reason,$day)";
            $kq = mysqli_query($conn->con, $qr);
        }
        if ($kq) {
            //thành công
        } else {
            //không thành công
        }
    }


    public function SetBooking($idshop, $idservice, $iduser, $timebooked)
    {
        $conn = new db();
        $pop = new Book();
        $time = explode(" ", $timebooked);
        if ($pop->checkBooked($idshop, $iduser, $time[0])) {
            echo "<div id='kqBook' class='modal fade'>
            <div class='modal-dialog modal-dialog-centered'>
                <div style='background:#FFD700; border-radius: 30px; padding: 50px; '>
                    <h2 style='text-align: center; color: #fff'> Lịch của bạn đã bị trùng với của hàng khác, vui lòng kiểm tra lại</h2>
                </div>  
            </div>
        </div>";
        } else {
            $qr = "SELECT * FROM tbl_booking WHERE ShopId =" . $idshop . " AND UserId =" . $iduser . " AND DateTime = '" . $time[0] . "' AND IsCanceled =0 AND IsCompleted =0";
            $data = mysqli_query($conn->con, $qr);
            $kq=1;
            while($temp = mysqli_fetch_assoc($data)){
                if ($temp == null) {
                    //tạo mới
                    $qr = "INSERT INTO `tbl_booking` VALUES (NULL,".$iduser.",".$idshop.",'".$time[0]."','".$time[1]."',1,0,0,0,NULL,0)";
                    $add = mysqli_query($conn->con, $qr);
                    $qr0 = "SELECT * FROM tbl_booking WHERE ShopId =" . $idshop . " AND UserId =" . $iduser . " AND DateTime = '" . $time[0]."'";
                        $temp1 = mysqli_query($conn->con, $qr0);
                        while($temp = mysqli_fetch_assoc($temp1)){
                            $qr1 = "INSERT INTO tbl_bookingservice VALUES (NULL," . $temp['Id'] . "," . $idservice . ",0)";
                            $mmm=$pop->getPrice($idshop, $idservice);
                            $qr2 = "UPDATE `tbl_booking` SET `TotalBill`=".$mmm." WHERE `Id`=".(int)$temp['Id'].";";
                            $add = mysqli_query($conn->con, $qr1);
                            $add = mysqli_query($conn->con, $qr2);
                            $kq=2;                    
                        }
                } else {
                        //thêm dịch vụ
                        if ($pop->checkServiceBooked($temp['Id'], $idservice)) {
                            $kq = 0;
                        } else {
                            $kq = $pop->addSeviceBook($temp['Id'], $idservice);
                            $kq  =3;
                        }
                    
                }
            }
            
            //test
            if($kq==1){ 
                $conn->freeSystem($conn->con, $data);
                //Không thành công
                echo "<div id='kqBook' class='modal fade'>
                <div class='modal-dialog modal-dialog-centered'>
                    <div style='background:#ff0000; border-radius: 30px; padding: 50px; '>
                        <h2 style='text-align: center; color: #fff'> Đặt lịch không thành công</h2>
                    </div>  
                </div>
            </div>";
            }elseif($kq ==0){
                $conn->freeSystem($conn->con, $data);
                //Đã đặt rồi
                echo "<div id='kqBook' class='modal fade'>
                <div class='modal-dialog modal-dialog-centered'>
                    <div style='background:#00ffff; border-radius: 30px; padding: 50px; '>
                        <h2 style='text-align: center; color: #fff'> Lịch đã được đặt rồi, chỉ chờ bạn đến thôi...</h2>
                    </div>  
                </div>
            </div>";
            }elseif($kq ==2){
                $conn->freeSystem($conn->con, $data);   
                //thành công
                echo "<div id='kqBook' class='modal fade'>
                <div class='modal-dialog modal-dialog-centered'>
                    <div style='background:#ff421a; border-radius: 30px; padding: 50px; '>
                        <h2 style='text-align: center; color: #fff'> Đặt lịch thành công</h2>
                    </div>  
                </div>
            </div>";
            }elseif($kq==3){
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
    }

    //Check lịch trùng
    public function checkBooked($idshop, $iduser, $daybook)
    {
        $conn = new db();
        $qr = "SELECT * FROM `tbl_booking` WHERE `UserId`=".$iduser." AND `DateTime`='".$daybook."'AND`IsCanceled`=0 AND`IsCompleted`=0;";
        $data = mysqli_query($conn->con, $qr);
        
                while ($temp = mysqli_fetch_assoc($data)) {
                    if ($idshop !=(int) $temp['ShopId']) {
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
        $qr = "SELECT * FROM `tbl_shopservices` WHERE `ShopId`=".$idshop." AND`ServiceId`=".$idservice.";";
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
        $qr = "SELECT * FROM 'tbl_bookingservice' WHERE BookingId =" . $idbook . " AND ServiceId=" . $idservice;
        $data = mysqli_query($conn->con, $qr);
        if ($data == false) {
            $conn->freeSystem($conn->con, $data);
            return false;
        } else {
            $conn->freeSystem($conn->con, $data);
            return true;
        }
    }
    public function addSeviceBook($idbook, $idservice)
    {
        $conn = new db();
        $qr = "INSERT INTO tbl_bookingservice VALUES (NULL," . $idbook . "," . $idservice . ",'non')";
        $data = mysqli_query($conn->con, $qr);
        if ($data == false) {
            $conn->freeSystem($conn->con, $data);
            return false;
        } else {
            $conn->freeSystem($conn->con, $data);
            return true;
        }
    }
}
