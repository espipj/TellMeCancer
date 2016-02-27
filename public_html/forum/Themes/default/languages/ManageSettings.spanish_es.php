<?php
// Version: 2.0; ManageSettings

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modSettings_desc'] = 'Esta p�gina te permite cambiar la configuraci�n de caracter�sticas, mods y opciones b�sicas de tu foro. Por favor, entra en <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s">Configuraci�n del tema</a> para m�s opciones. Pulsa en los iconos de ayuda para obtener m�s informaci�n acerca de una opci�n.';
$txt['security_settings_desc'] = 'Esta p�gina te permite establecer opciones espec�ficamente relacionadas con la seguridad y la moderaci�n de tu foro, incluyendo opciones anti-spam.';
$txt['modification_settings_desc'] = 'Esta p�gina contiene configuraciones a�adidas por las modificaciones que tengas instaladas en tu foro';

$txt['modification_no_misc_settings'] = 'No hay modificaciones instaladas que hayan a�adido ninguna configuraci�n a este �rea a�n.';

$txt['pollMode'] = 'Modo Encuesta';
$txt['disable_polls'] = 'Desactivar encuestas';
$txt['enable_polls'] = 'Activar encuestas';
$txt['polls_as_topics'] = 'Mostrar las encuestas existentes como temas';
$txt['allow_guestAccess'] = 'Permitir ver el foro a los invitados';
$txt['userLanguage'] = 'Activar soporte de idioma seleccionable por el usuario';
$txt['allow_editDisplayName'] = 'Permitir a los usuarios editar el nombre mostrado';
$txt['allow_hideOnline'] = 'Permitir a los no-administradores ocultar su estado de conexi�n';
$txt['guest_hideContacts'] = 'No mostrar detalles de contacto de miembros a los invitados';
$txt['titlesEnable'] = 'Activar t�tulos personalizados';
$txt['enable_buddylist'] = 'Activar listas de amigos/ignorados';
$txt['default_personal_text'] = 'Texto personal por defecto';
$txt['number_format'] = 'Formato de n�meros por defecto';
$txt['time_format'] = 'Formato de Tiempo por defecto';
$txt['setting_time_offset'] = 'Diferencia horaria global<div class="smalltext">(a�adida a la opci�n espec�fica del usuario.)</div>';
$txt['setting_default_timezone'] = 'Zona horaria del servidor';
$txt['failed_login_threshold'] = 'Umbral de conexiones fallidas';
$txt['lastActive'] = 'Umbral de tiempo conectado';
$txt['trackStats'] = 'Estad�sticas diarias';
$txt['hitStats'] = 'Visualizaciones de p�gina diaria de Estad�sticas (las estad�sticas deben estar activadas)';
$txt['enableCompressedOutput'] = 'Activar salida comprimida';
$txt['disableTemplateEval'] = 'Desactivar evaluaci�n de plantillas';
$txt['databaseSession_enable'] = 'Utilizar sesiones controladas por base de datos';
$txt['databaseSession_loose'] = 'Permitir a los navegadores ir atr�s hacia p�ginas en cach�';
$txt['databaseSession_lifetime'] = 'Segundos transcurridos antes de que expire una sesi�n inactiva';
$txt['enableErrorLogging'] = 'Activar log de errores';
$txt['enableErrorQueryLogging'] = 'Incluir consultas a la base de datos en el registro (log) de errores';
$txt['pruningOptions'] = 'Activar la purga de entradas del registro';
$txt['pruneErrorLog'] = 'Eliminar entradas del registro de errores con m�s de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneModLog'] = 'Eliminar entradas del registro de moderaci�n con m�s de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneBanLog'] = 'Eliminar entradas del registro de baneos con m�s de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneReportLog'] = 'Eliminar entradas del registro de avisos de moderaci�n con m�s de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneScheduledTaskLog'] = 'Eliminar entradas del registro de tareas programadas con m�s de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneSpiderHitLog'] = 'Eliminar entradas del registro de b�squedas con m�s de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['cookieTime'] = 'Duraci�n de cookies de conexi�n por defecto (en minutos)';
$txt['localCookies'] = 'Activar el almacenamiento local de cookies<div class="smalltext">(SSI no funciona bien activando esta opci�n.)</div>';
$txt['globalCookies'] = 'Utilizar cookies independientes por subdominios<div class="smalltext">(�debes desactivar las cookies locales primero!)</div>';
$txt['secureCookies'] = 'Forzar a que las cookies sean seguras<div class="smalltext">(Esto s�lo se aplica si est�s usando HTTPS - �no lo uses en otro caso!)</div>';
$txt['securityDisable'] = 'Desactivar la seguridad de la administraci�n';
$txt['send_validation_onChange'] = 'Requerir reactivaci�n despu�s de un cambio de direcci�n email';
$txt['approveAccountDeletion'] = 'Requerir aprobaci�n del administrador cuando el usuario borra su cuenta';
$txt['autoOptMaxOnline'] = 'N�mero m�ximo de usuarios conectados en la optimizaci�n<div class="smalltext">(0 para ilimitado.)</div>';
$txt['autoFixDatabase'] = 'Arreglar autom�ticamente tablas corruptas';
$txt['allow_disableAnnounce'] = 'Permitir a los usuarios desactivar notificaciones';
$txt['disallow_sendBody'] = 'No permitir enviar el texto del mensaje en las notificaciones';
$txt['queryless_urls'] = 'Mostrar URLs de b�squeda de modo amigable<div class="smalltext"><strong>�S�lo Apache/Lighttpd!</strong></div>';
$txt['max_image_width'] = 'Ancho m�ximo de las im�genes en los mensajes (0 = desactivar)';
$txt['max_image_height'] = 'Alto m�ximo de las im�genes en los mensajes (0 = desactivar)';
$txt['enableReportPM'] = 'Activar el aviso de mensajes privados';
$txt['max_pm_recipients'] = 'N�mero m�ximo de destinatarios permitidos en un mensaje privado.<div class="smalltext">(0 para ilimitado, exceptuando administradores)</div>';
$txt['pm_posts_verification'] = 'N�mero de mensajes m�nimo para no tener que introducir un c�digo al enviar mensajes privados.<div class="smalltext">(0 para ilimitado, exceptuando administradores)</div>';
$txt['pm_posts_per_hour'] = 'N�mero de mensajes privados que puede enviar un usuario en una hora <div class="smalltext">(0 para ilimitados, exceptuando moderadores)</div>';
$txt['compactTopicPagesEnable'] = 'L�mitar el n�mero de v�nculos mostrados';
$txt['contiguous_page_display'] = 'P�ginas contiguas a mostrar';
$txt['to_display'] = 'mostrar';
$txt['todayMod'] = 'Activar la funcionalidad &quot;Hoy&quot;';
$txt['today_disabled'] = 'Desactivada';
$txt['today_only'] = 'S�lo Hoy';
$txt['yesterday_today'] = 'Hoy y Ayer';
$txt['topbottomEnable'] = 'Activar los botones Ir Arriba/Ir Abajo';
$txt['onlineEnable'] = 'Mostrar conectado/desconectados en mensajes normales y privados';
$txt['enableVBStyleLogin'] = 'Mostrar cuadro de conexi�n rapida en cada p�gina';
$txt['defaultMaxMembers'] = 'Usuarios por p�gina de la lista de usuarios';
$txt['timeLoadPageEnable'] = 'Mostrar el tiempo transcurrido para crear cada p�gina';
$txt['disableHostnameLookup'] = '�Desactivar b�squedas de nombre de servidor?';
$txt['who_enabled'] = 'Activar la lista de Usuarios conectados';
$txt['make_email_viewable'] = 'Permitir direcciones de email visibles.';
$txt['meta_keywords'] = 'Palabras clave meta (meta keywords) asociadas con el foro.<div class="smalltext">Para motores de b�squeda. Dejar en blanco para usar las establecidas por defecto.</div>';

