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

    <section id="skillz" class="skillset"> <!-- .skillset section starts -->
      <div class="wrapper"> <!-- .wrapper starts -->
        <div class="skills-copy"> <!-- .skills-copy starts -->
          <h4>Things I know</h4>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sint maxime voluptates at, culpa ex saepe nulla voluptatibus incidunt veniam!</p> -->
        </div> <!-- .skills-copy ends -->

        <div class="icons">
          <!-- <h5>Skills</h5> -->
          <div class="skills-icons"> <!-- .skills icons starts -->
            <figure>
              <i class="devicons devicons-html5"></i>
              <figcaption>HTML5</figcaption>
            </figure>
            <figure>
              <i class="devicons devicons-css3"></i>
              <figcaption>CSS3</figcaption>
            </figure>
            <figure>
              <i class="devicons devicons-javascript_badge"></i>
              <figcaption>Javascript</figcaption>
            </figure>
            <figure>
              <i class="devicons devicons-jquery"></i>
              <figcaption>jQuery</figcaption>
            </figure>
            <figure>
              <i class="devicons devicons-wordpress"></i>
              <figcaption>Wordpress</figcaption>
            </figure>
            <figure>
              <i class="devicons devicons-responsive"></i>
              <figcaption>Responsive Design</figcaption>
            </figure>
            <figure>
              <i class="devicons devicons-sublime"></i>
              <figcaption>Sublime Text</figcaption>
            </figure>
            <figure>
              <i class="devicons devicons-sass"></i>
              <figcaption>Sass</figcaption>
            </figure>
            <figure>
              <i class="devicons devicons-github"></i>
              <figcaption>Github</figcaption>
            </figure>
            <figure>
              <i class="devicons devicons-git"></i>
              <figcaption>Git</figcaption>
            </figure>
            <figure>
              <i class="devicons devicons-gulp"></i>
              <figcaption>Gulp</figcaption>
            </figure>
            <figure>
              <i class="devicons devicons-terminal"></i>
               <figcaption>Terminal</figcaption>
            </figure>
            <figure>
              <i class="devicon-photoshop-plain"></i>
              <figcaption>Photoshop</figcaption>
            </figure>
            <figure>
              <i class="devicon-illustrator-plain"></i>
              <figcaption>Illustrator</figcaption>
            </figure>
            <figure>
              <i class="devicons devicons-trello"></i>
              <figcaption>Trello</figcaption>
            </figure>
            </div> <!-- .skills-icons ends -->
        </div> <!-- .icons ends -->
      </div> <!-- .wrapper ends -->
    </section> <!-- .skillset section ends -->

    <section class="portfolio"> <!-- .portfolio section starts -->
      <h3>Work</h3>
      <div class="wrapper">
        <div class="project-one"> <!-- .project-one starts  -->
          <button>View Live</button>
        </div> <!-- .project-one ends -->

        <div class="project-two"> <!-- .project-two starts -->
          <button>View Live</button>
        </div> <!-- .project-two ends
   -->
        <div class="project-three"> <!-- .project-three starts -->
          <button>View Live</button>
        </div> <!-- .project-three ends -->

        <div class="project-four"> <!-- .project-four starts -->
          <button>View Live</button>
        </div> <!-- .project-four ends -->
      </div>
      
    </section> <!-- .portfolio section ends -->

    <section class="contact"> <!-- .contact section starts -->
      <h3>Contact</h3>
      <div class="wrapper">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, fugit.</p>
        <form>
          <?php the_field('contact_form') ?>
        </form>
      </div>
    </section> <!-- .contact section ends -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>