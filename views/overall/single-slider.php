<?php $slides = $args['slides'] ?? null;?>
<?php if (!empty($slides)): ?>
<div class="single-slider swiper" >
    <div class="swiper-wrapper">
        <?php foreach ($slides as $slide): ?>
        <div class="swiper-slide">
            <figure class="slider-image">
                <?= $slide; ?>
            </figure>
            <span>text</span>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
<?php endif; ?>
