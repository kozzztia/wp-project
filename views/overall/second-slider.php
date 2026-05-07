<?php $slides = $args['slides'] ?? null;?>
<?php $timer = $args['timer'] ?? null;?>
<?php if (!empty($slides)): ?>

<div class="swiper second-slider" <?php if (!empty($timer)) echo 'data-timer="' . esc_attr($timer) . '"'; ?>>
    <div class="swiper-wrapper">
    <?php foreach ($slides as $index => $slide):

        ?>
        <div class="swiper-slide">
            <div class="second-slider-slide <?= empty($slide['image']) ? 'empty ' : ''; echo get_slide_count($index)?>"
            <?= !empty($slide['image']) ? 'style="background-image: url(\'' . esc_url($slide['image']) . '\');"' : '' ?>>
            <?php if (!empty($slide['slug'])): ?>
                <span class="second-slider-slide-slug"><?= esc_html($slide['slug']); ?></span>
            <?php endif; ?>

            <?php if (!empty($slide['title'])): ?>
                <span class="second-slider-slide-title"><?= esc_html($slide['title']); ?></span>
            <?php endif; ?>

            <?php if (!empty($slide['link'])): ?>
                <a href="<?= esc_html($slide['link']['url']); ?>" target="_blank" class="second-slider-slide-link"><?= esc_html($slide['link']['title']); ?></a>
            <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
    </div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

 <?php endif; ?>