$txt['karmaMode'] = 'Modo Karma';
$txt['karma_options'] = 'Desactivar karma|Activar karma total|Activar karma positivo/negativo';
$txt['karmaMinPosts'] = 'Establecer el n�mero m�nimo de mensajes necesarios para modificar el karma';
$txt['karmaWaitTime'] = 'Establecer el periodo de espera en horas';
$txt['karmaTimeRestrictAdmins'] = 'Restringir administradores a esperar';
$txt['karmaLabel'] = 'Etiqueta de Karma';
$txt['karmaApplaudLabel'] = 'Etiqueta de aplaudir';
$txt['karmaSmiteLabel'] = 'Etiqueta de castigar';

$txt['caching_information'] = '<div class="aligncenter underline"><strong>�Importante! Lee esto antes de activar estas caracter�sticas.</strong></div><br />SMF soporta el cach� utilizado con aceleradores. Los aceleradores actualmente soportados son:<br /> <ul class="normallist"> <li>APC</li> <li>eAccelerator</li> 	<li>Turck MMCache</li> <li>Memcached</li> <li>Zend Platform/Performance Suite (No Zend Optimizer)</li> <li>XCache</li>	</ul> El cach� s�lo funcionar� en tu servidor si tienes PHP compilado con uno de los optimizadores de arriba, o si tienes el cach� de memoria disponible.  Si no tienes ning�n optimizador instalado en SMF, se utilizar� un cach� basado en archivos.<br /><br /> SMF guarda en cach� a varios niveles. Cuanto mayor es el nivel de cach� activado m�s tiempo de CPU se utilizar� para obtener la informaci�n en cach�. Si est� disponible el cach� en tu m�quina es recomendable que intentes guardar en cach� al nivel 1 primero.  <br /><br /> Ten en cuenta que si utilizas el cach� de memoria necesitas proporcionar detalles del servidor en las opciones de abajo. Deber�as introducirlo como lista separada por comas como se muestra en el ejemplo de abajo:<br /> &quot;servidor1,servidor2,servidor3:puerto,servidor4&quot;<br /><br /> Ten en cuenta que si no se especifica el puerto, SMF utilizar� el puerto 11211. SMF intentar� realizar un balanceo aleatorio entre los servidores. <br /><br />	%1$s';

