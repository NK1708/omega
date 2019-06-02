<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Пути для css, js и изображений-->
    <!-- блок с meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta name="description" content=""/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/image.jpg"/>
    <!-- блок с favicon-->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/x-icon"/>
    <!-- цвет в мобильной версии-->
    <meta name="theme-color" content="#000"/>
    <meta name="msapplication-navbutton-color" content="#000"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#000"/>
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
    <!-- подключение сss-->

      <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/styles\libs/bootstrap.min.css"/>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/styles\libs/jquery.arcticmodal-0.3.css"/>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/styles\libs/hamburgers.css"/>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/styles\libs/owl.carousel\assets/owl.carousel.min.css"/>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/styles\libs/owl.carousel\assets/owl.theme.default.min.css"/>
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">

      <?php wp_head(); ?>
  </head>

  <body>

  <div class="m-header">
      <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle hamburger hamburger--collapse" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                  </button>
              </div>

              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <!--<ul class="m-header__menu">
                      <li><a href="#" class="m-header-menu__item">О компании</a></li>
                      <li><a href="#" class="m-header-menu__item">Услуги и цены</a></li>
                      <li><a href="#" class="m-header-menu__item">Новости</a></li>
                      <li><a href="#" class="m-header-menu__item">Контакты</a></li>
                  </ul>-->
                  <?php
                  wp_nav_menu( array(
                      'menu_class'=>'m-header__menu',
                      'theme_location'=>'top',
                      'container' => ''
                  ) );
                  ?>
              </div>
          </div>
      </nav>
  </div>

  <header class="header">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="header__inner">
                      <a href="/" class="logo">
                          <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="">
                      </a>
                      <!--<ul class="header-menu">
                          <li><a href="#" class="header-menu__item">О компании</a></li>
                          <li><a href="#" class="header-menu__item">Услуги и цены</a></li>
                          <li><a href="#" class="header-menu__item">Новости</a></li>
                          <li><a href="#" class="header-menu__item">Контакты</a></li>
                      </ul>-->
                      <?php
                      wp_nav_menu( array(
                          'menu_class'=>'header-menu',
                          'theme_location'=>'top',
                          'container' => ''
                      ) );
                      ?>
                      <div class="header-right">
                          <div class="header-right__number">8(495)162-20-00</div>
                          <a href="#" class="header-right__link form__btn">Перезвоните мне</a>
                      </div>
                  </div>

              </div>
          </div>
          <div class="row">
              <div class="col-12">
                  <?php
                  wp_nav_menu( array(
                      'menu_class'=>'header__services',
                      'theme_location'=>'left',
                      'container' => ''
                  ) );
                  ?>
              </div>
          </div>
      </div>
  </header>

  <?php if( is_front_page() ) { ?>

  <? } else { ?>

  <section class="breadcrumbs gb">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
              </div>
          </div>
      </div>
  </section>

    <? } ?>