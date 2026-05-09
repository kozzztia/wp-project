<?php $fields = $args['fields'] ?? null;
    $style = $fields['style'] ?? '';
    $class = $fields['class'] ?? '';
?>

<?php if (!empty($fields)): ?>
<section class="customWrapper example-wrapper" >
    <div class="customBlock example <?=$class = $fields['class'] ?? ''?>"
        <?php echo $style ? 'style="'.$style.'"' : ''; ?>
    >
        <div class="example-inner">
            example
        </div>
    </div>
</section>
<?php endif;?>
