<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header(); ?>

<div class="main"> <!-- main content starts -->
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <section id="bio" class="about"> <!-- start .about section -->
        <!-- <div class="big-a">
          <p>A</p>
        </div> -->
        <div class="wrapper"> <!-- .wrapper starts -->
          <div class="bio-copy">
            <h3>about me</h3>
            <p class="bio-blurb"><?php the_field('bio'); ?></p> <!-- bio blurb custom field -->
            <div class="socmed">
              <i class="fa fa-twitter"></i>
              <i class="fa fa-github"></i>
              <i class="fa fa-linkedin"></i>
              <i class="fa fa-"></i>
              <i class="fa fa-"></i>
            </div>
          </div>

          <?php $image = get_field('bio_image'); ?> <!-- bio image custom field 1/2-->
          <img class="bio-image" src="<?php echo $image['sizes']['large'] ?>"> <!-- bio image custom field 2/2-->
        </div> <!-- .wrapper ends -->
      </section> <!-- end .about section -->

    <?php endwhile; // end the loop?>

    <section id="work" class="portfolio"> <!-- .portfolio section starts -->
    <?php
      $workQuery = new WP_Query(
        array(
          'posts_per_page' => -1,
          'post_type' => 'portfolio',
          'order' => 'ASC'
          )
        ); ?>

      <?php if ( $workQuery->have_posts() ) : ?>

      <?php while ($workQuery->have_posts()) : $workQuery->the_post(); ?>

      <div id="<?php echo $post->post_name; ?>" class="pieces"> <!-- .pieces container starts -->
        <figure>
          <?php $image = get_field('project_image'); ?> 
          <img src="<?php echo $image['sizes']['large'] ?>">
        </figure>

        <div class="project-copy">
          <!-- .project-copy starts -->
          <h4><?php the_title(); ?></h4>
      
          <?php the_sub_field('skills'); ?>
          <?php while( has_sub_field('skills') ): ?>
          
          <div class="skills">
            <p><?php the_sub_field('skills_tags'); ?></p>
          </div>
          <?php endwhile; ?>

          <p class="description"><?php the_field('project_description');?></p>

          <button class="live"><a href=""><?php get_field('live_link') ?>See it live!</a></button>
        </div> <!-- .project-copy ends -->
      </div> <!-- .pieces container ends -->
      <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>

      <?php else:  ?>
          [stuff that happens if there aren't any posts]
      <?php endif; ?>
    </section> <!-- .portfolio section ends -->

    <section id="skillz" class="skillset"> <!-- .skillset section starts -->
<!--     <h3>Things I know</h3> -->
      <div class="icons wrapper">
        <div class="skills">
          <h3>skills</h3>
          <article class="skills-icons"> <!-- .skills starts -->
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
              <i class="devicons devicons-php"></i>
              <figcaption>PHP</figcaption>
            </figure>
            <figure>
              <i class="devicons devicons-responsive"></i>
              <figcaption>Responsive</figcaption>
            </figure>
          </article> <!-- .skills-icons ends -->
          </div>

        <div class="tools">
          <h3>tools</h3>
          <article class="tools-icons"> <!-- .tools starts -->
            <figure>
              <i class="devicons devicons-sass"></i>
              <figcaption>Sass</figcaption>
            </figure>
            <figure>
              <i class="devicons devicons-github_alt"></i>
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
          </article> <!-- .tools-icons ends -->
        </div>
      </div> <!-- .icons ends -->
    </section> <!-- .skillset section ends -->

    <section id="emails" class="contact"> <!-- .contact section starts -->
      <h3>let's talk!</h3>
      <div class="wrapper">
        <div class="contact-blurb">
          <h5>Interested in working together?</h5>
          <p>If you would like to get in touch, say hello, or feel like starting a nerdy conversation at all, please feel free to email me at hello@danacenteno.com, or you can fill out the form to your right.</p>

          <p>You can also find me at the links below!</p>

          <div class="socmed">
            <i class="fa fa-twitter"></i>
            <i class="fa fa-github"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-"></i>
            <i class="fa fa-"></i>
          </div>
        </div>
        <form>
          <?php the_field('contact_form') ?>
        </form>
      </div>
    </section> <!-- .contact section ends -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>