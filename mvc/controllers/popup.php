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
    }
