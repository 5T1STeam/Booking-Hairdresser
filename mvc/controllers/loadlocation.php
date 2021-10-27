<?php
require_once "../../mvc/models/location.php";
    $data_LC = new location();
    if (isset($_POST['province'])){
        $district = $data_LC->GetDistrict($_POST["province"]);
            echo "<option value=''>Quận / Huyện</option>";
        while ($row = mysqli_fetch_array($district)) {
            echo "<option value='" . $row['Id'] . "'>" . $row['Name'] . "</option>";
        }
    }
    if (isset($_POST['district'])) {
        $wards = $data_LC->GetWards($_POST["district"]);
        echo "<option value=''>Phường / Xã</option>";
        while ($row = mysqli_fetch_array($wards)) {
            echo "<option value='" . $row['Id'] . "'>" . $row['Name'] . "</option>";
        }
    }
?>