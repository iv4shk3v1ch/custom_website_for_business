<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Business description, keywords and key phrases">    
    <meta name="keywords" content="keyword, keyword for SEO">                            
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head()?>
    <style>
    body {
        background-color: <?php echo get_theme_mod('background_color', '#ffffff'); ?>;
    }
    </style>
</head>
<body <?php body_class()?>>
<?php wp_body_open()?>
        <header class="container py-3">
            <div class="d-flex justify-content-between align-items-center">
                <a href="<?php echo home_url(); ?>" class="text-decoration-none">
                    <?php 
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo '<h1 class="h3">' . get_bloginfo('name') . '</h1>';
                    }
                    ?>
                </a>
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgba(255, 255, 255, 0);">
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Features</a>
                        <a class="nav-item nav-link" href="#">Pricing</a>
                        <a class="nav-item nav-link disabled" href="#">Disabled</a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
<?php wp_footer()?>