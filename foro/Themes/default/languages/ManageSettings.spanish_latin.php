<?php
// Version: 2.0; ManageSettings

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modSettings_desc'] = 'Esta p�gina le permite cambiar la configuraci�n de caracter�sticas, mods, y las opciones b�sicas en su foro. Por favor, consulte la <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s"> Configuraci�n del tema </a> para m�s opciones. Haga clic en los iconos de ayuda para obtener m�s informaci�n acerca de un ajuste.';
$txt['security_settings_desc'] = 'Esta p�gina le permite configurar opciones espec�ficas relacionadas con la seguridad y la moderaci�n de su foro, incluidas las opciones anti-spam.';
$txt['modification_settings_desc'] = 'Esta p�gina contiene los valores agregados por cualquier modificaci�n de su foro';

$txt['modification_no_misc_settings'] = 'No hay modificaciones instaladas';

$txt['pollMode'] = 'Modo de encuesta';
$txt['disable_polls'] = 'Desactivar encuentas';
$txt['enable_polls'] = 'Activar encuentas';
$txt['polls_as_topics'] = 'Mostrar las encuestas existentes como temas';
$txt['allow_guestAccess'] = 'Permitir a invitados navegar por el foro';
$txt['userLanguage'] = 'Habilitar seleccionar idioma por el usuario';
$txt['allow_editDisplayName'] = 'Permitir a los usuarios editar sus nombre';
$txt['allow_hideOnline'] = 'Permitir a los usuarios ocultar su Estado';
$txt['guest_hideContacts'] = 'No revele informaci�n a invitados';
$txt['titlesEnable'] = 'Habilitar t�tulos personalizados';
$txt['enable_buddylist'] = 'Habilitar listas amigo(a)s/ignorado(a)s ';
$txt['default_personal_text'] = 'Texto personal predeterminado<div class="smalltext">Texto personal asignado a los usuarios reci�n registrados.</div>';
$txt['number_format'] = 'Formato de n�mero predeterminado';
$txt['time_format'] = 'Formato de hora predeterminado';
$txt['setting_time_offset'] = 'Tiempo total de desplazamiento<div class="smalltext">(A�adido a la opci�n de miembro espec�fico.)</div>';
$txt['setting_default_timezone'] = 'Zona horaria del servidor';
$txt['failed_login_threshold'] = 'Error de entrada';
$txt['lastActive'] = 'Usuario en l�nea en tiempo l�mite';
$txt['trackStats'] = 'Pista de estad�sticas diarias';
$txt['hitStats'] = 'Pista de p�ginas vistas al d�a <div class="smalltext">(debe tener activada las estad�sticas)</div>';
$txt['enableCompressedOutput'] = 'Active la salida comprimida';
$txt['disableTemplateEval'] = 'Deshabilitar la evaluaci�n de las plantillas';
$txt['databaseSession_enable'] = 'Usar base de datos para almacenar sesiones';
$txt['databaseSession_loose'] = 'Los navegadores dejan volver a las p�ginas cach�';
$txt['databaseSession_lifetime'] = 'Segundos antes de que una sesi�n sin usar expire';
$txt['enableErrorLogging'] = 'Habilitar el registro de error';
$txt['enableErrorQueryLogging'] = 'Incluye consulta de registro de errores';
$txt['pruningOptions'] = 'Habilitar la poda de entradas de registro';
$txt['pruneErrorLog'] = 'Eliminar registro de errores de m�s de<div class="smalltext">(0 para desactivar)</div>';
$txt['pruneModLog'] = 'Eliminar registro de modereci�n de m�s de<div class="smalltext">(0 para desactivar)</div>';
$txt['pruneBanLog'] = 'Eliminar registro de Ban de m�s de<div class="smalltext">(0 para desactivar)</div>';
$txt['pruneReportLog'] = 'Eliminar registro de reporte de m�s de<div class="smalltext">(0 para desactivar)</div>';
$txt['pruneScheduledTaskLog'] = 'Eliminar registro de tareas programadas de m�s de<div class="smalltext">(0 para desactivar)</div>';
$txt['pruneSpiderHitLog'] = 'Eliminar registro de busqueda de m�s de<div class="smalltext">(0 para desactivar)</div>';
$txt['cookieTime'] = 'Duraci�n predeterminada de "cookies" de ingreso (en minutos)';
$txt['localCookies'] = 'Activar el almacenamiento local de cookies<div class="smalltext">(SSI no funcionar� bien con esto.)</div>';
$txt['globalCookies'] = 'Usar cookies independientes para subdominio<div class="smalltext">(desactivar las cookies primarias local!)</div>';
$txt['secureCookies'] = 'Forzar cookies para estar seguros<div class="smalltext">(Esto s�lo se aplica si usted est� usando HTTPS - no use otra cosa!)</div>';
$txt['securityDisable'] = 'Deshabilitar seguridad de la administraci�n';
$txt['send_validation_onChange'] = 'Exigir la reactivaci�n tras cambio de email';
$txt['approveAccountDeletion'] = 'Requerir aprobaci�n de admin cuando un miembro elimina su cuenta';
$txt['autoOptMaxOnline'] = 'Cantidad de usuarios conectados al optimizar<div class="smalltext">(0 si no quiere max.)</div>';
$txt['autoFixDatabase'] = 'Corregir autom�ticamente las tablas rotas';
$txt['allow_disableAnnounce'] = 'Permitir a los usuarios deshabilitar los anuncios';
$txt['disallow_sendBody'] = 'No permitir Notificaciones';
$txt['queryless_urls'] = 'Usar URLs amigables para los motores de b�squeda<div class="smalltext">�Apache/Lighttpd only!</div>';
$txt['max_image_width'] = 'Anchura m�x de fotos publicadas <div class="smalltext">(0 = desactivadas)</div>';
$txt['max_image_height'] = 'Altura m�x de fotos publicadas <div class="smalltext">(0 = desactivadas)</div>';
$txt['enableReportPM'] = 'Permitir reporte de mensajes personales';
$txt['max_pm_recipients'] = 'N�mero m�ximo de destinatarios en MP<div class="smalltext">(0 para no limitar, los administradores est�n exentos)</div>';
$txt['pm_posts_verification'] = 'Numero el que usuarios deben poner el c�digo<div class="smalltext">(0 para no limitar, los administradores est�n exentos)</div>';
$txt['pm_posts_per_hour'] = 'N�mero de MP que un usuario puede enviar<div class="smalltext">(En 1 hora) (0 para no limitar, los moderadores est�n exentos)</div>';
$txt['compactTopicPagesEnable'] = 'Limitar numero mostrado de Links de p�ginas';
$txt['contiguous_page_display'] = 'p�ginas contiguas para mostrar';
$txt['to_display'] = 'para mostrar';
$txt['todayMod'] = 'Habilitar visualizaci�n de fecha';
$txt['today_disabled'] = 'Inhabilitado';
$txt['today_only'] = 'S�lo hoy';
$txt['yesterday_today'] = 'Ayer y Hoy';
$txt['topbottomEnable'] = 'Habilitar botones Ir arriba/Ir Abajo';
$txt['onlineEnable'] = 'Mostrar online/offline en posteos y MP';
$txt['enableVBStyleLogin'] = 'Mostrar una entrada r�pida en cada p�gina';
$txt['defaultMaxMembers'] = 'Miembros por p�gina en la lista de miembros';
$txt['timeLoadPageEnable'] = 'Se visualiza el tiempo para crear las p�ginas';
$txt['disableHostnameLookup'] = 'Desactivar b�squedas de nombre de host';
$txt['who_enabled'] = 'Habilitar la lista de qui�n est� en l�nea';
$txt['make_email_viewable'] = 'Permitir ver direcciones de correo electr�nico';
$txt['meta_keywords'] = 'Meta palabras clave asociadas con el foro <div class="smalltext">Para los motores de b�squeda. Deja en blanco para usar las predeterminadas.</div>';

