$(document).ready(function() {
    $("[id^=focus]").hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});