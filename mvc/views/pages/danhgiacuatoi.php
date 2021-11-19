<link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/userprofileStyle/reviewStyle.css">

<div id="my-review" class="my-review">
                    <div class="my-review__title">
                        <h3>Đánh giá của tôi</h3>
                    </div>
                    <div class="my-review__main col-md-12 col-xs-12 ">
                        <table>
                            <tr>
                                <td class="col-2 hds">Tên cửa hàng</td>
                                <td class="col-2 hds">Ngày đặt lịch</td>
                                <td class="col-2 hds">Dịch vụ</td>
                                <td class="col-2 hds">Thời gian</td>
                                <td class="col-2 hds">Giá</td>
                                <td class="col-2 hds px-4"> Đánh giá</td>
                            </tr>
                            <?php
                            foreach($data['GG'] as $item ){
                                echo '
                                <tr>
                                <td class="col-2 table-col__one"><a href="">' . $item["ShopName"] . '</a>
                                </td>
                                <td class="col-2">20/11/2021</td>
                                <td class="col-2">' . $item["ServiceName"] . '</td>
                                <td class="col-2">14:00-16:00</td>
                                <td class="col-2">' .number_format( $item["Price"]) . 'đ</td>
                                <td class="col-2 table-col__six px-5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                              </svg></td>
                            </tr>

                                ';}
                             ?>
                          
                        </table>
                    </div>
                </div>