$txt['karmaMode'] = 'Modo Karma';
$txt['karma_options'] = 'Deshabilitar karma|Habilitar karma total|Habilitar karma positivo/negativo';
$txt['karmaMinPosts'] = 'Establecer posteos m�nimos necesarios para modificar el karma';
$txt['karmaWaitTime'] = 'Establezca el tiempo de espera en horas';
$txt['karmaTimeRestrictAdmins'] = 'Restringir administradores de tiempo';
$txt['karmaLabel'] = 'Etiqueta Karma';
$txt['karmaApplaudLabel'] = 'Etiqueta aplaudir Karma';
$txt['karmaSmiteLabel'] = 'Etiqueta herir Karma';

$txt['caching_information'] = '<div align="center"><b><u>�Importante! Lea primero antes de habilitar estas caracter�sticas.</b></u></div><br />
	SMF admite el almacenamiento en cach� mediante el uso de aceleradores. Los aceleradores actualmente soportados incluyen:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (No Zend Optimizer)</li>
	</ul>
	El almacenamiento en cach� funciona mejor si tiene PHP compilado con uno de los optimizadores de arriba, o memcache disponibles.
	Si usted no tiene instalado ning�n optimizador har� cach� de archivos basado en SMF.<br /><br />
	SMF realiza el almacenamiento en cach� en una variedad de niveles. Cuanto mayor sea el nivel habilitado de almacenamiento en cach�, m�s 
	tiempo tardara el CPU en recuperar informaci�n. Si la cach� est� disponible en su m�quina, es recomendable que trates de almacenamiento en cach� en el nivel 1 en primer lugar.
	<br /><br />
	Tenga en cuenta que si utiliza memcached tiene que proporcionar los detalles del servidor en el entorno de abajo. Esto debe contabilizarse con una lista separada por comas.
	Como muestra el ejemplo a continuaci�n:<br />
	"server1,server2,server3:port,server4"<br /><br />
	Tenga en cuenta que si no se especifica el puerto SMF usar� el puerto 11211. SMF intentar� realizar en bruto/carga aleatoria el equilibrio entre los servidores.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<strong class="alert">SMF no ha sido capaz de detectar un acelerador compatible en su servidor.</strong>';
