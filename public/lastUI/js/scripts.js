new WOW().init();
$(document).ready(function () {
    // sticky header navs
    $(".mainNav").sticky({
        topSpacing: 0,
        zIndex: 10000
    });

    // LightBox Gallery
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': false
    })
});