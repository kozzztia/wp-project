<?php $button = $args['button'] ?? null;
    $class = $button['class'] ?? null;
    $target = $button['target'] ?? null;
    $title = $button['title'] ?? null;
    $url = $button['url'] ?? null;
if (!empty($button)): ?>
    <a
            <?php if (!empty($url))   echo 'href="' . esc_url($url) . '"'; ?>
            <?php if (!empty($target)) echo 'target="' . $target . '"'; ?>
            <?php echo 'class="customButton' . (!empty($class) ? ' ' . esc_attr($class) : '') . '"';?>
    >
        <?php if (!empty($title)) echo esc_html($title); ?>
    </a>
<?php endif; ?>