$txt['detected_APC'] = '<b style="color: green">SMF ha detectado QUE T� Servidor Instalado Tiene APC.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF ha detectado que el servidor tiene instalado eAccelerator.';
$txt['detected_MMCache'] = '<b style="color: green">SMF ha detectado que el servidor tiene instalado MMCache.';
$txt['detected_Zend'] = '<b style="color: green">SMF ha detectado que el servidor tiene instalado Zend.';
$txt['detected_Memcached'] = '<strong style="color: green">SMF ha detectado que el servidor tiene instalado Memcached.</strong>';
$txt['detected_XCache'] = '<strong style="color: green">SMF ha detectado que el servidor tiene instalado XCache.</strong>';

$txt['cache_enable'] = 'Nivel de almacenamiento en cach�';
$txt['cache_off'] = 'No cach�';
$txt['cache_level1'] = 'Nivel 1 cach�';
$txt['cache_level2'] = 'Nivel 2 cach� (No Recomendado)';
$txt['cache_level3'] = 'Nivel 3 cach� (No Recomendado)';
$txt['cache_memcached'] = 'Config Memcache';

$txt['loadavg_warning'] = '<span class="error">Nota: la siguiente configuraci�n se pueden editar con cuidado. Cualquiera ajuste demasiado bajo puede hacer que su foro quede <strong>inservible</strong>!</span> La carga media actual del servidor es <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Habilitar equilibrio de carga con promedios de carga';
$txt['loadavg_auto_opt'] = 'Umbral para desactivar optimizaci�n de BD';
$txt['loadavg_search'] = 'Umbral para desactivar la b�squeda';
$txt['loadavg_allunread'] = 'Umbral para desactivar todos los temas no le�dos';
$txt['loadavg_unreadreplies'] = 'Umbral para desactivar las respuestas no le�dos';
$txt['loadavg_show_posts'] = 'Umbral para desactivar mostrando mensajes';
$txt['loadavg_forum'] = 'Umbral para desactivar el foro <strong>completamente</strong>';
$txt['loadavg_disabled_windows'] = '<span class="error">El soporte para balanceo de carga no est� disponible en Windows.</span> ';
$txt['loadavg_disabled_conf'] = '<span class="error">El soporte para balanceo de carga est� desactivado por la configuraci�n de tu servidor.</span> ';

