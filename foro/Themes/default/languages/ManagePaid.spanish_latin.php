<?php
// Version: 2.0.10; ManagePaid

global $boardurl;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Symbols.
$txt['usd_symbol'] = ' $%1.2f';
$txt['eur_symbol'] = ' &euro;%1.2f';
$txt['gbp_symbol'] = ' &pound;%1.2f';

$txt['usd'] = ' USD ($)';
$txt['eur'] = ' EURO (&euro;)';
$txt['gbp'] = ' GBP (&pound;)';
$txt['other'] = 'Otro';

$txt['paid_username'] = 'Nombre de usuario';

$txt['paid_subscriptions_desc'] = 'Desde esta secci�n se puede a�adir, quitar y modificar los m�todos de pago a la suscripci�n de foros.';
$txt['paid_subs_settings'] = 'Configuraci�n';
$txt['paid_subs_settings_desc'] = 'Desde aqu� se puede modificar los m�todos de pago disponibles para sus usuarios.';
$txt['paid_subs_view'] = 'Ver suscripciones';
$txt['paid_subs_view_desc'] = 'Desde esta secci�n puede ver todas las suscripciones que tiene disponible.';

// Setting type strings.
$txt['paid_enabled'] = 'Habilitar suscripciones de pago';
$txt['paid_enabled_desc'] = 'La comprobaci�n deber� efectuarse con las cotizaciones que se utilizar�n en el foro.';
$txt['paid_email'] = 'Enviar notificaciones por email';
$txt['paid_email_desc'] = 'Informar al administrador de forma autom�tica los cambios en una suscripci�n.';
$txt['paid_email_to'] = 'Email para la correspondencia';
$txt['paid_email_to_desc'] = 'Lista separada por comas de direcciones de email para las notificaciones a los administradores';
$txt['paidsubs_test'] = 'Activar el modo de prueba';
$txt['paidsubs_test_desc'] = 'Esto pone a las cotizaciones en "modo de prueba", siempre que sea posible, utilice m�todos de pago como paypal, etc. No habilite a menos que sepa lo que est� haciendo!';
$txt['paidsubs_test_confirm'] = '�Est�s seguro de que deseas activar el modo de pruebas?';
$txt['paid_email_no'] = 'No env�e ninguna notificaci�n';
$txt['paid_email_error'] = 'Informar cuando falla la suscripci�n';
$txt['paid_email_all'] = 'Informar sobre cualquier cambio de suscripci�n autom�tica';
$txt['paid_currency'] = 'Seleccione Moneda';
$txt['paid_currency_code'] = 'C�digo de moneda';
$txt['paid_currency_code_desc'] = 'C�digo empleado por los comerciantes de pago';
$txt['paid_currency_symbol'] = 'S�mbolo usado por el m�todo de pago';
$txt['paid_currency_symbol_desc'] = 'Usar \'%1.2f\' para especificar d�nde va el n�mero, por ejemplo $%1.2f, %1.2fDM etc';
$txt['paypal_email'] = 'Direccion de email de Paypal';
$txt['paypal_email_desc'] = 'Dejar en blanco si no desea utilizar PayPal.';
$txt['worldpay_id'] = 'ID de instalaci�n WorldPay';
$txt['worldpay_id_desc'] = 'ID de instalaci�n generados por WorldPay. Deja en blanco si no est� utilizando WorldPay';
$txt['worldpay_password'] = 'Contrase�a WorldPay Devoluci�n de llamada';
$txt['worldpay_password_desc'] = 'Garantizar al establecer esta contrase�a en WorldPay que es �nica y no la misma que su contrase�a de la cuenta admin!';
$txt['authorize_id'] = 'ID de instalaci�n Authorize.net';
$txt['authorize_id_desc'] = 'ID de instalaci�n generados por Authorize.net. Deja en blanco si no est� utilizando Authorize.net';
$txt['authorize_transid'] = 'Transacci�n Authorize.Net ID';
$txt['2co_id'] = 'ID de instalaci�n 2co.com';
$txt['2co_id_desc'] = 'ID de instalaci�n generados por 2co.com. Deja en blanco si no est� utilizando 2co.com';
$txt['2co_password'] = 'Palabra secreta 2co.com';
$txt['2co_password_desc'] = 'Su palabra secreta 2checkout.';
$txt['nochex_email'] = 'Direccion email de Nochex';
$txt['nochex_email_desc'] = 'Email de una cuenta de comerciante en Nochex. Deja en blanco si no est� utilizando Nochex';
$txt['paid_settings_save'] = 'Guardar';

