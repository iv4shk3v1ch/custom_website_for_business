<?php
header("Content-type: text/css; charset: UTF-8");

$primary_color = get_theme_mod('primary_color', '#007bff');
?>

body {
    background-color: <?php echo $primary_color; ?>;
}