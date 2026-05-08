<?php $fields = $args['fields'] ?? null;
    $style = $fields['style'] ?? null;
    $class = $fields['class'] ?? null;
    $id = $fields['id'] ?? null;
    $image = $fields['image'] ?? get_template_directory_uri() . '/assets/img/banner.webp';
?>
<?php if (!empty($fields)): ?>
<div class="customWrapper banner-wrapper <?php if(!empty($class)) echo $class?>"
    <?php if(!empty($id)) echo 'id="' . $id . '"';?>
    <?php echo 'style="'
            . (!empty($style) ? esc_attr($style) . '; ' : '')
            . (!empty($image) ? 'background-image: url(' . esc_url($image) . ');' : '')
            . '"';?>>

    <div class="customBlock banner">
        banner
    </div>
</div>
<?php endif;?>
