<?php $fields = $args['fields'] ?? null;
    $style = $fields['style'] ?? null;
    $class = $fields['class'] ?? null;
    $id = $fields['id'] ?? null;
    $slides = $fields['slides'] ?? null;
?>
<?php if (!empty($fields)): ?>
<div class="customWrapper multi-slider-wrapper" <?php if(!empty($id)) echo 'id="' . $id . '"'; ?>>

    <div class="customBlock multi-slider <?php if(!empty($class)) echo $class?>"
        <?php if(!empty($style)) echo 'style="' . $style . '"'; ?>>

        multi-slider

    </div>
</div>
<?php endif;?>
