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
                <li>
                    <?php get_template_part('views/overall/logo');?>
                </li>
                <li><a href="#about">about</a></li>
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#experience">experience</a></li>
                <li><a href="#study">study</a></li>
                <li><a href="#contacts">contacts</a></li>
            </ul>
        </nav>
    </div>
</header>