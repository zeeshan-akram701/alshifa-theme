<?php
// add_action('init', function () {
//     register_post_type('movie', [
//         'label' => 'Movies',
//         'public' => true,
//     ]);
// });


function add_theme_styles(){

    wp_enqueue_style('the-color', get_template_directory_uri() . '/assets/css/the-color.css');

    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');

    wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/css/footer.css');

    wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/css/home.css');
    


}

add_action('wp_enqueue_scripts', 'add_theme_styles');

//////////////////////////////menu/////////////////////////////////////
function alshifa_theme_setup(){
    register_nav_menus(array(
        'primary-menu' => 'Primary Menu',
    ));
}

add_action('after_setup_theme', 'alshifa_theme_setup');



////////////////////////////footer/////////////////////////////////////

function alshifa_widgets_init(){

    register_sidebar(array(
        'name' => 'Footer Quick Links',
        'id'   => 'footer-1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
    ));

    register_sidebar(array(
        'name' => 'Footer Services',
        'id'   => 'footer-2',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
    ));

}

add_action('widgets_init', 'alshifa_widgets_init');

//////////////////////////
?>