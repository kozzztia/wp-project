<?php $fields = $args['fields'] ?? null;
$class = $fields['class'] ?? 'animation';
$title = $fields['title'] ?? null;
?>

<?php if (!empty($fields)): ?>
<div class="<?=$class ?>">
    <?php if ($class == 'animation-cube'): ?>
        <div class="side-front side">front</div>
        <div class="side-back side">back</div>
        <div class="side-left side">left</div>
        <div class="side-right side">right</div>
        <div class="side-top side">top</div>
        <div class="side-bottom side">bottom</div>
    <?php endif; ?>
    <?php if ($class == 'animation-pyramid'): ?>
        <div class="side-base side">base</div>
        <div class="side-front side">front</div>
        <div class="side-back side">back</div>
        <div class="side-left side">left</div>
        <div class="side-right side">right</div>
    <?php endif; ?>
    <?php if ($class == 'animation-rhombus'): ?>
        <div class="side-top-left-back side">top left back</div>
        <div class="side-top-left-front side">top left front</div>
        <div class="side-top-right-back side">top right back</div>
        <div class="side-top-right-front side">top right back</div>
        <div class="side-bottom-left-back side">bottom left back</div>
        <div class="side-bottom-left-front side">bottom left front</div>
        <div class="side-bottom-right-back side">bottom right back</div>
        <div class="side-bottom-right-front side">bottom right back</div>
    <?php endif; ?>
    <?php if ($class == 'animation-circle'): ?>
        <div class="side-x side">x</div>
        <div class="side-y side">y</div>
        <div class="side-z side">z</div>
    <?php endif; ?>
    <?php if ($class == 'animation-triangle'): ?>
        <div class="side-base side">base</div>
        <div class="side-front side">front</div>
        <div class="side-left side">left</div>
        <div class="side-right side">right</div>
    <?php endif; ?>
</div>
<?php endif; ?>
