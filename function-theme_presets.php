<?php
 
//Themes & Fonts settings List

function themePresets($type)
{
    $colorPresets = array(
        'c_theme_default' => array(
            "title" => __('Default Theme'),
            "theme_color_invert_enable" => false,
            "theme_color_1" => '#292320',
            "theme_color_2" => '#487b89',
            "theme_color_3" => '#f4d58d',
            "theme_color_4" => '#eec190',
            "theme_color_5" => '#cc4e1f',
            "theme_color_6" => '#ffffff',
        ),
        'c_theme_fall' => array(
            "title" => __('Fall'),
            "theme_color_invert_enable" => false,
            "theme_color_1" => '#5e4650',
            "theme_color_2" => '#cf5f57',
            "theme_color_3" => '#efc192',
            "theme_color_4" => '#eec190',
            "theme_color_5" => '#cc4e1f',
            "theme_color_6" => '#ffffff',
        ),
        'c_theme_blue' => array(
            "title" => __('Blue'),
            "theme_color_invert_enable" => false,
            "theme_color_1" => '#20232f',
            "theme_color_2" => '#58878d',
            "theme_color_3" => '#c4a596',
            "theme_color_4" => '#f1e3b3',
            "theme_color_5" => '#d2702e',
            "theme_color_6" => '#ffffff',
        ),
        'c_theme_green' => array(
            "title" => __('Green'),
            "theme_color_invert_enable" => false,
            "theme_color_1" => '#34342e',
            "theme_color_2" => '#262726',
            "theme_color_3" => '#d1d19c',
            "theme_color_4" => '#dedcb3',
            "theme_color_5" => '#8cb48d',
            "theme_color_6" => '#ffffff',
        ),
        'c_theme_grey' => array(
            "title" => __('Grey'),
            "theme_color_invert_enable" => false,
            "theme_color_1" => '#3e4245',
            "theme_color_2" => '#756152',
            "theme_color_3" => '#d1c39c',
            "theme_color_4" => '#bebb9f',
            "theme_color_5" => '#b93729',
            "theme_color_6" => '#ffffff',
        ),
        'c_theme_darkGreen' => array(
            "title" => __('Dark Green'),
            "theme_color_invert_enable" => false,
            "theme_color_1" => '#1a1a1d',
            "theme_color_2" => '#679167',
            "theme_color_3" => '#eed96d',
            "theme_color_4" => '#ddb893',
            "theme_color_5" => '#c3073f',
            "theme_color_6" => '#ffffff',
        ),
        'c_theme_purple' => array(
            "title" => __('Purple'),
            "theme_color_invert_enable" => false,
            "theme_color_1" => '#46303b',
            "theme_color_2" => '#705176',
            "theme_color_3" => '#cad6db',
            "theme_color_4" => '#eec190',
            "theme_color_5" => '#3c6986',
            "theme_color_6" => '#ffffff',
        ),
        'c_theme_cowboyDowny' => array(
            "title" => __('Cowboy - Downy'),
            "theme_color_invert_enable" => false,
            "theme_color_1" => '#4f2d30',
            "theme_color_2" => '#65c7b4',
            "theme_color_3" => '#de7b5c',
            "theme_color_4" => '#eec190',
            "theme_color_5" => '#caae84',
            "theme_color_6" => '#ffffff',
        ),
        'c_theme_williamCGreen' => array(
            "title" => __('William - Camouflage Green'),
            "theme_color_invert_enable" => false,
            "theme_color_1" => '#365a62',
            "theme_color_2" => '#79876c',
            "theme_color_3" => '#fcbe46',
            "theme_color_4" => '#eec190',
            "theme_color_5" => '#d43b47',
            "theme_color_6" => '#ffffff',
        ),
        'c_theme_tuataraLeather' => array(
            "title" => __('Tuatara - Leather'),
            "theme_color_invert_enable" => false,
            "theme_color_1" => '#34342e',
            "theme_color_2" => '#91614f',
            "theme_color_3" => '#dd8a3d',
            "theme_color_4" => '#eec190',
            "theme_color_5" => '#b8c8b3',
            "theme_color_6" => '#ffffff',
        ),
        'c_theme_sharkCrownofthorns' => array(
            "title" => __('Shark - Crown of Thorns'),
            "theme_color_invert_enable" => false,
            "theme_color_1" => '#1a1a1d',
            "theme_color_2" => '#6f2232',
            "theme_color_3" => '#ffffff',
            "theme_color_4" => '#eec190',
            "theme_color_5" => '#c3073f',
            "theme_color_6" => '#ffffff',
        ),
        'c_theme_TomthumbFern' => array(
            "title" => __('Tom Thumb - Fern'),
            "theme_color_invert_enable" => false,
            "theme_color_1" => '#2e4533',
            "theme_color_2" => '#6baf5f',
            "theme_color_3" => '#f4d58d',
            "theme_color_4" => '#eec190',
            "theme_color_5" => '#a14e3f',
            "theme_color_6" => '#ffffff',
        ),
        'c_theme_ParchmentPinecone' => array(
            "title" => __('Parchment - Pine Cone'),
            "theme_color_invert_enable" => true,
            "theme_color_1" => '#f0ead2',
            "theme_color_2" => '#6c584c',
            "theme_color_3" => '#000000',
            "theme_color_4" => '#eec190',
            "theme_color_5" => '#adc178',
            "theme_color_6" => '#000000',
        ),
        'c_theme_EbonyclayCodgray' => array(
            "title" => __('Ebony Clay - Cod Gray'),
            "theme_color_invert_enable" => false,
            "theme_color_1" => '#22333b',
            "theme_color_2" => '#0a0908',
            "theme_color_3" => '#f2f4f3',
            "theme_color_4" => '#eec190',
            "theme_color_5" => '#a9927d',
            "theme_color_6" => '#ffffff',
        ),
        'c_theme_AquaforestCopperrust' => array(
            "title" => __('Aqua Forest - Copper Rust'),
            "theme_color_invert_enable" => false,
            "theme_color_1" => '#5a9f7b',
            "theme_color_2" => '#934e54',
            "theme_color_3" => '#f8bd67',
            "theme_color_4" => '#eec190',
            "theme_color_5" => '#b36985',
            "theme_color_6" => '#ffffff',
        ),
    );

    $fontPresets = array(
        'c_theme_fonts_source-bebas' => array(
            "title" => __('Default Theme'),
            "theme_font_1" => 'source_sans_pro',
            "theme_font_2" => 'bebas_neue',
        ),
        'c_theme_fonts_openSans-roboto' => array(
            "title" => __('Open Sans - Roboto'),
            "theme_font_1" => 'roboto',
            "theme_font_2" => 'open_sans',
        ),
        'c_theme_fonts_antonio-anton' => array(
            "title" => __('Antonio - Anton'),
            "theme_font_1" => 'anton',
            "theme_font_2" => 'antonio',
        ),
        'c_theme_fonts_zenDots-roboto' => array(
            "title" => __('Zen Dots - Roboto'),
            "theme_font_1" => 'roboto',
            "theme_font_2" => 'zen_dots',
        ),
        'c_theme_fonts_notoSansJp-roboto' => array(
            "title" => __('Noto Sans JP - Roboto'),
            "theme_font_1" => 'roboto',
            "theme_font_2" => 'noto_sans_jp',
        ),
        'c_theme_fonts_lato-roboto' => array(
            "title" => __('Lato - Roboto'),
            "theme_font_1" => 'roboto',
            "theme_font_2" => 'lato',
        ),
        
    );

    switch ($type) {
        case "colors":
            $selectedPreset = $colorPresets;
            break;
        case "fonts":
            $selectedPreset = $fontPresets;
            break;
    }

    return $selectedPreset;
}
