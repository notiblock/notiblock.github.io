<?php
// Version: 2.0; ManageMembers

global $context;

$txt['groups'] = 'Grupos';
$txt['viewing_groups'] = 'Viendo Miembros de Grupos';

$txt['membergroups_title'] = 'Manejar Grupos de usuarios';
$txt['membergroups_description'] = 'Los grupos de usuarios sirven para agrupar usuarios que tienen la misma configuraci�n de permisos, apariencia, o derechos de acceso. Algunos grupos est�n basados en el n�mero de mensajes que un usuario ha publicado. Puedes asignar a alguien a un grupo seleccionando su perfil y cambiando la configuraci�n de su cuenta.';
$txt['membergroups_modify'] = 'Modificar';

$txt['membergroups_add_group'] = 'Agregar grupo';
$txt['membergroups_regular'] = 'Grupos regulares';
$txt['membergroups_post'] = 'Grupos basados en el conteo de mensajes';

$txt['membergroups_group_name'] = 'Nombre del grupo de usuarios';
$txt['membergroups_new_board'] = 'Foros Visibles';
$txt['membergroups_new_board_desc'] = 'Foros que el grupo de usuarios puede ver.';
$txt['membergroups_new_board_post_groups'] = '<em>Nota: normalmente, los grupos basados en conteo de mensajes no necesitan acceso porque el grupo en el que el usuario se encuentra les dar� acceso.</em>';
$txt['membergroups_new_as_inherit'] = 'heredar de';
$txt['membergroups_new_as_type'] = 'por tipo';
$txt['membergroups_new_as_copy'] = 'en base a';
$txt['membergroups_new_copy_none'] = '(ninguno)';
$txt['membergroups_can_edit_later'] = 'puedes editarlos despu�s.';

$txt['membergroups_edit_group'] = 'Editar Grupo';
$txt['membergroups_edit_name'] = 'Nombre del grupo';
$txt['membergroups_edit_inherit_permissions'] = 'Heredar Permisos';
$txt['membergroups_edit_inherit_permissions_desc'] = 'Selecciona "No" para habilitar al grupo a tener sus propios permisos.';
$txt['membergroups_edit_inherit_permissions_no'] = 'No - Usar Permisos �nicos';
$txt['membergroups_edit_inherit_permissions_from'] = 'Heredar De';
$txt['membergroups_edit_hidden'] = 'Visibilidad';
$txt['membergroups_edit_hidden_no'] = 'Visible';
$txt['membergroups_edit_hidden_boardindex'] = 'Visible - Salvo en grupo';
$txt['membergroups_edit_hidden_all'] = 'Invisible ';
// Do not use numeric entities in the below string.
$txt['membergroups_edit_hidden_warning'] = '�Est�s seguro de que quieres impedir que se asigne este grupo como un grupo primario de usuarios?\\n\\nAl hacerlo, restringir�s el asignamiento s�lo a los grupos adicionales, y actualizar�s todos los usuarios "primarios" como si s�lo tuvieran un grupo adicional.';
$txt['membergroups_edit_desc'] = 'Descripci�n del grupo';
$txt['membergroups_edit_group_type'] = 'Tipo de Grupo';
$txt['membergroups_edit_select_group_type'] = 'Selecciona Tipo de Grupo';
$txt['membergroups_group_type_private'] = 'Privado <span class="smalltext">(La membres�a debe ser asignada)</span>  ';
$txt['membergroups_group_type_protected'] = 'Protegido <span class="smalltext">(Solo los administradores pueden gestionar y asignar)</span>';
$txt['membergroups_group_type_request'] = 'Solicitable <span class="smalltext">(El usuario puede solicitar la membres�a)</span>  ';
$txt['membergroups_group_type_free'] = 'Libre <span class="smalltext">(El usuario puede unirse y abandonar el grupo a gusto)</span>  ';
$txt['membergroups_group_type_post'] = 'Basado en Mensajes <span class="smalltext">(La membres�a est� basada en el conteo de mensajes)</span>  ';
$txt['membergroups_min_posts'] = 'N�mero de mensajes requeridos';
$txt['membergroups_online_color'] = 'Color en la lista de usuarios en l�nea';
$txt['membergroups_star_count'] = 'N�mero de im�genes de estrella';
$txt['membergroups_star_image'] = 'Archivo de imagen de estrella';
$txt['membergroups_star_image_note'] = 'puedes usar $language para usar el idioma del usuario.';
$txt['membergroups_max_messages'] = 'M�x. mensajes privados';
$txt['membergroups_max_messages_note'] = '0 = ilimitado';
$txt['membergroups_edit_save'] = 'Guardar';
$txt['membergroups_delete'] = 'Borrar';
$txt['membergroups_confirm_delete'] = '��Est�s seguro que deseas borrar este grupo?!';

