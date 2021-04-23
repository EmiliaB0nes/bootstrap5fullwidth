<?php

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


    //Colors/Font Theme
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

    // $wp_customize->add_control('theme_color_preset', array(
    //     'label' => esc_html__('Theme de couleurs'),
    //     'section' => 'section_color_theme',
    //     'priority' => 8,
    //     'type' => 'select',
    //     'settings' => 'theme_color_theme_preset',
    //     'choices' => array(
    //         'c_theme_default' => __('Default Theme'),
    //         'c_theme_fall' => __('Fall'),
    //         'c_theme_blue' => __('Blue'),
    //         'c_theme_green' => __('Green'),
    //         'c_theme_grey' => __('Grey'),
    //         'c_theme_darkGreen' => __('Dark Green'),
    //         'c_theme_purple' => __('Purple'),
    //         'c_theme_cowboyDowny' => __('Cowboy - Downy'),
    //         'c_theme_williamCGreen' => __('William - Camouflage Green'),
    //         'c_theme_tuataraLeather' => __('Tuatara - Leather'),
    //     )
    // ));

    $wp_customize->add_control('theme_color_preset', array(
        'label' => esc_html__('Theme de couleurs'),
        'section' => 'section_color_theme',
        'priority' => 8,
        'type' => 'select',
        'settings' => 'theme_color_theme_preset',
        'choices' => array_combine(array_keys(themePresets('colors')), array_column(themePresets('colors'), 'title'))
    ));

    $wp_customize->add_setting('theme_color_preset_enable', array(
        'default' => 0,
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('theme_color_preset_enable', array(
        'label' => esc_html__('Appliquer les Couleurs'),
        'description' => esc_html__('Activer cette option pour appliquer un thème. Changer de thème remplacera les paramètres de couleurs.'),
        'type' => 'checkbox',
        'section' => 'section_color_theme',
        'settings' => 'theme_color_preset_enable',
        'priority' => 9,
    ));

    $wp_customize->add_setting('theme_font_theme_preset', array(
        'default' => 'c_theme_fonts_source-bebas',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('theme_font_preset', array(
        'label' => esc_html__('Theme de polices'),
        'section' => 'section_color_theme',
        'priority' => 15,
        'type' => 'select',
        'settings' => 'theme_font_theme_preset',
        'choices' => array_combine(array_keys(themePresets('fonts')), array_column(themePresets('fonts'), 'title'))
    ));

    $wp_customize->add_setting('theme_font_preset_enable', array(
        'default' => 0,
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('theme_font_preset_enable', array(
        'label' => esc_html__('Appliquer les Polices'),
        'description' => esc_html__('Activer cette option pour appliquer un thème. Changer de thème remplacera les anciens paramètres de polices.'),
        'type' => 'checkbox',
        'section' => 'section_color_theme',
        'settings' => 'theme_font_preset_enable',
        'priority' => 20,
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
        'montserrat' => __('Montserrat'),
        'anton' => __('Anton'),
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
        'priority' => 10,
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
        case "c_theme_blue":
            set_theme_mod('theme_color_1', '#20232f');
            set_theme_mod('theme_color_2', '#58878d');
            set_theme_mod('theme_color_3', '#c4a596');
            set_theme_mod('theme_color_4', '#f1e3b3');
            set_theme_mod('theme_color_5', '#d2702e');
            break;
        case "c_theme_green":
            set_theme_mod('theme_color_1', '#34342e');
            set_theme_mod('theme_color_2', '#262726');
            set_theme_mod('theme_color_3', '#d1d19c');
            set_theme_mod('theme_color_4', '#dedcb3');
            set_theme_mod('theme_color_5', '#8cb48d');
            break;
        case "c_theme_grey":
            set_theme_mod('theme_color_1', '#3e4245');
            set_theme_mod('theme_color_2', '#756152');
            set_theme_mod('theme_color_3', '#d1c39c');
            set_theme_mod('theme_color_4', '#bebb9f');
            set_theme_mod('theme_color_5', '#b93729');
            break;
        case "c_theme_darkGreen":
            set_theme_mod('theme_color_1', '#1a1a1d');
            set_theme_mod('theme_color_2', '#679167');
            set_theme_mod('theme_color_3', '#eed96d');
            set_theme_mod('theme_color_4', '#ddb893');
            set_theme_mod('theme_color_5', '#c3073f');
            break;
        case "c_theme_purple":
            set_theme_mod('theme_color_1', '#46303b');
            set_theme_mod('theme_color_2', '#705176');
            set_theme_mod('theme_color_3', '#cad6db');
            set_theme_mod('theme_color_4', '#eec190');
            set_theme_mod('theme_color_5', '#3c6986');
            break;
        case "c_theme_cowboyDowny":
            set_theme_mod('theme_color_1', '#4f2d30');
            set_theme_mod('theme_color_2', '#65c7b4');
            set_theme_mod('theme_color_3', '#de7b5c');
            set_theme_mod('theme_color_4', '#eec190');
            set_theme_mod('theme_color_5', '#caae84');
            break;
        case "c_theme_williamCGreen":
            set_theme_mod('theme_color_1', '#365a62');
            set_theme_mod('theme_color_2', '#79876c');
            set_theme_mod('theme_color_3', '#fcbe46');
            set_theme_mod('theme_color_4', '#eec190');
            set_theme_mod('theme_color_5', '#d43b47');
            break;
        case "c_theme_tuataraLeather":
            set_theme_mod('theme_color_1', '#34342e');
            set_theme_mod('theme_color_2', '#91614f');
            set_theme_mod('theme_color_3', '#dd8a3d');
            set_theme_mod('theme_color_4', '#eec190');
            set_theme_mod('theme_color_5', '#b8c8b3');
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

add_action('wp_head', 'custom_css_color_output');


//
//Activer le Custom CSS pour les fonts
//
function custom_font_theme($custom_theme)
{
    switch ($custom_theme) {
        case "c_theme_fonts_source-bebas":
            set_theme_mod('theme_font_1', 'source_sans_pro');
            set_theme_mod('theme_font_2', 'bebas_neue');
            break;
        case "c_theme_fonts_openSans-roboto":
            set_theme_mod('theme_font_1', 'roboto');
            set_theme_mod('theme_font_2', 'open_sans');
            break;
        case "c_theme_fonts_antonio-anton":
            set_theme_mod('theme_font_1', 'anton');
            set_theme_mod('theme_font_2', 'antonio');
            break;
        case "c_theme_fonts_zenDots-roboto":
            set_theme_mod('theme_font_1', 'roboto');
            set_theme_mod('theme_font_2', 'zen_dots');
            break;
        case "c_theme_fonts_notoSansJp-roboto":
            set_theme_mod('theme_font_1', 'roboto');
            set_theme_mod('theme_font_2', 'noto_sans_jp');
            break;
        case "c_theme_fonts_lato-roboto":
            set_theme_mod('theme_font_1', 'roboto');
            set_theme_mod('theme_font_2', 'lato');
            break;
    }
}

function custom_css_font_output()
{

    if ((get_theme_mod('theme_font_preset_enable') == true) && get_theme_mod('theme_font_theme_preset')) {
        custom_font_theme(get_theme_mod('theme_font_theme_preset'));
        set_theme_mod('theme_font_preset_enable', false);
    }

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
        case "anton":
            $fontName = "'Anton', sans-serif";
            $fontURL = "https://fonts.googleapis.com/css2?family=Anton&display=swap";
            break;
    }

    return array(
        "fontName" => $fontName,
        "fontURL" => $fontURL
    );
}
add_action('wp_head', 'custom_css_font_output');


//
//Script javascript pour l'affichage de certaines modifications en live
//
function bootstrap5fullwidth_customizer_js_datas()
{
    $myData = [
        'presetColors' => 'test',
        'presetFonts' => 'unbfont',
    ];
?>
    <script>
        var jsonContent = '<?= json_encode($myData, JSON_UNESCAPED_SLASHES); ?>';
        <?php //var_dump(array_column(themeColorsPresets(), 'title'));
    //echo('test4324432'); ?>
    </script>
<?php
    
}
add_action('customize_preview_init', 'bootstrap5fullwidth_customizer_js_datas');

function bootstrap5fullwidth_customizer_js()
{
    wp_enqueue_script(
        'bootstrap5fullwidth-theme-customizer',            //Give the script an ID
        get_template_directory_uri() . '/js/theme-customizer.min.js', //Point to file
        array('jquery', 'customize-preview'),    //Define dependencies
        '0.4',                        //Define a version (optional) 
        true                        //Put script in footer?
    );
}
add_action('customize_preview_init', 'bootstrap5fullwidth_customizer_js');


//
//Script javascript pour l'administration de wp_customize
//
function bootstrap5fullwidth_customizer_admin_js()
{
    wp_enqueue_script(
        'bootstrap5fullwidth-theme-customizer-admin',            //Give the script an ID
        get_template_directory_uri() . '/js/theme-customizer-admin.min.js', //Point to file
        array('jquery', 'customize-preview'),    //Define dependencies
        '0.17',                    //Define a version (optional) 
        true                        //Put script in footer?
    );
}

add_action('customize_controls_enqueue_scripts', 'bootstrap5fullwidth_customizer_admin_js');

