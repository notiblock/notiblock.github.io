<?php
// Version: 2.0; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'No est�s autorizado para entrar a esta secci�n';
$txt['wireless_error_notyet'] = 'Disculpa, pero esta secci�n no esta disponible para usuarios \'wireless\' en este momento.';

$txt['mods_only'] = 'S�lo Moderadores pueden usar la funci�n de eliminado directo, por favor elimina este mensaje a trav�s de la funci�n modificar.';
$txt['no_name'] = 'No llenaste el campo nombre. Es requerido.';
$txt['no_email'] = 'No llenaste el campo email. Es requerido';
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
$txt['username_reserved'] = 'El nombre de usuario que trataste de registrar contiene el nombre reservado \'%1$s\'. Por favor intenta otro nombre de usuario.';
$txt['numbers_one_to_nine'] = 'Este campo s�lo acepta n�meros del 0-9';
$txt['not_a_user'] = 'El usuario cuyo perfil est�s tratando de ver no existe.';
$txt['not_a_topic'] = 'Este tema no existe en el foro.';
$txt['not_approved_topic'] = 'Este tema todav�a no a estado aprobado.';
$txt['email_in_use'] = 'Esa direcci�n de correo (%1$s) est� siendo usada por un miembro registrado. Si crees que es un error, dir�gete a la p�gina de ingreso y escribe tu direcci�n en el recordatorio de contrase�a.';

$txt['didnt_select_vote'] = 'No seleccionaste una opci�n del voto.';
$txt['poll_error'] = 'Esa encuesta no existe, o ha sido bloqueada, o intentaste votar m�s de una vez.';
$txt['members_only'] = 'Este servicio es solo para usuarios...';
$txt['locked_by_admin'] = 'Fue bloqueada por un administrador.  No la puedes desbloquear.';
$txt['not_enough_posts_karma'] = 'Lo sentimos, no tienes suficientes mensajes como para modificar el karma. Necesitas al menos %1$d.';
$txt['cant_change_own_karma'] = 'Lo siento, no est�s autorizado para modificar tu propio karma.';
$txt['karma_wait_time'] = 'Lo sentimos, no puedes modificar el karma nuevamente hasta dentro de %1$s %2$s.';
$txt['feature_disabled'] = 'Lo siento, esta funci�n ha sido desactivada.';
$txt['cant_access_upload_path'] = '�No se puede accesar al directorio de los archivos adjuntos!';
$txt['file_too_big'] = 'Tu archivo es demasiado grande. El tama�o m�ximo permitido para archivos adjuntos es %1$d KB.';
$txt['attach_timeout'] = 'Hubo un error al intentar guardar tu archivo adjunto, por favor intenta nuevamente.';
$txt['filename_exists'] = 'Lo sentimos, ya existe un adjunto con el mismo nombre archivo. Cambia su nombre e int�ntalo nuevamente.';
$txt['bad_attachment'] = 'Su archivo adjunto ha fallado los controles de seguridad y no se puede cargar. Por favor, consulte con el administrador del foro.';
$txt['ran_out_of_space'] = 'El directorio de uploads est� lleno. Por favor intenta un archivo m�s peque�o o contacta al <a href="mailto:%s">administrador</a>.';
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
$txt['cant_find_user_email'] = 'No se encontr� la direcci�n de correo del usuario.';
$txt['cant_insert_topic'] = 'No se pudo insertar el tema';
$txt['already_a_mod'] = 'Has seleccionado el nombre de usuario de un moderador. Por favor selecciona otro nombre de usuario';
$txt['session_timeout'] = 'Falla al enviar el formulario. La sesi�n ha expirado.';
$txt['session_verify_fail'] = 'Fall� la verificaci�n de sesi�n. Por favor intenta salir y volver a ingresar, e int�ntalo nuevamente.';
$txt['verify_url_fail'] = 'Sitio de referencia inv�lido.';
$txt['guest_vote_disabled'] = 'Los invitados no pueden votar en esta encuesta.';