$txt['membergroups_members_title'] = 'Mostrando todos los usuarios del grupo';
$txt['membergroups_members_group_members'] = 'Miembros del Grupo';
$txt['membergroups_members_no_members'] = 'Este grupo se encuantra actualmente vac�o';
$txt['membergroups_members_add_title'] = 'Agregar un usuario a este grupo';
$txt['membergroups_members_add_desc'] = 'Lista de Usuarios a Agregar';
$txt['membergroups_members_add'] = 'Agregar Usuarios';
$txt['membergroups_members_remove'] = 'Eliminarlo del Grupo';
$txt['membergroups_members_last_active'] = 'Ultimo Activo';
$txt['membergroups_members_additional_only'] = 'Agregar como grupo adicional unicamente.';
$txt['membergroups_members_group_moderators'] = 'Moderadores del Grupo';
$txt['membergroups_members_description'] = 'Descripci�n';
// Use javascript escaping in the below.
$txt['membergroups_members_deadmin_confirm'] = 'Est�s seguro que deseas removerte a ti mismo del grupo de Administraci�n?';

$txt['membergroups_postgroups'] = 'Grupos basados en el n�mero de mensajes';
$txt['membergroups_settings'] = 'Configuraci�n de Grupos';
$txt['groups_manage_membergroups'] = 'Grupos permitidos para cambiar grupos';
$txt['membergroups_select_permission_type'] = 'Seleccionar perfil de permisos';
$txt['membergroups_images_url'] = '{URL del tema}/images/ ';
$txt['membergroups_select_visible_boards'] = 'Mostrar foros';
$txt['membergroups_members_top'] = 'Miembros';
$txt['membergroups_name'] = 'Nombre';
$txt['membergroups_stars'] = 'Estrellas';

$txt['admin_browse_approve'] = 'Usuarios que est�n esperando aprobaci�n de sus cuentas';
$txt['admin_browse_approve_desc'] = 'Desde aqu� puedes manejar a todos los usuarios que est�n esperando la aprobaci�n de sus cuentas.';
$txt['admin_browse_activate'] = 'Usuarios que sus cuentas est�n esperando activaci�n';
$txt['admin_browse_activate_desc'] = 'Esta pantalla lista todos los usuarios que a�n no han activado sus cuentas.';
$txt['admin_browse_awaiting_approval'] = 'Esperando Aprobaci�n <span style="font-weight: normal">(%1$d)</span>';
$txt['admin_browse_awaiting_activate'] = 'Esperando Activaci�n <span style="font-weight: normal">(%1$d)</span>';

$txt['admin_browse_username'] = 'Nombre de usuario';
$txt['admin_browse_email'] = 'Direcci�n email';
$txt['admin_browse_ip'] = 'Direcci�n IP';
$txt['admin_browse_registered'] = 'Registrado';
$txt['admin_browse_id'] = 'ID ';
$txt['admin_browse_with_selected'] = 'Seleccionado con';
$txt['admin_browse_no_members_approval'] = 'Ning�n usuario est� esperando aprobaci�n.';
$txt['admin_browse_no_members_activate'] = 'Ning�n usuario tiene actualmente su cuenta pendiente de activar.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = '�Todos los usuarios seleccionados?';
$txt['admin_browse_outstanding_warn'] = '�Todos los usuarios afectados?';
$txt['admin_browse_w_approve'] = 'Aprobar';
$txt['admin_browse_w_activate'] = 'Activar';
$txt['admin_browse_w_delete'] = 'Borrar';
$txt['admin_browse_w_reject'] = 'Rechazar';
$txt['admin_browse_w_remind'] = 'Recordar';
$txt['admin_browse_w_approve_deletion'] = 'Aprobar (Borrar Cuentas)';
$txt['admin_browse_w_email'] = 'y enviar email';
$txt['admin_browse_w_approve_require_activate'] = 'Esperando activaci�n o aprobaci�n';

$txt['admin_browse_filter_by'] = 'Filtrar por';
$txt['admin_browse_filter_show'] = 'Mostrando';
$txt['admin_browse_filter_type_0'] = 'Cuentas nuevas sin activar';
$txt['admin_browse_filter_type_2'] = 'Cambios de Email sin activar';
$txt['admin_browse_filter_type_3'] = 'Nuevas cuentas sin aprobar';
$txt['admin_browse_filter_type_4'] = 'Borrado de cuentas sin aprobar';
$txt['admin_browse_filter_type_5'] = 'Cuentas "debajo de la edad" sin aprobar';

$txt['admin_browse_outstanding'] = 'Usuarios Excepcionales';
$txt['admin_browse_outstanding_days_1'] = 'Con todos los usuarios que se registraron hace m�s de';
$txt['admin_browse_outstanding_days_2'] = 'd�as';
$txt['admin_browse_outstanding_perform'] = 'Realiza la siguiente acci�n';
$txt['admin_browse_outstanding_go'] = 'Realizar Acci�n';

$txt['check_for_duplicate'] = 'Revisar Duplicados';
$txt['dont_check_for_duplicate'] = 'No Revisar Duplicados';
$txt['duplicates'] = 'Duplicados';

$txt['not_activated'] = 'No activados';

?>