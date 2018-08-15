<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Palabras Redondas</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>/css/normalize.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favicon.png" type="image/x-icon"/>
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.png" type="image/x-icon"/>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header id="header" class="header-fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-color-white">
        <a class="navbar-brand" href="#"><img class="img-logo" src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" alt="Tiempo Sport"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <button class="btnz d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3 weather-btn" id="weather">
        <img src="<?php bloginfo( 'template_url' ); ?>/img/sun.png" class="weather-img"><span id="current-temp" class="temp-actual">20</span><span class="max-min" id="max-Temp">23&#176;</span>
        <span class="max-min" id="min-temp">11&#176;</span>
      </button>
    </div>
    <h1 id="slogan" class="slogan-top d-none d-sm-block"><?php echo single_cat_title() ?></h1>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
              <a class="nav-link" href="http://c0360477.ferozo.com/palabrasredondas/"><img src="<?php bloginfo( 'template_url' ); ?>/img/home.png" class="icon-btn">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://c0360477.ferozo.com/palabrasredondas/category/motores/general-motores/"><img src="<?php bloginfo( 'template_url' ); ?>/img/motores.png" class="icon-btn">General</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://c0360477.ferozo.com/palabrasredondas/category/motores/local-motores/"><img src="<?php bloginfo( 'template_url' ); ?>/img/local.png" class="icon-btn">Local</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="http://c0360477.ferozo.com/palabrasredondas/category/motores/nacional/"><img src="<?php bloginfo( 'template_url' ); ?>/img/nacional.png" class="icon-btn">Nacional</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="http://c0360477.ferozo.com/palabrasredondas/category/motores/internacional/"><img src="<?php bloginfo( 'template_url' ); ?>/img/internacional.png" class="icon-btn">Internacional</a>
            </li>
      <li class="nav-item social-content d-block d-sm-block d-md-none">
        <img class="social-icons" src="<?php bloginfo( 'template_url' ); ?>/img/facebook.png">
        <img class="social-icons" src="<?php bloginfo( 'template_url' ); ?>/img/twitter.png">
        <img class="social-icons" src="<?php bloginfo( 'template_url' ); ?>/img/instagram.png">
      </li>
    </ul>
  </div>
</nav>
  </header><!-- /header -->