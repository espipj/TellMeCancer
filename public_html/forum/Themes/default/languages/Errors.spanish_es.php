<?php
// Version: 2.0; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'No est�s autorizado para entrar a esta secci�n';
$txt['wireless_error_notyet'] = 'Lo sentimos,esta seccion no esta disponible en modo wirelles ahora.';

$txt['mods_only'] = 'S�lo Moderadores pueden usar la funci�n de eliminado directo, por favor elimina este mensaje a trav�s de la funci�n modificar.';
$txt['no_name'] = 'No rellenaste el campo nombre. Es requerido.';
$txt['no_email'] = 'No rellenaste el campo email. Es requerido';
$txt['topic_locked'] = 'Este tema est� bloqueado, no est�s autorizado para publicar o modificar mensajes...';
$txt['no_password'] = 'Campo contrase�a vac�o';
$txt['already_a_user'] = 'El nombre de usuario que trataste de registrar ya existe.';
$txt['cant_move'] = 'No est�s autorizado para mover temas...';
$txt['login_to_post'] = 'Para publicar debes haber ingresado. Si no tienes todav�a una cuenta, <a href="' . $scripturl . '?action=register">reg�strate</a>.';
$txt['passwords_dont_match'] = 'No coinciden las contrase�as.';
$txt['register_to_use'] = 'Lo siento, debes estar registrado antes de usar esta funci�n.';
$txt['password_invalid_character'] = 'Car�cter inv�lido en la contrase�a';
$txt['name_invalid_character'] = 'Car�cter inv�lido en el nombre.';
$txt['email_invalid_character'] = 'Car�cter inv�lido en el Email.';
$txt['username_reserved'] = 'El nombre de usuario que trataste de registrar contiene el nombre reservado\'%s\'. Por favor intenta otro nombre de usuario.';
$txt['numbers_one_to_nine'] = 'Este campo s�lo acepta n�meros del 0-9';
$txt['not_a_user'] = 'El usuario cuyo perfil est�s intentando editar no existe.';
$txt['not_a_topic'] = 'Este tema no existe en el foro.';
$txt['not_approved_topic'] = 'Este tema no ha sido aprobado a�n.';
$txt['email_in_use'] = 'Esa direcci�n email (%s) ya est� siendo utilizada por un usuario registrado. Si crees que es un error, ve a la p�gina de registro y utiliza recordar contrase�a con dicha direcci�n email.';

$txt['didnt_select_vote'] = 'No seleccionaste una opci�n del voto.';
$txt['poll_error'] = 'Esa encuesta no existe, o ha sido bloqueada, o intentaste votar m�s de una vez.';
$txt['members_only'] = 'Este servicio es solo para usuarios...';
$txt['locked_by_admin'] = 'Fue bloqueada por un administrador.  No la puedes desbloquear.';
$txt['not_enough_posts_karma'] = 'Lo siento, no tienes suficientes mensajes para modificar el karma - necesitas al menos %1$d.';
$txt['cant_change_own_karma'] = 'Lo siento, no est�s autorizado para modificar tu propio karma.';
$txt['karma_wait_time'] = 'Lo siento, no puedes repetir una acci�n de karma sin esperar %1$s %2$s.';
$txt['feature_disabled'] = 'Lo siento, esta funci�n ha sido desactivada.';
$txt['cant_access_upload_path'] = '�No se puede acceder al directorio de los archivos adjuntos!';
$txt['file_too_big'] = 'Tu archivo es demasiado grande. El tama�o m�ximo permitido para archivos adjuntos es %1$d KB.';
$txt['attach_timeout'] = 'Tu archivo adjunto no se ha podido guardar. Esto puede suceder porque tarda demasiado en subirse o el archivo es m�s grande de lo que permite el servidor.<br /><br />Por favor consulta al administrador de tu servidor para m�s informaci�n.';
$txt['filename_exists'] = 'Lo siento! Ya hay un archivo adjunto con el mismo nombre de archivo que el que has intentado subir. Por favor renombra el archivo y vuelve a intentarlo.';
$txt['bad_attachment'] = 'Tu archivo adjunto no ha pasado los controles de seguridad y no se puede subir. Por favor consulta a un administrador del foro.';
$txt['ran_out_of_space'] = 'El directorio de uploads est� lleno. Por favor intenta un archivo m�s peque�o y contacta al <a href="mailto:%s">administrador</a>.';
$txt['couldnt_connect'] = 'No se pudo conectar al servidor o no se encontr� el archivo';
$txt['no_board'] = 'El foro que especificaste no existe';
$txt['cant_split'] = 'No est�s autorizado para dividir temas';
$txt['cant_merge'] = 'No est�s autorizado para combinar temas';
$txt['no_topic_id'] = 'Especificaste un ID de tema inv�lido.';
$txt['split_first_post'] = 'No puedes dividir un tema desde el primer mensaje.';
$txt['topic_one_post'] = 'Este tema s�lo contiene un mensaje y no puede ser dividido';
$txt['no_posts_selected'] = 'no se seleccionaron mensajes';
$txt['selected_all_posts'] = 'Imposible dividir. Has seleccionado todos los mensajes.';
$txt['cant_find_messages'] = 'No se encontraron los mensajes';
$txt['cant_find_user_email'] = 'Imposible encontrar la direcci�n email del usuario.';
$txt['cant_insert_topic'] = 'No se pudo insertar el tema';
$txt['already_a_mod'] = 'Has seleccionado el nombre de usuario de un moderador. Por favor selecciona otro nombre de usuario';
$txt['session_timeout'] = 'Falla al enviar el formulario. La sesi�n ha expirado.';
$txt['session_verify_fail'] = 'Fallo al verificar la sesi�n. Por favor intenta cerrar la sesi�n e ingresar, y prueba de nuevo.';
$txt['verify_url_fail'] = 'Sitio de referencia inv�lido.';
$txt['guest_vote_disabled'] = 'Los invitados no pueden votar en esta encuesta.';