$txt['paid_note'] = '<strong class="alert">Nota:</strong><br />Para las suscripciones que se actualiza autom�ticamente para sus usuarios, tendr� que configurar una direcci�n de retorno para cada uno de sus m�todos de pago. Para todos los tipos de pago, este retorno URL debe establecerse como:<br /><br />
	&nbsp;&nbsp;&bull;&nbsp;&nbsp;<strong>' . $boardurl . '/subscriptions.php</strong><br /><br />
	Puede modificar el v�nculo para paypal directamente, haciendo clic <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-ipn-notify" target="_blank">aqu�</a>.<br />
	Por los enlace de otro tipo (si est� instalado) que normalmente se puede encontrar en los paneles de su cliente, por lo general bajo el t�rmino de Retorno "URL" o "Callback URL".';

$txt['paypal_additional_emails'] = 'Primary PayPal email address';
$txt['paypal_additional_emails_desc'] = 'If different (for business account)';

// View subscription strings.
$txt['paid_name'] = 'Nombre';
$txt['paid_status'] = 'Estado';
$txt['paid_cost'] = 'Costo';
$txt['paid_duration'] = 'Duraci�n';
$txt['paid_active'] = 'Activo';
$txt['paid_pending'] = 'Esperando pago';
$txt['paid_finished'] = 'Terminado';
$txt['paid_total'] = ' Total';
$txt['paid_is_active'] = 'Activado';
$txt['paid_none_yet'] = 'No se han establecido las suscripciones.';
$txt['paid_payments_pending'] = 'Pagos pendientes';
$txt['paid_order'] = 'Ordenar';

$txt['yes'] = 'S�';
$txt['no'] = ' No';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = 'A�adir nueva suscripci�n';
$txt['paid_edit_subscription'] = 'Editar suscripci�n';
$txt['paid_delete_subscription'] = 'Borrar suscripci�n';

$txt['paid_mod_name'] = 'Nombre de suscripci�n';
$txt['paid_mod_desc'] = 'Descripci�n';
$txt['paid_mod_reminder'] = 'Enviar recordatorio por email';
$txt['paid_mod_reminder_desc'] = 'D�as antes de enviar un recordatorio de que la suscripci�n expira. (En d�as, 0 para inhabilitar)';
$txt['paid_mod_email'] = 'Enviar por email al Finalizar';
$txt['paid_mod_email_desc'] = 'Donde {NAME} es el nombre de los usuarios; {FORUM} es el nombre de la comunidad. Asunto del email debe estar en primera l�nea. En blanco sin ninguna notificaci�n por email.';
$txt['paid_mod_cost_usd'] = ' Cost (USD)';
$txt['paid_mod_cost_eur'] = ' Cost (EUR)';
$txt['paid_mod_cost_gbp'] = ' Cost (GBP)';
$txt['paid_mod_cost_blank'] = 'Deje en blanco para no ofrecer esta moneda.';
$txt['paid_mod_span'] = 'Duraci�n de la Suscripci�n';
$txt['paid_mod_span_days'] = 'D�as';
$txt['paid_mod_span_weeks'] = 'Semanas';
$txt['paid_mod_span_months'] = 'Meses';
$txt['paid_mod_span_years'] = 'A�os';
$txt['paid_mod_active'] = 'Activo';
$txt['paid_mod_active_desc'] = 'La suscripci�n debe estar activa para nuevos miembros.';
$txt['paid_mod_prim_group'] = 'Suscripci�n al grupo principal';
$txt['paid_mod_prim_group_desc'] = 'Grupo primario para poner al usuario cuando se suscriban.';
$txt['paid_mod_add_groups'] = 'Grupos adicionales para la susscripci�n';
$txt['paid_mod_add_groups_desc'] = 'Grupos adicionales para a�adir al usuario.';
$txt['paid_mod_no_group'] = 'Sin Cambios';
$txt['paid_mod_edit_note'] = 'Nota: Este grupo ya tiene suscriptores existentes, la configuraci�n del grupo no se puede cambiar!';
$txt['paid_mod_delete_warning'] = '<strong>ADVERTENCIA</strong><br /><br />Si elimina esta suscripci�n, todos los usuarios actualmente en ella, perderan cualquier derecho de acceso concedida por la suscripci�n. A menos que est� seguro de que quieres hacer esto, es recomendable que desactive simplemente una suscripci�n en lugar de eliminarla.<br />';
$txt['paid_mod_repeatable'] = 'Permitir al usuario auto-renovaci�n';
$txt['paid_mod_allow_partial'] = 'Dejar suscripci�n parcial';
$txt['paid_mod_allow_partial_desc'] = 'Si esta opci�n est� activada, en el caso donde el usuario paga menos de lo requerido, se les conceder� una suscripci�n para el porcentaje de la duraci�n por el que hayan pagado.';
$txt['paid_mod_fixed_price'] = 'Suscripci�n a plazo y precio fijo';
$txt['paid_mod_flexible_price'] = 'Precio de suscripci�n var�a seg�n la duraci�n';
$txt['paid_mod_price_breakdown'] = 'Desglose de precios flexibles';
$txt['paid_mod_price_breakdown_desc'] = 'Defina aqu� cu�nto deber�a costar la suscripci�n dependiendo del per�odo que se suscriban. Por ejemplo, podr�a costar 12 Pesos para suscribirse durante un mes, pero s�lo 100 Pesos por un a�o. Si no desea definir un precio para un determinado per�odo de tiempo deje en blanco.';
$txt['flexible'] = ' Flexible';

