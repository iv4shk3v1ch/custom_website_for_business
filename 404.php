<?php get_header(); ?>

<div class="container text-center my-5">
    <h1 class="display-4">Oops! Page Not Found</h1>
    <p class="lead">The page you're looking for might have been removed or doesn't exist.</p>
    
    <!-- Display an Image -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404.jpg" alt="404 Error" class="img-fluid my-4" width="400">
    
    <!-- Search Form -->
 <div class="my-4">
    <p class="mb-3">Try searching for what you need:</p>
    <form action="<?php echo home_url( '/' ); ?>" method="get" class="search-form d-flex justify-content-center">
        <div class="input-group" style="max-width: 400px; width: 100%;">
            <input type="text" name="s" class="form-control search-input" placeholder="Search here..." required>
            <button type="submit" class="btn btn-primary search-button">
                <i class="fas fa-search"></i> Search
            </button>
        </div>
    </form>
</div>


    <!-- Button to Homepage -->
</div>

<?php get_footer(); ?>
