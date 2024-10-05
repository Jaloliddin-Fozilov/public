$('.header .owl-carousel').owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    dots: false,
    items: 1,
    touchDrag: true,
    mouseDrag: false,
    autoplay: false,
    autoplayTimeout: 6000
});
$('.workers-slider .owl-carousel').owlCarousel({
    loop: false,
    margin: 40,
    nav: false,
    dots: 3,
    items: 1,
    dotsEach: true,
    responsive: {
        480: {
            items: 1
        },
        768: {
            items: 2
        },
        992: {
            items: 3
        }
    },
    autoplay: true,
    autoplayTimeout: 4000
});
$('.testimonial-slider .owl-carousel').owlCarousel({
    loop: false,
    margin: 0,
    nav: true,
    dots: 3,
    items: 1,
    dotsEach: true,
    autoplay: true,
    autoplayTimeout: 4000
});
$('.owl-carousel.icon-wrapper').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    items: 1,
    responsive: {
        480: {
            items: 2
        },
        768: {
            items: 3
        },
        992: {
            items: 4
        },
        1200: {
            items: 5
        }
    },
    autoplay: true,
    autoplayTimeout: 3000
});