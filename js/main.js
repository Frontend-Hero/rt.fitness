jQuery(document).ready(function() {

    /** 
     * Confetti
     */
     // placeholder....

    /** 
     * Testimonials
     */
    jQuery('.testimonials-wrapper').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        variableWidth: true,
        adaptiveHeight: true,
        initialSlide: 2,
        autoplay: true,
        autoplaySpeed: 53000,
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