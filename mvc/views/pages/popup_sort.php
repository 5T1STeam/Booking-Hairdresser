<!-- Popup Sort -->
<div class="modal fade" id="popup-sort">
    <div class="modal-dialog modal-sm ">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header" style="background: #222222; color: #ffffff;">
                <h5 class="modal-title">Sắp xếp kết quả theo</h5>
                <button type="button" class="close" data-dismiss="modal" style="color: #fff;">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" style="text-align: center;">
                <label class="center">
                    <input type="radio" name="radiosort" class="radiosort" style="display:none;">
                    <span class="btn btn-sort">Đề xuất bởi BoolStyle</span>
                </label>
                <label>
                    <input type="radio" name="radiosort" class="radiosort" style="display:none;">
                    <span class="btn btn-sort">Đánh giá cao</span>
                </label>
                <input type="hidden" class="sortby" value="">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button id="btn-search" onclick="sort()" type="button" class="btn" data-dismiss="modal">Đồng ý</button>
            </div>
        </div>
    </div>
</div>