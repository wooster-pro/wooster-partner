<?php
class Wooster_Settings_Plugin
{
    /**
     * Construct the plugin object
     */
    public function __construct()
    {
        // Hook into the admin menu
        add_action('admin_menu', array($this, 'wooster_admin_menu_pages'));
        // add_action('admin_menu', array($this, 'wooster_create_plugin_sub_settings_page_badge'));
        // add_action('admin_menu', array($this, 'wooster_create_plugin_sub_settings_page_visuel'));
        add_action('admin_init', array($this, 'wooster_setup_sections_authentification_page'));
        add_action('admin_init', array($this, 'wooster_setup_authentification_fields'));
    }

    public function wooster_admin_menu_pages()
    {
        $callback_authentification = array($this, 'wooster_callback_authentification');
        $callback_badges = array($this, 'wooster_callback_badges');
        $callback_visuels = array($this, 'wooster_callback_visuels');

        add_menu_page('Partenariat Wooster', 'Wooster', 'manage_options', 'wooster-partenariat', '', 'dashicons-awards', 100);
        add_submenu_page(
            'wooster-partenariat',
            'Authentification',
            'Authentification',
            'manage_options',
            'wooster-partenariat',
            $callback_authentification
        );
        if (get_option('partner_license') && get_option('partner_license') != '') {
            add_submenu_page(
                'wooster-partenariat',
                'Badges',
                'Badges',
                'manage_options',
                'wooster-badges',
                $callback_badges
            );
            add_submenu_page(
                'wooster-partenariat',
                'Visuels',
                'Visuels',
                'manage_options',
                'wooster-visuels',
                $callback_visuels
            );
        }
    }

    public function wooster_callback_authentification()
    {
?>
        <div class="wrap">
            <h1><?= __('Partenariat Wooster', 'wooster-partner') ?></h1>
            <nav class="nav-tab-wrapper">
                <a href="<?= admin_url() ?>admin.php?page=wooster-partenariat" class="nav-tab nav-tab-active"><?= __('Authentifcation', 'wooster-partner') ?></a>
                <?php if (get_option('partner_license') && get_option('partner_license') != '') { ?>
                    <a href="<?= admin_url() ?>admin.php?page=wooster-badges" class="nav-tab"><?= __('Badges', 'wooster-partner') ?></a>
                    <a href="<?= admin_url() ?>admin.php?page=wooster-visuels" class="nav-tab"><?= __('Visuels', 'wooster-partner') ?></a>
                    <a href="#TB_inline?width=600&amp;height=600&amp;inlineId=modal-chatbot" class="thickbox button" style="float: right"><?= __('Demander un service', 'wooster-partner') ?></a>
                <?php } ?>
            </nav>

            <div class="tab-content">
                <form method="post" action="options.php">
                    <?php
                    // Outputs nonce, action, and option_page fields for a settings page.
                    settings_fields('wooster-authentification-field-group');
                    // Prints out all settings sections added to a particular settings page.
                    do_settings_sections('wooster-partenariat');
                    submit_button();
                    ?>
                </form>
            </div>
        </div>
    <?php
    }

    public function wooster_callback_badges()
    {
    ?>
        <div class="wrap">
            <h1><?= __('Partenariat Wooster', 'wooster-partner') ?></h1>
            <nav class="nav-tab-wrapper">
                <a href="<?= admin_url() ?>admin.php?page=wooster-partenariat" class="nav-tab"><?= __('Authentifcation', 'wooster-partner') ?></a>
                <a href="<?= admin_url() ?>admin.php?page=wooster-badges" class="nav-tab nav-tab-active"><?= __('Badges', 'wooster-partner') ?></a>
                <a href="<?= admin_url() ?>admin.php?page=wooster-visuels" class="nav-tab"><?= __('Visuels', 'wooster-partner') ?></a>
                <a href="#TB_inline?width=600&amp;height=600&amp;inlineId=modal-chatbot" class="thickbox button" style="float: right"><?= __('Demander un service', 'wooster-partner') ?></a>
            </nav>

            <div class="tab-content">
                <h2><?= __('Badges', 'wooster-partner') ?></h2>
                <?php
                if (get_option('partner_license') && get_option('partner_license') != '') {
                    $certificate = '#528085301-122301';
                } else {
                    $certificate = '#XXXXXXXXX-XXXXXX';
                }
                echo show_badge($certificate);
                ?>
            </div>
        </div>
    <?php
    }

