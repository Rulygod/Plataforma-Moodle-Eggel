<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'aiprovider_gemini', language 'es', version '4.5'.
 *
 * @package     aiprovider_gemini
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:generate_image:endpoint'] = 'Endpoint de API';
$string['action:generate_image:model'] = 'Modelo de IA';
$string['action:generate_image:model_desc'] = 'El modelo usado para generar imágenes desde entradas del usuario.';
$string['action:generate_image:systeminstruction'] = 'Instrucción del sistema';
$string['action:generate_image:systeminstruction_desc'] = 'El modelo usado para explicar el texto dado.';
$string['action:generate_text:endpoint'] = 'Endpoint de API';
$string['action:generate_text:model'] = 'Modelo de IA';
$string['action:generate_text:model_desc'] = 'El modelo usado para generar la respuesta textual.';
$string['action:generate_text:systeminstruction'] = 'Instrucción del sistema.';
$string['action:generate_text:systeminstruction_desc'] = 'Esta instrucción se envía al modelo de IA junto a la entrada de texto del usuario. No se recomienda editar esta instrucción salvo que sea absolutamente necesario.';
$string['action:summarise_text:endpoint'] = 'Endpoint de API';
$string['action:summarise_text:model'] = 'Modelo de IA';
$string['action:summarise_text:model_desc'] = 'El modelo usado para resumir el texto dado.';
$string['action:summarise_text:systeminstruction'] = 'Instrucción del sistema.';
$string['action:summarise_text:systeminstruction_desc'] = 'Esta instrucción se envía al modelo de IA junto a la entrada de texto del usuario. No se recomienda editar esta instrucción salvo que sea absolutamente necesario.';
$string['apikey'] = 'Clamle de API Gemini';
$string['apikey_desc'] = 'Obtener una clave de <a href="https://aistudio.google.com/apikey">Google AI Studio website API keys</a>.';
$string['enableglobalratelimit'] = 'Configurar límite para todo el sitio';
$string['enableglobalratelimit_desc'] = 'Limitar el número de solicitudes que el proveedor de API Gemini puede recibir de todo el sitio a la hora.';
$string['enableuserratelimit'] = 'Configurar límite por usuario';
$string['enableuserratelimit_desc'] = 'Limitar el número de solicitudes que cada usuario puede hacer al proveedor de API Gemini cada hora.';
$string['getallmodels_error'] = 'Necesita insertar previamente una clave API.';
$string['globalratelimit'] = 'Número máximo de solicitudes para todo el sitio';
$string['globalratelimit_desc'] = 'El número permitido de solicitudes para todo el sitio cada hora.';
$string['pluginname'] = 'Proveedor de API Gemini';
$string['privacy:metadata'] = 'El plugin Gemini API Provider no almacena ningún dato personal.';
$string['privacy:metadata:aiprovider_gemini:externalpurpose'] = 'Esta información se envía a la API Gemini para que se genere una respuesta. Su configuración de cuenta Gemini puede cambiar cómo Gemini guarda y retiene estos datos. Con este plugin no se envían expresamente datos de usuario ni se almacenan en el LMS Moodle.';
$string['privacy:metadata:aiprovider_gemini:model'] = 'El modelo usado para generar la respuesta.';
$string['privacy:metadata:aiprovider_gemini:numberimages'] = 'Cuando se generan imágenes, el número de imágenes usadas en la respuesta.';
$string['privacy:metadata:aiprovider_gemini:prompttext'] = 'La entrada de texto utilizada para generar la respuesta.';
$string['privacy:metadata:aiprovider_gemini:responseformat'] = 'Cuando se generan imágenes, el formato de respuesta.';
$string['userratelimit'] = 'Número máximo de solicitudes por usuario';
$string['userratelimit_desc'] = 'El número de solicitudes permitidas a la hora, por usuario.';
