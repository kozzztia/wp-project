<?php $fields = $args['fields'] ?? null;
    $style = $fields['style'] ?? null;
    $class = $fields['class'] ?? null;
    $id = $fields['id'] ?? null;
    $image = $fields['image'] ?? get_template_directory_uri() . '/assets/img/banner.webp';
    $title = $fields['title'] ?? null;
    $subtitle = $fields['subtitle'] ?? null;
    $tabs = $fields['tabs'] ?? null;
?>
<?php if (!empty($fields)): ?>
<div class="customWrapper banner-wrapper <?php if(!empty($class)) echo $class?>"
    <?php if(!empty($id)) echo 'id="' . $id . '"';?>
    <?php echo 'style="'
            . (!empty($style) ? esc_attr($style) . '; ' : '')
            . (!empty($image) ? 'background-image: url(' . esc_url($image) . ');' : '')
            . '"';?>>

    <div class="customBlock banner">
        <div class="banner-header">
        <?php if(!empty($subtitle)): ?>
            <span class="banner-subtitle with-line" aria-hidden="true">
            <?php echo esc_html($subtitle); ?>
            </span>
        <?php endif; ?>

        <?php if(!empty($title)): ?>
            <h4 class="banner-title" aria-hidden="true">
            <?php echo esc_html($title); ?>
            </h4>
        <?php endif; ?>
        </div>

        <?php if(!empty($tabs)): ?>
        <?php get_template_part('views/overall/tab', null , ['tabs' => $tabs, 'class' => 'banner']); ?>
        <?php endif; ?>

    </div>
</div>
<?php endif;?>
