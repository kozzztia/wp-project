<?php $fields = $args['fields'] ?? null;
    $style = $fields['style'] ?? '';
    $class = $fields['class'] ?? '';
    $image = $fields['image'] ?? get_template_directory_uri() . '/assets/img/hero.webp';
?>

<?php if (!empty($fields)): ?>
<div class="customWrapper hero-wrapper" style="background-image: url('<?php echo $image; ?>');">
    <div class="customBlock hero <?=$class = $fields['class'] ?? ''?>"
        <?php echo $style ? 'style="'.$style.'"' : ''; ?>
    >
        <div class="hero-inner" >
            <h1>example</h1>
        </div>
    </div>
</div>
<?php endif;?>