$txt['cannot_access_mod_center'] = 'No tienes permiso para ingresar al centro de moderaci�n.';
$txt['cannot_admin_forum'] = 'No est�s autorizado para administrar este foro.';
$txt['cannot_announce_topic'] = 'No est�s autorizado para publicar anuncios en este foro.';
$txt['cannot_approve_posts'] = 'No tienes permiso para aprobar art�culos.';
$txt['cannot_post_unapproved_attachments'] = 'No tienes permiso para publicar adjuntos sin aprobaci�n.';
$txt['cannot_post_unapproved_topics'] = 'No tienes permiso para publicar temas sin aprobaci�n.';
$txt['cannot_post_unapproved_replies_own'] = 'No tienes permiso para publicar respuestas en tus temas sin aprobaci�n.';
$txt['cannot_post_unapproved_replies_any'] = 'No tienes permiso para publicar respuestas a temas de otros usuarios sin autorizaci�n.';
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
$txt['cannot_manage_smileys'] = 'No est�s autorizado para administrar smileys e iconos de mensaje.';
$txt['cannot_mark_any_notify'] = 'No tienes los permisos necesarios para obtener notificaciones de este tema.';
$txt['cannot_mark_notify'] = 'Lo sentimos, pero no puedes solicitar notificaciones desde este foro.';
$txt['cannot_merge_any'] = 'No est�s autorizado para combinar temas en este foro.';
$txt['cannot_moderate_forum'] = 'No est�s autorizado para moderar este foro.';
$txt['cannot_moderate_board'] = 'No te est� permitido moderar este foro.';
$txt['cannot_modify_any'] = 'No est�s autorizado para modificar mensajes.';
$txt['cannot_modify_own'] = 'Lo sentimos, pero no est�s autorizado para editar tus propios mensajes.';
$txt['cannot_modify_replies'] = 'A pesar que este mensaje es en respuesta a tu tema, no lo puedes editar.';
$txt['cannot_move_own'] = 'No est�s autorizado para mover tus propios temas en este foro.';
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
$txt['cannot_issue_warning'] = 'Lo sentimos, no tienes permiso para enviar alertas a usuarios.';
$txt['cannot_send_topic'] = 'Lo sentimos, pero el administrador ha desactivado la opci�n de enviar temas en este foro.';
$txt['cannot_split_any'] = 'No est� permitido dividir temas en este foro.';
$txt['cannot_view_attachments'] = 'Parece que no est�s autorizado para descargar o ver archivos adjuntos en este foro.';
$txt['cannot_view_mlist'] = 'No puedes ver la lista de usuarios, ya que no tienes permisos para ello.';
$txt['cannot_view_stats'] = 'No est�s autorizado para ver las estad�sticas del foro.';
$txt['cannot_who_view'] = 'Lo sentimos - no tienes los permisos necesarios para ver la lista de usuarios en l�nea.';

$txt['no_theme'] = 'Ese tema no existe.';
$txt['theme_dir_wrong'] = 'El directorio predeterminado de los temas es incorrecto, favor de corregirlo haciendo <i>clic</i> en este texto.';
$txt['registration_disabled'] = 'Lo sentimos, el registro de usuarios est� actualmente deshabilitado.';
$txt['registration_no_secret_question'] = 'Lo sentimos, no se ha especificado pregunta secreta para este usuario.';
$txt['poll_range_error'] = 'Lo sentimos, la encuesta debe durar m�s de 0 d�as.';
$txt['delFirstPost'] = 'No est�s autorizado para borrar el primer post de este tema.<p>Si deseas borrar este tema, haz clic en \'Eliminar Tema\', o p�dele a un Administrador/Moderador para que lo borre por t�.</p>';
$txt['parent_error'] = '�No se pudo crear el foro!';
$txt['login_cookie_error'] = 'No pudiste ingresar.  Por favor revisa la configuraci�n de tus cookies.';
$txt['incorrect_answer'] = 'Lo sentimos, pero no contestaste correctamente tu pregunta secreta.  Haz clic en el bot�n Atr�s para intentar nuevamente, o haz clic en el bot�n Atr�s 2 veces para usar el m�todo predeterminado para obtener tu contrase�a.';
$txt['no_mods'] = '�No se encontraron moderadores!';
$txt['parent_not_found'] = 'Estructura corrupta del foro: no se pudo encontrar el foro padre';
$txt['modify_post_time_passed'] = 'No puedes modificar este mensaje ya que el tiempo l�mite permitido para editar mensajes ha transcurrido.';

