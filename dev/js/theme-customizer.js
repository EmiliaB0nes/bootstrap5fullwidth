jQuery(function () {
    ////Uncheck apply colors theme
    //jQuery( "#_customize-input-theme_color_preset_enable" ).prop( "checked", false );
    ////Uncheck apply fonts theme
    //jQuery( "#_customize-input-theme_font_preset_enable" ).prop( "checked", false );

    //Recharge la page si certains parametres sont check
    if (jQuery('#_customize-input-theme_color_preset_enable').is(':checked')) {
        location.reload();
    }
    if (jQuery('#_customize-input-theme_font_preset_enable').is(':checked')) {
        location.reload();
    }


    //Recharge la page en cas de modification de certains parametres
    //Il faut encore trouver une solution pour cacher le message d'erreur
    jQuery("#save").click(function () {
        if (jQuery('#_customize-input-theme_color_preset_enable').is(':checked')) {
            //location.reload(); 
            window.onbeforeunload = null;
            window.location.reload();
        }
        if (jQuery('#_customize-input-theme_font_preset_enable').is(':checked')) {
            //location.reload(); 
            window.onbeforeunload = null;
            window.location.reload();
        }
    });


});