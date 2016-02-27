<?php
// Version: 2.0; ModerationCenter

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['moderation_center'] = 'Centro de Moderaci�n';
$txt['mc_main'] = 'Principal';
$txt['mc_posts'] = 'Mensajes';
$txt['mc_groups'] = 'Grupos';

$txt['mc_view_groups'] = 'Ver Grupos';

$txt['mc_description'] = 'Este es tu &quot;Centro de Moderaci�n&quot;. Desde aqu� puedes realizar todas las acciones de moderaci�n que te haya asignado el Administrador. Esta p�gina principal contiene un resumen de todas lo que ha ocurrido recientemente en tu comunidad. Puedes personalizar la visualizaci�n pulsando <a href="' . $scripturl . '?action=moderate;area=settings">aqu�</a>.';
$txt['mc_group_requests'] = 'Solicitudes de Grupo';
$txt['mc_unapproved_posts'] = 'Mensajes no Aprobados';
$txt['mc_watched_users'] = 'Usuarios Recientemente Vigilados';
$txt['mc_watched_topics'] = 'Temas Vigilados';
$txt['mc_scratch_board'] = 'Tabl�n de Inicio del Moderador';
$txt['mc_latest_news'] = '�ltimas Noticias de Simple Machines';
$txt['mc_recent_reports'] = 'Informes Recientes de Temas';
$txt['mc_warnings'] = 'Advertencias';
$txt['mc_notes'] = 'Notas de Moderador';

$txt['mc_cannot_connect_sm'] = 'No puedes conectar al archivo de noticias de simplemachines.org.';

$txt['mc_recent_reports_none'] = 'No hay informes a destacar';
$txt['mc_watched_users_none'] = 'Actualmente no est� teniendo lugar ninguna vigilancia.';
$txt['mc_group_requests_none'] = 'No hay solicitudes abiertas de pertenencia a grupos.';

$txt['mc_seen'] = '%1$s �ltima vez visto %2$s ';
$txt['mc_seen_never'] = '%1$s nunca visto';
$txt['mc_groupr_by'] = 'por';

$txt['mc_reported_posts_desc'] = 'Aqu� puedes revisar todos los informes de mensajes enviados por los usuarios de la comunidad.';
$txt['mc_reportedp_active'] = 'Informes activos';
$txt['mc_reportedp_closed'] = 'Informes Antiguos';
$txt['mc_reportedp_by'] = 'por';
$txt['mc_reportedp_reported_by'] = 'Informado por';
$txt['mc_reportedp_last_reported'] = '�ltimo Informe';
$txt['mc_reportedp_none_found'] = 'No se ha encontrado ning�n Informe';

$txt['mc_reportedp_details'] = 'Detalles';
$txt['mc_reportedp_close'] = 'Cerrar';
$txt['mc_reportedp_open'] = 'Abrir';
$txt['mc_reportedp_ignore'] = 'Ignorar';
$txt['mc_reportedp_unignore'] = 'No Ignorar';
// Do not use numeric entries in the below string.
$txt['mc_reportedp_ignore_confirm'] = '�Est�s seguro de que quieres ignorar posteriores informes sobre este mensaje?\\n\\nEsto desactivar� futuros informes a todos los moderadores del foro.';
$txt['mc_reportedp_close_selected'] = 'Cerrar los Seleccionados';

$txt['mc_groupr_group'] = 'Grupos';
$txt['mc_groupr_member'] = 'Usuario';
$txt['mc_groupr_reason'] = 'Raz�n';
$txt['mc_groupr_none_found'] = 'Actualmente no hay ninguna solicitud de grupo a destacar';
$txt['mc_groupr_submit'] = 'Enviar';
$txt['mc_groupr_reason_desc'] = 'Motivo para rechazar la solicitud de %1$s para ingresar en &quot;%2$s&quot;';
$txt['mc_groups_reason_title'] = 'Razones de Denegaci�n';
$txt['with_selected'] = 'Con lo seleccionado';
$txt['mc_groupr_approve'] = 'Aprobar Solicitud';
$txt['mc_groupr_reject'] = 'Denegar Solicitud (Sin Raz�n)';
$txt['mc_groupr_reject_w_reason'] = 'Denegar Solicitud con Raz�n';
// Do not use numeric entries in the below string.
$txt['mc_groupr_warning'] = '�Est�s seguro de que quieres hacerlo?';