$txt['setting_password_strength'] = 'Fuerza requerida para contrase�as de usuario';
$txt['setting_password_strength_low'] = 'Baja - 4 caracteres m�nimo';
$txt['setting_password_strength_medium'] = 'Media - no puede contener nombre de usuario';
$txt['setting_password_strength_high'] = 'Alto - mezcla de diferentes caracteres';

$txt['antispam_Settings'] = 'Verificaci�n de Anti-Spam';
$txt['antispam_Settings_desc'] = 'Esta secci�n le permite a los controles de verificaci�n de configuraci�n asegurar que el usuario es un ser humano (y no un robot), y modificar c�mo y d�nde aplicarlas.';
$txt['setting_reg_verification'] = 'Requerir comprobaci�n en la p�gina de registro';
$txt['posts_require_captcha'] = 'Los usuarios deben verificar para posteart';
$txt['posts_require_captcha_desc'] = '(0 para no limitar, los moderadores est�n exentos)';
$txt['search_enable_captcha'] = 'Requerir comprobaci�n en todas las b�squedas';
$txt['setting_guests_require_captcha'] = 'Los invitados deben verificar para incluir un anuncio';
$txt['setting_guests_require_captcha_desc'] = '(Establece autom�ticamente si se especifica una cifra m�nima)';
$txt['guests_report_require_captcha'] = 'Los Invitados deben pasar una verificaci�n cuando reporten un mensaje';

$txt['configure_verification_means'] = 'Configurar los m�todos de verificaci�n';
$txt['setting_qa_verification_number'] = 'N�mero de preguntas de verificaci�n';
$txt['setting_qa_verification_number_desc'] = '(0 para desactivar, las preguntas se indican a continuaci�n)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">A continuaci�n puede determinar qu� caracter�sticas de anti-spam desea tener activado para comprobar que el usuario es un ser humano. Tenga en cuenta que el usuario tendr� que pasar <em>todas</em> las verificaciones.</span>';
$txt['setting_visual_verification_type'] = 'Verificaci�n visual de la imagen para mostrar';
$txt['setting_visual_verification_type_desc'] = 'Cuanto m�s compleja sea la imagen m�s dif�cil es para los robots';
$txt['setting_image_verification_off'] = 'Ninguna';
$txt['setting_image_verification_vsimple'] = 'Muy simple - Texto sin formato en la imagen';
$txt['setting_image_verification_simple'] = 'Simple - Acumulaci�n letras de color, sin ruidos';
$txt['setting_image_verification_medium'] = 'Medio - letras superpuestas de color, con el ruido/l�neas';
$txt['setting_image_verification_high'] = 'Alto - cartas en �ngulo, el ruido considerable/l�neas';
$txt['setting_image_verification_extreme'] = 'Extrema - cartas en �ngulo, el ruido, las l�neas y bloques';
$txt['setting_image_verification_sample'] = 'Muestra';
$txt['setting_image_verification_nogd'] = '<strong>Nota:</strong> Ya que este servidor no tiene la librer�a GD instalada la configuraci�n de diferente complejidad no tendr� ning�n efecto.';
$txt['setup_verification_questions'] = 'Preguntas de verificaci�n';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Si desea que los usuarios respondan a las preguntas de verificaci�n para poner fin a robots de spam debe configurar un n�mero de preguntas en el siguiente cuadro. Usted debe escoger preguntas relativamente sencillas. Usted puede usar la BBC en las cuestiones de formato, para eliminar una pregunta s�lo tiene que borrar el contenido de esa l�nea.</span>';
$txt['setup_verification_question'] = 'Pregunta';
$txt['setup_verification_answer'] = 'Respuesta';
$txt['setup_verification_add_more'] = 'A�adir otra pregunta';

