<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans|Rozha+One" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-grid.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery-ui.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/unslider.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/unslider-dots.css">
  <!--<link rel="stylesheet" href="/css/gridism.css">-->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header-container">
          <div class="row">
            <div class="col-md-2">
                  <div class="logo">
                    <div class="img-logo">
                      <img class="clarendon-logo" src="<?php bloginfo('template_url'); ?>/img/ClarendonLogo.png"/>
                    </div>
                  </div>
              </div>
              <div class="col-md-10">
                <nav class="topnav">
                  <div class="menu-container">
	                  <?php wp_nav_menu(array(
	                    'theme_location' => 'primary'
	                  )); ?>
                    <!-- <a class="nav"href="index.html">Home</a>
                    <a class="nav"href="#OurStory">Our Story</a>
                    <a class="nav"href="#Reviews">Reviews</a>
                    <a class="nav"href="#SpecialMenu">Special Menu</a>
                    <a class="nav"href="#ContactUs">Contact Us</a>-->
                  </div>
                </nav>
              </div>  
           </div>
          </div>
      </header>