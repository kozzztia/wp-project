<?php $fields = $args['fields'] ?? null;
    $style = $fields['style'] ?? '';
    $class = $fields['class'] ?? '';
    $title = get_field('hero_title') ?? "default title";
?>

<?php if (!empty($fields)): ?>
<div class="customWrapper hero-wrapper" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/hero.webp' ?>');">
    <div class="customBlock hero <?=$class = $fields['class'] ?? ''?>"
        <?php echo $style ? 'style="'.$style.'"' : ''; ?>
    >
        <div class="hero-inner" >
            <?php if (!empty($title)): ?>
                <h1><?php echo $title ?></h1>
            <?php endif ?>
        </div>
    </div>
</div>
<?php endif;?>