$txt['moderation_settings'] = 'Configuraci�n Moderaci�n';
$txt['setting_warning_enable'] = 'Permitir Sistema de Alerta al usuario';
$txt['setting_warning_watch'] = 'Nivel de advertencia para el usuario<div class="smalltext">(0 para desactivarlo).</div>';
$txt['setting_warning_moderate'] = 'Nivel de advertencia para la moderacion de post<div class="smalltext">(0 para desactivarlo).</div>';
$txt['setting_warning_mute'] = 'Nivel de advertencia para el usuario de muting<div class="smalltext">(0 para desactivarlo).</div>';
$txt['setting_user_limit'] = 'Puntos M�ximas de alerta a usuario por d�a<div class="smalltext"> (0 sin limites).</div>';
$txt['setting_warning_decrement'] = 'Advertencia para disminuir los puntos de usuarios <div class="smalltext">(Cada 1 D�a) (0 para desactivarlo).</div>';
$txt['setting_warning_show'] = 'Los usuarios que pueden ver el estado de alerta<div class="smalltext">Determina qui�n puede ver el nivel de alerta de los usuarios del foro.</div>';
$txt['setting_warning_show_mods'] = 'S�lo los moderadores';
$txt['setting_warning_show_user'] = 'Los moderadores y usuarios advertidos';
$txt['setting_warning_show_all'] = 'Todos los Usuarios';

$txt['signature_settings'] = 'Ajustes Firma';
$txt['signature_settings_desc'] = 'Utilice los par�metros de esta p�gina para ajustar firma.';
$txt['signature_settings_warning'] = 'Tenga en cuenta que los ajustes no se aplican a las firmas existentes de forma predeterminada. Clic <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">Aca</a> para aplicar las normas a todas las firmas existentes.';
$txt['signature_enable'] = 'Habilitar firmas';
$txt['signature_max_length'] = 'Caracteres m�ximo permitido<div class="smalltext">(0 sin max.)</div>';
$txt['signature_max_lines'] = 'Importe m�ximo de las l�neas<div class="smalltext">(0 sin max)</div>';
$txt['signature_max_images'] = 'M�ximo n�mero de imagenes<div class="smalltext">(0 no max. - excluye emoticonos)</div>';
$txt['signature_allow_smileys'] = 'Permitir emoticons en firmas';
$txt['signature_max_smileys'] = 'M�ximo smiley <div class="smalltext">(0 sin max)</div>';
$txt['signature_max_image_width'] = 'Anchura m�xima de las im�genes de firma (pixels)<div class="smalltext">(0 sin max)</div>';
$txt['signature_max_image_height'] = 'Altura m�xima de las im�genes de firma (pixels)<div class="smalltext">(0 sin max)</div>';
$txt['signature_max_font_size'] = 'Tama�o m�ximo de fuente permitido en firmas<div class="smalltext">(0 sin max)</div>';
$txt['signature_bbc'] = 'Habilitado etiquetas BBC ';

$txt['custom_profile_title'] = 'Campos de perfil personalizados';
$txt['custom_profile_desc'] = 'Desde esta p�gina usted puede crear sus propios campos de perfil personalizados que encajan con los requisitos de su propios foros';
$txt['custom_profile_active'] = 'Activo';
$txt['custom_profile_fieldname'] = 'Nombre de campo';
$txt['custom_profile_fieldtype'] = 'Tipo de campo';
$txt['custom_profile_make_new'] = 'Nuevo campo';
$txt['custom_profile_none'] = 'No ha creado ning�n campos de perfil personalizado a�n!';
$txt['custom_profile_icon'] = 'Icono';

$txt['custom_profile_type_text'] = 'Texto';
$txt['custom_profile_type_textarea'] = 'Texto grandet';
$txt['custom_profile_type_select'] = 'Casilla de selecci�n';
$txt['custom_profile_type_radio'] = 'Boton Radio';
$txt['custom_profile_type_check'] = 'Casilla de verificaci�n';

$txt['custom_add_title'] = 'Agregar campo de perfil';
$txt['custom_edit_title'] = 'Editar campo de perfil';
$txt['custom_edit_general'] = 'Configuraci�n de pantalla';
$txt['custom_edit_input'] = 'Ajustes de entrada';
$txt['custom_edit_advanced'] = 'Configuraci�n avanzada';
$txt['custom_edit_name'] = 'Nombre';
$txt['custom_edit_desc'] = 'Descripci�n';
$txt['custom_edit_profile'] = 'Secci�n de perfil';
$txt['custom_edit_profile_desc'] = 'Esta seccion de perfil se edita';
$txt['custom_edit_profile_none'] = 'Ninguno';
$txt['custom_edit_registration'] = 'Mostrar en el Registro';
$txt['custom_edit_registration_disable'] = 'No ';
$txt['custom_edit_registration_allow'] = 'Si';
$txt['custom_edit_registration_require'] = 's�, y requieren entrada';
$txt['custom_edit_display'] = 'Mostrar en el tema';
$txt['custom_edit_picktype'] = 'Tipo de campo';

