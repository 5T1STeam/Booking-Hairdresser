<!-- Popup Book Shop -->
<div class="modal fade" id="popup-book-shop">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header" style="background: #222222; color: #fff;">
                <h6 class="modal-title">Chọn Dịch Vụ</h6>
                <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="service">
                    <!--Lấy dữ liệu từ SQL nên hiệu chỉnh sau-->
                    <div class="group-inforshop row container justify-content-between">
                        <div class="col-8" style="font-weight: lighter;">
                            <h4>Tuấn Babershop</h4>
                            <p>43 Lũy Bán Bích, p. Tân Thới Hòa, Tân Phú, TP.HCM</p>
                        </div>
                        <div class="col-2" style="text-align:center;">
                            <div class="row justify-content-center" name="star">
                                <i class="bi bi-star-fill" style="color: #ff421a;"></i>
                                <i class="bi bi-star-fill" style="color: #ff421a;"></i>
                                <i class="bi bi-star-fill" style="color: #ff421a;"></i>
                                <i class="bi bi-star-fill" style="color: #ff421a;"></i>
                                <i class="bi bi-star-half" style="color: #ff421a;"></i>
                            </div>
                            <p style="font-size: 12px; font-weight: italic;">120 đánh giá</p>
                        </div>
                    </div>
                    <br>
                </div>
                <hr />
                <div class="group-service">
                    <div class="row justify-content-between container">
                        <div class="col-6">
                            <h5 name="service-name">Cắt tóc</h5>
                        </div>
                        <div class="col-4" style="text-align:right;">
                            <p>100.000 VNĐ</p>
                            <p style="margin-top:-15px; font-size: 12px; font-weight: lighter">30 phút</p>
                        </div>
                        <div class="col-2" style="text-align:right;">
                            <button type="button" class="btn" id="btn-search" onclick="booking()" data-dismiss="modal">Booking</button>
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-between container">
                        <div class="col-6">
                            <h5 name="service-name">Cắt tóc - Cạo râu</h5>
                        </div>
                        <div class="col-4" style="text-align:right;">
                            <p>130.000 VNĐ</p>
                            <p style="margin-top:-15px; font-size: 12px; font-weight: lighter">40 phút</p>
                        </div>
                        <div class="col-2" style="text-align:right;">
                            <button type="button" class="btn" id="btn-search" onclick="booking()" data-dismiss="modal">Booking</button>
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-between container">
                        <div class="col-6">
                            <h5 name="service-name">Massage</h5>
                        </div>
                        <div class="col-4" style="text-align:right;">
                            <p>80.000 VNĐ</p>
                            <p style="margin-top:-15px; font-size: 12px; font-weight: lighter">30 phút</p>
                        </div>
                        <div class="col-2" style="text-align:right;">
                            <button type="button" class="btn" id="btn-search" onclick="booking()" data-dismiss="modal">Booking</button>
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-between container">
                        <div class="col-6">
                            <h5 name="service-name">Nhuộm tóc</h5>
                        </div>
                        <div class="col-4" style="text-align:right;">
                            <p>300.000 VNĐ</p>
                            <p style="margin-top:-15px; font-size: 12px; font-weight: lighter">60 phút</p>
                        </div>
                        <div class="col-2" style="text-align:right;">
                            <button type="button" class="btn" id="btn-search" onclick="booking()" data-dismiss="modal">Booking</button>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

</div>