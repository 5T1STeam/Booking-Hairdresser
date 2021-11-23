        //Search
        $(document).ready(function() {
            $('#province').change(function(event) {
                provinceid = $('#province').val();
                $('input[name="province"]').val(provinceid);
                $.post('/Booking-Hairdresser/mvc/controllers/loadlocation.php', {
                        province: provinceid
                    })
                    .done(function(data) {
                        $('#district').html(data);
                    });
                $('#wards').html("<option value=''>Phường / Xã</option>");
                $('input[name="district"]').val();
                $('input[name="wards"]').val();
            })
            $('#district').change(function() {
                districtId = $('#district').val();
                $('input[name="district"]').val(districtId);
                $.post('/Booking-Hairdresser/mvc/controllers/loadlocation.php', {
                        district: districtId
                    })
                    .done(function(data) {
                        $('#wards').html(data);
                    });
                $('input[name="wards"]').val();
            })
            $('#wards').change(function() {
                $('input[name="wards"]').val($('#wards').val());
            })
            $('#province_f').change(function(event) {
                provinceid = $('#province_f').val();
                $('input[name="province-f"]').val(provinceid);
                $.post('/Booking-Hairdresser/mvc/controllers/loadlocation.php', {
                        province: provinceid
                    })
                    .done(function(data) {
                        $('#district_f').html(data);
                    });
                $('#wards_f').html("<option value=''>Phường / Xã</option>");
                $('input[name="district-f"]').val();
                $('input[name="wards-f"]').val();
            })
            $('#district_f').change(function() {
                districtId = $('#district_f').val();
                $('input[name="district-f"]').val(districtId);
                $.post('/Booking-Hairdresser/mvc/controllers/loadlocation.php', {
                        district: districtId
                    })
                    .done(function(data) {
                        $('#wards_f').html(data);
                    });
                $('input[name="wards-f"]').val();
            })
            $('#wards_f').change(function() {
                $('input[name="wards-f"]').val($('#wards_f').val());
            })
        });
        $(document).ready(function() {
            $('.btn-service').click(function() {
                setTimeout(function() {
                    var checke = document.getElementsByName('service');
                    var result = "";
                    for (var z = 0; z < checke.length; z++) {
                        if (checke[z].checked === true) {
                            result += checke[z].value + ',';
                        }
                    }
                    document.getElementById("serviceChoose").value = result;
                    document.getElementById("serviceChoose-f").value = result;
                })
            })
            $('.btn-time').click(function() {
                var day_post = document.getElementsByClassName("timeBooking");
                for (var z = 0; z < day_post.length; z++) {
                    day_post[z].value = $(this).text();
                }
            })
            $('.btn-book').click(function() {
                var full = document.getElementsByClassName("radiotime");
                var fullday = document.getElementsByClassName("radioday");
                var fulltextday = document.getElementsByClassName("full-day");
                var mor = document.getElementsByClassName("morning");
                var aft = document.getElementsByClassName("afternoon");
                var eve = document.getElementsByClassName("evening");
                var re_check = document.getElementsByClassName("re-check");
                var active = document.getElementsByClassName("btn-booking");
                for (var i = 0; i < full.length; i++) {
                    if (full[i].checked === true) {
                        var day_post = document.getElementsByClassName("timeBooking");
                        for (var z = 0; z < day_post.length; z++) {
                            day_post[z].value = '';
                        }
                        full[i].checked = false;
                        break;
                    }
                }
                for (var z = 0; z < fullday.length; z++) {
                    fullday[z].checked = false;
                }
                for (var z = 0; z < fulltextday.length; z++) {
                    fulltextday[z].innerHTML = 'Ngày-Tháng-Năm';
                }
                for (var z = 0; z < mor.length; z++) {
                    mor[z].innerHTML = null;
                    aft[z].innerHTML = null;
                    eve[z].innerHTML = null;
                }
                for (z = 0; z < re_check.length; z++) {
                    re_check[z].textContent = null
                }
                for (z = 0; z < active.length; z++) {
                    active[z].disabled = true;
                }
            })
            $('.check').click(function() {
                var full = document.getElementsByClassName("radiotime");
                var day_post = document.getElementsByClassName("timeBooking");
                var re_check = document.getElementsByClassName("re-check");
                var active = document.getElementsByClassName("btn-booking");
                var str;
                for (var i = 0; i < full.length; i++) {
                    if (full[i].checked === true) {
                        var day_post = document.getElementsByClassName("timeBooking");
                        str = full[i].value;
                        for (var z = 0; z < day_post.length; z++) {
                            day_post[z].value = full[i].value;
                        }
                        break;
                    }
                }
                if (str != null) {
                    for (var i = 0; i < active.length; i++) {
                        active[i].disabled = false;
                    }
                    for (var z = 0; z < re_check.length; z++) {
                        re_check[z].textContent = str;
                    }
                }

            })
            $('.booKing').on('submit', function(e) {
                e.preventDefault();
                str = $(this).serialize();
                $.post('/Booking-Hairdresser/mvc/controllers/booking.php',
                        $(this).serialize()
                    )
                    .done(function(data) {
                        $('#kq').html(data)
                    });
            })
            $('.btn-booking').on('click', function() {
                $('.modal').modal('hide');
                $('.overlay').show();
                setTimeout(function() {
                    $('.overlay').hide();
                    $('#kqBook').modal('show');
                }, 2000)

            })

        });