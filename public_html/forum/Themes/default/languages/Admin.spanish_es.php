<?php
// Version: 2.0; Admin

global $settings, $scripturl;

$txt['admin_boards'] = 'Foros';
$txt['admin_users'] = 'Usuarios';
$txt['admin_newsletters'] = 'Boletines de Noticias';
$txt['admin_edit_news'] = 'Noticias';
$txt['admin_groups'] = 'Grupos de usuarios';
$txt['admin_members'] = 'Ver todos los usuarios';
$txt['admin_members_list'] = 'Debajo est� el listado de todos los usuarios registrados actualmente en tu foro.';
$txt['admin_next'] = 'Siguiente';
$txt['admin_censored_words'] = 'Palabras censuradas';
$txt['admin_censored_where'] = 'Escribe la palabra a ser censurada en la izquierda, y la palabra por la que se cambiar� en la derecha.';
$txt['admin_censored_desc'] = 'Debido a la naturaleza p�blica de los foros, puede que haya algunas palabras que desees prohibir que se publiquen por usuarios en tu foro. Puedes introducir cualquier palabra que desees que se censure cuando sea usada por alg�n usuario.<br />Para eliminar una palabra, limpia su cuadro de texto.';
$txt['admin_reserved_names'] = 'Nombres reservados';
$txt['admin_template_edit'] = 'Editar la plantilla del foro';
$txt['admin_modifications'] = 'Configuraci�n de modificaciones';
$txt['admin_security_moderation'] = 'Seguridad y Moderaci�n';
$txt['admin_server_settings'] = 'Configuraci�n del Servidor';
$txt['admin_reserved_set'] = 'Establecer nombres reservados';
$txt['admin_reserved_line'] = 'Una palabra reservada por l�nea';
$txt['admin_basic_settings'] = 'Esta p�gina te permite cambiar la configuraci�n b�sica de tu foro. S� muy cuidadoso con estas configuraciones, ya que podr�an dejar el foro sin funcionar. Es importante mencionar que algunas de estas opciones (como, por ejemplo, el formato de la hora) son predeterminadas solamente para visitantes.';
$txt['admin_maintain'] = 'Activar el Modo de Mantenimiento';
$txt['admin_title'] = 'T�tulo del Foro';
$txt['admin_url'] = 'URL del Foro';
$txt['cookie_name'] = 'Nombre de la Cookie';
$txt['admin_webmaster_email'] = 'Direcci�n email del Webmaster';
$txt['boarddir'] = 'Directorio SMF';
$txt['sourcesdir'] = 'Directorio de Fuentes';
$txt['cachedir'] = 'Directorio Cache';
$txt['admin_news'] = 'Activar Noticias';
$txt['admin_guest_post'] = 'Activar la publicaci�n de mensajes para visitantes';
$txt['admin_manage_members'] = 'Controles de los Usuarios';
$txt['admin_main'] = 'Controles del Foro';
$txt['admin_config'] = 'Configuraci�n del Foro';
$txt['admin_version_check'] = 'Revisi�n detallada de la versi�n';
$txt['admin_smffile'] = 'Archivo SMF';
$txt['admin_smfpackage'] = 'Paquete SMF';
$txt['admin_maintenance'] = 'Mantenimiento';
$txt['admin_image_text'] = 'Mostrar botones como im�genes, en vez de texto';
$txt['admin_credits'] = 'Cr�ditos';
$txt['admin_agreement'] = 'Mostrar y requerir carta de aceptaci�n cuando se registren';
$txt['admin_agreement_default'] = 'Por defecto';
$txt['admin_agreement_select_language'] = 'Idioma a editar';
$txt['admin_agreement_select_language_change'] = 'Cambiar';
$txt['admin_delete_members'] = 'Borrar usuarios seleccionados';
$txt['admin_repair'] = 'Reparar todos los Foros y Temas';
$txt['admin_main_welcome'] = 'Este es tu "%1$s".  Desde aqu� puedes modificar la configuraci�n del foro, realizar tareas de mantenieminto, ver logs, instalar paquetes, gestionar temas, y muchas otras cosas.<div style="margin-top: 1ex;">Si tienes alg�n problema, por favor revisa la p�gina de "Soporte y Cr�ditos".  Si esa informaci�n no te sirve, puedes <a href="http://www.simplemachines.org/community/index.php?board=16.0" target="_blank" class="new_win">visitarnos para solicitar ayuda</a> acerca de tu problema.</div>Tambi�n puedes encontrar respuestas a tus preguntas y problemas haciendo clic en los s�mbolos <img src="' . $settings['images_url'] . '/helptopics.gif" alt="%2$s" title="%3$s" /> para obtener mayor informaci�n de las funciones en cuesti�n.';
$txt['admin_news_desc'] = 'Introduce una noticia en cada cuadro. Algunas etiquetas BBC, como <span title="�Est�s en negritas?">[b]</span>, <span title="�Cursivas!">[i]</span> y <span title="Los corchetes son grandiosos, �no?">[u]</span> est�n permitidos en las noticias, as� como los smileys. Limpia el cuadro de cualquier elemento de las noticias para eliminarlo.';
$txt['administrators'] = 'Administradores del Foro';
$txt['admin_reserved_desc'] = 'Los Nombres Reservados impiden que los usuarios registren ciertos nombres de usuario o usen esas palabras en sus nombres a mostrar. Escoge las opciones que desees usar en la parte inferior antes de enviar el formulario.';
$txt['admin_activation_email'] = 'Enviar email de activaci�n a los nuevos usuarios, despu�s de registrarse';
$txt['admin_match_whole'] = 'Coincidir palabra completa solamente. Si no est� seleccionada, buscar� por palabras reservadas dentro del nombre.';
$txt['admin_match_case'] = 'Sensible a may�sculas. Si no est� seleccionada, la b�squeda NO ser� sensible a may�sculas.';
$txt['admin_check_user'] = 'Revisar nombre de usuario.';
$txt['admin_check_display'] = 'Revisar nombre mostrado.';
$txt['admin_newsletter_send'] = 'Puedes enviar email a cualquiera desde esta p�gina. La direcci�n email del grupo de usuarios seleccionado debe aparecer debajo, pero puedes agregar o eliminar cualquier direcci�n de email que desees. Cada direcci�n de email debe estar separada de esta manera: \'direcci�n1; direcci�n2\'.';
$txt['admin_fader_delay'] = 'Retardo del desvanecimiento entre elementos en el cuadro de noticias';
$txt['admin_bbc'] = 'Mostrar botones BBC en las p�ginas de Publicar Mensaje y env�o de MP';

