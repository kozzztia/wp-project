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
        <nav class="header-nav">
            <ul>
                <li class="header-nav-item">
                    <?php get_template_part('views/overall/logo');?>
                </li>
            </ul>
        </nav>
    </div>
</header>