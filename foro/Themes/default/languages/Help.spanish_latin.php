<?php
// Version: 2.0; Help

global $helptxt;

$txt['close_window'] = 'Cerrar ventana';

$helptxt['manage_boards'] = '
	<b>Editar foros</b><br />
	En este men� puedes crear/reordenar/eliminar foros, y las categor�as
	arriba de ellos. Por ejemplo, si tienes un amplio sitio web
	que ofrece informaci�n acerca de "Anime", "Carros" y "M�sica",
	�stos deben ser las categor�as a mayor nivel que debes crear. Debajo de esas
	categor�as probablemente desees crear "sub-categorias" jer�rquicas,
	o "Foros" para contener temas dentro de cada uno. Es una jerarqu�a simple, con esta estructura: <br />
	<ul>
		<li>
			<b>Anime</b>
			&nbsp;- Una "categor�a"
		</li>
		<ul>
			<li>
				<b>Dragon Ball</b>
				&nbsp;- Un foro en la categor�a de "Anime"
			</li>
			<ul>
				<li>
					<b>Dragon Ball Z</b>
					&nbsp;- Un subforo dentro del foro de "Dragon Ball"
				</li>
			</ul>
			<li><b>Aa! Megami-sama</b>
			&nbsp;- Un foro dentro de la categor�a de "Anime"</li>
		</ul>
	</ul>
	Las Categor�as te permiten organizar el foro de mensajes en temas ("Anime, Carros"),
	y los "Foros" dentro de ellas son los temas en los cuales los usuarios pueden
	publicar mensajes. En el ejemplo anterior, un usuario interesado en un Audi,
	publicar�a un mensaje en el foro "Carros->Audi". Las Categor�as permiten
	encontrar r�pidamente cuales son sus intereses: En vez de "Tienda" se tienen
	tiendas de "Hardware" y "Electrodomesticos" a las que puedes ir.
	Esto simplifica tu b�squeda por "Pantalla", ya que puedes ir a la "categor�a" de
	tienda de Hardware en vez de la tienda de Electrodom�sticos (donde encontrar�as televisiones de pantalla
	plana en vez de, probablemente, protectores de pantalla para la computadora).<br />

	Como se puede percibir arriba, un foro es una pieza importante dentro de la categor�a.
	Si quieres discutir acerca de "Audi", debes ir a la categor�a "Autos" e ir al foro
	"Audi" para publicar tus mensajes acerca de lo que opinas en ese foro.<br />
	Las funciones administrativas en este men� son para crear nuevos foros en cada
	categor�a, reordenarlas (poner "Audi" abajo de "Ferrari"), o borrar un
	foro completamente.';

$helptxt['edit_news'] = '<ul class="normallist"> <li> <b>Noticias</b><br /> Esta secci�n te permite seleccionar el texto para las noticias que se mostrar�n en el indice del foro. Agrega las noticias que quieras (ej., &quot;No te pierdas la conferencia este Jueves&quot;). Cada noticia ser� mostrada de forma aleatoria y se deber� ingresar en cuadros separados. </li> <li> <b>Boletines</b><br /> Esta secci�n te permite enviar boletines a los miembros del foro a trav�s de mensajes personales o email. Primero selecciona los grupos que recibir�n el bolet�n, y aquellos que no quieres que lo reciban. Si deseas, puedes agregar miembros adicionales y direcciones de email que recibir�n el bolet�n. Finalmente ingresa el mensaje que quieres enviar y elige si se enviar� por mensaje privado o por email. </li> <li> <b>Configuraci�n</b><br /> Esta secci�n contiene algunas configuraciones relativas a las noticias y los boletines, incluyendo la opci�n de que grupos podr�n editar y enviar boletines. Tambi� puedes configurar si se habilitaran los news feeds en el foro y su longitud (cuantos caracteres se mostrar�n) de cada nuevo mensaje en un news feed. </li> </ul> ';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>Ver todos los usuarios</b><br />
			Ver todos los usuarios en el foro de mensajes. Se te presenta una lista con hiperv�nculo, de todos
			los nombres de los usuarios. Puedes hacer clic en cualquiera de los nombres para obtener mayores
			detalles de un usuario en especial (sitio web, edad, sexo, etc), y como Administrador, puedes modificar
			cualquiera de esos datos. Tienes un total control sobre los usuarios, incluyendo la posibilidad de
			borrarlos del foro de mensajes.<br /><br />
		</li>
		<li>
			<b>Esperando aprobaci�n</b><br />
			Esta secci�n se muestra solamente si tienes activado que los administradores aprueben todos los nuevos registros de usuarios. Cualquiera que se registre para unirse a tu
			foro se volver� un usuario completo cuando haya sido aprobado por un administrador. La secci�n muestra todos aquellos usuarios que
			est�n esperando aprobaci�n, junto con su email y direcci�n IP. Tu puedes escoger ya sea aceptar y rechazar (borrar)
			cualquier usuario en la lista al seleccionar el cuadro al lado del usuario, y seleccionando la acci�n del cuadro colapsable al final
			de la pantalla. Cuando rechaces un usuario, puedes escoger borrar el usuario con o sin notificarle de tu decisi�n.<br /><br />
		</li>
		<li>
			<b>Esperando activaci�n</b><br />
			Esta secci�n ser� visible solamente si tienes activado en el foro el que los usuarios activen sus cuentas. Esta secci�n listar� todos los
			usuarios que no han activado sus nuevas cuentas. Desde esta pantalla puedes escoger aceptar, rechazar o recordarles a los
			usuarios con registros pendientes. Como en la opci�n anterior, puedes escoger enviarle email al usuario para informarle de la
			acci�n que hayas tomado.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Usuarios con acceso prohibido</b><br />
	SMF permite "banear" o "restringir el acceso" a usuarios, para prevenir el acceso a personas que han violado
	la confianza del foro de mensajes, al hacer spam, ser groseros, etc. Esto te permite restringirles el
	acceso a los usuarios que no desees mas en tu foro de mensajes. Como administrador, cuando ves los mensajes,
	puedes ver el IP de cada usuario que utiliz� cuando public� el mensaje. En la lista de accesos prohibidos,
	simplemente introduce la direcci�n IP, guarda los cambios, y ellos no podr�n accesar el foro desde ese IP.<br />
	Tambi�n puedes restringir el acceso de usuarios usando su direcci�n de email, o su nombre de usuario.';

$helptxt['featuresettings'] = '<b>Caracter�sticas y opciones</b><br /> Hay varias caracter�sticas en esta secci�n que pueden ser modificadas como prefieras.';

$helptxt['securitysettings'] = '<b>Seguridad y moderaci�n</b><br /> Esta secci�n contiene par�metros para la seguridad y moderaci�n de tu foro.';

$helptxt['modsettings'] = '<b>Config. y Opciones de \'Mods\' instalados</b><br />
	SMF tiene algunos mods preinstalados, puedes activarlos o desactivarlos desde este men�.';

$helptxt['number_format'] = '<b>Formato de N�meros</b><br />
	Puedes ajustar c�mo los n�meros ser�n mostrados al usuario.  El formato es:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Donde \',\' es el car�cter utilizado para dividir los grupos de miles, \'.\' es el caracter utilizado como el punto decimal y el n�mero de ceros indica la exactit�d de los redondeos.';