$txt['detected_no_caching'] = '<strong class="alert">SMF no ha podido detectar un acelerador compatible en tu servidor.</strong>';
$txt['detected_APC'] = '<strong style="color: green">SMF ha detectado que tu servidor tiene instalado APC.</strong>';
$txt['detected_eAccelerator'] = '<strong style="color: green">SMF ha detectado que tu servidor tiene instalado eAccelerator.</strong>';
$txt['detected_MMCache'] = '<strong style="color: green">SMF ha detectado que tu servidor tiene instalado MMCache.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">SMF ha detectado que tu servidor tiene instalado Zend.</strong>';
$txt['detected_Memcached'] = '<strong style="color: green">SMF ha detectado que tu servidor tiene instalado Memcached.</strong>';
$txt['detected_XCache'] = '<strong style="color: green">SMF ha detectado que tu servidor tiene instalado XCache.</strong>';

$txt['cache_enable'] = 'Nivel de Cach�';
$txt['cache_off'] = 'Sin cach�';
$txt['cache_level1'] = 'Cach� de Nivel 1 (Recomendado)';
$txt['cache_level2'] = 'Cach� de Nivel 2';
$txt['cache_level3'] = 'Cach� de Nivel 3 (No Recomendado)';
$txt['cache_memcached'] = 'Opciones de Memoria cach�';

$txt['loadavg_warning'] = '<span class="error">Importante: las opciones de configuraci�n que hay a continuaci�n deben ser editadas con cuidado. Establecer alguna de ellas en un valor demasiado bajo puede dejar tu foro <strong>inutilizable</strong>. Actualmente el valor medio de carga es <strong>%01.2f</strong></span> ';
$txt['loadavg_enable'] = 'Activar balanceo de carga seg�n valores medios de carga';
$txt['loadavg_auto_opt'] = 'Umbral para desactivar la optimizaci�n autom�tica de base de datos';
$txt['loadavg_search'] = 'Umbral para desactivar la b�squeda';
$txt['loadavg_allunread'] = 'Umbral para desactivar todos los mensajes no le�dos';
$txt['loadavg_unreadreplies'] = 'Umbral para desactivar respuestas no le�das';
$txt['loadavg_show_posts'] = 'Umbral para desactivar mostrar mensajes de usuario';
$txt['loadavg_forum'] = 'Umbral para desactivar el foro <strong>completamente</strong> ';
$txt['loadavg_disabled_windows'] = '<span class="error">El soporte para balanceo de carga no est� disponible en Windows.</span> ';
$txt['loadavg_disabled_conf'] = '<span class="error">El soporte para balanceo de carga est� desactivado por la configuraci�n de tu host.</span> ';

