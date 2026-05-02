<?php $fields = $args['fields'] ?? null;
    $style = $fields['style'] ?? null;
    $class = $fields['class'] ?? null;
    $id = $fields['id'] ?? null;
    $image = $fields['image'] ?? get_template_directory_uri() . '/assets/img/hero.webp';
?>

<?php if (!empty($fields)): ?>
<div class="customWrapper hero-wrapper"
    <?php if(!empty($id)) echo 'id="' . $id . '"'; ?>
     style="background-image: url('<?php echo $image; ?>');">

    <div class="customBlock hero <?php if(!empty($class)) echo $class?>"
        <?php if(!empty($style)) echo 'style="' . $style . '"'; ?>>
        <div class="hero-inner" >
            <h1>example</h1>
        </div>
    </div>
</div>
<?php endif;?>
