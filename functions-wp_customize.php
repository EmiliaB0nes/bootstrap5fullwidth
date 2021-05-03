<?php

//
// Add Customizer content
//

function panel($wp_customize)
{

    $wp_customize->add_panel('theme_options_panel', array(
        'title' => esc_html__('Theme Options'),
        'description' => 'Settings for Bootstrap5FullWidth',
        'priority' => 10,
    ));


    //Colors-Font Theme
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
        'description' => esc_html__('Activer cette option pour confirmer l\'appliquation d\'un thème. Changer de thème remplacera les paramètres de couleurs.'),
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
        'description' => esc_html__('Activer cette option pour confirmer l\'appliquation d\'un thème. Changer de thème remplacera les anciens paramètres de polices.'),
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
        'label' => esc_html__('Police Texte'),
        'section' => 'section_font',
        'priority' => 12,
        'type' => 'select',
        'choices' => array_combine(array_keys(fontList()), array_column(fontList(), 'name'))
    ));

    $wp_customize->add_setting('theme_font_2', array(
        'default' => 'source_sans_pro',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('theme_font_2', array(
        'label' => esc_html__('Police Titre'),
        'section' => 'section_font',
        'priority' => 11,
        'type' => 'select',
        'choices' => array_combine(array_keys(fontList()), array_column(fontList(), 'name'))
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
    
    if (is_plugin_active('contact-form-7/wp-contact-form-7.php')) {
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
    }

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
    if (in_array($custom_theme, array_keys(themePresets('colors')))) {
        set_theme_mod('theme_color_1', themePresets('colors')[$custom_theme]['theme_color_1']);
        set_theme_mod('theme_color_2', themePresets('colors')[$custom_theme]['theme_color_2']);
        set_theme_mod('theme_color_3', themePresets('colors')[$custom_theme]['theme_color_3']);
        set_theme_mod('theme_color_4', themePresets('colors')[$custom_theme]['theme_color_4']);
        set_theme_mod('theme_color_5', themePresets('colors')[$custom_theme]['theme_color_5']);
    }
}


//
//Activer le Custom CSS pour les fonts
//
function custom_font_theme($custom_theme)
{
    if (in_array($custom_theme, array_keys(themePresets('fonts')))) {
        set_theme_mod('theme_font_1', themePresets('fonts')[$custom_theme]['theme_font_1']);
        set_theme_mod('theme_font_2', themePresets('fonts')[$custom_theme]['theme_font_2']);
    }
}


function font_parser($theme_mod_font)
{
    if (in_array($theme_mod_font, array_keys(fontList()))) {
        $fontName = fontList()[$theme_mod_font]['cssName'];
        $fontURL = fontList()[$theme_mod_font]['url'];
    }

    return array(
        "fontName" => $fontName,
        "fontURL" => $fontURL
    );
}
add_action('wp_head', 'custom_css_font_output');


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


//
//Script javascript pour l'affichage de certaines modifications en live
//
function bootstrap5fullwidth_customizer_js_datas()
{

?>
    <script type="text/javascript">
        var customizerGetFontsSettings = <?php echo json_encode(fontList()); ?>;
        var customizerGetColorThemes = <?php echo json_encode(themePresets('colors')); ?>;
        var customizerGetFontsThemes = <?php echo json_encode(themePresets('fonts')); ?>;
    </script>
<?php
}
//add_action('customize_controls_enqueue_scripts', 'bootstrap5fullwidth_customizer_js_datas');
add_action('customize_preview_init', 'bootstrap5fullwidth_customizer_js_datas');


//
//Script javascript pour l'administration de wp_customize
//
function bootstrap5fullwidth_customizer_admin_js()
{
    wp_enqueue_script(
        'bootstrap5fullwidth-theme-customizer-admin',            //Give the script an ID
        get_template_directory_uri() . '/js/theme-customizer-admin.min.js', //Point to file
        array('jquery', 'customize-preview'),    //Define dependencies
        '0.' . rand(1, 99),                    //Define a version to force reloading script
        true                        //Put script in footer?
    );
}
// add_action('customize_controls_enqueue_scripts', 'bootstrap5fullwidth_customizer_admin_js');
add_action('customize_controls_enqueue_scripts', 'bootstrap5fullwidth_customizer_admin_js');


function bootstrap5fullwidth_customizer_js()
{
    wp_enqueue_script(
        'bootstrap5fullwidth-theme-customizer',            //Give the script an ID
        get_template_directory_uri() . '/js/theme-customizer.min.js', //Point to file
        array('jquery', 'customize-preview'),    //Define dependencies
        rand(1, 1000000),                        //Define a version to force reloading script
        false                        //Put script in footer?
    );
}
add_action('customize_preview_init', 'bootstrap5fullwidth_customizer_js');
