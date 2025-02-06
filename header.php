<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Business description, keywords and key phrases">    
    <meta name="keywords" content="keyword, keyword for SEO">                            
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
    <style>
    body {
        background-color: <?php echo get_theme_mod('background_color', '#ffffff'); ?>;
    }
    </style>
</head>
<body>
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
                <nav>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'nav nav-pills'
                    ));
                    ?>
                </nav>
            </div>
        </header>