$txt['admin_backup_fail'] = 'No se pudo hacer un respaldo de Settings.php - por favor revisa que Settings_bak.php exista, y pueda escribirse en �l.';
$txt['modSettings_info'] = 'Cambia o especifica las opciones de control con las que opera este foro.';
$txt['database_server'] = 'Servidor de la base de datos';
$txt['database_user'] = 'Nombre de usuario de la base de datos';
$txt['database_password'] = 'Contrase�a de la base de datos';
$txt['database_name'] = 'Nombre de la base de datos';
$txt['registration_agreement'] = 'Carta de Aceptaci�n';
$txt['registration_agreement_desc'] = 'Esta Carta de Aceptaci�n se muestra cuando un usuario registra una cuenta en el foro y tiene que ser aceptada para que los usuarios puedan continuar registr�ndose.';
$txt['database_prefix'] = 'Prefijo de las tablas de la Base de datos';
$txt['errors_list'] = 'Listado de errores del foro';
$txt['errors_found'] = 'Los siguientes errores est�n presentes en tu foro (vac�o si ninguno)';
$txt['errors_fix'] = '�Deseas intentar arreglar esos errores?';
$txt['errors_do_recount'] = 'Todos los errores han sido reparados - se cre� un �rea de recuperaci�n. Por favor, haga clic en el bot�n que hay a continuaci�n para recontar algunas estad�sticas clave.';
$txt['errors_recount_now'] = 'Recuento de estad�sticas';
$txt['errors_fixing'] = 'Arreglando errores del foro';
$txt['errors_fixed'] = '�Arreglados todos los errores! Necesitar�s revisar cualquier nueva categor�a, foro, o temas para decidir qu� har�s con ellas.';
$txt['attachments_avatars'] = 'Archivos adjuntos y Avatares';
$txt['attachments_desc'] = 'Desde aqu� puedes administrar los archivos adjuntos que se encuentran en tu sistema. Puedes borrar archivos adjuntos por tama�o y por fecha. Las estad�sticas de los archivos adjuntos se muestran debajo.';
$txt['attachment_stats'] = 'Estad�sticas de los Archivos adjuntos';
$txt['attachment_integrity_check'] = 'Comprobar la integridad de los archivos adjuntos';
$txt['attachment_integrity_check_desc'] = 'Esta funci�n chequea la integridad y los tama�os de los adjuntos y archivos listados en la base de datos y, si es necesario, repara los errores encontrados.';
$txt['attachment_check_now'] = 'Ejecutar el chequeo ahora';
$txt['attachment_pruning'] = 'Borrar adjuntos';
$txt['attachment_pruning_message'] = 'Texto que se a�adir� al mensaje';
$txt['attachment_pruning_warning'] = '�Estas seguro que deseas eliminar estos archivos adjuntos?\\n�Esta acci�n no se puede deshacer!';
$txt['attachment_total'] = 'Total de Archivos adjuntos';
$txt['attachmentdir_size'] = 'Tama�o total del directorio de Archivos adjuntos';
$txt['attachmentdir_size_current'] = 'Espacio total para el directorio de adjuntos';
$txt['attachment_space'] = 'Espacio total disponible en el directorio de Archivos adjuntos';
$txt['attachment_space_current'] = 'Espacio total disponible en el directorio actual de archivos adjuntos';
$txt['attachment_options'] = 'Opciones de los Archivos adjuntos';
$txt['attachment_log'] = 'Log de Archivos adjuntos';
$txt['attachment_remove_old'] = 'Eliminar archivos adjuntos m�s antiguos que';
$txt['attachment_remove_size'] = 'Eliminar archivos adjuntos m�s grandes que';
$txt['attachment_name'] = 'Nombre del Archivo adjunto';
$txt['attachment_file_size'] = 'Tama�o';
$txt['attachmentdir_size_not_set'] = 'No se ha establecido un tama�o m�ximo del directorio de archivos adjuntos';
$txt['attachment_delete_admin'] = '[archivo adjunto borrado por el administrador]';
$txt['live'] = 'En vivo desde Simple Machines...';
$txt['remove_all'] = 'Eliminar todo';
$txt['approve_new_members'] = 'Un administrador debe aprobar todos los nuevos usuarios';
$txt['agreement_not_writable'] = 'Advertencia - NO se puede escribir en agreement.txt. Cualquier cambio que hagas NO se guardar�';

$txt['version_check_desc'] = 'Esto te muestra las versiones de tus archivos instalados, comparados con las �ltimas versiones de �stos. Si alguno de estos archivos est�n desactualizados, debes descargar y actualizar a la �ltima versi�n en <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$txt['version_check_more'] = '(m�s detallado)';

$txt['lfyi'] = 'No puedes conectarte al �ltimo archivo de noticias de simplemachines.org.';

$txt['manage_calendar'] = 'Calendario';
$txt['manage_search'] = 'Buscar';

$txt['smileys_manage'] = 'Conjunto de Smileys e Iconos de Mensajes';
$txt['smileys_manage_info'] = 'Instalar nuevos conjuntos de smileys o agregar smileys a los conjuntos existentes, adem�s de administrar los iconos de los mensajes.';
$txt['package_info'] = 'Instalar nuevas caracter�sticas o modificar las existentes con esta interfaz.';
$txt['theme_admin'] = 'Temas y Dise�o';
$txt['theme_admin_info'] = 'Configurar y administrar tus temas, as� como especificar o reininicalizar las opciones del tema.';
$txt['registration_center'] = 'Registro de Usuarios';
$txt['member_center_info'] = 'Ver la lista de usuarios, buscar usuarios y gestionar usuarios pendientes de aprobaci�n y que a�n no han activado su cuenta.';

$txt['viewmembers_name'] = 'Nombre de usuario (nombre mostrado)';
$txt['viewmembers_online'] = '�ltima vez en l�nea';
$txt['viewmembers_today'] = 'Hoy';
$txt['viewmembers_day_ago'] = 'd�a';
$txt['viewmembers_days_ago'] = 'd�as';

