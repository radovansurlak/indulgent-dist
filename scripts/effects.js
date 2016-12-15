//This module handles visual effects

//Smooth scroll from anchors with class "scroll" to corresponding sections

$(document).on('click', 'a.scroll', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 800);
});

//Resize menu bar after scroll using CSS transform()

$(window).scroll(function () {
    if ($(this).scrollTop() >= 100) {
        $('#menu').css({ 'height': '3vw' });
        $('#logo > a > img').css({ 'transform': 'scale(0.7)' });
    } else {
        $('#menu').css({ 'height': '5vw' });
        $('#logo > a > img').css({ 'transform': 'scale(1)' });
    }
});

//Fades in  "How to use body scrubs" section

$(window).scroll(function () {
    if ($(this).scrollTop() >= 100) {
        $('#how-to').css({ 'opacity': '1' });
    }
});

//Toggle rotate class for expand arrow and display "ingredients" article

$('.expand-arrow').click(function () {
    $(this).toggleClass('rotate180');
    $(this).siblings('article').slideToggle();
});
//# sourceMappingURL=effects.js.map
