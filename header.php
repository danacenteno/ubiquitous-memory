<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!--            *************
                   CREDITS
                *************

Social Media & Menu Icons provided by Font Awesome:
http://fortawesome.github.io/Font-Awesome/

Icons in Skills & Tools section provided by Devicons:
http://vorillaz.github.io/devicons/#/main
http://devicon.fr/

Small browser icons (arrows, refresh, home) 
& mouse illustration in hero image provided by The Noun Project:
https://thenounproject.com/

Illustrated browser windows inspired by Garden Estudio:
http://gardenestudio.com.br/

 -->

	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="icon" type="image/png" href="images/favicon-96x96.png" sizes="96x96">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="home">
  <div class="container">
    <div class="fa fa-bars fa-2x"></div>
    <nav> <!-- nav starts -->
      <?php wp_nav_menu( array( 
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
    </nav> <!-- nav ends -->

    <div class="hero"> <!-- .hero header starts -->
     <div class="hero-text"> <!-- .hero-text starts -->
        <h1>
            <?php bloginfo( 'name' ); ?>
        </h1>
        <h2>front-end developer & designer</h2>
      </div> <!-- .hero-text ends -->
    </div> <!-- .hero header ends -->
  </div> <!-- /.container -->
</header><!--/.header-->