$txt['display_name'] = 'Nombre a mostrar';
$txt['email_address'] = 'Direcci�n Email';
$txt['ip_address'] = 'Direcci�n IP';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'desconocido';
$txt['security_wrong'] = '�Intento de ingreso a administraci�n!' . "\n" . 'Referidor: %1$s' . "\n" . 'Agente de usuario: %2$s' . "\n" . 'IP: %3$s';

$txt['email_as_html'] = 'Enviar en formato HTML.  (con esto, puedes poner HTML en el email.)';
$txt['email_parsed_html'] = 'Agregar &lt;br /&gt;s y &amp;nbsp;s a este mensaje.';
$txt['email_variables'] = 'En este mensaje puedes usar algunas &quot;variables&quot;.  Haz clic <a href="' . $scripturl . '?action=helpadmin;help=emailmembers" onclick="return reqWin(this.href);" class="help">aqu�</a> para m�s informaci�n.';
$txt['email_force'] = 'Enviar a estos usuarios a�n si ellos eligieron no recibir anuncios.';
$txt['email_as_pms'] = 'Enviar esto a esos grupos usando mensajes personales.';
$txt['email_continue'] = 'Continuar';
$txt['email_done'] = 'finalizado.';

$txt['ban_title'] = 'Lista de accesos prohibidos';
$txt['ban_ip'] = 'IP con acceso prohibido: (ej. 192.168.12.213 o 128.0.*.*) - una por l�nea';
$txt['ban_email'] = 'Email con acceso prohibido: (ej. maldito@algunlugar.com) - uno por l�nea';
$txt['ban_username'] = 'Nombre de usuario con acceso prohibido: (ej. Webmaster) - uno por l�nea';

$txt['ban_description'] = 'Aqu� puedes restringirle el acceso a personas conflictivas ya sea por IP, nombre de servidor, nombre de usuario, o email.';
$txt['ban_add_new'] = 'Agregar nueva restricci�n de acceso';
$txt['ban_banned_entity'] = 'Elemento restringido';
$txt['ban_on_ip'] = 'Restingir por IP (ej. 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'Restringir por nombre de dominio (ej. *.mil)';
$txt['ban_on_email'] = 'Restringir por direcci�n de Email (ej. *@sitiomalo.com)';
$txt['ban_on_username'] = 'Restringir por nombre de usuario';
$txt['ban_notes'] = 'Notas';
$txt['ban_restriction'] = 'Restricci�n';
$txt['ban_full_ban'] = 'Restricci�n completa';
$txt['ban_partial_ban'] = 'Restricci�n parcial';
$txt['ban_cannot_post'] = 'No puede publicar';
$txt['ban_cannot_register'] = 'No puede registrarse';
$txt['ban_cannot_login'] = 'No puede ingresar';
$txt['ban_add'] = 'Agregar';
$txt['ban_edit_list'] = 'Editar lista de accesos prohibidos';
$txt['ban_type'] = 'Tipo de restricci�n';
$txt['ban_days'] = 'd�a(s)';
$txt['ban_will_expire_within'] = 'La restricci�n expirar� en';
$txt['ban_added'] = 'A�adido';
$txt['ban_expires'] = 'Expira';
$txt['ban_hits'] = 'Intentos';
$txt['ban_actions'] = 'Acciones';
$txt['ban_expiration'] = 'Expiraci�n';
$txt['ban_reason_desc'] = 'Motivo por el que se le restringi� el acceso, para ser mostrado al usuario en cuesti�n.';
$txt['ban_notes_desc'] = 'Notas que puedan ayudar a otros miembros admins.';
$txt['ban_remove_selected'] = 'Eliminar seleccionados';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = '�Est�s seguro que deseas eliminar los accesos restringidos seleccionados?';
$txt['ban_modify'] = 'Modificar';
$txt['ban_name'] = 'Nombre';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = 'Editar restricci�n';
$txt['ban_add_notes'] = '<strong>Nota</strong>: despu�s de crear la restricci�n de arriba, puedes a�adir datos adicionales que activen la restricci�n, como direcciones IP, nombres de dominios y direcciones email.';
$txt['ban_expired'] = 'Expirado / Desactivado';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = 'Ninguna restricci�n seleccionada.';

$txt['ban_triggers'] = 'Restricciones';
$txt['ban_add_trigger'] = 'A�adir restricci�n';
$txt['ban_add_trigger_submit'] = 'A�adir';
$txt['ban_edit_trigger'] = 'Modificar';
$txt['ban_edit_trigger_title'] = 'Editar restricci�n';
$txt['ban_edit_trigger_submit'] = 'Modificar';
$txt['ban_remove_selected_triggers'] = 'Eliminar las restricciones seleccionadas';
$txt['ban_no_entries'] = 'Actualmente no hay restricciones efectuadas.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = '�Est�s seguro de que deseas eliminar las restricciones seleccionadas?';
$txt['ban_trigger_browse'] = 'Mostrar restricciones';
$txt['ban_trigger_browse_description'] = 'Esta pantalla permite mostra todas las restricciones ordenadas por IP, nombre de dominio, direcci�n email o usuario.';

$txt['ban_log'] = 'Log de restricciones de acceso';
$txt['ban_log_description'] = 'El log de accesos prohibidos muestra todos los intentos de ingreso al foro por los usuarios a los que se les restringi� el acceso. (\'restricci�n completa\' y \'no puede registrarse\' solamente).';
$txt['ban_log_no_entries'] = 'No hay entradas del log de restricciones de acceso.';
$txt['ban_log_ip'] = 'IP';
$txt['ban_log_email'] = 'Direcci�n Email';
$txt['ban_log_member'] = 'Usuario';
$txt['ban_log_date'] = 'Fecha';
$txt['ban_log_remove_all'] = 'Eliminar Todos';
$txt['ban_log_remove_all_confirm'] = '�Est�s seguro que deseas eliminar todas las entradas del log de accesos prohibidos?';
$txt['ban_log_remove_selected'] = 'Eliminar seleccionados';
$txt['ban_log_remove_selected_confirm'] = '�Est�s seguro que deseas eliminar todas las entradas seleccionadas del log de accesos prohibidos?';
$txt['ban_no_triggers'] = 'No hay desencadenantes de restricci�n de acceso actualmente';

