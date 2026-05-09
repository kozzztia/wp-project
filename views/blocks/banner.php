<?php $fields = $args['fields'] ?? null;
    $style = $fields['style'] ?? null;
    $class = $fields['class'] ?? null;
    $id = $fields['id'] ?? null;
    $image = $fields['image'] ?? get_template_directory_uri() . '/assets/img/banner.webp';
    $title_1 = $fields['title_1'] ?? null;
    $title_2 = $fields['title_2'] ?? null;
    $tabs_1 = $fields['tabs_1'] ?? null;
    $tabs_2 = $fields['tabs_2'] ?? null;
?>
<?php if (!empty($fields)): ?>
<div class="customWrapper banner-wrapper <?php if(!empty($class)) echo $class?>"
    <?php if(!empty($id)) echo 'id="' . $id . '"';?>
    <?php echo 'style="'
            . (!empty($style) ? esc_attr($style) . '; ' : '')
            . (!empty($image) ? 'background-image: url(' . esc_url($image) . ');' : '')
            . '"';?>>

    <div class="customBlock banner">
        <div class="banner-inner">
        <?php if(!empty($title_1)): ?>
            <h2 class="banner-title with-line">
            <?php echo esc_html($title_1); ?>
            </h2>
        <?php endif; ?>
        <?php if(!empty($tabs_1)): ?>
            <?php foreach ( $tabs_1 as $tab_1): ?>
                <div class="banner-article experience">
                    <?php if(!empty($tab_1['title'])): ?>
                        <h3 class="banner-article-title"><?= $tab_1['title']?></h3>
                    <?php endif;?>

                    <?php if(!empty($tab_1['picture'])): ?>
                        <img src="<?= $tab_1['picture']?>" alt="<?= $tab_1['title'] ?? ''?>"/>
                    <?php endif;?>

                    <?php if(!empty($tab_1['desc'])): ?>
                        <?= $tab_1['desc']?>
                    <?php endif;?>
                </div>
            <?php endforeach?>
        <?php endif?>
        </div>


        <div class="banner-inner">
        <?php if(!empty($title_2)): ?>
            <h4 class="banner-title with-line">
                <?php echo esc_html($title_2); ?>
            </h4>
        <?php endif; ?>
        <?php if(!empty($tabs_2)): ?>
            <?php foreach ( $tabs_2 as $tab_2): ?>
                <div class="banner-article study">
                    <?php if(!empty($tab_2['title'])): ?>
                        <h3 class="banner-article-title"><?= $tab_2['title']?></h3>
                    <?php endif;?>

                    <?php if(!empty($tab_2['picture'])): ?>
                        <img src="<?= $tab_2['picture']?>" alt="<?= $tab_2['title'] ?? ''?>"/>
                    <?php endif;?>

                    <?php if(!empty($tab_2['desc'])): ?>
                        <?= $tab_2['desc']?>
                    <?php endif;?>
                </div>
            <?php endforeach?>
        <?php endif?>
        </div>

    </div>
</div>
<?php endif;?>
