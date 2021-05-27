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
<div class="search-box search-box--js">
    <button class="search-box__close search-box__close--js"><i class="fas fa-times"></i></button>
    <form class="search-form" action="/" method="get">
      <input class="search-form__input" type="text" name="s" id="search" placeholder="Wpisz szukaną frazę" />
      <button class="search-form__button"><i class="fas fa-search search-form__icon"></i></button>
    </form>
  </div>
    <header class="site-header">
        <nav class="top-navigation">
            <div class="top-navigation__box">
            <?php wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container'      => 'ul',
                'menu_class'     => 'top-navigation__list top-navigation__list--js'
                )); 
            ?>
                    <button class="search-button search-button--js" aria-label="Szukaj"><i class="fas fa-search"></i></button>

            </div>
           
        </nav>

        <button class="top-navigation__switcher top-navigation__switcher--js" aria-label="Otwórz menu"><i
                class="fas fa-bars"></i></button>
        <?php if (is_home()) :?>
            <h1 id="top" class="site-header__title"><a class="site-header__link" href="<?= get_bloginfo('wpurl'); ?>"><?= get_bloginfo('name'); ?></a></h1>
        <?php else: ?>
            <div id="top" class="site-header__title"><a class="site-header__link" href="<?= get_bloginfo('wpurl'); ?>"><?= get_bloginfo('name'); ?></a></div>
        <?php endif; ?>
        </header>