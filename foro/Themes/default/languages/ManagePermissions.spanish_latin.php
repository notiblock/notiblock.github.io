<?php
// Version: 2.0; ManagePermissions

$txt['permissions_title'] = 'Establecer Permisos';
$txt['permissions_modify'] = 'Modificar';
$txt['permissions_view'] = 'Ver';
$txt['permissions_allowed'] = 'Permitido';
$txt['permissions_denied'] = 'Denegado';
$txt['permission_cannot_edit'] = '<strong>Nota:</strong> No puede editar este perfil ya que es un perfil predefinido incluido en el software del foro de forma predeterminada. Si desea cambiar los permisos de este perfil, primero debes crear un perfil duplicado. Puede llevar a cabo esta tarea, haga clic  <a href="%1$s">Aqu�</a>.';

$txt['permissions_for_profile'] = 'Permisos para Perfil';
$txt['permissions_boards_desc'] = 'La siguiente lista muestra qu� conjunto de permisos se ha asignado a cada tabla en su foro. Usted puede editar el perfil asignado haciendo clic en el nombre del foro o seleccione "editar todos" de la parte inferior de la p�gina. Para editar el propio perfil, simplemente haga clic en el nombre del perfil.';
$txt['permissions_board_all'] = 'Editar Todos';
$txt['permission_profile'] = 'Permisos de perfil';
$txt['permission_profile_desc'] = 'Que <a href="%1$s">Permisos</a> deben usar?';
$txt['permission_profile_inherit'] = 'Heredar Anuncios';

$txt['permissions_profile'] = 'Perfil';
$txt['permissions_profiles_desc'] = 'Los permisos de perfiles se asignan para administrar f�cilmente la configuraci�n de seguridad. Desde esta zona se pueden crear, editar y borrar permisos de perfiles.';
$txt['permissions_profiles_change_for_board'] = 'Editar permisos de perfil para: "%1$s"';
$txt['permissions_profile_default'] = 'Predeterminado';
$txt['permissions_profile_no_polls'] = 'No hay encuestas';
$txt['permissions_profile_reply_only'] = 'S�lo Responder';
$txt['permissions_profile_read_only'] = 'Solo lectura';

$txt['permissions_profile_rename'] = 'Renombrar';
$txt['permissions_profile_edit'] = 'Editar perfiles';
$txt['permissions_profile_new'] = 'Nuevo perfil';
$txt['permissions_profile_new_create'] = 'Crear';
$txt['permissions_profile_name'] = 'Nombre del perfil';
$txt['permissions_profile_used_by'] = 'Utilizado por';
$txt['permissions_profile_used_by_one'] = '1 Foro';
$txt['permissions_profile_used_by_many'] = '%1$d Foros';
$txt['permissions_profile_used_by_none'] = 'No hay foros';
$txt['permissions_profile_do_edit'] = 'Editar';
$txt['permissions_profile_do_delete'] = 'Borrar';
$txt['permissions_profile_copy_from'] = 'Copiar los permisos de';

$txt['permissions_includes_inherited'] = 'heredar grupos';

$txt['permissions_all'] = 'todo';
$txt['permissions_none'] = 'ninguno';
$txt['permissions_set_permissions'] = 'Establecer permisos';

$txt['permissions_advanced_options'] = 'Opciones avanzadas';
$txt['permissions_with_selection'] = 'Con selecci�n';
$txt['permissions_apply_pre_defined'] = 'Aplicar el perfil predefinido de permisos';
$txt['permissions_select_pre_defined'] = 'Seleccionar un perfil predeterminado';
$txt['permissions_copy_from_board'] = 'Copiar permisos de este Foro';
$txt['permissions_select_board'] = 'Seleccionar el foro';
$txt['permissions_like_group'] = 'Establecer los permisos como los de este grupo';
$txt['permissions_select_membergroup'] = 'Seleccionar un grupo de usuarios';
$txt['permissions_add'] = 'Agregar Permiso';
$txt['permissions_remove'] = 'Limpiar Permiso';
$txt['permissions_deny'] = 'Denegar Permiso';
$txt['permissions_select_permission'] = 'Seleccionar un permiso';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Puedes seleccionar solamente una acci�n para modificar los permisos';
$txt['permissions_no_action'] = 'No se seleccion� ninguna acci�n';
$txt['permissions_deny_dangerous'] = 'Est�s a punto de negar uno o m�s permisos.\\nEsto puede ser peligroso y causar resultados inesperados si \\"accidentalmente\\" dejaste a alguien en los grupos a los que les negar�s permisos.\\n\\n�Est�s seguro que deseas continuar?';

