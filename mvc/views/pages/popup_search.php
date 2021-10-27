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
                    <div class="listservice">
                        <h5 class="modal-title">Dịch vụ phổ biến</h5>
                       
                        <!--Lấy dữ liệu từ SQL nên hiệu chỉnh sau-->
                        <div class="group-service">
                            <?php
                                while ($row = mysqli_fetch_array($service)){
                                    echo "<label style='padding-top:8px;'>
                                        <input type='checkbox' name='serviceid' class='service' value=".$row['Id']." style='display: none;'>
                                        <span class='btn btn-service'>".$row['Name']."</span>
                                        </label>";
                                }
                            ?>
                            <!-- <label>
                                <input type="checkbox" name="service" class="service" value="" style="display: none;">
                                <span class="btn btn-service" for="">cắt tóc</span>
                            </label> -->
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <form method="post">
                        <input type="text" name="service_choose"  value=""/>
                        <a type="submit" class="btn" id="btn-search" href="searchByService">Tìm Kiếm</a>
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
                <div class="modal-header">
                    <input id="model-input-howto" type="text" class="popup-howto form-control" placeholder="Địa điểm ?">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                    <form method="post">              
                        <input type="hidden" name="province" value=""/>
                        <input type="hidden" name="district" value=""/>
                        <input type="hidden" name="wards" value=""/>
                        <a type="submit" class="btn" id="btn-search" href="searchByLocation" >Tìm Kiếm</a>                                   
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>