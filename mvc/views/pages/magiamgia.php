<link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/userprofileStyle/voucherStyle.css">
<div class="container vouchers">
    <h3 class="voucherHeader"> Mã giảm giá</h3>

    <div class="row">
        <?php
        if ($data['GN']['RankId'] == NULL) {
            echo '
        <div class="col-lg-4 col-sm-12 boxrating">
            <div class="chitietboxno ">
                <div class="row  pt-2 pr-2 pl-2 ">
                    <div class="col-md-6 col-xs-12">
                        <h5>Chi tiêu</h5>
                    </div>
                    <div class="col-md-6 col-xs-12"><button class="no" disabled>Chưa có hạng</button></div>
                </div>
                <div class="pricePass">' . number_format($data['GN']['Point']) . 'đ/300,000đ</div>
                <div class="">Chi tiêu thêm ', number_format(300000 - $data['GN']['Point']), 'đ để đạt hạng Đồng</div>
            </div>
        </div>';
        }
        if ($data['GN']['RankId'] == 1) {
            echo '
        <div class="col-lg-4 col-sm-12 boxrating">
            <div class="chitietboxdong ">
                <div class="row  pt-2 pr-2 pl-2 ">
                    <div class="col-md-6 col-xs-12">
                        <h5>Chi tiêu</h5>
                    </div>
                    <div class="col-md-6 col-xs-12"><button class="dong" disabled>Hạng Đồng</button></div>
                </div>
                <div class="pricePass">' . number_format($data['GN']['Point']) . 'đ/700,000đ</div>
                <div class="">Chi tiêu thêm ', number_format(700000 - $data['GN']['Point']), 'đ để đạt hạng Bạc</div>
            </div>
        </div>';
        }
        if ($data['GN']['RankId'] == 2) {
            echo '
        <div class="col-lg-4 col-sm-12 boxrating">
            <div class="chitietboxbac ">
                <div class="row  pt-2 pr-2 pl-2 ">
                    <div class="col-md-6 col-xs-12">
                        <h5>Chi tiêu</h5>
                    </div>
                    <div class="col-md-6 col-xs-12"><button class="bac" disabled>Hạng Bạc</button></div>
                </div>
                <div class="pricePass">' . number_format($data['GN']['Point']) . 'đ/1,500,000đ</div>
                <div class="">Chi tiêu thêm ', number_format(1500000 - $data['GN']['Point']), 'đ để đạt hạng Vàng</div>
            </div>
        </div>';
        }
        if ($data['GN']['RankId'] == 3) {
            echo '
        <div class="col-lg-4 col-sm-12 boxrating">
            <div class="chitietboxvang ">
                <div class="row  pt-2 pr-2 pl-2 ">
                    <div class="col-md-6 col-xs-12">
                        <h5>Chi tiêu</h5>
                    </div>
                    <div class="col-md-6 col-xs-12"><button class="vang" disabled>Hạng Vàng</button></div>
                </div>
                <div class="pricePass">' . number_format($data['GN']['Point']) . 'đ/3,000,000đ</div>
                <div class="">Chi tiêu thêm ', number_format(3000000 - $data['GN']['Point']), 'đ để đạt hạng Kim Cương</div>
            </div>
        </div>';
        }
        if ($data['GN']['RankId'] == 4) {
            echo '
        <div class="col-lg-4 col-sm-12 boxrating">
            <div class="chitietboxkimcuong ">
                <div class="row  pt-2 pr-2 pl-2 ">
                    <div class="col-md-6 col-xs-12">
                        <h5>Chi tiêu</h5>
                    </div>
                    <div class="col-md-6 col-xs-12"><button class="kimcuong" disabled>Hạng Kim Cương</button></div>
                </div>
                <div class="pricePass">' . number_format($data['GN']['Point']) . 'đ/3,000,000đ</div>
                <div class="">Bạn đã đạt hạng tối đa</div>
            </div>
        </div>';
        }
        ?>
        <div class="col-md-7 col-xs-12 be">
            <div class="voucherMember mb-3">Ưu đãi ranking</div>
            <div class="mb-2">Discount 10% tổng giá trị đơn hàng khi đạt hạng <span class="bro"> Đồng</span></div>
            <div class="mb-2">Discount 20% tổng giá trị đơn hàng khi đạt hạng <span class="sil">Bạc</span></div>
            <div class="mb-2">Discount 30% tổng giá trị đơn hàng khi đạt hạng <span class="gold">Vàng</span></div>
            <div class="mb-2">Discount 40% tổng giá trị đơn hàng khi đạt hạng <span class="dia">Kim cương</span></div>
        </div>
    </div>

    <div class="content">
        <div class="memberPro">
            <?php
            if ($data['GN']['RankId'] == 4) {

                echo '
                <h5 class="memberProH2 text-center mt-4 mb-4">Ưu đãi hạng Kim Cương</h5>
                <div class="row">';
                while ($row = mysqli_fetch_array($data['KC'])) {
                    echo '
                        <div class="col-md-4 col-sm-12 mt-3">
                            <div class="row  proColDiamond">
                                <div class="col-4 ">
                                    <img class="img-pro img-fluid" src="' . $row['Image'] . '" alt="">
                                    <div class="vl"></div>
                                    <p class="mt-2 proPercent">' . $row['ValuePromotion'] . '</p>

                                </div>
                                <div class="col-8">
                                    <h5>' . $row['Code'] . '</h5>
                                    <p>' . $row['Content'] . '</p>
                                    <p class="proPercent">Kim Cương</p>
                                </div>
                            </div>
                            </div>
                            ';
                }
            }
            if ($data['GN']['RankId'] == 3) {

                echo '
                <h5 class="memberProH2 text-center mt-4 mb-4">Ưu đãi hạng Vàng</h5>
                <div class="row">';
                while ($row = mysqli_fetch_array($data['VA'])) {
                    echo '
                        <div class="col-md-4 col-sm-12 mt-3">
                            <div class="row  proColGold">
                                <div class="col-4 ">
                                    <img class="img-pro img-fluid" src="' . $row['Image'] . '" alt="">
                                    <div class="vl"></div>
                                    <p class="mt-2 proPercent">Giảm ' . $row['ValuePromotion'] . '</p>

                                </div>
                                <div class="col-8">
                                    <h5>' . $row['Code'] . '</h5>
                                    <p>' . $row['Content'] . '</p>
                                    <p class="proPercent">HSD:' . $row['DateEnd'] . '</p>
                                </div>
                            </div>
                            </div>
                            ';
                }
            }
            if ($data['GN']['RankId'] == 2) {

                echo '
                <h5 class="memberProH2 text-center mt-4 mb-4">Ưu đãi hạng Bạc</h5>
                <div class="row">';
                while ($row = mysqli_fetch_array($data['BA'])) {
                    echo '
                        <div class="col-md-4 col-sm-12 mt-3">
                            <div class="row  proColSilver">
                                <div class="col-4 ">
                                    <img class="img-pro img-fluid" src="' . $row['Image'] . '" alt="">
                                    <div class="vl"></div>
                                    <p class="mt-2 proPercent">Giảm ' . $row['ValuePromotion'] . '</p>

                                </div>
                                <div class="col-8">
                                    <h5>' . $row['Code'] . '</h5>
                                    <p>' . $row['Content'] . '</p>
                                    <p class="proPercent">HSD:' . $row['DateEnd'] . '</p>
                                </div>
                            </div>
                            </div>
                            ';
                }
            }
            if ($data['GN']['RankId'] == 1) {

                echo '
                <h5 class="memberProH2 text-center mt-4 mb-4">Ưu đãi hạng Đồng</h5>
                <div class="row">';
                while ($row = mysqli_fetch_array($data['DO'])) {
                    echo '
                        <div class="col-md-4 col-sm-12 mt-3">
                            <div class="row  proColBro">
                                <div class="col-4 ">
                                    <img class="img-pro img-fluid" src="' . $row['Image'] . '" alt="">
                                    <div class="vl"></div>
                                    <p class="mt-2 proPercent">Giảm ' . $row['ValuePromotion'] . '</p>

                                </div>
                                <div class="col-8">
                                    <h5>' . $row['Code'] . '</h5>
                                    <p>' . $row['Content'] . '</p>
                                    <p class="proPercent">HSD:' . $row['DateEnd'] . '</p>
                                </div>
                            </div>
                            </div>
                            ';
                }
            }
            ?>
        </div>


        <h5 class="memberProH2 text-center mt-4 mb-4 align-items-center">Ưu đãi của bạn</h5>
        <div class="row">
            <?php
            while ($row = mysqli_fetch_array($data['ALL'])) {
                echo '
                      <div class="col-md-4 col-sm-12 mt-3 ">
                      <div class="row proCol">
                          <div class="col-4 ">
                              <img class="img-pro img-fluid" src="' . $row['Image'] . '" alt="">
                              <div class="vl"></div>
                              <p class="mt-2 proPercent">Giảm ' . $row['ValuePromotion'] . '</p>
  
                          </div>
                          <div class="col-8">
                              <h5>' . $row['Code'] . '</h5>
                              <p>' . $row['Content'] . '</p>
                              <p class="proPercent">HSD:' . $row['DateEnd'] . '</p>
                          </div>
                      </div>
  
  
                  </div>
                      ';
            }
            ?>
        </div>

    </div>



</div>

</div>