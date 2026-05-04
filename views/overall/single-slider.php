<?php $slides = $args['slides'] ?? null;?>
<?php if (!empty($slides)): ?>
<div class="single-slider swiper" >
    <div class="swiper-wrapper">
        <?php foreach ($slides as $slide): ?>
        <div class="single-slide swiper-slide" data-slug="<?= $slide ?>">
            <figure class="slide-image">
                <?= $slide; ?>
            </figure>
            <span>text</span>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>
