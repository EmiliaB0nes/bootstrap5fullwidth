(function ($) {


    //Application des couleurs
    var colorEnabled = false;
    var colorSelect = false;
    var colorChanged = false;

    var baseColor1 = getComputedStyle(document.documentElement).getPropertyValue('--color1');
    var baseColor2 = getComputedStyle(document.documentElement).getPropertyValue('--color2');
    var baseColor3 = getComputedStyle(document.documentElement).getPropertyValue('--color3');
    var baseColor4 = getComputedStyle(document.documentElement).getPropertyValue('--color4');
    var baseColor5 = getComputedStyle(document.documentElement).getPropertyValue('--color5');
    var baseColor6 = getComputedStyle(document.documentElement).getPropertyValue('--color6');
    var baseColorInvert = getComputedStyle(document.documentElement).getPropertyValue('--theme_color_invert_enable');


    wp.customize('theme_color_preset_enable', function (value) {
        value.bind(function (newval) {
            colorEnabled = newval;
            if (colorEnabled == true) {
                if (colorChanged) {
                    $("body").get(0).style.setProperty("--color1", colorSelect.theme_color_1);
                    $("body").get(0).style.setProperty("--color2", colorSelect.theme_color_2);
                    $("body").get(0).style.setProperty("--color3", colorSelect.theme_color_3);
                    $("body").get(0).style.setProperty("--color4", colorSelect.theme_color_4);
                    $("body").get(0).style.setProperty("--color5", colorSelect.theme_color_5);
                    $("body").get(0).style.setProperty("--color6", colorSelect.theme_color_6);
                    if (colorSelect.theme_color_invert_enable){
                        $("body").get(0).style.setProperty("--theme_color_invert_enable", 'invert(1)');
                    }
                    else{
                        $("body").get(0).style.setProperty("--theme_color_invert_enable", 'invert(0)');
                    }
                }
            }
            else {
                $("body").get(0).style.setProperty("--color1", baseColor1);
                $("body").get(0).style.setProperty("--color2", baseColor2);
                $("body").get(0).style.setProperty("--color3", baseColor3);
                $("body").get(0).style.setProperty("--color4", baseColor4);
                $("body").get(0).style.setProperty("--color5", baseColor5);
                $("body").get(0).style.setProperty("--color6", baseColor6);
                $("body").get(0).style.setProperty("--theme_color_invert_enable", baseColorInvert);
            }
        });
    });

    wp.customize('theme_color_theme_preset', function (value) {
        value.bind(function (newval) {
            colorSelect = customizerGetColorThemes[newval];
            if (colorEnabled == true) {
                $("body").get(0).style.setProperty("--color1", colorSelect.theme_color_1);
                $("body").get(0).style.setProperty("--color2", colorSelect.theme_color_2);
                $("body").get(0).style.setProperty("--color3", colorSelect.theme_color_3);
                $("body").get(0).style.setProperty("--color4", colorSelect.theme_color_4);
                $("body").get(0).style.setProperty("--color5", colorSelect.theme_color_5);
                $("body").get(0).style.setProperty("--color6", colorSelect.theme_color_6);
                if (colorSelect.theme_color_invert_enable){
                    $("body").get(0).style.setProperty("--theme_color_invert_enable", 'invert(1)');
                }
                else{
                    $("body").get(0).style.setProperty("--theme_color_invert_enable", 'invert(0)');
                }
            }
            colorChanged = true;
        });

    });


    //Application des polices
    var fontEnabled = false;
    var fontChanged = false;
    var fontTitle = false;
    var fontText = false;

    var baseFont1 = getComputedStyle(document.documentElement).getPropertyValue('--font1');
    var baseFont2 = getComputedStyle(document.documentElement).getPropertyValue('--font2');

    wp.customize('theme_font_preset_enable', function (value) {
        value.bind(function (newval) {
            fontEnabled = newval;
            if (fontEnabled == true) {
                if (fontChanged) {
                    $("head").append("<link href='" + customizerGetFontsSettings[fontTitle].url + "' rel='stylesheet' type='text/css'>");
                    $("head").append("<link href='" + customizerGetFontsSettings[fontText].url + "' rel='stylesheet' type='text/css'>");

                    $("body").get(0).style.setProperty("--font2", customizerGetFontsSettings[fontTitle].cssName);
                    $("body").get(0).style.setProperty("--font1", customizerGetFontsSettings[fontText].cssName);
                }
            }
            else {
                $("body").get(0).style.setProperty("--font2", baseFont2);
                $("body").get(0).style.setProperty("--font1", baseFont1);
            }
        });
    });

    wp.customize('theme_font_theme_preset', function (value) {
        value.bind(function (newval) {
            fontTitle = customizerGetFontsThemes[newval].theme_font_2;
            fontText = customizerGetFontsThemes[newval].theme_font_1;
            if (fontEnabled == true) {

                $("head").append("<link href='" + customizerGetFontsSettings[fontTitle].url + "' rel='stylesheet' type='text/css'>");
                $("head").append("<link href='" + customizerGetFontsSettings[fontText].url + "' rel='stylesheet' type='text/css'>");

                $("body").get(0).style.setProperty("--font2", customizerGetFontsSettings[fontTitle].cssName);
                $("body").get(0).style.setProperty("--font1", customizerGetFontsSettings[fontText].cssName);
            }
            fontChanged = true;
        });
    });


})(jQuery);