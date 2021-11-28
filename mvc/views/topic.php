<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogDetail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/App.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/stylesBlog.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/listshopT.css">

    <!-- Main -->

    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/popup.css">
    <!--Popup-->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- location -->
    <script src="https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js"></script>
</head>
<body>
    <header id="header">
        <div class="container-fluid px-0">
            <nav class="navbar navbar-expand-sm navbar-dark bg-white topnav">
                <a href="<?php echo BASE_URL ?>"><img src="<?php echo BASE_URL ?>/public/img/logo.png" style="width: 60px;"></a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav mx-sm-auto">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo BASE_URL ?>"><h5>Cộng đồng BookStylist</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" onclick="clickBtndoitac()"><h5>Đối tác</h5></a>        
                        </li>
                    </ul>
                    <form class="nav justify-content-end form-inline  col-lg-8">
                        <input id="mbsearchB" type="text" class="form-control mr-5 " placeholder="Bạn đang tìm kiếm gì ?" data-toggle="modal" data-target="#popup-howto">
                        <a class="btn btn-login" href="<?php echo BASE_URL ?>/login">Đăng ký / Đăng nhập</a>
                    </form>
                </div>
            </nav>
        </div>
     <?php
        include_once './mvc/views/pages/topic'.$data["page"].'.php'
     ?>
     <input id='base' type='hidden' value='<?php echo BASE_URL ?>'/>
    <footer>
        <div class="container">
            <!--Bắt Đầu Nội Dung Giới Thiệu-->
            <div class="noi-dung about">
                <h2>Về Chúng Tôi</h2>
                <p>Lorem ipsumdolor sit...</p>
                <ul class="social-icon">
                    <li><a href=""><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <!--Kết Thúc Nội Dung Giới Thiệu-->
            <!--Bắt Đầu Nội Dung Đường Dẫn-->
            <div class="noi-dung links">
                <h2>Đường Dẫn</h2>
                <ul>
                    <li><a href="#">Trang Chủ</a></li>
                    <li><a href="#">Về Chúng Tôi</a></li>
                    <li><a href="#">Thông Tin Liên Lạc</a></li>
                    <li><a href="#">Dịch Vụ</a></li>
                    <li><a href="#">Điều Kiện Chính Sách</a></li>
                </ul>
            </div>
            <!--Kết Thúc Nội Dung Đường Dẫn-->
            <!--Bắt Đâu Nội Dung Liên Hệ-->
            <div class="noi-dung contact">
                <h2>Thông Tin Liên Hệ</h2>
                <ul class="info">
                    <li>
                        <span><i class="fa fa-map-marker"></i></span>
                        <span>Đường Số 1<br />
                            Quận 1, Thành Phố Hồ Chí Minh<br />
                            Việt Nam</span>
                    </li>
                    <li>
                        <span><i class="fa fa-phone"></i></span>
                        <p><a href="#">+84 123 456 789</a>
                            <br />
                            <a href="#">+84 987 654 321</a></p>
                    </li>
                    <li>
                        <span><i class="fa fa-envelope"></i></span>
                        <p><a href="#">diachiemail@gmail.com</a></p>
                    </li>
  
                </ul>
            </div>
            <!--Kết Thúc Nội Dung Liên Hệ-->
        </div>
    </footer>
  


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL ?>/public/js/owl.carousel.min.js"></script>
    <script src="<?php echo BASE_URL ?>/public/js/Detail2.script.js"></script>
    <script src="<?php echo BASE_URL ?>/public/js/nav-sevice-page.js">
    </script>
    <script src="<?php echo BASE_URL ?>/public/js/popup.js"></script>
</body>
</html>