    public function wooster_callback_visuels()
    {
    ?>
        <div class="wrap">
            <h1><?= __('Partenariat Wooster', 'wooster-partner') ?></h1>
            <nav class="nav-tab-wrapper">
                <a href="<?= admin_url() ?>admin.php?page=wooster-partenariat" class="nav-tab"><?= __('Authentifcation', 'wooster-partner') ?></a>
                <a href="<?= admin_url() ?>admin.php?page=wooster-badges" class="nav-tab"><?= __('Badges', 'wooster-partner') ?></a>
                <a href="<?= admin_url() ?>admin.php?page=wooster-visuels" class="nav-tab nav-tab-active"><?= __('Visuels', 'wooster-partner') ?></a>
                <a href="#TB_inline?width=600&amp;height=600&amp;inlineId=modal-chatbot" class="thickbox button" style="float: right"><?= __('Demander un service', 'wooster-partner') ?></a>
            </nav>

            <div class="tab-content">
                <h2><?= __('Logo Wooster', 'wooster-partner') ?></h2>
                <?php
                echo show_visuels();
                ?>
            </div>
        </div>
<?php
    }

    /**
     * Sets up the admin sections of all plugin pages.
     */
    public function wooster_setup_sections_authentification_page()
    {
        // Add a new section to a settings page.
        add_settings_section('licence_section', __('Authentification du certificat', 'wooster-partner'), array($this, 'wooster_sections_authentification_callback'), 'wooster-partenariat', array());
        // add_settings_section('primary_badge_section', __('Intégration du badge officiel', 'wooster-partner'), array($this, 'section_descriptions_callback'), 'wooster-badges');
        // add_settings_section('secondary_badge_section', __('Intégration des badges secondaires', 'wooster-partner'), array($this, 'section_descriptions_callback'), 'wooster-badges');
    }

    /**
     * Callback function to add the content of each section.
     *
     * @param array $arguments The arguments passed to the section. For exemple, $arguments['id'] = 'licence_section'.
     * @return void
     */
    public function wooster_sections_authentification_callback($arguments)
    {
        switch ($arguments['id']) {
            case 'licence_section':
                echo '<p>' . __('Veulliez saisir votre clé de licence de partenaire pour activer l\'intégration des badges.', 'wooster-partner') . '</p>';

                echo '<?php add_thickbox(); ?>
                        <div id="modal-chatbot" style="display:none;">
                            <iframe src="https://wooster.fr/plugin-partenaire/" width="100%" height="591px"></iframe>
                        </div>';
                break;
                // case 'primary_badge_section':
                //     echo '<p>' . __('Le badge officiel est obligatoire.', 'wooster-partner') . '</p>';
                //     break;
                // case 'secondary_badge_section':
                //     echo '<p>' . __('Les badges suivants sont optionnels.', 'wooster-partner') . '</p>';
                //     break;
        }
    }


    /**
     * Sets up the fields of the group of fields "wooster-authentification-field-group" used by the authentification form.
     */
    public function wooster_setup_authentification_fields()
    {
        // This function defines an array of fields with their respective properties.
        // Each field is added using the add_settings_field() function, which takes the field's unique ID, label, callback function, section, and additional arguments.
        // The register_setting() function is used to register the field's unique ID as a setting.
        // This allows the field's value to be saved and retrieved using the get_option() function.
        $fields = array(
            array(
                'uid' => 'partner_license',
                'label' => __('Licence de partenariat :', 'wooster-partner'),
                'section' => 'licence_section',
                'type' => 'text',
                'options' => false,
                'placeholder' => 'XXXX-XXXX-XXXX-XXXX',
                'helper' => __('Ce champ est requis pour l\'affichage du badge.', 'wooster-partner'),
                'supplemental' => __('Votre licence vous a été transmise par mail. Vous pouvez nous contacter si vous ne la retrouvez pas.', 'wooster-partner'),
                'default' => ''
            )
        );
        foreach ($fields as $field) {
            add_settings_field($field['uid'], $field['label'], array($this, 'wooster_authentification_fields_callback'), 'wooster-partenariat', $field['section'], $field);
            register_setting('wooster-authentification-field-group', $field['uid']);
        }
    }

    /**
     * Callback function for the wooster_field.
     *
     * @param mixed $arguments The arguments passed to the callback function.
     * @return void
     */
    public function wooster_authentification_fields_callback($arguments)
    {
        $value = get_option($arguments['uid']); // Get the current value, if there is one
        if (!$value) { // If no value exists
            $value = $arguments['default']; // Set to our default
        }

        // Check which type of field we want
        switch ($arguments['type']) {
            case 'text': // If it is a text field
                printf('<input name="%1$s" id="%1$s" type="%2$s" placeholder="%3$s" value="%4$s" style="width: 200px;" />', $arguments['uid'], $arguments['type'], $arguments['placeholder'], $value);
                break;
        }

        // Is help text for the field?
        if ($helper = $arguments['helper']) {
            printf('<span class="helper"> %s</span>', $helper); // Show it
        }

        // Is supplemental text for the field?
        if ($supplimental = $arguments['supplemental']) {
            printf('<p class="description">%s</p>', $supplimental); // Show it
        }
    }
}
new Wooster_Settings_Plugin();
