<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php
        $projectimage = get_field('project_image');
        ?>
        <img src="<?php echo $projectImage['url'] ?>"/>
        <h3>Used With:</h3>
          <?php
            while(has_sub_field('caption')) {
            ?>
            <button><?php the_sub_field('project_link')?></button>
            <?php

            }
           ?>


        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>