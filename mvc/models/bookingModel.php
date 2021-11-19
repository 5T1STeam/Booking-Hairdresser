<?php
class bookingModel extends db{
   
    public function getBooking($id){
        $qr = "SELECT * FROM tbl_booking WHERE UserID= $id ";
        return mysqli_query($this->con,$qr);
    }
   

    
}
?>