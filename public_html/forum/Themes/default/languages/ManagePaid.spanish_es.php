<?php
// Version: 2.0.10; ManagePaid

global $boardurl;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Symbols.
$txt['usd_symbol'] = '$%1.2f';
$txt['eur_symbol'] = '&euro;%1.2f';
$txt['gbp_symbol'] = '&pound;%1.2f';

$txt['usd'] = 'USD ($)';
$txt['eur'] = 'EURO (&euro;)';
$txt['gbp'] = 'GBP (&pound;)';
$txt['other'] = 'Otra';

$txt['paid_username'] = 'Nombre de Usuario';

$txt['paid_subscriptions_desc'] = 'Desde esta secci�n se pueden a�adir, quitar y modificar los m�todos de pago por suscripci�n a tu foro.';
$txt['paid_subs_settings'] = 'Configuraci�n';
$txt['paid_subs_settings_desc'] = 'Desde aqu� puedes modificar los m�todos de pago disponibles para tus usuarios.';
$txt['paid_subs_view'] = 'Ver Suscripciones ';
$txt['paid_subs_view_desc'] = 'Desde esta secci�n puedes ver todas las suscripciones que tienes disponibles.';

// Setting type strings.
$txt['paid_enabled'] = 'Activar suscripciones de pago';
$txt['paid_enabled_desc'] = 'Esta opci�n debe estar activada para que las suscripciones de pago puedan ser usadas en el foro.';
$txt['paid_email'] = 'Enviar emails de notificaci�n';
$txt['paid_email_desc'] = 'Informar al administrador cuando una suscripci�n cambie autom�ticamente.';
$txt['paid_email_to'] = 'Destinatarios email notificaciones';
$txt['paid_email_to_desc'] = 'Lista separada por comas de direcciones de email adicionales a las que enviar notificaciones adem�s de a los administradores del foro.';
$txt['paidsubs_test'] = 'Habilitar modo de prueba';
$txt['paidsubs_test_desc'] = 'This puts the paid subscriptions mod into &quot;test&quot; mode, which will, whereever possible, use sandbox payment methods in paypal etc. Do not enable unless you know what you are doing!';
$txt['paidsubs_test_confirm'] = '�Est�s seguro de que quieres activar el modo de prueba?';
$txt['paid_email_no'] = 'No enviar ninguna notificaci�n';
$txt['paid_email_error'] = 'Informar cuando la suscripci�n falle';
$txt['paid_email_all'] = 'Informar sobre todos los cambios de suscripci�n autom�ticos';
$txt['paid_currency'] = 'Selecciona Moneda';
$txt['paid_currency_code'] = 'C�digo de moneda';
$txt['paid_currency_code_desc'] = 'C�digo usado por las pasarelas de pago';
$txt['paid_currency_symbol'] = 'S�mbolo usado por el m�todo de pago';
$txt['paid_currency_symbol_desc'] = 'Usa \'%1.2f\' para especificar d�nde va el n�mero, por ejemplo $%1.2f, %1.2fDM etc ';
$txt['paypal_email'] = 'Direcci�n de email de Paypal';
$txt['paypal_email_desc'] = 'D�jalo en blanco si no quieres usar Paypal';
$txt['worldpay_id'] = 'ID de instalaci�n de WorldPlay';
$txt['worldpay_id_desc'] = 'La ID de instalaci�n generada por WorldPlay. D�jala en blanco si no vas a usar WorldPlay';
$txt['worldpay_password'] = 'Contrase�a de retorno de WorldPlay';
$txt['worldpay_password_desc'] = 'Cuando establezcas esta contrase�a en WorldPlay, aseg�rate de que es �nica y que no es la misma que tu contrase�a de WorldPlay o de tu cuenta de administrador.';
$txt['authorize_id'] = 'ID de instalaci�n de Authorize.net';
$txt['authorize_id_desc'] = 'La ID de instalaci�n generada por Authorize.net. D�jala en blanco si no vas a usar Authorize.net';
$txt['authorize_transid'] = 'ID de transacci�n de Authorize.net';
$txt['2co_id'] = 'ID de instalaci�n de 2co.com';
$txt['2co_id_desc'] = 'La ID de instalaci�n generada por 2co.com. D�jalo en blanco si no vas a usar 2co.com';
$txt['2co_password'] = 'Palabra Secreta de 2co.com';
$txt['2co_password_desc'] = 'Tu palabra secreta de 2checkout.';
$txt['nochex_email'] = 'Direcci�n de email de Nochex';
$txt['nochex_email_desc'] = 'Email de una cuenta de vendedor de Nochex. D�jalo en blanco si no est�s usando Nochex.';
$txt['paid_settings_save'] = 'Guardar';

