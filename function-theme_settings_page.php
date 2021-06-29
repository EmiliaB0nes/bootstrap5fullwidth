<?php

// Not used anymore

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



