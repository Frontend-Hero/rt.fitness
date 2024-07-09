jQuery(document).ready(function() {

    jQuery('.testimonials-wrapper').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        variableWidth: true,
        adaptiveHeight: true,
        initialSlide: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false

        /* responsive: [
        {
            breakpoint: 768,
            settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
            }
        }
        ] */
    });

});