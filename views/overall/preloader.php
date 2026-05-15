<?php $fields = $args['fields'] ?? null;
$class = $fields['class'] ?? 'animation';
$title = $fields['title'] ?? null;
?>

<?php if (!empty($fields)): ?>
<div class="<?=$class ?>-preloader preloader">
    preloader
</div>
<?php endif; ?>
