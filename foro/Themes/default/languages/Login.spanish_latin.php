<?php
// Version: 2.0; Login

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Registration agreement page.
$txt['registration_agreement'] = 'Carta de aceptaci�n';
$txt['agreement_agree'] = 'Acepto los terminos y condiciones';
$txt['agreement_agree_coppa_above'] = 'Acepto los terminos y condiciones y tengo al menos %1$d de edad.';
$txt['agreement_agree_coppa_below'] = 'Acepto los terminos y condiciones y tengo menos de %1$d de edad.';

// Registration form.
$txt['registration_form'] = 'Formulario de registro';
$txt['need_username'] = 'Debes escribir un nombre de usuario.';
$txt['no_password'] = 'No proporcionaste tu contrase�a.';
$txt['incorrect_password'] = 'Contrase�a incorrecta';
$txt['choose_username'] = 'Escoge un nombre de usuario';
$txt['maintain_mode'] = 'Modo de Mantenimiento';
$txt['registration_successful'] = 'Registro realizado con �xito';
$txt['now_a_member'] = '�Felicidades! Ahora eres miembro del foro.';
// Use numeric entities in the below string.
$txt['your_password'] = 'y tu contrase�a es';
$txt['valid_email_needed'] = 'Por favor introduce una direcci�n de correo v�lida, %1$s';
$txt['required_info'] = 'Informaci�n Requerida';
$txt['identification_by_smf'] = 'Usado s�lo para identificaci�n por SMF. Puedes usar caracteres especiales despu�s de haber ingresado, cambiando tu nombre a mostrar en tu perfil.';
$txt['additional_information'] = 'Informaci�n adicional';
$txt['warning'] = '�Advertencia!';
$txt['only_members_can_access'] = 'Solamente usuarios registrados tienen acceso a esta secci�n.';
$txt['login_below'] = 'Por favor ingresa abajo o haz clic';
$txt['register_an_account'] = 'registrar una cuenta';
$txt['login_with_forum'] = 'para registrar una cuenta en %1$s';
// Use numeric entities in the below two strings.
$txt['may_change_in_profile'] = 'Lo puedes cambiar despu�s de ingresar en la p�gina de perfil, o visitando esta p�gina despu�s de que ingreses:';
$txt['your_username_is'] = 'Tu nombre de usuario es: ';

$txt['login_hash_error'] = 'El esquema para la seguridad de las contrase�as ha sido actualizado recientemente.  Por favor, introduce tu contrase�a nuevamente.';

$txt['ban_register_prohibited'] = 'Lo siento, no est�s autorizado para registrarte en este foro';
$txt['under_age_registration_prohibited'] = 'Lo sentimos, pero no se permite el registro en este foro a personas menores de %1$d a�os de edad';

$txt['activate_account'] = 'Activaci�n de la cuenta';
$txt['activate_success'] = 'Tu cuenta ha sido activada satisfactoriamente. Ahora puedes proceder a ingresar al foro.';
$txt['activate_not_completed1'] = 'Tu cuenta de email necesita ser validada antes de que puedas ingresar.';
$txt['activate_not_completed2'] = '�Necesitas otro email de activaci�n?';
$txt['activate_after_registration'] = 'Gracias por registrarte. Recibir�s en breve un email con un enlace para activar tu cuenta.  Si despues de algunos minutos no recibes un email, revisa tu carpeta de correo no deseado (spam).';
$txt['invalid_userid'] = 'El usuario no existe';
$txt['invalid_activation_code'] = 'C�digo de activaci�n inv�lido';
$txt['invalid_activation_username'] = 'Nombre de usuario o email';
$txt['invalid_activation_new'] = 'Si te registraste con una direcci�n de email incorrecta, escribe aqu� una nueva junto con tu contrase�a.';
$txt['invalid_activation_new_email'] = 'Nueva direcci�n de email';
$txt['invalid_activation_password'] = 'Contrase�a anterior';
$txt['invalid_activation_resend'] = 'Reenviar c�digo de activaci�n';
$txt['invalid_activation_known'] = 'Si ya conoces tu c�digo de activaci�n, escr�belo aqu�.';
$txt['invalid_activation_retry'] = 'C�digo de activaci�n';
$txt['invalid_activation_submit'] = 'Activar';

