<?php
class bookingModel extends db{

    public function GetBooking($id){
        $qr = "SELECT * FROM tbl_booking WHERE Id = " .$id. "";
        return mysqli_query($this->con, $qr);
    }

    public function GetAllBooking(){
        $qr = "SELECT * FROM tbl_booking";
        return mysqli_query($this->con, $qr);
    }

}
?>