<?php
defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/lib.php');

$THEME->name = 'eggel';

// Heredamos toda la funcionalidad de Boost.
$THEME->parents = ['boost'];

// No usamos hojas CSS tradicionales.
$THEME->sheets = [];

// Hojas para el editor (por ahora ninguna).
$THEME->editor_sheets = [];

// SCSS del editor heredado de Boost.
$THEME->editor_scss = ['editor'];

// Utilizar Boost como respaldo.
$THEME->usefallback = true;

// Cargar los estilos principales de Boost.
$THEME->scss = function($theme) {
    return theme_boost_get_main_scss_content($theme);
};

// Permite sobrescribir renderizadores.
$THEME->rendererfactory = 'theme_overridden_renderer_factory';