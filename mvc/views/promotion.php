<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/promotion.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/App.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/popup.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/popup.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/listshopT.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/style-sevice-page.css">

    <!--Popup-->
    <script src="<?php echo BASE_URL ?>/public/js/popup2.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <?php
       //include nav_normal.php in pages folder
       require_once './mvc/controllers/popup.php';
       $popup = new Popup();
       $libar = new Library();
       $libar->Nav();
       $popup->popupSearch();
        ?>
    </header>
    <div class="container">
        <div class="mainPro">
            <img class="img-fluid img-main " src="<?php echo BASE_URL ?>/public/img/1.jpg" alt="">
            <div class="infoPro">
                <h2 class="infoh2">Giảm 100% giá trị hoá đơn khi lần đầu đặt lịch tại Bookstylist</h2>
                <div class="row">
                    <div class="col-md-1 col-sm-4">
                        <div class="circlelogo rounded-circle text-center">
                            <img class="img-fluid logo" src="<?php echo BASE_URL ?>/public/img/logo.png" alt="">
                        </div>
                        <p class="textPro">KHDT100</p>
                    </div>
                    <div class="col-md-8 col-ms-6">
                        <p class="detailPro">Tối đa 50.000đ<br/> Chỉ áp dụng cho khách hàng lần đầu đặt dịch vụ tại BookStylist<br/> Sử dụng tối đa một lần<br/> HSD: 20/10/2021</p>

                    </div>
                    <div class="col-md-3 col-sm-2">
                        <button class="btn btn-book">Sử dụng</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="memberPro">
                <h2 class="memberProH2 text-center mt-4 mb-4">ƯU ĐÃI THÀNH VIÊN</h2>
                <div class="row">
                    <div class="col-md-4 col-sm-12 mt-3 ">
                        <div class="row proColSilver">
                            <div class="col-3 ">
                                <img class="img-pro img-fluid" src="<?php echo BASE_URL ?>/public/img/2.png" alt="">
                                <div class="vl"></div>
                                <p class="mt-2 proPercent">Giảm 10%</p>

                            </div>
                            <div class="col-8">
                                <h3>Tuấn barber</h3>
                                <p>Giảm tối đa 10k cho tổng dịch vụ</p>
                                <p class="proPercent">Silver</p>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-4 col-sm-12 mt-3">
                        <div class="row proColGold">
                            <div class="col-3 ">
                                <img class="img-pro img-fluid" src="<?php echo BASE_URL ?>/public/img/2.png" alt="">
                                <div class="vl"></div>
                                <p class="mt-2 proPercent">Giảm 10%</p>

                            </div>
                            <div class="col-8">
                                <h3>Tuấn barber</h3>
                                <p>Giảm tối đa 10k cho tổng dịch vụ</p>
                                <p class="proPercent">Gold</p>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-4 col-sm-12 mt-3">
                        <div class="row proColDiamond">
                            <div class="col-3 ">
                                <img class="img-pro img-fluid" src="<?php echo BASE_URL ?>/public/img/2.png" alt="">
                                <div class="vl"></div>
                                <p class="mt-2 proPercent">Giảm 10%</p>

                            </div>
                            <div class="col-8">
                                <h3>Tuấn barber</h3>
                                <p>Giảm tối đa 10k cho tổng dịch vụ</p>
                                <p class="proPercent">Diamond</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <div class="memberPro">
                <h2 class="memberProH2 text-center mt-4 mb-4">ƯU ĐÃI CỦA SHOP</h2>
                <div class="row">
                    <div class="col-md-4 col-sm-12 mt-3 ">
                        <div class="row proColSilver">
                            <div class="col-3 ">
                                <img class="img-pro img-fluid" src="<?php echo BASE_URL ?>/public/img/2.png" alt="">
                                <div class="vl"></div>
                                <p class="mt-2 proPercent">Giảm 10%</p>

                            </div>
                            <div class="col-8">
                                <h3>Tuấn barber</h3>
                                <p>Giảm tối đa 10k cho tổng dịch vụ</p>
                                <p class="proPercent">HSD:20/10/2021</p>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-4 col-sm-12 mt-3">
                        <div class="row proColSilver">
                            <div class="col-3 ">
                                <img class="img-pro img-fluid" src="<?php echo BASE_URL ?>/public/img/2.png" alt="">
                                <div class="vl"></div>
                                <p class="mt-2 proPercent">Giảm 10%</p>

                            </div>
                            <div class="col-8">
                                <h3>Tuấn barber</h3>
                                <p>Giảm tối đa 10k cho tổng dịch vụ</p>
                                <p class="proPercent">HSD:20/10/2021</p>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-4 col-sm-12 mt-3">
                        <div class="row proColSilver">
                            <div class="col-3 ">
                                <img class="img-pro img-fluid" src="<?php echo BASE_URL ?>/public/img/2.png" alt="">
                                <div class="vl"></div>
                                <p class="mt-2 proPercent">Giảm 10%</p>

                            </div>
                            <div class="col-8">
                                <h3>Tuấn barber</h3>
                                <p>Giảm tối đa 10k cho tổng dịch vụ</p>
                                <p class="proPercent">HSD:20/10/2021</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <div class="memberPro">
                <h2 class="memberProH2 text-center mt-4 mb-4">ƯU ĐÃI KHÁC</h2>
                <div class="row">
                    <div class="col-md-4 col-sm-12 mt-3 ">
                        <div class="row proColSilver">
                            <div class="col-3 ">
                                <img class="img-pro img-fluid" src="<?php echo BASE_URL ?>/public/img/2.png" alt="">
                                <div class="vl"></div>
                                <p class="mt-2 proPercent">Giảm 10%</p>

                            </div>
                            <div class="col-8">
                                <h3>Tuấn barber</h3>
                                <p>Giảm tối đa 10k cho tổng dịch vụ</p>
                                <<p class="proPercent">HSD:20/10/2021</p>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-4 col-sm-12 mt-3">
                        <div class="row proColSilver">
                            <div class="col-3 ">
                                <img class="img-pro img-fluid" src="<?php echo BASE_URL ?>/public/img/2.png" alt="">
                                <div class="vl"></div>
                                <p class="mt-2 proPercent">Giảm 10%</p>

                            </div>
                            <div class="col-8">
                                <h3>Tuấn barber</h3>
                                <p>Giảm tối đa 10k cho tổng dịch vụ</p>
                                <p class="proPercent">HSD:20/10/2021</p>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-4 col-sm-12 mt-3">
                        <div class="row proColSilver">
                            <div class="col-3 ">
                                <img class="img-pro img-fluid" src="<?php echo BASE_URL ?>/public/img/2.png" alt="">
                                <div class="vl"></div>
                                <p class="mt-2 proPercent">Giảm 10%</p>

                            </div>
                            <div class="col-8">
                                <h3>Tuấn barber</h3>
                                <p>Giảm tối đa 10k cho tổng dịch vụ</p>
                                <p class="proPercent">HSD:20/10/2021</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>


        </div>

    </div>
    <input id='base' type='hidden' value='<?php echo BASE_URL ?>'/>
    <footer>
    <?php $libar->footer();  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="<?php echo BASE_URL ?>/public/js/owl.carousel.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<script src="<?php echo BASE_URL ?>/public/js/popup.js"></script>
<script src="<?php echo BASE_URL ?>/public/js/nav.js"></script>
<script src="<?php echo BASE_URL ?>/public/js/Detail2.script.js"></script>
</body>

</html>