$txt['paid_note'] = '<strong class="alert">Importante:</strong>
Para que las suscripciones se actualicen autom�ticamente para tus usuarios,
	necesitar�s establecer una URL de retorno para cada uno de tus m�todos de pago. Para todos los tipos de pago, esta URL de retorno deber�a tener esta forma:


	&bull; <strong>' . $boardurl . '/subscriptions.php</strong>


	Puedes editar el enlace para Paypal directamente haciendo clic <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-ipn-notify" target="_blank">aqu�</a>.

	Para las otras pasarelas (en caso de que est�n instaladas) normalmente podr�s encontrar esta opci�n en tu panel de cliente, habitualmente bajo el t�rmino "URL de retorno" o "URL de regreso" (Return URL, Callback URL).';

$txt['paypal_additional_emails'] = 'Primary PayPal email address';
$txt['paypal_additional_emails_desc'] = 'If different (for business account)';

// View subscription strings.
$txt['paid_name'] = 'Nombre';
$txt['paid_status'] = 'Estado';
$txt['paid_cost'] = 'Coste';
$txt['paid_duration'] = 'Duraci�n';
$txt['paid_active'] = 'Activa';
$txt['paid_pending'] = 'Pago Pendiente';
$txt['paid_finished'] = 'Finalizada';
$txt['paid_total'] = 'Total';
$txt['paid_is_active'] = 'Activada';
$txt['paid_none_yet'] = 'No has configurado ninguna suscripci�n.';
$txt['paid_payments_pending'] = 'Pendientes de Pago';
$txt['paid_order'] = 'Ordenar';

$txt['yes'] = 'S�';
$txt['no'] = 'No';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = 'A�adir Suscripci�n';
$txt['paid_edit_subscription'] = 'Modificar Suscripci�n';
$txt['paid_delete_subscription'] = 'Eliminar Suscripci�n';

$txt['paid_mod_name'] = 'Nombre de la Suscripci�n';
$txt['paid_mod_desc'] = 'Descripci�n';
$txt['paid_mod_reminder'] = 'Enviar email de recordatorio';
$txt['paid_mod_reminder_desc'] = 'D�as antes de la finalizaci�n de la suscripci�n para mandar un recordatorio (en d�as, 0 para deshabilitar).';
$txt['paid_mod_email'] = 'Email a enviar al finalizar';
$txt['paid_mod_email_desc'] = 'Donde {NAME} es el nombre del usuario; {FORUM} es el nombre de la comunidad. El asunto del email deber�a estar en la primera l�nea. En blanco si no se quiere notificaci�n por email.';
$txt['paid_mod_cost_usd'] = 'Coste (USD)';
$txt['paid_mod_cost_eur'] = 'Coste (EUR)';
$txt['paid_mod_cost_gbp'] = 'Coste (GBP)';
$txt['paid_mod_cost_blank'] = 'Deja esto en blanco si no quieres ofrecer esta moneda.';
$txt['paid_mod_span'] = 'Duraci�n de la suscripci�n';
$txt['paid_mod_span_days'] = 'D�as';
$txt['paid_mod_span_weeks'] = 'Semanas';
$txt['paid_mod_span_months'] = 'Meses';
$txt['paid_mod_span_years'] = 'A�os';
$txt['paid_mod_active'] = 'Activa';
$txt['paid_mod_active_desc'] = 'Una suscripci�n debe estar activa para que los nuevos miembros puedan unirse.';
$txt['paid_mod_prim_group'] = 'Grupo primario al suscribirse';
$txt['paid_mod_prim_group_desc'] = 'Grupo primario en el que colocar a los usuarios cuando se suscriben.';
$txt['paid_mod_add_groups'] = 'Grupos adicionales al suscribirse';
$txt['paid_mod_add_groups_desc'] = 'Grupos adicionales a los que a�adir a los usuarios tras su suscripci�n.';
$txt['paid_mod_no_group'] = 'No cambiar';
$txt['paid_mod_edit_note'] = 'Tenga en cuenta que dado que este grupo ya tiene suscriptores los ajustes de dicho grupo no pueden ser cambiados.';
$txt['paid_mod_delete_warning'] = '<strong>AVISO</strong><br /><br />Si borras esta suscripci�n todos los usuarios actualmente suscritos perder�n cualquier permiso de acceso concedido por dicha suscripci�n. A menos que est�s seguro de que quieres hacer esto se recomienda que simplemente desactives la suscripci�n, en vez de borrarla.<br />';
$txt['paid_mod_repeatable'] = 'Permitir a los usuario auto-renovar esta suscripci�n.';
$txt['paid_mod_allow_partial'] = 'Permitir suscripci�n parcial';
$txt['paid_mod_allow_partial_desc'] = 'Si esta opci�n est� activada, en el caso en el que un usuario pague menos de lo requerido se le conceder� una suscripci�n por la fracci�n de tiempo por la que ha pagado.';
$txt['paid_mod_fixed_price'] = 'Suscripci�n por un precio y periodo fijos';
$txt['paid_mod_flexible_price'] = 'El precio de la suscripci�n var�a seg�n la duraci�n';
$txt['paid_mod_price_breakdown'] = 'Desglose de precios flexibles';
$txt['paid_mod_price_breakdown_desc'] = 'Define aqu� cu�nto deber�a costar la suscripci�n en funci�n del periodo contratado. Por ejemplo, podr�a costar 12EUR suscribirse por un mes, pero solo 100EUR por un a�o. Si no quieres definir un precio para un periodo concreto, d�jalo en blanco.';
$txt['flexible'] = '';