$txt['cannot_access_mod_center'] = 'No tienes permiso para acceder al Centro de Moderaci�n.';
$txt['cannot_admin_forum'] = 'No est�s autorizado para administrar este foro.';
$txt['cannot_announce_topic'] = 'No est�s autorizado para publicar anuncios en este foro.';
$txt['cannot_approve_posts'] = 'No tienes permiso para aprobar elementos.';
$txt['cannot_post_unapproved_attachments'] = 'No tienes permiso para publicar adjuntos no aprobados.';
$txt['cannot_post_unapproved_topics'] = 'No tienes permiso para publicar temas no aprobados.';
$txt['cannot_post_unapproved_replies_own'] = 'No tienes permiso para publicar respuestas no aprobadas a tus temas.';
$txt['cannot_post_unapproved_replies_any'] = 'No tienes permiso para publicar respuestas no aprobadas a temas de otros usuarios.';
$txt['cannot_calendar_edit_any'] = 'No puedes editar los eventos del calendario.';
$txt['cannot_calendar_edit_own'] = 'No tienes los privilegios necesarios para editar tus propios eventos.';
$txt['cannot_calendar_post'] = 'La edici�n de eventos no est� permitida - Lo sentimos.';
$txt['cannot_calendar_view'] = 'Lo sentimos, pero no est�s autorizado para ver el calendario.';
$txt['cannot_remove_any'] = 'Lo sentimos, pero no tienes los privilegios para eliminar temas.';
$txt['cannot_remove_own'] = 'No puedes eliminar tus propios temas en este foro.';
$txt['cannot_edit_news'] = 'No est�s autorizado para editar los elementos de las noticias en este foro.';
$txt['cannot_pm_read'] = 'Lo sentimos, no est�s autorizado para leer tus mensajes personales.';
$txt['cannot_pm_send'] = 'No est�s autorizado para enviar mensajes personales.';
$txt['cannot_karma_edit'] = 'No estas autorizado para modificar el karma de otras personas.';
$txt['cannot_lock_any'] = 'No est�s autorizado para bloquear temas aqu�.';
$txt['cannot_lock_own'] = 'Lo sentimos, pero no puedes bloquear tus propios temas aqu�.';
$txt['cannot_make_sticky'] = 'No est�s autorizado para fijar este tema.';
$txt['cannot_manage_attachments'] = 'No est�s autorizado para administrar archivos adjuntos o avatares.';
$txt['cannot_manage_bans'] = 'No est�s autorizado para cambiar la lista de accesos prohibidos.';
$txt['cannot_manage_boards'] = 'No est�s autorizado para administrar foros y categor�s.';
$txt['cannot_manage_membergroups'] = 'No tienes los permisos necesarios para modificar o asignar grupos de usuarios.';
$txt['cannot_manage_permissions'] = 'No tienes los permisos necesarios para administrar los permisos.';
$txt['cannot_manage_smileys'] = 'No est�s autorizado para administrar smileys.';
$txt['cannot_mark_any_notify'] = 'No tienes los permisos necesarios para obtener notificaciones de este tema.';
$txt['cannot_mark_notify'] = 'Lo sentimos, pero no puedes solicitar notificaciones desde este foro.';
$txt['cannot_merge_any'] = 'No est�s autorizado para combinar temas en este foro.';
$txt['cannot_moderate_forum'] = 'No est�s autorizado para moderar este foro.';
$txt['cannot_moderate_board'] = 'No est� autorizado para moderar este foro';
$txt['cannot_modify_any'] = 'No est�s autorizado para modificar mensajes.';
$txt['cannot_modify_own'] = 'Lo sentimos, pero no est�s autorizado para editar tus propios mensajes.';
$txt['cannot_modify_replies'] = 'A pesar que este mensaje es en respuesta a tu tema, no lo puedes editar.';
$txt['cannot_move_own'] = 'No puedes mover tus propios temas en este foro.';
$txt['cannot_move_any'] = 'No est�s autorizado para mover temas en este foro.';
$txt['cannot_poll_add_own'] = 'Lo sentimos, pero no est�s autorizado para agregarle encuestas a tus temas en este foro.';
$txt['cannot_poll_add_any'] = 'No puedes agregarle encuestas a este tema.';
$txt['cannot_poll_edit_own'] = 'No puedes editar esta encuesta, aunque sea tuya.';
$txt['cannot_poll_edit_any'] = 'Se te ha denegado el acceso para editar encuestas en este foro.';
$txt['cannot_poll_lock_own'] = 'No est�s autorizado para bloquear tus propias encuestas en este foro.';
$txt['cannot_poll_lock_any'] = 'Lo sentimos, pero no est�s autorizado para bloquear cualquier encuesta.';
$txt['cannot_poll_post'] = 'No est�s autorizado para publicar encuestas en el foro actual.';
$txt['cannot_poll_remove_own'] = 'No tienes los permisos para eliminar esta encuesta de tu tema.';
$txt['cannot_poll_remove_any'] = 'No puedes eliminar encuestas en este foro.';
$txt['cannot_poll_view'] = 'No est�s autorizado para ver encuestas en este foro.';
$txt['cannot_poll_vote'] = 'Lo sentimos, pero no puedes votar en las encuestas de este foro.';
$txt['cannot_post_attachment'] = 'No tienes los permisos necesarios para subir archivos adjuntos aqu�.';
$txt['cannot_post_new'] = 'Lo sentimos, pero no puedes publicar nuevos temas en este foro.';
$txt['cannot_post_reply_any'] = 'No tienes los permisos necesarios para publicar respuestas a temas en este foro.';
$txt['cannot_post_reply_own'] = 'No est�s autorizado para publicar respuestas a�n para tus propios temas en este foro.';
$txt['cannot_profile_remove_own'] = 'Lo sentimos, pero no est�s autorizado para borrar tu cuenta.';
$txt['cannot_profile_remove_any'] = '�No tienes los permisos necesarios para eliminar las cuentas de otras personas!';
$txt['cannot_profile_extra_any'] = 'No tienes los permisos necesarios modificar la configuraci�n de otros perfiles.';
$txt['cannot_profile_identity_any'] = 'No est�s autorizado para modificar la configuraci�n de otras cuentas.';
$txt['cannot_profile_title_any'] = 'No puedes editar los t�tulos personalizados de otras personas.';
$txt['cannot_profile_extra_own'] = 'Lo sentimos, pero no tienes los permisos necesarios para editar los datos de tu perfil.';
$txt['cannot_profile_identity_own'] = 'Por el momento, no puedes cambiar tu identidad.';
$txt['cannot_profile_title_own'] = 'No est�s autorizado para cambiar tu t�tulo personalizado.';
$txt['cannot_profile_server_avatar'] = 'No est�s autorizado para utilizar un avatar alojado en el servidor.';
$txt['cannot_profile_upload_avatar'] = 'No tienes permiso para subir un avatar.';
$txt['cannot_profile_remote_avatar'] = 'No tienes el privilegio de usar un avatar remoto.';
$txt['cannot_profile_view_own'] = 'Lo sentimos, pero no puedes ver tu propio perfil.';
$txt['cannot_profile_view_any'] = 'Lo sentimos, pero no puedes ver el perfil de otras personas.';
$txt['cannot_delete_own'] = 'No est�s, en este foro, autorizado para borrar tus propios mensajes.';
$txt['cannot_delete_replies'] = 'Lo sentimos, pero no puedes eliminar estos mensajes, a�n cuando son respuestas a tu tema.';
$txt['cannot_delete_any'] = 'No est� permitido borrar mensajes en este foro.';
$txt['cannot_report_any'] = 'No est�s autorizado para reportar mensajes en este foro.';
$txt['cannot_search_posts'] = 'No est�s autorizado a buscar mensajes en este foro.';
$txt['cannot_send_mail'] = 'No tienes el privilegio de enviar mails.';
$txt['cannot_issue_warning'] = 'Lo sentimos, no tienes permiso para enviar advertencias a los usuarios.';
$txt['cannot_send_topic'] = 'Lo sentimos, pero el administrador ha desactivado la opci�n de enviar temas en este foro.';
$txt['cannot_split_any'] = 'No est� permitido dividir temas en este foro.';
$txt['cannot_view_attachments'] = 'Parece que no est�s autorizado para descargar o ver archivos adjuntos en este foro.';
$txt['cannot_view_mlist'] = 'No puedes ver la lista de usuarios, ya que no tienes permisos para ello.';
$txt['cannot_view_stats'] = 'No est�s autorizado para ver las estad�sticas del foro.';
$txt['cannot_who_view'] = 'Lo sentimos - no tienes los permisos necesarios para ver la lista de usuarios en l�nea.';

