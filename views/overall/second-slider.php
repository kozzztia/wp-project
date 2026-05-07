<?php $slides = $args['slides'] ?? null;?>
<?php $timer = $args['timer'] ?? null;?>
<?php if (!empty($slides)): ?>

<div class="swiper second-slider" <?php if (!empty($timer)) echo 'data-timer="' . esc_attr($timer) . '"'; ?>>
    <div class="swiper-wrapper">
        <?php foreach ($slides as $slide): ?>
            <div class="swiper-slide">
                <div class="second-slider-slide <?= empty($slide['image']) ? 'empty' : '' ?>"
                        <?= !empty($slide['image']) ? 'style="background-image: url(\'' . esc_url($slide['image']) . '\');"' : '' ?>>
                    <span class="second-slider-slide-slug"><?= esc_html($slide['slug']); ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

 <?php endif; ?>