$txt['paid_per_day'] = 'Precio por d�a';
$txt['paid_per_week'] = 'Precio por semana';
$txt['paid_per_month'] = 'Precio por mes';
$txt['paid_per_year'] = 'Precio por a�o';
$txt['day'] = 'D�a';
$txt['week'] = 'Semana';
$txt['month'] = 'Mes';
$txt['year'] = 'A�o';

// View subscribed users.
$txt['viewing_users_subscribed'] = 'Viendo el usuario';
$txt['view_users_subscribed'] = 'Viendo usuarios suscritos al: "%1$s"';
$txt['no_subscribers'] = 'Actualmente no hay abonados a esta suscripci�n!';
$txt['add_subscriber'] = 'A�adir nuevo suscriptor';
$txt['edit_subscriber'] = 'Editar suscriptor';
$txt['delete_selected'] = 'Eliminar seleccionados';
$txt['complete_selected'] = 'Complete seleccionados';

// !!! These strings are used in conjunction with JavaScript.  Use numeric entities.
$txt['delete_are_sure'] = '�Est� seguro que desea eliminar todo registro de las suscripciones seleccionadas?';
$txt['complete_are_sure'] = '�Est� seguro que desea completar la suscripci�n seleccionada?';

$txt['start_date'] = 'Fecha de Inicio';
$txt['end_date'] = 'Fecha de finalizaci�n';
$txt['start_date_and_time'] = 'Hora y Fecha de inicio';
$txt['end_date_and_time'] = 'Hora y Fecha de finalizaci�n';
$txt['edit'] = 'EDITAR';
$txt['one_username'] = 'Por favor, s�lo introduzca un nombre de usuario.';
$txt['hour'] = 'Hora';
$txt['minute'] = 'Minuto';
$txt['error_member_not_found'] = 'El usuario introducido no se encuentra';
$txt['member_already_subscribed'] = 'Este usuario ya est� suscrito a esta suscripci�n. Por favor, modifique su suscripci�n existente.';
$txt['search_sub'] = 'Buscar usuario';

