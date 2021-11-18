<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/App.css">
    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/styles.css">
    <link rel="stylesheet" type="text/css" href="../../../Booking-Hairdresser/public/css/style.css">
    <!-- Main -->

    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/popup.css">
    <!--Popup-->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- location -->
    <script src="https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js"></script>
    <style>
        .owl-prev {
            left: -30px;
        }

        .owl-next {
            right: -30px;
        }

        .owl-prev,
        .owl-next {
            position: absolute;
            top: 30%;
        }

        .owl-prev span,
        .owl-next span {
            font-size: 60px;
            color: #787878;
        }

        .owl-theme .owl-nav [class*="owl-"]:hover {
            background-color: transparent;
        }
    </style>
</head>

<body>
    <header id="header">
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
                        <div class="service">
                            <h5 class="modal-title">Dịch vụ phổ biến</h5>
                            <br>
                            <!--Lấy dữ liệu từ SQL nên hiệu chỉnh sau-->
                            <div class="group-service">
                                <label>
                                    <input type="checkbox" name="service" class="service" style="display: none;">
                                    <span class="btn btn-service" for="">Cắt Tóc</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="service" class="service" style="display: none;">
                                    <span class="btn btn-service">Làm Nail</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="service" class="service" style="display: none;">
                                    <span class="btn btn-service">Duỗi Tóc</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="service" class="service" style="display: none;">
                                    <span class="btn btn-service">Uốn Tóc</span>
                                </label>
                                <!--có thể thêm-->

                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn" id="btn-search" onclick="searchHowto()" data-dismiss="modal">Tìm Kiếm</button>
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
                        <div class="service">
                            <h5 class="modal-title">Vị trí</h5>

                            <!--Lấy dữ liệu từ SQL nên hiệu chỉnh sau-->
                            <div class="row justify-content-center">
                                <select name="calc_shipping_provinces" required="" class="col-sm-4 btn" id="locations-choose">
                                    <option value="">Tỉnh / Thành phố</option>
                                </select>
                                <select name="calc_shipping_district" required="" class="col-sm-4 btn" id="locations-choose">
                                    <option value="">Quận / Huyện</option>
                                </select>
                                <input class="billing_address_1" name="" type="hidden" value="">
                                <input class="billing_address_2" name="" type="hidden" value="">
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn" id="btn-search" onclick="searchLocation()" data-dismiss="modal">Tìm Kiếm</button>
                    </div>

                </div>
            </div>
        </div>
        <div style="min-height: auto;">
            <div class="container">
                <nav class="navbar">
                    <a href="Booking-Hairdresser/"><img class="navbar-brand" src="../../../Booking-Hairdresser/public/icon/logo.png" style="width:60px; float:left;"></a>

                    <div class="nav justify-content-end topnav">
                        <a class="nav-link" href="../../../Booking-Hairdresser/">Trang Chủ</a>
                        <a class="nav-link" href="../html/listservice.html">Danh Mục</a>
                        <a class="nav-link" href="#">Khám Phá</a>
                        <a class="btn btn-business" onclick="clickBtndoitac()">Đối tác</a>
                        <a class="btn btn-login" href="../html/login.html">Sign in / Login</a>

                    </div>
                    <label for="nav-check" class="nav-mobile-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="bi bi-list" viewBox="0 0 15 15">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </label>
                    <input type="checkbox" name="" id="nav-check">
                    <label for="nav-check" class="nav-overlay"></label>
                    <div class="nav-mobile">
                        <label for="nav-check" class="nav-close"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                            </svg>
                        </label>
                        <span class="avatar"> <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 18 18">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            Profile

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                            </svg>
                        </span>
                        <input id="mbsearch" type="text" class="form-control" placeholder="Bạn đang tìm kiếm gì ?" data-toggle="modal" data-target="#popup-howto">
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
                                        <div class="service">
                                            <h5 class="modal-title">Dịch vụ phổ biến</h5>
                                            <br>
                                            <!--Lấy dữ liệu từ SQL nên hiệu chỉnh sau-->
                                            <div class="group-service">
                                                <label>
                                                    <input type="checkbox" name="service" class="service" style="display: none;">
                                                    <span class="btn btn-service" for="">Cắt Tóc</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" name="service" class="service" style="display: none;">
                                                    <span class="btn btn-service">Làm Nail</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" name="service" class="service" style="display: none;">
                                                    <span class="btn btn-service">Duỗi Tóc</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" name="service" class="service" style="display: none;">
                                                    <span class="btn btn-service">Uốn Tóc</span>
                                                </label>
                                                <!--có thể thêm-->

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn" id="btn-search" onclick="searchHowto()" data-dismiss="modal">Tìm Kiếm</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="nav-list px-2 ">
                            <a class="nav-mblink " href="../html/listservice.html">Babershop</a>
                            <a class="nav-mblink " href="../html/listservice.html">Nail Salon</a>
                            <a class="nav-mblink " href="../html/listservice.html">Beauty Salon</a>
                            <a class="nav-mblink " href="../html/listservice.html">Hair Salon</a>
                            <a class="nav-mblink " href="../html/listservice.html">Massage</a>
                            <a class="nav-mblink " href="../html/listservice.html">Makeup Arist</a>
                            <a class="nav-mblink " href="../html/listservice.html">Day Spa</a>
                        </div>
                        <div class="logout px-2">
                            <a class="nav-mblink nav-link " onclick="clickBtndoitac()">Đối tác</a>
                            <a class="nav-mblink nav-link " href="#">Đăng xuất</a>
                        </div>

                    </div>


                </nav>
            </div>
        </div>

        <div class="section-form">
            <!--Hiệu ứng chữ chạy-->

            <div id="form-search" class="input-group">
                <input id="howto-input" type="text" class=" form-control " placeholder=" Bạn muốn tìm kiếm gì?" data-toggle="modal" data-target="#popup-howto">


                <input id="location-input" type="text" class="form-control " placeholder="Địa điểm " data-toggle="modal" data-target="#popup-location">

            </div>
        </div>

        <div class="bottom-section container-fluid">
            <nav class="nav justify-content-lg-center">
                <a class="nav-link categoriz" href="../html/listservice.html">Hair Salon</a>
                <a class="nav-link categoriz" href="../html/listservice.html">Babershop</a>
                <a class="nav-link categoriz" href="../html/listservice.html">Nail Salon</a>
                <a class="nav-link categoriz" href="../html/listservice.html">Beauty Salon</a>
                <a class="nav-link categoriz" href="../html/listservice.html">Massage</a>
                <a class="nav-link categoriz" href="../html/listservice.html">Makeup Arist</a>
                <a class="nav-link categoriz" href="../html/listservice.html">Day Spa</a>
                <div class="dropdown">
                    <a class="dropdown-toggle nav-link" id="ddMenu" data-toggle="dropdown">
                        More
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./listservice.html">Dưỡng Da</a>
                        <!--Vân vân-->
                    </div>
                </div>
            </nav>
        </div>

        <div class="video-container">
            <video autoplay="true" loop="true" mute id="video-bg">
                <source src="../../../Booking-Hairdresser/public/video/banner.webm" type="video/webm">
            </video>
        </div>
        <div id="navhide" class="navbar fixed-top" style="background: #111; z-index: 2;" hidden>
            <div class="container">
                <a href="../../../Booking-Hairdresser/"> <img class="navbar-brand" src="../../../Booking-Hairdresser/public/icon/logo.png" style="width:60px; float:left;"></img>
                </a>
                <div id="form-search-2" class="input-group form-inline justify-content-center">
                    <input id="howto-2" type="text" class="form-control" placeholder="Bạn muốn tìm kiếm gì?" data-toggle="modal" data-target="#popup-howto" style="background-color: #fff;">

                    <input id="location-2" type="text" class="form-control" placeholder="Địa điểm" data-toggle="modal" data-target="#popup-location" style="background-color: #fff;">
                </div>
                <div class="nav justify-content-end btn-topnavhide">
                    <a class="btn btn-business" onclick="clickBtndoitac()">Đối tác</a>
                    <a class="btn btn-login" href="../html/login.html">Sign in / Login</a>
                    <label for="nav-check" class="nav-mobile-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="bi bi-list" viewBox="0 0 15 15">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </label>
                </div>

            </div>
        </div>
    </header>
    <div class="container">
        <div class="recommend">
            <h1 class="h1Re">Đề xuất cho bạn</h1>
            <div class="owl-carousel owl-theme" id="carousel1">
                <?php
                foreach ($data['Suggest'] as $item) {
                    echo '
                <div class=ml-2 mr-2>
                    <a class=linkShoptoDetail href=BookingHairdresser/detail/' . $item['Id'] . '>
                        <div class="card">
                            <img src=' . $item['Avatar'] . ' alt="" class="card-img-top">
                            <div class="card-body text-left">
                                <h5 class="card-title text-left SZ"> ' . $item['Name'] . '</h5>
                                <h5 class="text-left ratezx ">Rate: <span style="font-size:20px;cursor:pointer;"';

                    for ($i = 1; $i <= 5; $i++) {
                        if ($item['RatingNum'] > $i - 0.5) {
                            echo '<span style="font-size:20px;cursor:pointer;" class="fa fa-star checked ml-2"></span>';
                        } else {
                            if ($item['RatingNum'] > $i - 1) {
                                echo '<span style="font-size:20px;cursor:pointer;" class="fa fa-star-half-full checked ml-2"></span>';
                            } else {
                                echo '<span style="font-size:20px;cursor:pointer;" class="fa fa-star-o checked ml-2"></span>';
                            }
                        }
                    }
                    echo '
                                    <div class="Getreview d-inline">(' . $item['QuantityRating'] . ')</div>
                                </h5>
                                <div class="location">
                                ' . $item['FullAdress'] . ', ' . $item['AddressPath3'] . ', ' . $item['AddressPath2'] . ', ' . $item['AddressPath1'] . '
                                </div>
                            </div>
                        </div>
                    </a>
                </div>';
                }
                ?>
            </div>
        </div>
        <div class="nearme">
            <h1 class="h1Re">Gần tôi</h1>
            <div class="owl-carousel owl-theme" id="carousel2">
                <div class="ml-2 mr-2">
                    <a class="linkShoptoDetail" href="../html/detailShop.html">
                        <div class="card">
                            <img src="../../../Booking-Hairdresser/public/img/8.jpg" alt="" class="card-img-top">
                            <div class="card-body text-left">
                                <h5 class="card-title text-left SZ">TuanBarber</h5>
                                <h5 class="text-left ratezx">Rate: <span style="font-size:20px;cursor:pointer;" class="fa fa-star checked ml-2"></span>
                                    <span style="font-size:20px;cursor:pointer;" class="fa fa-star checked "></span>
                                    <span style="font-size:20px;cursor:pointer;" class="fa fa-star checked "></span>
                                    <span style="font-size:20px;cursor:pointer;" class="fa fa-star checked"></span>
                                    <span style="font-size:20px;cursor:pointer;" class="fa fa-star checked"></span>
                                    <div class="Getreview d-inline">(293)</div>
                                </h5>
                                <div class="location">
                                    34 Lũy Bán Bích,Tân Phú,TP HCM
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
        </div>
        <div class=" wrapper">
            <div class="row">
                <h1 class="col-md-6">Ưu đãi nổi bật</h1>
                <p class="col-md-6 text-end watchmore">Xem thêm >>> </p>
            </div>
            <div class="row text-center">
                <?php
                foreach($data['Promotion'] as $item){
                    echo' <div class="col-md-4">
                    <p class="promotionText eff"> '.$item['Content'].'</p>
                    <img class="promotionimg mx-auto d-block eff" src="'.$item['Image'].'" alt="promotion">
                    </img>
                </div>';
                }
                ?>
            </div>
        </div>
        <!-- <script>
             var x = document.getElementById("demo");
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    x.innerHTML = "Geolocation không được hỗ trợ bởi trình duyệt này.";
                }
            }

            function showPosition(position) {
                var lat = position.coords.latitude;
                var long = position.coords.longitude;
                <?php
                $lat = 'document.write(lat)';
                $long = 'document.write(long)';
                echo $lat;
                echo $long;
                ?>
            }
        </script> -->
        <div class="wrapper" id="TurnonLocation">
            <div class="col-md-12 pt-5">
                <div class="shadow p-3 mb-5 bg-white">
                    <div class="row justify-content-center">
                        <div class="col-md-8 mt-3 zxcz">
                            <h1 style="color: black !important;">Bật vị trí của bạn </h1>
                            <p class="sub" style="color: black ;">
                                Bật vị trí để có thể nhận được những đề xuất tốt nhất
                            </p>
                            <br>
                            <div class="row btn-location">
                                <div class="col-md-3 mb-2 col-12">
                                    <a class="btn btn-full ">Tìm kiếm gần tôi</a>
                                </div>
                                <div class="col-md-2  col-12">
                                    <a class="btn btn-outline " id="notNows">Không phải bây giờ</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <img src="../../../Booking-Hairdresser/public/icon/Group 43.png" width="70%">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="wrapper">
            <div class="inspiredbg text-center">
                <br>
                <h1 style="color: #ff421a;">Chủ đề làm đẹp</h1>
                <p class="sub" style="color: black;">
                    Bí quyết làm đẹp vạn người mê
                </p>
                <div class="owl-carousel owl-theme" id="carousel3">
                    <?php
                    foreach($data['Topic'] as $topic){
                        echo 
                        '<div class="mr-2 mb-2 ml-2">
                        <div class="card infoTopic">
                            <img src="'.$topic['Icon'].'" alt="" class="imgTopic">
                            <div class="card-body text-left">
                                <h5 class="card-title text-center">'.$topic['Name'].'</h5>
                            </div>
                        </div>
                    </div>';}
                    ?>
                   
                </div>
            </div>
        </div>
        <div class="wrapper" style="position: relative;">
            <h1 style="margin-bottom: 20px;">Dịch vụ phổ biến</h1>
            <?php
            $i = 0;
            foreach($data['Service'] as $service){
                $i++;
                if($i == 1){
                    echo ' <div class="row text-center">';
                }
                if($i == 4){
                    echo ' </div>
                    <div class="row text-center">';
                }
                echo ' <div class="col-md categoriR">
                <a class="btn btn-outline-secondary btn-lg">'.$service['Name'].' &rarr;</a>
            </div>';
            }
            ?>
            </div>

        </div>

    </div>
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
                            <a href="#">+84 987 654 321</a>
                        </p>
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

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="../../../Booking-Hairdresser/public/js/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../../Booking-Hairdresser/public/js/nav.js"></script>
    <script src="../../../Booking-Hairdresser/public/js/Detail2.script.js"></script>
    <!--Nav starts-->
    <script src="../../../Booking-Hairdresser/public/js/popup-index.js"></script>
    <!--Popup-->

    <script>
        $('#carousel1').owlCarousel({

            items: 4,
            dots: false,
            loop: true,
            nav: true,
            margin: 10,
            responsive: {
                0: {
                    items: 1

                },
                600: {
                    items: 4
                }

            }


        });
        $('#carousel2').owlCarousel({

            items: 4,
            dots: false,
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1

                },
                600: {
                    items: 4
                }

            }


        });
        $('#carousel3').owlCarousel({

            items: 5,
            dots: false,
            loop: true,
            nav: true,
            autoHeight: true,
            responsive: {
                0: {
                    items: 3,
                    autoHeight: true,

                },
                600: {
                    items: 6
                }

            }

        });
    </script>

</body>
</html>