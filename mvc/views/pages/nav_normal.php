<div class="container px-0">
    <nav class=" row navbar px-3">
        <div class=" col-lg-1 col-sm-1 navbar-brand logo">
            <a href="../homepage"><img src="../public/img/logo.png" style="width: 60px;"></a>
        </div>

        <div class="nav nav-pc">
            <div id="form-search-1" class="input-group form-inline col-lg-5 col-sm-7">
                <input id="howto-2" type="text" class=" form-control " placeholder=" Bạn muốn tìm kiếm gì?" data-toggle="modal" data-target="#popup-howto">


                <input id="location-2" type="text" class="form-control " placeholder="Địa điểm " data-toggle="modal" data-target="#popup-location">


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
            <div class="dropdown">
                <a class="dropdown-toggle nav-link" id="ddMenu" data-toggle="dropdown"><span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 18 18">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg></span>
                    Profile
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="./userprofile/infor.html">Trang cá nhân </a>
                    <a class="dropdown-item" href="./userprofile/schedule.html">Lịch book</a>
                    <a class="dropdown-item" href="./userprofile/notification.html">Thông báo</a>
                    <a class="dropdown-item" href="./login.html">Đăng xuất</a>
                </div>
            </div>
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
                <a class="nav-mblink nav-link " onclick="clickBtndoitac()">Đối tác</a>
                <a class="nav-mblink nav-link " href="../html/login.html">Đăng xuất</a>
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
<div id="navhide" class="navbar fixed-top" style="background: #111; z-index: 2;" hidden>
    <div class=" container px-1">
        <div class=" col-lg-1 col-sm-1 navbar-brand logo">
            <a href="./index.html"><img src="../../Booking-Hairdresser/public/img/logo.png" style="width: 60px;"></a>
        </div>
        <div class="nav nav-pc">
            <div id="form-search-1" class="input-group form-inline col-lg-5 col-sm-7">
                <input id="howto-2" type="text" class=" form-control " placeholder=" Bạn muốn tìm kiếm gì?" data-toggle="modal" data-target="#popup-howto">
                <!-- The Service -->

                <input id="location-2" type="text" class="form-control " placeholder="Địa điểm " data-toggle="modal" data-target="#popup-location">
                <!-- The Location -->               
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
            <div class="dropdown">
                <a class="dropdown-toggle nav-link" id="ddMenu" data-toggle="dropdown"><span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 18 18">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
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
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </label>


    </div>
</div>