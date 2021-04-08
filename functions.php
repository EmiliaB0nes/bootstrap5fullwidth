<?php
// Ajout du support des thumbnails
add_theme_support('post-thumbnails');


// Ajout du menu éditable
register_nav_menus(
    array(
        'menu-principal' => __('Main menu')
    )
);


//Ajout De jQuery

function load_jquery(){
    //Load scripts:
    wp_enqueue_script('jquery'); # Loading the WordPress bundled jQuery version.
    //may add more scripts to load like jquery-ui
}
add_action('wp_enqueue_scripts', 'load_jquery');

// Menu de personalisation du theme selon l'exemple suivant :
// https://www.sitepoint.com/create-a-wordpress-theme-settings-page-with-the-settings-api/

function theme_settings_page()
{
?>
    <div class="wrap">
        <h1>Theme Panel</h1>
        <form method="post" action="options.php" enctype=”multipart/form-data”>
            <?php
            settings_fields("section_footer");
            do_settings_sections("theme-options");
            submit_button();
            ?>
        </form>
    </div>
<?php
}

function add_theme_menu_item()
{
    add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

function display_footer_copyright_element()
{
?>
    <input type="text" name="footer_copyright" id="footer_copyright" value="<?php echo get_option('footer_copyright'); ?>" /></br>
<?php
}

function display_theme_panel_fields()
{
    add_settings_section("section_footer", "Pied de page", null, "theme-options");
    add_settings_field('copyright', 'Copyright', 'options_callback', 'theme-options', 'section_footer');
    add_settings_field("footer_copyright", "Personaliser le champ de copyright", "display_footer_copyright_element", "theme-options", "section_footer");

    register_setting("section_footer", "footer_copyright");
}

add_action("admin_init", "display_theme_panel_fields");
add_action("admin_menu", "add_theme_menu_item");

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
