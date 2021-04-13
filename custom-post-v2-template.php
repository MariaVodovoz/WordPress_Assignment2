<?php
/**
* Template Name: Custom Post Template No Custom Fields
* Template Post Type: post
*/
get_header();
?>

<main class="post-main-v2">
  <section>
    <!-- add our post wrappper -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="post-wrapper">
        <?php the_post_thumbnail(); ?>
          <div>
            <h2><?php the_title() ;?></h2>
            <br>
            <?php
              the_content();
              endwhile; else:
            ?>
           
            <p>Sorry, no posts to list</p>
            <?php endif; ?>
        </div>
     </div>
  </section>
  <div><?php get_sidebar(); ?></div>
</main>
<?php
  get_footer();
?>
