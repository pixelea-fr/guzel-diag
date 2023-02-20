<?php

/**
 * Primary menu template part
 */
?>

<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Primary', 'guzeldiag'); ?>">
    <button class="menu-toggle" aria-label="Primary Menu" aria-controls="primary-menu" aria-expanded="false"><span></span></button>
    <?php the_custom_logo(); ?>
    <div class="menu-principal">
        <?php
        $page = get_page_by_title('accueil');
        $ids = "{$page->ID}"; //Exlude page from the menu
        wp_nav_menu(
            array(
                'menu' => 'menu-principal',
                'theme_location' => 'menu-1',
                'exclude' => $ids
            )
        );
        $path = get_template_directory_uri();
        ?>
        <div class="menu-principal-logo">
            <a href="<?= get_home_url(); ?>" alt="Accueil">
                <img alt="logo menu white" src="<?= $path; ?>/dist/img/LOGO-GUZELDIAG-white.webp" /></a>
        </div>
</nav><!-- #site-navigation -->