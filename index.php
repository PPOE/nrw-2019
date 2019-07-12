<?php get_header(); ?>

<?php 
    $imageSource = get_field('header-image', 'options');
    $image = $imageSource['sizes']['header-image'];

?>
<main class="content">
    <div class="header-image" style="background-image: url('<?php echo $image ?>')"></div>
    <div class="link-boxes">
        <div class="container">
            <div class="row">
                <?php 
                    $post_objects = get_field('link_blocks', 'options');
                    if( $post_objects ): 
                ?>
                    <?php foreach( $post_objects as $post):?>
                        <?php setup_postdata($post); ?>
                            <div class="col-lg col-md">
                                <div class="link-box">
                                    <a href="<?php the_permalink();?>">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <span><?php the_title(); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
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