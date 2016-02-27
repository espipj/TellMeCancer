<?php
// Version: 2.0; ManageMaintenance

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['repair_zero_ids'] = 'Temas y/o mensajes encontrados con ID igual a 0.';
$txt['repair_missing_topics'] = 'El mensaje #%1$d est� en el tema inexistente  #%2$d.';
$txt['repair_missing_messages'] = 'El tema #%1$d no contiene mensajes (reales).';
$txt['repair_stats_topics_1'] = 'En el tema #%1$d el primer mensaje tiene la ID %2$d, que es incorrecta.';
$txt['repair_stats_topics_2'] = 'En el tema #%1$d el �ltimo mensaje tiene la ID %2$d, que es incorrecta.';
$txt['repair_stats_topics_3'] = 'El tema #%1$d tiene un n�mero incorrecto de respuestas, %2$d.';
$txt['repair_stats_topics_4'] = 'El tema #%1$d tiene un n�mero incorrecto de mensajes no aprobados, %2$d.';
$txt['repair_stats_topics_5'] = 'El tema #%1$d tiene activada la bandera de aprobaci�n err�neamente.';
$txt['repair_missing_boards'] = 'El tema #%1$d est� en el foro #%2$d, que no existe.';
$txt['repair_missing_categories'] = 'El foro #%1$d est� en la categor�a #%2$d, que no existe.';
$txt['repair_missing_posters'] = 'El mensaje #%1$d fue escrito por el usuario #%2$d, que no existe.';
$txt['repair_missing_parents'] = 'El foro #%1$d es un hijo del foro #%2$d, que no existe.';
$txt['repair_missing_polls'] = 'El tema #%1$d est� asociado a una encuesta que no existe, la #%2$d.';
$txt['repair_polls_missing_topics'] = 'La encuesta #%1$d est� asociada al tema inexistente #%2$d. ';
$txt['repair_missing_calendar_topics'] = 'El evento #%1$d est� asociado al tema #%2$d, que no existe.';
$txt['repair_missing_log_topics'] = 'El tema #%1$d est� marcado como le�do para uno o m�s usuarios, pero no existe.';
$txt['repair_missing_log_topics_members'] = 'El usuario #%1$d tiene marcado uno o m�s temas como le�dos, pero este usuario no existe.';
$txt['repair_missing_log_boards'] = 'El foro #%1$d est� marcado como le�do para uno o m�s usuarios, pero no existe.';
$txt['repair_missing_log_boards_members'] = 'El usuario #%1$d tiene marcado uno o m�s foros como le�dos, pero este usuario no existe.';
$txt['repair_missing_log_mark_read'] = 'El foro #%1$d est� marcado como le�do por una o m�s personas, pero no existe.';
$txt['repair_missing_log_mark_read_members'] = 'El usuario #%1$d tiene marcado uno o m�s foros como le�dos, pero este usuario no existe.';
$txt['repair_missing_pms'] = 'El mensaje privado #%1$d ha sido enviado a una o m�s personas, pero no existe.';
$txt['repair_missing_recipients'] = 'El usuario #%1$d ha recibido uno o m�s mensajes privados, pero no existe.';
$txt['repair_missing_senders'] = 'El mensaje privado #%1$d fue enviado por el miembro #%2$d, que no existe.';
$txt['repair_missing_notify_members'] = 'Se han requerido notificaciones por el usuario #%1$d, que no existe.';
$txt['repair_missing_cached_subject'] = 'El asunto del tema #%1$d no est� guardado actualmente en la cach� de asuntos.';
$txt['repair_missing_topic_for_cache'] = 'La palabra cacheada \'%1$s\' est� asociada a un tema que no existe.';
$txt['repair_missing_log_poll_member'] = 'La encuesta #%1$d ha recibido votos del usuario #%2$d , que no existe en estos momentos.';
$txt['repair_missing_log_poll_vote'] = 'Un voto fue emitido por el usuario #%1$d en una encuesta inexistente #%2$d.';
$txt['repair_missing_thumbnail_parent'] = 'Existe una miniatura llamada %1$s, pero no tiene padre.';
$txt['repair_report_missing_comments'] = 'El informe #%1$d del tema: &quot;%2$s&quot; no tiene comentarios.';
$txt['repair_comments_missing_report'] = 'El comentario del informe #%1$d enviado por %2$s no tiene un informe relacionado.';
$txt['repair_group_request_missing_member'] = 'A�n existe una petici�n de membres�a para el usuario #%1$d, que ha sido borrado.';
$txt['repair_group_request_missing_group'] = 'A�n existe una petici�n de membres�a para el grupo #%1$d, que ha sido borrado.';

