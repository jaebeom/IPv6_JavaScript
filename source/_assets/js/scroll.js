$(document).ready(function() {

    var offset = 250;

    var duration = 300;

    $(window).scroll(function() {

        if ($(this).scrollTop() > offset) {

            $('#scroll_ubtn').fadeIn(duration);

        } else {

            $('#scroll_ubtn').fadeOut(duration);

        }

    });



    $('#scroll_ubtn').click(function() {
        $('#scroll_ubtn').tooltip('hide');
        $('html, body').animate({scrollTop: 0}, duration);

        return false;

    })

    $('#scroll_ubtn').tooltip('show');

});

$('#scroll_dbtn').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 800);
    return false;
});

// $('#scroll_ubtn').click(function(){
//     $('html, body').animate({
//         scrollTop: $( $(this).attr('href') ).offset().top
//     }, 800);
//     return false;
// });