$txt['permissions_modify_group'] = 'Modificar Grupo';
$txt['permissions_general'] = 'Permisos Generales';
$txt['permissions_board'] = 'Permisos Predeterminados del Foro';
$txt['permissions_board_desc'] = '<strong>Nota:</strong> Cambiar estos permisos del foro afectar� a todos los foros actualmente asignando el permiso "Predeterminado" del perfil. Los foros que no utilicen el perfil "predeterminado" no se ver�n afectados por los cambios a esta p�gina.';
$txt['permissions_commit'] = 'Guardar cambios';
$txt['permissions_on'] = 'en el foro';
$txt['permissions_local_for'] = 'Permisos Locales por grupo';
$txt['permissions_option_on'] = 'P';
$txt['permissions_option_off'] = 'X ';
$txt['permissions_option_deny'] = 'N';
$txt['permissions_option_desc'] = 'Para cada permiso puedes escoger \'Permitir\' (P), \'Rechazar\' (X), o <span style="color: red;">\'Negar\' (N)</span>.<br /><br />Recuerda que si niegas un permiso, cualquier usuario - sea moderador o cualquier otra cosa - que se encuentre en ese grupo ser� negado tambi�n.<br />Por esta raz�n, debes usar negar con cautela, solamente cuando sea <b>necesario</b>. Rechazar, por el contrario, niega el acceso a menos que haya sido permitido.';
$txt['permissions_change_view'] = 'Cambiar vista';
$txt['permissions_view_simple'] = ' Simple';
$txt['permissions_view_classic'] = 'Cl�sico';

$txt['permissiongroup_general'] = ' General';
$txt['permissionname_view_stats'] = 'Ver las estad�sticas del foro';
$txt['permissionhelp_view_stats'] = 'Las estad�sticas del foro es una p�gina resumiendo todas las estad�sticas del foro, tales como el n�mero de usuarios, n�mero diario de mensajes, y varias estad�sticas de los 10 mejores. Activar este permiso agrega un enlace en la parte inferior del �ndice del foro (\'[M�s estad�sticas]\').';
$txt['permissionname_view_mlist'] = 'Ver la lista de usuarios';
$txt['permissionhelp_view_mlist'] = 'La lista de usuarios muestra a todos los usuarios que se han registrado en tu foro. La lista puede ser ordenada, as� como buscar en ella. La lista de usuarios de enlaza desde el �ndice del foro y la p�gina de estad�sticas, al hacer clic en el n�mero de usuarios.';
$txt['permissionname_who_view'] = 'Ver Qui�n est� en l�nea';
$txt['permissionhelp_who_view'] = 'Qui�n est� en l�nea muestra a todos los usuarios que est�n conectados, as� como lo que est�n haciendo. Este permiso funcionar� solamente si tienes activado tambi�n en \'Config. y Opciones\'. Puedes accesar la pantalla de \'Qui�n est� en l�nea\' haciendo clic en el enlace de la secci�n de \'Usuarios en l�nea\' en el �ndice del foro.';
$txt['permissionname_search_posts'] = 'Buscar por mensajes y temas';
$txt['permissionhelp_search_posts'] = 'El permiso para b�squeda le permite al usuario buscar en todos los foros a los que tiene acceso. Cuando el permiso de b�squeda est� activado, el bot�n de \'Buscar\' ser� agregado a la barra de botones del foro.';
$txt['permissionname_karma_edit'] = 'Cambiar el karma de otras personas';
$txt['permissionhelp_karma_edit'] = 'Karma es una funci�n que muestra la popularidad de un usuario. Para poder usar esta funci�n, necesitar tenerla activa en \'Config. y Opciones\'. Este permiso le permitir� a un grupo el poder votar. Este permiso no tiene efecto en invitados.';

$txt['permissiongroup_pm'] = 'Mensajer�a Personal';
$txt['permissionname_pm_read'] = 'Leer mensajes personales';
$txt['permissionhelp_pm_read'] = 'Este permiso le permite a los usuarios acceder a la secci�n de Mensajes Personales para leer sus mensajes. Sin este permiso, un usuario no puede enviar mensajes personales.';
$txt['permissionname_pm_send'] = 'Enviar mensajes personales';
$txt['permissionhelp_pm_send'] = 'Env�a mensajes personales a otros usuarios registrados. Necesita del permiso \'Leer mensajes personales\'.';