$txt['no_theme'] = 'Ese tema no existe.';
$txt['theme_dir_wrong'] = 'El directorio de defecto de los temas es incorrecto, debe corregirlo haciendo clic en este texto.';
$txt['registration_disabled'] = 'Lo sentimos, el registro de usuarios est� actualmente deshabilitado.';
$txt['registration_no_secret_question'] = 'Lo sentimos, no se ha especificado pregunta secreta para este usuario.';
$txt['poll_range_error'] = 'Lo sentimos, la encuesta debe durar m�s de 0 d�as.';
$txt['delFirstPost'] = 'No est�s autorizado a borrar el primer mensaje de este tema.<p>Si deseas eliminarlo, haz clic en \'Eliminar Tema\', o p�dele a un Administrador/Moderador que lo borre por ti.</p>';
$txt['parent_error'] = '�No se pudo crear el foro!';
$txt['login_cookie_error'] = 'No pudiste ingresar.  Por favor revisa la configuraci�n de tus cookies.';
$txt['incorrect_answer'] = 'Lo sentimos, pero no contestaste correctamente tu pregunta secreta.  Haz clic en el bot�n Atr�s para intentar nuevamente, o haz clic en el bot�n Atr�s 2 veces para usar el m�todo por defecto para obtener tu contrase�a.';
$txt['no_mods'] = '�No se encontraron moderadores!';
$txt['parent_not_found'] = 'Estructura corrupta del foro: no se pudo encontrar el foro padre';
$txt['modify_post_time_passed'] = 'No puedes modificar este mensaje ya que el tiempo l�mite permitido para editar mensajes ha transcurrido.';

