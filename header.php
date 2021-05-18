<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= get_bloginfo('name'); ?></title>
    <meta name="description"
        content="Blog o bieganiu, rowerach i wędrówkach. Opisy treningów, relacje z zawodów, ciekawe trasy biegowe i rowerowe oraz testy sprzętu sportowego." />
    <meta content="Poruszeni.pl" property="og:site_name">

    <meta property="og:title" content="Poruszeni.pl">


    <meta property="og:description"
        content="Blog o bieganiu, kolarstwie oraz wędrówkach. Opisy treningów, relacje z zawodów, trasy biegowe i rowerowe oraz testy sprzętu">


    

    <link
        href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Roboto:300,400,500,700&display=swap&subset=latin-ext"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/6c6c51fb45.js"></script>

    <?php wp_head(); ?>
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v5.0">
    </script>
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