$txt['calendar_off'] = 'El calendario est� deshabilitado, no puedes accesarlo en este momento.';
$txt['invalid_month'] = 'Mes inv�lido.';
$txt['invalid_year'] = 'A�o inv�lido.';
$txt['invalid_day'] = 'D�a inv�lido.';
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

$txt['invalid_email'] = 'Email inv�lido / rango del email.<br />Ejemplo de una direcci�n de email v�lida: webmaster@HablaJapones.org.<br />Ejemplo de un rango de direcci�n email v�lido: *@*.HablaJapones.org';
$txt['invalid_expiration_date'] = 'La fecha de expiraci�n no es v�lida';
$txt['invalid_hostname'] = 'Nombre del dominio inv�lido/ rango del dominio.<br />Ejemplo de un nombre de dominio v�lido: proxy4.HablaJapones.org<br />Ejemplo de un rango de dominio v�lido: *.HablaJapones.org';
$txt['invalid_ip'] = 'IP inv�lido / rango de IPs.<br />Ejemplo de una direcci�n IP v�lida: 127.0.0.1<br />Ejemplo de un rango v�lido de direcciones IP: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'Direcci�n IP/rango inv�lido.<br />Ejemplo de una IP v�lida: 127.0.0.1<br />Ejemplo de un rango v�lido: 127.0.0.*';
$txt['invalid_username'] = 'Nombre del usuario no encontrado';
$txt['no_ban_admin'] = '�No puedes prohibirle el acceso a un administrador - Debes degradarlo primero!';
$txt['no_bantype_selected'] = 'No se seleccion� el tipo prohibici�n de acceso';
$txt['ban_not_found'] = 'No se encontr� esta restricci�n de acceso';
$txt['ban_unknown_restriction_type'] = 'Tipo de restricci�n desconocida';
$txt['ban_name_empty'] = 'El nombre del usuario para restringir acceso est� en blanco.';
$txt['ban_name_exists'] = 'El nombre de esta restricci�n (%1$s) ya existe. Seleccione un nombre diferente.';
$txt['ban_trigger_already_exists'] = 'Esta prohibici�n (%1$s) ya existe en %2$s.';

$txt['recycle_no_valid_board'] = 'No se ha seleccionado un foro v�lido para reciclar temas';

$txt['login_threshold_fail'] = 'Lo sentimos, por el momento no cuentas con intentos para ingresar.  Por favor, int�ntalo nuevamente m�s tarde.';
$txt['login_threshold_brute_fail'] = 'Lo sentimos, has alcanzado el m�ximo de intentos de ingreso. Espera 30 segundos e int�ntalo de nuevo.';

$txt['who_off'] = 'No puedes accesar la lista de usuarios en l�nea por el momento, ya que est� deshabilitada.';

$txt['merge_create_topic_failed'] = 'Error al intentar crear un nuevo tema.';
$txt['merge_need_more_topics'] = 'El combinar temas necesita de al menos 2 temas para combinar.';

$txt['postWaitTime_broken'] = 'El �ltimo mensaje desde tu direcci�n IP fue hace %1$d segundos. Int�ntalo nuevamente m�s tarde.';
$txt['registerWaitTime_broken'] = 'Te has registrado hace apenas %1$d segundos!';
$txt['loginWaitTime_broken'] = 'Tendr�s que esperar aproximadamente %1$d segundos para ingresar nuevamente.';
$txt['pmWaitTime_broken'] = 'El �ltimo mensaje personal desde tu direcci�n IP fue hace %1$d segundos. Int�ntalo nuevamente m�s tarde.';
$txt['reporttmWaitTime_broken'] = 'El �ltimo reporte desde esta direcci�n IP fue hace menos de %1$d segundos. Int�ntalo nuevamente m�s tarde.';
$txt['sendtopcWaitTime_broken'] = 'El �ltimo tema enviado desde esta direcci�n IP fue hace menos de %1$d. Int�ntalo nuevamente m�s tarde.';
$txt['sendmailWaitTime_broken'] = 'El �ltimo correo electr�nico enviado desde esta direcci�n IP fue hace menos de %1$d segundos. Int�ntalo nuevamente m�s tarde.';
$txt['searchWaitTime_broken'] = 'Tu �ltima busqueda fue hace menos de %1$d segundos. Intenta nuevamente m�s tarde.';

