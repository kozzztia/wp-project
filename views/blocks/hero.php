<?php $fields = $args['fields'] ?? null;
    $style = $fields['style'] ?? '';
    $class = $fields['class'] ?? '';
    $background = get_field('hero_background_image_1') ?? get_template_directory_uri() . '/assets/img/hero.webp';


?>

<?php if (!empty($fields)): ?>
<div class="customWrapper hero-wrapper"  style="background-image: url('<?php echo $background ?>')">
    <div class="customBlock hero <?=$class = $fields['class'] ?? ''?>"
        <?php echo $style ? 'style="'.$style.'"' : ''; ?>
    >
        <div class="hero-inner">
            hero
        </div>
    </div>
</div>
<?php endif;?>
