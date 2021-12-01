<?php
// INSERT INTO `tbl_feedbacks`(`Id`, `Content`, `UserId`, `CreateDate`, `UpdateDate`, `IsDeleded`, `ShopId`, `BookId`, `Rating`, `Image`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')
    if (isset($_SESSION['Id'])){
        echo '
        <!-- Popup RaTE -->
        <div class="modal fade" id="rate-'.$_SESSION['Id'].'-'.$shopid.'-'.$bookid.'" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body" style="background:#222222; color: #fff; text-align: center;">
                        <h5>Đánh giá</h5>
                    </div>
                    <div class="modal-body">
                        <!--Dịch vụ đã làm-->
                        <div>
                        <h5>'.$nameshop.'</h5>
                        <p>Dịch vụ : ';
        for ($i=0;$i<count($bookservice); $i++){
            echo    $bookservice[$i]['Name'];
            if($i!=count($bookservice)-1){
                echo ', ';
            }                            
        }                     
        echo            '</p>
                        <hr />
                        </div>
                        <!--Rate Star-->
                        <p style="float: left;">Đánh giá : </p>
                        <div class="rating">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5"></label>

        
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4"></label>

        
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3"></label>

        
                            <input type="radio" id="star2" name="rating" value="2" />
                            <label class="full" for="star2"></label>

        
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1"></label>
        
        
                        </div>
                        <hr style="clear:both;" />
                        <!-- Rate form-->
                        <form class="form-rating" action="" method="post" enctype="multipart/form-data">
                            <p style="float:left;">Nội dung :</p>
                            <textarea name="content-rate" style="margin-left: 10px; width: 80%;"></textarea><br style="clear:both" />

                            <input type="hidden" name="rate" value="" class="markrate" value>


                            <input type="hidden" name="userid" value='.$_SESSION['Id'].'>
                            <input type="hidden" name="shopid" value='.$shopid.'>
                            <input type="hidden" name="bookid" value='.$bookid.'>

                            <div class=" modal-footer justify-content-center " style="margin-bottom:-20px;">
                                <button type="button " class="btn btn-cancel " >Hủy</button>
                                <button type="submit " class="btn btn-rate">Đánh giá</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
        </div>
        ';
    }






?>








<!-- Popup RaTE -->
<div class="modal fade" id="popup-rate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body" style="background:#222222; color: #fff; text-align: center;">
                <h5>Đánh giá</h5>
            </div>
            <div class="modal-body">
                <!--Dịch vụ đã làm-->
                <div>
                    <h5>TuanBarber</h5>
                    <p>Dịch vụ : Massage Full Body</p>
                    <hr />
                </div>
                <!--Rate Star-->
                <p style="float: left;">Đánh giá : </p>
                <div id="rating">
                    <input type="radio" id="star5" name="rating" value="5" />
                    <label class="full" for="star5" title="Awesome - 5 stars"></label>

                    <input type="radio" id="star4half" name="rating" value="4 and a half" />
                    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>

                    <input type="radio" id="star4" name="rating" value="4" />
                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                    <input type="radio" id="star3half" name="rating" value="3 and a half" />
                    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>

                    <input type="radio" id="star3" name="rating" value="3" />
                    <label class="full" for="star3" title="Meh - 3 stars"></label>

                    <input type="radio" id="star2half" name="rating" value="2 and a half" />
                    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>

                    <input type="radio" id="star2" name="rating" value="2" />
                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                    <input type="radio" id="star1half" name="rating" value="1 and a half" />
                    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>

                    <input type="radio" id="star1" name="rating" value="1" />
                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>

                    <input type="radio" id="starhalf" name="rating" value="half" />
                    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>

                </div>
                <hr style="clear:both;" />
                <!-- Rate form-->
                <form action="">
                    <p style="float:left;">Nội dung :</p>
                    <textarea name="content-rate" style="margin-left: 10px; width: 80%;"></textarea><br style="clear:both" />
                    <input type="hidden" name="rate" value="" id="markrate" />
                    <p style="float:left; margin-right: 15px; margin-top: 10px;">Hình ảnh :</p>
                    <input id="imagecontent" style="margin-top: 10px;" type="file" name="img-rate" multiple />
                    <hr style="clear: both;" />
                    <div id="previewcontent"></div>
                    <br style="clear: both;" />
                    <div class=" modal-footer justify-content-center " style="margin-bottom:-20px;">
                        <button type="button " class="btn btn-cancel " data-dismiss="modal ">Hủy</button>
                        <button type="submit " class="btn " id="btn-rate">Đánh giá</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
</div>