$txt['email_missing_data'] = 'Debes ingresar alg�n texto en el asunto y el cuerpo del mensaje. ';

$txt['topic_gone'] = 'El tema o foro que est�s buscando parece que no existe, o fuera de tus l�mites.';
$txt['theme_edit_missing'] = '�El archivo que intentas editar... no puede encontrarse!';

$txt['attachments_no_write'] = 'No puede escribirse en el directorio para subir archivos adjuntos.  Tu archivo adjunto o avatar no se pudo guardar.';
$txt['attachments_limit_per_post'] = 'No puedes sub�r m�s de %1$d archivos adjuntos por mensaje';

$txt['no_dump_database'] = 'iexcl;Solamente los administradores pueden hacer respaldos de la base de datos!';
$txt['pm_not_yours'] = 'El mensaje personal que est�s tratando de citar no es tuyo o no existe, por favor regresa e intenta nuevamente.';
$txt['mangled_post'] = 'Datos de la forma destrozados - por favor regresa e intenta nuevamente.';
$txt['quoted_post_deleted'] = 'El mensaje que est�s intentando citar no existe, fue eliminado, o ya no lo puedes ver.';
$txt['pm_too_many_per_hour'] = 'Has excedido el l�mite de %1$d mensajes personales por hora.';
$txt['labels_too_many'] = 'Lo sentimos, %1$s mensajes tienen el m�ximo de etiquetas permitido.';

$txt['register_only_once'] = 'Lo sentimos, pero no tienes permitido el registrar m�ltiples cuentas al mismo tiempo desde la misma computadora.';
$txt['admin_setting_coppa_require_contact'] = 'Debes ingresar un contacto posta o por fax si la aprobaci�n de padres o tutores es necesaria.';

$txt['error_long_name'] = 'El nombre que utilizaste fue muy largo.';
$txt['error_no_name'] = 'No se proporcion� ning�n nombre.';
$txt['error_bad_name'] = 'El nombre que enviaste no se pudo utilizar, ya que es un nombre reservado.';
$txt['error_no_email'] = 'No se proporcion� ninguna direcci�n de email.';
$txt['error_bad_email'] = 'Se proporcion� una direcci�n de email inv�lida.';
$txt['error_no_event'] = 'No se proporcion� un nombre de evento.';
$txt['error_no_subject'] = 'No se especific� el asunto.';
$txt['error_no_question'] = '�La encuesta debe tener una pregunta!';
$txt['error_no_message'] = 'El cuerpo del mensaje se dej� vac�o.';
$txt['error_long_message'] = 'El mensaje excede la longit�d m�xima permitida (%s caracteres).';
$txt['error_no_comment'] = 'El campo de comentarios qued� vac�o.';
$txt['error_session_timeout'] = 'Tu sesi�n ha expirado. Por favor, reenv�a tu mensaje.';
$txt['error_no_to'] = 'No se especificaron destinatarios.';
$txt['error_bad_to'] = 'No se encontraron uno o mas destinatarios-\'para\'.';
$txt['error_bad_bcc'] = 'No se encontraron uno o mas destinatarios-\'bcc\'.';
$txt['error_form_already_submitted'] = 'Ya has enviado previamente este mensaje!  Probablemente hiciste doble-clic, o intentaste actualizar la p�gina en el navegador.';
$txt['error_poll_few'] = '�Debes tener al menos dos opciones!';
$txt['error_need_qr_verification'] = 'Completa el formulario de verificaci�n para confirmar tu mensaje.';
$txt['error_wrong_verification_code'] = 'Las letras que has escrito no coinciden con las del dibujo.';
$txt['error_wrong_verification_answer'] = 'No has contestado las preguntas de verificaci�n correctamente.';
$txt['error_need_verification_code'] = 'Ingresa el c�digo de verificaci�n para continuar a los resultados.';
$txt['error_bad_file'] = 'Lo sentimos, el archivo especificado no se puede abrir: %1$s';
$txt['error_bad_line'] = 'La linea especificada es inv�lida.';

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
$txt['package_cant_download'] = '�No puedes descargar o instalar nuevos paquetes ya que no se puede escribir en el directorio "Packages"!';
$txt['package_upload_error_nofile'] = 'Usted no seleccion� un paquete para subir al servidor.';
$txt['package_upload_error_failed'] = 'No se pudo subir el paquete al servidor, por favor revise sus permisos en la direcci�n de paquetes.';
$txt['package_upload_error_exists'] = 'El archivo que est�s subiendo ya existe en el servidor. Por favor, b�rralo e int�ntalo nuevamente.';
$txt['package_upload_error_supports'] = 'El administrador de paquetes s�lo permite estos tipos de archivos: %1$s.';
$txt['package_upload_error_broken'] = 'El paquete que has intentado subir fall� por el siguiente error:<br />"%1$s" ';