$txt['settings_not_writable'] = 'Esta configuraci�n no puede guardarse, ya que Settings.php es de s�lo lectura.';

$txt['maintain_title'] = 'Mantenimiento del Foro';
$txt['maintain_info'] = 'Con esas herramientas puedes optimizar tablas, hacer respaldos, revisar errores, y podar foros.';
$txt['maintain_sub_database'] = 'Base de datos';
$txt['maintain_sub_routine'] = 'Rutina';
$txt['maintain_sub_members'] = 'Miembros';
$txt['maintain_sub_topics'] = 'Temas';
$txt['maintain_done'] = 'La tarea de mantenimiento \'%1$s\' fue ejecutada con �xito.';
$txt['maintain_no_errors'] = '�Felicidades, no se encontr� ning�n error!  Gracias por verificar.';

$txt['maintain_tasks'] = 'Tareas Programadas';
$txt['maintain_tasks_desc'] = 'Administrar todas las tareas programadas por SMF.';

$txt['scheduled_log'] = 'Registro de tareas';
$txt['scheduled_log_desc'] = 'Listar el registro de tareas que se han realizado.';
$txt['admin_log'] = 'Registro de administraci�n';
$txt['admin_log_desc'] = 'Listar el registro de tareas administrativas que se han llevado a cabo por los administradores de tu foro.';
$txt['moderation_log'] = 'Registro de moderaci�n';
$txt['moderation_log_desc'] = 'Listar actividades de moderaci�n que se han llevado a cabo por los moderadores en tu foro.';
$txt['spider_log_desc'] = 'Revisar las entradas relacionadas con las ara�as de los motores de b�squeda en tu foro.';
$txt['pruning_log_desc'] = 'Utiliza estas herramientas para borrar las entradas antiguas en varios registros.';

$txt['mailqueue_title'] = 'Correo';

$txt['db_error_send'] = 'Enviar emails en errores de conexi�n de MySQL';
$txt['db_persist'] = 'Usar una conexi�n persistente';
$txt['ssi_db_user'] = 'Nombre de base de datos en modo SSI';
$txt['ssi_db_passwd'] = 'Contrase�a de base de datos en modo SSI';

$txt['default_language'] = 'Idioma por defecto en el foro';

$txt['maintenance_subject'] = 'Asunto a mostrar';
$txt['maintenance_message'] = 'Mensaje a mostrar';

$txt['errlog_desc'] = 'El log de errores registra cada error encontrado en tu foro.  Para eliminar cualquier error de la base de datos, selecciona la casilla, y haz clic en el bot�n  %1$s ubicado en la parte inferior de la p�gina.';
$txt['errlog_no_entries'] = 'Actualmente no hay registro de entradas err�neas.';

$txt['theme_settings'] = 'Configuraci�n del Tema';
$txt['theme_current_settings'] = 'Tema actual';

$txt['dvc_your'] = 'Tu versi�n';
$txt['dvc_current'] = 'Versi�n actual';
$txt['dvc_sources'] = 'Fuentes';
$txt['dvc_default'] = 'Plantillas por defecto';
$txt['dvc_templates'] = 'Plantillas actuales';
$txt['dvc_languages'] = 'Archivos de idioma';

$txt['smileys_default_set_for_theme'] = 'Selecciona la colecci�n de smileys para este tema';
$txt['smileys_no_default'] = '(usar conjunto global por defecto de smileys)';

$txt['censor_test'] = 'Probar palabras censuradas';
$txt['censor_test_save'] = 'Probar';
$txt['censor_case'] = 'Ignorar may�sculas/min�sculas cuando se est� censurando';
$txt['censor_whole_words'] = 'Censurar s�lo palabras completas';

$txt['admin_confirm_password'] = '(confirmar)';
$txt['admin_incorrect_password'] = 'Contrase�a incorrecta';

$txt['date_format'] = '(DD-MM-AAAA)';
$txt['undefined_gender'] = 'No definido';
$txt['age'] = 'Edad del usuario';
$txt['activation_status'] = 'Estado de la activaci�n';
$txt['activated'] = 'Activado';
$txt['not_activated'] = 'No activado';
$txt['primary'] = 'Primario';
$txt['additional'] = 'Adicional';
$txt['messenger_address'] = 'Direcci�n del Messenger';
$txt['wild_cards_allowed'] = 'Son permitidos los caracteres * y ?';
$txt['search_for'] = 'Buscar por';
$txt['member_part_of_these_membergroups'] = 'Usuario es parte de estos grupos';
$txt['membergroups'] = 'Grupos de usuario';
$txt['confirm_delete_members'] = '�Est�s seguro que deseas eliminar los usuarios seleccionados?';

$txt['support_credits_title'] = 'Soporte y Cr�ditos';
$txt['support_credits_info'] = 'Obt�n soporte de problemas comunes e informaci�n de la versi�n para proporcionar en caso que tengas problemas.';
$txt['support_title'] = 'Informaci�n de Soporte';
$txt['support_versions_current'] = 'Versi�n actual de SMF';
$txt['support_versions_forum'] = 'Versi�n del Foro';
$txt['support_versions_php'] = 'Versi�n de PHP';
$txt['support_versions_db'] = 'versi�n %1$s';
$txt['support_versions_server'] = 'Versi�n del Servidor';
$txt['support_versions_gd'] = 'Versi�n de GD';
$txt['support_versions'] = 'Informaci�n de versiones';
$txt['support_resources'] = 'Recursos de soporte';
$txt['support_resources_p1'] = 'Nuestro <a href="%1$s">Manual Online</a> proporciona la documentaci�n principal para SMF. El Manual Online de SMF contiene muchos documentos para ayudar a responder preguntas de soporte y explicar <a href="%2$s">Caracter�sticas</a>, <a href="%3$s">Configuraciones</a>, <a href="%4$s">Temas</a>, <a href="%5$s">Paquetes</a>, etc. El Manual  Online documenta cada �rea de SMF exhaustivamente y deber�a responder la mayor�a de las preguntas r�pidamente. ';
$txt['support_resources_p2'] = 'Si no puedes encontrar las respuestas a tus preguntas en el Manual Online, es posible que quieras buscar en nuestra <a href="%1$s">Comunidad de Soporte</a> o preguntar en nuestro foro en <a href="%2$s">Ingl�s</a> o en alguno de nuestros muchos <a href="%3$s">foros de soporte internacionales</a>. La Comunidad de Soporte SMF puede ser usada para <a href="%4$s">soporte</a>, <a href="%5$s">personalizaci�n</a>, y muchas otras cosas como discutir acerca de SMF, encontrar un proveedor de alojamiento y discutir sobre asuntos administrativos con otros administradores de foros. ';

