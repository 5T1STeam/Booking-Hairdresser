$(document).ready(function() {
    $('.commentPage').click(function() {
        $("li").removeClass('active');
        $(this).closest('li').addClass('active');
        $base = $('#base').val();
        $.get($base + '/mvc/controllers/pagingcomment.php', {
            id: $('#idShop').val(),
            page: $(this).text()
        }).done(function(data) {
            $('.rating-body').html(data);
        })
    })

    $(".prev").click(function() {
        page = ($('li.active').children().text() - 1);
        if (page > 0) {
            $("li").removeClass('active');
            col = $('a.commentPage')
            for (var i = 0; i < col.length; i++) {
                if (parseInt(col[i].text) == page) {
                    col[i].closest('li').classList.add('active');
                }
            }
            $base = $('#base').val();
            $.get($base + '/mvc/controllers/pagingcomment.php', {
                id: $('#idShop').val(),
                page: page
            }).done(function(data) {
                $('.rating-body').html(data);
            })
        }

    })
    $(".next").click(function() {
        page = (parseInt($('li.active').children().text()) + 1);
        if (page <= $('a.commentPage').length) {
            $("li").removeClass('active');
            col = $('a.commentPage')
            for (var i = 0; i < col.length; i++) {
                if (parseInt(col[i].text) == page) {
                    col[i].closest('li').classList.add('active');
                }
            }
            $base = $('#base').val();
            $.get($base + '/mvc/controllers/pagingcomment.php', {
                id: $('#idShop').val(),
                page: page
            }).done(function(data) {
                $('.rating-body').html(data);
            })
        }

    })
    window.onscroll = function() { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("Menu").style.top = "0";
        } else {
            document.getElementById("Menu").style.top = "-150px";
        }
    }



})