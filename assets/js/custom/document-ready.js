(function ($) {
    $(document).ready(function () {
        /** header */
        $("body").headroom({
            tolerance: {
                up: 14,
                down: 16
            }
        });

        console.log('go');

        /** textarea autogrow */
        if ($('textarea').length) {
            $('textarea').each(function () {
                let thisEl = $(this),
                    thisTextAreaHeight = thisEl.outerHeight();
                thisEl.autogrow();
                thisEl.css("height", thisTextAreaHeight);
            });
        }


    });
})(jQuery);
