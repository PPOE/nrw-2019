<?php get_header(); ?>

<main class="content">

    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; ?>
    <?php endif; ?>

</main>
        
<?php get_footer(); ?>