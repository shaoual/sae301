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
    </nav>

    <!-- Menu plein écran -->
    <div class="full-screen-menu" id="full-screen-menu">
        <button class="close-menu" id="close-menu">&times;</button>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'menu_class' => 'nav-list',
            'container' => false
        ));
        ?>
    </div>
</header>

<script>
    // Script pour ouvrir et fermer le menu burger
    document.getElementById('mobile-menu').addEventListener('click', function() {
        document.getElementById('full-screen-menu').classList.add('active');
    });

    document.getElementById('close-menu').addEventListener('click', function() {
        document.getElementById('full-screen-menu').classList.remove('active');
    });
</script>

<?php wp_footer(); ?>
</body>
</html>
