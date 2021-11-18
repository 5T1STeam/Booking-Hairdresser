<?php 
    require_once "./mvc/models/popupUse.php";
    
    class Popup
    {
        public function popupSearch()
        {
            $data = new PopupUse();
            $province = $data->GetProvince();
            $service = $data->GetService();
            include "./mvc/views/pages/popup_search.php";
        }

        public function popupFilter(){
            $data = new PopupUse();
            $province = $data->GetProvince();
            $service = $data->GetService();
            include "./mvc/views/pages/popup_filter.php";
        }

        public function popupBooking($idshop,$name,$idservice,$services,$price,$time){
            include "./mvc/views/pages/popup_booking.php";
        }

        public function popupReports($userid,$isreportshop,$shopid,$isreportfeedback,$feedback,$reasonid,$createdate){
            include "./mvc/views/pages/popup_reports.php";
        }
    }
    class Library{
        public function Nav(){
            $data = new PopupUse();
            $category = $data->getCategory();
            include "./mvc/views/pages/nav_normal.php";
        }

        public function Footer(){
            include "./mvc/views/pages/footer.php";
        }
    }
