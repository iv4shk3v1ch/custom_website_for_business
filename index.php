<?php get_header(); ?>

<div class="container my-5">
    <h2 class="mb-4">News and posts</h2>
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-md-4 fade-in">
                <div class="card mb-4">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', ['class' => 'card-img-top']);
                    } ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read</a>
                    </div>
                </div>
            </div>
        <?php endwhile; else: ?>
            <p>No posts yet.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>