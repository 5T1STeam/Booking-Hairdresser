<link rel="stylesheet" href="../../../Booking-Hairdresser/public/css/userprofileStyle/scheduleStyle.css">

                <div class="container-fluid p-0">
                    <h3 class="mt-4 pt-3 ml-3">Lịch hẹn</h3>
                    <div class="appointment-schedule ">
                        <?php
                        echo "<pre>";
                        print_r(mysqli_fetch_array($data['GB']));
                        
                        echo "<pre/>";
                        $list=[];
                        while($col=mysqli_fetch_array($data['GS'])){
                            array_push($list,$col);
                        }
                        while($row=mysqli_fetch_array($data['GB'])){
                            $datetime = date_create($row['DateTime']);

                            $day = date_format( $datetime, 'l'); 
                            $date = date_format( $datetime, 'd'); 
                            $month = date_format( $datetime, 'F'); 
                            $year = date_format( $datetime, 'Y'); 
                            $time = date_format( $datetime, 'g:i a'); 
                            echo " <h4 class='pt-4  pl-5'>".$row['StartTime'].", $date, $month, năm $year.</h4>
                            <div class='row'>
                            <div class='col-11 pl-5' style='height: 300px;'>
                                <iframe class='w-100 h-100  pr-2 pt-3' src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250875.47715672414!2d106.59748635152886!3d10.739930049995595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f225c70667f%3A0x80a1b67feed6e90d!2zTGnDqm0gQmFyYmVyIFNob3AgUXXhuq1uIDM!5e0!3m2!1svi!2s!4v1631669555373!5m2!1svi!2s'
                                    style='border:0;' allowfullscreen='' loading='lazy'>
                                </iframe>
                            </div>
                        </div>
                        <div class='appointment-schedule__name-user mt-3'>
                            <div class=' pl-5' style='font-size: 20px; font-weight: bold;'> <img style='width: 30px;' src='../../source/img/Ellipse 22.png' alt=''>".$row['Name']." </div>
                            <div class='row pl-5'>
                                <div class=' pl-5' style='font-size: 15px;'>14:00 CH - 16:00 CH</div>
                            </div>
                        </div>
                        <div class='appointment-schedule__name-services'>
                        <div class='row pl-5'>
                            <div class='col-6 pl-5' style='font-size: 15px;'>";
                           
                            echo"
                       
                                    
                                </div>
                                <div class='col-5 pr-5' style='font-size: 15px;'>
                                    <div class='row d-flex justify-content-end'>".$rowz['Price']."</div>
                                   
                                </div>
                            </div>

                            <div class='row pl-5 pr-5'>
                                <hr class='col-10 pl-5'>
                            </div>
                            <div class='row font-weight-bold pl-5'>
                                <div class='col-6 pl-5' style='font-size: 15px;'>
                                    <div class='row'>Tổng tiền</div>
                                </div>
                                <div class='col-5 pr-5' style='font-size: 15px;'>
                                    <div class='row d-flex justify-content-end'>90.000đ</div>
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
                      
                    </div>";
                        }
                        
                       
                        
                      
                        
                        
                       
                       
                        
                        
                    ?>
                </div>

