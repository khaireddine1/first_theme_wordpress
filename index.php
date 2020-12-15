<?php get_header() ?>
<div class="row">
    <div class="container">
        <h1>
            Content home page
        </h1>
    </div>
</div>
<div class="row">
    <div class="container">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
                <div class="card">
                    <?php the_post_thumbnail('', ['class' => 'card-img-top img-thumbnail img-responsive', 'title' => 'Image']); ?>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="<?php the_permalink() ?>"><?php the_title('<h3>', '</h3>') ?></a>
                        </h4>
                        <p class="card-text">
                            <?php the_tags('<span></span>'); ?>
                        </p>
                        <a href="<?php the_permalink() ?>" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            <?php }
        }
        ?>
    </div>
</div>
<?php get_footer() ?>