$txt['package_get_error_not_found'] = 'El paquete que est�s intentando instalar no se encontr�. Puedes subir el paquete manualmente al directorio de paquetes.';
$txt['package_get_error_missing_xml'] = 'El paquete que est�s intentando instalar no contiene el archivo package-info.xml, que debe estar en la ra�z del directorio de paquetes.';
$txt['package_get_error_is_zero'] = 'Aunque el paquete ha sido descargado al servidor, parece que est� vac�o. Revisa si el directorio de paquetes y el subdirectorio "temp" pueden escribirse. Si contin�as teniendo este problema, intenta descomprimir el paquete en tu computadora y luego subiendo los archivos a una subcarpeta del directorio de paquetes. Por ejemplo, si el paquete tiene de nombre shout.tar.gz, deber�as:<br />1) Descargar el paquete a tu computadora y descomprimir los archivos.<br />2) Usando un cliente FTP, crear una subcarpeta en el directorio de paquetes. En este caso, "shout".<br />3) Subir todos los archivos del paquete descomprimido a la carpeta shout reci�n creada.<br />4) Volver al administrador de paquetes, y buscar el paquete en la lista (SMF se encarga autom�ticamente de listarlo).';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF no pudo encontrar informaci�n v�lida en el archivo package-info.xml inluido en el paquete. Puede haber un error en la modificaci�n, o el paquete puede estar da�ado.';

$txt['no_membergroup_selected'] = 'No se seleccion� ning�n grupo de usuarios';
$txt['membergroup_does_not_exist'] = 'El grupo no existe o no es v�lido.';

$txt['at_least_one_admin'] = '�Debe haber por lo menos un administrador en el foro!';

$txt['error_functionality_not_windows'] = 'Disculpe, pero esta funcionalidad no esta disponible para servidores usando \'Windows\' en este momento.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'No se encontr� el archivo adjunto';

$txt['error_no_boards_selected'] = '�No se seleccion� ning�n foro v�lido!';
$txt['error_invalid_search_string'] = '�Olvidaste escribir lo que se buscar�?';
$txt['error_invalid_search_string_blacklist'] = 'Tu b�squeda contiene palabras demasiado triviales. Por favor, intenta con una b�squeda diferente.';
$txt['error_search_string_small_words'] = 'Cada palabra debe tener al menos dos caracteres.';
$txt['error_query_not_specific_enough'] = 'La consulta no es lo suficientemente espec�fica. Por favor, utiliza palabras m�s largas.';
$txt['error_no_messages_in_time_frame'] = 'No se encontraron mensajes en el tiempo que se especific�';
$txt['error_no_labels_selected'] = '�Ninguna etiqueta fue seleccionada!';
$txt['error_no_search_daemon'] = 'Imposible acceder al motor de b�squeda.';

