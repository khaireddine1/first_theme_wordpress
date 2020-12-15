<?php get_header() ?>
    <div class="row">
        <div class="container">
            <h1>
                Content Post page
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <div class="col col-sm-12 col-md-6 col-lg-4">
                        <a href="<?php the_permalink() ?>"><?php the_title('<h3>', '</h3>') ?></a>
                        <div class="container-tags">
                            <?php the_tags(', '); ?>
                        </div>
                        <div class="footer-product">
                            <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail', 'title' => 'Image']); ?>
                        </div>
                    </div>
                <?php }
            }
            ?>
        </div>
    </div>
<?php get_footer() ?>