$txt['permissiongroup_calendar'] = 'Calendario';
$txt['permissionname_calendar_view'] = 'Ver el calendario';
$txt['permissionhelp_calendar_view'] = 'El calendario muestra para cada mes, los cumplea�os, eventos y d�as festivos. Este permiso permite el acceso al calendario. Cuando este permiso est� activo, un bot�n ser� agregado a la barra de botones del foro y se mostrar� una lista en la parte inferior del �ndice del foro con los cumplea�os, eventos y d�as festivos pr�ximos. El calendario necesita ser activado desde \'Config. y Opciones\'.';
$txt['permissionname_calendar_post'] = 'Crear eventos en el calendario';
$txt['permissionhelp_calendar_post'] = 'Un evento es un tema enlazado a cierta fecha, o rango de fechas. Se puede hacer la creaci�n de eventos desde el calendario. Un evento puede crearse solamente si el usuario que crea el evento puede crear nuevos temas.';
$txt['permissionname_calendar_edit'] = 'Editar eventos en el calendario';
$txt['permissionhelp_calendar_edit'] = 'Un evento es un tema enlazado a cierta fecha, o rango de fechas. Los eventos pueden ser editados al hacer clic en el asterisco rojo (*) al lado del evento, en la vista del calendario. Para poder modificar un evento, el usuario debe tener los permisos necesarios para editar el primer mensaje del tema que est� enlazado al evento.';
$txt['permissionname_calendar_edit_own'] = 'Eventos propios';
$txt['permissionname_calendar_edit_any'] = 'Cualquier evento';

$txt['permissiongroup_maintenance'] = 'Administraci�n del Foro';
$txt['permissionname_admin_forum'] = 'Administrar el foro y la base de datos';
$txt['permissionhelp_admin_forum'] = 'Este permiso le permite a un usuario:<ul class="normallist"><li>cambiar la configuraci�n del foro, la base de datos y el tema</li><li>manejar paquetes</li><li>usar las herramientas de mantenimiento del foro y la base de datos</li><li>ver los registros de errores y moderaci�n</li></ul> Usa este permiso con cuidado ya que es muy poderoso.';
$txt['permissionname_manage_boards'] = 'Administrar foros y categor�as';
$txt['permissionhelp_manage_boards'] = 'Este permiso permite la creaci�n, edici�n y eliminaci�n de foros y categor�as.';
$txt['permissionname_manage_attachments'] = 'Administrar archivos adjuntos y avatares';
$txt['permissionhelp_manage_attachments'] = 'Este permiso permite el acceso al centro de archivos adjuntos, donde est�n listados todos los archivos adjuntos y avatares del foro, y de donde pueden ser eliminados.';
$txt['permissionname_manage_smileys'] = 'Manejar smileys e iconos de mensajes';
$txt['permissionhelp_manage_smileys'] = 'Este permite accesar al centro de smileys. En el centro de smileys puedes agregar, editar y emilinar smileys y conjuntos de smileys. Si has habilitado los iconos de mensaje personalizados tambi�n podr�s agregar o editar los iconos de mensaje con este permiso.';
$txt['permissionname_edit_news'] = 'Editar Noticias';
$txt['permissionhelp_edit_news'] = 'La funci�n de noticias permite que en cada pantalla aparezca una l�nea aleatoria de noticias. Para usar la funci�n de noticias, activala en la Config. del foro.';
$txt['permissionname_access_mod_center'] = 'Acceda al centro de moderaci�n';
$txt['permissionhelp_access_mod_center'] = 'Con esta licencia, los miembros de este grupo pueden acceder al centro de la moderaci�n, donde tendr�n acceso a la funcionalidad para facilitar la moderaci�n. Nota que esto no es en s� conceder privilegios de moderaci�n.';

