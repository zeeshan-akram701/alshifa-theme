<?php
// add_action('init', function () {
//     register_post_type('movie', [
//         'label' => 'Movies',
//         'public' => true,
//     ]);
// });


// function add_theme_styles(){

//     wp_enqueue_style('the-color', get_template_directory_uri() . '/assets/css/the-color.css');

//     wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');

//     wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/css/footer.css');

//     wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/css/home.css');
    


// }

// add_action('wp_enqueue_scripts', 'add_theme_styles');

function add_theme_styles(){

    $css_path = get_template_directory() . '/assets/css/';
    $css_uri  = get_template_directory_uri() . '/assets/css/';

    wp_enqueue_style(
        'the-color',
        $css_uri . 'the-color.css',
        array(),
        filemtime($css_path . 'the-color.css')
    );

    wp_enqueue_style(
        'main-style',
        $css_uri . 'main.css',
        array(),
        filemtime($css_path . 'main.css')
    );

    wp_enqueue_style(
        'footer-style',
        $css_uri . 'footer.css',
        array(),
        filemtime($css_path . 'footer.css')
    );

    wp_enqueue_style(
        'home-style',
        $css_uri . 'home.css',
        array(),
        filemtime($css_path . 'home.css')
    );

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


//////////////////////////////for featured image/////////////////////////////////////


function alshifa_theme_support(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'alshifa_theme_support');
?>