$txt['custom_edit_max_length'] = 'Longitud m�xima';
$txt['custom_edit_max_length_desc'] = '(0 sin limite)';
$txt['custom_edit_dimension'] = 'Dimensiones';
$txt['custom_edit_dimension_row'] = 'Filas';
$txt['custom_edit_dimension_col'] = 'Columnas';
$txt['custom_edit_bbc'] = 'Permitir BBC';
$txt['custom_edit_options'] = 'Opciones';
$txt['custom_edit_options_desc'] = 'Deja cuadro de opci�n en blanco para eliminarlo. bot�n de radio selecciona la opci�n por defecto';
$txt['custom_edit_options_more'] = 'Mas';
$txt['custom_edit_default'] = 'Estado predeterminado';
$txt['custom_edit_active'] = 'Activo';
$txt['custom_edit_active_desc'] = 'Si no se selecciona este campo no se mostrar� a nadie';
$txt['custom_edit_privacy'] = 'Privacidad';
$txt['custom_edit_privacy_desc'] = 'Qui�n puede ver y editar este campo.';
$txt['custom_edit_privacy_all'] = 'Los usuarios pueden ver este campo; propietario puede editar.';
$txt['custom_edit_privacy_see'] = 'Los usuarios pueden ver este campo, solo los administradores pueden editarlo.';
$txt['custom_edit_privacy_owner'] = 'Los usuarios no pueden ver este campo; propietario y los administradores pueden editarlo.';
$txt['custom_edit_privacy_none'] = 'Este campo s�lo est� visible para los administradores';
$txt['custom_edit_can_search'] = 'Buscable';
$txt['custom_edit_can_search_desc'] = 'Este campo buscar� en la lista de miembros.';
$txt['custom_edit_mask'] = 'M�scara de entrada';
$txt['custom_edit_mask_desc'] = 'Puede seleccionar una mascara de entrada para validar los datos del campo de texto.';
$txt['custom_edit_mask_email'] = 'Validar Email';
$txt['custom_edit_mask_number'] = 'Num�rico';
$txt['custom_edit_mask_nohtml'] = 'No HTML ';
$txt['custom_edit_mask_regex'] = 'Regex (Avanzado)';
$txt['custom_edit_enclose'] = 'Mostrar dentro del texto (opcional)';
$txt['custom_edit_enclose_desc'] = 'Es <strong>muy</strong> recomendable usar una m�scara para validar la entrada suministrada por el usuario.';

$txt['custom_edit_placement'] = 'Elija la colocaci�n';
$txt['custom_edit_placement_standard'] = 'Est�ndar (con t�tulo)';
$txt['custom_edit_placement_withicons'] = 'Con Iconos';
$txt['custom_edit_placement_abovesignature'] = 'Encima de la Firma';
$txt['custom_profile_placement'] = 'Colocaci�n';
$txt['custom_profile_placement_standard'] = 'Est�ndar';
$txt['custom_profile_placement_withicons'] = 'Con Iconos';
$txt['custom_profile_placement_abovesignature'] = 'Encima de la Firma';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = '�Est� seguro que desea eliminar este campo? - todos los datos relacionados se perder�n!';

$txt['standard_profile_title'] = 'Campo de perfil est�ndar';
$txt['standard_profile_field'] = 'Campo';