$txt['paid_per_day'] = 'Precio por d�a';
$txt['paid_per_week'] = 'Precio por semana';
$txt['paid_per_month'] = 'Precio por mes';
$txt['paid_per_year'] = 'Precio por a�o';
$txt['day'] = 'D�a';
$txt['week'] = 'Semana';
$txt['month'] = 'Mes';
$txt['year'] = 'A�o';

// View subscribed users.
$txt['viewing_users_subscribed'] = 'Viendo usuarios';
$txt['view_users_subscribed'] = 'Viendo usuarios suscritos a: &quot;%1$s&quot; ';
$txt['no_subscribers'] = 'Actualmente no hay usuarios suscritos a este plan de suscripci�n.';
$txt['add_subscriber'] = 'A�adir nuevo suscriptor';
$txt['edit_subscriber'] = 'Editar suscriptor';
$txt['delete_selected'] = 'Borrar seleccionados';
$txt['complete_selected'] = 'Completar seleccionados';

// !!! These strings are used in conjunction with JavaScript.  Use numeric entities.
$txt['delete_are_sure'] = 'Are you sure you want to delete all record of the selected subscriptions?';
$txt['complete_are_sure'] = '�Est�s seguro de que quieres borrar por completo las suscripciones seleccionadas?';

$txt['start_date'] = 'Fecha de Inicio';
$txt['end_date'] = 'Fecha de Finalizaci�n';
$txt['start_date_and_time'] = 'Fecha y hora de inicio';
$txt['end_date_and_time'] = 'Fecha y hora de finalizaci�n';
$txt['edit'] = 'EDITAR';
$txt['one_username'] = 'Por favor, introduzca un �nico nombre de usuario.';
$txt['hour'] = 'Hora';
$txt['minute'] = 'Minuto';
$txt['error_member_not_found'] = 'El usuario introducido no pudo ser encontrado';
$txt['member_already_subscribed'] = 'Este usuario ya est� suscrito a este plan. Por favor, edite su suscripci�n.';
$txt['search_sub'] = 'Encontrar usuario';

