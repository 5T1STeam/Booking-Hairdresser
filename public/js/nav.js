$(document).ready(function() {
    $(window).scroll(function() {
        if (window.pageYOffset > 400) {
            document.getElementById("navhide").hidden = false;
        } else {
            document.getElementById("navhide").hidden = true;
        }
    });
});