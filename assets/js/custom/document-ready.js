(function ($) {
    $(document).ready(function () {

        /** header */
        $("body").headroom({
            tolerance: {
                up: 14,
                down: 16
            }
        });

        if($(".header .header-menu").length){
            init_navigation($(".header"));
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

    });
})(jQuery);