$txt['calendar_off'] = 'El calendario est� deshabilitado, no puedes acceder a �l en este momento.';
$txt['invalid_month'] = 'Mes inv�lido.';
$txt['invalid_year'] = 'A�o inv�lido.';
$txt['invalid_day'] = 'D�a no v�lido.';
$txt['event_month_missing'] = 'Falta el mes del evento.';
$txt['event_year_missing'] = 'Falta el a�o del evento.';
$txt['event_day_missing'] = 'Falta el d�a del evento.';
$txt['event_title_missing'] = 'Falta el t�tulo del evento.';
$txt['invalid_date'] = 'Fecha inv�lida.';
$txt['no_event_title'] = 'No se especific� el t�tulo del evento.';
$txt['missing_event_id'] = 'Falta el ID del evento.';
$txt['cant_edit_event'] = 'No estas autorizado para modificar este evento.';
$txt['missing_board_id'] = 'Falta ID del foro.';
$txt['missing_topic_id'] = 'Falta ID del tema.';
$txt['topic_doesnt_exist'] = 'No existe el tema.';
$txt['not_your_topic'] = 'No eres el due�o de este tema.';
$txt['board_doesnt_exist'] = 'El foro no existe.';
$txt['no_span'] = 'La caracter�stica de expansi�n est� deshabilitada.';
$txt['invalid_days_numb'] = 'N�mero inv�lido de d�as para expandirse.';

$txt['moveto_noboards'] = '�No hay foros a donde mover este tema!';

$txt['already_activated'] = 'Tu cuenta ya ha sido previamente activada.';
$txt['still_awaiting_approval'] = 'Tu cuenta est� todav�a en espera de la aprobaci�n de un administrador.';

$txt['invalid_email'] = 'Email / rango del email inv�lido.<br />Ejemplo de una direcci�n de email v�lida: webmaster@HablaJapones.org.<br />Ejemplo de un rango de direcci�n email v�lido: *@*.HablaJapones.org';
$txt['invalid_expiration_date'] = 'La fecha de expiraci�n no es v�lida';
$txt['invalid_hostname'] = 'Nombre del dominio / rango del dominio inv�lido.<br />Ejemplo de un nombre de dominio v�lido: proxy4.HablaJapones.org<br />Ejemplo de un rango de dominio v�lido: *.HablaJapones.org';
$txt['invalid_ip'] = 'IP / rango de IPs inv�lido.<br />Ejemplo de una direcci�n IP v�lida: 127.0.0.1<br />Ejemplo de un rango v�lido de direcciones IP: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'IP / Rango de IP inv�lido.<br />Ejemplo de IP v�lida: 127.0.0.1<br />Ejemplo de rango de IP v�lido: 127.0.0.*';
$txt['invalid_username'] = 'Nombre del usuario no encontrado';
$txt['no_ban_admin'] = '�No puedes prohibirle el acceso a un administrador - Debes degradarlo primero!';
$txt['no_bantype_selected'] = 'No se seleccion� el tipo prohibici�n de acceso';
$txt['ban_not_found'] = 'No se encontr� esta restricci�n de acceso';
$txt['ban_unknown_restriction_type'] = 'Tipo de restricci�n desconocida';
$txt['ban_name_empty'] = 'El nombre para banear est� en blanco';
$txt['ban_name_exists'] = 'Ya existe ese nombre para banear. Por favor, elige un nombre diferente.';
$txt['ban_trigger_already_exists'] = 'Este desencadenante de restricci�n de acceso (baneo) (%1$s) ya existe en %2$s.';

$txt['recycle_no_valid_board'] = 'No se ha seleccionado un foro v�lido para reciclar temas';

$txt['login_threshold_fail'] = 'Lo sentimos, por el momento no cuentas con intentos para ingresar.  Por favor, int�ntalo nuevamente m�s tarde.';
$txt['login_threshold_brute_fail'] = 'Lo sentimos, por el momento no cuentas con intentos para ingresar. Por favor, espera 30 segundos e intentalo de nuevo m�s tarde.';

$txt['who_off'] = 'No puedes accesar la lista de usuarios en l�nea por el momento, ya que est� deshabilitada.';

$txt['merge_create_topic_failed'] = 'Error al intentar crear un nuevo tema.';
$txt['merge_need_more_topics'] = 'El combinar temas necesita de al menos 2 temas para combinar.';