$helptxt['time_format'] = '<b>Formato de Hora</b><br />
	Puedes ajustar como visualizar�s la hora y la fecha. Hay muchas palabras, pero es relativamente f�cil.
	El formato sigue las especificaciones de la funcion strftime de PHP, y se describen a continuaci�n (m�s detalles pueden encontrarse en <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	Los siguientes caracteres se reconocen en la cadena del formato:<br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - nombre abreviado del d�a de la semana <br />
	&nbsp;&nbsp;%A - nombre completo del d�a de la semana <br />
	&nbsp;&nbsp;%b - nombre abreviado del mes <br />
	&nbsp;&nbsp;%B - nombre completo del mes <br />
	&nbsp;&nbsp;%d - d�a del mes (01 a 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - lo mismo que %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - d�a del mes (1 a 31) <br />
	&nbsp;&nbsp;%H - hora usando formato de 24 horas (rango 00 a 23) <br />
	&nbsp;&nbsp;%I - hora usando formato de 12 horas (rango 01 a 12) <br />
	&nbsp;&nbsp;%m - mes como n�mero (01 a 12) <br />
	&nbsp;&nbsp;%M - minuto como n�mero <br />
	&nbsp;&nbsp;%p - "am" o "pm" de acuerdo a la hora actual<br />
	&nbsp;&nbsp;%R<b>*</b> - hora en formato de 24 horas <br />
	&nbsp;&nbsp;%S - segundos como n�mero decimal <br />
	&nbsp;&nbsp;%T<b>*</b> - hora actual, de la misma manera que %H:%M:%S <br />
	&nbsp;&nbsp;%y - a�o en formato de 2 d�gitos (00 a 99) <br />
	&nbsp;&nbsp;%Y - a�o en formato de 4 d�gitos <br />
	&nbsp;&nbsp;%Z - zona horaria o nombre o abreviaci�n <br />
	&nbsp;&nbsp;%% - car�cter \'%\'  <br />
	<br />
	<i>* No funciona en servidores Windows.</i></span>';

$helptxt['live_news'] = '<b>Anuncios en vivo</b><br />
	Este cuadro muestra los anuncios recientemente actualizados desde <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.
	Debes revisar aqu� de vez en cuando por actualizaciones, nuevas versiones, e informaci�n importante del equipo de Simple Machines.';

$helptxt['registrations'] = '<b>Manejo del Registro de Usuarios</b><br />
	Esta secci�n contiene todas las funciones que pueden ser necesarias para manejar nuevos registros de usuarios en el foro. Contiene hasta tres
	secciones que son visibles dependiendo de la configuraci�n de tu foro. �stas son:<br /><br />
	<ul>
		<li>
			<b>Registrar Nuevo usuario</b><br />
			Desde esta pantalla puedes escoger registrar nuevas cuentas en nombre de los nuevos usuarios. Esto puede ser �til en foros donde el registro est� cerrado
			para nuevos usuarios, o en casos donde el administrador desea crear una cuenta de prueba. Si la opci�n de requerir activaci�n de la cuenta
			est� seleccionada, se le enviar� un email al usuario, con un enlace al que se le deber� hacer clic antes de que puedan usar la cuenta. Asimismo, puedes
			seleccionar el enviar por email al usuario una nueva contrase�a a su direcci�n de email.<br /><br />
		</li>
		<li>
			<b>Editar Carta de Aceptaci�n al registrarse</b><br />
			Esto te permite establecer el texto para la carta de aceptaci�n mostrada a los usuarios cuando est�n en
			el proceso de registro para obtener una cuenta en tu foro de mensajes.
			Puedes cambiar cualquier texto de la carta de aceptaci�n original que se incluye en SMF.
		</li>
		<li>
			<b>Configuraci�n</b><br />
			Esta secci�n ser� visible solamente si tienes permisos para administrar el foro. Desde esta pantalla puedes decidir el m�todo de registro
			que ser� usado en tu foro, as� como algunas otras configuraciones.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Log de Moderaci�n</b><br />
	Esta secci�n le permite a los administradores mantenerse al tanto de todas las acciones de moderaci�n que los moderadores del foro han realizado. Para asegurarse que
	los moderadores no puedan eliminar las referencias a las acciones que ellos han realizado, las entradas no pueden eliminarse hasta 24 horas despu�s de que la acci�n se haya realizado.
	La columna \'objetos\' lista cualquier variable asociada con la acci�n.';
$helptxt['adminlog'] = '<b>Registro de acciones de administraci�n</b><br /> Esta secci�n permite a los miembros del equipo de administraci�n revisar acciones administrativas del foro. Para asegurar que los administradores no borren sus propias acciones, el registro no podr� borrarse hasta despu�s de 24 horas.';
$helptxt['warning_enable'] = '<b>Usuario del Sistema de Alerta</b><br />
	Esta caracter�stica le permite a los miembros del equipo de administraci�n y moderaci�n emitir advertencias a los usuarios - y utilizar un nivel de advertencia para determinar las
acciones disponibles para ellos en el foro. Al activar esta funci�n el permiso estar� disponible dentro de la secci�n de permisos para definir
que los grupos pueden asignar las advertencias a los usuarios. los niveles de alerta se puede ajustar desde un perfil de usuarios. Las siguientes opciones adicionales est�n disponibles:
	<ul>
		<li>
			<b>Nivel de Alerta de Vigilancia del usuario</b><br />
			Este ajuste define el porcentaje de advertencia que un usuario debe alcanzar para autom�ticamente asignar "un reloj" al usuario.
			Cualquier usuario que est� siendo "vigilados" aparecer� en la zona correspondiente del centro de moderaci�n.
		</li>
		<li>
			<b>Nivel de Alerta de Vigilancia para moderacion de Post</b><br />
			Cualquier usuario que pasa el valor de este ajuste encontrar� que todos sus postes requieren la aprobaci�n de Moderador antes de que ellos aparezcan a la comunidad de foro. 
			Esto anular� cualquier permiso de tabla local que puede existir relacionado para fijar la moderaci�n.
		</li>
		<li>
			<b>Nivel de Alerta de Vigilancia del usuario multi</b><br />
			Si este nivel de advertencia es pasado por un usuario ellos se encontrar�n en una prohibici�n de post. El usuario perder� todos los derechos de Postear.
		</li>
		<li>
			<b>Nivel de Alerta de Vigilancia Maximo usuarios por dia</b><br />
      Esta configuraci�n limita la cantidad de puntos que un moderador puede agregar o quitar a cualquier usuario en particular en un per�odo de veinticuatro horas.
			Esto se puede utilizar para limitar lo que un moderador puede hacer en un corto per�odo de tiempo. Esta configuraci�n se puede desactivar el ajuste a un valor de cero.
			Tenga en cuenta que cualquier usuario con permisos de administrador no se ven afectados por este valor.
		</li>
	</ul>';
$helptxt['error_log'] = '<b>Registro de Errores</b><br />
	El Registro de errores rastrea cualquier error grave encontrado por usuarios al usar tu foro. Lista todos esos errores por fecha, que puede ser usada para ordenar
	al hacer clic en la flecha negra al lado de cada fecha. Asimismo, puedes filtrar los errores al hacer clic en la imagen al lado de cada estad�stica de error. Esto
	te permite filtrar, por ejemplo, por usuario. Cuando un filtro est� activo, solamente los resultados que concuerden con el filtro, ser�n mostrados.';
$helptxt['theme_settings'] = '<b>Configuraci�n del Tema</b><br />
	La pantalla de configuraci�n te permite cambiar las configuraci�n espec�fica de un tema. Esta configuraci�n incluye opciones tales como el directorio de los temas e informaci�n de URLs pero tambi�n
	opciones que afectan el dise�o de un tema en tu foro. La mayor�a de los temas tendr�n una variedad de opciones configurables por el usuario, permiti�ndote adaptar un tema
	para satisfacer las necesidades individuales de tu foro.';
$helptxt['smileys'] = '<b>Centro de Smileys</b><br />
	Aqu� puedes agregar y eliminar smileys as� como conjuntos de smileys. Es importante mencionar que si un smiley est� en un conjunto, debe estar en todos los conjuntos - de otra manera, podr�a
	ser confuso para tus usuarios cuando utilicen diferentes conjuntos.';
$helptxt['calendar'] = '<b>Administrar Calendario</b><br />
	Aqu� puedes modificar la configuraci�n del calendario, asi como agregar y eliminar los d�as festivos que aparecen en el calendario.';

$helptxt['serversettings'] = '<b>Configuraci�n del Servidor</b><br />
	Aqu� puedes realizar la configuraci�n principal de tu foro. Esta secci�n incluye la configuraci�n de la base de datos y URLs, as� como otros elementos importantes de la configuraci�n como la configuraci�n del correo y el cach�s. S� cuidadoso al editar estas configuraciones porque un error podr�a dejar inaccesible el foro';
$helptxt['manage_files'] = '<ul class="normallist">  <li>  <b>Navegar Archivos</b><br />  Navega en el directorio de adjuntos, avatares y thumbnails almacenados por SMF.<br /><br />  </li><li>  <b>Configuraci�n de Adjuntos</b><br />  Configura donde ser�n almacenados los adjuntos y establece restriciones en el tipo de archivo.<br /><br />  </li><li>  <b>Configuraci�n de Avatares</b><br />  Configura donde ser�n almacenados los avatares y maneja el tama�o de los mismos.<br /><br />  </li><li>  <b>Mantenimiento de Archivos</b><br />  Comprueba y repara cualquier error en el directorio de adjuntos y borra los adjuntos seleccionados.<br /><br />  </li>  </ul>  ';

$helptxt['topicSummaryPosts'] = 'Esto te permite especificar el n�mero de mensajes anteriores mostrados en el sumario de temas, en la pantalla de responder.';
$helptxt['enableAllMessages'] = 'Establece esto al n�mero <em>m�ximo</em> de mensajes que un tema puede tener para mostrar el enlace <i>todos</i>.  Si estableces este valor menor al de "M�ximo n�mero de mensajes a mostrar en una p�gina de Tema" lo unico que conseguir�s es que nunca se muestre, y si lo estableces muy alto, puede alentar tu foro.';
$helptxt['enableStickyTopics'] = 'Mensajes fijados son temas que permanecen en la parte superior de la lista de mensajes.
	Son usados generalmente para mensajes importantes. Solamente moderadores y administradores pueden fijar un tema.';
$helptxt['allow_guestAccess'] = 'El desseleccionar esta opci�n limitar� a los visitantes a hacer solamente las funciones mas b�sicas - ingresar, registrarse, recordar contrase�a, etc - en tu foro.  Esto NO es lo mismo que deshabilitar el acceso de los visitantes a los foros.';
$helptxt['userLanguage'] = 'Al activar esta opci�n, los usuarios pueden seleccionar el archivo de idioma que usar�n.
	Esto no afectar� la selecci�n predeterminada.';
$helptxt['trackStats'] = 'Estad�sticas:<br />Esto permite a los usuarios ver los �ltimos mensajes, y los temas mas populares de tu foro de mensajes.
	Tambi�n muestra varias estad�sticas, como el m�ximo de usuarios conectados al mismo tiempo, nuevos usuarios, y nuevos temas.<hr />
	P�ginas vistas:<br />Agrega otra columna a la p�gina de estad�sticas con el numero de p�ginas vistas en tu foro.';
$helptxt['titlesEnable'] = 'Activando los T�tulos Personalizados le permitir� a los usuarios que cuenten con el permiso respectivo, el especificar un t�tulo especial por ellos mismos.
	�ste se mostrar� debajo del nombre.<br /><i>ej.:</i><br />Omar<br />Saiya-jin';
$helptxt['topbottomEnable'] = 'Esto agregar� los botones ir arriba y abajo, para que los usuarios puedan ir a la parte superior e inferior de la p�gina sin
	hacer scroll.';
$helptxt['onlineEnable'] = 'Est mostr� una imagen indicando si el usuario est� conectado o no.';
$helptxt['todayMod'] = 'Esto mostrar� \'Hoy\' o \'Ayer\' en vez de la fecha.';
$helptxt['disableCustomPerPage'] = 'Marca esta opci�n para impedir que los usuarios personalicen la cantidad de mensajes y temas por p�gina en el �ndice de mensajes y el despliegue de temas respectivamente.';
$helptxt['enablePreviousNext'] = 'Esto mostrar� un enlace al tema anterior y al siguiente.';
$helptxt['pollMode'] = 'Esto especifica si las encuestas est�n activadas o no: Si las encuestas est�n desactivadas, cualquier encuesta ya existente ser� oculta
		del listado de temas. Puedes escoger el continuar mostrando los temas sin su encuesta asociada a ellos seleccionando
		"Mostrar Encuestas existentes como Temas".Para seleccionar qui�n puede publicar encuestas, ver encuestas, y otras cosas, puedes
		permitir o restringir sus permisos. Recuerda esto si las encuestas no est�n funcionando.';
$helptxt['enableVBStyleLogin'] = 'Esto mostrar� un cuadro para ingresar tu usuario/contrase�a en la parte inferior del foro de mensajes.';
$helptxt['enableCompressedOutput'] = 'Esta opci�n compactar� la salida para reducir el consumo de ancho de banda,
	pero necesita que zlib est� instalado en el servidor.';
$helptxt['disableTemplateEval'] = 'En forma predeterminada, los templates son evaluados en lugar de ser incluidos. Esto se hace para mostrar informaci�n que pueda ayudar a solucionar ciertos problemas en caso de que el template contenga un error.<br /><br /> En foros muy grandes, esta acci�n puede alentarse significativamente, por lo tanto, usuarios con experiencia quiz� quieran desactivarla.';
$helptxt['databaseSession_enable'] = 'Esta opci�n hace uso de la base de datos para guardar informaci�n de sesiones - es mejor para servidores con la carga balanceada, pero ayuda con todos los problemas de timeout y puede hacer m�s r�pido al foro.  No funciona si session.auto_start est� activado.';
$helptxt['databaseSession_loose'] = 'Activando esta opci�n decrementar� el ancho de banda que consume tu foro, y hace que al hacer <i>clic</i> en atr�s no recargue la p�gina - lo malo de esto es que los (nuevos) iconos no se actualizar�n, entre otras cosas. (a menos que hagas <i>clic</i> en esa p�gina en vez de regresar a ella.)';
$helptxt['databaseSession_lifetime'] = 'Este es el n�mero de segundos que durar�n las sesiones despu�s que no hayan sido accesadas.  Si una sesi�n no es accesada por mucho tiempo, se dice que ha "expirado".  Se recomienda cualquier valor arriba de 2400.';
$helptxt['enableErrorLogging'] = 'Esto registrar� (log) cualquier error, como un ingreso de usuario inv�lido, para que puedas ver que sali� mal.';
$helptxt['enableErrorQueryLogging'] = 'Esto incluir� la consulta completa enviada a la base de datos. Requiere la activaci�n del registro de errores
<br /><br /><strong>Nota: esto afectar� la capacidad de filtrar el registro de errores por errores de mensaje.</strong>';
$helptxt['allow_disableAnnounce'] = 'Permite a los usuarios desactivar la notificaci�n de temas que anuncies marcando "anunciar tema" al publicar.';
$helptxt['disallow_sendBody'] = 'Esta opci�n elimina la posibilidad de recibir el texto de las respuestas y los mensajes en los emails de notificaci�n.<br /><br />Es com�n que los usuarios, por error, respondan a los emails de notificaci�n, lo que significa en la mayor�a de las veces que el webmaster recibe la respuesta.';
$helptxt['compactTopicPagesEnable'] = 'Esto mostrar� como se mostrar� la selecci�n de las p�ginas.<br /><i>Ej.:</i>
		"3" para mostrar: 1 ... 4 [5] 6 ... 9 <br />
		"5" para mostrar: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Esto mostrar� en la parte inferior del foro, el tiempo en segundos que SMF necesit� para crear la p�gina.';
$helptxt['removeNestedQuotes'] = 'Esto mostrar� solamente una cita del mensaje en cuesti�n, pero no cualquier otro que haya estado presente de otros mensajes.';
$helptxt['simpleSearch'] = 'Esto mostrar� una forma de b�squeda simple, con un enlace a una forma para b�squedas avanzadas.';
$helptxt['max_image_width'] = 'Esto te permitir� establecer el m�ximo de una imagen publicada. Im�genes mas peque�as que el m�ximo no son afectadas.';
$helptxt['mail_type'] = 'Esta opci�n te permite escoger entre usar las opciones por defecto de PHP, o sobreescribirlas con SMTP.  PHP no soporta el usar autentificaci�n con SMTP (que en la actualidad, muchos servidores lo requieren) asi que, de necesitarlo, selecciona SMTP.  Recuerda que SMTP puede ser m�s lento, y algunos servidores no toman nombres de usuarios y contrase�as.<br /><br />No necesitas llenar los valores de SMTP, si esta opci�n est� utilizando los valores por defecto de PHP.';
$helptxt['attachment_manager_settings'] = 'Los adjuntos son archivos que los usuarios pueden subir junto a los mensajes.<br /><br /> <b>Revisar extensi�n del adjunto.</b>:<br /> �Deseas revisar la extensi�n de los archivos?<br /> <b>Extensiones de archivo permitidas</b>:<br /> Puedes determinar las extensiones de archivo v�lidas para subir.<br /> <b>Directorio de adjuntos</b>:<br /> La ruta de la carpeta de adjuntos <br />(ejemplo: /home/sites/yoursite/www/forum/adjuntos)<br /> <b>Tama�o m�ximo de la carpeta de adjuntos</b> (en KB):<br /> Selecciona cu�n grande puede ser la carpeta de adjuntos, incluyendo los archivos en ella.<br /> <b>Tam�ano m�ximo de adjunto por mensaje</b> (en KB):<br /> Selecciona el tama�o m�ximo que pueden tener los archivos subidos. Si es menor que el l�mite por adjunto, se usar� este l�mite.<br /> <b>Tama�o m�ximo por adjunto</b> (en KB):<br /> Selecciona el tama�o m�ximo que puede tener cada archivo adjunto.<br /> <b>L�mite de adjuntos por mensaje</b>:<br /> Selecciona la cantidad de adjuntos por mensaje que un usuario puede subir.<br /> <b>Mostrar adjunto como imagen en los mensajes</b>:<br /> Si el archivo subido es una imagen, esta opci�n lo mostrar� al final del mensaje.<br /> <b>Redimensionar im�genes cuando se muestran debajo del mensaje</b>:<br /> Si la opci�n anterior es habilitada, esto generar� y mostrar� una imagen m�s peque�a para ahorrar ancho de banda.<br /> <b>Dimensiones m�ximas para la imagen miniatura</b>:<br /> S�lo utilizable con la opci�n "Redimensionar im�genes cuando se muestran debajo del mensaje", indica cu�les son las dimensiones m�ximas de ancho y alto. Se mantendr� la relaci�n de aspecto.';
$helptxt['attachment_image_paranoid'] = 'Seleccionar esta opci�n habilitar� revisiones muy estrictas de seguridad en los archivos adjuntos que sean im�genes. Advertencia! Estas revisiones extensivas pueden fallar a�n en im�genes v�lidas. Se recomienda ampliamente solamente usar esta opci�n junto con la funcionalidad de recodificado de im�genes, para que SMF intente muestrear nuevamente las im�genes que fallen la revisi�n de seguridad: en caso de pasar la prueba, ellas ser�n desinfectadas y subidas al servidor. Caso contrario, si la funcionalidad de recodificado de im�genes no est� habilitada, todos los archivos adjuntos que sean im�genes que fallen la revisi�n ser�n rechazados.';
$helptxt['attachment_image_reencode'] = 'Seleccionar esta opci�n habilitar� la funcionalidad de recodificar los archivos adjuntos que sean im�genes. La recodificaci�n de im�genes ofrece una mejor seguridad. Es importante mencionar que la recodificaci�n tambi�n afectar� las im�genes animadas, convirti�ndolas en est�ticas. <br /> Esta funcionalidad solo es posible si el m�dulo GD est� instalado en tu servidor.';
$helptxt['avatar_paranoid'] = 'Seleccionar esta opci�n habilitar� revisiones muy estrictas de seguridad en los avatares. Advertencia! Estas revisiones extensivas pueden fallar a�n en im�genes v�lidas. Se recomienda ampliamente solamente usar esta opci�n junto con la funcionalidad de recodificado de avatares, para que SMF intente muestrear nuevamente las im�genes que fallen la revisi�n de seguridad: en caso de pasar la prueba, ellas ser�n desinfectadas y subidas al servidor. Caso contrario, si la funcionalidad de recodificado de avatares no est� habilitada, todos los avatares que fallen la revisi�n ser�n rechazados.';
$helptxt['avatar_reencode'] = 'Seleccionar esta opci�n habilitar� la funcionalidad de recodificar los avatares.  La recodificaci�n de im�genes ofrece una mejor seguridad. Es importante mencionar que la recodificaci�n tambi�n afectar� las im�genes animadas, convirti�ndolas en est�ticas. <br /> Esta funcionalidad solo es posible si el m�dulo GD est� instalado en tu servidor.';
$helptxt['karmaMode'] = 'Karma es una funci�n que muestra la popularidad de un usuario Los usuarios, si tienen el permiso correspondiente, pueden
		\'aplaudir\' or \'castigar\' a otros usuarios, que es como su popularidad es calculada. Puedes cambiar el
		n�mero de mensajes necesarios para tener "karma", el tiempo entre castigos o aplausos, y si los administradores
		tienen que esperar este tiempo tambi�n.<br /><br />El que grupos de usuarios puedan castigar a otros se contola a trav�s
		de un permiso. Si tienes problemas al tratar de hacer funcionar esta opci�n para todo mundo, deber�as revisar nuevamente tus permisos.';
$helptxt['cal_enabled'] = 'El calendario puede ser usado para mostrar cumplea�os, o momentos importantes en tu foro.<br /><br />
		<strong>Mostrar d�as como enlaces a \'Publicar evento\'</strong>:<br />Esto le permite a los usuarios publicar eventos para ese d�a, cuando ellos hagan <i>clic en esa fecha</i><br />
		<strong>Mostrar n�meros de semana</strong>:<br />Mostrar cual semana del a�o es.<br />
		<strong>M�ximo de d�as adelantados en el �ndice del foro</strong>:<br />Si le pones 7, todos los eventos de la pr�xima semana se mostrar�n.<br />
		<strong>Mostrar d�as festivos en el �ndice del foro</strong>:<br />Muestra los dias festivos del d�a de hoy en una barra del calendario en el �ndice del foro.<br />
		<strong>Mostrar cumplea�os en el �ndice del foro</strong>:<br />Muestra los cumplea�os del d�a de hoy en una barra del calendario en el �ndice del foro.<br />
		<strong>Mostrar eventos en el �ndice del foro</strong>:<br />Muestra los eventos del d�a de hoy en una barra del calendario en el �ndice del foro.<br />
		<strong>Foro predeterminado donde se publicar�n</strong>:<br />�Cu�l es el foro predeterminado en el que se publicar�n los eventos?<br />
		<strong>A�o m�nimo</strong>:<br />Selecciona el "primer" a�o en la lista del calendario.<br />
		<strong>A�o m�ximo</strong>:<br />Selecciona el "�ltimo" a�o en la lista del calendario<br />
		<strong>Color para los cumplea�os</strong>:<br />Selecciona el color del texto cuando se muestren cumplea�os<br />
		<strong>Color para los eventos</strong>:<br />Selecciona el color del texto cuando se muestren eventos<br />
		<strong>Color para d�as festivos</strong>:<br />Selecciona el color del texto cuando se muestren d�as festivos<br />
		<strong>Permitir que los eventos se extiendan varios d�as</strong>:<br />Seleccionalo para permitir que los eventos se expandan m�ltiples d�as.<br />
		<strong>N�mero m�ximo de d�as que un evento puede expandirse</strong>:<br />Selecciona el m�ximo n�mero de d�as que un evento puede expandirse.<br /><br />
		Recuerda que el uso del calendario (publicar eventos, ver eventos, etc.) est� controlado por los permisos especificados en la pantalla de permisos.';
$helptxt['localCookies'] = 'SMF usa cookies para guardar informaci�n al ingresar, en la computadora del usuario.
	Las cookies pueden guardarse globalmente (<i>tusitio.com</i>) o localmente (<i>tusitio.com/ruta/al/foro</i>).<br />
	Selecciona esta opci�n si estas teniendo problemas con usarios que est�n siento sacados de tu foro de mensajes automaticamente.<hr />
	Cookoes almacenadas globalmente son menos seguras cuando se usan en un servidor web compartido (como Tripod).<hr />
	Cookies locales no funcionan afuera del directorio del foro, asi que si tu foro est� almacenado en <i>www.tusitio.com/foro</i>, p�ginas como <i>www.tusitio.com/index.php</i> no pueden accesar la informaci�n de la cuenta.
	Especialmente cuando se usa SSI.php, se recomienda el uso de cookies globales.';
$helptxt['enableBBC'] = 'El seleccionar esta opci�n le permitir� a tus usuarios el poder utilizar Bulletin Board Code (BBC) en el foro, permitiendoles darle formato a sus mensajes con im�genes, estilos de texto, y m�s.';
$helptxt['time_offset'] = 'No todos los administradores de los foros necesitan que el foro use la misma zona horaria que el servidor en el que est� hospedado. Usa esta opci�n para especificar una diferencia horaria (en horas) en la que el foro debe operar, comparada con la hora del servidor. Son permitidos valores negativos y decimales.';
$helptxt['default_timezone'] = 'La zona horaria del servidor le dice al PHP donde est� localizado tu servidor. Aseg�rate que est� bien configurado, preferiblemente ajustado al pa�s o ciudad donde est� alojado el servidor. Puedes encontrar m�s informaci�n en <a href="http://uk.php.net/manual/en/timezones.php" target="_blank">el sitio PHP</a> (en ingl�s).';
$helptxt['spamWaitTime'] = 'Aqu� puedes seleccionar el tiempo de debe transcurrir entre publicaci�n de mensajes. Esto puede utilizarse para evitar que las personas hagan spam en tu foro, al limitarles qu� tan seguido pueden publicar mensajes.';

$helptxt['enablePostHTML'] = 'Esto permitir� el publicar mensajes tags b�sicos de HTML:
	&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;pre&gt;, &lt;blockquote&gt;, &lt;img src="" /&gt;, &lt;a href=""&gt;, y &lt;br /&gt;.';

$helptxt['themes'] = 'Aqu� puedes escoger si el usuario puede seleccionar temas, qu� tema ser� usado por los invitados,
	entre varias opciones. Haz <i>clic</i> en cualquiera de los temas de la derecha para cambiar su configuraci�n.';
$helptxt['theme_install'] = 'Esto te permite instalar nuevos temas.  Puedes hacerlo desde un directorio previamente creado, subiendo el archivo para el tema, o copiando el tema predeterminado.<br /><br />Toma en cuenta que el archivo o directorio debe tener el archivo de definici�n <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Esta opci�n le permitir� a tus usuarios usar Flash dentro de sus mensajes,
	como si fueran im�genes.  Esto es un posible riesgo de seguridad, aunque pocos han podido explorarlo.
	�USALO
	 BAJO TU PROPIO RIESGO!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Permite crear un enlace a las <a href="%s?action=.xml;sa=news">Noticas Recientes</a>
	y datos similares.  Se recomienda que limites el tama�o de los mensajes/noticias porque cuando los datos rss se muestran
	en algunos clientes como Trillian, se trunca la informaci�n.';
$helptxt['hotTopicPosts'] = 'Cambia el n�mero de mensajes en un tema necesarios para alcanzar el estado de "caliente" o
	"muy caliente".';
$helptxt['globalCookies'] = 'Permite el uso de cookies independientes de subdominio.  Por ejemplo, si...<br />
	Tu sitio est� en http://www.simplemachines.org/,<br />
	Y tu foro est� en http://foro.simplemachines.org/,<br />
	Usando esta modificaci�n, te permitir� accesar las cookies del foro en tu sitio.';
$helptxt['secureCookies'] = 'Activando esta opci�n forzar�s las cookies creadas por los usuarios de tu foro a ser marcadas como seguras. Solo activa esta opci�n si est�s usando HTTPS en tu sitio, de lo contrario corromper�s el manejo de cookies!';
$helptxt['securityDisable'] = 'Esto <i>desactiva</i> la revisi�n adicional de contrase�a para acceder la secci�n de administraci�n. �NO es recomendable!';
$helptxt['securityDisable_why'] = 'Esta es tu contrase�a actual. (la misma que usas para ingresar.)<br /><br />El que tengas que escribirla ayuda a asegurarnos que realmente desees realizar la tarea administrativa que est�s realizando,y que eres <b>t�</b> realmente.';
$helptxt['emailmembers'] = 'En este mensaje puedes usar algunas "variables".  �stas son:<br />
	{\\$board_url} - El URL de tu foro.<br />
	{\\$current_time} - La hora actual.<br />
	{\\$member.email} - El correo electr�nico del usuario destino.<br />
	{\\$member.link} - El enlace del usuario destino.<br />
	{\\$member.id} - El ID del usuario destino.<br />
	{\\$member.name} - El nombre del usuario destino.  (mayor personalizaci�n)<br />
	{\\$latest_member.link} - El enlace al �ltimo usuario registrado.<br />
	{\\$latest_member.id} - El ID del �ltimo usuario registrado.<br />
	{\\$latest_member.name} - El nombre del �ltimo usuario registrado.';
$helptxt['attachmentEncryptFilenames'] = 'Encriptar los nombres de los attachments te permite tener m�s de un archivo subido como attachment
	con el mismo nombre. Para mayor seguridad usa archivos .php para bajar los archivos adjuntos.  Sin embargo, hace m�s dif�cil reconstruir
	la base de datos si algo dr�stico sucede.';

$helptxt['failed_login_threshold'] = 'Especifica el n�mero de intentos fallidos de ingreso, antes de redireccionarlos a la pantalla de recordatorio de contrase�as.';
$helptxt['oldTopicDays'] = 'Si esta opci�n est� activada se le mostrar� al usuario una advertencia cuando intente responder a un tema que no ha tenido nuevas respuestas por el tiempo especificado, en d�as, en esta opci�n. Pon 0 para desactivar esta funci�n.';
$helptxt['edit_wait_time'] = 'N�mero de segundos que deben transcurrir despu�s de la publicaci�n de un mensaje, para que se registre la fecha de la �ltima modificaci�n.';
$helptxt['edit_disable_time'] = 'N�mero de minutos transcurridos permitidos antes de que un usuario no pueda continuar editando un mensaje que ellos han publicado. Pon 0 para desactivarlo. <br /><br /><i>Note: Esto no tendr� efecto en los usuarios que tengan el permiso para editar los mensajes de otros usuarios.</i>';
$helptxt['posts_require_captcha'] = 'This setting will force users to enter a code shown on a verification image each time they make a post to the board. Only users with a post count below the number set will need to enter the code - this should help combat automated spamming scripts.';
$helptxt['enableSpellChecking'] = 'Activar la revisi�n de ortograf�a. DEBES tener la librer�a pspell instalada en tu servidor y configurado PHP para la utilice. Tu servidor ' . (function_exists('pspell_new') == 1 ? 'SI' : 'NO') . ' parece que tenga esta opci�n configurada.';
$helptxt['disable_wysiwyg'] = 'Esta opci�n impide a los usuarios usar el editor WYSIWYG ("What You See Is What You Get", Lo que ves es lo que obtienes) en la p�gina de mensajes.';
$helptxt['lastActive'] = 'Especifica el n�mero de minutos en los que, antes de ese tiempo, un usuario se sigue mostrando activo en el �ndice del foro. El predeterminado son 15 minutos.';

$helptxt['customoptions'] = 'Esta secci�n define las opciones que un usuario puede elegir de una lista desplegable. Hay algunos puntos clave que deben tenerse en esta secci�n:
	<ul>
		<li><b>Opcion Predeterminada:</b> Sea cual sea el cuadro de opci�n tiene el bot�n de radio "junto a �l, seleccionada ser� la selecci�n predeterminada para el usuario al entrar en su perfil.</li>
		<li><b>Extracci�n de Opciones:</b> Para eliminar una opci�n simplemente vaciar el cuadro de texto para esa opci�n - a todos los usuarios que han seleccionado su opci�n desactivada.</li>
		<li><b>Reordenaci�n de Opciones:</b> Puede reordenar las opciones. Sin embargo - una nota importante - debe asegurarse de <b>no</b> cambiar las opciones de reordenamiento como datos de usuario de otro modo se perder�.</li>
	</ul>';

$helptxt['autoOptDatabase'] = 'Esta opci�n optimiza automaticamente la base de datos cada X d�as.  Especifica 1 para realizar una optimizaci�n diaria.  Asimismo, puedes especificar un m�ximo n�mero de usuarios en l�nea, para que no sobrecargues tu servidor o incomodes a muchos usuarios.';
$helptxt['autoFixDatabase'] = 'Esto arreglar� autom�ticamente tablas en la base de datos con problemas, y continuar� como si nada hubiera sucedido.  Esto puede ser �til, ya que la �nica manera de arreglar este tipo de problemas, es REPARANDO la tabla, y tu foro no estar� ca�do hasta que te des cuenta.  Se te enviar� un email cuando esto suceda.';

$helptxt['enableParticipation'] = 'Esto muestra un peque�o icono en los temas en que el usuario ha publicado mensajes.';

$helptxt['db_persist'] = 'Mantiene la conexi�n activa para incrementar el rendimiento.  Si tu NO est�s en un servidor dedicado, esto puede causarte problemas con tu proveedor de hospedaje.';
$helptxt['ssi_db_user'] = 'Par�metro opcional para usar un nombre de usuario y contrase�a de la base de datos diferente cuando se use SSI.php.';

$helptxt['queryless_urls'] = 'Esto cambia el formato de los URLs un poco, para que sean m�s agradables para los servicios de b�squeda (google, por ejemplo).  Estos URLs se ver�n por ejemplo: index.php/topic,1.0.html.<br /><br />Esta caracter�stica \' . (isset($_SERVER[\'SERVER_SOFTWARE\']) && (strpos($_SERVER[\'SERVER_SOFTWARE\'], \'Apache\') !== false || strpos($_SERVER[\'SERVER_SOFTWARE\'], \'lighttpd\') !== false) ? \'\' : \'NO\') . \' funciona en su servidor.';
$helptxt['countChildPosts'] = 'Al marcar esta opci�n, todos los mensajes y temas de un subforo contar�n en los totales del foro.<br /><br />Esto har� las cosas considerablemente m�s lentas, pero significa que un foro sin mensajes no mostrar� \'0\'.';
$helptxt['fixLongWords'] = 'Esta opci�n divide las palabras que sean mas largas de cierta longitud, en partes, para que no destruyan la apariencia del foro. (en lo posible...)';
$helptxt['allow_ignore_boards'] = 'Marcando esta opci�n se permitir� a los usuarios seleccionar foros que deseen ignorar.';

$helptxt['who_enabled'] = 'Esta opci�n te permite activar o desactivar la posibilidad de que los usuarios vean qui�n est� en linea navegando el foro, as� como lo que est�n haciendo.';

$helptxt['recycle_enable'] = '"Recicla" temas y mensajes eliminados al foro especificado.';

$helptxt['enableReportPM'] = 'Esta opci�n permite a tus usuarios informar a los administradores sobre mensajes privados que hayan recibido. Puede ser �til para controlar cualquier abuso de los mensajes privados.';
$helptxt['max_pm_recipients'] = 'Esta opci�n te permite especificar el m�ximo de destinatarios permitidos en un un mensaje privado enviado por un usuario. Esto puede ser usado para ayudar a evitar el abuso por spam de tu sistema de mensajes privados. Toma en cuenta que los usuarios con permiso para enviar boletines de noticias est�n exentos de esta restricci�n. Establece el valor en cero para que no haya l�mite.';
$helptxt['pm_posts_verification'] = 'Esta opci�n forzar� a los usuarios a introducir un c�digo que ser� mostrado en una imagen de verificaci�n cada vez que ellos env�en un mensaje privado. Solamente los usuarios con un numero de mensajes publicados menor al n�mero especificado tendr�n que introducir el c�digo - esto debe ayudar para combatir los scripts autom�ticos de spam.';
$helptxt['pm_posts_per_hour'] = 'Esta opci�n limitar� el n�mero de mensajes privados que pueden ser enviados por un usuario en una hora. Esto no afecta a los administradores o moderadores.';

$helptxt['default_personal_text'] = 'Inidica el texto predeterminado que los nuevos usuarios tendr�n como "Titulo personal." ';

$helptxt['modlog_enabled'] = 'Guardar logs de todas las acciones de los moderadores.';

$helptxt['guest_hideContacts'] = 'Si esta opci�n est� seleccionada las direcciones de email y los detalles de los mensajeros (ICQ, Y!, MSN)
	de todos tus usuarios se le ocultar�n a los visitantes de tu foro';

$helptxt['registration_method'] = 'Esta opci�n determina que m�todo de registro es usada para las personas que deseen unirse a tu foro. Puedes seleccionarlo entre:<br /><br />
	<ul class="normallist">
		<li>
			<b>Registro Desactivado:</b><br />
				Desactiva el proceso de registro, con este m�todo nadie puede registrarse en tu foro.<br />
		</li><li>
			<b>Registro Inmediato</b><br />
				Los nuevos usuarios pueden ingresar y publicar inmediatamente despu�s de registrarse en tu foro.<br />
		</li><li>
			<b>Activaci�n de Usuario</b><br />
				Cuando esta opci�n est� activada cualquier usuario que se registre en tu foro tendr� un enlace de activaci�n, que se le enviar� por email, que tendr� que visitar antes de que pueda convertirse en usuario v�lido.<br />
		</li><li>
			<b>Aprobaci�n de Usuarios</b><br />
				Esta opci�n har� que todos los nuevos usuarios que se registren en tu foro necesiten ser aprobados por un administrador para que se puedan volver usuarios v�lidos.
		</li>
	</ul>';
$helptxt['register_openid'] = '<b>Autenticar con OpenID</b><br /> OpenID es una plataforma que permite usar un usuario en varios sitios de internet, para simplificar la experiencia online. Para usar OpenID, primero necesitas crear una cuenta OpenID. Una lista de los proveedores del servicio puede encontrarse en <a href="http://openid.net/" target="_blank">El sitio oficial de OpenID</a><br /><br /> Cuando hayas conseguido un cuenta en OpenID, simplemente escribe tu identificador URL. Luego ser�s llevado a tu proveedor para verificar tu identidad antes de ser devuelto a nuestro sitio.<br /><br /> En la primera visita, deber�s confirmar varios detalles antes de ser reconocido. Una vez hecho esto, podr�s cambiar las opciones OpenID en tu perfil.<br /><br /> Para m�s informaci�n visita <a href="http://openid.net/" target="_blank">El sitio oficial de OpenID</a>.';

$helptxt['send_validation_onChange'] = 'Cuando esta opci�n est� seleccionada todos los usuarios que cambien su direcci�n de email en su perfil tendr�n que reactivar sus cuenta desde el email enviado a la nueva direcci�n';
$helptxt['send_welcomeEmail'] = 'Cuando esta opci�n est� seleccionada a todos los nuevos usuarios se les enviar� un email de bienvenida a tu foro';
$helptxt['password_strength'] = 'Esta opci�n determina el grado de robustez requerida para las contrase�as seleccionadas por los usuarios de tu foro. Cuanto m�s "robusta" sea la contrase�a, m�s dif�cil es comprometer las cuentas de los usuarios.
	Las posibles opciones son:
	<ul>
		<li><b>Baja:</b> La contrase�a debe ser contener al menos cuatro caracteres.</li>
		<li><b>Media:</b> La contrase�a debe contener al menos ocho caracteres, y no puede ser parte del nombre o direcci�n email del usuario.</li>
		<li><b>Alta:</b> Como la Media, excepto que la contrase�a debe contener tambi�n una mezcla de may�sculas, min�sculas y al menos un n�mero.</li>
	</ul>';

$helptxt['coppaAge'] = 'El valor especificado en este cuadro determinar� la edad m�nima que los nuevos usuarios deben tener para que se les conceda acceso inmediato a los foros.
	Durante el proceso de registro se les pedir� que confirmen si son mayores a esa edad, y de no serlo, puede o neg�rsele su solicitud, o suspendarla esperando por la aprobaci�n de los padres - dependiendo del tipo de restricci�n escogida.
	Si se pone 0 en este valor, entonces todas las restricciones de edad se ignorar�n.';
$helptxt['coppaType'] = 'Si las restricciones de edad est�n activas, entonces este valor determinar� qu� pasar� cuando un usuario m�s joven de la edad m�nima intenta registrarse en tu foro. Hay dos posibilidades:
	<ul>
		<li>
			<b>Rechazar su solicitud de registro:</b><br />
				A cualquier nuevo usuario que no cumpla con la edad m�nima se le rechazar�a su solicitud de registro inmediatamente.<br />
		</li><li>
			<b>Requerir aprobaci�n del Padre o Tutor</b><br />
				A cualquier nuevo usuario que no cumpla con la edad m�nima su cuentra se marcar� como esperando autorizaci�n, y se le mostrar� una forma en la que sus padres o tutores deben dar el permiso para que se convierta en un usuario del foro.
				A ellos tambi�n se les mostrar� una forma con los datos de contacto que se especificaron en la pantalla de configuraci�n, para que puedan enviar la forma al administrador por correo o fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Los cuadros de contacto son requeridos para que las formas que otorgan el permiso a los usuarios por debajo de la edad m�nima pueda ser enviada al administador del foro. Estos detalles ser�n mostrados a todos los usuarios debajo de la edad m�nima, y son necesarios para la aprobaci�n del padre o tutor. Por lo menos se debe proveer una direcci�n postal o un n�mero de fax.';

$helptxt['allow_hideOnline'] = 'Cuando esta opci�n est� seleccionada todos los usuarios podr�n ocultarle a los dem�s usuarios si est�n conectados (excepto a los administradores). Si est� desactivado, solamente los usuarios que pueden moderar el foro pueden ocultar su presencia. Es importante mencionar que deshabilitando esta opci�n no cambia el estado de ning�n usuario existente - simplemente les impide ocultarse en el futuro.';
$helptxt['make_email_viewable'] = 'Activando esta opci�n se mostrar� la direcci�n de correo de los miembros de la comunidad a los usuarios registrados y a los invitados. Si habilitas esta opci�n, los usuarios ser�n vulnerables al SPAM debido a los recolectores de correo que visiten tu foro. Este par�metro no prevalecer� si el usuario ha indicado esconder su direcci�n. Activar esta opci�n <b>no</b> es recomendable.';
$helptxt['meta_keywords'] = 'Estas palabras clave son enviadas en cada p�gina para indicar a los motores de b�squeda (y dem�s) el contenido clave de tu sitio. Una coma deber� separar cada palabra de la lista, y no debes utilizar HTML. Si esta opci�n permanece en blanco, se enviar� el conjunto predeterminado. Como ejemplo, el conjunto predeterminado es: <br /><div class="smalltext">&quot;PHP, MySQL, bulletin, board, free, open, source, smf, simple, machines, forum&quot;</div>';

$helptxt['latest_support'] = 'Este panel te muestra algunos de problemas y preguntas m�s comunes de la configuraci�n de tu servidor. No te preocupes, esta informaci�n no se registra en ning�n momento.<br /><br />Si permanece como "Obteniendo informaci�n de soporte...", tu computadora muy probablemente no se puede conectar a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Aqu� puedes ver algunos de los m�s populares mods, as� como algunos paquetes o mods aleatorios, con instalaciones r�pidas y sencillas.<br /><br />Si esta secci�n no se puede mostrar, probablemente tu computadora no se puede conectar a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Esta �rea muestra algunos de los �ltimos y m�s populares temas de <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.  Puede que no se muestre correctamente si tu computadora no puede encontrar <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Por tu seguridad, la respuesta a tu pregunta (as� como tu contrase�a) est� encriptada de una manera en la que SMF puede decirte solamente si est� correcta, as�, jam�s podr� decirte (�o a alguien m�s, que es lo importante!) cual es tu respuesta o tu contrase�a.';
$helptxt['moderator_why_missing'] = 'Debido a que la moderaci�n se realiza en cada foro, debes hacer a un usuario moderador desde la <a href="javascript:window.open(\'%s?action=manageboards\'); self.close();">interface de manejo de foros</a>.';

$helptxt['permissions'] = 'A trav�s de los permisos les permites o impides a los grupos hacer cosas espec�ficas.<br /><br />Puedes modificar varios foros al mismo tiempo usando las casillas, o busca en los permisos por un grupo espec�fico al hacer clic en \'Modificar.\'';
$helptxt['permissions_board'] = 'Si un foro se especifica como \'Global,\' significa que el foro no tendr� permisos especiales.  \'Local\' significa que tendr� sus propios permisos - separados de los globales.  Esto te permite tener un foro que tiene m�s (o menos) permisos que otro, sin que sea necesario que los especifiques para cada uno de los foros.';
$helptxt['permissions_quickgroups'] = 'Estos te permiten usar la configuraci�n "predeterminada" de permisos - est�ndar significa \'nada especial\', restrictivo significa \'como visitante\', moderador significa \'que un moderador tiene\', y por �ltimo \'mantenimiento\' significa permisos muy cercanos a los de un administrador.';
$helptxt['permissions_deny'] = 'Denegar permisos puede ser �til cuando quieres quitar permisos de algunos usuarios. Puedes a�adir un grupo con permiso \'denegado\' a los usuarios que deseas denegar un permiso.<br /><br />Util�zalos con cuidado, un permiso denegado prevalece, no importa a que otros grupos pertenezca el usuario.';
$helptxt['permissions_postgroups'] = 'Al activar permisos para grupos basados en el n�mero de mensajes podr�s asignar permisos a usuarios que han publicado una cierta cantidad de mensajes. Los permisos de grupos basados en el n�mero de mensajes se <em>a�den</em> a los permisos de los grupos convencionales.';
$helptxt['membergroup_guests'] = 'El grupo de invitados son todos los usuarios que no est�n conectados.';
$helptxt['membergroup_regular_members'] = 'Los usuarios regulares son todos aquellos que est�n conectados, pero que no tienen asignado un grupo primario.';
$helptxt['membergroup_administrator'] = 'El administrador puede, por definici�n, ver y realizar cualquier cosa en el foro. No se establecen permisos para el administrador.';
$helptxt['membergroup_moderator'] = 'El grupo Moderador es un grupo especial. Los permisos y opciones asignadas a este grupo son aplicables a los moderadores pero solamente <em>en los foros que moderan</em>. Fuera de ellos son como cualquier otro usuario.';
$helptxt['membergroups'] = 'En SMF hay dos tipos de grupos a los que tus usuarios pueden pertenecer. Estos son:
	<ul>
		<li><b>Grupos Regulares:</b> Un grupo regular es un grupo en el que los usuarios no se les ingresa autom�ticamente. Para ingresar a un usuario al grupo simplemente ve a su perfil y haz <i>clic</i> en "Configuraci�n de la cuenta". Ah� puedes asignarle todos los grupos regulares a los que deseas que pertenezca.</li>
		<li><b>Grupos de Mensajes:</b> A diferencia de los grupos regulares, este tipo de grupos no pueden ser asignados. En vez de eso, los usuarios son asignados autom�ticamente a un grupo, cuando alcanzan el m�nimo de mensajes publicados necesarios para pertenecer a dicho grupo.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Puedes editar esos eventos haciendo clic en el asterisco rojo (*) al lado de sus nombres.';

$helptxt['maintenance_backup'] = 'Esta �rea te permite guardar una copia de todos los mensajes, configuraciones, usuarios, y otra informaci�n de tu foro en un archivo muy grande.<br /><br />Es recomendado hacerlo a menudo, probablemente semanalmete, por seguridad.';
$helptxt['maintenance_rot'] = 'Esto te permite <b>completa</b> e <b>irrevocablemente</b> borrar temas viejos. Es recomendable que intentes hacer un respaldo primero, en caso que accidentalmente borres algo que no deseabas.<br /><br />Usa esta opci�n con cuidado.';
$helptxt['maintenance_members'] = 'Esto permite eliminar a un usuario del foro <b>completamente</b> e <b>irrevocablemente</b>. Es <b>extremadamente</b> recomendable que realices una copia de seguridad, en caso de que elimines algo de forma accidental. Utiliza esta opci�n con cuidado.';

$helptxt['avatar_server_stored'] = 'Esta opci�n permite a los miembros elegir im�genes almacenadas en tu servidor. Generalmente se encuentran en la carpeta Avatars del foro SMF. <br />Un consejo: puedes crear directorios en esa carpeta y hacer &quot;categor�as&quot; de im�genes.';
$helptxt['avatar_external'] = 'Si esta opci�n est� habilitada, los usuarios pueden escribir la direcci�n de internet de su imagen para mostrar. La desventaja es que pueden usar im�genes muy grandes o algunas que no quieres ver en tu foro.';
$helptxt['avatar_download_external'] = 'Con esta opci�n activada, se descargar� el avatar del URL especificado por el usuario. Si el proceso fue realizado con �xito, el avatar se tratar� como un avatar subido por el usuario.';
$helptxt['avatar_upload'] = 'Esta opci�n es similar a "Permitir a los miembros seleccionar una imagen externa", exceptuando que tienes mejor control sobre las im�genes, con la opci�n de redimensionarlas y tus usuarios no deben tener un lugar aparte para almacenarlas. <br /><br /> La desventaja es que puede tomar mucho espacio en tu servidor.';
$helptxt['avatar_download_png'] = 'Los PNG son m�s grandes, pero ofrecen una mejor calidad de compresi�n. De no estar seleccionado, se usar�a en su lugar JPEG - que generalmente es de menor tama�o, pero con menor calidad.';

$helptxt['disableHostnameLookup'] = 'Esto desactiva la b�squeda de nombres de servidores, que en algunos servidores es muy lento.  Es importante mencionar que �sto har� la restricci�n de accesos menos eficaz.';

$helptxt['search_weight_frequency'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la b�squeda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antig�edad del �ltimo mensaje que coincidi�\'. Todos los valores son relativos, relacionados entre s�, y deben ser enteros positivos.<br /><br />Este factor cuenta la cantidad de mensajes que coincidieron y los divide por el n�mero total de mensajes dentro del tema.';
$helptxt['search_weight_age'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la b�squeda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antig�edad del �ltimo mensaje que coincidi�\'. Todos los valores son relativos, relacionados entre s�, y deben ser enteros positivos.<br /><br />Este factor califica la antig�edad del �ltimo mensaje dentro de un tema. Entre m�s reciente es, mayor su puntuaci�n.';
$helptxt['search_weight_length'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la b�squeda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antig�edad del �ltimo mensaje que coincidi�\'. Todos los valores son relativos, relacionados entre s�, y deben ser enteros positivos.<br /><br />Este factor est� basado en el tama�o del tema. Entre m�s mensajes tenga un tema, mayor su puntuaci�n.';
$helptxt['search_weight_subject'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la b�squeda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antig�edad del �ltimo mensaje que coincidi�\'. Todos los valores son relativos, relacionados entre s�, y deben ser enteros positivos.<br /><br />Este factor revisa si se encuentran coincidencias en el asunto del tema.';
$helptxt['search_weight_first_message'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la b�squeda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antig�edad del �timo mensaje que coincidi�\'. Todos los valores son relativos, relacionados entre s�, y deben ser enteros positivos.<br /><br />Este factor revisa si se encuentran coincidencias en el primer mensaje del tema.';
$helptxt['search_weight_sticky'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la b�squeda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antig�edad del �ltimo mensaje que coincidi�\'. Todos los valores son relativos, relacionados entre s�, y deben ser enteros positivos.<br /><br />Este factor revisa si un tema ha sido fijado, y de ser as� incrementa la puntuaci�n.';
$helptxt['search'] = 'Aqu� puedes ajustar la configuraci�n de la funci�n de b�squeda. Es importante mencionar que aqu� no puedes especificar quien tiene acceso a la funci�n de b�squeda. Usa la pantalla de \'manejar permisos\' en el panel administrativo para eso.';
$helptxt['search_why_use_index'] = 'Un �ndice de b�squeda puede mejorar considerablemente el desempe�o de las b�squedas en tu foro. Especialmente cuando el n�mero de mensajes en tu foro crece considerablemente, el buscar sin un �ndice puede tomar mucho tiempo e incrementar la carga en tu servidor. Si tu foro tiene m�s de 50,000 mensajes, debes considerar el crear el �ndice de b�squeda para asegurar un desempe�o �ptimo de tu foro.<br /><br />Es importante mencionar que un �ndice de b�squeda puede tomar alg�n espacio extra de la base de datos. Un �ndice fulltext es un tipo de �ndice dentro de MySQL. Es relativamente compacto (aproximadamente el mismo tama�o de la tabla de mensajes), pero muchas palabras no son indexadas y puede, en algunas b�squedas, ser muy lento. El �ndice personalizado usualmente necesita mayor espacio (dependiendo de tu configuraci�n puede ser hasta 3 veces mayor a tu tabla de mensajes) pero su desempe�o es mejor que fulltext y mucho mas estable.';

$helptxt['see_admin_ip'] = 'A los administradores y moderadores se les muestran las IPs para facilitar la moderaci�n y para hacer m�s f�cil el rastreo de personas indeseables. Recuerda que las direcciones IP no siempre son identificatorias, y que las IPs cambian peri�dicamente.<br /><br />Tambi�n se les permite a los usuarios ver su propia IP.';
$helptxt['see_member_ip'] = 'Tu direcci�n IP es mostrada solamente a t� y a los moderadores. Recuerda que esta informaci�n no es identificatoria y muchas IPs cambian peri�dicamente.<br /><br />No puedes ver las IPs de otros usuarios y ellos no pueden ver la tuya.';
$helptxt['whytwoip'] = 'SMF utiliza varios m�todos para detectar la direcci�n IP del usuario. Casi siempre estos dos m�todos dan como resultado la misma direcci�n, pero pueden detectarse m�s de una. En este caso, SMF registra todas las direcciones para revisar las suspensiones de cuentas. Puedes clickear en cualquier direcci�n para seguirla y suspender el acceso si es necesario.';

$helptxt['ban_cannot_post'] = 'La restricci�n \'no puede publicar\' establece el modo s�lo-lectura para el usuario restringido. El usuario no puede crear nuevos temas, ni responder a temas ya existentes, ni enviar mensajes privados ni votar en encuestas. Los usuarios restringidos, sin embargo, pueden leer mensajes privados y temas.<br /><br />Se muestra un mensaje de advertencia a usuarios que tiene restringido el acceso de esta manera.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Configuraci�n de Mensajes</b><br />
			Modifica la configuraci�n relacionada con la publicaci�n de mensajes y la manera en la que se muestran. Puedes tambi�n activar la comprobaci�n ortogr�fica aqu�.
		</li><li>
			<b>C�digos BBC</b><br />
			Activa los c�digos que se muestran en los mensajes del foro. Tambi�n se ajusta qu� c�digos se permiten y cu�les no.
		</li><li>
			<b>Palabras Censuradas</b>
			Para controlar el lenguaje de tu foro, puedes censurar ciertas palabras. Esta funci�n te permite convertir palabras prohibidas en versiones adecuadas.
		</li><li>
			<b>Configuraci�n de Temas</b>
			Modifica la configuraci�n relacionada con temas. El n�mero de temas por p�gina, d�nde est�n activados o no los mensajes pegados, el n�mero de mensajes necesarios para ser un tema candente, etc.
		</li>
	</ul>';
$helptxt['spider_group'] = 'Seleccionando un grupo restrictivo, cuando un invitado sea identificado como un spider de un motor de b�squeda y se le impedir� el acceso. Puedes denegar el acceso adem�s de los permisos normales de los invitados. Puede utilizar esta opci�n para que los motores de b�squeda tengan menos acceso a tu comunidad. Por ejemplo, puede crear un nuevo grupo llamado "Spiders&quot;, y seleccionarlo aqu�. Luego podr�as denegar permisos a ese grupo e impedir que registren los perfiles de los usuarios <br />Advertencia: la detecci�n de Spiders no es perfecta y puede ser simulada por los usuarios, por lo que esta caracter�stica no garantiza que se restrinja el acceso a los motores de b�squeda que has indicado.';
$helptxt['show_spider_online'] = 'Esta opci�n te permite eleg�r si los spiders deber�n ser listados tanto en la lista en el indice del foro como en la p�gina de usuarios conectados. Las opciones son: <ul class="normallist"> <li> <b>Nunca</b><br /> Los spiders aparecer�n como visitantes para todos los usuarios. </li><li> <b>Mostrar cantidad de spiders</b><br /> Se mostrar� en el �ndice del foro la cantidad de spiders conectados. </li><li> <b>Mostrar nombres de Spiders</b><br /> Cada nombre ser� mostrado, los usuarios podr�n ver cuantos spiders est�n actualmente visitando el foro - esto afectar� tanto al �ndice del foro como a la p�gina de miembros conectados. </li><li> <b>Mostrar nombres de spiders - Administradores solamente</b><br /> Igual que el caso anterior, pero solo para los administradores - para los demas usuarios aparecer�n como invitados. </li> </ul>';

$helptxt['birthday_email'] = 'Elige el �ndice del email de cumplea�os a usar. Una previsualizaci�n se mostrar� en el asunto y el cuerpo del email.<br /><strong>Nota:</strong> Elegir esta opci�n no habilitar� autom�ticamente los emails. Para hacerlo usa la p�gina de <a href="%1$s?action=admin;area=maintain;sa=tasks;sesc=%2$s" target="_blank" class="new_win">Tareas Programadas</a> y habilita la tarea de email de cumplea�os.';
$helptxt['pm_bcc'] = 'Cuando env�es un Mensaje Personal podr�s a�adir direcciones a BCC (Blind Carbon Copy) "Copias Oculta". Los destinatarios a�adidos a BCC no ser�n mostrados por los dem�s receptores del Mensaje.';

$helptxt['move_topics_maintenance'] = 'Esto le permitir� mover todos los mensajes de un Foro a otro Foro.';
$helptxt['maintain_reattribute_posts'] = 'Puedes usar esta funci�n para asignar los "mensajes de Invitado" a un usuario registrado. Esto es �til si, por ejemplo, un usuario suprimiera su cuenta y luego cambiara de opini�n y deseara recuperar sus viejos mensajes pero en su nueva cuenta de usuario.';
$helptxt['chmod_flags'] = 'Usted puede ajustar manualmente los permisos a los archivos seleccionados. Para hacerlo introduzca el valor chmod como un valor num�rica octal. Nota: Estos ajustes no tendr�n ning�n efecto en servidores basados sistemas operativos Microsoft Windows.\';';

$helptxt['postmod'] = 'Esta secci�n permite a miembros del grupo de moderaci�n (con suficientes permisos) el aprovar cualquier tema o mensaje antes de que sean mostrados a el publico.';

$helptxt['field_show_enclosed'] = 'Encierra el campo del usuario dentro de alg�n c�digo html o texto. Esto te permite agregar, por ejemplo, m�s iconos de mensajer�a instant�nea, im�genes, etc. Por ejemplo: <br /><br /> &lt;a href="http://website.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}" /&gt;&lt;/a&gt;<br /><br /> ten en cuenta que puedes usar las siguientes variables:<br /> <ul class="normallist"> <li>{INPUT} - el campo especificado por el usuario.</li> <li>{SCRIPTURL} - la direcci�n del foro.</li> <li>{IMAGES_URL} - direcci�n a la carpeta de im�genes en el theme que est�s usando actualmente.</li> <li>{DEFAULT_IMAGES_URL} - direcci�n a la carpeta de im�genes de el theme predeterminado.</li> </ul> ';

$helptxt['custom_mask'] = 'La m�scara de entrada es importante para la seguridad de su foro. Validar la entrada de un usuario puede ayudar a asegurar que los datos no se utiliza de una manera que no esperamos. Hemos proporcionado algunas expresiones regulares simples como sugerencias.<br /><br />
	<div class="smalltext" style="margin: 0 2em">
		"[A-Za-z]+" - Empareje todos los car�cteres de alfabeto de caso superiores e inferiores.<br />
		"[0-9]+" - Empareje todos los car�cteres num�ricos.<br />
		"[A-Za-z0-9]{7}" - Empareje todo el alfabeto de caso superior e inferior y car�cteres num�ricos siete veces.<br />
		"[^0-9]?" - Prohibir cualquier n�mero del que se iguala.<br />
		"^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$" - S�lo permiten 3 o 6 caracteres Hexa.<br />
	</div><br /><br />
	Adem�s, metacaracteres especiales ?+*^$ y {xx} se puede definir.
	<div class="smalltext" style="margin: 0 2em">
		? - Ninguna o un parte de la expresi�n anterior.<br />
		+ - Uno o m�s de la expresi�n anterior.<br />
		* - Ninguno o m�s de expresi�n anterior.<br />
		{xx} - Un n�mero exacto de la expresi�n anterior.<br />
		{xx,} - Un n�mero exacto o m�s de la expresi�n anterior.<br />
		{,xx} - Un n�mero exacto o menos de la expresi�n anterior.<br />
		{xx,yy} - Una coincidencia exacta entre los dos n�meros de la expresi�n anterior.<br />
		^ - Inicio de la cadena.<br />
		$ - Fin de la cadena.<br />
		\\ - Escapa el siguiente car�cter.<br />
	</div><br /><br />
	Se pueden encontrar m�s informaci�n y t�cnicas avanzadas en Internet.';

?>