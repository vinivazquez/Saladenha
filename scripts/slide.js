$(".center").slick({
    centerMode: true,
    slidesToShow: 5,
    slidesToScroll: 3,
    arrows: true,
    centerPadding: '0px',
    responsive: [
        {
            breakpoint: 1000,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
            }
        },
        {
            breakpoint: 768,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
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
});

function divImg(num, classe) {
    const result = $('.slick-center').attr('data-slick-index') - num;
    const numImg = result == -3 ? 6 : result == 1 ? 10 : result;
    $('.slick-slide').removeClass(classe);
    $('.slick-slide[data-slick-index="' + numImg + '"]').addClass(classe);
}

divImg(2, 'activedLeft');
divImg(-2, 'activedRight');

$('body').click(function () {
    divImg(2, 'activedLeft');
    divImg(-2, 'activedRight');
})