$txt['coppa_no_concent'] = 'El administrador no ha recibido a�n el consentimiento de tus padres/tutor para tu cuenta.';
$txt['coppa_need_more_details'] = '�Necesitas m�s detalles?';

$txt['awaiting_delete_account'] = '�Tu cuenta ha sido marcada para borrarse!<br />Si deseas restaurar tu cuenta, por favor selecciona la casilla "Reactivar mi cuenta", e ingresa nuevamente.';
$txt['undelete_account'] = 'Reactivar mi cuenta';

// Use numeric entities in the below three strings.
$txt['change_password'] = 'Detalles de la nueva contrase�a';
$txt['change_password_login'] = 'Tus datos para ingresar en';
$txt['change_password_new'] = 'han sido cambiados y tu contrase�a ha sido reinicializada. Debajo est�n tus nuevos datos para ingresar.';

$txt['in_maintain_mode'] = 'Este foro est� en modo de mantenimiento.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Por favor, lee/acepta los t�rminos para poder enviar el formulario.';
$txt['register_passwords_differ_js'] = 'No coinciden las contrase�as.';

$txt['approval_after_registration'] = 'Gracias por registrarte. El administrador debe aprobar tu registro antes de que puedas empezar a usar tu cuenta, recibir�s un email a la brevedad posible notific�ndote de la decisi�n del administrador.';

$txt['admin_settings_desc'] = 'Aqu� puedes cambiar varios par�metros relacionados con el registro de nuevos usuarios.';

$txt['setting_enableOpenID'] = 'Permitir a los usuarios registrarse usando OpenID';

$txt['setting_registration_method'] = 'Metodo de registro empleado para miembros nuevos.';
$txt['setting_registration_disabled'] = 'Registro deshabilitado';
$txt['setting_registration_standard'] = 'Registro inmediato';
$txt['setting_registration_activate'] = 'Correo de activaci�n';
$txt['setting_registration_approval'] = 'Aprobaci�n de Miembro';
$txt['setting_notify_new_registration'] = 'Notificar a los administradores cuando un nuevo miembro se suscriba';
$txt['setting_send_welcomeEmail'] = 'Enviar email de bienvenida a los nuevos miembros';

$txt['setting_coppaAge'] = 'Limite de edad al cual aplicar restriciones de registro';
$txt['setting_coppaAge_desc'] = 'Poner en 0 para deshabilitar)';
$txt['setting_coppaType'] = 'Acci�n a seguir cuando se registre un miembro por debajo de la edad m�nima';
$txt['setting_coppaType_reject'] = 'Rechazar registro';
$txt['setting_coppaType_approval'] = 'Requer�r aprobaci�n de los padres/tutores';
$txt['setting_coppaPost'] = 'Direcci�n postal a donde se enviar�n los formularios de aprobaci�n';
$txt['setting_coppaPost_desc'] = 'Solo se aplica si la restricci�n de edad se cumple';
$txt['setting_coppaFax'] = 'Numero de fax a donde se enviar�n los formularios de aprobaci�n';
$txt['setting_coppaPhone'] = 'N�mero de contacto de los padres para consultar sobre la restricci�n de edad';

$txt['admin_register'] = 'Registro de un nuevo usuario';
$txt['admin_register_desc'] = 'Desde aqu� puedes registrar en el foro nuevos usuarios y, de as� desearlo, enviarles sus detalles por email.';
$txt['admin_register_username'] = 'Nuevo Nombre de usuario';
$txt['admin_register_email'] = 'Nueva Direcci�n de email';
$txt['admin_register_password'] = 'Contrase�a';
$txt['admin_register_username_desc'] = 'Nombre de usuario para el nuevo usuario';
$txt['admin_register_email_desc'] = 'Direcci�n email del usuario<br />(requerida si seleccionaste la opci�n de enviarles por email sus detalles)';
$txt['admin_register_password_desc'] = 'Nueva contrase�a para el usuario';
$txt['admin_register_email_detail'] = 'Enviar por email la nueva contrase�a al usuario';
$txt['admin_register_email_detail_desc'] = 'Es necesaria la direcci�n email, a�n si no est� seleccionado';
$txt['admin_register_email_activate'] = 'Pedirle al usuario que active la cuenta';
$txt['admin_register_group'] = 'Grupo primario';
$txt['admin_register_group_desc'] = 'Grupo de usuario primario al que el nuevo usuario pertenecer�';
$txt['admin_register_group_none'] = '(sin grupo primario)';
$txt['admin_register_done'] = '�El usuario %1$s se ha registrado con �xito!';

