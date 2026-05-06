<?php $fields = $args['fields'] ?? null;
    $style = $fields['style'] ?? null;
    $class = $fields['class'] ?? null;
    $id = $fields['id'] ?? null;
    $slides = $fields['slides'] ?? null;
    $timer = $fields['timer'] ?? null;
?>
<?php if (!empty($slides)): ?>
<div class="customWrapper multi-slider-wrapper <?php if(!empty($class)) echo $class?>">
        <?php
            if(!empty($id)) echo 'id="' . $id . '"';
            if(!empty($style)) echo 'style="' . $style . '"';
            if(!empty($timer)) echo 'data-timer="' . $timer . '"';
        ?>>
    <div class="customBlock multi-slider">
        <div class="swiper">
            <div class="swiper-wrapper">
            <?php foreach ($slides as $slide): ?>
                <div class="multi-slider-slide swiper-slide" data-slug="<?= $slide['slug'] ?>">
                    <div class="multi-slide">
                        <span class="multi-slide-slug"><?= $slide['slug']?></span>
                        <img src="<?php echo $slide['image'] ?>" alt="<?= $slide['slug'] ?>"/>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
