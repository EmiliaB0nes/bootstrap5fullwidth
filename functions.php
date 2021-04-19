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

    //Colors Theme

    $wp_customize->add_section('section_color_theme', array(
        'title' => esc_html__('Themes'),
        'priority' => 9,
        'panel' => 'theme_options_panel',
    ));

    $wp_customize->add_setting('theme_color_theme_preset', array(
        'default' => 'c_theme_default',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('theme_color_preset', array(
        'label' => esc_html__('Theme'),
        'section' => 'section_color_theme',
        'priority' => 8,
        'type' => 'select',
        'settings' => 'theme_color_theme_preset',
        'choices' => array(
            'c_theme_default' => __('Default Theme'),
            'c_theme_fall' => __('Fall'),
            'c_theme_2' => __('Theme 2'),
        )
    ));

    $wp_customize->add_setting('theme_color_preset_enable', array(
        'default' => 0,
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('theme_color_preset_enable', array(
        'label' => esc_html__('Appliquer le Theme'),
        'description' => esc_html__('Activer cette option pour appliquer un theme. Il est ensuite recommandé de recharger complétement la page pour voir les modifications. Changer de theme remplacera les parametres de couleurs personnalisées'),
        'type' => 'checkbox',
        'section' => 'section_color_theme',
        'settings' => 'theme_color_preset_enable',
        'priority' => 9,
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


    //Fonts

    //Simple liste de fonts
    $fontList = array(
        'bebas_neue' => __('Bebas Neue'),
        'source_sans_pro' => __('Source Sans Pro'),
        'roboto' => __('Roboto'),
        'antonio' => __('Antonio'),
        'zen_dots' => __('Zen Dots'),
        'open_sans' => __('Open Sans'),
        'karantina' => __('Karantina'),
        'noto_sans_jp' => __('Noto Sans JP'),
        'lato' => __('Lato'),
        'montserrat' => __('Montserrat')
    );

    $wp_customize->add_section('section_font', array(
        'title' => esc_html__('Polices'),
        'priority' => 11,
        'panel' => 'theme_options_panel',
    ));

    $wp_customize->add_setting('theme_font_1', array(
        'default' => 'bebas_neue',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('theme_font_1', array(
        'label' => esc_html__('Police primaire'),
        'section' => 'section_font',
        'priority' => 11,
        'type' => 'select',
        'choices' => $fontList
    ));

    $wp_customize->add_setting('theme_font_2', array(
        'default' => 'source_sans_pro',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('theme_font_2', array(
        'label' => esc_html__('Police secondaire'),
        'section' => 'section_font',
        'priority' => 10,
        'type' => 'select',
        'choices' => $fontList
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

    //set_theme_mod('theme_color_preset_enable', false);
}

add_action('customize_register', 'panel');

//
//Activer le Custom CSS pour les couleurs (Fonctionne partiellement)
//

function custom_color_theme($custom_theme)
{
    switch ($custom_theme) {
        case "c_theme_default":
            set_theme_mod('theme_color_1', '#292320');
            set_theme_mod('theme_color_2', '#487b89');
            set_theme_mod('theme_color_3', '#f4d58d');
            set_theme_mod('theme_color_4', '#eec190');
            set_theme_mod('theme_color_5', '#cc4e1f');
            break;
        case "c_theme_fall":
            set_theme_mod('theme_color_1', '#5e4650');
            set_theme_mod('theme_color_2', '#cf5f57');
            set_theme_mod('theme_color_3', '#efc192');
            set_theme_mod('theme_color_4', '#eec190');
            set_theme_mod('theme_color_5', '#cc4e1f');
            break;
        case "c_theme_2":
            set_theme_mod('theme_color_1', '#463f42');
            set_theme_mod('theme_color_2', '#444443');
            set_theme_mod('theme_color_3', '#de7b5c');
            set_theme_mod('theme_color_4', '#f0c28e');
            set_theme_mod('theme_color_5', '#8ed8bb');
            break;
    }
}

function custom_css_color_output()
{


    if ((get_theme_mod('theme_color_preset_enable') == true) && get_theme_mod('theme_color_preset')) {
        custom_color_theme(get_theme_mod('theme_color_theme_preset'));
        //Ne fonctionne pas correctement au niveau de l'affichage, nécessite 2 rechargements pour être appliqué       
        set_theme_mod('theme_color_preset_enable', false);
    }

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

//if (get_theme_mod('theme_color_preset_enable') == true) {
//    set_theme_mod('theme_color_preset_enable', false);
//}

add_action('wp_head', 'custom_css_color_output');


//
//Activer le Custom CSS pour les fonts
//
function custom_css_font_output()
{
    echo '<style type="text/css"> ';
    if (get_theme_mod('theme_font_1')) {
        echo '@import url("' . font_parser(get_theme_mod('theme_font_1'))['fontURL'] . '"); ';
    }
    if (get_theme_mod('theme_font_2')) {
        echo '@import url("' . font_parser(get_theme_mod('theme_font_2'))['fontURL'] . '"); ';
    }
    echo ':root{';
    if (get_theme_mod('theme_font_1')) {
        echo '--font1: ' . font_parser(get_theme_mod('theme_font_1'))['fontName'] . '; ';
    }
    if (get_theme_mod('theme_font_2')) {
        echo '--font2: ' . font_parser(get_theme_mod('theme_font_2'))['fontName'] . '; ';
    }
    echo '}</style>';
}

function font_parser($theme_mod_font)
{
    switch ($theme_mod_font) {
        case "bebas_neue":
            $fontName = "'Bebas Neue', cursive ";
            $fontURL = "https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap";
            break;
        case "source_sans_pro":
            $fontName = "'Source Sans Pro', sans-serif";
            $fontURL = "https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap";
            break;
        case "roboto":
            $fontName = "'Roboto', sans-serif";
            $fontURL = "https://fonts.googleapis.com/css2?family=Roboto&display=swap";
            break;
        case "antonio":
            $fontName = "'Antonio', sans-serif";
            $fontURL = "https://fonts.googleapis.com/css2?family=Antonio&display=swap";
            break;
        case "zen_dots":
            $fontName = "'Zen Dots', cursive";
            $fontURL = "https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap";
            break;
        case "open_sans":
            $fontName = "'Open Sans', sans-serif";
            $fontURL = "https://fonts.googleapis.com/css2?family=Open+Sans&display=swap";
            break;
        case "karantina":
            $fontName = "'Karantina', cursive";
            $fontURL = "https://fonts.googleapis.com/css2?family=Karantina&display=swap";
            break;
        case "noto_sans_jp":
            $fontName = "'Noto Sans JP', sans-serif";
            $fontURL = "https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap";
            break;
        case "lato":
            $fontName = "'Lato', sans-serif";
            $fontURL = "https://fonts.googleapis.com/css2?family=Lato&display=swap";
            break;
        case "montserrat":
            $fontName = "'Montserrat', sans-serif";
            $fontURL = "https://fonts.googleapis.com/css2?family=Montserrat&display=swap";
            break;
    }

    return array(
        "fontName" => $fontName,
        "fontURL" => $fontURL
    );
}


add_action('wp_head', 'custom_css_font_output');
