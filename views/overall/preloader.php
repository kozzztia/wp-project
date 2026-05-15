<?php $fields = $args['fields'] ?? null;
$class = $fields['class'] ?? 'animation';
$title = $fields['title'] ?? null;
?>

<?php if (!empty($fields)): ?>
<div class="<?=$class ?>-preloader preloader">
    <div class="side-front side">front</div>
    <div class="side-back side">back</div>
    <div class="side-left side">left</div>
    <div class="side-right side">right</div>
    <div class="side-top side">top</div>
    <div class="side-bottom side">bottom</div>
</div>
<?php endif; ?>
