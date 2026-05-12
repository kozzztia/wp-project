<?php $slides = $args['slides'] ?? null;?>
<?php if (!empty($slides)): ?>
<div class="single-slider swiper" >
    <div class="swiper-wrapper">
        <?php foreach ($slides as $slide): ?>
        <div class="single-slide swiper-slide" data-slug="<?= $slide['slug'] ?>">
            <?php if(!empty($slide['svg'])): ?>
            <div class="slide-image">
                <?php echo get_svg_code( $slide['svg']); ?>
            </div>
            <?php endif; ?>

            <?php if(!empty($slide['slug'])): ?><span class="slide-text"><?= $slide['text']?></span><?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>