$txt['core_settings_welcome_msg'] = 'Bienvenido a tu nuevo foro';
$txt['core_settings_welcome_msg_desc'] = 'Para empezar te sugiero seleccionar cuales son las caracter�sticas que desea habilitar de SMF. Te recomendamos que permitas s�lo las caracter�sticas que necesita!';
$txt['core_settings_item_cd'] = 'Calendario';
$txt['core_settings_item_cd_desc'] = 'Al habilitar esta funci�n se abrir� una selecci�n de opciones para permitirle a los usuarios ver el calendario, agregar y revisar los eventos, fechas de nacimiento de usuarios y mucho, mucho m�s.';
$txt['core_settings_item_cp'] = 'Campo de perfil avanzado';
$txt['core_settings_item_cp_desc'] = 'Esto le permite ocultar los campos est�ndar de perfil y crear nuevos campos de perfil de su foro.';
$txt['core_settings_item_k'] = 'Karma ';
$txt['core_settings_item_k_desc'] = 'Karma es una caracter�stica que demuestra la popularidad de un miembro. Los miembros, si lo permite, pueden \'aplaudir\' o \'castigar\' a otros miembros, que es como se calcula su popularidad.';
$txt['core_settings_item_ml'] = 'Moderaci�n Log';
$txt['core_settings_item_ml_desc'] = 'Habilitar la moderaci�n de Log para mantener registro de todas las acciones adoptadas por su moderadores.';
$txt['core_settings_item_pm'] = 'Moderaci�n de Post';
$txt['core_settings_item_pm_desc'] = 'La moderaci�n de Post le permite seleccionar los grupos y las tablas en el que los mensajes deben ser aprobados antes de que se haga p�blica. Al habilitar esta funci�n, aseg�rese de visitar la secci�n de permiso para establecer los permisos pertinentes.';
$txt['core_settings_item_ps'] = 'Suscripciones de pago';
$txt['core_settings_item_ps_desc'] = 'Suscripciones de pago le permitir� a los usuarios pagar por la suscripci�n a cambiar de Grupo en el foro y as� cambiar sus derechos de acceso.';
$txt['core_settings_item_rg'] = 'Generaci�n de Reportes';
$txt['core_settings_item_rg_desc'] = 'Esta caracter�stica de administraci�n permite la generaci�n de informes (que se puede imprimir) para presentar su configuraci�n actual de una manera f�cil para ver - especialmente �til para los grandes foros.';
$txt['core_settings_item_sp'] = 'Seguimiento del motor de b�squeda';
$txt['core_settings_item_sp_desc'] = 'Al habilitar esta funci�n permitir� a los administradores rastrear los motores de b�squeda.';
$txt['core_settings_item_w'] = 'Sistema de Alerta';
$txt['core_settings_item_w_desc'] = 'Esta funcionalidad permite a los administradores y moderadores emitir advertencias a los usuarios, tambi�n incluye funciones avanzadas para eliminar autom�ticamente los derechos de usuario a medida que aumenta el nivel de alerta. Nota: para sacar el m�ximo provecho de esta funci�n (moderaci�n de Post) debe estar activado.';
$txt['core_settings_switch_on'] = 'Haga clic para activar ';
$txt['core_settings_switch_off'] = 'Haga clic para desactivar ';
$txt['core_settings_enabled'] = 'Activado';
$txt['core_settings_disabled'] = 'Desactivado';

$txt['languages_lang_name'] = 'Nombre del Idioma';
$txt['languages_locale'] = 'Lugar';
$txt['languages_default'] = 'Predeterminado';
$txt['languages_character_set'] = 'Conjunto de caracteres';
$txt['languages_users'] = 'Usuario';
$txt['language_settings_writable'] = '<strong>Advertencia:</strong> No se puede escribir el Settings.php por lo que la configuraci�n de idioma predeterminada no se puede guardar.';
$txt['edit_languages'] = 'Editar idioma';
$txt['lang_file_not_writable'] = '<strong>Advertencia:</strong> El archivo de idioma primario (%1$s) no tiene permiso de escritura. Debe dar permisos de escritura antes de hacer cualquier cambio.';
$txt['lang_entries_not_writable'] = '<strong>Advertencia:</strong> El archivo de idioma que desea editar (%1$s) no tiene permiso de escritura. Debe dar permisos de escritura antes de hacer cualquier cambio.';
$txt['languages_ltr'] = 'De derecha a izquierda';