$txt['profile_errors_occurred'] = 'Han ocurrido los siguientes errores al intentar guardar tu perfil';
$txt['profile_error_bad_offset'] = 'La diferencia horaria est� fuera de rango';
$txt['profile_error_no_name'] = 'El campo del nombre se dej� en blanco';
$txt['profile_error_name_taken'] = 'El nombre de usuario/nombre para mostrar seleccionado ya est� siendo utilizado por alguien m�s';
$txt['profile_error_name_too_long'] = 'El nombre seleccionado es demasiado largo. Debe ser menor de 60 caracteres de largo';
$txt['profile_error_no_email'] = 'El campo de email se dej� en blanco';
$txt['profile_error_bad_email'] = 'No has proporcionado una direcci�n de email v�lida';
$txt['profile_error_email_taken'] = 'Otro usuario ya se encuentra registrado con esa direcci�n de email';
$txt['profile_error_no_password'] = 'No especificaste tu contrase�a';
$txt['profile_error_bad_new_password'] = 'Las nuevas contrase�as que especificaste no coinciden';
$txt['profile_error_bad_password'] = 'La contrase�a que proporcionaste es incorrecta';
$txt['profile_error_bad_avatar'] = 'El avatar que has seleccionado es muy grande';
$txt['profile_error_password_short'] = 'Tu contrase�a debe contener un m�nimo de ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' caracteres.';
$txt['profile_error_password_restricted_words'] = 'Tu contrase� no debe contener tu usuario, direcci�n email u otras palabras usuales.';
$txt['profile_error_password_chars'] = 'Tu contrase� debe contener una mezcla de letras may�sculas y min�sculas, as� como n�meros.';
$txt['profile_error_already_requested_group'] = '�Ya tienes un pedido pendiente para este grupo!';
$txt['profile_error_openid_in_use'] = 'Otro usuario ya esta usando esa autentificaci�n de \'OpenID URL\'.';

$txt['mysql_error_space'] = ' - revisa el espacio disponible de la base de datos.';

$txt['icon_not_found'] = 'El icono no se pudo encontrar en el tema predeterminado - por favor revisa que la imagen ha sido subida a su respectivo directorio e intenta nuevamente.';
$txt['icon_after_itself'] = '�El icono no puede colocarse despu�s de s� mismo!';
$txt['icon_name_too_long'] = 'Los nombres de iconos no pueden contener m�s de 16 caracteres';

$txt['name_censored'] = 'Lo sentimos, el nombre que intentaste usar, %1$s, contiene palabras que han sido censuradas.  Por favor intenta con otro nombre.';

$txt['poll_already_exists'] = '�Un tema solamente puede contener una encuesta asociada!';
$txt['poll_not_found'] = '�No hay ninguna encuesta asociada a este tema!';

$txt['error_while_adding_poll'] = 'Ocurrieron los siguientes errores al a�adir esta encuesta';
$txt['error_while_editing_poll'] = 'Ocurrieron los siguientes errores al editar esta encuesta';

$txt['loadavg_search_disabled'] = 'Debido a la sobrecarga del servidor, la funci�n de b�squedas no est� disponible actualmente.';
$txt['loadavg_generic_disabled'] = 'Lo sentimos, debido a la sobrecarga del servidor, esta funci�n no est� disponible actualmente.';
$txt['loadavg_allunread_disabled'] = 'Los recursos del servidor est�n sobrecargados como para encontrar todos los temas que no has le�do.';
$txt['loadavg_unreadreplies_disabled'] = 'El servidor est� sobrecargado. Por favor, int�ntalo de nuevo m�s tarde.';
$txt['loadavg_show_posts_disabled'] = 'Por favor, int�ntalo de nuevo m�s tarde.  Los mensajes de este usuario no est�n disponibles debido a la sobrecarga del servidor.';
$txt['loadavg_unread_disabled'] = 'El servidor est� demasiado ocupado por el momento como para listar los temas que no has le�do.';

$txt['cannot_edit_permissions_inherited'] = 'No puedes editar permisos heredados directamente, debes editar el grupo o la herencia de los miembros del grupo.';

$txt['mc_no_modreport_specified'] = 'Debes especificar qu� reporte quieres ver.';
$txt['mc_no_modreport_found'] = 'El reporte especificado no existe o est� fuera de tus l�mites.';

$txt['st_cannot_retrieve_file'] = 'No es posible extraer el archivo %1$s.';
$txt['admin_file_not_found'] = 'Imposible cargar el siguiente archivo: %1$s.';

$txt['themes_none_selectable'] = 'Al menos un tema debe ser seleccionable.';
$txt['themes_default_selectable'] = 'El tema predeterminado del foro debe ser un tema seleccionable.';
$txt['ignoreboards_disallowed'] = 'La opci�n de ignorar foros no est� disponible.';

$txt['mboards_delete_error'] = '�No has seleccionado una categor�a!';
$txt['mboards_delete_board_error'] = '�No has seleccionado un foro!';

