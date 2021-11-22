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
    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/popup.css">
    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/listshopT.css">
    <link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/style-sevice-page.css">

    <!--Popup-->
    <script src="../../Booking-Hairdresser/public/js/popup2.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

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

            <?php
            foreach ($data['ALL'] as $shop) {
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
        <div class="overlay">
            <div class="loader"></div>
        </div>
        <!-- <div class="row">
            <div class="col-md text-center">
                <div class="pagination_rounded">
                    <ul>
                        <li>
                            <a href="#" class="prev text-right"> <i class="fa fa-angle-left" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#">1</a> </li>
                        <li class="hidden-xs"><a href="#">2</a> </li>
                        <li class="hidden-xs"><a href="#">3</a> </li>
                        <li class="hidden-xs"><a href="#">4</a> </li>
                        <li class="hidden-xs"><a href="#">5</a> </li>
                        <li class="visible-xs"><a href="#">...</a> </li>
                        <li><a href="#" class="next text-center"><i class="fa fa-angle-right" aria-hidden="true"></i></a> </li>
                    </ul>
                </div>
            </div>
        </div> -->
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

                        if ($_GET['page'] > 1 && $data['page'] > 1) {
                            echo '<li><a href="' . $urlpost . '&page=' . ($_GET['page'] - 1) . '" class="prev text-right"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>';
                        }

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
                        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                        if ($_GET['page'] < $data['page'] && $data['page'] > 1) {
                            echo '<li><a href="' . $urlpost . '&page=' . ($_GET['page'] + 1) . '"class="next text-center"><i class="fa fa-angle-right" aria-hidden="true"></i></a> </li> ';
                        }
                    }


                    ?>
                    </ul>
                </div>
            </div>
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

</body>

</html>