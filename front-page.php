<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header(); ?>

<div class="hero"> <!-- .hero header starts -->
	
</div> <!-- .hero header ends -->

<div class="main"> <!-- main content starts -->
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <section class="about"> <!-- start .about section -->
        <div class="wrapper"> <!-- .wrapper starts -->
          <h2><?php //the_title(); ?></h2>
          <p><?php the_field('bio'); ?></p>

          <?php the_content(); ?>
        </div> <!-- .wrapper ends -->
      </section> <!-- end .about section -->

    <?php endwhile; // end the loop?>

    <section class="skillset"> <!-- .skillset section starts -->
      <div class="skills"></div>
      <div class="tools"></div>
    </section> <!-- .skillset section ends -->

    <!-- Portfolio section would be in between skills and contact, on separate php file -->

    <section class="contact"> <!-- .contact section starts -->
      
    </section> <!-- .contact section ends -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>