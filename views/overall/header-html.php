<header class="header-wrapper">
    <div class="header">

        <div class="header-logo">
            <?php  get_template_part('views/overall/logo') ?>
        </div>

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
                    <a href="#about">about</a>
                </li>
                <li class="menu-item">
                    <a href="#portfolio">portfolio</a>
                </li>
                <li class="menu-item">
                    <a href="#study">study</a>
                </li>
                <li class="menu-item">
                    <a href="#experience">experience</a>
                </li>
                <li class="menu-item">
                    <a href="#contacts">contacts</a>
                </li>
            </ul>
        </nav>
    </div>
</header>