$txt['setting_password_strength'] = 'Fuerza requerida para las claves de usuario';
$txt['setting_password_strength_low'] = 'Baja - 4 caracteres m�nimo';
$txt['setting_password_strength_medium'] = 'Media - no puede contener el nombre de usuario';
$txt['setting_password_strength_high'] = 'Alta - mezcla de diferentes caracteres';

$txt['antispam_Settings'] = 'Verificaci�n Anti-Spam';
$txt['antispam_Settings_desc'] = 'Esta secci�n te permite configurar las comprobaciones de verificaci�n para asegurar que el usuario es un humanon (y no un bot), y determinar c�mo y d�nde se aplican.';
$txt['setting_reg_verification'] = 'Requerir verificaci�n en la p�gina de registro';
$txt['posts_require_captcha'] = 'N�mero de posts por debajo del cual los usuarios deben pasar la verificaci�n para escribir un post';
$txt['posts_require_captcha_desc'] = '(0 para ilimitado, los moderadores est�n exentos de esta limitaci�n)';
$txt['search_enable_captcha'] = 'Requerir verificaci�n en todas las b�squedas de invitados';
$txt['setting_guests_require_captcha'] = 'Los invitados deben pasar la verificaci�n cuando escriban nuevos posts';
$txt['setting_guests_require_captcha_desc'] = '(Activado autom�ticamente si especificas un n�mero m�nimo de posts a continuaci�n)';
$txt['guests_report_require_captcha'] = 'Los invitados deben pasar una verificaci�n al reportar un mensaje';

$txt['configure_verification_means'] = 'Configurar m�todos de verificaci�n';
$txt['setting_qa_verification_number'] = 'N�mero de preguntas de verificaci�n que el usuario debe contestar';
$txt['setting_qa_verification_number_desc'] = '(0 para desactivar; las preguntas se establecen m�s abajo)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">A continuaci�n puedes establecer qu� caracter�sticas anti-spam quieres tener activas cuando un usuario necesite verificar que es humano. Ten en cuenta que el usuario tendr� que pasar <em>todas</em> las verificaciones, as� que si activas tanto la verificaci�n de imagen como el test de pregunta/respuesta tendr� que completar ambas para proceder.</span>';
$txt['setting_visual_verification_type'] = 'Imagen para mostrar en la verificaci�n visual';
$txt['setting_visual_verification_type_desc'] = 'Mientras m�s compleja sea la imagen m�s dif�cil ser� superarla para los bots';
$txt['setting_image_verification_off'] = 'Ninguna';
$txt['setting_image_verification_vsimple'] = 'Muy Simple - Texto plano en una imagen';
$txt['setting_image_verification_simple'] = 'Simple - Letras de colores solapadas, sin ruido';
$txt['setting_image_verification_medium'] = 'Media - Letras de colores solapadas, con ruido/l�neas';
$txt['setting_image_verification_high'] = 'Alta - Letras torcidas, ruido/l�neas considerables';
$txt['setting_image_verification_extreme'] = 'Extremo - Letras torcidas, ruido, l�neas y bloques';
$txt['setting_image_verification_sample'] = 'Muestra';
$txt['setting_image_verification_nogd'] = '<strong>Aviso:</strong> dado que este servidor no tiene la librer�a GD instalada las configuraciones de distinta complejidad no tendr�n ning�n efecto.';
$txt['setup_verification_questions'] = 'Preguntas de verificaci�n';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Si quieres que los usuarios respondan a una pregunta de verificaci�n para detener a los bots de spam deber�as establecer algunas preguntas en la tabla de debajo. Deber�as elegir preguntas relativamente simples; las respuestas no son sensibles a las may�sculas (case sensitive). Puedes usar BBC en las preguntas para darles formato. Para eliminar una pregunta simplemente borra el contenido de esa l�nea.</span>';
$txt['setup_verification_question'] = 'Pregunta';
$txt['setup_verification_answer'] = 'Respuesta';
$txt['setup_verification_add_more'] = 'A�adir otra pregunta';

