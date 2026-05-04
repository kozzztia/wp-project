<header class="header-wrapper">
    <div class="header">

        <div class="header-logo"><?php  get_template_part('views/overall/logo') ?></div>

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
            <ul class="animate down-menu">
                <li class="menu-item">
                    <a href="#about">
                        <svg>
                            <use href="<?php echo get_sprite('person-icon')?>" ></use>
                        </svg>

                        <span>about</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#portfolio">
                        <svg>
                            <use href="<?php echo get_sprite('picture-icon')?>" ></use>
                        </svg>

                        <span>portfolio</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#study">
                        <svg>
                            <use href="<?php echo get_sprite('idea-icon')?>" ></use>
                        </svg>
                        <span>study</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#experience">
                        <svg>
                            <use href="<?php echo get_sprite('briefcase-icon')?>" ></use>
                        </svg>
                        <span>experience</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#contacts">
                        <svg>
                            <use href="<?php echo get_sprite('info-icon')?>" ></use>
                        </svg>

                        <span>contacts</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>