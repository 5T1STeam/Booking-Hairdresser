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

        public function popupReports($isreportshop,$shopid,$isreportfeedback,$feedback){
            include "./mvc/views/pages/popup_reports.php";
        }
        public function popupRate($userid,$shopid,$feedbackid,$createdate){
            include "./mvc/views/pages/popup_rate.php";
        }
    }
    class Library{
        public function Nav(){
            $data = new PopupUse();
            $category = $data->getCategory();
            include "./mvc/views/pages/nav_normal.php";
        }

        public function Categories(){
            $data = new PopupUse();
            $category = $data->getCategory();
            return $category;
        }

        public function Footer(){
            include "./mvc/views/pages/footer.php";
        }
    }