$txt['moderation_settings'] = 'Opciones de Moderaci�n';
$txt['setting_warning_enable'] = 'Activar Sistema de Advertencias al Usuario';
$txt['setting_warning_watch'] = 'Nivel de advertencia para usuarios vigilados<div class="smalltext">El nivel de advertencia al usuario con el que comenzar� a ser vigilado - 0 para desactivar.</div>';
$txt['setting_warning_moderate'] = 'Nivel de advertencia para moderaci�n de mensajes<div class="smalltext">El nivel de advertencia al usuario a partir del que todos sus mensajes ser�n moderados - 0 para desactivar.</div>';
$txt['setting_warning_mute'] = 'Nivel de advertencia para enmudecer<div class="smalltext">El nivel de advertencia al usuario a partir del cual el usuario no podr� continuar publicando mensajes - 0 para desactivar.</div>';
$txt['setting_user_limit'] = 'N�mero m�ximo de puntos de advertencia por d�a<div class="smalltext">Este valor es la cantidad m�xima de puntos de advertencia que un moderador puede asignar a un usuario en un periodo de 24 horas - 0 para ilimitado.</div>';
$txt['setting_warning_decrement'] = 'Puntos de advertencia a decrementar a los usuarios cada 24 horas<div class="smalltext">Solo se aplica en usuarios que no hayan sido advertidos en las �ltimas 24 horas - establecer a 0 para desactivarlo.</div>';
$txt['setting_warning_show'] = 'Mostrar el estado de advertencia de todos los usuarios<div class="smalltext">Si est� desactivado, s�lo los moderadores pueden ver el estado de advertencia de un usuario.</div>';
$txt['setting_warning_show_mods'] = 'S�lo moderadores';
$txt['setting_warning_show_user'] = 'Moderadores y usuarios avisados';
$txt['setting_warning_show_all'] = 'Todos los usuarios';

$txt['signature_settings'] = 'Opciones de Firma';
$txt['signature_settings_desc'] = 'Utiliza las opciones de esta p�gina para decidir c�mo deber�an ser tratadas las firmas de usuarios en SMF.';
$txt['signature_settings_warning'] = 'Las opciones no se aplicar�n por defecto a las firmas ya existentes. Entra <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">aqu�</a> para aplicar reglas a todas las firmas existentes.';
$txt['signature_enable'] = 'Activar firmas';
$txt['signature_max_length'] = 'N�mero m�ximo de caracteres permitidos<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_lines'] = 'N�mero m�ximo de l�neas<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_images'] = 'N�mero m�ximo de im�genes<div class="smalltext">(0 para ilimitados - emoticonos excluidos)</div>';
$txt['signature_allow_smileys'] = 'Permitir smileys en las firmas';
$txt['signature_max_smileys'] = 'N�mero m�ximo de emoticonos<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_image_width'] = 'Ancho m�ximo para im�genes en la firma (pixels)<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_image_height'] = 'Largo m�ximo para im�genes en la firma (pixels)<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_font_size'] = 'Tama�o m�ximo de fuente permitido en las firmas<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_bbc'] = 'Activar etiquetas BBC';

$txt['custom_profile_title'] = 'Campos personalizados del Perfil';
$txt['custom_profile_desc'] = 'En esta p�gina puedes crear tus propios campos personalizados para ajustarse a los requerimientos del foro';
$txt['custom_profile_active'] = 'Activo';
$txt['custom_profile_fieldname'] = 'Nombre del Campo';
$txt['custom_profile_fieldtype'] = 'Tipo de Campo';
$txt['custom_profile_make_new'] = 'Nuevo Campo';
$txt['custom_profile_none'] = '�A�n no has creado ning�n campo personalizado!';
$txt['custom_profile_icon'] = 'Icono';

$txt['custom_profile_type_text'] = 'Texto';
$txt['custom_profile_type_textarea'] = 'Texto largo';
$txt['custom_profile_type_select'] = 'Lista desplegable';
$txt['custom_profile_type_radio'] = 'Bot�n de selecci�n';
$txt['custom_profile_type_check'] = 'Casilla de verificaci�n';

