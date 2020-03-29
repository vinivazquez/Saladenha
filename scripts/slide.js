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

}).on('init', () => {
    $(this).find('.slick-slide[data-slick-index="-2"]').addClass('lt2');
    $(this).find('.slick-slide[data-slick-index="-1"]').addClass('lt1');
    $(this).find('.slick-slide[data-slick-index="1"]').addClass('gt1');
    $(this).find('.slick-slide[data-slick-index="2"]').addClass('gt2');
});

