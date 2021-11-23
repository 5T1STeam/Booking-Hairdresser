<link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/listshopT.css">
<div class="container px-0">
    <nav class=" row navbar px-3">
        <div class=" col-lg-1 col-sm-1 navbar-brand logo">
            <a href="<?php echo BASE_URL ?>/home"><img src="../../../Booking-Hairdresser/public/img/logo.png" alt="" style="width: 60px;"></a>
        </div>
        <div class="nav nav-pc">
            <div class="form-search input-group form-inline col-lg-5 col-sm-7">
                <input type="text" class="howto-input form-control " placeholder=" Bạn muốn tìm kiếm gì?" data-toggle="modal" data-target="#popup-howto">
                <input type="text" class="location-input form-control " placeholder="Địa điểm " data-toggle="modal" data-target="#popup-location">
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle nav-link" id="ddMenu" data-toggle="dropdown"><span><img style="width: 25;height: 25px;" src="../public/img/emojione_flag-for-vietnam.png" alt=""></span>
                    Việt Nam
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Việt Nam</a>
                    <a class="dropdown-item" href="#">USA</a>
                </div>
            </div>
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
                        <a class='dropdown-item' href='" . BASE_URL . "/profile/thongbaocuatoi/" . $_SESSION['Id'] . "'>Thông báo</a>
                        <a class='dropdown-item' href='" . BASE_URL . "/logout'>Đăng xuất</a>
                    </div>
                </div>";
            } else {
                echo "<a class='btn btn-login' href='".BASE_URL."/login'>Sign in / Login</a>";
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
            <input id="mbsearch" type="text" style="margin-top:0px;" class="form-control" placeholder="Bạn đang tìm kiếm gì ?" data-toggle="modal" data-target="#popup-howto">
            <div class="nav-list px-2">
                <?php
                foreach ($category as $id => $name) {
                    echo "<a class='nav-mblink nav-link' href='".BASE_URL."/listshop/category&dm=" . $id . "&page=1'>" . $name . "</a>";
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
    <div class=" bottom-section px-3 ">
        <nav class="nav row justify-content-between ">
            <?php
            foreach ($category as $id => $name) {
                if ($id < 8) {
                    echo " <a class='nav-link' href='".BASE_URL."/listshop/category&dm=" . $id . "&page=1'>" . $name . "</a>";
                }
                if ($id >= 8) {
                    if ($id == 8) {
                        echo "<div class='dropdown'>
                                    <a class='dropdown-toggle nav-link' id='ddMenu' data-toggle='dropdown'>
                                    More
                                    </a>
                                    <div class='dropdown-menu'>
                                    <a class='dropdown-item' href='".BASE_URL."/listshop/category&dm=" . $id . "&page=1'>" . $name . "</a>";
                    } else {
                        echo "<a class='dropdown-item' href='".BASE_URL."/listshop/category&dm=" . $id . "&page=1'>" . $name . "</a>";
                    }
                    if ($id == count($category) + 1) {
                        echo "</div>";
                    }
                }
            }
            ?>

        </nav>

    </div>
</div>
<div id="navhide" class=" container-fluid fixed-top" style="background: #111; " hidden>
    <div class="navbar container px-0">
        <div class=" col-lg-1 col-sm-1 navbar-brand logo">
            <a href="#"><img src="https://lh3.googleusercontent.com/nAq6IwLusfKijSp3h0EZddbHwX0cgA-e7H-81JBd5lvS6JmumBmf2ELgWDez3QbWqrGVap8DNuLu2G_NwnIkuyYxPw6FM6kCuP4n3p0_JAfEacDWebb0E_7EYtyziFV-I_JwVTjtFIDTGj2c-YPcffmWGTAuNEQK7UPuZ99ITKw3QfF-99wvRIkp65FPPM-7bLGoBRjsDSI4r2Qoljc2AhG578Qxb9489TXhJ5Kl8PUidgf2W-viwVHrevKYkUDXDcKcK8GfIgo0g24CFKEmuuHINh_1bb7oSYjxBFV7To1H3qpeRKgJt3Y2-rgQ3lMRFZUq5ay3vDWNUsOuyoDpht0nU-_zSXrQ4eiD4htRbhQHj6LQNG2HKzNAFWjq-_rLKMxYPqjqBeQSMDyZOqbg1DWBoZvsMMsa4zxeZHgsIZYLPes2zaG2PInDbLoiqdo1-q99duB1TJGmif4m5Aa9GB36mTp8o0THX3Slq-QFDKMQKOqdL0M_WtqQme-vNlMrUIzDp-md_h6fYaDNHytGVqwZ2hyoHJVeEgOLBvVkwuYUA3yCk_giZcDf7ByVcgFuA6jbU9aYekvhkWuGFpobqUBDoJDCoQ5Z_5LRpDiE3PJK1oEYOSqTRkTdxLYcn2ya2jelVjnU1yNKA22LuSoTzVkG8T_Js4z9Ob1pmsXYlnF2k7_6Chlfiz4ITyXuCzPzmlp1yniyql_9oKt0yzDa7R20=w1290-h832-no?authuser=0" style="width: 60px;"></a>
        </div>
        <div class="nav nav-pc">
            <div class="form-search input-group form-inline col-lg-5 col-sm-7">
                <input type="text" class="howto-input form-control " placeholder=" Bạn muốn tìm kiếm gì?" data-toggle="modal" data-target="#popup-howto">
                <input type="text" class="location-input form-control " placeholder="Địa điểm " data-toggle="modal" data-target="#popup-location">
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle nav-link" id="ddMenu" data-toggle="dropdown"><span><img style="width: 25;height: 25px;" src="../../Booking-Hairdresser/public/img/emojione_flag-for-vietnam.png" alt=""></span>
                    Việt Nam
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Việt Nam</a>
                    <a class="dropdown-item" href="#">USA</a>
                </div>
            </div>
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
        </div>
        <label for="nav-check" class="nav-mobile-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="bi bi-list" viewBox="0 0 15 15">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </label>


    </div>
</div>