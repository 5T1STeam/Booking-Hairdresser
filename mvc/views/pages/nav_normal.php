<div class="container px-0">
<nav class=" row navbar">
        <div class="col-xl-1 col-lg-1 col-sm-1 navbar-brand logo">
            <a href="<?php echo BASE_URL ?>/home"><img src="<?php echo BASE_URL ?>/public/img/logo.png" alt=""style="width: 60px;"></a>
        </div>
        <div class="nav nav-pc col-xl-10 col-lg-10">
            <div class="form-search input-group form-inline col-xl-7 col-lg-6 col-sm-6">
                <input type="text" class="howto-input form-control " placeholder=" Bạn muốn tìm kiếm gì?" data-toggle="modal" data-target="#popup-howto">
                <input type="text" class="location-input form-control " placeholder="Địa điểm " data-toggle="modal" data-target="#popup-location">
            </div>
            <div class="dropdown">
            <a class="dropdown-toggle nav-link" id="ddMenu" data-toggle="dropdown"><span><img style="width: 25;height: 25px;" src="<?php echo BASE_URL ?>/public/img/emojione_flag-for-vietnam.png" alt=""></span>
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
        <div class="nav-mobile" >
            <label for="nav-check" class="nav-close"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                </svg>
            </label>
            <?php
            if (isset($_SESSION['Id'])) {
                echo "<span class='avatar mb-3'> <svg xmlns='http://www.w3.org/2000/svg' width='60' height='60' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 18 18'>
                            <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z' />
                            <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z' />
                        </svg>
                        <a class='mb-3' href='" . BASE_URL . "/profile/thongtintaikhoan'>Profile</a>
                    </span>";
            } else {
                echo "<br/><br/><a class='nav-mblink nav-link ' style='margin-left:10px;' href='" . BASE_URL . "/login'>Sign in / Login</a>";
            }
            ?>
            <input id="mbsearch" type="text" style="margin-top:0px;" class="form-control mt-3" placeholder="Bạn đang tìm kiếm gì ?" data-toggle="modal" data-target="#popup-howto">
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
<div id="navhide" class="container-fluid fixed-top" style="background: #111; z-index:2" hidden>
    <div class="navbar container px-0">
    <div class="col-xl-1 col-lg-1 col-sm-1 navbar-brand logo">
            <a href="http://125.234.104.133/web_php/gr06/"><img src="<?php echo BASE_URL ?>/public/img/logo.png" style="width: 60px;"></a>
        </div>
        <div class="nav nav-pc col-xl-10 col-lg-10">
            <div class="form-search input-group form-inline col-xl-7 col-lg-6 col-sm-6">
                <input type="text" class="howto-input form-control " placeholder=" Bạn muốn tìm kiếm gì?" data-toggle="modal" data-target="#popup-howto">
                <input type="text" class="location-input form-control " placeholder="Địa điểm " data-toggle="modal" data-target="#popup-location">
            </div>
            <div class="dropdown">
            <a class="dropdown-toggle nav-link" id="ddMenu" data-toggle="dropdown"><span><img style="width: 25;height: 25px;" src="<?php echo BASE_URL ?>/public/img/emojione_flag-for-vietnam.png" alt=""></span>
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