<?php
/**
 * Template Name: Pet Toys Template
 * Template Post Type: pet_toys
 */
get_header(); ?>

<main class="toys-main">
<section>
<div>
<?php if (has_post_thumbnail()):?>
<img src="<?php the_post_thumbnail_url('largest');?>" alt ="toy image">
<?php endif;?>
</div>
<div>
<?php if(have_posts()) : while(have_posts()) : the_post();
?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
</section>
</main>
<?php get_footer();?>