$txt['permissiongroup_member_admin'] = 'Administraci�n de usuarios';
$txt['permissionname_moderate_forum'] = 'Moderar usuarios del foro';
$txt['permissionhelp_moderate_forum'] = 'Este permiso incluye todas las funciones importates de moderaci�n de miembros:<ul class="normallist"><li>acceso al manejo de registros</li><li>acceso a la pantalla de ver/borrar miembros</li><li>informaci�n detallada del perfil, incluyendo rastrear IP/usuario y estado en linea (oculto)</li><li>activar cuentas</li><li>recibir notificaciones de aprobaci�n y aprobar cuentas</li><li>inmunidad a ignorar MP</li><li>varias cosas m�s</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Administrar y asignar grupos de usuarios';
$txt['permissionhelp_manage_membergroups'] = 'Este permiso le permite un usuario editar los grupos de usuarios y asignarle grupos de usuarios a otros usuarios.';
$txt['permissionname_manage_permissions'] = 'Administrar permisos';
$txt['permissionhelp_manage_permissions'] = 'Este permiso le permite a un usuario editar todos los permisos de un grupo de usuarios, en foros individuales o globalmente.';
$txt['permissionname_manage_bans'] = 'Administrar la lista de accesos prohibidos';
$txt['permissionhelp_manage_bans'] = 'Este permiso le permite a un usuario agregar o eliminar usuarios, direcciones IP, nombres de servidores y direcciones de email de la lista de usuarios con acceso prohibido. Tambi�n les permite ver y eliminar las entradas del log de los usuarios con acceso prohibido que intentaron entrar.';
$txt['permissionname_send_mail'] = 'Enviar un email del foro a los usuarios';
$txt['permissionhelp_send_mail'] = 'Env�o masivo de emails a todos los usuarios del foro, o solamente a algunos grupos de usuarios v�a email o mensaje personal (este �ltimo necesita el permiso \'Enviar Mensaje Personal\').';
$txt['permissionname_issue_warning'] = 'Emitir advertencias a los miembros';
$txt['permissionhelp_issue_warning'] = 'Emitir una advertencia a los miembros del foro. Requiere que el sistema de alertas este habilitado.';

$txt['permissiongroup_profile'] = 'Perfiles de Usuarios';
$txt['permissionname_profile_view'] = 'Ver resumen del perfil y estad�sticas';
$txt['permissionhelp_profile_view'] = 'Este permiso le permite a los usuarios hacer clic en un nombre de usuario para ver un resumen de la configuraci�n de su perfil, algunas estad�sticas, y todos los mensajes del usuario.';
$txt['permissionname_profile_view_own'] = 'Perfil propio';
$txt['permissionname_profile_view_any'] = 'Cualquier perfil';
$txt['permissionname_profile_identity'] = 'Editar la config. de la cuenta';
$txt['permissionhelp_profile_identity'] = 'La config. de la cuenta son las caracter�sticas b�sicas de un perfil, tales como contrase�a, direcci�n de email, grupo, e idioma preferido.';
$txt['permissionname_profile_identity_own'] = 'Perfil propio';
$txt['permissionname_profile_identity_any'] = 'Cualquier perfil';
$txt['permissionname_profile_extra'] = 'Editar la config. adicional del perfil';
$txt['permissionhelp_profile_extra'] = 'La config. adicional del perfil incluye datos del avatar, preferencias del tema, notificaciones, y mensajes personales.';
$txt['permissionname_profile_extra_own'] = 'Perfil propio';
$txt['permissionname_profile_extra_any'] = 'Cualquier perfil';
$txt['permissionname_profile_title'] = 'Editar t�tulo personalizado';
$txt['permissionhelp_profile_title'] = 'El t�tulo personalizado se muestra en la p�gina donde se muestran temas, y debajo del perfil de cada usuario que tiene un t�tulo personalizado.';
$txt['permissionname_profile_title_own'] = 'Perfil propio';
$txt['permissionname_profile_title_any'] = 'Cualquier perfil';
$txt['permissionname_profile_remove'] = 'Borrar cuenta';
$txt['permissionhelp_profile_remove'] = 'Este permiso le permite a un usuario borrar su propia cuenta, cuando teiene el valor de \'Cuenta propia\'.';
$txt['permissionname_profile_remove_own'] = 'Cuenta propia';
$txt['permissionname_profile_remove_any'] = 'Cualquier cuenta';
$txt['permissionname_profile_server_avatar'] = 'Seleccionar un avatar del servidor';
$txt['permissionhelp_profile_server_avatar'] = 'Si est� activo, permitir� a un usuario seleccionar un avatar de la colecci�n instalada en el servidor.';
$txt['permissionname_profile_upload_avatar'] = 'Subir un avatar al servidor';
$txt['permissionhelp_profile_upload_avatar'] = 'Permite a un usuario subir sus avatares personales al servidor.';
$txt['permissionname_profile_remote_avatar'] = 'Seleccionar un avatar remoto';
$txt['permissionhelp_profile_remote_avatar'] = 'Debido a que los avatares pueden influir negativamente en el tiempo requerido para crear una p�gina, es posible deshabilitar a algunos grupos de usar avatares almacenados en servidores externos. ';

