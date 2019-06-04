<?php get_header(); ?>

<?php 
    $imageSource = get_field('header-image');
    $image = $imageSource['sizes']['header-image'];
?>
<main class="content">
    <div class="header-image" style="background-image: url('<?php echo $image ?>')"></div>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <i class="fab fa-paypal"></i>
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