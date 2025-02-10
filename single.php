<?php get_header(); ?>

<div class="container my-5">
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
    ?>
        <!-- Title Section -->
        <h1 class="display-4"><?php the_title(); ?></h1>
        
        <!-- Product/Service Info Section -->
        <div class="row">
            <div class="col-md-6">
                <!-- Product Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="product-image">
                        <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-6">
                <!-- Product/Service Details -->
                <div class="product-details">
                    <h4>Product/Service Description</h4>
                    <p><?php the_content(); ?></p>
                    
                    <!-- Add Pricing or other custom fields here -->
                    <?php if (get_post_meta(get_the_ID(), 'product_price', true)) : ?>
                        <p><strong>Price: </strong><?php echo get_post_meta(get_the_ID(), 'product_price', true); ?></p>
                    <?php endif; ?>
                    
                    <!-- Add Call-to-Action Button -->
                    <a href="contact-us" class="btn btn-primary btn-lg">Contact Us</a> <!-- You can link to your contact page -->
                </div>
            </div>
        </div>

        
        <!-- Related Products or Services (Optional) -->
        <div class="related-products my-5">
            <h4>Related Products</h4>
            <div class="row">
                <?php
                $related_posts = new WP_Query([
                    'post_type' => 'post', // Adjust for custom post types
                    'posts_per_page' => 3,
                    'post__not_in' => [get_the_ID()],
                ]);
                if ($related_posts->have_posts()) :
                    while ($related_posts->have_posts()) : $related_posts->the_post();
                ?>
                        <div class="col-md-4">
                            <div class="card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="card-img-top">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-secondary">View Product</a>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                else :
                    echo '<p>No related products found.</p>';
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>

    <?php endwhile; else : ?>
        <p>Post not found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
