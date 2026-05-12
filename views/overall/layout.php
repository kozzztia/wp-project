<?php get_header(); ?>

<main>
    <?php
    if ( function_exists('render_content') ) {
        render_content();
    }
    ?>
</main>

<?php get_footer();
