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
        <div class="wrapper"> <!-- .wrapper starts -->
          <div class="bio-copy">
            <h3>about me</h3>
            <p class="bio-blurb"><?php the_field('bio'); ?></p> <!-- bio blurb custom field -->
          </div>

          <?php $image = get_field('bio_image'); ?> <!-- bio image custom field 1/2-->
          <img class="bio-image" src="<?php echo $image['sizes']['large'] ?>"> <!-- bio image custom field 2/2-->
        </div> <!-- .wrapper ends -->
      </section> <!-- end .about section -->

    <?php endwhile; // end the loop?>

    <section class="portfolio"> <!-- .portfolio section starts -->
     <!--  <h3>Work</h3> -->
      <div class="wrapper">
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

                <section id="<?php echo $post->post_name; ?>">
                    <h5><?php the_title(); ?></h5>
                    <?php $image = get_field('project_image'); ?> 
                    <img src="<?php echo $image['sizes']['large'] ?>">
                    <p class="description"><?php the_field('project_description');?></p>
                    <?php the_content(); ?>

                    <p><?php the_sub_field('skills'); ?></p>
                    <div class="images">
                        <?php while( has_sub_field('skills') ): ?>
                            <div class="skills">
                                <p><?php the_sub_field('skills_tags'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </section>
                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            <?php else:  ?>
                [stuff that happens if there aren't any posts]
            <?php endif; ?>
      </div> <!-- .wrapper ends -->
      
    </section> <!-- .portfolio section ends -->

    <section id="skillz" class="skillset"> <!-- .skillset section starts -->
<!--     <h3>Things I know</h3> -->
      <div class="wrapper"> <!-- .wrapper starts -->
        <div class="icons">
          <h3>skills</h3>
          <div class="skills-icons"> <!-- .skills starts -->
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
          </div> <!-- .skills ends -->

          <h3>tools</h3>
          <div class="tools-icons"> <!-- .tools starts -->
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
          </div> <!-- .tools ends -->
        </div> <!-- .icons ends -->
      </div> <!-- .wrapper ends -->
    </section> <!-- .skillset section ends -->

    <section class="contact"> <!-- .contact section starts -->
      <h3>let's talk!</h3>
      <div class="wrapper">
        <p>Her resistance to the mind probe is considerable. It will be some time before we can extract any information from her. The final check-out is complete. All systems are operational. What course shall we set? Perhaps she would respond to an alternative form of persuasion. What do you mean? I think it is time we demonstrate the full power of this station. Set your course for Princess Leia's home planet of Alderaan. With pleasure.</p>

        <div class="socmed">
          <i class="fa fa-twitter"></i>
          <i class="fa fa-github"></i>
          <i class="fa fa-linkedin"></i>
          <i class="fa fa-"></i>
          <i class="fa fa-"></i>
        </div>
        <form>
          <?php the_field('contact_form') ?>
        </form>
      </div>
    </section> <!-- .contact section ends -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>