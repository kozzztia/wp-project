<header class="header-wrapper">
    <div class="header">
        <div class="header-logo">
            logo
        </div>
        <div class="header-nav">
<!--                        --><?php
//                        wp_nav_menu(array(
//                                'theme_location' => 'primary',
//                                'menu_id'        => 'primary-menu',
//                                'menu_class'     => 'nav',
//                        ));
//                        ?>
            <div
                 class="menu-header-menu-container"
                 title="Shift-click to edit this element.">
                <ul id="primary-menu" class="nav">
                    <li id="menu-item-24"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-24">
                        <a href="<?php get_site_url(); ?>">Main</a>
                    </li>
                    <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23">
                        <a href="<?php get_site_url(); ?>contacts">Contacts</a>
                    </li>
                    <li id="menu-item-25"
                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-20 current_page_item menu-item-25">
                        <a href="<?php get_site_url(); ?>about"
                           aria-current="page">About</a
                        >
                    </li>
                    <li id="menu-item-25"
                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-20 current_page_item menu-item-25">
                        <a href="<?php echo get_site_url(); ?>"
                           aria-current="page"><?php echo get_site_url(); ?></a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
