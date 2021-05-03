<?php


//Charger les autres fichiers
$roots_includes = array(
    './functions-wp_customize.php',
    './function-theme_settings_page.php',
    './function-theme_presets.php',
    './function-fontList.php'
);

foreach ($roots_includes as $file) {
    if (!$filepath = locate_template($file)) {
        trigger_error("Error locating `$file` for inclusion!", E_USER_ERROR);
    }

    require_once $filepath;
}
unset($file, $filepath);


// Ajout du support des thumbnails
add_theme_support('post-thumbnails');


// Ajout du menu éditable
register_nav_menus(
    array(
        'menu-principal' => __('Main menu')
    )
);


//Ajout De jQuery

function load_jquery()
{
    //Load scripts:
    wp_enqueue_script('jquery'); # Loading the WordPress bundled jQuery version.
}
add_action('wp_enqueue_scripts', 'load_jquery');


// function wpm_custom_post_type()
// {

//     register_post_type(
//         'ateliers',
//         array(
//             'labels' => array(
//                 'name' => __('Ateliers'),
//                 'singular_name' => __('Ateliers'),
//             ),
//             'public' => true,
//             'has_archive' => false,
//             'supports' => array(
//                 'title', 'editor', 'author', 'thumbnail', 'custom-fields',
//                 'comments'
//             ),
//             'rewrite' => array('slug' => 'ateliers'),
//             'menu_position' => 5,
//             'menu_icon' => 'dashicons-book',
//         )
//     );
// }

// add_action("init", "wpm_custom_post_type", 0);


