<?php

//
// Add Customizer content
//

function panel($wp_customize)
{

    $wp_customize->add_panel('theme_options_panel', array(
        'title' => esc_html__('Theme Options', 'wpb5Translations'),
        'description' => esc_html__('Settings for Bootstrap5FullWidth', 'wpb5Translations'),
        'priority' => 10,
    ));


    //Colors-Font Theme
    $wp_customize->add_section('section_color_theme', array(
        'title' => esc_html__('Themes', 'wpb5Translations'),
        'priority' => 9,
        'panel' => 'theme_options_panel',
    ));

    $wp_customize->add_setting('theme_color_theme_preset', array(
        'default' => 'c_theme_default',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('theme_color_preset', array(
        'label' => esc_html__('Color Theme', 'wpb5Translations'),
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
        'label' => esc_html__('Apply Colors', 'wpb5Translations'),
        'description' => esc_html__('Enable this option to confirm appliquation a theme. Changing theme will override the colors settings.', 'wpb5Translations'),
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
        'label' => esc_html__('Fonts Theme', 'wpb5Translations'),
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
        'label' => esc_html__('Apply Fonts', 'wpb5Translations'),
        'description' => esc_html__('Enable this option to confirm appliquation a theme. Change theme will override the fonts settings.', 'wpb5Translations'),
        'type' => 'checkbox',
        'section' => 'section_color_theme',
        'settings' => 'theme_font_preset_enable',
        'priority' => 20,
    ));


    //Colors
    $wp_customize->add_section('section_color', array(
        'title' => esc_html__('Colors', 'wpb5Translations'),
        'priority' => 10,
        'panel' => 'theme_options_panel',
    ));

    $wp_customize->add_setting('theme_color_1', array(
        'default' => '#292320',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control('theme_color_1', array(
        'label' => esc_html__('Color 1', 'wpb5Translations'),
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
        'label' => esc_html__('Color 2', 'wpb5Translations'),
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
        'label' => esc_html__('Color 3', 'wpb5Translations'),
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
        'label' => esc_html__('Color 4', 'wpb5Translations'),
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
        'label' => esc_html__('Color 5', 'wpb5Translations'),
        'section' => 'section_color',
        'priority' => 10,
        'type' => 'color',
    ));

    $wp_customize->add_setting('theme_color_6', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control('theme_color_6', array(
        'label' => esc_html__('Color 6', 'wpb5Translations'),
        'section' => 'section_color',
        'priority' => 10,
        'type' => 'color',
    ));

    $wp_customize->add_setting('theme_color_invert_enable', array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('theme_color_invert_enable', array(
        'label' => esc_html__('Invert the colors of logos', 'wpb5Translations'),
        'type' => 'checkbox',
        'section' => 'section_color',
        'settings' => 'theme_color_invert_enable',
        'priority' => 10,
    ));


    //Fonts
    $wp_customize->add_section('section_font', array(
        'title' => esc_html__('Fonts', 'wpb5Translations'),
        'priority' => 11,
        'panel' => 'theme_options_panel',
    ));

    $wp_customize->add_setting('theme_font_1', array(
        'default' => 'bebas_neue',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('theme_font_1', array(
        'label' => esc_html__('Text Font', 'wpb5Translations'),
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
        'label' => esc_html__('Title Font', 'wpb5Translations'),
        'section' => 'section_font',
        'priority' => 11,
        'type' => 'select',
        'choices' => array_combine(array_keys(fontList()), array_column(fontList(), 'name'))
    ));


    //Jumbotron
    $wp_customize->add_section('section_jumbotron', array(
        'title' => esc_html__('Jumbotron', 'wpb5Translations'),
        'priority' => 20,
        'panel' => 'theme_options_panel',
    ));

    $wp_customize->add_setting('jumbotron_text_1', array(
        'default' => 'Website Title',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('jumbotron_text_1', array(
        'label' => esc_html__('Text of the main title', 'wpb5Translations'),
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
        'label' => esc_html__('Enable', 'wpb5Translations'),
        'description' => esc_html__('Enable/Disable custom main title', 'wpb5Translations'),
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
        'label' => esc_html__('Subtitle text', 'wpb5Translations'),
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
        'label' => esc_html__('Enable', 'wpb5Translations'),
        'description' => esc_html__('Enable/Disable custom subtitle', 'wpb5Translations'),
        'type' => 'checkbox',
        'section' => 'section_jumbotron',
        'settings' => 'jumbotron_text_2_enable',
        'priority' => 40,
    ));


    //Footer
    $wp_customize->add_section('section_footer', array(
        'title' => esc_html__('Footer', 'wpb5Translations'),
        'priority' => 30,
        'panel' => 'theme_options_panel',
    ));

    $wp_customize->add_setting('footer_copyright', array(
        'default' => 'Copyright',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('footer_text', array(
        'label' => esc_html__('Footer Copyright / Text', 'wpb5Translations'),
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
        'label' => esc_html__('Enable', 'wpb5Translations'),
        'description' => esc_html__('Enable/Disable custom footer text', 'wpb5Translations'),
        'type' => 'checkbox',
        'section' => 'section_footer',
        'settings' => 'footer_enable',
        'priority' => 20,
    ));

    //Contact Modal
    $wp_customize->add_section('section_contact_modal', array(
        'title' => esc_html__('Contact Modal', 'wpb5Translations'),
        'priority' => 30,
        'panel' => 'theme_options_panel',
    ));

    $wp_customize->add_setting('contact_modal_enable', array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('contact_modal_enable', array(
        'label' => esc_html__('Enable', 'wpb5Translations'),
        'description' => esc_html__('Enable/Disable the contact button', 'wpb5Translations'),
        'type' => 'checkbox',
        'section' => 'section_contact_modal',
        'settings' => 'contact_modal_enable',
        'priority' => 10,
    ));

    $wp_customize->add_setting('contact_modal_title', array(
        'default' => 'Contact',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('contact_modal_title', array(
        'label' => esc_html__('Customize the button title', 'wpb5Translations'),
        //'description' => esc_html__('Enable/Disable the contact button', 'wpb5Translations'),
        'type' => 'text',
        'section' => 'section_contact_modal',
        'settings' => 'contact_modal_title',
        'priority' => 15,
    ));

    $wp_customize->add_setting('contact_modal_title_enable', array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('contact_modal_title_enable', array(
        'label' => esc_html__('Enable', 'wpb5Translations'),
        'description' => esc_html__('Enable/Disable the custom contact button Text', 'wpb5Translations'),
        'type' => 'checkbox',
        'section' => 'section_contact_modal',
        'settings' => 'contact_modal_title_enable',
        'priority' => 16,
    ));

    if (is_plugin_active('contact-form-7/wp-contact-form-7.php')) {
        $wp_customize->add_setting('contact_modal_shortcode', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field'
        ));

        $wp_customize->add_control('contact_modal_shortcode', array(
            'label' => esc_html__('Shortcode of the Contact 7 form', 'wpb5Translations'),
            'description' => esc_html__('Please use the template provided in the documentation, otherwise it will not work', 'wpb5Translations'),
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
            'label' => esc_html__('Enable', 'wpb5Translations'),
            'description' => esc_html__("Enable/Disable the ability to use a custom link? (disable the modal)", 'wpb5Translations'),
            'type' => 'checkbox',
            'section' => 'section_contact_modal',
            'settings' => 'contact_modal_link_enable',
            'priority' => 30,
        ));
    }

    $wp_customize->add_setting('contact_modal_link', array(
        'default' => 'https://duckduckgo.com/',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('contact_modal_link', array(
        'label' => esc_html__('Custom link of the Contact button', 'wpb5Translations'),
        'type' => 'text',
        'section' => 'section_contact_modal',
        'settings' => 'contact_modal_link',
        'priority' => 40,
    ));

    //set_theme_mod('theme_color_preset_enable', false);
}

add_action('customize_register', 'panel');


//
//Activer le Custom CSS pour les couleurs 
//
function custom_color_theme($custom_theme)
{
    if (in_array($custom_theme, array_keys(themePresets('colors')))) {
        set_theme_mod('theme_color_1', themePresets('colors')[$custom_theme]['theme_color_1']);
        set_theme_mod('theme_color_2', themePresets('colors')[$custom_theme]['theme_color_2']);
        set_theme_mod('theme_color_3', themePresets('colors')[$custom_theme]['theme_color_3']);
        set_theme_mod('theme_color_4', themePresets('colors')[$custom_theme]['theme_color_4']);
        set_theme_mod('theme_color_5', themePresets('colors')[$custom_theme]['theme_color_5']);
        set_theme_mod('theme_color_6', themePresets('colors')[$custom_theme]['theme_color_6']);
        set_theme_mod('theme_color_invert_enable', themePresets('colors')[$custom_theme]['theme_color_invert_enable']);
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
    if (get_theme_mod('theme_color_6')) {
        echo '--color6: ' . get_theme_mod('theme_color_6') . '; ';
    }
    if (get_theme_mod('theme_color_invert_enable')) {
        echo '--theme_color_invert_enable: invert(1);';
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
