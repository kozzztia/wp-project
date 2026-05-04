<?php $fields = $args['fields'] ?? null;
    $style = $fields['style'] ?? null;
    $class = $fields['class'] ?? null;
    $id = $fields['id'] ?? null;
    $title = $fields['title'] ?? null;
    $name = $fields['name'] ?? null;
    $techtitle = $fields['techtitle'] ?? null;
    $tech = $fields['tech'] ?? null;
    $image = $fields['image'] ?? get_template_directory_uri() . '/assets/img/hero.webp';
    $slides = $fields['slides'] ?? null;
?>
<?php if (!empty($fields)): ?>
<div class="customWrapper hero-wrapper" <?php if(!empty($id)) echo 'id="' . $id . '"'; ?>
     style="background-image: url('<?php echo $image; ?>');">

    <div class="customBlock hero <?php if(!empty($class)) echo $class?>"
        <?php if(!empty($style)) echo 'style="' . $style . '"'; ?>>

        <?php if(!empty($title)): ?>
        <span class="hero-decor decor-text" aria-hidden="true">
            <?php echo esc_html($title); ?>
        </span>
        <?php endif; ?>

        <?php if(!empty($slides)): ?>
        <div class="hero-single-slider">
            <?php get_template_part('views/overall/single-slider', null , ['slides' => $slides]);?>
        </div>
        <?php endif;?>

        <article class="hero-article">
            <?php if(!empty($title)): ?>
            <h1 class="hero-title with-line">
                <?php echo esc_html($title); ?>
            </h1>
            <?php endif; ?>

            <?php if(!empty($name)): ?>
            <h2 class="hero-name">
                <?php echo esc_html($name); ?>
            </h2>
            <?php endif; ?>

            <?php if(!empty($techtitle)): ?>
            <h3 class="hero-techtile with-line">
                <?php echo esc_html($techtitle); ?>
            </h3>
            <?php endif; ?>

            <?php if(!empty($tech)): ?>
            <ul class="hero-tech" aria-label="Technology stack">
                <?php foreach ($tech as $item): ?>
                <li><?php echo esc_html($item); ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </article>

        <?php if(!empty($slides)): ?>
        <div class="single-slider-pagination"><span class="single-slider-thumb"></span></div>
        <?php endif;?>
    </div>
</div>
<?php endif;?>
