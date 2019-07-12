<?php get_header(); ?>

<?php 
    $imageSource = get_field('header-image');
    $image = $imageSource['sizes']['header-image'];
?>
<main class="content">
    <div class="header-image" style="background-image: url('<?php echo $image ?>')"></div>
    <div class="link-boxes">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="link-box">
                        <a href="#">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <span>Spenden</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="link-box">
                        <a href="#">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <span>Transparenz</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="link-box">
                        <a href="#">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <span>Spendenverlauf</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="link-box">
                        <a href="#">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <span>Ich bin ein Link</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
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