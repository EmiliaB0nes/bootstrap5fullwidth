jQuery(function () {
    ////Uncheck apply colors theme
    //jQuery( "#_customize-input-theme_color_preset_enable" ).prop( "checked", false );
    ////Uncheck apply fonts theme
    //jQuery( "#_customize-input-theme_font_preset_enable" ).prop( "checked", false );

    //Recharge la page si certains parametres sont check
    if (jQuery('#_customize-input-theme_color_preset_enable').is(':checked')) {
        setTimeout(function(){ location.reload(); }, 1000);
    }
    if (jQuery('#_customize-input-theme_font_preset_enable').is(':checked')) {
        setTimeout(function(){ location.reload(); }, 1000);
    }


    //Recharge la page en cas de modification de certains parametres
    //Il faut encore remplacer la fonction click car elle est dépressiée
    jQuery("#save").click(function () {
        if (jQuery('#_customize-input-theme_color_preset_enable').is(':checked')) {
            setTimeout(function(){ location.reload(); }, 2000);
            //location.reload();
        }
        if (jQuery('#_customize-input-theme_font_preset_enable').is(':checked')) {
            //location.reload(); 
            setTimeout(function(){ location.reload(); }, 2000);
        }
    });


});