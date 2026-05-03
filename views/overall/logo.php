<?php
    $link = $args['link'] ?? "main";
?>

<a class="customLogo" href= <?php echo "#" . $link ?>>
    <svg>
        <use href=<?php echo get_sprite("logo-icon")?>></use>
    </svg>
</a>
