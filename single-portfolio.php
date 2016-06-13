<?php get_header(); ?>

<div class="main">
  <div class="container">
    <?php 
      if(have_posts()) {
        while(have_posts()) {
          the_post();
        ?>
        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <div class="image">
          <?php $image = get_field('project_image'); ?> 
          <img src="<?php echo $image['sizes']['large'] ?>">
          <p class="description"><?php the_field('project_description');?></p>

            <?php
              while(has_sub_field('skills')) {
              ?>
              <p class="tags"><?php the_sub_field('skills_tags');?></p>
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