$(document).ready(function () {

    /*-- Menu --*/
    $('#open-menu').click(function() {
        $('.menu').toggle('abre');
    });

    $('#slide').owlCarousel({
        loop: false,
        margin: 1,
        mouseDrag: true,
        autoplay: true,
        dots: false,
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 1,
            },
            1024: {
                items: 1
            }
        }
    });

});
