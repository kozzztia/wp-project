<?php
    $tabs = $args['tabs'] ?? null;
    $class = $args['class'] ?? null;
    $title = $tabs['title'] ?? null;
    $desc_title = $tabs['desc_title'] ?? null;
    $desc = $tabs['desc'] ?? null;
?>

<?php if (!empty($tabs)): ?>
<div class="tab<?php echo !empty($class) ? ' ' . esc_attr($class) . '-tab' : ''; ?>">

    <div class="tab-nav">
        <?php foreach ($tabs as $index => $tab): ?>
            <label class="tab-toggler" for="tab-<?php echo $index + 1; ?>">
                <?php echo esc_html($tab['title']); ?>

                <svg>
                    <use href=<?php echo get_sprite("arrow-icon")?>></use>
                </svg>

            </label>
        <?php endforeach; ?>
    </div>

    <div class="tab-content">
        <?php foreach ($tabs as $index => $tab): ?>
            <div class="tab-text">
                <input type="radio"
                       id="tab-<?php echo $index + 1; ?>"
                       name="<?= esc_attr($class) . '-tab'?>"
                       <?php echo $index === 0 ? 'checked' : ''; ?>
                       hidden>

                <div class="tab-text-desc">
                    <?php if (!empty($tab['desc_title'])): ?>
                        <h3><?php echo esc_html($tab['desc_title']); ?></h3>
                    <?php endif; ?>

                    <?php if (!empty($tab['desc'])): ?>
                        <p><?php echo wp_kses_post($tab['desc']); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
<?php endif; ?>