$txt['support_latest'] = 'Soporte &amp; Asuntos comunes';
$txt['support_latest_fetch'] = 'Obteniendo informaci�n del soporte...';

$txt['edit_permissions_info'] = 'Cambiar restricciones y caracter�sticas disponibles globalmente o a foros espec�ficos.';
$txt['membergroups_members'] = 'Usuarios regulares';
$txt['membergroups_guests'] = 'Visitantes';
$txt['membergroups_guests_na'] = 'n/d';
$txt['membergroups_add_group'] = 'Agregar grupo';
$txt['membergroups_permissions'] = 'Permisos';

$txt['permitgroups_restrict'] = 'Restrictivo';
$txt['permitgroups_standard'] = 'Est�ndar';
$txt['permitgroups_moderator'] = 'Moderador';
$txt['permitgroups_maintenance'] = 'Mantenimiento';
$txt['permitgroups_inherit'] = 'Heredar';

$txt['confirm_delete_attachments_all'] = '�Est�s seguro que deseas eliminar todos los archivos adjuntos?';
$txt['confirm_delete_attachments'] = '�Est�s seguro que deseas eliminar los archivos adjuntos seleccionados?';
$txt['attachment_manager_browse_files'] = 'Examinar Archivos';
$txt['attachment_manager_repair'] = 'Mantiene';
$txt['attachment_manager_avatars'] = 'Avatares';
$txt['attachment_manager_attachments'] = 'Archivos adjuntos';
$txt['attachment_manager_thumbs'] = 'Mosaicos';
$txt['attachment_manager_last_active'] = '�ltima vez activo';
$txt['attachment_manager_member'] = 'Usuario';
$txt['attachment_manager_avatars_older'] = 'Eliminar avatares de usuarios no activos por m�s de';
$txt['attachment_manager_total_avatars'] = 'Total de Avatares';

$txt['attachment_manager_avatars_no_entries'] = 'Actualmente no hay avatares.';
$txt['attachment_manager_attachments_no_entries'] = 'Actualmente no hay archivos adjuntos.';
$txt['attachment_manager_thumbs_no_entries'] = 'Actualmente no hay miniaturas.';

$txt['attachment_manager_settings'] = 'Configuraci�n de los Archivos adjuntos';
$txt['attachment_manager_avatar_settings'] = 'Configuraci�n de los Avatares';
$txt['attachment_manager_browse'] = 'Examinar archivos';
$txt['attachment_manager_maintenance'] = 'Mantenimiento de Archivos';
$txt['attachment_manager_save'] = 'Guardar';

$txt['attachmentEnable'] = 'Modo de Adjuntos';
$txt['attachmentEnable_deactivate'] = 'Desactivar Archivos adjuntos';
$txt['attachmentEnable_enable_all'] = 'Activar todos los Archivos adjuntos';
$txt['attachmentEnable_disable_new'] = 'Desactivar nuevos Archivos adjuntos';
$txt['attachmentCheckExtensions'] = 'Revisar extensi�n del archivo adjunto';
$txt['attachmentExtensions'] = 'Extensiones permitidas de los archivos adjuntos';
$txt['attachmentRecodeLineEndings'] = 'Recodificar finales de l�nea en adjuntos textuales';
$txt['attachmentShowImages'] = 'Mostrar archivos adjuntos como im�genes debajo del mensaje';
$txt['attachmentEncryptFilenames'] = 'Encriptar los nombres de los archivos almacenados';
$txt['attachmentUploadDir'] = 'Directorio de archivos adjuntos <div class="smalltext"><a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">Configurar m�ltiples directorios de adjuntos</a></div>';
$txt['attachmentUploadDir_multiple'] = 'Directorio de archivos adjuntos';
$txt['attachmentUploadDir_multiple_configure'] = '<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">[Configurar m�ltiples directorios de adjuntos]</a>';
$txt['attachmentDirSizeLimit'] = 'Tama�o m�ximo del directorio de archivos adjuntos';
$txt['attachmentPostLimit'] = 'Tama�o m�ximo del archivos adjunto por mensaje';
$txt['attachmentSizeLimit'] = 'Tama�o m�ximo del archivos adjunto';
$txt['attachmentNumPerPostLimit'] = 'N�mero m�ximo de archivos adjuntos en un mensaje';
$txt['attachment_gd_warning'] = 'El m�dulo GD no est� instalado en estos momentos. La recodificaci�n de im�genes no es posible.';
$txt['attachment_image_reencode'] = 'Recodificar im�genes adjuntas potencialmente peligrosas';
$txt['attachment_image_reencode_note'] = '(requiere el m�dulo GD)';
$txt['attachment_image_paranoid_warning'] = 'Las comprobaciones de seguridad intensivas pueden dar como resultado que un gran n�mero de adjuntos sean rechazados.';
$txt['attachment_image_paranoid'] = 'Llevar a cabo comprobaciones de seguridad en las im�genes adjuntas subidas';
$txt['attachmentThumbnails'] = 'Redimensionar im�genes mostradas bajo los mensajes';
$txt['attachment_thumb_png'] = 'Guardar miniaturas como PNG';
$txt['attachmentThumbWidth'] = 'Ancho m�ximo de los mosaicos';
$txt['attachmentThumbHeight'] = 'Alto m�ximo de los mosaicos';

$txt['attach_dir_does_not_exist'] = 'No existe';
$txt['attach_dir_not_writable'] = 'No escribible';
$txt['attach_dir_files_missing'] = 'Faltan archivos (<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Reparar</a>)';
$txt['attach_dir_unused'] = 'No usado';
$txt['attach_dir_ok'] = 'OK';

