<?php
$id =isset($_SESSION['Id'])?$_SESSION['Id']:'non';
 echo "<!-- Popup Book -->
 <div class='modal fade' id='book-" . $idshop . "-" . $idservice . "'>
     <div class='modal-dialog modal-lg'>
         <div class='modal-content'>
 
             <!-- Modal Header -->
             <div class='modal-header' style='background: #222222; color: #ffffff;'>
                 <h4 class='modal-title'>Đặt lịch</h4>
                 <button type='button' class='close' data-dismiss='modal' style='color:#fff;'>&times;</button>
             </div>
 
             <!-- Modal body -->
             <div class='modal-body'style='text-align: center;'>
                 <div class='group-day' >
                     <label>
                         <input type='radio' name='radioday' class='radioday' style='display:none;'>
                         <span class='btn btn-day'>Thứ Hai</span>
                     </label>
                     <label>
                         <input type='radio' name='radioday' class='radioday' style='display:none;'>
                         <span class='btn btn-day'>Thứ Ba</span>
                     </label>
                     <label>
                         <input type='radio' name='radioday' class='radioday' style='display:none;'>
                         <span class='btn btn-day'>Thứ Tư</span>
                     </label>
                     <label>
                         <input type='radio' name='radioday' class='radioday' style='display:none;'>
                         <span class='btn btn-day'>Thứ Năm</span>
                     </label>
                     <label>
                         <input type='radio' name='radioday' class='radioday' style='display:none;'>
                         <span class='btn btn-day'>Thứ Sáu</span>
                     </label>
                     <label>
                         <input type='radio' name='radioday' class='radioday' style='display:none;'>
                         <span class='btn btn-day'>Thứ Bảy</span>
                     </label>
                     <label>
                         <input type='radio' name='radioday' class='radioday' style='display:none;'>
                         <span class='btn btn-day'>Chủ Nhật</span>
                     </label>
                 </div>
                 <hr>
                 <p class='full-day'>Ngày - Tháng - Năm</p>
                 <hr>
                 <div class='row'>
                     <div class='col-4'>Sáng</div>
                     <div class='col-4'>Trưa</div>
                     <div class='col-4'>Chiều</div>
                 </div>
                 <hr>
                 <div class='group-time row'>
                     <div class='morning col-4'>
                         <!--tự hiện-->
                     </div>
                     <div class='afternoon col-4'>
                         <!--tự hiện-->
                     </div>
                     <div class='evening col-4'>
                         <!--tự hiện-->
                         
                     </div>
                     
                 </div>
                 <hr/>
                 <!-- Modal footer -->
                 <div class='model-body row justify-content-between container' style='margin-top:-10px; text-align: center;'>
                     <div class='col-6' >
                         <h6>" . $name . "</h6>
                         <h6 class='re-check' style='color:#ff421a;'></h6>
                         <h6>" . $services . " - " . number_format($price,0,'.','.') . " VNĐ - " . $time . " phút</h6>
                     </div>
                     <div class='col-6'>
                         <form class='booKing'>
                            <button type='button' class='btn btn-cancel check' style='margin:5px 0;'>Xác Nhận</button>
                            <input type='hidden' name='time' class='timeBooking' value=''/>
                            <input type='hidden' name='iduser' value='".$id."'/>
                            <input type='hidden' name='idshop' value='" . $idshop . "'/>
                            <input type='hidden' name='idservice' value='" . $idservice . "'/>
                            <button type='submit' class='btn btn-booking' href='#'>Đặt Lịch</button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>";