$txt['postWaitTime_broken'] = 'La �ltima publicaci�n desde tu IP fue hace menos de %d segundos. Por favor, int�ntalo de nuevo m�s tarde.';
$txt['registerWaitTime_broken'] = '�Te has registrado hace apenas %1$d segundos!';
$txt['loginWaitTime_broken'] = 'Tendr�s que esperar aproximadamente %1$d segundos para ingresar nuevamente.';
$txt['pmWaitTime_broken'] = 'El �ltimo mensaje privado desde tu IP fue hace menos de %1$d segundos. Por favor, int�ntalo de nuevo m�s tarde.';
$txt['reporttmWaitTime_broken'] = 'El �ltimo informe desde tu IP fue hace menos de %1$d segundos. Por favor, int�ntalo de nuevo m�s tarde.';
$txt['sendtopcWaitTime_broken'] = 'El �ltimo tema enviado desde tu IP fue hace menos de %1$d segundos. Por favor, int�ntalo de nuevo m�s tarde.';
$txt['sendmailWaitTime_broken'] = 'El �ltimo email enviado desde tu IP fue hace menos de %1$d segundos. Por favor, int�ntalo de nuevo m�s tarde.';
$txt['searchWaitTime_broken'] = 'La �ltima b�squeda realizada desde tu IP fue hace menos de %1$d segundos. Por favor, int�ntalo de nuevo m�s tarde.';

$txt['email_missing_data'] = 'Debes introducir algo tanto en el t�tulo como en el texto del mensaje.';

$txt['topic_gone'] = 'El tema o foro que est�s buscando parece que no existe, o fuera de tus l�mites.';
$txt['theme_edit_missing'] = '�El archivo que intentas editar... no puede encontrarse!';

$txt['attachments_no_write'] = 'No puede escribirse en el directorio para subir archivos adjuntos.  Tu archivo adjunto o avatar no se pudo guardar.';
$txt['attachments_limit_per_post'] = 'No puedes subir m�s de %1$d archivos adjuntos por mensaje';

$txt['no_dump_database'] = 'iexcl;Solamente los administradores pueden hacer respaldos de la base de datos!';
$txt['pm_not_yours'] = 'El mensaje personal que est�s tratando de citar no es tuyo o no existe, por favor regresa e intenta nuevamente.';
$txt['mangled_post'] = 'Datos de la forma destrozados - por favor regresa e intenta nuevamente.';
$txt['quoted_post_deleted'] = 'El mensaje que est�s intentando no existe, fue eliminado, o ya no lo puedes ver.';
$txt['pm_too_many_per_hour'] = 'Has superado el l�mite de %1$d mensaje(s) privado(s) por hora.';
$txt['labels_too_many'] = '�Lo sentimos, %1$s mensajes ya tienen el m�ximo n�mero de etiquetas permitidas!';

$txt['register_only_once'] = 'Lo sentimos, pero no tienes permitido el registrar m�ltiples cuentas al mismo tiempo desde la misma computadora.';
$txt['admin_setting_coppa_require_contact'] = 'Debes introducir una direcci�n postal o fax de contacto si se necesita aprobaci�n de padres/tutores.';

$txt['error_long_name'] = 'El nombre que utilizaste fue muy largo.';
$txt['error_no_name'] = 'No se proporcion� ning�n nombre.';
$txt['error_bad_name'] = 'El nombre que enviaste no se pudo utilizar, ya que es un nombre reservado.';
$txt['error_no_email'] = 'No se proporcion� ninguna direcci�n de email.';
$txt['error_bad_email'] = 'Se proporcion� una direcci�n de email inv�lida.';
$txt['error_no_event'] = 'No se proporcion� un nombre de evento.';
$txt['error_no_subject'] = 'No se llen� el asunto.';
$txt['error_no_question'] = '�La encuesta debe tener una pregunta!';
$txt['error_no_message'] = 'El cuerpo del mensaje se dej� vac�o.';
$txt['error_long_message'] = 'El mensaje excede la longit�d m�xima permitida (%s caracteres).';
$txt['error_no_comment'] = 'El campo de comentario esta vacio.';
$txt['error_session_timeout'] = 'Tu sesi�n ha expirado. Por favor, reenv�a tu mensaje.';
$txt['error_no_to'] = 'No se especificaron destinatarios.';
$txt['error_bad_to'] = 'No se encontraron uno o mas destinatarios-\'para\'.';
$txt['error_bad_bcc'] = 'No se encontraron uno o mas destinatarios-\'bcc\'.';
$txt['error_form_already_submitted'] = '�Ya has enviado este mensaje! Probablemente hiciste doble clic, o intentaste refrescar el navegador.';
$txt['error_poll_few'] = '�Debes tener al menos dos opciones!';
$txt['error_need_qr_verification'] = 'Por favor completa la secci�n de verificaci�n para enviar tu mensaje.';
$txt['error_wrong_verification_code'] = 'Lo que has tecleado no se corresponde con lo mostrado en la imagen.';
$txt['error_wrong_verification_answer'] = 'No has contestado a las preguntas de verificaci�n correctamente.';
$txt['error_need_verification_code'] = 'Por favor introduce el c�digo de verificaci�n para continuar a los resultados.';
$txt['error_bad_file'] = 'Lo siento, pero el archivo especificado no se pudo abrir: %1$s';
$txt['error_bad_line'] = 'La l�nea especificada no es v�lida.';