$txt['permissiongroup_general_board'] = ' General';
$txt['permissionname_moderate_board'] = 'Moderar foro';
$txt['permissionhelp_moderate_board'] = 'El permiso para moderar el foro agrega algunos pocos permisos que le permitan a un moderador ser un moderador real. Los permisos incluyen responder a temas bloqueados, cambiar la expiraci�n de una encuesta, y ver los resultados de �stas';

$txt['permissiongroup_topic'] = 'Temas';
$txt['permissionname_post_new'] = 'Publicar nuevos temas';
$txt['permissionhelp_post_new'] = 'Este permiso le permite a los usuarios publicar nuevos temas. No permite publicar respuestas a temas.';
$txt['permissionname_merge_any'] = 'Combinar cualquier tema';
$txt['permissionhelp_merge_any'] = 'Combinar dos o m�s temas en uno. El orden de los mensajes dentro del tema combinado se basar�n en la hora en la que los mensajes fueron creados. Un usuario solamente puede mezclar temas en los foros en los que se le permita a los usuarios combinar. Para combinar m�ltiples en uno, un usuario debe activar la moderaci�n r�pida en la config. de su perfil.';
$txt['permissionname_split_any'] = 'Dividir cualquier tema';
$txt['permissionhelp_split_any'] = 'Dividir un tema en dos temas separados.';
$txt['permissionname_send_topic'] = 'Enviar temas a amigos';
$txt['permissionhelp_send_topic'] = 'Este permiso le permite a un usuario enviar un tema por email a un amigo, al introducir su direcci�n de email, permite asimismo agregar un mensaje.';
$txt['permissionname_make_sticky'] = 'Fijar temas';
$txt['permissionhelp_make_sticky'] = 'Los temas fijados son temas que siempre permanecen en la parte superior de un foro. Pueden ser �tiles para anuncios u otros mensajes importantes.';
$txt['permissionname_move'] = 'Mover temas';
$txt['permissionhelp_move'] = 'Mover un tema de un foro a otro. Los usuarios pueden seleccionar solamente foros destinos a los que tengan acceso.';
$txt['permissionname_move_own'] = 'Tema propio';
$txt['permissionname_move_any'] = 'Cualquier tema';
$txt['permissionname_lock'] = 'Bloquear temas';
$txt['permissionhelp_lock'] = 'Este permiso le permite a un usuario bloquear un tema. Esto se puede hacer para asegurarse que nadie responda a un tema. Solamente usuarios con el permiso de \'Moderar foro\' pueden todav�a publicar en temas bloqueados.';
$txt['permissionname_lock_own'] = 'Tema propio';
$txt['permissionname_lock_any'] = 'Cualquier tema';
$txt['permissionname_remove'] = 'Borrar temas';
$txt['permissionhelp_remove'] = 'Borrar temas completos. �Este permiso no le permite borrar mensajes espec�ficos dentro del tema!';
$txt['permissionname_remove_own'] = 'Tema propio';
$txt['permissionname_remove_any'] = 'Cualquier tema';
$txt['permissionname_post_reply'] = 'Publicar respuestas a temas';
$txt['permissionhelp_post_reply'] = 'Este permiso permite el responder a temas.';
$txt['permissionname_post_reply_own'] = 'Tema propio';
$txt['permissionname_post_reply_any'] = 'Cualquier tema';
$txt['permissionname_modify_replies'] = 'Modificar respuestas a los temas propios';
$txt['permissionhelp_modify_replies'] = 'Este permiso le permite a un usuario que inici� un tema, el modificar todas las respuestas en su tema.';
$txt['permissionname_delete_replies'] = 'Borrar respuestas en sus temas propios';
$txt['permissionhelp_delete_replies'] = 'Este permiso le permite a un usuario que inici� un tema eliminar todas las respuestas en su tema.';
$txt['permissionname_announce_topic'] = 'Tema de anuncios';
$txt['permissionhelp_announce_topic'] = 'Esto permite enviar un email de anuncios acerca de un tema a todos los usuarios o solamente a algunos grupos de usuarios.';