$txt['mc_unapproved_attachments_none_found'] = '�No se encontr� ning�n adjunto no aprobado!';
$txt['mc_unapproved_replies_none_found'] = '�No se encontr� ning�n mensaje no aprobado!';
$txt['mc_unapproved_topics_none_found'] = '�No se encontr� ning�n tema no aprobado!';
$txt['mc_unapproved_posts_desc'] = 'Desde aqu� puedes aprobar o eliminar cualquier mensaje en espera de moderaci�n.';
$txt['mc_unapproved_replies'] = 'Respuestas';
$txt['mc_unapproved_topics'] = 'Temas';
$txt['mc_unapproved_by'] = 'de';
$txt['mc_unapproved_sure'] = '�Est�s seguro de que quieres hacerlo?';
$txt['mc_unapproved_attach_name'] = 'Nombre del Adjunto';
$txt['mc_unapproved_attach_size'] = 'Tama�o';
$txt['mc_unapproved_attach_poster'] = 'Poster';
$txt['mc_viewmodreport'] = 'Informe de Moderaci�n sobre %1$s de %2$s';
$txt['mc_modreport_summary'] = 'Hay %1$d informe(s) sobre este mensaje. El �ltimo informe fue %2$s.';
$txt['mc_modreport_whoreported_title'] = 'Usuarios que han informado estos mensajes';
$txt['mc_modreport_whoreported_data'] = 'Informado por %1$s el %2$s.  Dejaron el siguiente mensaje:';
$txt['mc_modreport_modactions'] = 'Acciones tomadas por otros moderadores';
$txt['mc_modreport_mod_comments'] = 'Comentarios de moderadores';
$txt['mc_modreport_no_mod_comment'] = 'Actualmente no hay comentarios de ning�n moderador.';
$txt['mc_modreport_add_mod_comment'] = 'A�adir comentario';

$txt['show_notice'] = 'Texto de Aviso';
$txt['show_notice_subject'] = 'Asunto';
$txt['show_notice_text'] = 'Texto';

$txt['mc_watched_users_title'] = 'Usuarios Vigilados';
$txt['mc_watched_users_desc'] = 'Aqu� puedes guardar un registro de todos los usuarios al los que los moderadores les han asignado la marca &quot;Vigilado&quot;.';
$txt['mc_watched_users_post'] = 'Ver por Mensaje';
$txt['mc_watched_users_warning'] = 'Nivel de Advertencia';
$txt['mc_watched_users_last_login'] = '�ltima Conexi�n';
$txt['mc_watched_users_last_post'] = '�ltimo Mensaje';
$txt['mc_watched_users_no_posts'] = 'No hay mensajes de usuarios vigilados.';
// Don't use entities in the two strings below.
$txt['mc_watched_users_delete_post'] = '�Est�s seguro de que quieres eliminar este mensaje?';
$txt['mc_watched_users_delete_posts'] = '�Est�s seguro de que quieres eliminar estos mensajes?';
$txt['mc_watched_users_posted'] = 'Publicado';
$txt['mc_watched_users_member'] = 'Ver por Usuario';

$txt['mc_warnings_description'] = 'Desde esta secci�n puedes ver los avisos que se han mandado a miembros del foro. Tambi�n puedes a�adir y modificar las plantillas de notificaci�n a usar al enviar un aviso a un usuario.';
$txt['mc_warning_log'] = 'Registro de Advertencias';
$txt['mc_warning_templates'] = 'Plantillas propias';
$txt['mc_warning_log_title'] = 'Viendo el registro de advertencias';
$txt['mc_warning_templates_title'] = 'Plantillas de aviso propias';

