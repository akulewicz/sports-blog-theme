<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta content="<?php bloginfo('name'); ?>" property="og:site_name">
    <meta property="og:title" content="<?php bloginfo('name'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <header class="site-header">
        <nav class="top-navigation">

            <?php wp_nav_menu(array(
                'theme_location' => 'primary_menu',
                'container'      => 'ul',
                'menu_class'     => 'top-navigation__list top-navigation__list--js'
                )); 
            ?>
        </nav>
        <button class="top-navigation__switcher top-navigation__switcher--js" aria-label="Otwórz menu"><i
                class="fas fa-bars"></i></button>
        <h1 id="top" class="site-header__title"><a class="site-header__link" href="<?= get_bloginfo('wpurl'); ?>"><?= get_bloginfo('name'); ?></a></h1>
    </header>