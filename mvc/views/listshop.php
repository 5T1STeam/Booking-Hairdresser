<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List-Shop</title>

    <!-- Link BS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL?>/public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL?>/public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL?>/public/css/App.css">
    <link rel="stylesheet" href="<?php echo BASE_URL?>/public/css/popup.css">
    <link rel="stylesheet" href="<?php echo BASE_URL?>/public/css/listshopT.css">
    <link rel="stylesheet" href="<?php echo BASE_URL?>/public/css/style-sevice-page.css">
    <link rel="stylesheet" href="<?php echo BASE_URL?>/public/css/style.css">

    <!--Popup-->
    <script src="<?php echo BASE_URL?>/public/js/popup2.js"></script>
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
        @media screen and (max-width: 700px) {
            .owl-prev {
            left: -20px;
        }

        .owl-next {
            right: -20px;
        }
    }
    </style>
</head>

<body>
    <header>
        <?php
        require_once './mvc/controllers/popup.php';
        $popup = new Popup();
        $libar = new Library();
        $libar->Nav();
        $popup->popupSearch();
        ?>
    </header>
    <div class="container">
        <div class="recommend">
            <br/>
            <h1 class="h1Re">Đề xuất cho bạn</h1>
            <div class="owl-carousel owl-theme" id="carousel1">
                <?php
                foreach ($data['Suggest'] as $item) {
                    $items=$item['Avatar']!==null ? BASE_URL.'/public/uploads/avatar/'.$item['Avatar']:BASE_URL.'/public/img/noimage.jpg';
                    echo '
                <div class=ml-2 mr-2>
                    <a class=linkShoptoDetail href="'.BASE_URL.'/detail/show/'. $item['Id'] . '">
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
        <?php
        $popup->popupFilter();
        ?>
        <hr />
        <button id="btn-popup-filter" type="button" class="btn" data-toggle="modal" data-target="#popup-filters">Filters</button>
        <hr />
        <div class="listservice">

            <?php
            if($data['ALL']==null){
                echo "<h3 style='text-align: center;color: #ff421a;'>Không tìm thấy Cửa hàng nào</h3>";
            }else{
                foreach ($data['ALL'] as $shop) {
                    $shop->showShop();
                    foreach ($shop->getService() as $service) {
                        $shop->showService($service['id'], $service['name'], $service['price']);
                        $popup->popupBooking($shop->getId(), $shop->getName(), $service['id'], $service['name'], $service['price'], $service['time']);
                    }
                    echo "</div></div></div>";
                }
            }
            ?>
        </div>
        <div id="kq">
        </div>
        <div class="overlay">
            <div class="loader"></div>
        </div>

        <div class="pagination row">
            <div class="col-md text-center">
                <div class="pagination_rounded">
                    <ul>
                        <?php
                        if (isset($_GET['page'])) {
                            // PHẦN HIỂN THỊ PHÂN TRANG
                            $url = $_SERVER['REQUEST_URI'];
                            $arr = explode("/", $url);
                            $urlpost = $arr[count($arr) - 1];
                            $urlpost = substr($urlpost, 0, strpos($urlpost, '&page'));

                            if ($_GET['page'] > 5 && $data['page'] > 1) {
                                echo '<li><a href="' . $urlpost . '&page=' . 1 . '" class="prev text-right"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>';
                            }
                            if ($_GET['page'] > 1 && $data['page'] > 1) {
                                echo '<li><a href="' . $urlpost . '&page=' . ($_GET['page'] - 1) . '" class="prev text-right"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>';
                            }

                            if($data['page'] <=5){
                                    // Lặp khoảng giữa
                                for ($i = 1; $i <= $data['page']; $i++) {
                                    // Nếu là trang hiện tại thì hiển thị thẻ span
                                    // ngược lại hiển thị thẻ a
                                    if ($i == $_GET['page']) {
                                        echo '<li class="active"><a href="">' . $i . '</a></li>';
                                    } else {
                                        echo '<li class=""><a href="' . $urlpost . '&page=' . $i . '">' . $i . '</a></li>';
                                    }
                                }
                            }elseif($data['page'] - $_GET['page'] < 3){
                                    // Lặp khoảng giữa
                                for ($i = $data['page']-4; $i <= $data['page']; $i++) {
                                    // Nếu là trang hiện tại thì hiển thị thẻ span
                                    // ngược lại hiển thị thẻ a
                                    if ($i == $_GET['page']) {
                                        echo '<li class="active"><a href="">' . $i . '</a></li>';
                                    } else {
                                        echo '<li class=""><a href="' . $urlpost . '&page=' . $i . '">' . $i . '</a></li>';
                                    }
                                }
                            }else{
                                if($_GET["page"]<=3){
                                        // Lặp khoảng giữa
                                for ($i = 1; $i <= 5; $i++) {
                                    // Nếu là trang hiện tại thì hiển thị thẻ span
                                    // ngược lại hiển thị thẻ a
                                    if ($i == $_GET['page']) {
                                        echo '<li class="active"><a href="">' . $i . '</a></li>';
                                    } else {
                                        echo '<li class=""><a href="' . $urlpost . '&page=' . $i . '">' . $i . '</a></li>';
                                    }
                                }
                                }else{
                                        // Lặp khoảng giữa
                                    for ($i = $_GET["page"]-2; $i <= $_GET["page"]+2; $i++) {
                                        // Nếu là trang hiện tại thì hiển thị thẻ span
                                        // ngược lại hiển thị thẻ a
                                        if ($i == $_GET['page']) {
                                            echo '<li class="active"><a href="">' . $i . '</a></li>';
                                        } else {
                                            echo '<li class=""><a href="' . $urlpost . '&page=' . $i . '">' . $i . '</a></li>';
                                        }
                                    }
                                }
                            }
                            
                            
                            if ($_GET['page'] < $data['page'] && $data['page'] > 1) {
                                echo '<li><a href="' . $urlpost . '&page=' . ($_GET['page'] + 1) . '"class="next text-center"><i class="fa fa-angle-right" aria-hidden="true"></i></a> </li> ';
                            }

                            if ($_GET['page'] < $data['page']-2 && $data['page'] > 1) {
                                echo '<li><a href="' . $urlpost . '&page=' . $data['page'] . '"class="next text-center"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a> </li> ';
                            }
                        }


                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <input id='base' type='hidden' value='<?php echo BASE_URL ?>'/>                    
    </div>
    <?php $libar->footer();  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL?>/public/js/owl.carousel.min.js"></script>
    <script src="<?php echo BASE_URL?>/public/js/popup.js"></script>
    <script src="<?php echo BASE_URL?>/public/js/nav-sevice-page.js"></script>

    <!--Carousel-->
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