$txt['repair_currently_checking'] = 'Comprobando: &quot;%1$s&quot;';
$txt['repair_currently_fixing'] = 'Arreglando: &quot;%1$s&quot;';
$txt['repair_operation_zero_topics'] = 'Los temas con id_topic incorrectamente establecido a cero';
$txt['repair_operation_zero_messages'] = 'Mensajes con id_msg incorrectamente establecido a cero';
$txt['repair_operation_missing_topics'] = 'Mensajes con entradas en temas desaparecidos';
$txt['repair_operation_missing_messages'] = 'Temas sin ning�n mensaje';
$txt['repair_operation_stats_topics'] = 'Temas cuya primera o �ltima entrada de mensaje es incorrecta';
$txt['repair_operation_stats_topics2'] = 'Temas con un n�mero incorrecto de respuestas';
$txt['repair_operation_stats_topics3'] = 'Temas con un conteo de posts no aprobados incorrecto';
$txt['repair_operation_missing_boards'] = 'Temas en un foro inexistente';
$txt['repair_operation_missing_categories'] = 'Foros en una categor�a inexistente';
$txt['repair_operation_missing_posters'] = 'Mensajes enlazados a miembros inexistentes';
$txt['repair_operation_missing_parents'] = 'Foros hijos con padre inexistente';
$txt['repair_operation_missing_polls'] = 'Temas enlazados a encuestas inexistenetes';
$txt['repair_operation_missing_calendar_topics'] = 'Eventos enlazados a temas inexistentes';
$txt['repair_operation_missing_log_topics'] = 'Logs de temas enlazados a temas inexistentes';
$txt['repair_operation_missing_log_topics_members'] = 'Logs de temas enlazados a usuarios inexistentes';
$txt['repair_operation_missing_log_boards'] = 'Logs de foros enlazados a foros inexistentes';
$txt['repair_operation_missing_log_boards_members'] = 'Logs de foros enlazados a usuarios inexistentes';
$txt['repair_operation_missing_log_mark_read'] = 'Datos marcados como le�dos enlazados a foros inexistentes';
$txt['repair_operation_missing_log_mark_read_members'] = 'Datos marcados como le�dos enlazados a usuarios inexistentes';
$txt['repair_operation_missing_pms'] = 'Receptores de MP a los que les falta el mensaje privado principal';
$txt['repair_operation_missing_recipients'] = 'Receptores de MP enlazados a usuarios inexistentes';
$txt['repair_operation_missing_senders'] = 'Mensajes privados enlazados a usuarios inexistentes';
$txt['repair_operation_missing_notify_members'] = 'Logs de notificaciones enlazados a un miembro inexistente';
$txt['repair_operation_missing_cached_subject'] = 'Temas a los que les faltan sus entradas a la cach� de b�squeda';
$txt['repair_operation_missing_topic_for_cache'] = 'Entradas a la cach� de busqueda enlazados a temas inexistentes';
$txt['repair_operation_missing_member_vote'] = 'Votos de encuestas enlazados a usuarios inexistentes';
$txt['repair_operation_missing_log_poll_vote'] = 'Votos de encuestas enlazados a encuestas inexistentes';
$txt['repair_operation_report_missing_comments'] = 'Informes de temas sin ning�n comentario';
$txt['repair_operation_comments_missing_report'] = 'Comentarios de informes a los que les falta el informe del tema';
$txt['repair_operation_group_request_missing_member'] = 'Peticiones de membres�a a las que les falta el miembro que las hace';
$txt['repair_operation_group_request_missing_group'] = 'Peticiones de membres�a para un grupo inexistente';

$txt['salvaged_category_name'] = '�rea de salvamento';
$txt['salvaged_category_error'] = '�No se pudo crear la categor�a �rea de Salvamento!';
$txt['salvaged_board_name'] = 'Temas salvados';
$txt['salvaged_board_description'] = 'Temas creados para mensajes a los que les faltaba el tema';
$txt['salvaged_board_error'] = '�No se pudo crear el foro de temas salvados!';
$txt['salvaged_poll_topic_name'] = 'Encuesta rescatada';
$txt['salvaged_poll_message_body'] = 'Se descubri� esta encuesta sin ning�n tema asociado.';

