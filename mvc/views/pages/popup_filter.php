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
                <label>
                    <input type="checkbox" name="service" class="service" style="display: none;">
                    <span class="btn btn-service" for="">Cắt Tóc</span>
                </label>
                <label>
                    <input type="checkbox" name="service" class="service" style="display: none;">
                    <span class="btn btn-service">Làm Nail</span>
                </label>
                <label>
                    <input type="checkbox" name="service" class="service" style="display: none;">
                    <span class="btn btn-service">Duỗi Tóc</span>
                </label>
                <label>
                    <input type="checkbox" name="service" class="service" style="display: none;">
                    <span class="btn btn-service">Uốn Tóc</span>
                </label>
                <!--có thể thêm-->
                <hr />
            </div>

            <div class="container">
                <h5 class="modal-title">VỊ TRÍ</h5>
                <div class="row justify-content-center">
                    <select name="calc_provinces" required="" class="col-sm-3 btn" id="locations-choose">
                        <option value="">Tỉnh / Thành phố</option>
                        <?php

                        ?>
                    </select>
                    <select name="calc_district" required="" class="col-sm-3 btn" id="locations-choose">
                        <option value="">Quận / Huyện</option>
                    </select>
                    <select name="calc_ward" required="" class="col-sm-3 btn" id="locations-choose">
                        <option value="">Phường / Xã</option>
                    </select>
                </div>
                <br />
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn" id="btn-search" onclick="<?php include 'search.php'?>" data-dismiss="modal">Tìm Kiếm</button>
            </div>

        </div>
    </div>
</div>