<?php 
//Chú thích bạn dùng: các biến nhận biết đặt trong rate(...) và nhập thêm vào form:62 các giá trị trong rate(...) và action="link file php"
function rate(){
echo"    <!-- Popup Reports -->
    <div class='modal fade' id='popup-report' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-sm' role='document'>
            <div class='modal-content'>
                <div class='modal-header justify-content-center'>
                    <h5>Báo cáo hình ảnh - nội dung</h5>
                </div>
                <div class='modal-body'>
                    <label class='radio-report'>
                        <input type='radio' name='radio-report' value='Nội dung phản cảm'>
                        <span class='radio-report-fix'></span>
                        <span>Nội dung phản cảm</span>
                    </label>
                    <hr>
                    <label class='radio-report'>
                        <input type='radio' name='radio-report' value='Nội dung quá bạo lực'>
                        <span class='radio-report-fix'></span>
                        <span>Nội dung quá bạo lực</span>
                    </label>
                    <hr>
                    <label class='radio-report'>
                        <input type='radio' name='radio-report' value='Chứa nội dung gây hấn'>
                        <span class='radio-report-fix'></span>
                        <span>Chứa nội dung gây hấn</span>
                    </label>
                    <hr>
                    <label class='radio-report'>
                        <input type='radio' name='radio-report' value='Cổ xúy hành động nguy hiểm'>
                        <span class='radio-report-fix'></span>
                        <span>Cổ xúy hành động nguy hiểm</span>
                    </label>
                    <hr>
                    <label class='radio-report'>
                        <input type='radio' name='radio-report' value='Ngược đãi trẻ em'>
                        <span class='radio-report-fix'></span>
                        <span>Ngược đãi trẻ em</span>
                    </label>
                    <hr>
                    <label class='radio-report'>
                        <input type='radio' name='radio-report' value='Xâm hại quyền riêng tư của tôi'>
                        <span class='radio-report-fix'></span>
                        <span>Xâm hại quyền riêng tư của tôi</span>
                    </label>
                    <hr>
                    <label class='radio-report'>
                        <input type='radio' name='radio-report' value='Phân biệt chúng tộc'>
                        <span class='radio-report-fix'></span>
                        <span>Phân biệt chúng tộc</span>
                    </label>
                    <hr>
                    <label class='radio-report'>
                        <input type='radio' name='radio-report' value='Spam'>
                        <span class='radio-report-fix'></span>
                        <span>Spam</span>
                    </label>

                </div>
                <div class='modal-footer justify-content-center'>
                    <form method='post' action='#'>
                        
                        <input type='hidden' id='report-value' />
                        <button type='button' class='btn btn-cancel' data-dismiss='modal'>Hủy</button>
                        <button type='submit' class='btn' id='btn-report'>Báo Cáo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>";


}
