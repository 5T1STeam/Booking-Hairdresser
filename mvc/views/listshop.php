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
    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/App.css">
    <link rel="stylesheet" href="./public/css/popup.css">
    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/popup.css">
    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/listshopT.css">
    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/style-sevice-page.css">

    <!--Popup-->
    <script src="../../Booking-Hairdresser/public/js/popup2.js"></script>
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
        <?php
        $popup->popupFilter();
        ?>
        <hr />
        <button id="btn-popup-filter" type="button" class="btn" data-toggle="modal" data-target="#popup-filters">Filters</button>
        <hr />
        <div class="listservice">
            <button id="btn-popup-rate" type="button" class="btn" data-toggle="modal" data-target="#kqBook">rete</button>
            <?php include './mvc/views/pages/popup_rate.php'; ?>
            <?php
            if ($data['ALL'] != null) {
                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = 5;
                $total_page = ceil(count($data['ALL']) / $limit);
                // Giới hạn current_page trong khoảng 1 đến total_page
                if ($current_page > $total_page) {
                    $current_page = $total_page;
                } else if ($current_page < 1) {
                    $current_page = 1;
                }
                // Tìm Start
                $start = ($current_page - 1) * $limit;
                for ($i = $start; $i < ($start + $limit); $i++) {
                    $shop = $data['ALL'][$i];
                    $shop->showShop();
                    foreach ($shop->getService() as $service) {
                        $shop->showService($service['id'], $service['name'], $service['price']);
                        $popup->popupBooking($shop->getId(), $shop->getName(), $service['id'], $service['name'], $service['price'], $service['time']);
                    }
                    echo "</div></div></div>";
                }
            ?>
        </div>
        <div id="kq">
        </div>
        <div id="overlay1">   
        </div>
        <div class="pagination">
        <?php
                // PHẦN HIỂN THỊ PHÂN TRANG
                // BƯỚC 7: HIỂN THỊ PHÂN TRANG
                $url = $_SERVER['REQUEST_URI'];
                echo $url;
                // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                if ($current_page > 1 && $total_page > 1) {
                    echo '<a href="' . $url . '&page=' . ($current_page - 1) . '">Prev</a> | ';
                }

                // Lặp khoảng giữa
                for ($i = 1; $i <= $total_page; $i++) {
                    // Nếu là trang hiện tại thì hiển thị thẻ span
                    // ngược lại hiển thị thẻ a
                    if ($i == $current_page) {
                        echo '<span>' . $i . '</span> | ';
                    } else {
                        echo '<a href="' . $url . '&page=' . $i . '">' . $i . '</a> | ';
                    }
                }

                // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                if ($current_page < $total_page && $total_page > 1) {
                    echo '<a href="' . $url . '&page=' . ($current_page + 1) . '">Next</a> | ';
                }
            }
        ?>
        </div>

    </div>
    <?php $libar->footer();  ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="../../../Booking-Hairdresser/public/js/owl.carousel.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <script src="../../Booking-Hairdresser/public/js/popup.js"></script>
    <script src="../../../Booking-Hairdresser/public/js/nav-sevice-page.js"></script>
    <script src="../../../Booking-Hairdresser/public/js/Detail2.script.js"></script>
    <!--Nav starts-->

    <!--Popup-->

    <!-- <script src="../../../Booking-Hairdresser/public/js/popup.js"></script> -->
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
                    items: 7
                }
            }
        });
    </script>
</body>

</html>