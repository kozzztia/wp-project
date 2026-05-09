<?php $fields = $args['fields'] ?? null;
    $style = $fields['style'] ?? null;
    $class = $fields['class'] ?? null;
    $id = $fields['id'] ?? null;
    $image = $fields['image'] ?? get_template_directory_uri() . '/assets/img/banner.webp';
    $title_1 = $fields['title_1'] ?? null;
    $title_2 = $fields['title_2'] ?? null;
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
        <?php if(!empty($title_1)): ?>
            <h4 class="banner-title with-line">
            <?php echo esc_html($title_1); ?>
            </h4>
        <?php endif; ?>
        </div>

        <?php if(!empty($tabs)): ?>
        <?php get_template_part('views/overall/tab', null , ['tabs' => $tabs, 'class' => 'banner']); ?>
        <?php endif; ?>

        <div class="banner-header">
            <?php if(!empty($title_2)): ?>
                <h4 class="banner-title with-line">
                    <?php echo esc_html($title_2); ?>
                </h4>
            <?php endif; ?>
        </div>

    </div>
</div>
<?php endif;?>
