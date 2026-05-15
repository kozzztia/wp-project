
<?php if (!empty($fields)): ?>
    <section class="customWrapper animations-wrapper <?php if(!empty($class)) echo $class?>"
        <?php if(!empty($id)) echo 'id="' . $id . '"';?>
        <?php echo 'style="'
            . (!empty($style) ? esc_attr($style) . '; ' : '')
            . (!empty($image) ? 'background-image: url(' . esc_url($image) . ');' : '')
            . '"';?>>

        <div class="customBlock animations">
            animations

        </div>
    </section>
<?php endif;