$txt['add_language'] = 'Agregar idioma';
$txt['add_language_smf'] = 'Descarga de Simple Machines';
$txt['add_language_smf_browse'] = 'Escriba el nombre del idioma a buscar o dejar en blanco para buscar todos.';
$txt['add_language_smf_install'] = 'Instalar';
$txt['add_language_smf_found'] = 'Se encontraron los siguientes idiomas. Haga clic en el enlace al lado del idioma que desea instalar, a continuaci�n, se tomar�n el paquetes a instalar.';
$txt['add_language_error_no_response'] = 'El sitio simple Machines no responde. Por favor, int�ntelo m�s tarde.';
$txt['add_language_error_no_files'] = 'No se encontraron archivos.';
$txt['add_language_smf_desc'] = 'Descripci�n';
$txt['add_language_smf_utf8'] = 'UTF-8 ';
$txt['add_language_smf_version'] = 'Versi�n';

$txt['edit_language_entries_primary'] = 'A continuaci�n se muestran los ajustes para este paquete de idioma.';
$txt['edit_language_entries'] = 'Modificar las entradas del idioma';
$txt['edit_language_entries_file'] = 'Seleccione para editar las entradas';
$txt['languages_dictionary'] = 'Diccionario';
$txt['languages_spelling'] = 'Ortograf�a';
$txt['languages_for_pspell'] = 'Esto es para <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - si est� instalado';
$txt['languages_rtl'] = 'Activar modo (De derecha a izquierda)';

$txt['lang_file_desc_index'] = 'Strings General';
$txt['lang_file_desc_EmailTemplates'] = 'Plantillas de email';

$txt['languages_download'] = 'Descargar paquete de idioma';
$txt['languages_download_note'] = 'Esta p�gina muestra todos los archivos que est�n contenidos dentro del paquete de idioma y algo de informaci�n �til acerca de cada uno. Todos los archivos que tienen su casilla de verificaci�n asociada marcados se copiar�n.';
$txt['languages_download_info'] = '<strong>Nota:</strong>
	<ul class="normallist">
		<li>Los archivos que tengan el estado (no puede ser escrito) significa que SMF no ser� capaz de copiar este archivo en el directorio y debe dar permisos de escritura, ya sea usando un cliente FTP o rellenando sus datos en la parte inferior de la p�gina.</li>
		<li>La informaci�n de la versi�n de un archivo muestra la �ltima versi�n que fue actualizado para SMF. El verde indica que esta es una versi�n m�s reciente de la que tenemos. El �mbar esto indica que es la misma versi�n que la que tenemos. El rojo indica que esta es una versi�n m�s vieja de la que tenemos.</li>
		<li>Cuando un archivo ya existe en el foro, la columna (ya existe) tendr� uno de dos valores. (Id�nticos) indica que el archivo ya existe en una forma id�ntica y no necesitan ser sobreescrito. (Diferentes) significa que el contenido var�an de alguna manera y sobrescribir es probablemente la soluci�n �ptima.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Archivos primarios';
$txt['languages_download_theme_files'] = 'Archivos Temas-relacionados';
$txt['languages_download_filename'] = 'Nombre de Archivos';
$txt['languages_download_dest'] = 'Destino';
$txt['languages_download_writable'] = 'Grabables';
$txt['languages_download_version'] = 'Version ';
$txt['languages_download_older'] = 'Usted tiene una nueva versi�n de este archivo instalado, no se recomienda remplazarlo.';
$txt['languages_download_exists'] = 'ya existe';
$txt['languages_download_exists_same'] = 'Id�ntico';
$txt['languages_download_exists_different'] = 'Diferente';
$txt['languages_download_copy'] = 'Copia';
$txt['languages_download_not_chmod'] = 'No se puede continuar con la instalaci�n hasta que todos los archivos seleccionados para copiar sean de escritura.';
$txt['languages_download_illegal_paths'] = 'El paquete contiene caminos ilegales - por favor p�ngase en contacto con Simple Machines';
$txt['languages_download_complete'] = 'Instalaci�n Completa';
$txt['languages_download_complete_desc'] = 'Paquete de idioma instalado con �xito. Por favor haga clic <a href="%1$s">aqu�</a> para volver a la p�gina de idiomas';
$txt['languages_delete_confirm'] = '�Est�s seguro que quieres eliminar este idioma?';

?>