<?php
  /**
  * Template Name: Home Version Page Template
  * @version 1.0
  * 
  */
  // the below php hook 
  get_header();
?>
  
  <main>
  <article>
        <h2><?php the_field('main_title'); ?></h2>
        </article>
    <section class="masthead" style="background-image: url(<?php the_field('masthead_image'); ?>);">
      <div>
        <h1><?php the_field('masthead_title'); ?></h1>
      </div>
    </section>
    <section class="row-one">
      <article>
        <img src="<?php the_field('image_one'); ?>" alt="image one">
      </article>
      <article>
        <img src="<?php the_field('image_two'); ?>" alt="image two">
      </article>
      <article>
        <img src="<?php the_field('image_three'); ?>" alt="image three">
      </article>
  
    </section>
    <section class="row-two">
      <article>
        <h2><?php the_field('title_1'); ?></h2>
        <p><?php the_field('text_1'); ?></p>
      </article>
      <article>
        <h2><?php the_field('title_2'); ?></h2>
        <p><?php the_field('text_2'); ?></p>
      </article>
    </section>
    <section class="all-posts">
      <!--  display all out posts -->
      <?php
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish'
        );
        $arr_posts = new WP_Query($args);
        if ( $arr_posts->have_posts() ) :
          while ( $arr_posts->have_posts() ) :
          $arr_posts->the_post();
        ?>
        <article>
            <?php
              if ( has_post_thumbnail() ) :
                the_post_thumbnail();
              endif;
            ?>
            <header>
                <h4><?php the_title(); ?></h4>
            </header>
            <div>
                <?php the_excerpt(10); ?>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </div>
        </article>
        <?php
        endwhile;
        endif;
        ?>
    </section>
    <section class="some-posts">
      <!-- display posts by category -->
      <?php
        $args1 = array(
          'post_type' => 'post',
          'category_name' => 'Example One',
          'post_status' => 'publish'
        );
        $arr_posts1 = new WP_Query($args1);
        if ( $arr_posts1->have_posts() ) :
          while ( $arr_posts1->have_posts() ) :
          $arr_posts1->the_post();
        ?>
        <article>
            <?php
              if ( has_post_thumbnail() ) :
                the_post_thumbnail();
              endif;
            ?>
            <header>
                <h4><?php the_title(); ?></h4>
            </header>
            <div>
                <?php the_excerpt(); ?>
                <?php the_category(); ?>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </div>
        </article>
        <?php
        endwhile;
        endif;
        ?>
    </section>
    <section class="pet_toys_section">
    <article>
    <?php
    $args2 = array(
      'post_type' => 'pet_toys', 'post_per_page'=>12);
    $the_query = new WP_Query($args2);
    if($the_query->have_posts()) : 
      while($the_query->have_posts()) : $the_query->the_post();

    ?>
    <div>
    <h3> <?php the_title(); ?></h3>
    <?php if(has_post_thumbnail()): ?>
    <img src= "<?php the_post_thumbnail_url('largest') ?>" alt="toy image">
    <?php endif; ?>
     </div>
     <div>
    
     <?php the_excerpt(); ?>
     <?php the_category(); ?>
     <a href = "<?php the_permalink(); ?>"> Read More </a>
     </div>
     <br>
     <?php
     endwhile;
     wp_reset_postdata();
    else:
    endif;
     ?>
    </article>

    </section>
  </main>
<?php
  // the footer template
  get_footer();
?>
