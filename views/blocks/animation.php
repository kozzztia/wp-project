<?php $fields = $args['fields'] ?? null;
$style = $fields['style'] ?? null;
$class = $fields['class'] ?? null;
$id = $fields['id'] ?? null;
$image = $fields['image'] ?? null;
?>
<?php if (!empty($fields)): ?>
    <section class="customWrapper animation-wrapper <?php if(!empty($class)) echo $class?>"
        <?php if(!empty($id)) echo 'id="' . $id . '"';?>
        <?php echo 'style="'
            . (!empty($style) ? esc_attr($style) . '; ' : '')
            . (!empty($image) ? 'background-image: url(' . esc_url($image) . ');' : '')
            . '"';?>>

        <div class="customBlock animation">
            <?php get_template_part('views/overall/spinner', null , ['fields' => ['class' => 'animation-cube']]); ?>
            <?php get_template_part('views/overall/spinner', null , ['fields' => ['class' => 'animation-pyramid']]); ?>
            <?php get_template_part('views/overall/spinner', null , ['fields' => ['class' => 'animation-rhombus']]); ?>

        </div>
    </section>
<?php endif;

