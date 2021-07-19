<?php get_header(); ?>


    <?php while(have_posts() ): the_post(); ?>

    <?php if (has_post_thumbnail() ) { ?>

    <div class="destacada">

        <?php the_post_thumbnail("destacada") ?>
        <h2><?php the_title(); ?></h2>
    <?php } else { ?>

        <h2 class="noimagen"><?php the_title(); ?></h2>
    <?php } ?>

    </div>
        
        <div class="primary" id="primary">

            <?php the_content(); ?>  

        </div>

    <?php endwhile; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>