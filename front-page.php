<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header(); ?>

<div class="hero"> <!-- .hero header starts -->
   <div class="hero-text"> <!-- .hero-text starts -->
      <h1>
          <?php bloginfo( 'name' ); ?>
      </h1>
      <h2>designer & developer</h2>
    </div> <!-- .hero-text ends -->
    
	<img src="http://unsplash.it/600/600?image=1053" class="accent-img" alt="">
</div> <!-- .hero header ends -->

<div class="main"> <!-- main content starts -->
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <section id="bio" class="about"> <!-- start .about section -->
        <div class="wrapper"> <!-- .wrapper starts -->
          <?php $image = get_field('bio_image'); ?> <!-- bio image custom field 1/2-->
          <img class="bio-image" src="<?php echo $image['sizes']['large'] ?>"> <!-- bio image custom field 2/2-->
          <div class="bio-copy">
            <h3>About</h3>
            <p class="bio-blurb"><?php the_field('bio'); ?></p> <!-- bio blurb custom field -->
          </div>

        </div> <!-- .wrapper ends -->
      </section> <!-- end .about section -->

    <?php endwhile; // end the loop?>

    <section id="dem-skillz" class="skillset"> <!-- .skillset section starts -->
      <div class="wrapper"> <!-- .wrapper starts -->
        <div class="skills-copy"> <!-- .skills-copy starts -->
          <h4>Things I know</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sint maxime voluptates at, culpa ex saepe nulla voluptatibus incidunt veniam!</p>
        </div> <!-- .skills-copy ends -->

        <div class="skills-icons"> <!-- .skills icons starts -->
          <i class="devicons devicons-html5"></i>
          <i class="devicons devicons-css3"></i>
          <i class="devicons devicons-responsive"></i>
          <i class="devicons devicons-javascript_badge"></i>
          <i class="devicons devicons-jquery"></i>
          <i class="devicons devicons-wordpress"></i>
          <i class="devicons devicons-photoshop"></i>
          <i class="devicons devicons-illustrator"></i>
        </div> <!-- .skills icons ends -->

        <div class="tools-icons"> <!-- .tools icons starts -->
          <i class="devicons devicons-sass"></i>
          <i class="devicons devicons-github"></i>
          <i class="devicons devicons-git"></i>
          <i class="devicons devicons-gulp"></i>
          <i class="devicons devicons-trello"></i>
          
        </div> <!-- .tools icons ends -->
      </div> <!-- .wrapper ends -->
    </section> <!-- .skillset section ends -->

    <section class="portfolio"> <!-- .portfolio section starts -->
      
    </section> <!-- .portfolio section ends -->

    <section class="contact"> <!-- .contact section starts -->
      
    </section> <!-- .contact section ends -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>