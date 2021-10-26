<!-- Popup Book -->
<div class="modal fade" id="popup-book">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header" style="background: #222222; color: #ffffff;">
                <h4 class="modal-title">Đặt lịch</h4>
                <button type="button" class="close" data-dismiss="modal" style="color:#fff;">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="group-day" style="text-align: center;">
                    <label>
                        <input type="radio" name="radioday" class="radioday" style="display:none;">
                        <span class="btn btn-day">Thứ Hai</span>
                    </label>
                    <label>
                        <input type="radio" name="radioday" class="radioday" style="display:none;">
                        <span class="btn btn-day">Thứ Ba</span>
                    </label>
                    <label>
                        <input type="radio" name="radioday" class="radioday" style="display:none;">
                        <span class="btn btn-day">Thứ Tư</span>
                    </label>
                    <label>
                        <input type="radio" name="radioday" class="radioday" style="display:none;">
                        <span class="btn btn-day">Thứ Năm</span>
                    </label>
                    <label>
                        <input type="radio" name="radioday" class="radioday" style="display:none;">
                        <span class="btn btn-day">Thứ Sáu</span>
                    </label>
                    <label>
                        <input type="radio" name="radioday" class="radioday" style="display:none;">
                        <span class="btn btn-day">Thứ Bảy</span>
                    </label>
                    <label>
                        <input type="radio" name="radioday" class="radioday" style="display:none;">
                        <span class="btn btn-day">Chủ Nhật</span>
                    </label>
                </div>
                <hr>
                <p id="full-day">Ngày - Tháng - Năm</p>
                <hr>
                <div class="row" style="text-align: center;">
                    <div class="col-4">Sáng</div>
                    <div class="col-4">Trưa</div>
                    <div class="col-4">Chiều</div>
                </div>
                <hr>
                <div class="group-time row" style="text-align: center;">
                    <div id="morning" class="col-4">
                        <!--tự hiện-->
                    </div>
                    <div id="afternoon" class="col-4">
                        <!--tự hiện-->
                    </div>
                    <div id="evening" class="col-4">
                        <!--tự hiện-->
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel" data-dismiss="modal">Hủy</button>
                </div>

            </div>
        </div>
    </div>
</div>