$txt['custom_add_title'] = 'A�adir Campo del Perfil';
$txt['custom_edit_title'] = 'Editar Campo del Perfil';
$txt['custom_edit_general'] = 'Opciones de Visualizaci�n';
$txt['custom_edit_input'] = 'Opciones de Entrada';
$txt['custom_edit_advanced'] = 'Opciones Avanzadas';
$txt['custom_edit_name'] = 'Nombre';
$txt['custom_edit_desc'] = 'Descripci�n';
$txt['custom_edit_profile'] = 'Secci�n del Perfil';
$txt['custom_edit_profile_desc'] = 'Secci�n del perfil donde es editado.';
$txt['custom_edit_profile_none'] = 'En ninguna';
$txt['custom_edit_registration'] = 'Mostrar en la p�gina de registro';
$txt['custom_edit_registration_disable'] = 'No';
$txt['custom_edit_registration_allow'] = 'S�';
$txt['custom_edit_registration_require'] = 'S�, y requerir entrada';
$txt['custom_edit_display'] = 'Mostrar en los Temas';
$txt['custom_edit_picktype'] = 'Tipo de Campo';

$txt['custom_edit_max_length'] = 'Longitud M�xima';
$txt['custom_edit_max_length_desc'] = '(0 para ilimitada)';
$txt['custom_edit_dimension'] = 'Dimensiones';
$txt['custom_edit_dimension_row'] = 'Filas';
$txt['custom_edit_dimension_col'] = 'Columnas';
$txt['custom_edit_bbc'] = 'Permitir BBC';
$txt['custom_edit_options'] = 'Opciones';
$txt['custom_edit_options_desc'] = 'Dejar el cuadro de opci�n vac�o para eliminarlo. El bot�n de selecci�n marca la opci�n por defecto.';
$txt['custom_edit_options_more'] = 'M�s';
$txt['custom_edit_default'] = 'Estado por defecto';
$txt['custom_edit_active'] = 'Activo';
$txt['custom_edit_active_desc'] = 'Si no est� seleccionado este campo no se mostrar� a nadie.';
$txt['custom_edit_privacy'] = 'Privacidad';
$txt['custom_edit_privacy_desc'] = 'Qui�n puede ver y editar este campo.';
$txt['custom_edit_privacy_all'] = 'Los usuarios pueden ver este campo; el propietario puede editarlo';
$txt['custom_edit_privacy_see'] = 'Los usuarios pueden ver este campo; s�lo los administradores pueden editarlo';
$txt['custom_edit_privacy_owner'] = 'Los usuarios no pueden ver este campo; el propietario y los administradores pueden editarlo.';
$txt['custom_edit_privacy_none'] = 'Este campo s�lo es visible para los administradores';
$txt['custom_edit_can_search'] = 'Se puede buscar';
$txt['custom_edit_can_search_desc'] = 'Este campo puede ser buscado en la lista de usuarios.';
$txt['custom_edit_mask'] = 'M�scara de Introducci�n';
$txt['custom_edit_mask_desc'] = 'Para los campos de texto se puede seleccionar una m�scara de introducci�n para validar los datos.';
$txt['custom_edit_mask_email'] = 'Direcci�n Email v�lida';
$txt['custom_edit_mask_number'] = 'Num�rico';
$txt['custom_edit_mask_nohtml'] = 'Sin HTML';
$txt['custom_edit_mask_regex'] = 'Expresi�n Regular (Avanzado)';
$txt['custom_edit_enclose'] = 'Mostrar incrustado en el texto (opcional)';
$txt['custom_edit_enclose_desc'] = 'Te recomendamos <strong>fervientemente</strong> que uses una m�scara de entrada para validar los datos de entrada proporcionados por el usuario.';

$txt['custom_edit_placement'] = 'Elegir colocaci�n';
$txt['custom_edit_placement_standard'] = 'Est�ndar (con t�tulo)';
$txt['custom_edit_placement_withicons'] = 'Con iconos';
$txt['custom_edit_placement_abovesignature'] = 'Sobre la firma';
$txt['custom_profile_placement'] = 'Colocaci�n';
$txt['custom_profile_placement_standard'] = 'Est�ndar';
$txt['custom_profile_placement_withicons'] = 'Con iconos';
$txt['custom_profile_placement_abovesignature'] = 'Sobre la firma';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = '�Est�s seguro de que quieres eliminar este campo? - �toda la informaci�n de usuarios relacionada se perder�!';

$txt['standard_profile_title'] = 'Campos Est�ndar del Perfil';
$txt['standard_profile_field'] = 'Campo';

