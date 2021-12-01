<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/App.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/style.css">


    <!-- Main -->

    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/popup.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

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

        .topic a,
        a:focus,
        a:active {
            color: inherit;
            text-decoration: none;
        }

        .topic a:hover {
            color: #ff421a;
        }
    </style>
</head>

<body>
    <header id="header">
        <?php
        require_once './mvc/controllers/popup.php';
        $popup = new Popup();
        $popup->popupSearch();
        $libar = new Library();
        $category = $libar->Categories();
        ?>
        <div style="min-height: auto;">
            <div class="container">
                <nav class="navbar">
                    <a href="<?php echo BASE_URL ?>/home"><img class="navbar-brand" src="<?php echo BASE_URL ?>/public/icon/logo.png" style="width:60px; float:left;"></a>

                    <div class="nav justify-content-end topnav">
                        <a class="nav-link" href="<?php echo BASE_URL ?>/home">Trang Chủ</a>
                        <a class="nav-link" href="<?php echo BASE_URL ?>/listshop/category&dm=1&page=1">Danh Mục</a>
                        <a class="nav-link" href="#">Khám Phá</a>
                        <?php
                        if (isset($_SESSION['Id'])) {
                            echo "<div class='dropdown'>
                                <a class='dropdown-toggle nav-link' id='ddMenu' data-toggle='dropdown'><span><svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 18 18'>
                                            <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z' />
                                            <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z' />
                                        </svg></span>
                                    Profile
                                </a>
                                <div class='dropdown-menu'>
                                    <a class='dropdown-item' href='" . BASE_URL . "/profile/thongtintaikhoan/" . $_SESSION['Id'] . "'>Trang cá nhân </a>
                                    <a class='dropdown-item' href='" . BASE_URL . "/profile/lichhen/" . $_SESSION['Id'] . "'>Lịch book</a>
                                    <a class='dropdown-item' href='" . BASE_URL . "/profile/thongbaocuatoi/" . $_SESSION['Id'] . "'>Thông báo</a>
                                    <a class='dropdown-item' href='" . BASE_URL . "/logout'>Đăng xuất</a>
                                </div>
                            </div>";
                        } else {
                            echo "<a class='btn btn-login' href='" . BASE_URL . "/login'>Sign in / Login</a>"; 
                        }
                        ?>
                                <a class="btn btn-business" onclick="clickBtndoitac()">Đối tác</a>


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
                        <?php
                        if (isset($_SESSION['Id'])) {
                            echo "<span class='avatar'> <svg xmlns='http://www.w3.org/2000/svg' width='60' height='60' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 18 18'>
                            <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z' />
                            <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z' />
                        </svg>
                        <a href='" . BASE_URL . "/profile'>Profile</a>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-bell-fill' viewBox='0 0 16 16'>
                            <path d='M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z' />
                        </svg>
                    </span>";
                        } else {
                            echo "<br/><br/><a class='nav-mblink nav-link ' style='margin-left:10px;' href='" . BASE_URL . "/login'>Sign in / Login</a>";
                        }
                        ?>
                        <input id="mbsearch" type="text" style="margin-top: 0px;" class="form-control" placeholder="Bạn đang tìm kiếm gì ?" data-toggle="modal" data-target="#popup-howto">

                        <div class="nav-list px-2 ">
                            <?php
                            foreach ($category as $id => $name) {
                                echo "<a class='nav-mblink nav-link' href='" . BASE_URL . "/listshop/category&dm=" . $id . "&page=1'>" . $name . "</a>";
                            }
                            ?>
                        </div>
                        <div class="logout px-2">
                            <a class="nav-mblink nav-link " onclick="clickBtndoitac()">Đối tác</a>
                            <?php
                            if (isset($_SESSION['Id'])) {
                                echo "<a class='nav-mblink nav-link ' href='" . BASE_URL . "/logout'>Đăng xuất</a>";
                            }
                            ?>

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
                <?php
                foreach ($category as $id => $name) {
                    if ($id < 8) {
                        echo " <a class='nav-link categoriz' href='" . BASE_URL . "/listshop/category&dm=" . $id . "&page=1'>" . $name . "</a>";
                    }
                    if ($id >= 8) {
                        if ($id == 8) {
                            echo "<div class='dropdown'>
                                    <a class='dropdown-toggle nav-link categoriz' id='ddMenu' data-toggle='dropdown'>
                                    More
                                    </a>
                                    <div class='dropdown-menu'>
                                    <a class='dropdown-item' href='" . BASE_URL . "/listshop/category&dm=" . $id . "&page=1'>" . $name . "</a>";
                        } else {
                            echo "<a class='dropdown-item' href='" . BASE_URL . "/listshop/category&dm=" . $id . "&page=1'>" . $name . "</a>";
                        }
                        if ($id == count($category) + 1) {
                            echo "</div>";
                        }
                    }
                }
                ?>
            </nav>
        </div>

        <div class="video-container">
            <video autoplay="true" loop="true" muted id="video-bg">
                <source src="<?php echo BASE_URL ?>/public/video/home.mp4" type="video/mp4">
            </video>
        </div>
        <div id="navhide" class="navbar fixed-top" style="background: #111; z-index: 2;" hidden>
            <div class="container">
                <a href="<?php echo BASE_URL ?>/"> <img class="navbar-brand" src="<?php echo BASE_URL ?>/public/icon/logo.png" style="width:60px; float:left;"></img>
                </a>
                <div id="form-search-2" class="input-group form-inline justify-content-center">
                    <input id="howto-2" type="text" class="form-control" placeholder="Bạn muốn tìm kiếm gì?" data-toggle="modal" data-target="#popup-howto" style="background-color: #fff;">

                    <input id="location-2" type="text" class="form-control" placeholder="Địa điểm" data-toggle="modal" data-target="#popup-location" style="background-color: #fff;">
                </div>
                <div class="nav justify-content-end btn-topnavhide">
                <?php
                    if (isset($_SESSION['Id'])) {
                        echo "<div class='dropdown'>
                            <a class='dropdown-toggle nav-link' id='ddMenu' data-toggle='dropdown'><span><svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 18 18'>
                                        <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z' />
                                        <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z' />
                                    </svg></span>
                                Profile
                            </a>
                            <div class='dropdown-menu'>
                                <a class='dropdown-item' href='".BASE_URL."/profile/thongtintaikhoan/" . $_SESSION['Id'] . "'>Trang cá nhân </a>
                                <a class='dropdown-item' href='".BASE_URL."/profile/lichhen/" . $_SESSION['Id'] . "'>Lịch book</a>
                                <a class='dropdown-item' href='".BASE_URL."/profile/thongbaocuatoi/" . $_SESSION['Id'] . "'>Thông báo</a>
                                <a class='dropdown-item' href='".BASE_URL."/logout.php'>Đăng xuất</a>
                            </div>
                        </div>";
                    } else {
                        echo "<a class='btn btn-login' href='".BASE_URL."/login'>Sign in / Login</a>";
                    }
                    ?>
                    <a class="btn btn-business" onclick="clickBtndoitac()">Đối tác</a>
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
                    $items=$item['Avatar']!==null ? BASE_URL.'/public/uploads/avatar/'.$item['Avatar']:BASE_URL.'/public/img/noimage.jpg';
                    echo '
                <div class=ml-2 mr-2>
                    <a class=linkShoptoDetail href="' . BASE_URL . '/detail/show/' . $item['Id'] . '">
                        <div class="card">
                            <img src=' . $items . ' alt="" class="card-img-top">
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
        <div class="wrapper" id="TurnonLocation" <?php if (isset($_SESSION['lat'])) {
                                                        echo 'style ="display: none"';
                                                    } ?>>
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
                                    <a class="btn btn-full" id="GetLocation">Tìm kiếm gần tôi</a>
                                </div>
                                <div class="col-md-2  col-12">
                                    <a class="btn btn-outline " id="notNows">Không phải bây giờ</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <img src="<?php echo BASE_URL ?>/public/icon/Group 43.png" width="70%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nearme" <?php if (!isset($_SESSION['lat'])) {
                                echo 'style ="display: none"';
                            } ?>>
            <h1 class="h1Re">Gần tôi</h1>
            <div class="owl-carousel owl-theme" id="carousel2">
                <?php
                $i = 0;
                foreach ($data['Nearby'] as $item) {
                    $i++;
                    if ($i > 20) {
                        break;
                    }
                    $items=$item['Avatar']!==null ? BASE_URL.'/public/uploads/avatar/'.$item['Avatar']:BASE_URL.'/public/img/noimage.jpg';
                    echo '
                <div class=ml-2 mr-2>
                    <a class="linkShoptoDetail" href="' . BASE_URL . '/detail/' . $item['Id'] . '">
                        <div class="card">
                            <img src=' . $items. ' alt="" class="card-img-top">
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
                                ' . round($item['Distance'], 1) . ' Km, ' . $item['FullAdress'] . ', ' . $item['AddressPath3'] . ', ' . $item['AddressPath2'] . ', ' . $item['AddressPath1'] . '
                                </div>
                            </div>
                        </div>
                    </a>
                </div>';
                }
                ?>
            </div>
        </div>
        <div class=" wrapper">
            <div class="row">
                <h1 class="col-md-6">Ưu đãi nổi bật</h1>
            </div>
            <div class="owl-carousel owl-theme" id="carousel4">
                <?php

                foreach ($data['Promotion'] as $item) {
                    echo '
                <div class=ml-2 mr-2>
                    <a class=linkShoptoDetail href="' . BASE_URL . '/listshop/promotion&km=' . $item['Id'] . '&page=1">
                        <div class="card">
                            <img src=' . $item['Image'] . ' alt="" class="card-img-top">
                            <div class="card-body text-left">
                                <h5 class="card-title text-left SZ"> ' . $item['Code'] . '</h5>';
                    echo '
                                <div class="contentP">
                                <h6 style="font-size: 13px">' . $item['Value'] . ' ' . $item['Condition'] . '</h6>
                                <h6 style="font-size: 13px">' . $item['Max'] . '</h6>
                                <h6 style="font-size: 13px">' . $item['Recipient'] . '</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>';
                }
                ?>
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
                    foreach ($data['Topic'] as $topic) {
                        echo
                        '<div class="mr-2 mb-2 ml-2 topic">
                        <a class="card infoTopic" href = ' . BASE_URL . '/topic/show/' . $topic['Id'] . '>
                            <img src="' . $topic['Icon'] . '" alt="" class="imgTopic">
                            <div class="card-body text-left">
                                <h5 class="card-title text-center topicName">' . $topic['Name'] . '</h5>
                            </div>
                        </a>
                    </div>';
                    }
                    ?>

                </div>
            </div>
        </div>
        <div class="wrapper" style="position: relative;">
            <h1 style="margin-bottom: 20px;">Dịch vụ phổ biến</h1>
            <?php
            $i = 0;
            foreach ($data['Service'] as $service) {
                $i++;
                if ($i == 1) {
                    echo ' <div class="row text-center">';
                }
                if ($i == 4) {
                    echo ' </div>
                    <div class="row text-center">';
                }
                echo ' <div class="col-md categoriR">
                <button  onclick="chooseService('.$service['Id'].')" " class="btn btn-outline-secondary btn-lg">' . $service['Name'] . ' &rarr;</button>
            </div>';
            }
            ?>
        </div>
    </div>
    </div>
    <input id='base' type='hidden' value='<?php echo BASE_URL ?>' />
    </div>
    <?php $libar->footer();  ?>


    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL ?>/public/js/owl.carousel.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL ?>/public/js/nav.js"></script>
    <script src="<?php echo BASE_URL ?>/public/js/Detail2.script.js"></script>
    <!--Nav starts-->
    <script src="<?php echo BASE_URL ?>/public/js/popup2.js"></script>
    <script src="<?php echo BASE_URL ?>/public/js/popup.js"></script>
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
        $('#carousel4').owlCarousel({

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
                    items: 3
                }

            }


        });
    </script>
    <script>
        document.getElementById("GetLocation").onclick = function() {
            navigator.geolocation.getCurrentPosition(update_location);
            document.getElementById("TurnonLocation").style.display = 'none';
        };

        function update_location(position) {
            window.location.href = "<?php echo BASE_URL ?>/home/nearby/" + position.coords.latitude + "/" + position.coords.longitude;

        }
       
        function chooseService($id) {
            $.ajax({
           type: "POST",
           url: 'mvc/controllers/listshop.php',
           data:{serviceChoose:$id}
 
        }).done(function() {
            window.location.href = "<?php echo BASE_URL ?>/listshop/searchservice&page=1";
        });   
        }

    </script>

</body>

</html>