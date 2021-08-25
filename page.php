<?php get_header(); ?>


<div class = "container">
    <h1><?php the_title(); ?></h1>

    <h3>Default page...</h3>


    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>




<?php get_footer();?>