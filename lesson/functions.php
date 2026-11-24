<?php
// Enqueue/link style & Script here ....
function lessonlms_theme_script()
{
    // Main theme Design css .......
    wp_enqueue_style('styles-css', get_template_directory_uri() . '/assets/css/style.css');
}
// add_action('hook','lessonlms_theme_script');   After action hook added here ...
add_action('wp_enqueue_scripts', 'lessonlms_theme_script');








?>