<?php
// Enqueue/link style & Script here ....
function lessonlms_theme_script()
{

    // Main theme Design css .......
    wp_enqueue_style('styles-css', get_template_directory_uri() . './assets/css/style.css');

    // Responsive css 
    wp_enqueue_style('responsive-css', get_template_directory_uri() . './assets/css/responsive.css');

    // Slick slider css cdn css link thika astase ...
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0');

    // Box Icon 
    wp_enqueue_style('boxIcon-css', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css', array(), '2.1.4');

    // Theme description css
    wp_enqueue_style('theme-description-css', get_stylesheet());

    // jQuery load ---------------------------------------------------------------------------All
    wp_enqueue_script('jquery');

    // Slick jQuery
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.9.0', true);

    // Main js </body> up ....
    wp_enqueue_script('main-js', get_template_directory_uri() . './assets/js/script.js', array('jquery'), '1.9.0', true);

    // Google Fonts ...
    wp_enqueue_style('googleFonts-css', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;1,700&display=swap', array(), null);
}
// add_action('hook','lessonlms_theme_script');   After action hook added here ...
add_action('wp_enqueue_scripts', 'lessonlms_theme_script');


// Logo Dynamic Code here ....

function lessonlms_menu_register() {


  // ১. Custom Logo রেজিস্টার করা
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200, 
        'flex-height' => true,
        'flex-width'  => true,
    ) );


}
add_action('after_setup_theme', 'lessonlms_menu_register');