$txt['smiley_not_found'] = 'No se encontr� el smiley.';
$txt['smiley_has_no_code'] = 'No se proporcion� c�digo para este smiley.';
$txt['smiley_has_no_filename'] = 'No se proporcion� el nombre del archivo para este smiley.';
$txt['smiley_not_unique'] = 'Un smiley con ese c�digo ya existe previamente.';
$txt['smiley_set_already_exists'] = 'Un smiley con ese URL ya existe previamente';
$txt['smiley_set_not_found'] = 'No se encontr� esa colecci�n de smileys';
$txt['smiley_set_path_already_used'] = 'El URL para esa colecci�n de smileys esta siendo utilizado actualmente por otra colecci�n de smileys.';
$txt['smiley_set_unable_to_import'] = 'No se pudo importar la colecci�n de smileys. El directorio es inv�lido o no pudo ser accesado.';

$txt['smileys_upload_error'] = 'No se pudo subir el archivo.';
$txt['smileys_upload_error_blank'] = '�Todos los conjuntos de smileys deben tener una imagen!';
$txt['smileys_upload_error_name'] = '�Todos los smileys deben tener el mismo nombre de archivo!';
$txt['smileys_upload_error_illegal'] = 'Tipo Ilegal.';

$txt['search_invalid_weights'] = 'Buscar pesos que no est�n configurados adecuadamente. Al menos un peso debe estar configurado para que sea diferente de cero. Por favor, informa sobre este error a un administrador.';
$txt['unable_to_create_temporary'] = 'La funci�n de b�squeda no pudo crear tablas temporales.  Por favor, int�ntalo nuevamente.';

$txt['package_no_file'] = '�No se pudo encontrar el archivo!';
$txt['packageget_unable'] = 'No fue posible conectarse al servidor.  Por favor, int�ntalo usando <a href="%1$s" target="_blank" class="new_win">esta URL</a>.';
$txt['not_on_simplemachines'] = 'Lo sentimos, los paquetes solo pueden ser descargados de esta manera del servidor de simplemachines.org.';
$txt['package_cant_uninstall'] = 'Este paquete o nunca fue instalado, o ya ha sido desinstalado previamente - no puedes desinstalarlo ahora.';
$txt['package_cant_download'] = '�No puedes descargar o instalar nuevos paquetes ya que directorio Packages o alguno de los archivos que hay dentro de �l no es escribible!';
$txt['package_upload_error_nofile'] = 'No has seleccionado un paquete para subir.';
$txt['package_upload_error_failed'] = 'No se ha podido subir el paquete, �por favor comprueba los permisos del directorio!';
$txt['package_upload_error_exists'] = 'El archivo que est�s subiendo ya existe en el servidor. Por favor, b�rralo e int�ntalo nuevamente.';
$txt['package_upload_error_supports'] = 'El gestor de paquetes actualmente s�lo soporta estos tipos de archivos: %1$s.';
$txt['package_upload_error_broken'] = 'El paquete que est�s intentando subir no es un paquete v�lido o bien est� estropeado.';

$txt['package_get_error_not_found'] = 'El paquete que est�s intentando instalar no se puede encontrar. Puede que quieras subirlo manualmente a tu directorio &quot;Packages&quot;.';
$txt['package_get_error_missing_xml'] = 'Al paquete que est�s intentando instalar le falta el archivo package-info.xml que debe estar en la carpeta principal del paquete.';
$txt['package_get_error_is_zero'] = 'Aunque el paquete se ha subido al servidor, parece estar vacio. Por favor comprueba que el directorio &quot;Packages&quot; y su subdirectorio &quot;temp&quot; son escribibles. Si el problema persiste, intenta extraer el paquete en tu PC y subir los archivos descomprimidos en un subdirectorio dentro de la carpeta &quot;Packages&quot; y prueba de nuevo. Por ejemplo, si el paquete se llama &quot;shout.tar.gz&quot; deberias:<br />1) Descargar el paquete a tu PC local y descomprimirlo.<br />2) Usando un cliente FTP crear un directorio dentro de la carpeta &quot;Packages&quot;, en este ejemplo, la llamarias &quot;shout&quot;.<br />3) Subir todos los archivos que has descomprimido del paquete en tu PC a este directorio.<br />4) Volver al instalador de paquetes y SMF habr� encontrado el paquete autom�ticamente.';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF no pudo encontrar informaci�n v�lida dentro del archivo package-info.xml incluido en el paquete. Puede que haya un error en la modificaci�, o el paquete esta corrupto.';

$txt['no_membergroup_selected'] = 'No se seleccion� ning�n grupo de usuarios';
$txt['membergroup_does_not_exist'] = 'El grupo no existe o no es v�lido.';

$txt['at_least_one_admin'] = '�Debe haber por lo menos un administrador en el foro!';

$txt['error_functionality_not_windows'] = 'Lo sentimos, esta funcionalidad no esta disponible para servidores Windows en este momento.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'No se encontr� el archivo adjunto';

