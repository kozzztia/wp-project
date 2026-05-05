<?php $slides = $args['slides'] ?? null;?>
<?php if (!empty($slides)): ?>
<div class="single-slider swiper" >
    <div class="swiper-wrapper">
        <?php foreach ($slides as $slide): ?>
        <div class="single-slide swiper-slide" data-slug="<?= $slide['slug'] ?>">
            <figure class="slide-image">
<!--                <img src="--><?php //echo $slide['image'] ?><!--" alt="--><?php //= $slide['slug'] ?><!--"/>-->

                <?php echo get_svg_code( $slide['image']); ?>
            </figure>
            <span class="slide-text"><?= $slide['text']?></span>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>
