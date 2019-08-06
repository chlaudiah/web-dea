$(window).scroll(function () { //navbar scroll effect
    if ($(this).scrollTop() == 0) {
        $('.navbar').css({
            'box-shadow': 'none',
            '-moz-box-shadow': 'none',
            '-webkit-box-shadow': 'none'
        });
    } else {
        $('.navbar').css({
            'box-shadow': '0px 4px 46px 0px rgba(0, 0, 0, 0.5)',
            '-moz-box-shadow': '0px 4px 46px 0px rgba(0, 0, 0, 0.5)',
            '-webkit-box-shadow': '0px 4px 46px 0px rgba(0, 0, 0, 0.5)'
        });
    }
});