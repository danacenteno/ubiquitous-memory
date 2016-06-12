<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header id="home">
<nav> <!-- nav starts -->
  <?php wp_nav_menu( array( 
    'container' => false,
    'theme_location' => 'primary'
  )); ?>
</nav> <!-- nav ends -->

  <div class="container">
    <div class="hero"> <!-- .hero header starts -->
     <div class="hero-text"> <!-- .hero-text starts -->
        <h1>
            <?php bloginfo( 'name' ); ?>
        </h1>
        <h2>front-end developer + designer</h2>
      </div> <!-- .hero-text ends -->
    </div> <!-- .hero header ends -->
  </div> <!-- /.container -->
</header><!--/.header-->

