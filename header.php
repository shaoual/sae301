<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <nav class="navbar">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">Audaleague</a>
        </div>
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'menu_class' => 'nav-list',
            'container' => false
        ));
        ?>
        <ul class="nav-list">
            <li><a href="<?php echo home_url('/sae301/les-equipes.php'); ?>">Équipes</a></li>
            <li><a href="<?php echo wp_login_url(); ?>">Connexion</a></li>
            <li><a href="<?php echo wp_logout_url(home_url()); ?>">Déconnexion</a></li>
        </ul>
    </nav>
</header>

