<?php get_header(); ?>

<main class="content">
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post(); ?>

                            <?php the_content(); ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>
        
<?php get_footer(); ?>