$txt['attach_path_manage'] = 'Gestionar rutas de los adjuntos';
$txt['attach_paths'] = 'Rutas de archivos adjuntos';
$txt['attach_current_dir'] = 'Directorio actual';
$txt['attach_path'] = 'Ruta';
$txt['attach_current_size'] = 'Tama�o actual (KB)';
$txt['attach_num_files'] = 'Archivos';
$txt['attach_dir_status'] = 'Estado';
$txt['attach_add_path'] = 'A�adir Ruta';
$txt['attach_path_current_bad'] = 'Ruta de adjuntos actual no v�lida.';

$txt['mods_cat_avatars'] = 'Avatares';
$txt['avatar_directory'] = 'Directorio de Avatares';
$txt['avatar_url'] = 'URL de los Avatars';
$txt['avatar_dimension_note'] = '(0 = sin l�mite)';
$txt['avatar_max_width_external'] = 'Ancho m�ximo del avatar externo';
$txt['avatar_max_height_external'] = 'Alto m�ximo de avatar externo';
$txt['avatar_action_too_large'] = 'Si el avatar es demasiado grande...';
$txt['option_refuse'] = 'Rechazarlo';
$txt['option_html_resize'] = 'Permitirle al HTML ajustar el tama�o';
$txt['option_js_resize'] = 'Redimensionarlo con JavaScript';
$txt['option_download_and_resize'] = 'Descargarlo y ajustar el tama�o (se necesita el m�dulo GD)';
$txt['avatar_max_width_upload'] = 'Ancho m�ximo del avatar subido';
$txt['avatar_max_height_upload'] = 'Alto m�ximo del avatar subido';
$txt['avatar_resize_upload'] = 'Ajustarle el tama�o a los avatares muy grandes';
$txt['avatar_resize_upload_note'] = '(se necesita el m�dulo GD)';
$txt['avatar_download_png'] = 'Usar PNG para los avatares a los que se les ajust� el tama�o';
$txt['avatar_gd_warning'] = 'El modulo de GD no se encuentra instalado. Algunas funciones para la configuraci�n de avatares est�n desactivadas.';
$txt['avatar_external'] = 'Avatares externos';
$txt['avatar_upload'] = 'Se pueden subir avatares';
$txt['avatar_server_stored'] = 'Avatares almacenados en el servidor';
$txt['avatar_server_stored_groups'] = 'Grupos permitidos para seleccionar un avatar alojado en el servidor';
$txt['avatar_upload_groups'] = 'Grupos permitidos para subir un avatar al servidor';
$txt['avatar_external_url_groups'] = 'Grupos permitidos para seleccionar una URL externa';
$txt['avatar_select_permission'] = 'Selecciona los permisos para cada grupo de usuarios';
$txt['avatar_download_external'] = 'Descargar un avatar de la URL especificada';
$txt['custom_avatar_enabled'] = 'Subir avatares a...';
$txt['option_attachment_dir'] = 'Directorio de Archivos adjuntos';
$txt['option_specified_dir'] = 'Directorio espec�fico...';
$txt['custom_avatar_dir'] = 'Directorio al que se subir�n los archivos';
$txt['custom_avatar_dir_desc'] = 'No deber�a ser el mismo que el directorio de almacenamiento del servidor.';
$txt['custom_avatar_url'] = 'Subir avatar de la URL';
$txt['custom_avatar_check_empty'] = 'El directorio personalizado de avatares que has especificado puede estar vac�o o ser invalido. Por favor revisa que estas configuraciones sean correctas.';
$txt['avatar_reencode'] = 'Recodificar avatares potencialmente peligrosos';
$txt['avatar_reencode_note'] = '(requiere el m�dulo GD)';
$txt['avatar_paranoid_warning'] = 'Las comprobaciones de seguridad pueden dar como resultado que un importante n�mero de avatares sean rechazados.';
$txt['avatar_paranoid'] = 'Llevar a cabo comprobaciones de seguridad en los avatares subidos';

$txt['repair_attachments'] = 'Mantenimiento de Adjuntos';
$txt['repair_attachments_complete'] = 'Completado el Mantenimiento';
$txt['repair_attachments_complete_desc'] = 'Todos los errores seleccionados han sido corregidos';
$txt['repair_attachments_no_errors'] = '�Ning�n error encontrado!';
$txt['repair_attachments_error_desc'] = 'Se encontraron los siguientes errores durante el mantenimiento. Marca la casilla correspondiente al error que deseas corregir y pulsa en Continuar.';
$txt['repair_attachments_continue'] = 'Continuar';
$txt['repair_attachments_cancel'] = 'Cancelar';
$txt['attach_repair_missing_thumbnail_parent'] = '%1$d miniaturas no tienen un adjunto padre';
$txt['attach_repair_parent_missing_thumbnail'] = '%1$d padres est�n marcados como contenedores de miniaturas pero no contienen ninguna';
$txt['attach_repair_file_missing_on_disk'] = '%1$d adjuntos/avatares tienen una entrada pero ya no existen en el disco';
$txt['attach_repair_file_wrong_size'] = '%1$d adjuntos/avatares con un tama�o de archivo incorrecto han sido detectados';
$txt['attach_repair_file_size_of_zero'] = '%1$d adjuntos/avatares tienen tama�o cero. (Se eliminar�n)';
$txt['attach_repair_attachment_no_msg'] = '%1$d adjuntos ya no tienen ning�n mensaje asociado';
$txt['attach_repair_avatar_no_member'] = '%1$d avatares no tienen un miembro asociado';
$txt['attach_repair_wrong_folder'] = '%1$d archivos adjuntos est�n en una carpeta err�nea';

