<link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/userprofileStyle/scheduleStyle.css">
                
                        
                    
                    <div class="container-fluid p-0">
                    <h3 class="mt-4 pt-3 ml-3">Lịch hẹn</h3>
                    
                </div>
                    <?php
                    $z=0;
                    foreach($data['GB'] as $item){
                        $time =count($item['Bookingservice']);
                        $datatime= date_create($data['GB'][$z]['DateTime']);
                        $day =date_format($datatime,'l');
                        $date =date_format($datatime,'d');
                        $month =date_format($datatime,'F');
                        $year =date_format($datatime,'Y');
                        $timeDone=strtotime($item['StartTime']);
                        $timeSuc=date("H:i:s",$timeDone+$time*60*60);
                        echo"
                        <div class='appointment-schedule '>
                        <h4 class='pt-4  pl-5'>" . $item['StartTime'] . ", $day, Ngày $date, $month, năm $year.</h4>
                        <div class='row'>
                            <div class='col-11 pl-5' style='height: 300px;'>
                            <iframe width='100%' height='300' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' id='gmap_canvas' src='https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=" . $item['Adress'] . "+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed'></iframe>                             </div>
                        </div>
                        <div class='appointment-schedule__name-user mt-3'>
                            <div class=' pl-5' style='font-size: 20px; font-weight: bold;'> ".$item['ShopName']."</div>
                            <div class='row pl-5'>
                                <div class=' pl-5' style='font-size: 15px;'>
                                <div class=' pl-5' style='font-size: 15px;'>".$item['StartTime']." - ".$timeSuc ."</div>
                                </div>
                                </div>
                                </div>
                                <div class='appointment-schedule__name-services'>";
                                foreach($item['Bookingservice'] as $bs){
                                    echo " 

                        
                            <div class='row pl-5'>
                                <div class='col-6 pl-5' style='font-size: 15px;'>
                                    <div class='row'>".$bs['Name']."</div>
                                    
                                </div>
                                <div class='col-5 pr-5' style='font-size: 15px;'>
                                    <div class='row d-flex justify-content-end'>".number_format($bs['Price'])."đ</div>
                                
                                </div>
                            </div>";
                                }
                                echo"

                            <div class='row pl-5 pr-5'>
                                <hr class='col-10 pl-5'>
                            </div>
                            <div class='row font-weight-bold pl-5'>
                                <div class='col-6 pl-5' style='font-size: 15px;'>
                                    <div class='row'>Tổng tiền</div>
                                </div>
                                <div class='col-5 pr-5' style='font-size: 15px;'>
                                    <div class='row d-flex justify-content-end'>".number_format($item['TotalBill'])."đ</div>
                                </div>
                            </div>
                        </div>
                        <form action='' method='POST'>
                        <div class='appointment-schedule__btn'>
                            <div class='row pt-4'>
                                <div class='col-4 offset-3'>
                                    <input type='hidden' name='bookingId' value='".$item['Id']."'>
                                    <button type='submit' name='cancel' class='changeSce w-100'>Hủy</button>
                                </div>
                                
                            </div>

                        </div>
                        </form>
                    </div> ";
                    $z++;
                    }
                  
                    ?>
                    
                   
                </div>
               

