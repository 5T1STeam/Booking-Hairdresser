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
                            
                            <label class="full" for="star5"><input type="radio" class="star5" name="rating" value="5" hidden/></label>

        
                            
                            <label class="full" for="star4"><input type="radio" class="star4" name="rating" value="4" hidden/></label>

        
                            
                            <label class="full" for="star3"><input type="radio" class="star3" name="rating" value="3" hidden/></label>

        
                            
                            <label class="full" for="star2"><input type="radio" class="star2" name="rating" value="2" hidden/></label>

        
                            
                            <label class="full" for="star1"><input type="radio" class="star1" name="rating" value="1" hidden/></label>
        
        
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
                                <button type="button " class="btn btn-cancel " data-dismiss="modal">Hủy</button>
                                <button type="submit " class="btn btn-rate">Đánh giá</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
        ';
    }






?>








