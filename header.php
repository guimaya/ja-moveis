<!doctype html>
<html <?php language_attributes(); ?>>

<head>

    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="description" content="<?php bloginfo( 'name' ); ?>">
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Maya Comunicação">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#013E7F">
    <title><?php the_title(); ?></title>

    <!-- Facebook -->
    <meta property="og:locale" content="pt-BR" />
    <meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
    <meta property="og:description" content="<?php bloginfo( 'description' ); ?>" />
    <meta property="og:url" content="<?php echo get_site_url(); ?>" />
    <meta property="og:site_name" content="<?php echo cts_add_theme_slug(); ?>" />
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/img/logo-do-tema.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="160">

    <!-- IOS -->
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-title" content="Maya Comunicação"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="default"/>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/assets/img/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri()?>/assets/img/logo-57x57-v1.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri()?>/assets/img/logo-114x114-v1.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri()?>/assets/img/logo-72x72-v1.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri()?>/assets/img/logo-144x144-v1.png">

    <!-- Google -->
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel='dns-prefetch' href='//maps.googleapis.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />


    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >
  <nav class="navbar">
      <?php
          wp_nav_menu(
              array(
                  'menu'            => 'Menu Principal',
                  'container_class' => 'menu-nav',
                  'menu_class'      => 'item-menu'
          ));
      ?>
  </nav>