$txt['news_title'] = 'Noticias y Boletines';
$txt['news_settings_desc'] = 'Aqu� puedes cambiar la configuraci�n y los permisos relacionados con las noticias y boletines.';
$txt['news_settings_submit'] = 'Guardar';
$txt['news_mailing_desc'] = 'Desde este men� puedes enviar mensajes a todos los usuarios que se han registrado, e introducido su direcci�n de email. Puedes editar la lista de distribici�n, o enviar mensajes a todos. �til para informaci�n de noticias o modificaciones.';
$txt['groups_edit_news'] = 'Grupos permitidos para editar nuevos elementos';
$txt['groups_send_mail'] = 'Grupos permitidos para publicar boletines';
$txt['xmlnews_enable'] = '�Activar noticias XML/RSS?';
$txt['xmlnews_maxlen'] = 'Longitud m�xima del mensaje:<div class="smalltext">(cero para deshabilitarlo, mala idea)</div>';
$txt['editnews_clickadd'] = 'Haz clic aqu� para agregar otro elemento.';
$txt['editnews_remove_selected'] = 'Eliminar seleccionados';
$txt['editnews_remove_confirm'] = '�Est�s seguro que deseas eliminar los elementos de notificas seleccionados?';
$txt['censor_clickadd'] = 'Haz clic aqu� para agregar otra palabra.';

$txt['layout_controls'] = 'Controles de Temas y Dise�o';
$txt['logs'] = 'Registros';
$txt['generate_reports'] = 'Generar Informes';

$txt['update_available'] = '�Actualizaci�n Disponible!';
$txt['update_message'] = 'Est�s utilizando una version desactualizada de SMF, que contiene algunos errores ya solventados.
	Te recomentamos que <a href="" id="update-link">actualizes tu foro</a> a la �ltima versi�n cuanto antes. �S�lo te llevar� un minuto!';

$txt['manageposts'] = 'Mensajes y Temas';
$txt['manageposts_title'] = 'Configurar Mensajes y Temas';
$txt['manageposts_description'] = 'Aqu� puedes configurar todo lo relacionado con los mensajes y temas.';

$txt['manageposts_seconds'] = 'segundos';
$txt['manageposts_minutes'] = 'minutos';
$txt['manageposts_characters'] = 'caracteres';
$txt['manageposts_days'] = 'd�as';
$txt['manageposts_posts'] = 'mensajes';
$txt['manageposts_topics'] = 'temas';

$txt['manageposts_settings'] = 'Configuraci�n de Mensajes';
$txt['manageposts_settings_description'] = 'Aqu� puedes configurar todo lo relacionado con los mensajes.';
$txt['manageposts_settings_submit'] = 'Guardar';

$txt['manageposts_bbc_settings'] = 'C�digos BBC';
$txt['manageposts_bbc_settings_description'] = 'Se pueden utilizar c�digos BBC para cambiar la apariencia de los mensajes del foro. Por ejemplo, para enfatizar la palabra \'casa\' puedes teclear [b]casa[/b]. Todas las marcas de c�digos BBC deben ir acompa�adas de corchetes (\'[\' y \']\').';
$txt['manageposts_bbc_settings_title'] = 'Configuraci�n de c�digos BBC';
$txt['manageposts_bbc_settings_submit'] = 'Guardar';

$txt['manageposts_topic_settings'] = 'Configuraci�n de Temas';
$txt['manageposts_topic_settings_description'] = 'Aqu� puedes configurar todo lo relacionado con los temas.';
$txt['manageposts_topic_settings_submit'] = 'Guardar';

$txt['removeNestedQuotes'] = 'Eliminar citas anidadas al citar texto';
$txt['enableEmbeddedFlash'] = '�Incrustar flash? (de lo contrario, mostrarlo como un enlace)';
$txt['enableEmbeddedFlash_warning'] = '�puede ser un riesgo de seguridad!';
$txt['enableSpellChecking'] = 'Activar la correcci�n ortogr�fica';
$txt['enableSpellChecking_warning'] = '�esto no funciona en todos los servidores!';
$txt['disable_wysiwyg'] = 'Desactivar el editor WYSIWYG';
$txt['max_messageLength'] = 'Caracteres m�ximos permitidos en los mensajes';
$txt['max_messageLength_zero'] = '0 para que no haya m�x';
$txt['fixLongWords'] = 'Partir palabras que tengan m�s letras que';
$txt['fixLongWords_zero'] = '0 para desactivar';
$txt['fixLongWords_warning'] = '�esto no funciona en todos los servidores!';
$txt['topicSummaryPosts'] = 'Mensajes a mostrar en el resumen del tema';
$txt['spamWaitTime'] = 'Tiempo m�nimo entre dos publicaciones desde la misma IP';
$txt['edit_wait_time'] = 'Editar Tiempo de Espera';
$txt['edit_disable_time'] = 'Tiempo m�ximo despues de publicar para permitir editarlo';
$txt['edit_disable_time_zero'] = '0 para desactivar';

$txt['enableBBC'] = 'Activar c�digos BBC';
$txt['enablePostHTML'] = 'Activar HTML <em>b�sico</em> en los mensajes';
$txt['autoLinkUrls'] = 'Crear autom�ticamente los enlaces cuando se escriben URLs';
$txt['disabledBBC'] = 'Activar etiquetas BBC';
$txt['bbcTagsToUse'] = 'Activar Etiquetas BBC';
$txt['bbcTagsToUse_select'] = 'Selecciona las etiquetas permitidas';
$txt['bbcTagsToUse_select_all'] = 'Selecciona todas';

$txt['enableStickyTopics'] = 'Activar Temas Fijados';
$txt['enableParticipation'] = 'Activar Iconos de participaci�n';
$txt['oldTopicDays'] = 'D�as antes de que se advierta que un tema es viejo, al querer publicar una respuesta';
$txt['oldTopicDays_zero'] = '0 para desactivar';
$txt['defaultMaxTopics'] = 'N�mero m�ximo de temas a mostrar en el �ndice de Mensajes';
$txt['defaultMaxMessages'] = 'N�mero m�ximode mensajes a mostrar en una p�gina de Tema';
$txt['hotTopicPosts'] = '�N�mero de mensajes para un tema caliente?';
$txt['hotTopicVeryPosts'] = '�N�mero de mensajes para un tema muy caliente?';
$txt['enableAllMessages'] = 'N�mero m�ximo de respuestas en un tema para mostrar &quot;Todos&quot; los mensajes';
$txt['enableAllMessages_zero'] = '0 para nunca mostrar &quot;Todos&quot;';
$txt['disableCustomPerPage'] = 'Desactivar la personalizaci�n de n�mero de temas/mensajes por p�gina';
$txt['enablePreviousNext'] = 'Activar el Mod Tema Anterior/Siguiente';

