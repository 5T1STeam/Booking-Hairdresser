<?php
if(isset($_SESSION['Id'])){
    echo"    <!-- Popup Reports -->
    <div class='modal fade' id='report-".$_SESSION['Id']."-".$shopid."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-sm' role='document'>
            <div class='modal-content'>
                <div class='modal-header justify-content-center'>
                    <h5>Báo cáo hình ảnh - nội dung</h5>
                </div>
                <div class='modal-body'>
                    <label class='radio-report'>
                    <input type='radio' name='radio-report' value=1>
                        <span class='radio-report-fix'></span>
                        <span>Nội dung phản cảm</span>
                    </label>
                    <hr/>
                    <label class='radio-report' >
                        <input type='radio' name='radio-report' value=2>
                        <span class='radio-report-fix'></span>
                        <span>Nội dung quá bạo lực</span>
                    </label>
                    <hr/>
                    <label class='radio-report'>
                        <input type='radio' name='radio-report' value='Chứa nội dung gây hấn'>
                        <span class='radio-report-fix'></span>
                        <span>Chứa nội dung gây hấn</span>
                    </label>
                    <hr>
                    <label class='radio-report'>
                    <input type='radio' name='radio-report' value=4>
                        <span class='radio-report-fix'></span>
                        <span>Cổ xúy hành động nguy hiểm</span>
                    </label>
                    <hr>
                    <label class='radio-report'>
                    <input type='radio' name='radio-report' value=5>
                        <span class='radio-report-fix'></span>
                        <span>Ngược đãi trẻ em</span>
                    </label>
                    <hr>
                    <label class='radio-report'>
                    <input type='radio' name='radio-report' value=5>
                        <span class='radio-report-fix'></span>
                        <span>Xâm hại quyền riêng tư của tôi</span>
                    </label>
                    <hr>
                    <label class='radio-report'>
                        <<input type='radio' name='radio-report' value=6>
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
                <form method='post' class='reporting' action=''>
                <input type='hidden' name='userid' value='".$_SESSION['Id']."'/>
                        <input type='hidden' name='isreportshop' value='".$isreportshop."'/>
                        <input type='hidden' name='shopid' value='".$shopid."'/>
                        <input type='hidden' name='isreportfeedback' value='".$isreportfeedback."'/>
                        <input type='hidden' name='feedback' value='".$feedback."'/>
                        <input type='hidden' class='report-value' name='reasonid' value=''/>
                        <button type='button' class='btn btn-cancel' data-dismiss='modal'>Hủy</button>
                        <button type='submit' class='btn btn-reporting' id='btn-report'>Báo Cáo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>";


}
