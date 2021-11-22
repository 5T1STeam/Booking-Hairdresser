<div id="form-search" class="input-group">
    
    <!-- The Service -->
    <div class="modal fade" id="popup-howto">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header" style="background: #222222; color: #ff421a;">
                    <b style="padding-top: 5px; ">Bạn tìm dịch vụ gì ?</b>
                    <button type="button" class="close" data-dismiss="modal" style="color: #ff421a">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="listservice">
                        <b class="font-size: 12px;">Dịch vụ của chúng tôi</b>
                       
                        <!--Lấy dữ liệu từ SQL nên hiệu chỉnh sau-->
                        <div class="group-service">
                            <?php
                                foreach($service as $id=>$name) {
                                    echo "<label style='padding-top:8px;'>
                                                        <input type='checkbox' name='service' class='service' value=" . $id . " style='display: none;'>
                                                        <span class='btn btn-service'>" . $name . "</span>
                                                        </label>";
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <form method="POST" action="/Booking-Hairdresser/listshop/searchservice&page=1">
                        <input type="hidden" id="serviceChoose" name="serviceChoose"  value=""/>
                        <button type="submit" class="btn" id="btn-search" >Tìm Kiếm</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- The Location -->
    <div class="modal fade" id="popup-location">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header" style="background: #222222; color: #ff421a;">
                    <b style="padding-top: 5px; ">Địa điểm ?</b>
                    <button type="button" class="close" data-dismiss="modal" style="color: #ff421a">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="location">
                        <h5>Vị trí</h5>

                        <!--Lấy dữ liệu từ SQL nên hiệu chỉnh sau-->
                        <div class="row justify-content-center">
                            <select name="calc_provinces" class="locations-choose col-sm-3 btn " id="province">
                                <option value="">Tỉnh / Thành phố</option>
                                <?php
                                    foreach ($province as $id=>$name){
                                        echo "<option value='".$id."'>".$name."</option>";
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
                    <form method="POST" action="/Booking-Hairdresser/listshop/searchlocation&page=1">              
                        <input type="hidden" name="province" value=""/>
                        <input type="hidden" name="district" value=""/>
                        <input type="hidden" name="wards" value=""/>
                        <button type="submit" class="btn" id="btn-search" onlick="" >Tìm Kiếm</button>                                   
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>