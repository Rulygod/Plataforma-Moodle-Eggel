<?php
defined('MOODLE_INTERNAL') || die();

/**
 * Devuelve el contenido SCSS principal del tema EGGEL.
 *
 * Hereda el SCSS de Boost y agrega nuestras variables y estilos.
 */
function theme_eggel_get_main_scss_content($theme) {
    global $CFG;

    // SCSS principal de Boost.
    $scss = theme_boost_get_main_scss_content($theme);

    // Variables institucionales.
    $variables = file_get_contents(__DIR__ . '/scss/variables.scss');

    // Estilos personalizados.
    $post = file_get_contents(__DIR__ . '/scss/post.scss');

    return $variables . "\n" . $scss . "\n" . $post;
}