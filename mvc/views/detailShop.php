<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/App.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/popup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href=".../../../Booking-Hairdresser/public/css/style-sevice-page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js"></script>
    <style>
        .owl-prev {
            left: 20px;
        }
        
        .owl-next {
            right: 20px;
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
                                                            <input type="checkbox"  name="service" class="service"  style="display: none;">
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
        <div class="container px-0">
            <nav class=" row navbar px-3">
                <a class="navbar-brand col-lg-1 col-md-1 logo " href="../html/index.html"><img src="../source/img/logo.png" style="width: 60px;"></a>

                <div class="nav nav-pc">
                    <div id="form-search-1" class="input-group form-inline col-lg-5 col-sm-7">
                        <input id="howto-2" type="text" class=" form-control " placeholder=" Bạn muốn tìm kiếm gì?" data-toggle="modal" data-target="#popup-howto">


                        <input id="location-2" type="text" class="form-control " placeholder="Địa điểm " data-toggle="modal" data-target="#popup-location">


                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle nav-link" id="ddMenu" data-toggle="dropdown"><span><img style="width: 25;height: 25px;" src="../source/img/emojione_flag-for-vietnam.png" alt=""></span>
                               Việt Nam
                            </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Việt Nam</a>
                            <a class="dropdown-item" href="#">USA</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle nav-link" id="ddMenu" data-toggle="dropdown"><span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 18 18">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                              </svg></span>
                               Profile
                            </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../html/userprofile/infor.html">Trang cá nhân </a>
                            <a class="dropdown-item" href="../html/userprofile/schedule.html">Lịch book</a>
                            <a class="dropdown-item" href="../html/userprofile/notification.html">Thông báo</a>
                            <a class="dropdown-item" href="../html/login.html">Đăng xuất</a>
                        </div>
                    </div>
                    <a class="btn btn-business" onclick="clickBtndoitac()">Đối tác</a>
                </div>
                <label for="nav-check" class="nav-mobile-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="bi bi-list" viewBox="0 0 15 15">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                          </svg>                      
                    </label>
                <input type="checkbox" name="" id="nav-check">
                <label for="nav-check" class="nav-overlay"></label>
                <div class="nav-mobile">
                    <label for="nav-check" class="nav-close"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                          </svg>
                        </label>
                    <span class="avatar"> <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 18 18">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>
                          Profile  ứ ừ ư 
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
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
                                                  <input type="checkbox"  name="service" class="service"  style="display: none;">
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
                    <div class="nav-list px-2">
                        <a class="nav-mblink nav-link" href="../html/listservice.html">Hair Salon</a>
                        <a class="nav-mblink nav-link" href="../html/listservice.html">Babershop</a>
                        <a class="nav-mblink nav-link" href="../html/listservice.html">Nail Salon</a>
                        <a class="nav-mblink nav-link" href="../html/listservice.html">Beauty Salon</a>
                        <a class="nav-mblink nav-link" href="../html/listservice.html">Massage</a>
                        <a class="nav-mblink nav-link" href="../html/listservice.html">Makeup Arist</a>
                        <a class="nav-mblink nav-link" href="../html/listservice.html">Day Spa</a>
                    </div>
                    <div class="logout px-2">
                        <a class="nav-mblink nav-link " onclick="clickBtndoitac()" id="doitac" href="#">Đối tác</a>
                        <a class="nav-mblink nav-link " href="#">Đăng xuất</a>
                    </div>

                </div>




            </nav>
            <div class=" bottom-section px-3 ">
                <nav class="nav row justify-content-between ">
                    <a class="nav-link" href="../html/listservice.html">Hair Salon</a>
                    <a class="nav-link" href="../html/listservice.html">Babershop</a>
                    <a class="nav-link" href="../html/listservice.html">Nail Salon</a>
                    <a class="nav-link" href="../html/listservice.html">Beauty Salon</a>
                    <a class="nav-link" href="../html/listservice.html">Massage</a>
                    <a class="nav-link" href="../html/listservice.html">Makeup Arist</a>
                    <a class="nav-link" href="../html/listservice.html">Day Spa</a>
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
        </div>
        </div>
        <div id="navhide" class="navbar fixed-top" style="background: #111; z-index: 2;" hidden>
            <div class=" container px-1">
                <a class=" col-lg-1 col-sm-1 navbar-brand logo" href="../html/index.html"><img src="../source/img/logo.png" style="width: 60px;"></a>
                <div class="nav nav-pc">
                    <div id="form-search-1" class="input-group form-inline col-lg-5 col-sm-7">
                        <input id="howto-2" type="text" class=" form-control " placeholder=" Bạn muốn tìm kiếm gì?" data-toggle="modal" data-target="#popup-howto">
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
                                                <input type="checkbox"  name="service" class="service"  style="display: none;">
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

                        <input id="location-2" type="text" class="form-control " placeholder="Địa điểm " data-toggle="modal" data-target="#popup-location">
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
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle nav-link" id="ddMenu" data-toggle="dropdown"><span><img style="width: 25;height: 25px;" src="../source/img/emojione_flag-for-vietnam.png" alt=""></span>
                           Việt Nam
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Việt Nam</a>
                            <a class="dropdown-item" href="#">USA</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle nav-link" id="ddMenu" data-toggle="dropdown"><span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 18 18">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg></span>
                           Profile
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Trang cá nhân </a>
                            <a class="dropdown-item" href="#">Lịch book</a>
                            <a class="dropdown-item" href="#">Thông báo</a>
                            <a class="dropdown-item" href="#">Đăng xuất</a>
                        </div>
                    </div>
                    <a class="btn btn-business" onclick="clickBtndoitac()">Đối tác</a>
                </div>
                <label for="nav-check" class="nav-mobile-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="bi bi-list" viewBox="0 0 15 15">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>                      
                </label>


            </div>
        </div>
    </header>
    <section id="Menu">
        <div class="menus">
            <div class="infoS">
                <div class="infoShops">

                    <div class="avata">
                        <?php
                        echo "
                        <img class='rounded-circle' src=".$data['GN']['Avatar']." alt=''>";

                        ?>
                    </div>
                    <div class="menuInfo">
                        <div class="NameMenu">
                            <?php
                            echo "
                            <h1 class='h1Menu'>".$data['GN']['Name']."</h1>
                        </div>
                        <span class='addressMenu'>".$data['GN']['FullAdress'].",".$data['GN']['Ward'].",".$data['GN']['District'].",".$data['GN']['Province']."</span>"
                        ?>
                    </div>
                </div>
            </div>
            <div class="booknowBtn">
                <div class="centerBtn">
                    <button class="sas mr-3"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                  </svg></button>
                    <button type="button" class="btn booknow" data-toggle="modal" data-target="#popup-book-shop">Book now</button>
                    <!-- Popup bookshop -->

                </div>

            </div>

        </div>
    </section>

    <div class="container">
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
                        <div class="service-">
                            <!--Lấy dữ liệu từ SQL nên hiệu chỉnh sau-->
                            <div class="group-inforshop row container justify-content-between">
                                <div class="col-8" style="font-weight: lighter;">
                                <?php
                                echo"
                                    <h4>".$data['GN']['Name']."</h4>
                                    <p>".$data['GN']['FullAdress'].",".$data['GN']['Ward'].",".$data['GN']['District'].",".$data['GN']['Province']."</p>
                                </div>
                                <div class='col-2' style='text-align:center;'>
                                    <div class='row justify-content-center' name='star'>
                                        <i class='bi bi-star-fill' style='color: #ff421a;'></i>
                                        <i class='bi bi-star-fill' style='color: #ff421a;'></i>
                                        <i class='bi bi-star-fill' style='color: #ff421a;'></i>
                                        <i class='bi bi-star-fill' style='color: #ff421a;'></i>
                                        <i class='bi bi-star-half' style='color: #ff421a;'></i>
                                    </div>
                                    <p style='font-size: 12px; font-weight: italic;'>".$data['GF']['QuantityRating']."&nbsp lượt đánh giá</p>
                                </div>";
                                ?>
                            </div>
                            <hr>
                            <div class="group-service">
                                <?php                              
                                $listService=[]; 
                                while($cols = mysqli_fetch_array($data["GP"])){
                                    array_push($listService,$cols);
                                }
                                while($rows=mysqli_fetch_array($data["GO"])){
                                    echo "
                                    <div class='row justify-content-between container'>
                                    <div class='col-6'>";
                                    foreach($listService as $keys){
                                        if($rows["ServiceId"]==$keys["Id"]){
                                            echo "<h5 name='service-name'>". $keys["Name"]."</h5>";
                                        }
                                    }
                                    echo "   </div>
                                    <div class='col-4' style='text-align:right;'>
                                        <p>". number_format( $rows['Price'])."đ</p>
                                        <p style='margin-top:-15px; font-size: 12px; font-weight: lighter'>". $rows['Time']." phút</p>
                                    </div>
                                    <div class='col-2' style='text-align:right;'>
                                        <button type='button' class='btn' id='btn-search' data-toggle='modal' data-target='#popup-book'>Book</button>
                                    </div>
                                    <hr>
                                </div>";

                                }

                                ?>
                                
                                        
                                 
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <button id="btn-book" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-8 col-sm-12 order-sm-1 content-left">

                    <div class="owl-carousel owl-theme">
                        <?php
                        
                             while($rows=mysqli_fetch_array($data["GAU"])){
                               echo " <div class='item'><img src=".$rows['Image'] . " alt=''>
                               <div class='rating'>
                                   <div class='ratingPoint'>".$data['GN']['RatingNum']."</div>
                                   <div class='reviewCount'>".$data['GN']['QuantityRating']." đánh giá</div>
                               </div>
                           </div>
                           ";
                             }
                            
                        ?>
                    </div> 
              
                    <div class="shopInfo mb-1">
                        <?php
                        
                            echo "<h1 class='h1Detail'>" .$data['GN']['Name'] . "   <button class=' float-right'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='red' class='bi bi-heart-fill' viewBox='0 0 16 16'>
                            <path fill-rule='evenodd' d='M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z'/>
                          </svg></button></h1>
                        <div class='address'>".$data['GN']['FullAdress'].",".$data['GN']['Ward'].",".$data['GN']['District'].",".$data['GN']['Province']."</div>";
                        ?>                   
                    </div>
                    <div class="service">
                        <div class="serviceName">
                            <h2>Dịch Vụ</h2>
                        </div>
                        


                    </div>
                    <hr>
                    <div class="Popular">
                        <h2>Tất cả dịch vụ <button class=" float-right bs" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                      </svg></button></h2>
                    </div>
                    <div class="collapse show" id="collapseExample">
                        <?php 
                            $list=[]; 
                            while($col = mysqli_fetch_array($data["GM"])){
                                array_push($list,$col);
                            };

                             while($rows=mysqli_fetch_array($data["GS"])){
                                 
                                 echo "
                                 <div class='listService'>
                                    <div class='SN'>";
                                    foreach($list as $key){
                                        if($rows["ServiceId"]==$key["Id"]){
                                            echo "<h3>". $key["Name"]."</h3>";
                                        }
                                     };
                                     echo"
                                    </div>
                                    <div class='price'>
                                        <div class='priceDetail'>
                                            <div>
                                                <div class='s'>". number_format( $rows['Price'])."đ</div>
                                                <span class='so'>". $rows['Time']. " phút</span>
                                             </div>
                                            <div class='bookBtn'>
                                             <!-- Popup Book -->
                                                 <div title='popup-book'>
                                                 <!-- Button to Open the Modal -->
                                                 <button class=' Btn' data-toggle='modal' data-target='#popup-book'>Book</button>
     
                                                 <!-- The Modal -->
     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             <hr>";
                             
                             }
                        ?>
                    </div>
                    <div class="rulesz">
                        <h2>Quy định an toàn tại cửa hàng</h2>
                        <div class="row">
                        <?php
                                    $arrs=array();
                                    while($rows=mysqli_fetch_array($data["GR"])){
                                        array_push($arrs,$rows);
                                        echo " <div class='col-md-5 col-xs-5 xsss'>
                               
                                        <p class='Rulesz'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='red' class='bi bi-shield-fill-plus' viewBox='0 0 16 16'>
                                        <path fill-rule='evenodd' d='M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm-.5 5a.5.5 0 0 1 1 0v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5z'/>
                                      </svg>" . $rows['Rule']."</p>
                                      </div>";
                                    }
                                ?>

                        </div>
                        <?php
                        if(count($arrs)>=10){
                            echo " <button class='viewAll '>Xem tất cả<span >(".count($arrs) . ")</span></button>";
                        }
                        
                        ?>
                     
                    </div>
                    <!-- --------------------- -->
                    <div class="gallery mt-5">
                        <h1 class="heading1 mb-3">Thư viện ảnh</h1>
                        <div class="lightbox">
                            <div class="row">
                                <?php    
                             
                                $arr= array();
                                
                                $j=0;
                                for($i=0;$i<=count($arr);$i++){
                                    if($j==5){
                                        break;
                                    }
                                    $rows= mysqli_fetch_array($data["GI"]);
                                    array_push($arr,$rows['Image']);
                                    if($arr[$i]!=null){
                                        
                                        $j++;
                                        echo "
                                        <div class='col-md-4 '>
                                            <a class='thumbnail' href='#' data-image-id='' data-toggle='modal' data-title='' data-image=".$rows['Image']." data-target='#image-gallery'>
                                                <img class='imgFeedback rounded mt-4' src=".$rows['Image']." width='100%' height='180'  alt='Another alt text'>
                                            </a>
                                        </div>
                                        ";

                                    }
                                    
                                    else{
                                        echo "<h4 class='pl-3'>Chưa có hình ảnh đánh giá nào </h4>"; 
                                        $arr=0;
                                        break;
                                    }
                                }
                                ?>

                                <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="image-gallery-title"></h4>
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                                                        class="sr-only">Close</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i
                                                        class="fa fa-arrow-left"></i>
                                                </button>

                                                <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i
                                                        class="fa fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        if($arr!=0){
                            echo "
                            <div class='row'>
                            <div class='col-md'>
                                <button type='button' class='btn-showall mt-3 w-100'>Xem tất cả</button>
                            </div>
                        </div>";
                        }
                       
                        ?>
                        
                    </div>
                    <!-- ----------------------- -->
                    <div class="rating-header mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="heading1 mb-2">
                                    Đánh giá
                                </h1>
                                <p style="font-size: 12px; text-align:justify;">Book Stylist coi trọng các bài đánh giá xác thực và chỉ xác minh chúng nếu chúng tôi biết người đánh giá đã ghé thăm doanh nghiệp này.</p>
                            </div>
                            <div class="col-md-6">
                                <div class="shadow-sm mb-3 p-3 bg-white rounded">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="content text-center ">
                                                <?php 
                                               
                                                echo "<div class='ratings'><span class='product-rating'>".$data['GN']['RatingNum']."</span><span>/5</span>
                                                <div class='stars'> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i></div>
                                                <div class='rating-text'> <span>".$data['GN']['QuantityRating']." đánh giá</span> </div>
                                            </div>";
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <div class="row text-center">
                                                <?php
                                                echo "
                                                <div class='col five-star align-items-center d-flex'>5
                                                    <span class='stars'><i class='fa fa-star mr-2' style='font-size: 10px;'></i></span>
                                                    <span class='progress '>
                                                        <i class='progress-bar' role='progressbar' style='width: ".($data['GF']['FiveStarRating']/$data['GF']['QuantityRating'])*100 . "%' aria-valuenow=".($data['GF']['FiveStarRating']/$data['GF']['QuantityRating'])*100 ."
                                                            aria-valuemin='0' aria-valuemax='100'></i>
                                                    </span> ".$data['GF']['FiveStarRating']."
                                                </div>";
                                                ?>
                                            </div>
                                            <div class="row">
                                                <?php
                                                echo "
                                                <div class='col five-star align-items-center d-flex'>4
                                                    <span class='stars'><i class='fa fa-star mr-2' style='font-size: 10px;'></i></span>
                                                    <span class='progress'>
                                                        <i class='progress-bar' role='progressbar' style='width: ".($data['GF']['FourStarRating']/$data['GF']['QuantityRating'])*100 . "%' aria-valuenow=".($data['GF']['FourStarRating']/$data['GF']['QuantityRating'])*100 ."
                                                            aria-valuemin='0' aria-valuemax='100'></i>
                                                    </span> ".$data['GF']['FourStarRating']."
                                                </div>";
                                                ?>
                                            </div>
                                            <div class="row">
                                                <?php
                                                echo "
                                                <div class='col five-star align-items-center d-flex'>3
                                                    <span class='stars'><i class='fa fa-star mr-2' style='font-size: 10px;'></i></span>
                                                    <span class='progress'>
                                                        <i class='progress-bar' role='progressbar' style='width: ".($data['GF']['ThreeStarRating']/$data['GF']['QuantityRating'])*100 . "%' aria-valuenow=".($data['GF']['ThreeStarRating']/$data['GF']['QuantityRating'])*100 . "
                                                            aria-valuemin='0' aria-valuemax='100'></i>
                                                    </span> ".$data['GF']['ThreeStarRating']."
                                                </div>";
                                                ?>
                                            </div>
                                            <div class="row">
                                                <?php
                                                echo "
                                                <div class='col five-star align-items-center d-flex'>2
                                                    <span class='stars'><i class='fa fa-star mr-2' style='font-size: 10px;'></i></span>
                                                    <span class='progress'>
                                                        <i class='progress-bar' role='progressbar' style='width: ".($data['GF']['TwoStarRating']/$data['GF']['QuantityRating'])*100 . "%' aria-valuenow=".($data['GF']['TwoStarRating']/$data['GF']['QuantityRating'])*100 . "
                                                            aria-valuemin='0' aria-valuemax='100'></i>
                                                    </span> ".$data['GF']['TwoStarRating']."
                                                </div>";
                                                ?>
                                            </div>
                                            <div class="row">
                                                <?php
                                                echo "
                                                <div class='col five-star align-items-center d-flex'>1
                                                    <span class='stars'><i class='fa fa-star mr-2' style='font-size: 10px;'></i></span>
                                                    <span class='progress'>
                                                        <i class='progress-bar' role='progressbar' style='width: ".($data['GF']['OneStarRating']/$data['GF']['QuantityRating'])*100 . "%' aria-valuenow=".($data['GF']['OneStarRating']/$data['GF']['QuantityRating'])*100 . "
                                                            aria-valuemin='0' aria-valuemax='100'></i>
                                                    </span> ".$data['GF']['OneStarRating']."
                                                </div>";
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rating-body">
                        <?php
                        
                        foreach($data['GQ'] as $items){

                       
                            echo "<div class='card-rating'>
                            <div class='row'>
                                <div class='col-md-6 mb-1 stars'>";
                                for($i = 1; $i <=5;$i++)
                                {
                                    if($i<=$items['Rating']){
                                        echo "<i class='fa fa-star'></i>";
                                    }
                                    else{
                                        echo "<span class='fa fa-star'></span>";
                                    }
                                }
                                echo "   
                                </div>
                                <div class='col-md-6 text-md-right'>
                                    <span class='location'>".$items['Province'] . ",</span>
                                    <span class='date-rating'>".$items['CreateDate']."</span>
                                </div>
                            </div>
                            
                               <h6 class='service-name mb-1'>".$items['ServiceName'] ."</h6>
                            <h6 class='client-name mb-2'>".$items['UserName'] ."</h6>
                            <p class='comment'>".$items['Content'] . "</p>
                            <img class='pb-3' src='".$items['Image'] . "' width='auto' height='200'>
                            <div class='row'>
                                <div class='col-md-2'>
                                    <button type='button' class='btn-in-rate'> ".$items['Like']."<span class='material-icons text-center ml-2'>thumb_up</span></button>
                                </div>
                                <div class='col-md-2'>
                                    <button type='button' class='btn-in-rate'> ".$items['DLike']."<span class='material-icons text-center ml-2'>thumb_down</span></button>
                                </div>
                                <div class='col-md-4'></div>
                                <div class='col-md-4 text-right'>
                                    <button type='button' class='btn-in-rate' data-toggle='modal' data-target='#popup-report'> Report <span class='material-icons text-center ml-2'>flag</span></button>

                                </div>

                            </div>
                            <div class=' row'>
                                <div class='col-md'>
                                    <hr>
                                </div>
                            </div>
                        </div>"; 
                    }
                    
                        ?>
                    </div>
                    <div class="rating-footer">
                        <div class="row">
                            <div class="col-md text-center">
                                <div class="pagination_rounded">
                                    <ul>
                                        <li>
                                            <a href="#" class="prev text-right"> <i class="fa fa-angle-left" aria-hidden="true"></i></a>
                                        </li>
                                        <?php
                                       $getUrlPage=$_GET["url"];
                                       echo $getUrlPage;
                                       
                                       $trang =ceil(($data['GF']['QuantityRating'])/5);
                                        echo "

                                        <li ><a href='.($getUrlPage.'>1</a> </li>
                                        
                                        <li><a href='#'>2</a> </li>
                                        <li ><a href='#'>3</a> </li>
                                        <li ><a href='#'>4</a> </li>
                                        <li ><a href='#'>5</a> </li>
                                        <li ><a href='#'>...</a> </li>
                                        <li><a href='#' class='next text-center'><i class='fa fa-angle-right' aria-hidden='true'></i></a> </li>
                                        "
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ----------------------- -->
                </div>
                <div class="col-md-4 col-sm-12 order-sm-2 content-right">
                    <div class="location">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250875.47715672414!2d106.59748635152886!3d10.739930049995595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f225c70667f%3A0x80a1b67feed6e90d!2zTGnDqm0gQmFyYmVyIFNob3AgUXXhuq1uIDM!5e0!3m2!1svi!2s!4v1631669555373!5m2!1svi!2s"
                            width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <!-- <div class="GPS">

                        </div> -->
                    </div>
                    <h1 class="Intro">Giới thiệu</h1>
                   <?php
                    echo "<p>".$data['GN']['Introduction']."</p>";
                    
                    ?>
                    
                    <a href="#" class="Mores">Xem thêm <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewbox="2 2 16 16">
                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                      </svg></a>
                    <h1 class="Intro">Nhân viên</h1>
                    <hr>

                    <div class="mb-3 d-flex flex-row justify-content-start align-items-start">
                        <?php
                        $threeImgOnly=0;
                        while($row = mysqli_fetch_array($data['GT'])){
                            $threeImgOnly++;
                            if($threeImgOnly<=3){
                                echo "
                                <div class='col-md-3'>
                                <img src=".$row['Avatar']." alt='' class='img-fluid rounded-circle' >
                               </div>
                                ";
                            }
                            
                        }
                        ?>
                    
                    </div>
                    <h1 class="Intro">Liên hệ và lịch làm việc</h1>
                    <hr>
                    <?php
                    echo "
                    <div><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='red' class='bi bi-telephone-inbound-fill' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z'/>
                   
                    
                    </svg>".$data['GN']['PhoneNumber']." <button class=' float-right call'>Call</button></div>
                    ";
                    ?>
                    
                    <hr>

                    <div class="timeWork">
                        <div class="day">
                            <?php 
                            foreach ($data['GC'] as $itemz){
                                echo "<h3>".$itemz['Name']."</h3>";
                            }
                            
                            ?>
                            
                            

                        </div>
                        <div class="time lh-1">
                            <?php
                             foreach ($data['GC'] as $itemz){
                                echo "<span>".$itemz['Start']." <small>-</small>".$itemz['End']."</span><br>";
                            }
                            ?>
                            
                          
                        </div>
                    </div>
                    
                    <div class="report mt-3 mb-1">
                        <a href="#" data-toggle="modal" data-target="#popup-report">Báo Xấu <span class="float-right" style="margin-right: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                          </svg></span></a>
                        <!-- Modal -->
                        <div class="modal fade" id="popup-report" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body" style="text-align: center;">
                                        <h5>Báo cáo hình ảnh hoặc nội dung</h5>
                                        <hr/>
                                    </div>
                                    <div class="modal-body" style="margin:-30px 70px 0; text-align:left;">
                                        <label class="radio-report">
                                <input type="radio" name="radio-report">
                                <span class="radio-report-fix"></span>
                                <span>Nội dung phản cảm</span>
                            </label>
                                        <hr>
                                        <label class="radio-report">
                                <input type="radio" name="radio-report">
                                <span class="radio-report-fix"></span>
                                <span>Nội dung quá bạo lực</span>
                            </label>
                                        <hr>
                                        <label class="radio-report">
                                <input type="radio" name="radio-report">
                                <span class="radio-report-fix"></span>
                                <span>Chứa nội dung gây hấn</span>
                            </label>
                                        <hr>
                                        <label class="radio-report">
                                <input type="radio" name="radio-report">
                                <span class="radio-report-fix"></span>
                                <span>Cổ xúy hành động nguy hiểm</span>
                            </label>
                                        <hr>
                                        <label class="radio-report">
                                <input type="radio" name="radio-report">
                                <span class="radio-report-fix"></span>
                                <span>Ngược đãi trẻ em</span>
                            </label>
                                        <hr>
                                        <label class="radio-report">
                                <input type="radio" name="radio-report">
                                <span class="radio-report-fix"></span>
                                <span>Xâm hại quyền riêng tư của tôi</span>
                            </label>
                                        <hr>
                                        <label class="radio-report">
                                <input type="radio" name="radio-report">
                                <span class="radio-report-fix"></span>
                                <span>Phân biệt chúng tộc</span>
                            </label>
                                        <hr>
                                        <label class="radio-report">
                                <input type="radio" name="radio-report">
                                <span class="radio-report-fix"></span>
                                <span>Spam</span>
                            </label>

                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="button" class="btn btn-cancel" data-dismiss="modal">Hủy</button>
                                        <button type="button" class="btn" id="btn-report">Báo Cáo</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                </div>
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
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
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

    <script src="../../../Booking-Hairdresser/public/js/Detail2.script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="../../../Booking-Hairdresser/public/js/owl.carousel.min.js"></script>
    <script src="../../../Booking-Hairdresser/public/js/nav.js"></script>
    <script src="../../../Booking-Hairdresser/public/js/popup.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            items: 1,
            dots: true,
            loop: true,
            nav: true,

        })
    </script>
</body>

</html>