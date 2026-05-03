<header class="header-wrapper">
    <div class="header">

        <div class="header-controls">
            <button type="button" class="header-btn prev">
                <svg>
                    <use href=<?php echo get_sprite("arrow-icon")?>></use>
                </svg>
            </button>
            <button type="button" class="header-btn next">
                <svg>
                    <use href=<?php echo get_sprite("arrow-icon")?>></use>
                </svg>
            </button>
        </div>
        <nav class="header-menu">
            <ul>
                <li class="menu-item">
                    <?php get_template_part('views/overall/logo');?>
                </li>

                <?php
                wp_nav_menu([
                        'theme_location' => 'header-menu',
                        'container'      => false,
                        'items_wrap'     => '%3$s',
                        'menu_class'     => '',
                ]);
                ?>
            </ul>
        </nav>
    </div>
</header>