$txt['database_optimize'] = 'Optimizar base de datos';
$txt['database_numb_tables'] = 'Tu base de datos contiene %1$d tablas.';
$txt['database_optimize_attempt'] = 'Tratando de optimizar su BD...';
$txt['database_optimizing'] = 'Optimizando %1$s... %2$01.2f kb optimizados.';
$txt['database_already_optimized'] = 'Todas las tablas han sido ya optimizadas.';
$txt['database_opimize_unneeded'] = 'No fue necesario optimiar ninguna tabla.';
$txt['database_optimized'] = ' tabla(s) optimizadas.';
$txt['database_no_id'] = 'tiene una ID de usuario inexistente';

$txt['apply_filter'] = 'Aplicar filtro';
$txt['applying_filter'] = 'Aplicanddo filtro';
$txt['filter_only_member'] = 'Mostrar s�lo los mensajes de error de este usuario';
$txt['filter_only_ip'] = 'Mostrar s�lo los mensajes de error de esta direcci�n IP';
$txt['filter_only_session'] = 'Mostrar s�lo los mensajes de error de esta sesi�n';
$txt['filter_only_url'] = 'Mostrar s�lo los mensajes de error de esta URL';
$txt['filter_only_message'] = 'Mostrar s�lo los mensajes de error con este mensaje';
$txt['session'] = 'Sesi�n';
$txt['error_url'] = 'URL de la p�gina causante del error';
$txt['error_message'] = 'Mensaje de Error';
$txt['clear_filter'] = 'Limpiar filtro';
$txt['remove_selection'] = 'Eliminar selecci�n';
$txt['remove_filtered_results'] = 'Eliminar todos los resultados filtrados';
$txt['sure_about_errorlog_remove'] = '�Est� seguro de que quiere eliminar todos los mensajes de error?';
$txt['reverse_direction'] = 'Orden cronol�gico inverso de la lista';
$txt['error_type'] = 'Tipo de error';
$txt['filter_only_type'] = 'Mostrar s�lo los errores de este tipo';
$txt['filter_only_file'] = 'Mostrar s�lo los errores de este archivo';
$txt['apply_filter_of_type'] = 'Aplicar filtro del tipo';

$txt['errortype_all'] = 'Todos los errores';
$txt['errortype_general'] = 'Generales';
$txt['errortype_general_desc'] = 'Errores generales que no han sido categorizados dentro de otro tipo';
$txt['errortype_critical'] = '<span style="color:red;">Cr�ticos</span>';
$txt['errortype_critical_desc'] = 'Errores cr�ticos.  Estos deber�an ser revisados tan r�pido como sea posible.  Ignorar estos errores puede hacer que su foro falle, y probablemente comprometa la seguridad del mismo';
$txt['errortype_database'] = 'Base de datos';
$txt['errortype_database_desc'] = 'Errores causados por consultas a la BD defectuosas.  Deber�an ser revisados e informados al equipo de SMF.';
$txt['errortype_undefined_vars'] = 'Indefinidos';
$txt['errortype_undefined_vars_desc'] = 'Errores causados por el uso de variables, �ndices u offsets indefinidos.';
$txt['errortype_template'] = 'Plantillas';
$txt['errortype_template_desc'] = 'Errores relacionados con la carga de plantillas.';
$txt['errortype_user'] = 'Usuario';
$txt['errortype_user_desc'] = 'Errores causados por los usuarios.  Incluyen contrase�as incorrectas, intentos de acceso cuando se est� baneado e intentos de realizar acciones para las que no se tienen permisos.';

