<?php get_header(); ?>

<div class="main">
  <div class="container">
    <?php 
      if(have_posts()) {
        while(have_posts()) {
          the_post();
        ?>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <div class="image">
          <h5><?php get_field('project_name') ?></h5>
          <p><?php get_field('project_blurb') ?></p>
            <?php
              while(has_sub_field('project_images')) {
              ?>
              <?php
              $image = get_sub_field('image');
              ?>
              <img class="project-pic" src="<?php echo $image['url']?>" />

              <p><?php the_sub_field('caption')?></p>
            <?php
            }
           ?>
        <?php
        }
      }
     ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>