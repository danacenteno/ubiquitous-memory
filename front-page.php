<?php

  /*
  	Template Name: Full Page, No Sidebar
  */

  get_header(); ?>

    <div class="main slider"> <!-- main content starts -->
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <section id="bio" class="about"> <!-- start .about section -->

          <div class="container">
            <div class="big-a">
              <p data-stellar-ratio="2">A</p>
            </div>

            <div class="wrapper"> <!-- .wrapper starts -->
              <!-- floating parallax letter here: -->

              <div class="bio-copy">
                <h3>about me</h3>
                <p class="bio-blurb"><?php the_field('bio'); ?></p> <!-- bio blurb custom field -->
                <div class="socmed"> <!-- social media icons -->
                  <a href="https://twitter.com/danamcenteno"><i class="fa fa-twitter" target="_blank"></i></a>
                  <a href="https://github.com/danacenteno" target="_blank"><i class="fa fa-github"></i></a>
                  <a href="https://ca.linkedin.com/in/danacenteno"><i class="fa fa-linkedin" target="_blank"></i></a>
                </div>
              </div>

              <?php $image = get_field('bio_image'); ?> <!-- bio image custom field 1/2-->
              <img class="bio-image" src="<?php echo $image['sizes']['large'] ?>" alt="A portrait of Dana Centeno"> <!-- bio image custom field 2/2-->
            </div> <!-- .wrapper ends -->
          </div> <!-- .container ends -->
        </section> <!-- end .about section -->

      <?php endwhile; // end the loop?>

      <section id="work" class="portfolio"> <!-- .portfolio section starts -->
        <div class="container">
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

                <div class="links">
                  <button class="live"><a href="<?php the_field('live_link') ?>">View live</a></button>

                  <button class="live"><a href="<?php the_field('gh_link') ?>">View GitHub</a></button>
                </div>
              </div> <!-- .project-copy ends -->
            </div> <!-- .pieces container ends -->
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

            <?php else:  ?>
                [stuff that happens if there aren't any posts]
            <?php endif; ?>
        </div> <!-- .container ends -->
      </section> <!-- .portfolio section ends -->

      <section id="skillz" class="skillset"> <!-- .skillset section starts -->
        <div class="container">
          <div class="icons wrapper">
            <div class="skills">
              <div class="big-s">
                <p data-stellar-ratio="0.5">S</p>
              </div>
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

            <div class="big-t">
              <p data-stellar-ratio="2">T</p>
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
            </div> <!-- .tools ends -->
          </div> <!-- .icons, .wrapper ends -->
        </div> <!-- .container ends -->
      </section> <!-- .skillset section ends -->
  </div> <!-- /.main -->
<?php get_footer(); ?>