$txt['core_settings_welcome_msg'] = 'Vienvenido a Tu Nuevo Foro';
$txt['core_settings_welcome_msg_desc'] = 'Para familiarizarte te recomendamos que selecciones qu� funcionalidades principales de SMF quieres activar. �Te recomendamos que s�lo actives aquellas que necesites!';
$txt['core_settings_item_cd'] = 'Calendario';
$txt['core_settings_item_cd_desc'] = 'Al activar esta funcionalidad se abrir�n una serie de opciones para permitir a tus usuarios ver el calendario, a�adir y revisar eventos, ver cumplea�os de los usuarios en el calendario y mucho m�s.';
$txt['core_settings_item_cp'] = 'Campos Avanzados del Perfil';
$txt['core_settings_item_cp_desc'] = 'Te permite ocultar los campos est�ndar del perfil, a�adir campos de perfil en el registro del usuario y crear nuevos campos de perfil para tu foro.';
$txt['core_settings_item_k'] = 'Karma';
$txt['core_settings_item_k_desc'] = 'Karma es una funcionalidad que te muestra la popularidad de un usuario. Los usuarios, si se les permite, pueden \'aplaudir\' o \'castigar\' a otros usuarios, que es como se calcula su popularidad.';
$txt['core_settings_item_ml'] = 'Log de Moderaci�n';
$txt['core_settings_item_ml_desc'] = 'Activar el log de moderaci�n para mantener un registro de todas las acciones llevadas a cabo por tus moderadores del foro.';
$txt['core_settings_item_pm'] = 'Moderaci�n de Mensajes';
$txt['core_settings_item_pm_desc'] = 'La moderaci�n de mensajes te permite seleccionar grupos y foros en los cuales los mensajes deben ser aprobados antes de que sean p�blicos. Al activar esta funcionalidad aseg�rate de visitar la secci�n de permisos para configurar los permisos relevantes.';
$txt['core_settings_item_ps'] = 'Suscripciones de Pago';
$txt['core_settings_item_ps_desc'] = 'Las suscripciones de pago permiten a los usuarios pagar para cambiar su pertenencia a un grupo concreto del foro, y as� adquirir nuevos permisos de acceso.';
$txt['core_settings_item_rg'] = 'Generaci�n de Informes';
$txt['core_settings_item_rg_desc'] = 'Esta herramienta de administraci�n permite la generaci�n de informes (que pueden imprimirse) para ver la configuraci�n actual de tu foro de manera sencilla - particularmente �til para foros extensos.';
$txt['core_settings_item_sp'] = 'Seguimiento del motor de b�squeda';
$txt['core_settings_item_sp_desc'] = 'Activar esta opci�n permitir� a los administradores seguir los motores de b�squeda a medida que indexan tu foro.';
$txt['core_settings_item_w'] = 'Sistema de Advertencia';
$txt['core_settings_item_w_desc'] = 'Esta funcionalidad permite a los administradores y moderadores enviar advertencias a usuarios; tambi�n incluye una funcionalidad avanzada para quitar derechos de usuarios si se incrementa su nivel de advertencia. Ten en cuenta que para obtener una funcionalidad completa de esta funci�n se debe activar la &quot;Moderaci�n de Mensajes&quot;.';
$txt['core_settings_switch_on'] = 'Pulsar para Activar';
$txt['core_settings_switch_off'] = 'Pulsar para Desactivar';
$txt['core_settings_enabled'] = 'Activado';
$txt['core_settings_disabled'] = 'Desactivado';

$txt['languages_lang_name'] = 'Nombre del idioma';
$txt['languages_locale'] = 'Locale';
$txt['languages_default'] = 'Por defecto';
$txt['languages_character_set'] = 'Juego de caracteres';
$txt['languages_users'] = 'Usuarios';
$txt['language_settings_writable'] = 'Aviso: el archivo Settings.php no es escribible, as� que la configuraci�n del idioma por defecto no puede ser guardada.';
$txt['edit_languages'] = 'Editar idiomas';
$txt['lang_file_not_writable'] = '<strong>Aviso:</strong> El archivo de idioma primario (%1$s) no es escribible. Debes hacerlo escribible antes de poder aplicar ning�n cambio.';
$txt['lang_entries_not_writable'] = '<strong>Aviso:</strong> El archivo de idioma que quieres editar (%1$s) no es escribible. Debes hacerlo escribible antes de que puedas hacerle alg�n cambio.';
$txt['languages_ltr'] = 'De derecha a izquierda';

