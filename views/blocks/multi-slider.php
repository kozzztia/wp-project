<?php $fields = $args['fields'] ?? null;
    $style = $fields['style'] ?? null;
    $class = $fields['class'] ?? null;
    $id = $fields['id'] ?? null;
    $subtitle = $fields['subtitle'] ?? null;
    $slides = $fields['slides'] ?? null;
    $timer = $fields['timer'] ?? null;
?>
<?php if (!empty($slides)): ?>
<section class="customWrapper multi-slider-wrapper <?php if(!empty($class)) echo $class?>"
        <?php
            if(!empty($id)) echo 'id="' . $id . '"';
            if(!empty($style)) echo 'style="' . $style . '"';
            if(!empty($timer)) echo 'data-timer="' . $timer . '"';
        ?>>

    <div class="customBlock multi-slider">
    <?php get_template_part('views/overall/second-slider', null , ['slides' => $slides, 'timer' => $timer]);?>

    <?php if(!empty($subtitle)): ?>
        <span class="multi-slider-subtitle with-line"><?php echo esc_html($subtitle); ?></span>
    <?php endif; ?>
    </div>
</section>
<?php endif;?>
