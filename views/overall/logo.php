<?php
    $link = $args['link'] ?? "main";
?>

<a class="customLogo" href= <?php echo "#" . $link ?>>
    <svg width="20px" height="20px">
        <use href=<?php echo get_sprite("logo-icon")?>></use>
    </svg>
</a>
