$(function() {
    'use strict';

    $('.footer').on('shown.bs.collapse', function(e) {
        var $panel = $(this).closest('.footer');
        $('html,body').animate({
            scrollTop: $panel.offset().top
        }, 500);
    });
});