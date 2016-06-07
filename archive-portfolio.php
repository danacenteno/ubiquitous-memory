<?php get_header(); ?>

<div class="main">
  <div class="container">
    <?php 
      if(have_posts()) {
        while(have_posts()) {
          the_post();
        ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php
        $projectImages = get_field('project_images');
        ?>
        <img src="<?php echo $projectImages['url'] ?>"/>

        <?php
        }
      }

     ?>
  </div>
</div>

<?php get_footer(); ?>