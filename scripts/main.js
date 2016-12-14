$(window).scroll(function () {
        if ($(this).scrollTop() >= 100) {
                // if scroll is greater/equal then 100 and hasBeenTrigged is set to false.
                $('#menu').css({ 'height': '3vw' });
                $('#logo > a > img').css({ 'transform': 'scale(0.7)' });
        } else {
                $('#menu').css({ 'height': '5vw', 'background-color': 'white' });
                $('#logo > a > img').css({ 'transform': 'scale(1)' });
        }
});

$(window).scroll(function () {
        if ($(this).scrollTop() >= 100) {
                // if scroll is greater/equal then 100 and hasBeenTrigged is set to false.
                $('#how-to').css({ 'opacity': '1' });
        }
});

$('.expand-arrow').click(function () {
        $(this).toggleClass('rotate180');
        $(this).siblings('article').slideToggle();
});
//# sourceMappingURL=main.js.map