$txt['mboards_parent_own_child_error'] = 'No puedes hacer un foro como subforo del mismo.';
$txt['mboards_board_own_child_error'] = 'No puedes hacer un foro como subforo del mismo.';

$txt['smileys_upload_error_notwritable'] = 'Los siguientes directorios de smileys no se pueden escribir: %1$s';
$txt['smileys_upload_error_types'] = 'Las im�genes de los smileys solo pueden tener la siguiente extensi�n: %1$s.';

$txt['change_email_success'] = 'Tu direcci�n de correo ha cambiado, y un nuevo correo de activaci�n ha sido enviado.';
$txt['resend_email_success'] = 'Un nuevo correo de activaci�n ha sido enviado satisfactoriamente.';

$txt['custom_option_need_name'] = '�La opci�n del perfil debe tener un nombre!';
$txt['custom_option_not_unique'] = '�El nombre del campo no es �nico!';

$txt['warning_no_reason'] = 'Es necesario que entre una raz�n por cual estas alterando el estatus de alerta para un miembro.';
$txt['warning_notify_blank'] = 'Usted seleccion� notificar el usuario pero no lleno la �rea del sujeto, o del mensaje.';

$txt['cannot_connect_doc_site'] = 'No se pudo conectar al manual de Simple Machines. Por favor revise su configuraci�n de su servidor que permita conexiones al Internet y trate otra ves despu�s.';

$txt['movetopic_no_reason'] = 'Es necesario que entre una raz�n por cual estas moviendo esta tema, oh desmarque la opci�n de \'enviar un tema de re-direcci�\'.';

// OpenID error strings
$txt['openid_server_bad_response'] = 'El identificador solicitado no devolvi� la informaci�n correcta.';
$txt['openid_return_no_mode'] = 'El proveedor de identidad no respondi� con el modo Open ID.';
$txt['openid_not_resolved'] = 'El proveedor de identidad no aprob� tu solicitud.';
$txt['openid_no_assoc'] = 'No se pudo encontrar la asociaci�n solicitada con el proveedor de identidad.';
$txt['openid_sig_invalid'] = 'La firma del proveedor de identidad es inv�lida.';
$txt['openid_load_data'] = 'No se pueden cargar los datos de tu solicitud de ingreso. Intenta m�s tarde.';
$txt['openid_not_verified'] = 'La direcci�n OpenID no ha sido verificada todav�a. Ingresa para verificarla.';

$txt['error_custom_field_too_long'] = 'El campo "%1$s" no puede ser mayor de %2$d caracteres.';
$txt['error_custom_field_invalid_email'] = '"%1$s" debe contener una direcci�n de correo v�lida.';
$txt['error_custom_field_not_number'] = 'El campo "%1$s" debe ser num�rico.';
$txt['error_custom_field_inproper_format'] = 'El campo "%1$s" tiene un formato inv�lido.';
$txt['error_custom_field_empty'] = 'El campo "%1$s" no puede quedar en blanco.';

$txt['email_no_template'] = 'La plantilla de correo "%1$s" no se pudo encontrar.';

$txt['search_api_missing'] = '�La b�squeda API no pudo encontrarse! Contacta al administrador para revisar que los archivos correctos han sido subidos.';
$txt['search_api_not_compatible'] = 'La b�squeda API del foro seleccionada es muy antigua - volviendo a la b�squeda com�n. Revisa el archivo %1$s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'No puedes restaurar el primer mensaje de un tema.';
$txt['parent_topic_missing'] = 'El tema padre del mensaje que est�s intentando restaurar ha sido eliminado.';
$txt['restored_disabled'] = 'La restauraci�n de temas ha sido deshabilitada.';
$txt['restore_not_found'] = 'Los siguientes mensajes no pueden ser restaurados, el tema original puede haber sido eliminado:<ul style="margin-top: 0px;">%1$s</ul>Debes moverlos manualmente.';

$txt['error_invalid_dir'] = 'El directorio especificado es inv�lido.';

$txt['error_sqlite_optimizing'] = 'Sqlite esta optimizando la base de datos, el foro no se esta accesible mientras tanto. Por favor trate refrescando la pagina en un momento.';

?>