$txt['not_done_title'] = '�No realizado a�n!';
$txt['not_done_reason'] = 'Para evitar la sobrecarga de su servidor, el proceso ha sido temporalmente paralizado.  Deber�a continuar� autom�ticamente en unos segundos.  Si no lo hace, por favor, pulse en continuar.';
$txt['not_done_continue'] = 'Continuar';

$txt['general_settings'] = 'General';
$txt['database_paths_settings'] = 'Base de datos y rutas';
$txt['cookies_sessions_settings'] = 'Cookies y sesiones';
$txt['caching_settings'] = 'Cach�';
$txt['load_balancing_settings'] = 'Balanceo de carga';

$txt['language_configuration'] = 'Idiomas';
$txt['language_description'] = 'Esta secci�n le permite editar idiomas instalados en su foro y descargar otros nuevos del portal de Simple Machines. Aqu� tambi�n podr� editar configuraciones relacionadas con el idioma.';
$txt['language_edit'] = 'Editar idiomas';
$txt['language_add'] = 'A�adir idioma';
$txt['language_settings'] = 'Configuraciones';

$txt['advanced'] = 'Avanzado';
$txt['simple'] = 'Simple';

$txt['admin_news_select_recipients'] = 'Por favor, selecciona qui�n deber�a recibir una copia de las noticias';
$txt['admin_news_select_group'] = 'Grupos';
$txt['admin_news_select_group_desc'] = 'Selecciona el grupo que recibir� esta noticia.';
$txt['admin_news_select_members'] = 'Usuarios';
$txt['admin_news_select_members_desc'] = 'Usuarios adicionales que recibir�n la noticia.';
$txt['admin_news_select_excluded_members'] = 'Usuarios Excluidos';
$txt['admin_news_select_excluded_members_desc'] = 'Usuarios que no deben recibir la noticia.';
$txt['admin_news_select_excluded_groups'] = 'Grupos Excluidos';
$txt['admin_news_select_excluded_groups_desc'] = 'Grupos que no recibir�n la noticia.';
$txt['admin_news_select_email'] = 'Direcciones Email';
$txt['admin_news_select_email_desc'] = 'Un punto y coma separa la lista de direcciones email a las que debe enviarse la noticia. (p.e. direcci�n1; direcci�n2)';
$txt['admin_news_select_override_notify'] = 'Anular cambios de notificaci�n';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = 'No puedes enviar un mensaje privado a una direcci�n email. Si contin�as toda direcci�n email introducida ser� ignorada.\\n\\n�Est�s seguro de que quieres hacerlo?';

$txt['mailqueue_browse'] = 'Ver Cola';
$txt['mailqueue_settings'] = 'Configuraci�n';

$txt['admin_search'] = 'B�squeda R�pida';
$txt['admin_search_type_internal'] = 'Tarea/Config.';
$txt['admin_search_type_member'] = 'Usuario';
$txt['admin_search_type_online'] = 'Manual Online';
$txt['admin_search_go'] = 'Ir';
$txt['admin_search_results'] = 'Resultados de la B�squeda';
$txt['admin_search_results_desc'] = 'Resultados para la b�squeda: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'Buscar de nuevo';
$txt['admin_search_results_none'] = '�Ning�n resultado encontrado!';

$txt['admin_search_section_sections'] = 'Secci�n';
$txt['admin_search_section_settings'] = 'Configuraci�n';

$txt['core_settings_title'] = 'Opciones Principales';
$txt['mods_cat_features'] = 'Opciones';
$txt['mods_cat_security_general'] = 'General';
$txt['antispam_title'] = 'Anti-Spam';
$txt['mods_cat_modifications_misc'] = 'Miscel�nea';
$txt['mods_cat_layout'] = 'Dise�o';
$txt['karma'] = 'Karma';
$txt['moderation_settings_short'] = 'Moderaci�n';
$txt['signature_settings_short'] = 'Firmas';
$txt['custom_profile_shorttitle'] = 'Campos del Perfil';
$txt['pruning_title'] = 'Depurar registro';

$txt['boardsEdit'] = 'Modificar Foros';
$txt['mboards_new_cat'] = 'Crear una nueva categor�a';
$txt['manage_holidays'] = 'Administrar Festivos';
$txt['calendar_settings'] = 'Configurar el Calendario';
$txt['search_weights'] = 'Pesos';
$txt['search_method'] = 'M�todo de B�squeda';

$txt['smiley_sets'] = 'Emoticonos';
$txt['smileys_add'] = 'A�adir un Emoticono';
$txt['smileys_edit'] = 'Editar Emoticonos';
$txt['smileys_set_order'] = 'Establecer orden de Emoticonos';
$txt['icons_edit_message_icons'] = 'Editar Iconos de Mensajes';

$txt['membergroups_new_group'] = 'A�adir Grupo';
$txt['membergroups_edit_groups'] = 'Editar Grupos';
$txt['permissions_groups'] = 'Permisos por Grupo';
$txt['permissions_boards'] = 'Permisos por Foro';
$txt['permissions_profiles'] = 'Editar perfiles';
$txt['permissions_post_moderation'] = 'Moderaci�n de mensajes';

$txt['browse_packages'] = 'Ver Paquetes';
$txt['download_packages'] = 'Descargar Paquetes';
$txt['installed_packages'] = 'Paquetes Instalados';
$txt['package_file_perms'] = 'Permisos de archivo';
$txt['package_settings'] = 'Opciones';
$txt['themeadmin_admin_title'] = 'Administrar e Instalar';
$txt['themeadmin_list_title'] = 'Configuraci�n de Temas';
$txt['themeadmin_reset_title'] = 'Opciones de Usuario';
$txt['themeadmin_edit_title'] = 'Modificar Temas';
$txt['admin_browse_register_new'] = 'Registrar un usuario nuevo';

$txt['search_engines'] = 'Motores de b�squeda';
$txt['spiders'] = 'Ara�as';
$txt['spider_logs'] = 'Logs';
$txt['spider_stats'] = 'Estad�sticas';

$txt['paid_subscriptions'] = 'Suscripciones de Pago';
$txt['paid_subs_view'] = 'Ver Suscripciones';

?>