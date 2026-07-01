
<?php
//Este archivo permitirá que el administrador configure aspectos del tema desde Moodle sin modificar código.
defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    // Logo del tema.
    $name = 'theme_eggel/logo';
    $title = get_string('logo', 'admin');
    $description = get_string('logosummary', 'admin');

    $setting = new admin_setting_configstoredfile(
        $name,
        $title,
        $description,
        'logo'
    );

    $settings->add($setting);

}