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
 * Strings for component 'bbbext_bnreminders', language 'es', version '4.5'.
 *
 * @package     bbbext_bnreminders
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addreminder'] = 'Agregar recordatorio';
$string['bnreminders'] = 'Enviar recordatorios por correo electrónico antes de que inicie la sesión';
$string['bnreminders:enabled'] = 'Enviar recordatorios por correo electrónico antes de la sesión';
$string['bnreminders:guestenabled'] = 'Agregar invitados a la lista de usuarios a quienes se enviará el recordatorio';
$string['bnreminders:preferences'] = 'Preferencias de recordatorios de BigBlueButton';
$string['bnreminders_help'] = 'Si se habilita y se establece una fecha de inicio, se enviarán recordatorios por correo electrónico a los usuarios inscritos en la actividad';
$string['check_emails_reminder'] = 'Verificar recordatorios por correo electrónico';
$string['emailcontent'] = 'Personalización del correo electrónico';
$string['emailcontent:desc'] = 'Estas configuraciones personalizan el mensaje enviado a los usuarios.';
$string['emailfooter'] = 'Información del pie de página';
$string['emailfooter:desc'] = 'Agregue información adicional como ubicación de la institución y datos de contacto en el pie de página de los correos electrónicos.';
$string['emailsubject'] = 'Asunto del correo electrónico';
$string['emailsubject:default'] = 'Recordatorio de la reunión {$name}';
$string['emailsubject:desc'] = 'El asunto del correo electrónico.';
$string['emailtemplate'] = 'Plantilla de correo electrónico';
$string['emailtemplate:default'] = '<p>
Hola,<br><br>
Este es un recordatorio sobre la próxima reunión <a href="{$url}">{$name}</a> en {$course_fullname} programada para iniciar el {$date}.
</p>';
$string['emailtemplate:desc'] = 'Plantilla de correo electrónico al enviar recordatorios. Se pueden usar las siguientes variables:<ul>
    <li>{$course_fullname}: el nombre completo del curso</li>
    <li>{$course_shortname}: el nombre corto del curso</li>
    <li>{$date}: la fecha y hora de la reunión</li>
    <li>{$name}: el nombre de la reunión</li>
</ul>';
$string['emailunsubscribemessage'] = '<span>
Puedes cancelar la suscripción a este recordatorio haciendo clic en el siguiente <a href="{$a->unsubscribeurl}">enlace para cancelar suscripción</a>.
</span>';
$string['error:duplicate'] = 'Ya tienes un recordatorio para esta reunión en el mismo intervalo de tiempo';
$string['messageprovider:reminder'] = 'Recordatorio por correo electrónico de BigBlueButton';
$string['mod_form_bnreminders'] = 'Notificaciones por correo electrónico';
$string['mod_form_bnreminders_desc'] = 'Enviar recordatorios a los estudiantes como notificaciones.';
$string['pluginname'] = 'BigBlueButton BN Reminders';
$string['privacy:metadata'] = 'Esta extensión no almacena ningún dato personal.';
$string['reminder'] = 'Recordatorio';
$string['reminder:message'] = 'antes de que inicie la reunión';
$string['reminder:openingtime:disabled'] = 'La hora de apertura está deshabilitada';
$string['subscribed'] = 'Suscrito';
$string['subscribed:cancel'] = 'No se han realizado cambios en tu suscripción';
$string['subscribed:success'] = '¡Te suscribiste correctamente a los recordatorios de {$a->name}!';
$string['subscriptions'] = 'Suscripciones';
$string['timespan'] = 'Intervalo de tiempo';
$string['timespan:bell'] = 'Intervalo de tiempo';
$string['timespan:p1d'] = 'Un día';
$string['timespan:p1w'] = 'Una semana';
$string['timespan:p2d'] = 'Dos días';
$string['timespan:pt1h'] = 'Una hora';
$string['timespan:pt2h'] = 'Dos horas';
$string['unsubscribe'] = 'Cancelar suscripción';
$string['unsubscribe:label'] = '¿Seguro que deseas cancelar tu suscripción?';
$string['unsubscribe:managepreferences'] = 'Administrar preferencias de recordatorios';
$string['unsubscribe:title'] = 'Administrar suscripciones a recordatorios de BigBlueButton';
$string['unsubscribe:title:meeting'] = 'Cancelar suscripción al recordatorio de la actividad de BigBlueButton {$a}';
$string['unsubscribed'] = 'Suscripción cancelada';
$string['unsubscribed:success'] = '¡Cancelaste la suscripción a los recordatorios de {$a->name} correctamente!';
