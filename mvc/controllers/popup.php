<?php 
    require_once "./mvc/models/popupUse.php";
    $data_LC = new PopupUse();
    if (isset($_POST['province'])) {
        $district = $data_LC->GetDistrict($_POST["province"]);
        while ($row = mysqli_fetch_array($district)) {
            echo "<option value='" . $row['Id'] . "'>" . $row['Name'] . "</option>";
        }
    }
    if (isset($_POST['district'])) {
        $wards = $data_LC->GetWards($_POST["district"]);
        while ($row = mysqli_fetch_array($wards)) {
            echo "<option value='" . $row['Id'] . "'>" . $row['Name'] . "</option>";
        }
    }
    class Popup
    {
        public function popupSearch()
        {
            $data = new PopupUse();
            $province = $data->GetProvince();
            $service = $data->GetService();
            include "./mvc/views/pages/popup_search.php";
        }
    }
