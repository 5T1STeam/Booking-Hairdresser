<div id="form-search" class="input-group">
    
    <!-- The Service -->
    <div class="modal fade" id="popup-howto">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <input id="model-input-howto" type="text" class="popup-howto form-control" placeholder="Bạn tìm dịch vụ gì?">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="service">
                        <h5 class="modal-title">Dịch vụ phổ biến</h5>
                        <br />
                        <!--Lấy dữ liệu từ SQL nên hiệu chỉnh sau-->
                        <div class="group-service">
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

                        </div>
                        <form method="post"></form>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn" id="btn-search" href="" data-dismiss="modal">Tìm Kiếm</button>
                </div>

            </div>
        </div>
    </div>

    
    <!-- The Location -->
    <div class="modal fade" id="popup-location">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <input id="model-input-howto" type="text" class="popup-howto form-control" placeholder="Địa điểm ?">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="service">
                        <h5>Vị trí</h5>

                        <!--Lấy dữ liệu từ SQL nên hiệu chỉnh sau-->
                        <div class="row justify-content-center">
                            <select name="calc_provinces" class="locations-choose col-sm-3 btn " id="province">
                                <option value="">Tỉnh / Thành phố</option>
                                <?php
                                    while($row = mysqli_fetch_array($province)){
                                        echo "<option value='".$row['Id']."'>".$row['Name']."</option>";
                                    }
                                ?>
                            </select>
                            <select name="calc_district" class="locations-choose col-sm-3 btn " id="district">
                                <option value="">Quận / Huyện</option>
                            
                            </select>
                            <select name="calc_ward" class="locations-choose col-sm-3 btn " id= "wards">
                                <option value="">Phường / Xã</option>
                            </select>

                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn" id="btn-search" onclick="" data-dismiss="modal">Tìm Kiếm</button>
                    <!--php listshop-->
                </div>

            </div>
        </div>
    </div>
</div>