$txt['mc_warnings_none'] = '�No se ha enviado a�n ninguna advertencia!';
$txt['mc_warnings_recipient'] = 'Destinatario';

$txt['mc_warning_templates_none'] = 'A�n no se ha creado ninguna plantilla de aviso.';
$txt['mc_warning_templates_time'] = 'Hora de la creaci�n';
$txt['mc_warning_templates_name'] = 'Plantilla';
$txt['mc_warning_templates_creator'] = 'Creada por';
$txt['mc_warning_template_add'] = 'A�adir plantilla';
$txt['mc_warning_template_modify'] = 'Editar plantilla';
$txt['mc_warning_template_delete'] = 'Eliminar seleccionadas';
$txt['mc_warning_template_delete_confirm'] = 'Seguro que quieres elimilar las plantillas seleccionadas?';

$txt['mc_warning_template_desc'] = 'Utilice esta p�gina para rellener los detalles de la plantilla. Tenga en cuenta que el asunto para el email no es parte de la plantilla. Tambi�n debe considerar que dado que la notificaci�n es enviada por MP puede utilizar c�digos BBC en el template. Si usala variable {MESSAGE} entonces esta plantilla no estar� disponible para enviar advertencias gen�ricas (por ejemplo, una advertencia que no est� asociada a un post).';
$txt['mc_warning_template_title'] = 'T�tulo de la plantilla';
$txt['mc_warning_template_body_desc'] = 'El contenido del mensaje de notificaci�n. Tenga en cuenta que puede usar los siguientes atajos en esta plantilla.<ul style="margin-top: 0px;"><li>{MEMBER} - Nombre del usuario.</li><li>{MESSAGE} - Enlace al post ofensivo (en caso de que sea aplicable)</li><li>{FORUMNAME} - Nombre del foro.</li><li>{SCRIPTURL} - Direcci�n web del foro.</li><li>{REGARDS} - Saludo de despedida est�ndar.</li></ul>';
$txt['mc_warning_template_body_default'] = '{MEMBER},' . "\n\n" . 'Has recibido un aviso por actividad inapropiada. Por favor, te rogamos que ceses en estas actividades prohibidas por las reglas del foro, o de otro modo nos veremos obligados a tomar medidas m�s severas.' . "\n\n" . '{REGARDS}';
$txt['mc_warning_template_personal'] = 'Plantilla personal';
$txt['mc_warning_template_personal_desc'] = 'Si selecciona esta opci�n s�lo usted podr� ver, editar y usar esta plantilla. Si no la selecciona, todos los moderadores podr�n usarla.';
$txt['mc_warning_template_error_empty'] = 'Debe establecer tanto un t�tulo como un cuerpo para la notificaci�n.';

$txt['mc_prefs'] = 'Preferencias';
$txt['mc_settings'] = 'Opciones de Cambio';
$txt['mc_prefs_title'] = 'Preferencias de Moderaci�n';
$txt['mc_prefs_desc'] = 'Esta secci�n te permite establecer algunas preferencias personales de moderaci�n relacionadas con actividades como email, notificaciones.';
$txt['mc_prefs_homepage'] = 'Elementos a mostrar en la p�gina principal de moderaci�n';
$txt['mc_prefs_latest_news'] = 'Noticias SM';
$txt['mc_prefs_show_reports'] = 'Mostrar contador de informes abiertos en la cabecera del foro';
$txt['mc_prefs_notify_report'] = 'Notificar informes de temas';
$txt['mc_prefs_notify_report_never'] = 'Nunca';
$txt['mc_prefs_notify_report_moderator'] = 'Solamente si es en un foro que yo modero';
$txt['mc_prefs_notify_report_always'] = 'Siempre';
$txt['mc_prefs_notify_approval'] = 'Notificar elementos en espera de aprobaci�n';

// Use entities in the below string.
$txt['mc_click_add_note'] = 'A�adir una nueva nota';
$txt['mc_add_note'] = 'A�adir';

?>