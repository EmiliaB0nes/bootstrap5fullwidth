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

function load_jquery()
{
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


/**
 * Add our Customizer content
 */
function panel($wp_customize)
{

    $wp_customize->add_panel('theme_options_panel', array(
        'title' => esc_html__('Theme Options'),
        'description' => 'Settings for Bootstrap5FullWidth',
        'priority' => 10,
    ));

    //Colors

    $wp_customize->add_section('section_color', array(
        'title' => esc_html__('Couleurs'),
        'priority' => 10,
        'panel' => 'theme_options_panel',
    ));

    $wp_customize->add_setting('theme_color_1', array(
        'default' => '#292320',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control('theme_color_1', array(
        'label' => esc_html__('Couleur 1'),
        'section' => 'section_color',
        'priority' => 10,
        'type' => 'color',
    ));

    $wp_customize->add_setting('theme_color_2', array(
        'default' => '#487b89',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control('theme_color_2', array(
        'label' => esc_html__('Couleur 2'),
        'section' => 'section_color',
        'priority' => 10,
        'type' => 'color',
    ));

    $wp_customize->add_setting('theme_color_3', array(
        'default' => '#f4d58d',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control('theme_color_3', array(
        'label' => esc_html__('Couleur 3'),
        'section' => 'section_color',
        'priority' => 10,
        'type' => 'color',
    ));

    $wp_customize->add_setting('theme_color_4', array(
        'default' => '#eec190',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control('theme_color_4', array(
        'label' => esc_html__('Couleur 4'),
        'section' => 'section_color',
        'priority' => 10,
        'type' => 'color',
    ));

    $wp_customize->add_setting('theme_color_5', array(
        'default' => '#cc4e1f',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control('theme_color_5', array(
        'label' => esc_html__('Couleur 5'),
        'section' => 'section_color',
        'priority' => 10,
        'type' => 'color',
    ));

    //Jumbotron

    $wp_customize->add_section('section_jumbotron', array(
        'title' => esc_html__('Jumbotron'),
        'priority' => 20,
        'panel' => 'theme_options_panel',
    ));

    $wp_customize->add_setting('jumbotron_text_1', array(
        'default' => 'Website Title',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('jumbotron_text_1', array(
        'label' => esc_html__('Texte du titre principal'),
        'type' => 'text',
        'section' => 'section_jumbotron',
        'settings' => 'jumbotron_text_1',
        'priority' => 10,
    ));

    $wp_customize->add_setting('jumbotron_text_1_enable', array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('jumbotron_text_1_enable', array(
        'label' => esc_html__('Enable'),
        'description' => esc_html__('Activer/Désactiver le titre principal personnalisé'),
        'type' => 'checkbox',
        'section' => 'section_jumbotron',
        'settings' => 'jumbotron_text_1_enable',
        'priority' => 20,
    ));

    $wp_customize->add_setting('jumbotron_text_2', array(
        'default' => 'Website Subtitle',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('jumbotron_text_2', array(
        'label' => esc_html__('Texte du sous-titre'),
        'type' => 'text',
        'section' => 'section_jumbotron',
        'settings' => 'jumbotron_text_2',
        'priority' => 30,
    ));

    $wp_customize->add_setting('jumbotron_text_2_enable', array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('jumbotron_text_2_enable', array(
        'label' => esc_html__('Enable'),
        'description' => esc_html__('Activer/Désactiver le sous-titre personnalisé'),
        'type' => 'checkbox',
        'section' => 'section_jumbotron',
        'settings' => 'jumbotron_text_2_enable',
        'priority' => 40,
    ));


    //Footer

    $wp_customize->add_section('section_footer', array(
        'title' => esc_html__('Footer'),
        'priority' => 30,
        'panel' => 'theme_options_panel',
    ));

    $wp_customize->add_setting('footer_copyright', array(
        'default' => 'Copyright',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('footer_text', array(
        'label' => esc_html__('Copyright / Texte de Pied de page'),
        'type' => 'text',
        'section' => 'section_footer',
        'settings' => 'footer_copyright',
        'priority' => 10,
    ));

    $wp_customize->add_setting('footer_enable', array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('footer_enable', array(
        'label' => esc_html__('Enable'),
        'description' => esc_html__('Activer/Désactiver le texte personnalisé de pied de page'),
        'type' => 'checkbox',
        'section' => 'section_footer',
        'settings' => 'footer_enable',
        'priority' => 20,
    ));

    //Contact Modal
    $wp_customize->add_section('section_contact_modal', array(
        'title' => esc_html__('Contact Modal'),
        'priority' => 30,
        'panel' => 'theme_options_panel',
    ));

    $wp_customize->add_setting('contact_modal_enable', array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('contact_modal_enable', array(
        'label' => esc_html__('Activer'),
        'description' => esc_html__('Activer/Désactiver le bouton de contact'),
        'type' => 'checkbox',
        'section' => 'section_contact_modal',
        'settings' => 'contact_modal_enable',
        'priority' => 10,
    ));

    $wp_customize->add_setting('contact_modal_shortcode', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('contact_modal_shortcode', array(
        'label' => esc_html__('Shortcode du formulaire Contact 7'),
        'description' => esc_html__('Veuillez utiliser le template fourni dans la documentation, sinon il ne fonctionnera pas'),
        'type' => 'text',
        'section' => 'section_contact_modal',
        'settings' => 'contact_modal_shortcode',
        'priority' => 20,
    ));

    $wp_customize->add_setting('contact_modal_link_enable', array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('contact_modal_link_enable', array(
        'label' => esc_html__('Activer'),
        'description' => esc_html__("Activer/Désactiver la possibilité d'utiliser un lien personnalisé (désactive le modal)"),
        'type' => 'checkbox',
        'section' => 'section_contact_modal',
        'settings' => 'contact_modal_link_enable',
        'priority' => 30,
    ));

    $wp_customize->add_setting('contact_modal_link', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('contact_modal_link', array(
        'label' => esc_html__('Lien personnalisé du bouton Contact'),
        'type' => 'text',
        'section' => 'section_contact_modal',
        'settings' => 'contact_modal_link',
        'priority' => 40,
    ));
}
add_action('customize_register', 'panel');

//Activer le Custom CSS pour les couleurs
function custom_css_color_output()
{
    echo '<style type="text/css"> :root{';
    if (get_theme_mod('theme_color_1')) {
        echo '--color1: ' . get_theme_mod('theme_color_1') . '; ';
    }
    if (get_theme_mod('theme_color_2')) {
        echo '--color2: ' . get_theme_mod('theme_color_2') . '; ';
    }
    if (get_theme_mod('theme_color_3')) {
        echo '--color3: ' . get_theme_mod('theme_color_3') . '; ';
    }
    if (get_theme_mod('theme_color_4')) {
        echo '--color4: ' . get_theme_mod('theme_color_4') . '; ';
    }
    if (get_theme_mod('theme_color_5')) {
        echo '--color5: ' . get_theme_mod('theme_color_5') . '; ';
    }
    echo '}</style>';
}

add_action('wp_head', 'custom_css_color_output');
