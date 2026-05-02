<?php $fields = $args['fields'] ?? null;
    $style = $fields['style'] ?? '';
    $class = $fields['class'] ?? '';
?>

<?php if (!empty($fields)): ?>
<div class="customWrapper hero-wrapper" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/hero.webp' ?>');">
    <div class="customBlock hero <?=$class = $fields['class'] ?? ''?>"
        <?php echo $style ? 'style="'.$style.'"' : ''; ?>
    >
        <div class="hero-inner" >
            example
        </div>
    </div>
</div>
<?php endif;?>