$txt['coppa_title'] = 'Foro con restricci�n de edad';
$txt['coppa_after_registration'] = 'Gracias por registrarte con ' . $context['forum_name_html_safe'] . '.<br /><br />Debido a que est�s por debajo de la edad de {MINIMUM_AGE}, hay un requerimiento legal
	para obtener el permiso de tus padres/tutor antes de que puedas empezar a usar tu cuenta. Para continuar con la activaci�n de la cuenta por favor imprime el formulario que a continuaci�n se muestra:';
$txt['coppa_form_link_popup'] = 'Cargar la forma en una ventana nueva';
$txt['coppa_form_link_download'] = 'Descargar forma';
$txt['coppa_send_to_one_option'] = 'Entonces solic�tale a tus padres/tutor que env�en la forma propiamente llenada por:';
$txt['coppa_send_to_two_options'] = 'Entonces solic�tale a tus padres/tutor que env�en la forma propiamente llenada por cualquiera de estas dos opciones:';
$txt['coppa_send_by_post'] = 'Correo, a la siguiente direcci�n:';
$txt['coppa_send_by_fax'] = 'Fax, al siguiente n�mero:';
$txt['coppa_send_by_phone'] = 'Alternativamente, haz que le hablen al administrador al n�mero {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Forma de permiso para registrarse en ' . $context['forum_name_html_safe'];
$txt['coppa_form_address'] = 'Direcci�n';
$txt['coppa_form_date'] = 'Fecha';
$txt['coppa_form_body'] = 'Yo {PARENT_NAME},<br /><br />doy el permiso para que {CHILD_NAME} (child name) se convierta en un usuario registrado del foro: ' . $context['forum_name_html_safe'] . ', con el nombre de usuario: {USER_NAME}.<br /><br />Entiendo que cierta informaci�n personal proporcionada por {USER_NAME} puede que sea mostrada a otros usuarios del foro.<br /><br />Firmado por:<br />{PARENT_NAME} (Padre/Tutor).';

$txt['visual_verification_sound_again'] = 'Volver a escuchar';
$txt['visual_verification_sound_close'] = 'Cerrar ventana';
$txt['visual_verification_sound_direct'] = '�Tienes problemas para o�rlo?  Intenta un enlace directo.';

// Use numeric entities in the below.
$txt['registration_username_available'] = 'Nombre de usuario disponible';
$txt['registration_username_unavailable'] = 'Nombre de usuario no disponible';
$txt['registration_username_check'] = 'Comprobar si el nombre de usuario est� disponible';
$txt['registration_password_short'] = 'La contrase�a es muy corta';
$txt['registration_password_reserved'] = 'La contrase�a contiene tu nombre de usuario/email';
$txt['registration_password_numbercase'] = 'La contrase�a debe contener min�sculas y may�sculas, y n�meros';
$txt['registration_password_no_match'] = 'Las contrase�as no concuerdan';
$txt['registration_password_valid'] = 'La contrase�a es v�lida';

$txt['registration_errors_occurred'] = 'Los siguientes errores fueron detectados en tu registro. Por favor corr�gelos y luego contin�a:';

$txt['authenticate_label'] = 'M�todo para autentificarse';
$txt['authenticate_password'] = 'Contrase�a';
$txt['authenticate_openid'] = '';
$txt['authenticate_openid_url'] = 'URL de autenticaci�n para OpenID';

?>