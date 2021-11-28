<link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/userprofileStyle/scheduleStyle.css">
                
                        
                    
                    <div class="container-fluid p-0">
                    <h3 class="mt-4 pt-3 ml-3">Lịch hẹn</h3>
                    
                </div>
                    <?php
                   $i=0;
                    $z=0;
                    foreach($data['GB'] as $item){
                        $datatime= date_create($data['GB'][$z]['DateTime']);
                        $day =date_format($datatime,'l');
                        $date =date_format($datatime,'d');
                        $month =date_format($datatime,'F');
                        $year =date_format($datatime,'Y');
                     $timeDone=$item['StartTime'];
                        echo $data['GB'][$z]['DateTime'];
                        echo $day, $month, $year , $date;
                        echo"
                        <div class='appointment-schedule '>
                        <h4 class='pt-4  pl-5'>".$item['StartTime'].", $day, Ngày $date, $month, năm $year.</h4>
                        <div class='row'>
                            <div class='col-11 pl-5' style='height: 300px;'>
                            <iframe width='100%' height='300' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' id='gmap_canvas' src='https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=".$item['Adress']."+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed'></iframe> 
                            </div>
                        </div>
                        <div class='appointment-schedule__name-user mt-3'>
                            <div class=' pl-5' style='font-size: 20px; font-weight: bold;'> <img style='width: 30px;' src='../../source/img/Ellipse 22.png' alt=''>".$item['ShopName']."</div>
                            <div class='row pl-5'>
                                <div class=' pl-5' style='font-size: 15px;'>
                                <div class=' pl-5' style='font-size: 15px;'>".$timeDone."</div>
                                </div>
                                </div>
                                </div>
                                <div class='appointment-schedule__name-services'>";
                                foreach($item['Bookingservice'] as $bs){
                                    if($bs['ServiceId']=true){
                                        $i++;
                                    }
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
                        <div class='appointment-schedule__btn'>
                            <div class='row pt-4'>
                                <div class='col-2 offset-3'>
                                    <button class='changeSce w-100'>Hủy</button>
                                </div>
                                <div class='col-2'>
                                    <button class='changeSce w-100'>Thay đổi</button>
                                </div>
                            </div>

                        </div>
                    </div> ";
                    $z++;
                    }
                  
                    ?>
                    
                   
                </div>
               