// Make payment.
$txt['paid_confirm_payment'] = 'Confirmar Pago';
$txt['paid_confirm_desc'] = 'Para continuar con el pago por favor revise el formulario y pulse "Ordenar"';
$txt['paypal'] = ' PayPal';
$txt['paid_confirm_paypal'] = 'Para pagar con <a href="http://www.paypal.com">PayPal</a> por favor haga clic en el bot�n de abajo. El sistema lo llevar� al sitio de PayPal para el pago.';
$txt['paid_paypal_order'] = 'Ordenar con PayPal';
$txt['worldpay'] = ' WorldPay';
$txt['paid_confirm_worldpay'] = 'Para pagar con <a href="http://www.worldpay.com">WorldPay</a> por favor haga clic en el bot�n de abajo. El sistema lo llevar� al sitio de WorldPay para el pago.';
$txt['paid_worldpay_order'] = 'Ordenar con WorldPay';
$txt['nochex'] = ' Nochex';
$txt['paid_confirm_nochex'] = 'Para pagar con <a href="http://www.nochex.com">Nochex</a> por favor haga clic en el bot�n de abajo. El sistema lo llevar� al sitio de Nochex para el pago.';
$txt['paid_nochex_order'] = 'Ordenar con Nochex';
$txt['authorize'] = ' Authorize.Net';
$txt['paid_confirm_authorize'] = 'Para pagar con <a href="http://www.authorize.net">Authorize.Net</a> por favor haga clic en el bot�n de abajo. El sistema lo llevar� al sitio de Authorize.Net para el pago.';
$txt['paid_authorize_order'] = 'Ordenar con Authorize.Net';
$txt['2co'] = ' 2checkout';
$txt['paid_confirm_2co'] = 'Para pagar con <a href="http://www.2co.com">2co.com</a> por favor haga clic en el bot�n de abajo. El sistema lo llevar� al sitio de 2co.com para el pago.';
$txt['paid_2co_order'] = 'Ordenar con 2co.com';
$txt['paid_done'] = 'El pago esta completo';
$txt['paid_done_desc'] = 'Gracias por su pago. Una vez que la transacci�n se ha verificado la suscripci�n ser� activada.';
$txt['paid_sub_return'] = 'Volver a Suscripciones';
$txt['paid_current_desc'] = 'A continuaci�n se muestra una lista de todas sus suscripciones actuales y anteriores. Para extender una suscripci�n existente simplemente seleccione de la lista anterior.';
$txt['paid_admin_add'] = 'A�adir esta Suscripci�n';

$txt['paid_not_set_currency'] = 'Usted no ha configurado su moneda todav�a. Por favor, hacerlo desde el men� de configuraci�n antes de continuar';
$txt['paid_no_cost_value'] = 'Debe introducir un costo y los plazos de suscripci�n.';
$txt['paid_all_freq_blank'] = 'Debe introducir un costo y por lo menos una de las cuatro duraciones.';

// Some error strings.
$txt['paid_no_data'] = 'No hay datos validos.';

$txt['paypal_could_not_connect'] = 'No puedo conectar al servidor de PayPal';
$txt['paid_sub_not_active'] = 'Esta suscripci�n no toma a ning�n nuevo usuario!';
$txt['paid_disabled'] = 'Suscripciones de pago se encuentra inhabilitada!';
$txt['paid_unknown_transaction_type'] = 'Tipo de transacci�n Desconocida para Suscripciones de pago.';
$txt['paid_empty_member'] = 'Suscripci�n de pago no pudo identificar a usuario';
$txt['paid_could_not_find_member'] = 'Suscripci�n de pago no pudo encontrar usuarios con acreditaci�n : %1$d';
$txt['paid_count_not_find_subscription'] = 'Suscripci�n de pago no pudo encontrar la suscripci�n de identificaci�n del usuario: %1$s, suscripci�n de ID: %2$s';
$txt['paid_count_not_find_subscription_log'] = 'Suscripci�n de pago no pudo encontrar una entrada de registro para la suscripci�n de identificaci�n del usuario: %1$s, suscripci�n de ID: %2$s';
$txt['paid_count_not_find_outstanding_payment'] = 'No se encontr� la entrada de pago pendientes de identificaci�n del usuario: %1$s, suscripci�n de ID: %2$s so ignoring';
$txt['paid_admin_not_setup_gateway'] = 'Lo sentimos, el administrador a�n no ha terminado de configurar los abonos. Por favor, vuelva m�s tarde.';
$txt['paid_make_recurring'] = 'Repetir este pago';

$txt['subscriptions'] = 'Suscripciones';
$txt['subscription'] = 'Suscripci�n';
$txt['paid_subs_desc'] = 'A continuaci�n se muestra una lista de todas las suscripciones que est�n disponibles en este foro.';
$txt['paid_subs_none'] = 'No hay ningun pago disponibles!';

$txt['paid_current'] = 'Suscripciones Existentes';
$txt['pending_payments'] = 'Pagos pendientes';
$txt['pending_payments_desc'] = 'Este usuario ha intentado hacer los siguientes pagos de esta suscripci�n, pero la confirmaci�n no ha sido recibida por el foro. Si est� seguro de que el pago ha sido recibido, haga clic en "aceptar" a la acci�n para la suscripci�n. Tambi�n puede hacer clic en "Eliminar" para eliminar toda referencia al pago.';
$txt['pending_payments_value'] = 'Valor';
$txt['pending_payments_accept'] = 'Aceptar';
$txt['pending_payments_remove'] = 'Eliminar';

?>