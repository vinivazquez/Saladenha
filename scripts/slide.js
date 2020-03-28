
$('.slick').slick({
    centerMode: true,
    slidesToShow: 5,
    centerPadding: '0px',
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
            }
        }
    ]
}).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    $(this).find('.slick-slide[data-slick-index="' + nextSlide + '"]').addClass('fuckyou');
    $(this).find('.slick-slide[data-slick-index="' + currentSlide + '"]').removeClass('fuckyou');
});
3