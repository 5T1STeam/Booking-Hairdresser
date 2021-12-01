<link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/userprofileStyle/style-infor-page.css">
<div class="container">
    <!-- Thay đổi ảnh đại diện -->
    <div class="modal fade" id="updateImg" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="color: #ff421a;">
                    <h3 class="modal-title" style="font-size: 20px;">Thay đổi ảnh đại diện</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
               
                <div id="previewcontent" class="modal-body" style="text-align: center; padding-top:-20px;">
                    

                </div>
                <hr />
                <div class="modal-body" style="text-align: center;margin-top:-20px;">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="file" name="image" id="imagess">
                        <input class="btn" type="submit" name="submit" id="submitImg" value="Xác Nhận">
                    </form>
                </div>
                <style>
                    #submitImg {
                        background-color: #FF421A;
                        color: #fff;
                        border-radius: 50px;
                        margin: 0 10px;
                    }
                </style>
            </div>
        </div>
    </div>
    <div class="  head-infor-account">
        <h3> Thông tin tài khoản </h3>
    </div>

    <div class=" block-infor ">

        <div class="row justify-content-center">
            <img src="<?php if ($data['GN']['Avatar'] !== null) {
                            echo  BASE_URL.'/public/uploads/avatar/'.$data['GN']['Avatar'];
                        } else echo 'https://static2.yan.vn/YanNews/2167221/202102/facebook-cap-nhat-avatar-doi-voi-tai-khoan-khong-su-dung-anh-dai-dien-e4abd14d.jpg' ?>" style="border-radius: 500px;" width="120" height="120" id="profileDisplay" />
        </div>
        <label class="row text-center edit" data-toggle="modal" data-target="#updateImg">
            <span class="col"> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 18 18">
                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                </svg> Chỉnh sửa ảnh đại diện</span>
        </label>





        <hr>

        <form action="" method="POST" class="up" enctype="multipart/form-data">
            <div class="row row-infor">
                <div class="col-3">
                    <label class="lable">Họ tên: </label>
                </div>
                <div class="col-6 ">
                    <input type="text" name="nameUser" class="form-control forrm" value="<?php echo $data['GN']['Name'] ?>">
                </div>
            </div>
            <div class="row row-infor">
                <div class="col-3 ">
                    <label class="lable">Số điện thoại: </label>
                </div>
                <div class="col-6">
                    <input type="text" name="phoneNumber" class="form-control forrm" value="<?php echo $data['GN']['PhoneNumber'] ?>">
                </div>
            </div>
            <div class="row row-infor">
                <div class="col-3 ">
                    <label class="lable">Email: </label>
                </div>
                <div class="col-6">
                    <input type="text" name="Emails" class="form-control forrm" value="<?php echo $data['GN']['Email'] ?>">
                </div>
            </div>
            <div class="row row-infor ">
                <div class="col-3 ">
                    <label class="lable">Địa chỉ: </label>
                </div>
                <div class="col-6">
                    <input type="text" name="Location" class="form-control forrm" value="<?php if ($data['GN']['AddressPath'] == 0) {
                                                                                               echo $data['GN']['FullAdress'];
                                                                                            } else {
                                                                                                echo $data['GN']['FullAdress'] . ', ' . $data['GN']['Ward'] . ', ' . $data['GN']['District'] . ', ' . $data['GN']['Province'];
                                                                                            } ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-3 ">
                    <label class="lable">Giới tính: </label>
                </div>
                <div class="form-check form-check-inline gender">
                    <input class="form-check-input radio" checked type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Nam</label>
                </div>
                <div class="form-check form-check-inline gender">
                    <input class="form-check-input radio " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Nữ</label>
                </div>
                <div class="form-check form-check-inline gender">
                    <input class="form-check-input radio " type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Khác</label>
                </div>
            </div>
            <div class="row row-infor ">
                <div class="col-3 ">
                    <label class="lable">Ngày sinh: </label>
                </div>
                <div class="col-6">
                    <input type="date" name="dateBirth" class="form-control forrm" value="<?php echo $data['GN']['Birthday'] ?>">
                </div>
            </div>
            <div class="row row-infor">
                <div class="col-3">
                    <label class="lable">Mật khẩu: </label>
                </div>
                <div class="col-6 ">

                    <input name="passwordUser" type="password" class="form-control inputclass formmk" name="password" required value="<?php echo $data['GN']['PasswordHash'] ?>" readonly>
                </div>
                <div class="change-password " data-toggle="collapse" data-target="#password">Thay đổi</div>
            </div>

            <div id="password" class="collapse">
                <div class="row row-infor">
                    <div class="col-3">
                        <label class="lable">Mật khẩu cũ: </label>
                    </div>
                    <div class="col-6 ">
                        <input name="oldPass" type="password" class="form-control formmk" placeholder="Nhập mật khẩu cũ">
                    </div>
                </div>
                <div class="row row-infor">
                    <div class="col-3">
                        <label class="lable">Mật khẩu mới: </label>
                    </div>
                    <div class="col-6 ">
                        <input name="newPass" type="password" class="form-control formmk" placeholder="Nhập mật khẩu mới từ 6 đến 32 kí tự">
                    </div>
                </div>
                <div class="row row-infor">
                    <div class="col-3">
                        <label class="lable">Nhập lại: </label>
                    </div>
                    <div class="col-6 ">
                        <input name="newPassConfirm" type="password" class="form-control formmk" placeholder="Nhập lại mật khẩu mới">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <button type="submit" name="saveuser" class="btn-update col-6 ">Cập nhật</button>
            </div>
        </form>


        <hr>
        <div class="row row-infor ">
            <div class="col">
                Liên kết tài khoản mạng xã hội
            </div>
        </div>
        <div class="row row-infor">
            <div class="col-8 col-lg-9 ">
                <span class="icon-facebook"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 18 18">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </span> Facebook
            </div>
            <div class="col-4 col-lg-3 text-link">
                Liên kết
            </div>
        </div>
        <div class="row row-infor">
            <div class="col-8 col-lg-9">
                <span class="icon-google">
                    <svg width="30" height="30" data-icon="google-plus" class="svg-inline--fa fa-google-plus fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550 550">
                        <path fill="currentColor" d="M256,8C119.1,8,8,119.1,8,256S119.1,504,256,504,504,392.9,504,256,392.9,8,256,8ZM185.3,380a124,124,0,0,1,0-248c31.3,0,60.1,11,83,32.3l-33.6,32.6c-13.2-12.9-31.3-19.1-49.4-19.1-42.9,0-77.2,35.5-77.2,78.1S142.3,334,185.3,334c32.6,0,64.9-19.1,70.1-53.3H185.3V238.1H302.2a109.2,109.2,0,0,1,1.9,20.7c0,70.8-47.5,121.2-118.8,121.2ZM415.5,273.8v35.5H380V273.8H344.5V238.3H380V202.8h35.5v35.5h35.2v35.5Z"></path>
                    </svg>
                </span> Google+
            </div>
            <div class="col-4 col-lg-3 text-link-cancle ">
                Hủy liên kết
            </div>
        </div>

    </div>
</div>
<div class="update"></div>
<script>
    $(document).ready(function() {
        $('.up').on('submit', function(e) {
            e.preventDefault();
            str = $(this).serialize();
            $.post('/Booking-Hairdresser/mvc/controllers/updatePro.php',
                    $(this).serialize()
                )
                .done(function(data) {
                    $('.update').html(data)
                    $('#kqBook').modal('show')
                    setTimeout(function() {
                        location.reload();
                    },1000)
                });
        })
        $('#submitImg').click(function() {
            var image_name = $('#imagess').val();
            if (image_name == '') {
                alert("Vui lòng chọn hình ảnh");
                return false;
            } else {
                var extension = $('#imagess').val().split('.').pop().toLowerCase();
                if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                    alert('Hình ảnh không hợp lệ');
                    $('#imagess').val('');
                    return false;
                }
            }
        });
        $('#imagess').change(function() {
            $("#previewcontent").html('');
            for (var i = 0; i < $(this)[0].files.length; i++) {
                $("#previewcontent").append('<img src="' + window.URL.createObjectURL(this.files[i]) + '" width="200px" height="200px" style="border-radius:100px;"/>');
            }
        });
    });
</script>