$txt['permissiongroup_post'] = 'Mensajes';
$txt['permissionname_delete'] = 'Borrar mensajes';
$txt['permissionhelp_delete'] = 'Borrar mensajes. Esto no le permite a un usuario borrar el primer mensaje de un tema.';
$txt['permissionname_delete_own'] = 'Mensajes propios';
$txt['permissionname_delete_any'] = 'Cualquier mensaje';
$txt['permissionname_modify'] = 'Modificar mensajes';
$txt['permissionhelp_modify'] = 'Editar mensajes';
$txt['permissionname_modify_own'] = 'Mensajes propios';
$txt['permissionname_modify_any'] = 'Cualquier mensaje';
$txt['permissionname_report_any'] = 'Reportar mensajes a los moderadores';
$txt['permissionhelp_report_any'] = 'Este permiso agrega un enlace a cada mensaje, permitiendole a un usuario reportar el mensaje al moderador. Al reportarlo, todos los moderadores de ese foro recibir�n un email con un enlace al mensaje reportado y una descripci�n del problema (proporcionado por el usuario que lo report�).';

$txt['permissiongroup_poll'] = 'Encuestas';
$txt['permissionname_poll_view'] = 'Ver encuestas';
$txt['permissionhelp_poll_view'] = 'Este permiso le permite a un usuario ver una encuesta. Sin este permiso, el usuario ver� solamente el tema.';
$txt['permissionname_poll_vote'] = 'Votar en encuestas';
$txt['permissionhelp_poll_vote'] = 'Este permiso le permite a un usuario emitir un voto. Esto no se aplica a invitados.';
$txt['permissionname_poll_post'] = 'Publicar encuestas';
$txt['permissionhelp_poll_post'] = 'Este permiso le permite a un usuario publicar una nueva encuesta. El usuario necesita el permiso de \'Publicar nuevos temas\'.';
$txt['permissionname_poll_add'] = 'Agregar encuestas a temas';
$txt['permissionhelp_poll_add'] = 'Agregar encuestas a temas le permite a un usuario agregar una encuesta despu�s de haber creado el tema. Este permiso necesita permisos suficientes para editar el primer mensaje de un tema.';
$txt['permissionname_poll_add_own'] = 'Temas propios';
$txt['permissionname_poll_add_any'] = 'Cualquier tema';
$txt['permissionname_poll_edit'] = 'Editar encuestas';
$txt['permissionhelp_poll_edit'] = 'Este permiso permite editar las opciones de una encuesta as� como reiniciar la encuesta. Para editar el m�ximo n�mero de votos y la fecha de expiraci�n, el usuario necesita tener el permiso de \'Moderar foro\'.';
$txt['permissionname_poll_edit_own'] = 'Encuesta propia';
$txt['permissionname_poll_edit_any'] = 'Cualquier encuesta';
$txt['permissionname_poll_lock'] = 'Bloquear encuestas';
$txt['permissionhelp_poll_lock'] = 'El bloqueo de encuestas impide que la encuesta acepte m�s votos.';
$txt['permissionname_poll_lock_own'] = 'Encuesta propia';
$txt['permissionname_poll_lock_any'] = 'Cualquier encuesta';
$txt['permissionname_poll_remove'] = 'Eliminar encuestas';
$txt['permissionhelp_poll_remove'] = 'Este permiso permite la eliminaci�n de encuestas.';
$txt['permissionname_poll_remove_own'] = 'Encuesta propia';
$txt['permissionname_poll_remove_any'] = 'Cualquier encuesta';

$txt['permissiongroup_approval'] = 'Moderaci�n Mensaje';
$txt['permissionname_approve_posts'] = 'Aprobar los art�culos en espera de moderaci�n';
$txt['permissionhelp_approve_posts'] = 'Este permiso permite a un usuario aprobar todos los art�culos no aprobados en un foro.';
$txt['permissionname_post_unapproved_replies'] = 'Respuestas no autorizadas en mensajes';
$txt['permissionhelp_post_unapproved_replies'] = 'Este permiso permite a un usuario enviar sus respuestas a un tema en especifico, sus respuestas no se mostrar�n hasta que sea aprobado por un moderador.';
$txt['permissionname_post_unapproved_replies_own'] = 'tema propio';
$txt['permissionname_post_unapproved_replies_any'] = 'Cualquier tema';
$txt['permissionname_post_unapproved_topics'] = 'Publicar temas no aprobados';
$txt['permissionhelp_post_unapproved_topics'] = 'Este permiso permite a un usuario enviar un tema nuevo que va a requerir la aprobaci�n antes de ser mostrado.';
$txt['permissionname_post_unapproved_attachments'] = 'Adjuntos no aprobados en mensajes';
$txt['permissionhelp_post_unapproved_attachments'] = 'Este permiso permite a los usuarios adjuntar archivos a sus mensajes, los archivos deber�n de ser aprobados por un moderador antes de que puedan ser vistos por otros usuarios.';