$txt['error_no_boards_selected'] = '�No se seleccion� ning�n foro v�lido!';
$txt['error_invalid_search_string'] = '�Olvidaste escribir lo que se buscar�?';
$txt['error_invalid_search_string_blacklist'] = 'Tu consulta conten�a demasiadas palabras triviales. Por favor prueba con otra consulta.';
$txt['error_search_string_small_words'] = 'Cada palabra debe tener al menos dos caracteres.';
$txt['error_query_not_specific_enough'] = 'La consulta no es lo suficientemente espec�fica. Por favor, utiliza palabras m�s largas.';
$txt['error_no_messages_in_time_frame'] = 'No se encontraron mensajes en el tiempo que se especific�';
$txt['error_no_labels_selected'] = '�Ninguna etiqueta fue seleccionada!';
$txt['error_no_search_daemon'] = 'No se ha podido iniciar el servicio de b�squeda';

$txt['profile_errors_occurred'] = 'Ocurrieron los siguientes errores mientras se intentaba guardar tu perfil';
$txt['profile_error_bad_offset'] = 'La diferencia horaria est� fuera de rango';
$txt['profile_error_no_name'] = 'El campo del nombre se dej� en blanco';
$txt['profile_error_name_taken'] = 'El nombre de usuario especificado ya est� siendo utilizado por alguien m�s';
$txt['profile_error_name_too_long'] = 'El nombre seleccionado es demasiado largo. No puede tener mas de 60 caracteres.';
$txt['profile_error_no_email'] = 'El campo de email se dej� en blanco';
$txt['profile_error_bad_email'] = 'No has proporcionado una direcci�n de email v�lida';
$txt['profile_error_email_taken'] = 'Otro usuario ya se encuentra registrado con esa direcci�n de email';
$txt['profile_error_no_password'] = 'No especificaste tu contrase�a';
$txt['profile_error_bad_new_password'] = 'Las nuevas contrase�as que especificaste no coinciden';
$txt['profile_error_bad_password'] = 'La contrase�a que proporcionaste es incorrecta';
$txt['profile_error_bad_avatar'] = 'El avatar que has seleccionado es muy grande';
$txt['profile_error_password_short'] = 'Tu contrase�a debe contener un m�nimo de ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' caracteres.';
$txt['profile_error_password_restricted_words'] = 'Tu contrase�a no debe contener tu usuario, direcci�n email u otras palabras usuales.';
$txt['profile_error_password_chars'] = 'Tu contrase�a debe contener una mezcla de letras may�sculas y min�sculas, as� como n�meros.';
$txt['profile_error_already_requested_group'] = '�Ya tienes una consulta en curso para ese grupo!';
$txt['profile_error_openid_in_use'] = 'Otro usuario esta usando esa URL de autentificaci�n OpenID';

$txt['mysql_error_space'] = ' - revisa el espacio disponible de la base de datos.';

$txt['icon_not_found'] = 'El icono no se pudo encontrar en el tema por defecto - por favor revisa que la imagen ha sido subida a su respectivo directorio e intenta nuevamente.';
$txt['icon_after_itself'] = '�El icono no puede colocarse despu�s de s� mismo!';
$txt['icon_name_too_long'] = 'El nombre del inono no puede tener mas de 16 caracteres de largo';

$txt['name_censored'] = 'Lo sentimos, el nombre que intentaste usar, %1$s, contiene palabras que han sido censuradas. Por favor intenta con otro nombre.';

$txt['poll_already_exists'] = '�Un tema solamente puede contener una encuesta asociada!';
$txt['poll_not_found'] = '�No hay ninguna encuesta asociada a este tema!';

$txt['error_while_adding_poll'] = 'Ocurrieron los siguientes errores al a�adir esta encuesta';
$txt['error_while_editing_poll'] = 'Ocurrieron los siguientes errores al editar esta encuesta';

$txt['loadavg_search_disabled'] = 'Debido a la sobrecarga del servidor, la funci�n de b�squedas no est� disponible actualmente.';
$txt['loadavg_generic_disabled'] = 'Lo sentimos, debido a la sobrecarga del servidor, esta funci�n no est� disponible actualmente.';
$txt['loadavg_allunread_disabled'] = 'Los recursos del servidor est�n sobrecargados como para encontrar todos los temas que no has le�do.';
$txt['loadavg_unreadreplies_disabled'] = 'El servidor est� sobrecargado. Por favor, int�ntalo de nuevo m�s tarde.';
$txt['loadavg_show_posts_disabled'] = 'Por favor, int�ntalo de nuevo m�s tarde.  Los mesajes de este usuario no est�n disponibles debido a la sobrecarga del servidor.';
$txt['loadavg_unread_disabled'] = 'Los recursos del servidor se encuentran temporalmente bajo una demanda excesivamente alta, y no se pueden listar tus temas sin leer en estos momentos.';

$txt['cannot_edit_permissions_inherited'] = 'No puedes editar permisos inherentes directamente, debes editar el grupo padre o bien la correspondencia del grupo.';