// Make payment.
$txt['paid_confirm_payment'] = 'Confirmar Pago';
$txt['paid_confirm_desc'] = 'Para continuar el proceso de pago por favor comprueba los detalles abajo y pulsa &quot;Ordenar&quot;';
$txt['paypal'] = 'PayPal';
$txt['paid_confirm_paypal'] = 'Para pagar mediante <a href="http://www.paypal.com">PayPal</a> por favor haz clic en el bot�n de abajo. Ser�s dirigido al sitio de PayPal para el pago. ';
$txt['paid_paypal_order'] = 'Ordenar con PayPal';
$txt['worldpay'] = '';
$txt['paid_confirm_worldpay'] = 'Para pagar usando <a href="http://www.worldpay.com">WorldPay</a> haga clic en el bot�n de abajo, por favor. Deber�a ser redirigido al sitio de pago de WorldPlay.';
$txt['paid_worldpay_order'] = 'Hacer pedido con WorldPlay';
$txt['nochex'] = '';
$txt['paid_confirm_nochex'] = 'Para pagar usando <a href="http://www.nochex.com">Nochex</a> haga clic en el bot�n de abajo, por favor. Deber�a ser redirigido al sitio de pago de Nochex.';
$txt['paid_nochex_order'] = 'Hacer pedido con Nochex';
$txt['authorize'] = '';
$txt['paid_confirm_authorize'] = 'Para pagar usando <a href="http://www.authorize.net">Authorize.Net</a> haga clic en el bot�n de abajo, por favor. Deber�a ser redirigido al sitio de pago de Authorize.Net.';
$txt['paid_authorize_order'] = 'Hacer pedido con Authorize.net';
$txt['2co'] = '';
$txt['paid_confirm_2co'] = 'Para pagar usando <a href="http://www.2co.com">2co.com</a> haga clic en el bot�n de abajo, por favor. Deber�a ser redirigido al sitio de pago de 2co.com.';
$txt['paid_2co_order'] = 'Hacer pedido con 2co.com';
$txt['paid_done'] = 'Pago Completado';
$txt['paid_done_desc'] = 'Gracias por tu pago. En cuanto la transacci�n se haya verificado se activar� la suscripci�n.';
$txt['paid_sub_return'] = 'Volver a Suscripciones';
$txt['paid_current_desc'] = 'Debajo hay una lista de todas tus suscripciones actuales y previas. Para extender una suscripci�n existente simplemente selecci�nala de la lista de arriba.';
$txt['paid_admin_add'] = 'A�adir esta Suscripci�n';

$txt['paid_not_set_currency'] = 'You have not setup your currency yet. Please do so from the settings menu before continuing';
$txt['paid_no_cost_value'] = 'Debe introducir un coste y un periodo de suscripci�n.';
$txt['paid_all_freq_blank'] = 'Debe introducir un coste para al menos uno de los cuatro periodos.';

// Some error strings.
$txt['paid_no_data'] = 'Se enviaron datos incorrectos al script';

$txt['paypal_could_not_connect'] = 'No se pudo conectar al servidor de PayPal';
$txt['paid_sub_not_active'] = 'Este plan de suscripci�n no acepta nuevo suscriptores.';
$txt['paid_disabled'] = 'Las suscripciones de pago est�n desactivadas en estos momentos.';
$txt['paid_unknown_transaction_type'] = 'Tipo de transacci�n de suscripci�n de pago desconocido.';
$txt['paid_empty_member'] = 'El manejador de suscripci�n de pago no pudo recuperar la ID de usuario.';
$txt['paid_could_not_find_member'] = 'El manejador de suscripci�n de pago no pudo encontrar al usuario con ID: %1$d';
$txt['paid_count_not_find_subscription'] = 'El manejador de suscripci�n de pago no pudo encontrar suscripci�n para la ID de usuario: %1$s, ID de suscripci�n: %2$s ';
$txt['paid_count_not_find_subscription_log'] = 'El manejador de suscripci�n de pago no pudo encontrar entrada en el registro de suscripci�n para la ID de usuario: %1$s, ID de suscripci�n: %2$s ';
$txt['paid_count_not_find_outstanding_payment'] = 'Coud not find outstanding payment entry for member ID: %1$s, subscription ID: %2$s so ignoring';
$txt['paid_admin_not_setup_gateway'] = 'Lo sentimos, el administrador a�n no ha terminado de configurar las suscripciones de pago. Por favor, vuelva a intentarlo m�s tarde.';
$txt['paid_make_recurring'] = 'Hacer un pago peri�dico';

$txt['subscriptions'] = 'Suscripciones';
$txt['subscription'] = 'Suscripci�n';
$txt['paid_subs_desc'] = 'Debajo hay una lista de todas las suscripciones disponibles en este foro.';
$txt['paid_subs_none'] = '�No hay suscripciones de pago disponibles actualmente!';

$txt['paid_current'] = 'Suscripciones Existentes';
$txt['pending_payments'] = 'Pagos Pendientes';
$txt['pending_payments_desc'] = 'Este usuario ha intentado hacer los siguientes pagos para esta suscripci�n, pero la confirmaci�n no ha sido recibida por el foro. Si est�s seguro de que el pago ha sido recibido haz clic en &quot;aceptar&quot; para activar la suscripci�n. Alternativamente puedes hacer clic en &quot;Eliminar&quot; para eliminar cualquier referencia al pago.';
$txt['pending_payments_value'] = 'Valor';
$txt['pending_payments_accept'] = 'Aceptar';
$txt['pending_payments_remove'] = 'Eliminar';

?>