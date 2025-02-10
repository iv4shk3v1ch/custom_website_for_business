<?php get_header(); ?>

<?php get_template_part('slider'); ?>

<div class="container my-5">
    <h2 class="mb-4">News and posts</h2>
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-md-4 fade-in">
                <div class="card mb-4">
                    <?php 
                    // Display featured image if available
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', ['class' => 'card-img-top']);
                    } else {
                        // Fallback image
                        echo '<img src="' . get_template_directory_uri() . '/assets/images/placeholder.jpg" class="card-img-top" alt="Placeholder">';
                    }
                    ?>
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

    <br>
    <!-- Pagination -->
    <div class="pagination-container text-center">
        <?php
        // Display pagination
        the_posts_pagination( array(
            'mid_size' => 2, // Number of page links to show on each side of current page
            'prev_text' => '&laquo; Prev', // Previous page link text
            'next_text' => 'Next &raquo;', // Next page link text
        ) );
        ?>
    </div>

    <br>
</div>

<?php get_footer(); ?>