$txt['add_language'] = 'A�adir idioma';
$txt['add_language_smf'] = 'Descargar desde Simple Machines';
$txt['add_language_smf_browse'] = 'Escriba el nombre del idioma a buscar, o d�jelo en blanco para buscar todos los disponibles.';
$txt['add_language_smf_install'] = 'Instalar';
$txt['add_language_smf_found'] = 'Los siguientes idiomas fueron encontrados. Haz clic en el enlace de instalaci�n del idioma que quieres instalar, y ser�s conducido al gestor de paquetes para instalarlo.';
$txt['add_language_error_no_response'] = 'El sitio de Simple Machines no responde. Int�ntalo m�s tarde.';
$txt['add_language_error_no_files'] = 'No se encontraron archivos.';
$txt['add_language_smf_desc'] = 'Descripci�n';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Versi�n';

$txt['edit_language_entries_primary'] = 'Debajo est�n las opciones primarias del idioma para este paquete de idioma.';
$txt['edit_language_entries'] = 'Editar entradas del idioma';
$txt['edit_language_entries_file'] = 'Seleccionar entradas a editar';
$txt['languages_dictionary'] = 'Diccionario';
$txt['languages_spelling'] = 'Deletreo';
$txt['languages_for_pspell'] = 'Esto es para <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - si est� instalado';
$txt['languages_rtl'] = 'Activar el modo &quot;de derecha a izquierda&quot;';

$txt['lang_file_desc_index'] = 'Cadenas generales';
$txt['lang_file_desc_EmailTemplates'] = 'Plantillas de Email';

$txt['languages_download'] = 'Descargar paquete de idioma';
$txt['languages_download_note'] = 'Esta p�gina lista todos los archivos contenidos en el paquete de idioma, as� como alguna informaci�n �til acerca de cada uno. Todos los archivos que tienen marcada la check box asociada, ser�n copiados.';
$txt['languages_download_info'] = '<strong>Nota:</strong>
	<ul class="normallist">
		<li>Los archivos que tienen el estatus de &quot;no escribible&quot; no podr�n ser copiados por SMF al directorio elegido en este momento. Tendr�s que hacer el destino escribible usando un cliente FTP o bien rellenando tus detalles en la parte inferior de la p�gina.</li>
		<li>La informaci�n de versi�n de un archivo muestra la �ltima versi�n de SMF para la que fue actualizado. Si est� marcada en verde entonces se trata de una versi�n m�s nueva de que tienes actualmente. Si est� en ambar indica que es la misma versi�n. Y si est� en rojo indica que tienes instalada una versi�n m�s nueva que la contenida en el paquete.</li>
		<li>Cuando un archivo ya existe en tu foro, la columna &quot;Ya existe&quot; uno de dos posibles valores. &quot;Id�ntico&quot; indica que el archivo existente es exacto al que se quiere instalar, y no es necesario sobreescribirlo. &quot;Diferente&quot; quiere decir que los contenidos de ambos archivos var�an de alguna manera, y sobreescribir el que ya tienes sea probablemente la soluci�n �ptima.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Archivos primarios';
$txt['languages_download_theme_files'] = 'Archivos relacionados con plantillas';
$txt['languages_download_filename'] = 'Nombre del archivo';
$txt['languages_download_dest'] = 'Destino';
$txt['languages_download_writable'] = 'Escribible';
$txt['languages_download_version'] = 'Versi�n';
$txt['languages_download_older'] = 'Tienes instalada una versi�n m�s nueva de este archivo; no se recomienda sobreescribirla.';
$txt['languages_download_exists'] = 'Ya existe';
$txt['languages_download_exists_same'] = 'Id�ntico';
$txt['languages_download_exists_different'] = 'Diferente';
$txt['languages_download_copy'] = 'Copiar';
$txt['languages_download_not_chmod'] = 'No puedes proceder con la instalaci�n hasta que todos los archivos seleccionados para ser copiados sean escribibles.';
$txt['languages_download_illegal_paths'] = 'El paquete contiene rutas ilegales - por favor contacte con Simple Machines';
$txt['languages_download_complete'] = 'Installaci�n completada';
$txt['languages_download_complete_desc'] = 'El paquete de idioma se instal� correctamente. Por favor haga clic <a href="%1$s">aqu�</a> para volver a la p�gina de idiomas';
$txt['languages_delete_confirm'] = '�Est�s seguro de que quieres eliminar este idioma?';

?>