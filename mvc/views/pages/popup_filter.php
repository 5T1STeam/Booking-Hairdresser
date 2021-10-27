<!-- Popup Filter -->
<div class="modal fade" id="popup-filters">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header" style="background: #222222; color: #ffffff;">
                <h6 class="modal-title">Bộ lọc</h6>
                <button type="button" class="close" data-dismiss="modal" style="color:#ffffff">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h5 class="modal-title">DỊCH VỤ</h5>
            </div>
            <div class="group-service modal-body">
                <?php
                while ($row = mysqli_fetch_array($service)) {
                    echo "<label style='padding-top:8px;'>
                                        <input type='checkbox' name='service' class='service' value=" . $row['Id'] . " style='display: none;'>
                                        <span class='btn btn-service'>" . $row['Name'] . "</span>
                                        </label>";
                }
                ?>
                <!--có thể thêm-->
                <hr />
            </div>

            <div class="container">
                <h5 class="modal-title">VỊ TRÍ</h5>
                <div class="row justify-content-center">
                    <select name="calc_provinces" class="col-sm-3 btn" id="province_f">
                        <option value="">Tỉnh / Thành phố</option>
                        <?php
                        while ($row = mysqli_fetch_array($province)) {
                            echo "<option value='" . $row['Id'] . "'>" . $row['Name'] . "</option>";
                        }
                        ?>
                    </select>
                    <select name="calc_district" class="col-sm-3 btn" id="district_f">
                        <option value="">Quận / Huyện</option>
                    </select>
                    <select name="calc_ward" class="col-sm-3 btn" id="wards_f">
                        <option value="">Phường / Xã</option>
                    </select>
                </div>
                <br />
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn" id="btn-search" onclick="searchFilters()" data-dismiss="modal">Tìm Kiếm</button>
            </div>

        </div>
    </div>
</div>