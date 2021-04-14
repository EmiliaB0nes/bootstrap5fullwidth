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
        'title' => 'Theme Options',
        'description' => 'Settings for Bootstrap5FullWidth',
        'priority' => 10,
    ));

    //Jumbotron

    $wp_customize->add_section('section_jumbotron', array(
        'title' => 'Jumbotron',
        'priority' => 20,
        'panel' => 'theme_options_panel',
    ));

    $wp_customize->add_setting('jumbotron_text_1', array(
        'default' => 'Website Title',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('jumbotron_text_1', array(
        'label' => 'Texte du titre principal',
        'type' => 'text',
        'section' => 'section_jumbotron',
        'settings' => 'jumbotron_text_1',
        'priority' => 10,
    ));

    $wp_customize->add_setting('jumbotron_text_1_enable', array(
        'default' => 0,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('jumbotron_text_1_enable', array(
        'label' => 'Enable',
        'description' => esc_html__( 'Activer/Désactiver le titre principal personnalisé' ),
        'type' => 'checkbox',
        'section' => 'section_jumbotron',
        'settings' => 'jumbotron_text_1_enable',
        'priority' => 20,
    ));

    $wp_customize->add_setting('jumbotron_text_2', array(
        'default' => 'Website Subtitle',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('jumbotron_text_2', array(
        'label' => 'Texte du sous-titre',
        'type' => 'text',
        'section' => 'section_jumbotron',
        'settings' => 'jumbotron_text_2',
        'priority' => 30,
    ));

    $wp_customize->add_setting('jumbotron_text_2_enable', array(
        'default' => 0,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('jumbotron_text_2_enable', array(
        'label' => 'Enable',
        'description' => esc_html__( 'Activer/Désactiver le sous-titre personnalisé' ),
        'type' => 'checkbox',
        'section' => 'section_jumbotron',
        'settings' => 'jumbotron_text_2_enable',
        'priority' => 40,
    ));


    //Footer

    $wp_customize->add_section('section_footer', array(
        'title' => 'Footer',
        'priority' => 30,
        'panel' => 'theme_options_panel',
    ));

    $wp_customize->add_setting('footer_copyright', array(
        'default' => 'Copyright',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_text', array(
        'label' => 'Copyright / Texte de Pied de page',
        'type' => 'text',
        'section' => 'section_footer',
        'settings' => 'footer_copyright',
        'priority' => 10,
    ));

    $wp_customize->add_setting('footer_enable', array(
        'default' => 0,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_enable', array(
        'label' => 'Enable',
        'description' => esc_html__( 'Activer/Désactiver le texte personnalisé de pied de page' ),
        'type' => 'checkbox',
        'section' => 'section_footer',
        'settings' => 'footer_enable',
        'priority' => 20,
    ));

    //Contact Modal
    $wp_customize->add_section('section_contact_modal', array(
        'title' => 'Contact Modal',
        'priority' => 30,
        'panel' => 'theme_options_panel',
    ));

    $wp_customize->add_setting('contact_modal_enable', array(
        'default' => 1,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('contact_modal_enable', array(
        'label' => 'Activer',
        'description' => esc_html__( 'Activer/Désactiver le bouton de contact' ),
        'type' => 'checkbox',
        'section' => 'section_contact_modal',
        'settings' => 'contact_modal_enable',
        'priority' => 10,
    ));

    $wp_customize->add_setting('contact_modal_shortcode', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('contact_modal_shortcode', array(
        'label' => 'Shortcode du formulaire Contact 7',
        'description' => esc_html__( 'Veuillez utiliser le template fourni dans la documentation, sinon il ne fonctionnera pas' ),
        'type' => 'text',
        'section' => 'section_contact_modal',
        'settings' => 'contact_modal_shortcode',
        'priority' => 20,
    ));

    $wp_customize->add_setting('contact_modal_link_enable', array(
        'default' => 0,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('contact_modal_link_enable', array(
        'label' => 'Activer',
        'description' => esc_html__( "Activer/Désactiver la possibilité d'utiliser un lien personnalisé (désactive le modal)" ),
        'type' => 'checkbox',
        'section' => 'section_contact_modal',
        'settings' => 'contact_modal_link_enable',
        'priority' => 30,
    ));

    $wp_customize->add_setting('contact_modal_link', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('contact_modal_link', array(
        'label' => 'Lien personnalisé du bouton Contact',
        'type' => 'text',
        'section' => 'section_contact_modal',
        'settings' => 'contact_modal_link',
        'priority' => 40,
    ));
    

}
add_action('customize_register', 'panel');