$txt['maintain_recount'] = 'Volver a contar los totales y las estad�sticas de todos los foros';
$txt['maintain_recount_info'] = 'Si el total de respuestas de un tema o el n�mero de MPs en tu bandeja de entrada son incorrectos, esta funci�n recontar� todos los conteos y estad�sticas guardados.';
$txt['maintain_errors'] = 'Encontrar y reparar cualquier error';
$txt['maintain_errors_info'] = 'Si, por ejemplo, faltan posts o mensajes tras una ca�de del servidor, esta funci�n puede ayudar a encontrarlos de nuevo.';
$txt['maintain_logs'] = 'Vaciar logs poco importantes';
$txt['maintain_logs_info'] = 'Esta funci�n vaciar� todos los registros poco importantes. No deber�a ser usada a menos que sea necesario, aunque no da�ar� nada.';
$txt['maintain_cache'] = 'Vaciar la cach� de ficheros';
$txt['maintain_cache_info'] = 'Esta funci�n vaciar� el archivo de cach� en caso de que necesite ser limpiado.';
$txt['maintain_optimize'] = 'Optimizar todas las tablas';
$txt['maintain_optimize_info'] = 'Esta tarea te permite optimizar todas las tablas. Esto se librar� de todos los desbordamientos, haciendo las tablas m�s peque�as y por tanto tu foro m�s r�pido.';
$txt['maintain_version'] = 'Comprobar todos los ficheros contra las versiones actuales';
$txt['maintain_version_info'] = 'Esta tarea de mantenimiento te permite realizar una comprobaci�n de versi�n detallada de todos los archivos de tu foro contra la lista oficial de las �ltimas versiones.';
$txt['maintain_run_now'] = 'Ejecutar tarea ahora';
$txt['maintain_return'] = 'Volver al mantenimiento del foro';

$txt['maintain_backup'] = 'Hacer copia de seguridad de la BD';
$txt['maintain_backup_info'] = 'Descarga una copia de seguridad de la base de datos de tus foros en caso de emergencia.';
$txt['maintain_backup_struct'] = 'Guardar la estructura de tablas.';
$txt['maintain_backup_data'] = 'Guardar los datos de las tablas (lo que de verdad importa).';
$txt['maintain_backup_gz'] = 'Comprimir el archivo con gzip.';
$txt['maintain_backup_save'] = 'Descargar';

$txt['maintain_old'] = 'Eliminar posts antiguos';
$txt['maintain_old_since_days1'] = 'Eliminar todos los temas en los que no hay posts nuevos desde hace ';
$txt['maintain_old_since_days2'] = ' d�as, que son:';
$txt['maintain_old_nothing_else'] = 'Cualquier tipo de tema.';
$txt['maintain_old_are_moved'] = 'Avisos de temas movidos.';
$txt['maintain_old_are_locked'] = 'Cerrados.';
$txt['maintain_old_are_not_stickied'] = 'Pero no contar los temas fijados.';
$txt['maintain_old_all'] = 'Todos los foros (haz clic para seleccionar foros espec�ficos)';
$txt['maintain_old_choose'] = 'Elegir foros espec�ficos (clic para seleccionarlos todos)';
$txt['maintain_old_remove'] = 'Eliminar ahora';
$txt['maintain_old_confirm'] = '�Est� seguro de que quiere borrar los posts antiguos ahora?\\n\\n�Esto no puede ser deshecho!';

$txt['maintain_members'] = 'Eliminar usuarios inactivos';
$txt['maintain_members_ungrouped'] = 'Usuarios desagrupados <span class="smalltext">(Usuarios sin grupo asignado)</span>';
$txt['maintain_members_since1'] = 'Eliminar todos los usuarios que no han';
$txt['maintain_members_since2'] = 'durante';
$txt['maintain_members_since3'] = 'd�as.';
$txt['maintain_members_activated'] = 'activado su cuenta';
$txt['maintain_members_logged_in'] = 'accedido';
$txt['maintain_members_all'] = 'Todos los grupos de usuarios';
$txt['maintain_members_choose'] = 'Grupos seleccionados';
$txt['maintain_members_confirm'] = '�Est� seguro de que quiere borrar esas cuentas de usuario?\\n\\n�Esto no puede ser deshecho!';

