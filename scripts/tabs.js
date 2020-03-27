$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    $('.slick').slick('setPosition');
})