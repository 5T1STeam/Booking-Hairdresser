$(document).ready(function() {
    $('.favouriteBtn').on('click', function() {
        $click_btn = $(this);
        if ($click_btn.hasClass('red')) {
            $.get('/Booking-Hairdresser/mvc/controllers/favourite.php', {
                color: 'red',
                id: $('#idShop').val(),
            }).done(function(data) {
                if (data == 'true') {

                    $click_btn.removeClass('red');
                    $click_btn.addClass('lightgray');
                    $('.bi-heart-fill').css({ fill: 'lightgray' });
                }
            })
        } else if ($click_btn.hasClass('lightgray')) {
            $.get('/Booking-Hairdresser/mvc/controllers/favourite.php', {
                color: 'lightgray',
                id: $('#idShop').val(),
            }).done(function(data) {
                if (data == 'true') {

                    $click_btn.removeClass('lightgray');
                    $click_btn.addClass('red');
                    $('.bi-heart-fill').css({ fill: 'red' });
                }
            })
        }
    })
})