$txt['utf8_title'] = 'Convertir la BD y los datos a UTF-8';
$txt['utf8_introduction'] = 'UTF-8 es un juego de caracteres internacional que cubre pr�acticamente todos los idiomas del mundo. Convertir su BD y sus datos a UTF-8 puede hacer m�s f�cil el soporte de m�ltiples idiomas en el mismo foro. Tambi�n puede mejorar las capacidades de b�squeda y clasificaci�n para idiomas con caracteres no latinos.';
$txt['utf8_warning'] = 'Si quieres convertir tus datos y BD a UTF-8, ten en cuenta lo siguiente: <ul class="normallist"> <li>�Convertir juegos de caracteres puede ser <em>da�ino</em> para tus datos! Aseg�rate de que has hecho una copia de seguridad de tu BD <em>antes</em> de la conversi�n.</li> <li>Debido a que UTF-8 es un juego de caracteres m�s rico que la mayor�a de los dem�s, no hay forma de deshacer los cambios una vez aplicados, salvo restaurar la BD que guardaste antes de la conversi�n (todos los cambios posteriores se perder�an).</li>	<li>Despu�s de convertir tus datos y BD a UTF-8, necesitar�s archivos de idioma compatibles con UTF-8.</li> </ul>';
$txt['utf8_charset_not_supported'] = 'La conversi�n desde %1$s a UTF-8 no est� soportada.';
$txt['utf8_detected_charset'] = 'Bas�ndonos en su archivo de idioma por defecto (\'%1$s\'), el juego de caracteres m�s adecuado para sus datos ser�a \'%2$s\'.';
$txt['utf8_already_utf8'] = 'Su BD y sus datos paracen estar ya configurados como datos UTF-8. No es necesaria la conversi�n.';
$txt['utf8_source_charset'] = 'Juego de caracteres de los datos';
$txt['utf8_proceed'] = 'Proceder';
$txt['utf8_database_charset'] = 'Juego de caracteres de la base de datos';
$txt['utf8_target_charset'] = 'Convertir datos y BD a';
$txt['utf8_utf8'] = 'UTF-8';
$txt['utf8_db_version_too_low'] = 'La versi�n de MySQL que su servidor de base de datos usa no es lo suficientemente alta para soportar UTF-8 adecuadamente. Como m�nimo se requiere una versi�n 4.1.2.';
$txt['utf8_cannot_convert_fulltext'] = 'Tu tabla de mensajes est� usando un �ndice fulltext para las b�squedas. No puedes convertirla a UTF-8 hasta que ese �ndice sea eliminado. Puedes recrearlo m�s adelante, una vez que la conversi�n se haya completado.';

$txt['entity_convert_title'] = 'Convertir entidades-HTML a caracteres UTF-8';
$txt['entity_convert_only_utf8'] = 'La base de datos debe estar codificada en formato UTF-8 antes de que las entidades-HTML puedan ser convertidas a UTF-8';
$txt['entity_convert_introduction'] = 'Esta funci�n convertir� todos los caracteres almacenados en la BD como entidades-HTML en caracteres UTF-8. Esto es especialmente �til cuando acaba de convertir su foro desde un juego de caracteres como ISO-8859-1 mientras que usaba caracteres no latinos en el foro. El navegador entonces env�a todos los caracteres como entidades-HTML. Por ejemplo, la entidad-HTML &amp;#945; representa la letra griega &#945; (alpha). Convertir entidades a UTF-8 mejorar� la b�squeda y la clasificaci�n de texto y reducir� el tama�o de los datos almacenados.';
$txt['entity_convert_proceed'] = 'Proceder';

// Move topics out.
$txt['move_topics_maintenance'] = 'Mover temas';
$txt['move_topics_select_board'] = 'Seleccionar foro';
$txt['move_topics_from'] = 'Mover temas desde';
$txt['move_topics_to'] = 'hacia';
$txt['move_topics_now'] = 'Mover ahora';
$txt['move_topics_confirm'] = '�Est� seguro de que quiere mover TODOS los temas desde &quot;%board_from%&quot; hacia &quot;%board_to%&quot;?';

$txt['maintain_reattribute_posts'] = 'Volver a adjudicar posts de usuario';
$txt['reattribute_guest_posts'] = 'Adjudicar posts de invitado hechos con';
$txt['reattribute_email'] = 'Direcci�n de email de';
$txt['reattribute_username'] = 'Nombre de usuario de';
$txt['reattribute_current_member'] = 'Adjudicar posts al usuario';
$txt['reattribute_increase_posts'] = 'A�adir posts a los usuarios con un conteo de posts';
$txt['reattribute'] = 'Adjudicar';
// Don't use entities in the below string.
$txt['reattribute_confirm'] = '�Est� seguro de que quiere atribuir todos los posts de invitado con %type% "%find%" al usuario "%member_to%"?';
$txt['reattribute_confirm_username'] = 'nombre de usuario';
$txt['reattribute_confirm_email'] = 'direcci�n de email';
$txt['reattribute_cannot_find_member'] = 'No se pudo encontrar ese usuario para atribuirle los posts.';

?>