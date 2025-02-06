<?php get_header(); ?>

<div class="container">
    <h2><?php the_title(); ?></h2>
    <div class="post-content">
        <?php
        if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile; else :
            echo '<p>Post not found.</p>';
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>