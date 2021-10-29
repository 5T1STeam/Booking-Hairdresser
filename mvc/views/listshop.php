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
        $popup->popupSearch();
        include_once './mvc/views/pages/nav_normal.php';
        ?>
    </header>
    <div class="container">
        <?php
        $popup->popupFilter();
        ?>
        <button id="btn-popup-filter" type="button" class="btn" data-toggle="modal" data-target="#popup-filters">Filters</button>
        <div class="listservice">
        <?php
            foreach($data["ALL"] as $shop){
                $shop->showShop();
            }
        ?>
        </div>
        <?php include_once './mvc/views/pages/popup_booking.php'; ?>

    </div>
    <?php include './mvc/views/pages/footer.php'; ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="../../../Booking-Hairdresser/public/js/owl.carousel.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    
    <script src="../../../Booking-Hairdresser/public/js/nav.js"></script>
    <script src="../../../Booking-Hairdresser/public/js/Detail2.script.js"></script>
    <!--Nav starts-->

    <!--Popup-->
    <script src="../../../Booking-Hairdresser/public/js/popup.js"></script>
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
        $(document).ready(function() {
            $('#province').change(function(event) {
                provinceid = $('#province').val();
                $('input[name="province"]').val(provinceid);
                $.post('../mvc/controllers/loadlocation.php', {
                        province: provinceid
                    })
                    .done(function(data) {
                        $('#district').html(data);
                    });
                $('#wards').html("<option value=''>Phường / Xã</option>");
                $('input[name="district"]').val(null);
                $('input[name="wards"]').val(null);
            })
            $('#district').change(function() {
                districtId = $('#district').val();
                $('input[name="district"]').val(districtId);
                $.post('../mvc/controllers/loadlocation.php', {
                        district: districtId
                    })
                    .done(function(data) {
                        $('#wards').html(data);
                    });
                $('input[name="wards"]').val(null);
            })
            $('#wards').change(function() {
                $('input[name="wards"]').val($('#wards').val());
            })
        });
        $(document).ready(function() {
            $('#province_f').change(function(event) {
                provinceid = $('#province_f').val();
                $('input[name="province-f"]').val(provinceid);
                $.post('../mvc/controllers/loadlocation.php', {
                        province: provinceid
                    })
                    .done(function(data) {
                        $('#district_f').html(data);
                    });
                $('#wards_f').html("<option value=''>Phường / Xã</option>");
                $('input[name="district-f"]').val(null);
                $('input[name="wards-f"]').val(null);
            })
            $('#district_f').change(function() {
                districtId = $('#district_f').val();
                $('input[name="district-f"]').val(districtId);
                $.post('../mvc/controllers/loadlocation.php', {
                        district: districtId
                    })
                    .done(function(data) {
                        $('#wards_f').html(data);
                    });
                    $('input[name="wards-f"]').val(null);
            })
            $('#wards_f').change(function() {
                $('input[name="wards-f"]').val($('#wards_f').val());
            })
        });
        
        
        
        
    </script>
</body>

</html>