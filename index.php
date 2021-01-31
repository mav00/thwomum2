<?php get_header(); ?>


<div id="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <div class="entry">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?> | <?php previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p>
    <?php endif; ?>   
</div><!-- main -->

<div id="sidebar_r"> 
    <?php get_sidebar(); ?>
</div><!-- sidebar --> 

<?php get_footer(); ?>