$txt['permissiongroup_notification'] = 'Notificaciones';
$txt['permissionname_mark_any_notify'] = 'Solicitar notificaci�n en respuestas';
$txt['permissionhelp_mark_any_notify'] = 'Este permiso le permite a los usuarios recibir notificaciones cada que alguien responda en un tema al que est�n suscritos.';
$txt['permissionname_mark_notify'] = 'Solicitar notificaci�n en temas nuevos';
$txt['permissionhelp_mark_notify'] = 'Este permise le permite a un usuario el recibir un email cada que se cree un nuevo tema en el foro en el que est�n suscritos.';

$txt['permissiongroup_attachment'] = 'Archivos adjuntos';
$txt['permissionname_view_attachments'] = 'Ver archivos adjuntos';
$txt['permissionhelp_view_attachments'] = 'Los archivos adjuntos son archivos que est�n adjuntos a mensajes publicados. Esta opci�n puede ser activada y configurada en \'Config. y Opciones\'. Debido a que los archivos adjuntos no se accesan directamente, puedes evitar que �stos sean descargados por usuarios que no tengan este permiso.';
$txt['permissionname_post_attachment'] = 'Publicar archivos adjuntos';
$txt['permissionhelp_post_attachment'] = 'Los archivos adjuntos son archivos que est�n adjuntos a mensajes publicados. Un mensaje puede tener varios archivos adjuntos.';

$txt['permissiongroup_simple_view_basic_info'] = 'Funcion principal del foro';
$txt['permissiongroup_simple_use_pm_system'] = 'P�ngase en contacto con los miembros mediante el sistema de mensajer�a personal';
$txt['permissiongroup_simple_post_calendar'] = 'Publique sus eventos en el calendario';
$txt['permissiongroup_simple_edit_profile'] = 'Personalice su perfil';
$txt['permissiongroup_simple_delete_account'] = 'Borrar su cuenta';
$txt['permissiongroup_simple_use_avatar'] = 'Seleccione un avatar';
$txt['permissiongroup_simple_moderate_general'] = 'Moderar todo el foro';
$txt['permissiongroup_simple_administrate'] = 'Llevar a cabo las tareas administrativas';

$txt['permissionname_simple_calendar_edit_own'] = 'Editar sus eventos en el calendario';
$txt['permissionname_simple_calendar_edit_any'] = 'Editar eventos de otros en el calendario';
$txt['permissionname_simple_profile_view_own'] = 'Ver su perfil';
$txt['permissionname_simple_profile_view_any'] = 'Ver perfil de otros';
$txt['permissionname_simple_profile_identity_own'] = 'Editar configuraci�n de su cuenta';
$txt['permissionname_simple_profile_identity_any'] = 'Editar configuraci�n de otras cuentas';
$txt['permissionname_simple_profile_extra_own'] = 'Editar m�s opciones en su perfil';
$txt['permissionname_simple_profile_extra_any'] = 'Editar m�s opciones en perfil de otros';
$txt['permissionname_simple_profile_title_own'] = 'Elegir tu t�tulo personalizado';
$txt['permissionname_simple_profile_title_any'] = 'Editar titulo personalizado de otros';
$txt['permissionname_simple_profile_remove_own'] = 'Eliminar su cuenta';
$txt['permissionname_simple_profile_remove_any'] = 'Eliminar cuenta de otros';

$txt['permissiongroup_simple_make_unapproved_posts'] = 'Publicar temas y respuestas en el foro <span style="text-decoration: underline">s�lo</span> despu�s de que hayan sido aprobados';
$txt['permissiongroup_simple_make_posts'] = 'Publicar temas y respuestas al foro';
$txt['permissiongroup_simple_post_polls'] = 'Hacer nuevas encuestas';
$txt['permissiongroup_simple_participate'] = 'Ver contenido adicional del foro';
$txt['permissiongroup_simple_modify'] = 'Modificar sus mensajes';
$txt['permissiongroup_simple_notification'] = 'Solicitar notificaciones';
$txt['permissiongroup_simple_attach'] = 'Enviar archivos adjuntos';
$txt['permissiongroup_simple_moderate'] = 'Moderar el foro';

