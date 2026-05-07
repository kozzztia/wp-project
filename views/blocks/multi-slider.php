<?php $fields = $args['fields'] ?? null;
    $style = $fields['style'] ?? null;
    $class = $fields['class'] ?? null;
    $id = $fields['id'] ?? null;
    $slides = $fields['slides'] ?? null;
    $timer = $fields['timer'] ?? null;
?>
<?php if (!empty($slides)): ?>
<div class="customWrapper multi-slider-wrapper <?php if(!empty($class)) echo $class?>"
        <?php
            if(!empty($id)) echo 'id="' . $id . '"';
            if(!empty($style)) echo 'style="' . $style . '"';
            if(!empty($timer)) echo 'data-timer="' . $timer . '"';
        ?>>
    <div class="customBlock multi-slider">
        <?php get_template_part('views/overall/second-slider', null , ['slides' => $slides, 'timer' => $timer]);?>
    </div>
</div>
<?php endif;?>
