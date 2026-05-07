(function ($) {
    $(document).ready(function () {

        /** header */
        $("body").headroom({
            tolerance: {
                up: 14,
                down: 16
            }
        });

        if($(".header").length){
            init_navigation($(".header"));
            init_menu_toggler($(".logo"));
        }

        /** textarea autogrow */
        if ($('textarea').length) {
            $('textarea').each(function () {
                let thisEl = $(this),
                    thisTextAreaHeight = thisEl.outerHeight();
                thisEl.autogrow();
                thisEl.css("height", thisTextAreaHeight);
            });
        }

        if($('.animate').length) {
            $('.animate').each(function () {
                init_animation($(this));
            });
        }

        if($('.hero').length) {
            $('.hero').each(function () {
                init_slider($(this));
            });
        }

        if($('.multi-slider').length) {
            $('.multi-slider').each(function () {
                init_second_slider($(this));
            });
        }

    });
})(jQuery);