$txt['permissionname_simple_post_unapproved_replies_own'] = 'Publicar respuestas en un tema - pero requieren la aprobaci�n';
$txt['permissionname_simple_post_unapproved_replies_any'] = 'Publicar respuestas en cualquier tema - pero requieren la aprobaci�n';
$txt['permissionname_simple_post_reply_own'] = 'Publicar respuestas en un tema que comenzo';
$txt['permissionname_simple_post_reply_any'] = 'Publicar respuestas a cualquier tema';
$txt['permissionname_simple_move_own'] = 'Mover sus propios temas';
$txt['permissionname_simple_move_any'] = 'Mover temas de otros';
$txt['permissionname_simple_lock_own'] = 'Cerrar sus propios temas';
$txt['permissionname_simple_lock_any'] = 'Cerrar temas de otros';
$txt['permissionname_simple_remove_own'] = 'Eliminar sus propios temas';
$txt['permissionname_simple_remove_any'] = 'Eliminar temas de otros';
$txt['permissionname_simple_delete_own'] = 'Borrar un Mensaje que hicieron';
$txt['permissionname_simple_delete_any'] = 'Borrar un Mensaje hechos por cualquier persona';
$txt['permissionname_simple_modify_own'] = 'Modificar sus propios mensajes';
$txt['permissionname_simple_modify_any'] = 'Modificar mensajes de otros';
$txt['permissionname_simple_poll_add_own'] = 'A�adir una encuesta a un tema propio';
$txt['permissionname_simple_poll_add_any'] = 'A�adir una encuesta a cualquier tema';
$txt['permissionname_simple_poll_edit_own'] = 'Editar una encuesta propia';
$txt['permissionname_simple_poll_edit_any'] = 'Editar cualquier encuesta';
$txt['permissionname_simple_poll_lock_own'] = 'Cerrar una encuesta propia';
$txt['permissionname_simple_poll_lock_any'] = 'Cerrar cualquier encuesta';
$txt['permissionname_simple_poll_remove_own'] = 'Borrar una encuesta propia';
$txt['permissionname_simple_poll_remove_any'] = 'Borrar cualquier encuesta';

$txt['permissionicon'] = ' ';

$txt['permission_settings_title'] = 'Configuraci�n de Permisos';
$txt['groups_manage_permissions'] = 'Grupos permitidos para modificar permisos';
$txt['permission_settings_submit'] = 'Guardar';
$txt['permission_settings_enable_deny'] = 'Activar la opci�n para denegar permisos';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Al desactivar esta opci�n se actualizar� \\\'Denegar\\\' permisos a \\\'No permitir\\\'.';
$txt['permission_by_board_desc'] = 'Puedes establecer cu�ndo un foro utiliza los permisos globales o tiene permisos espec�ficos. Al utilizar permisos locales en el foro, puedes establecer cada permiso para cada grupo.';
$txt['permission_settings_desc'] = 'Puedes establecer qui�n tiene permisos para cambiar los permisos, as� como cuan sofisticados deber�an ser los permisos del sistema.';
$txt['permission_settings_enable_postgroups'] = 'Activar permisos para grupos basados en el n�mero de mensajes';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Al desactivar esta opci�n se eliminar�n los permisos actualmente establecidos a grupos basados en el n�mero de mensajes.';

$txt['permissions_post_moderation_desc'] = 'Desde esta p�gina se puede cambiar f�cilmente los grupos que tienen sus mensajes moderados para un perfil de permisos en particular.';
$txt['permissions_post_moderation_deny_note'] = 'Nota: Mientras tiene activado los permisos avanzados no se puede "Denegar permisos" de esta p�gina. Por favor, modifique los permisos directamente si desea denegar permisos.';
$txt['permissions_post_moderation_select'] = 'Seleccionar perfil';
$txt['permissions_post_moderation_new_topics'] = 'Temas Nuevos';
$txt['permissions_post_moderation_replies_own'] = 'Respuestas Propias';
$txt['permissions_post_moderation_replies_any'] = 'Cualquier respuesta';
$txt['permissions_post_moderation_attachments'] = 'Adjuntos';
$txt['permissions_post_moderation_legend'] = 'Leyenda';
$txt['permissions_post_moderation_allow'] = 'Se puede crear';
$txt['permissions_post_moderation_moderate'] = 'Se puede crear pero con aprobaci�n';
$txt['permissions_post_moderation_disallow'] = 'No se puede crear';
$txt['permissions_post_moderation_group'] = 'Grupo';

$txt['auto_approve_topics'] = 'Colocar mensajes, sin necesidad de aprobaci�n';
$txt['auto_approve_replies'] = 'Responder a los mensajes, sin necesidad de aprobaci�n';
$txt['auto_approve_attachments'] = 'Publicar archivos adjuntos, sin necesidad de aprobaci�n';

?>