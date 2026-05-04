<?php $slides = $args['slides'] ?? null;?>
<?php if (!empty($slides)): ?>
<div class="single-slider swiper" >
    <div class="swiper-wrapper">
        <?php foreach ($slides as $slide): ?>
        <div class="single-slide swiper-slide" data-slug="<?= $slide['slug'] ?>">
            <figure class="slide-image">
                <svg>
                    <use href="<?php echo get_sprite($slide['image'])?>"></use>
                </svg>
            </figure>
            <span><?= $slide['text']?></span>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>