$txt['mc_no_modreport_specified'] = 'Necesitas especificar que informe deseas ver.';
$txt['mc_no_modreport_found'] = 'El informe especificado no existe o est� fuera de tus l�mites';

$txt['st_cannot_retrieve_file'] = 'No se pudo obtener el archivo %1$s.';
$txt['admin_file_not_found'] = 'No se pudo cargar el archivo solicitado: %1$s.';

$txt['themes_none_selectable'] = 'Debe seleccionarse al menos un tema.';
$txt['themes_default_selectable'] = 'El tema por defecto debe ser un tema seleccionable.';
$txt['ignoreboards_disallowed'] = 'La opci�n para ignorar foros no ha sido habilitada.';

$txt['mboards_delete_error'] = '�Ninguna categor�a seleccionada!';
$txt['mboards_delete_board_error'] = '�Ning�n foro seleccionado!';

$txt['mboards_parent_own_child_error'] = '�Es imposible convertir un foro en subforo de s� mismo!';
$txt['mboards_board_own_child_error'] = '�Es imposible convertir un foro en subforo de s� mismo!';

$txt['smileys_upload_error_notwritable'] = 'Los siguientes directorios de emoticonos son tienen permisos de escritura: %1$s';
$txt['smileys_upload_error_types'] = 'La imagen s�lo puede tener una de las siguientes extensiones: %1$s.';

$txt['change_email_success'] = 'Tu direcci�n email ha cambiado, se enviar� un nuevo email de activaci�n a dicha direcci�n.';
$txt['resend_email_success'] = 'Email de activaci�n enviado correctamente.';

$txt['custom_option_need_name'] = '�La opci�n del perfil debe tener un nombre!';
$txt['custom_option_not_unique'] = '�El nombre del campo no es �nico!';

$txt['warning_no_reason'] = 'Debes introducir una raz�n para alterar el estado de advertencia de un miembro.';
$txt['warning_notify_blank'] = 'Has seleccionado notificar al usuario pero no rellenaste los campos Asunto/Mensaje.';

$txt['cannot_connect_doc_site'] = 'No se ha podido conectar al Manual Online de Simple Machines. Por favor, comprueba que la configuraci�n de tu servidor permite conexiones externas e int�ntalo de nuevo m�s tarde.';

$txt['movetopic_no_reason'] = 'Debes introducir una razon para mover el tema, o bien desactivar la opci�n \'publicar un tema de redirecci�n\'.';

// OpenID error strings
$txt['openid_server_bad_response'] = 'El identificador solicitado no devolvi� una informaci�n apropiada.';
$txt['openid_return_no_mode'] = 'El proveedor de identidad no respondi� en el modo Open ID.';
$txt['openid_not_resolved'] = 'El proveedor de identidad no aprob� tu solicitud.';
$txt['openid_no_assoc'] = 'No se pudo encontrar la asociaci�n solicitada con el proveedor de identidad.';
$txt['openid_sig_invalid'] = 'La firma del proveedor de indentidad no es v�lida.';
$txt['openid_load_data'] = 'No se pudo descargar datos de tu solicitud de conexi�n. Por favor, int�ntalo m�s tarde.';
$txt['openid_not_verified'] = 'La direcci�n OpenID dada a�n no ha sido verificada. Por favor, con�ctate para verificarla.';

$txt['error_custom_field_too_long'] = 'El campo &quot;%1$s&quot; no puede tener una longitud superior a los %1$d caracteres.';
$txt['error_custom_field_invalid_email'] = 'El campo &quot;%1$s&quot; debe ser una direcci�n de email v�lida.';
$txt['error_custom_field_not_number'] = 'El campo &quot;%1$s&quot; debe ser num�rico.';
$txt['error_custom_field_inproper_format'] = 'El campo &quot;%1$s&quot; tiene un formato no v�lido.';
$txt['error_custom_field_empty'] = 'El campo &quot;%1$s&quot; no puede ser dejado en blanco.';

$txt['email_no_template'] = 'La plantilla de email &quot;%1$s&quot; no pudo ser encontrada.';

$txt['search_api_missing'] = 'No se pudo encontrar la API de b�squeda. Por favor, contacte con el administrador para que compruebe que se han subido los archivos adecuados.';
$txt['search_api_not_compatible'] = 'La API de b�squeda seleccionada que est� usando el foro est� obsoleta - volviendo a la b�squeda est�ndar. Compruebe el archivo %1$s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'No puedes restaurar el primer mensaje de un tema.';
$txt['parent_topic_missing'] = 'El tema padre del mensaje que est�s intentando restaurar ha sido eliminado.';
$txt['restored_disabled'] = 'Se ha deshabilitado la restauraci�n de temas.';
$txt['restore_not_found'] = 'Los siguientes mensajes no pudieron ser restaurados; el tema original puede haber sido eliminado:<ul style="margin-top: 0px;">%1$s</ul>Tendr�s que moverlos manualmente.';

$txt['error_invalid_dir'] = 'El directorio introducido no es v�lido.';

$txt['error_sqlite_optimizing'] = 'Sqlite est� optimizando la base de datos. El foro no podr� ser accedido hasta que haya terminado. Por favor, intente refrescar esta p�gina en unos momentos.';

?>