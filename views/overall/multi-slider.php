<?php $slides = $args['slides'] ?? null;?>
<?php $timer = $args['timer'] ?? null;?>
<?php if (!empty($slides)): ?>

<div class="swiper" <?php if (!empty($timer)) echo 'data-timer="' . esc_attr($timer) . '"'; ?>>
    <div class="swiper-wrapper">
        <?php foreach ($slides as $slide): ?>
            <div class="swiper-slide">
                <div class="multi-slider-slide <?php if (empty($slide['image'])) echo 'empty'; ?>"
                        <?php if (!empty($slide['image'])): ?>
                            style="background-image: url('<?php echo esc_url($slide['image']); ?>');"
                        <?php endif; ?>>
                    <span class="multi-slider-slide-slug"><?= esc_html($slide['slug']); ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

 <?php endif; ?>
