<?php
// Version: 2.0; Help

global $helptxt;

$txt['close_window'] = 'Cerrar ventana';

$helptxt['manage_boards'] = '	<strong>Editar foros</strong><br />
	En este men� puedes crear/reordenar/eliminar foros, y las categor�as
	arriba de ellos. Por ejemplo, si tienes un amplio sitio web
	que ofrece informaci�n acerca de &quot;Anime&quot;, &quot;Carros&quot; y &quot;M�sica&quot;,
	�stos deben ser las categor�as a mayor nivel que debes crear. Debajo de esas
	categor�as probablemente desees crear &quot;sub-categor�as&quot; jer�rquicas,
	o &quot;Foros&quot; para contener temas dentro de cada uno. Es una jerarqu�a simple, con esta estructura: <br />
	<ul class="normallist">
		<li>
			<b>Deportes</b>
			 - Una &quot;categor�a&quot;
		</li>
		<ul class="normallist">
			<li>
				<b>B�isbol</b>
				 - Un foro en la categor�a de &quot;Deportes&quot;
			</li>
			<ul class="normallist">
				<li>
					<b>Estad�sticas</b>
					 - Un subforo dentro del foro de &quot;Baseball&quot;
				</li>
			</ul>
			<li><b>F�tbol</b>
			 - Un foro dentro de la categor�a de &quot;Deportes&quot;</li>
		</ul>
	</ul>
	Las Categor�as te permiten organizar el foro de mensajes en temas (&quot;Deportes, Coches&quot;),
	y los &quot;Foros&quot; dentro de ellas son los temas en los cuales los usuarios pueden
	publicar mensajes. En el ejemplo anterior, un usuario interesado en un Audi,
	publicar�a un mensaje en el foro &quot;Coches->Audi&quot;. Las Categor�as permiten
	encontrar r�pidamente cuales son sus intereses: En vez de &quot;Tienda&quot; se tienen
	tiendas de &quot;Hardware&quot; y &quot;Electrodom�sticos&quot; a las que puedes ir.
	Esto simplifica tu b�squeda por &quot;Pantalla&quot;, ya que puedes ir a la &quot;categor�a&quot; de
	tienda de Hardware en vez de la tienda de Electrodom�sticos (donde encontrar�as televisiones de pantalla
	plana en vez de, probablemente, protectores de pantalla para la computadora).<br />
	Como se puede percibir arriba, un foro engloba un tema espec�fico dentro de la categor�a m�s amplia.
	Si quieres discutir acerca de &quot;Audi&quot;, debes ir a la categor�a &quot;Coches&quot; e ir al foro
	&quot;Audi&quot; para publicar tus mensajes acerca de lo que opinas en ese foro.<br />
	Las funciones administrativas en este men� son para crear nuevos foros en cada
	categor�a, reordenarlas (poner &quot;Audi&quot; abajo de &quot;Ferrari&quot;), o borrar un
	foro completamente.';

$helptxt['edit_news'] = '	<ul class="normallist">
		<li>
			<strong>Editar Noticias del foro</strong><br />
			Esto te permite especificar el texto para los elementos de las noticias mostradas en la p�gina �ndice del foro.
			Agrega cualquier elemento que desees (ej., &quot;Nueva versi�n del portal http://HablaJapones.org&quot;). Cada elemento de las noticias se separa por un <enter>
		</li>
		<li>
			<strong>Boletines</strong><br />
			Esta secci�n te permite enviar boletines a los miembros del foro v�a mensaje personal o email. Primero selecciona los grupos que quieres que reciban el bolet�n, y los que nos quieres que lo reciban. Si quieres, puedes a�adir miembros y direcciones de email adicionales que recibir�n el bolet�n. Por �ltimo, introduce el mensaje que quieres enviar y selecciona si quieres que sea enviado a los usuarios como un mensaje personal o como un email.
		</li>
		<li>
			<strong>Configuraci�n</strong><br />
				Esta secci�n contiene algunas opciones de configuraci�n relativas a a las noticias y boletines, incluyendo la selecci�n de qu� grupos pueden editar las noticias del foro o enviar boletines. Tambi�n hay una opci�n para configurar si quieres que los feeds de noticias est�n activados en el foro, as� como una opci�n para configurar su longitud (cu�ntos caracteres ser�n mostrados) para cada noticia en el feed.
		</li>
	</ul>';

$helptxt['view_members'] = '	<ul class="normallist">
		<li>
			<strong>Ver todos los usuarios</strong><br />
			Ver todos los usuarios en el foro de mensajes. Se te presenta una lista con hiperv�nculo, de todos los nombres de los usuarios. Puedes hacer clic
			en cualquiera de los nombres para obtener mayores detalles de un usuario en especial (sitio web, edad, sexo, etc), y como Administrador,
			puedes modificar cualquiera de esos datos. Tienes un total control sobre los usuarios, incluyendo la posibilidad de
			borrarlos del foro de mensajes.<br /><br />
		</li>
		<li>
			<strong>Esperando aprobaci�n</strong><br />
			Esta secci�n se muestra solamente si tienes activado que los administradores aprueben todos los nuevos registros de usuarios. Cualquiera que se registre para unirse a tu
			foro se volver� un usuario completo cuando haya sido aprobado por un administrador. La secci�n muestra todos aquellos usuarios que
			est�n esperando aprobaci�n, junto con su email y direcci�n IP. Tu puedes escoger ya sea aceptar y rechazar (borrar)
			cualquier usuario en la lista al seleccionar el cuadro al lado del usuario, y seleccionando la acci�n del cuadro colapsable al final
			de la pantalla. Cuando rechaces un usuario, puedes escoger borrar el usuario con o sin notificarle de tu decisi�n.<br /><br />
		</li>
		<li>
			<strong>Esperando activaci�n</strong><br />
			Esta secci�n ser� visible solamente si tienes activado en el foro el que los usuarios activen sus cuentas. Esta secci�n listar� todos los
			usuarios que no han activado sus nuevas cuentas. Desde esta pantalla puedes escoger aceptar, rechazar o recordarles a los
			usuarios con registros pendientes. Como en la opci�n anterior, puedes escoger enviarle email al usuario para informarle de la
			acci�n que hayas tomado.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<strong>Usuarios con acceso prohibido</strong><br />
	SMF permite &quot;banear&quot; o &quot;restringir el acceso&quot; a usuarios, para prevenir el acceso a personas que han violado la confianza del foro de mensajes,
	al hacer spam, ser groseros, etc. Esto te permite restringirles el acceso a los usuarios que no desees m�s en tu foro de mensajes. Como administrador,
	cuando ves los mensajes puedes ver la IP que cada usuario utiliz� al publicar su mensaje. En la lista de accesos prohibidos,
	simplemente introduce la direcci�n IP, guarda los cambios, y ning�n usuario no podr� acceder al foro desde esa IP.<br />
	Tambi�n puedes restringir el acceso de usuarios usando su direcci�n de email, o su nombre de usuario.';

$helptxt['featuresettings'] = '<strong>Editar caracter�sticas y opciones</strong><br />
	Hay numerosas caracter�sticas en esta secci�n que pueden ser cambiadas seg�n tus preferencias.';

$helptxt['securitysettings'] = '<strong>Seguridad y moderaci�n</strong><br />
	Esta secci�n contiene opciones relativas a la seguridad y moderaci�n de tu foro.';

$helptxt['modsettings'] = '<strong>Opciones de Modificaciones (mods)</strong><br />
	Esta secci�n deber�a contener cualquier opci�n de configuraci�n a�adida por las modificaciones (mods) instaladas en tu foro.';

$helptxt['number_format'] = '<strong>Formato de N�meros</strong><br />
	Puedes ajustar c�mo los n�meros ser�n mostrados al usuario.  El formato es:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Donde \',\' es el car�cter utilizado para dividir los grupos de miles, \'.\' es el car�cter utilizado como el punto decimal y el n�mero de ceros indica la exactitud de los redondeos.';

$helptxt['time_format'] = '<b>Formato de Hora</b><br />
	Puedes ajustar como visualizar�s la hora y la fecha. Hay mucha &quot;letra peque�a&quot;, pero es relativamente f�cil.
	El formato sigue las especificaciones de la funci�n strftime de PHP, y se describen a continuaci�n (m�s detalles pueden encontrarse en <a href="http://www.php.net/manual/function.strftime.php" target="_blank" class="new_win">php.net</a>).<br />
	<br />
	Los siguientes caracteres se reconocen en la cadena del formato:<br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - nombre abreviado del d�a de la semana <br />
	&nbsp;&nbsp;%A - nombre completo del d�a de la semana <br />
	&nbsp;&nbsp;%b - nombre abreviado del mes <br />
	&nbsp;&nbsp;%B - nombre completo del mes <br />
	&nbsp;&nbsp;%d - d�a del mes (01 a 31) <br />
	&nbsp;&nbsp;%D<strong>*</strong> - lo mismo que %m/%d/%y <br />
	&nbsp;&nbsp;%e<strong>*</strong> - d�a del mes (1 a 31) <br />
	&nbsp;&nbsp;%H - hora usando formato de 24 horas (rango 00 a 23) <br />
	&nbsp;&nbsp;%I - hora usando formato de 12 horas (rango 01 a 12) <br />
	&nbsp;&nbsp;%m - mes como n�mero (01 a 12) <br />
	&nbsp;&nbsp;%M - minuto como n�mero <br />
	&nbsp;&nbsp;%p - &quot;am&quot; o &quot;pm&quot; de acuerdo a la hora actual<br />
	&nbsp;&nbsp;%R<strong>*</strong> - hora en formato de 24 horas <br />
	&nbsp;&nbsp;%S - segundos como n�mero decimal <br />
	&nbsp;&nbsp;%T<strong>*</strong> - hora actual, de la misma manera que %H:%M:%S <br />
	&nbsp;&nbsp;%y - a�o en formato de 2 d�gitos (00 a 99) <br />
	&nbsp;&nbsp;%Y - a�o en formato de 4 d�gitos <br />
	&nbsp;&nbsp;%% - car�cter \'%\'  <br />
	<br />
	<em>* No funciona en servidores Windows.</em></span>';

$helptxt['live_news'] = '<strong>Anuncios en vivo</strong><br />
	Este cuadro muestra los anuncios recientemente actualizados desde <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.
	Debes revisar esta p�gina de vez en cuando por si hay actualizaciones, nuevas versiones, o informaci�n importante del equipo de Simple Machines.';

$helptxt['registrations'] = '<strong>Manejo del Registro de Usuarios</strong><br />
	Esta secci�n contiene todas las funciones que pueden ser necesarias para manejar nuevos registros de usuarios en el foro. Contiene hasta tres
	secciones que son visibles dependiendo de la configuraci�n de tu foro. �stas son:<br /><br />
	<ul class="normallist">
		<li>
			<strong>Registrar Nuevo usuario</strong><br />
			Desde esta pantalla puedes escoger registrar nuevas cuentas en nombre de los nuevos usuarios. Esto puede ser �til en foros donde el registro est� cerrado
			para nuevos usuarios, o en casos donde el administrador desea crear una cuenta de prueba. Si la opci�n de requerir activaci�n de la cuenta
			est� seleccionada, se le enviar� un email al usuario, con un enlace al que se le deber� hacer clic antes de que puedan usar la cuenta. Asimismo, puedes
			seleccionar el enviar por email al usuario una nueva contrase�a a su direcci�n de email.<br /><br />
		</li>
		<li>
			<strong>Editar Carta de Aceptaci�n al registrarse</strong><br />
			Esto te permite establecer el texto para la carta de aceptaci�n mostrada a los usuarios cuando est�n en el proceso de registro para obtener una cuenta en tu foro de mensajes.
			Puedes cambiar cualquier texto de la carta de aceptaci�n original que se incluye en SMF.
		</li>
		<li>
			<strong>Establecer nombres reservados</strong><br />
			Usando esta interfaz puedes especificar palabras o nombres que no pueden ser usados por tus usuarios.<br /><br />
		</li>
		<li>
			<strong>Configuraci�n</strong><br />
			Esta secci�n ser� visible solamente si tienes permisos para administrar el foro. Desde esta pantalla puedes decidir el m�todo de registro
			que ser� usado en tu foro, as� como algunas otras configuraciones.
		</li>
	</ul>';

$helptxt['modlog'] = '<strong>Log de Moderaci�n</strong><br />
	Esta secci�n le permite a los administradores mantenerse al tanto de todas las acciones de moderaci�n que los moderadores del foro han realizado. Para asegurar que
	los moderadores no puedan eliminar las referencias a las acciones que ellos han realizado, las entradas no pueden eliminarse hasta 24 horas despu�s de que la acci�n tuviera lugar.';
$helptxt['adminlog'] = '<strong>Registro de administraci�n</strong><br />
	Esta secci�n permite a los miembros del equipo de administraci�n seguir algunas de las acciones administrativas que han tenido lugar en el foro. Para asegurar que
	los admins no pueden eliminar referencias a las acciones que han llevado a cabo, las entradas no podr�n ser borradas hasta transcurridas 24 horas desde que la acci�n tuvo lugar.';
$helptxt['warning_enable'] = '<strong>Sistema de Advertencias a Usuarios</strong><br />
	Permite a los usuarios moderadores y administradores advertir a usuarios y establecer un nivel de utilizaci�n de avisos para determinar las
	acciones que est�n disponibles para ellos en el foro. Al activar esta caracter�stica, dentro de la secci�n de permisos se activar� una opci�n para definir 
	a qu� grupos se pueden asignar advertencias a usuarios. Los niveles de advertencia se pueden ajustar en el perfil del usuario. Est�n disponibles las siguientes opciones adicionales:
	<ul class="normallist">
		<li>
			<strong>Nivel de Advertencia para Usuarios Vigilados</strong><br />
			Esta opci�n define el porcentaje de advertencia que debe alcanzar un usuario para que autom�ticamente se le asigne la etiqueta &quot;Vigilado&quot;.
			Cualquier usuario que est� siendo &quot;vigilado&quot; aparecer� en la zona principal del centro de moderaci�n.
		</li>
		<li>
			<strong>Nivel de Advertencia para Moderaci�n de Mensajes</strong><br />
			Cualquier mensaje publicado por un usuario que supere el valor establecido aqu� no aparecer� en el foro hasta que sea aprobado por un 
			moderador. Esto prevalece sobre cualquier permiso local que pueda existir relacionado con moderaci�n de temas.
		</li>
		<li>
			<strong>Nivel de Advertencia para Enmudecer</strong><br />
			Si un usuario supera este nivel, no tendr�n permiso para publicar nada en el foro. El usuario perder� todos sus derechos relacionados con la escritura de mensajes/temas.
		</li>
		<li>
			<strong>N�mero M�ximo de Puntos de Advertencia por D�a</strong><br />
			Esta opci�n limita la cantidad de puntos que un moderador puede a�adir/quitar a cualquier usuario en un periodo de veinticuatro horas. Puede 
			utilizarse para limitar lo que puede hacer un moderador en un periodo corto de tiempo. Esta opci�n puede desactivarse introduciendo cero. Los 
			usuarios con permisos de administrador no est�n afectados por este valor.
		</li>
	</ul>';
$helptxt['error_log'] = '<strong>Log de Errores</strong><br />
	El log de errores rastrea cualquier error grave encontrado por usuarios al usar tu foro. Lista todos esos errores por fecha, que puede ser usada para ordenar
	al hacer clic en la flecha negra al lado de cada fecha. Asimismo, puedes filtrar los errores al hacer clic en la imagen al lado de cada estad�stica de error. Esto
	te permite filtrar, por ejemplo, por usuario. Cuando un filtro est� activo, solamente los resultados que concuerden con el filtro ser�n mostrados.';
$helptxt['theme_settings'] = '<strong>Configuraci�n del Tema</strong><br />
	La pantalla de configuraci�n te permite cambiar las configuraci�n espec�fica de un tema. Esta configuraci�n incluye opciones tales como el directorio de los temas e informaci�n de URLs pero tambi�n
	opciones que afectan al dise�o de un tema en tu foro. La mayor�a de los temas tendr�n una variedad de opciones configurables por el usuario, permiti�ndote adaptar un tema
	para satisfacer las necesidades individuales de tu foro.';
$helptxt['smileys'] = '<strong>Centro de Smileys</strong><br />
	Aqu� puedes agregar y eliminar smileys (emoticonos) as� como conjuntos de smileys. Es importante mencionar que si un smiley est� en un conjunto, debe estar en todos los conjuntos - de otra manera, podr�a
	ser confuso para tus usuarios cuando utilicen diferentes conjuntos.<br /><br />

	Tambi�n puedes editar los iconos de mensaje desde aqu�, si los tienes activados en la p�gina de configuraci�n.';
$helptxt['calendar'] = '<strong>Administrar Calendario</strong><br />
	Aqu� puedes modificar la configuraci�n del calendario actual, as� como agregar y eliminar los d�as festivos que aparecen en �l.';

$helptxt['serversettings'] = '<strong>Configuraci�n del Servidor</strong><br />
	Aqu� puedes realizar la configuraci�n principal de tu foro. Esta secci�n incluye la configuraci�n de la base de datos y URLs, as� como otros 
	elementos importantes de la configuraci�n como la configuraci�n del correo y el cach�. S� cuidadoso al editar estas configuraciones porque un error podr�a dejar 
	inaccesible el foro';
$helptxt['manage_files'] = '	<ul class="normallist">
		<li>
			<strong>Navegar archivos</strong><br />
			Navegar a trav�s de los adjuntos, avatares y miniaturas almacenados por SMF.<br /><br />
		</li><li>
			<strong>Configuraci�n de adjuntos</strong><br />
			Configura d�nde son almacenados los adjuntos y establece restricciones sobre los tipos de archivos que pueden ser adjuntados.<br /><br />
		</li><li>
			<b>Configuraci�n de avatares</b><br />
			Configura d�nde son almacenados los avatares y gestiona su redimensionamiento.<br /><br />
		</li><li>
			<strong>Mantenimiento de archivos</strong><br />
			Comprueba y repara cualquier error en el directorio de adjuntos y elimina los adjuntos seleccionados.<br /><br />
		</li>
	</ul>';

$helptxt['topicSummaryPosts'] = 'Esto te permite especificar el n�mero de mensajes anteriores mostrados en el sumario de temas, en la pantalla de responder.';
$helptxt['enableAllMessages'] = 'Establece esto al n�mero <em>m�ximo</em> de mensajes que un tema puede tener para mostrar el enlace <i>todos</i>.  Si estableces este valor menor al de &quot;M�ximo n�mero de mensajes a mostrar en una p�gina de Tema&quot; lo unico que conseguir�s es que nunca se muestre, y si lo estableces muy alto, puede alentar tu foro.';
$helptxt['enableStickyTopics'] = 'Mensajes fijados son temas que permanecen en la parte superior de la lista de mensajes.
	Son usados generalmente para mensajes importantes. Solamente moderadores y administradores pueden fijar un tema.';
$helptxt['allow_guestAccess'] = 'El desseleccionar esta opci�n limitar� a los visitantes a hacer solamente las funciones mas b�sicas - ingresar, registrarse, recordar contrase�a, etc - en tu foro.  Esto NO es lo mismo que deshabilitar el acceso de los visitantes a los foros.';
$helptxt['userLanguage'] = 'Al activar esta opci�n, los usuarios pueden seleccionar el archivo de idioma que usar�n.
	Esto no afectar� la selecci�n predeterminada.';
$helptxt['trackStats'] = 'Estad�sticas:<br />Esto permite a los usuarios ver los �ltimos mensajes, y los temas mas populares de tu foro de mensajes.
	Tambi�n muestra varias estad�sticas, como el m�ximo de usuarios conectados al mismo tiempo, nuevos usuarios, y nuevos temas.<hr />
	P�ginas vistas:<br />Agrega otra columna a la p�gina de estad�sticas con el numero de p�ginas vistas en tu foro.';
$helptxt['titlesEnable'] = 'Activar los T�tulos Personalizados permitir� a los usuarios que cuenten con el permiso respectivo crear un t�tulo especial para ellos mismos. Dicho t�tulo se mostrar� debajo del nombre.<br /><em>Por ejemplo:</em><br />Omar<br />Maestro Jedi';
$helptxt['topbottomEnable'] = 'Esto agregar� los botones ir arriba y abajo, para que los usuarios puedan ir a la parte superior e inferior de la p�gina sin
	hacer scroll.';
$helptxt['onlineEnable'] = 'Esto mostrar� una imagen indicando si el usuario est� conectado o no.';
$helptxt['todayMod'] = 'Esto mostrar� &quot;Hoy&quot; o &quot;Ayer&quot; en vez de la fecha.<br /><br /> <strong>Ejemplos:</strong><br /><br /> <dt> <dt>Desactivado</dt> <dd>Octubre 3, 2009 a las 12:59:18 am</dd> <dt>S�lo Hoy</dt> <dd>Hoy a las 12:59:18 am</dd> <dt>Hoy &amp; Ayer</dt> <dd>Ayer a las 09:36:55 pm</dd> </dt> ';
$helptxt['disableCustomPerPage'] = 'Marca esta opci�n para impedir a los usuarios que personalicen el n�mero de mensajes e hilos que pueden mostrar por p�gina en el Indice de Mensajes y en la p�gina de Mensaje respectivamente.';
$helptxt['enablePreviousNext'] = 'Esto mostrar� un enlace al tema anterior y al siguiente.';
$helptxt['pollMode'] = 'Esto especifica si las encuestas est�n activadas o no: Si las encuestas est�n desactivadas, cualquier encuesta ya existente ser� oculta
		del listado de temas. Puedes escoger el continuar mostrando los temas sin su encuesta asociada a ellos seleccionando
		&quot;Mostrar Encuestas existentes como Temas&quot;.Para seleccionar qui�n puede publicar encuestas, ver encuestas, y otras cosas, puedes
		permitir o restringir sus permisos. Recuerda esto si las encuestas no est�n funcionando.';
$helptxt['enableVBStyleLogin'] = 'Esto mostrar� un cuadro para ingresar tu usuario/contrase�a en la parte inferior del foro de mensajes.';
$helptxt['enableCompressedOutput'] = 'Esta opci�n compactar� la salida para reducir el consumo de ancho de banda,
	pero necesita que zlib est� instalado en el servidor.';
$helptxt['disableTemplateEval'] = 'Por defecto, las plantillas son evaluadas en lugar de simplemente incluidas. Esto ayuda a mostrar informaci�n de depuraci�n m�s �til en caso de que la plantilla contenga alg�n error.<br /><br /> Sin embargo, en foros grandes este proceso personalizado de inclusi�n puede ser significativamente m�s lento. Por tanto, los usuarios avanzados pueden querer desactivarlo.';
$helptxt['databaseSession_enable'] = 'Esta opci�n hace uso de la base de datos para guardar informaci�n de sesiones - es mejor para servidores con la carga balanceada, pero ayuda con todos los problemas de timeout y puede hacer m�s r�pido al foro.  No funciona si session.auto_start est� activado.';
$helptxt['databaseSession_loose'] = 'Activando esta opci�n disminuir� el ancho de banda que consume tu foro, y hace que al hacer <i>clic</i> en atr�s no recargue la p�gina - lo malo de esto es que los (nuevos) iconos no se actualizar�n, entre otras cosas. (a menos que hagas <i>clic</i> en esa p�gina en vez de regresar a ella.)';
$helptxt['databaseSession_lifetime'] = 'Este es el n�mero de segundos que durar�n las sesiones despu�s que no hayan sido accesadas.  Si una sesi�n no es accesada por mucho tiempo, se dice que ha &quot;expirado&quot;.  Se recomienda cualquier valor arriba de 2400.';
$helptxt['enableErrorLogging'] = 'Esto registrar� (log) cualquier error, como un ingreso de usuario inv�lido, para que puedas ver que sali� mal.';
$helptxt['enableErrorQueryLogging'] = 'Esto incluir� la consulta completa enviada a la base de datos en el log de errores.  Requiere que el registro de errores est� activado.<br /><br /><strong>Nota:  Esto afectar� a la capacidad de filtrar el registro de errores por mensaje de error.</strong>';
$helptxt['allow_disableAnnounce'] = 'Permite a los usuarios desactivar la notificaci�n de temas que anuncies marcando &quot;anunciar tema&quot; al publicar.';
$helptxt['disallow_sendBody'] = 'Esta opci�n elimina la posibilidad de recibir el texto de las respuestas y los mensajes en los emails de notificaci�n.<br /><br />Es com�n que los usuarios, por error, respondan a los emails de notificaci�n, lo que significa en la mayor�a de las veces que el webmaster recibe la respuesta.';
$helptxt['compactTopicPagesEnable'] = 'Esto mostrar� como se mostrar� la selecci�n de las p�ginas.<br /><em>Ej.:</em>
		&quot;3&quot; para mostrar: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; para mostrar: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Esto mostrar� en la parte inferior del foro, el tiempo en segundos que SMF necesit� para crear la p�gina.';
$helptxt['removeNestedQuotes'] = 'Esto eliminar� las citas anidadas de un mensaje cuando dicho mensaje sea citado a trav�s del enlace de cita.';
$helptxt['simpleSearch'] = 'Esto mostrar� una forma de b�squeda simple, con un enlace a una forma para b�squedas avanzadas.';
$helptxt['max_image_width'] = 'Esto te permitir� establecer el m�ximo de una imagen publicada. Im�genes mas peque�as que el m�ximo no son afectadas.';
$helptxt['mail_type'] = 'Esta opci�n te permite escoger entre usar las opciones por defecto de PHP, o sobreescribirlas con SMTP.  PHP no soporta el usar autentificaci�n con SMTP (que en la actualidad, muchos servidores lo requieren) asi que, de necesitarlo, selecciona SMTP.  Recuerda que SMTP puede ser m�s lento, y algunos servidores no toman nombres de usuarios y contrase�as.<br /><br />No necesitas llenar los valores de SMTP, si esta opci�n est� utilizando los valores por defecto de PHP.';
$helptxt['attachment_manager_settings'] = 'Los adjuntos son archivos que los usuarios pueden subir, y a�adir a un mensaje.<br /><br />
		<strong>Comprobar extensi�n de los adjuntos</strong>:<br /> �Quieres comprobar la extensi�n de los adjuntos?<br />
		<strong>Extensiones de adjuntos permitidas</strong>:<br /> Puedes establecer las extensiones permitidas para los archivos adjuntos.<br />
		<strong>Directorio de adjuntos</strong>:<br /> La ruta a tu directorio de adjuntos<br />(ejemplo: /home/sitios/tusitio/www/forum/adjuntos)<br />
		<strong>Espacio M�ximo del directorio de adjuntos</strong> (en KB):<br /> Selecciona el tama�o m�ximo que puede tener el directorio de adjuntos, incluyendo todos los archivos que hay en �l.<br />
		<strong>Tama�o m�ximo de adjuntos por mensaje</strong> (en KB):<br /> Selecciona el tama�o m�ximo que pueden tener todos los adjuntos de un mismo mensaje. Si es menor que el l�mite por adjunto, �ste ser� el l�mite.<br />
		<strong>Tama�o m�ximo por adjunto</strong> (en KB):<br /> Selecciona el tama�o m�ximo de cada adjunto por separado.<br />
		<strong>N�mero m�ximo de adjuntos por mensaje</strong>:<br /> Selecciona el n�mero de adjuntos que una persona puede a�adir a un mensaje.<br />
		<strong>Mostrar adjuntos como imagen en mensajes</strong>:<br /> Si el archivo subido es una imagen, la mostrar� directamente dentro del mensaje.<br />
		<strong>Redimensionar im�genes al mostrarlas en mensajes</strong>:<br /> Si se selecciona esta opci�n, se guardar� un adjunto (m�s peque�o) por separado para mejorar el uso del ancho de banda.<br />
		<strong>Ancho y largo m�ximo de la imagen reducida</strong>:<br /> S�lo se utiliza en la opci�n &quot;Redimensionar im�genes al mostrarlas en mensajes&quot; seg�n el ancho y largo m�ximo establecido. Se redimensionar�n proporcionalmente.';
$helptxt['attachment_image_paranoid'] = 'Seleccionar esta opci�n activar� comprobaciones de seguridad muy estrictas en las im�genes adjuntas. �Advertencia! Estas comprobaciones de seguridad pueden fallar en im�genes v�lidas. Se recomienda encarecidamente usar esta opci�n junto con la recodificaci�n de im�genes, de modo que SMF pueda reconstruir las im�genes en las que las comprobaciones de seguridad fallen: si tiene �xito, ser�n saneadas y subidas. En caso contrario, si la recodificaci�n de im�genes no est� activada, todos los adjuntos que fallen las comprobaciones de seguridad ser�n rechazados.';
$helptxt['attachment_image_reencode'] = 'Seleccionar esta opci�n har� que se traten de recodificar las im�genes adjuntas subidas. La recodificaci�n de im�genes ofrece mejor seguridad. Sin embargo, ten en cuenta que la recodificaci�n de im�genes tambi�n hace que todas las im�genes animadas sean convertidas en est�ticas. <br /> Esta funcionalidad s�lo es posible si el m�dulo GD est� activado en tu servidor.';
$helptxt['avatar_paranoid'] = 'Seleccionar esta opci�n activar� comprobaciones de seguridad muy estrictas en los avatares. �Advertencia! Estas comprobaciones de seguridad pueden fallar en im�genes v�lidas. Se recomienda encarecidamente usar esta opci�n junto con la recodificaci�n de avatares, de modo que SMF pueda reconstruir las im�genes en las que las comprobaciones de seguridad fallen: si tiene �xito, ser�n saneadas y subidas. En caso contrario, si la recodificaci�n de avatares no est� activada, todos los avatares que fallen las comprobaciones de seguridad ser�n rechazados.';
$helptxt['avatar_reencode'] = 'Seleccionar esta opci�n har� que se traten de recodificar los avatares subidas. La recodificaci�n de im�genes ofrece mejor seguridad. Sin embargo, ten en cuenta que la recodificaci�n de im�genes tambi�n hace que todas las im�genes animadas sean convertidas en est�ticas. <br /> Esta funcionalidad s�lo es posible si el m�dulo GD est� activado en tu servidor.';
$helptxt['karmaMode'] = 'Karma es una funci�n que muestra la popularidad de un usuario Los usuarios, si tienen el permiso correspondiente, pueden
		\'aplaudir\' or \'castigar\' a otros usuarios, que es como su popularidad es calculada. Puedes cambiar el
		n�mero de mensajes necesarios para tener &quot;karma&quot;, el tiempo entre castigos o aplausos, y si los administradores
		tienen que esperar este tiempo tambi�n.<br /><br />El que grupos de usuarios puedan castigar a otros se contola a trav�s
		de un permiso. Si tienes problemas al tratar de hacer funcionar esta opci�n para todo mundo, deber�as revisar nuevamente tus permisos.';
$helptxt['cal_enabled'] = 'El calendario puede ser usado para mostrar cumplea�os, o momentos importantes en tu foro.<br /><br />
		<strong>Mostrar d�as como enlaces a \'Publicar evento\'</strong>:<br />Esto permite a los usuarios publicar eventos para ese d�a cuando hagan clic en esa fecha<br />
		<strong>Mostrar n�meros de semana</strong>:<br />Mostrar qu� semana del a�o es.<br />
		<strong>M�ximo de d�as adelantados en el �ndice del foro</strong>:<br />Si se establece en 7, se mostrar�n todos los eventos de la pr�xima semana.<br />
		<strong>Mostrar d�as festivos en el �ndice del foro</strong>:<br />Muestra los d�as festivos del d�a de hoy en una barra del calendario en el �ndice del foro.<br />
		<strong>Mostrar cumplea�os en el �ndice del foro</strong>:<br />Muestra los cumplea�os del d�a de hoy en una barra del calendario en el �ndice del foro.<br />
		<strong>Mostrar eventos en el �ndice del foro</strong>:<br />Muestra los eventos del d�a de hoy en una barra del calendario en el �ndice del foro.<br />
		<strong>Foro default donde se publicar�n</strong>:<br />�Cu�l es el foro predeterminado en el que se publicar�n los eventos?<br />
		<strong>Permitir eventos no enlazado a posts</strong>:<br />Permite a los usuarios publicar eventos sin necesidad de que est�n enlazados a un post en un foro.<br />
		<strong>A�o m�nimo</strong>:<br />Selecciona el &quot;primer&quot; a�o en la lista del calendario.<br />
		<strong>A�o m�ximo</strong>:<br />Selecciona el &quot;�ltimo&quot; a�o en la lista del calendario<br />
		<strong>Color para los cumplea�os</strong>:<br />Selecciona el color del texto cuando se muestren cumplea�os<br />
		<strong>Color para los eventos</strong>:<br />Selecciona el color del texto cuando se muestren eventos<br />
		<strong>Color para d�as festivos</strong>:<br />Selecciona el color del texto cuando se muestren d�as festivos<br />
		<strong>Permitir que los eventos se extiendan varios d�as</strong>:<br />Selecci�nalo para permitir que los eventos se expandan m�ltiples d�as.<br />
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
$helptxt['default_timezone'] = 'La zona horaria del servidor le dice a PHP d�nde est� localizado dicho servidor. Deber�as asegurarte de que est� establecida correctamente, preferentemente en el pa�s en el que la ciudad est� situada. Puedes encontrar m�s informaci�n en el <a href="http://www.php.net/manual/en/timezones.php" target="_blank">sitio de PHP</a>.';
$helptxt['spamWaitTime'] = 'Aqu� puedes seleccionar el tiempo de debe transcurrir entre publicaci�n de mensajes. Esto puede utilizarse para evitar que las personas hagan spam en tu foro, al limitarles qu� tan seguido pueden publicar mensajes.';

$helptxt['enablePostHTML'] = 'Esto permitir� el publicar mensajes tags b�sicos de HTML:
	<ul class="normallist" style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'Aqu� puedes escoger si el usuario puede seleccionar temas, qu� tema ser� usado por los invitados,
	entre varias opciones. Haz <i>clic</i> en cualquiera de los temas de la derecha para cambiar su configuraci�n.';
$helptxt['theme_install'] = 'Esto te permite instalar nuevos temas.  Puedes hacerlo desde un directorio previamente creado, subiendo el archivo para el tema, o copiando el tema de default.<br /><br />Toma en cuenta que el archivo o directorio debe tener el archivo de definici�n <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Esta opci�n le permitir� a tus usuarios usar Flash dentro de sus mensajes,
	como si fueran im�genes.  Esto es un posible riesgo de seguridad, aunque pocos han podido explorarlo.
	�USALO BAJO TU PROPIO RIESGO!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Permite crear un enlace a las <a href="%s?action=.xml;sa=news">Noticas Recientes</a>
	y datos similares.  Se recomienda que limites el tama�o de los mensajes/noticias porque cuando los datos rss se muestran
	en algunos clientes como Trillian, se trunca la informaci�n.';
$helptxt['hotTopicPosts'] = 'Cambia el n�mero de mensajes en un tema necesarios para alcanzar el estado de &quot;caliente&quot; o
	&quot;muy caliente&quot;.';
$helptxt['globalCookies'] = 'Permite el uso de cookies independientes de subdominio.  Por ejemplo, si...<br />
	Tu sitio est� en http://www.simplemachines.org/,<br />
	Y tu foro est� en http://foro.simplemachines.org/,<br />
	Usando esta modificaci�n, te permitir� accesar las cookies del foro en tu sitio.';
$helptxt['secureCookies'] = 'Activar esta opci�n forzar� a las cookies creadas por los usuarios en tu foro a ser marcadas como seguras. Activa esta opci�n s�lo si est�s usando HTTPS a trav�s de tu sitio, ya que romper� el manejo de cookies de otra manera';
$helptxt['securityDisable'] = 'Esto <em>desactiva</em> la revisi�n adicional de contrase�a para acceder a la secci�n de administraci�n. �NO es recomendable!';
$helptxt['securityDisable_why'] = 'Esta es tu contrase�a actual. (la misma que usas para ingresar.)<br /><br />El que tengas que escribirla ayuda a asegurarnos que realmente desees realizar la tarea administrativa que est�s realizando, y que eres <strong>t�</strong> el que la realiza.';
$helptxt['emailmembers'] = 'En este mensaje puedes usar algunas &quot;variables&quot;.  �stas son:<br />
	{\\$board_url} - El URL de tu foro.<br />
	{\\$current_time} - La hora actual.<br />
	{\\$member.email} - El correo electronico del usuario destino.<br />
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
$helptxt['edit_disable_time'] = 'N�mero de minutos transcurridos permitidos antes de que un usuario no pueda continuar editando un mensaje que ha publicado. Pon 0 para desactivarlo. <br /><br /><em>Nota: Esto no tendr� efecto en los usuarios que tengan el permiso para editar los mensajes de otros usuarios.</em>';
$helptxt['posts_require_captcha'] = 'Esta opci�n obligar� a los usuarios a introducir un c�digo mostrado en una imagen de verificaci�n cada vez que creen un mensaje en el foro. S�lo usuarios con un n�mero de mensajes menor que el valor establecido necesitar�n introducir el c�digo (deber�a ayudar a combatir scripts autom�ticos de spam).';
$helptxt['enableSpellChecking'] = 'Activar la revisi�n de ortograf�a. DEBES tener la librer�a pspell instalada en tu servidor y configurado PHP para la utilice. Tu servidor ' . (function_exists('pspell_new') == 1 ? 'SI' : 'NO') . ' parece que tenga esta opci�n configurada.';
$helptxt['disable_wysiwyg'] = 'Esta opci�n desactiva a los usuarios el uso del editor WYSIWYG (&quot;What You See Is What You Get&quot;: Lo que Ves es lo que Obtienes) en la p�gina de edici�n del mensaje.';
$helptxt['lastActive'] = 'Especifica el n�mero de minutos en los que, antes de ese tiempo, un usuario se sigue mostrando activo en el �ndice del foro. El default son 15 minutos.';

$helptxt['customoptions'] = 'Esta secci�n define las opciones que un usuario puede elegir de un cuadro desplegable. Hay varios puntos claves a tener en cuenta en esta secci�n:
	<ul class="normallist">
		<li><strong>Opci�n por defecto:</strong> Aquella opci�n que tenga un &quot;radio button&quot; seleccionado ser� la selecci�n por defecto para el usuario cuando �ste introduzca su perfil.</li>
		<li><strong>Eliminar Opciones:</strong> Para eliminar una opci�n simplemente limpia el cuadro de texto de esa opci�n (todos los usuarios que la seleccionaron tendr�n su opci�n eliminada.</li>
		<li><strong>Reordenar Opciones:</strong> Puedes reordenar opciones moviendo texto entre los cuadros de texto. Sin embargo (importante), debes asegurarte de <strong>no</strong> cambiar el texto al reordenar opciones o bien los datos del usuario se perder�n.</li>
	</ul>';

$helptxt['autoOptDatabase'] = 'Esta opci�n optimiza automaticamente la base de datos cada X d�as.  Especifica 1 para realizar una optimizaci�n diaria.  Asimismo, puedes especificar un m�ximo n�mero de usuarios en l�nea, para que no sobrecargues tu servidor o incomodes a muchos usuarios.';
$helptxt['autoFixDatabase'] = 'Esto arreglar� autom�ticamente tablas en la base de datos con problemas, y continuar� como si nada hubiera sucedido.  Esto puede ser �til, ya que la �nica manera de arreglar este tipo de problemas, es REPARANDO la tabla, y tu foro no estar� ca�do hasta que te des cuenta.  Se te enviar� un email cuando esto suceda.';

$helptxt['enableParticipation'] = 'Esto muestra un peque�o icono en los temas en que el usuario ha publicado mensajes.';

$helptxt['db_persist'] = 'Mantiene la conexi�n activa para incrementar el rendimiento.  Si tu NO est�s en un servidor dedicado, esto puede causarte problemas con tu proveedor de hospedaje.';
$helptxt['ssi_db_user'] = 'Opcionalmente se puede utilizar un usuario y contrase�a diferentes para la base de datos al utilizar SSI.php.';

$helptxt['queryless_urls'] = 'Esto cambia el formato de los URLs un poco, para que sean m�s agradables para los servicios de b�squeda (google, por ejemplo).  Estos URLs se ver�n como, por ejemplo: index.php/topic,1.0.html.

Esta caracter�stica ' . (isset($_SERVER['SERVER_SOFTWARE']) && (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false || strpos($_SERVER['SERVER_SOFTWARE'], 'lighttpd') !== false) ? '' : 'no') . ' funcionar� en tu servidor.';
$helptxt['countChildPosts'] = 'Al marcar esta opci�n, todos los mensajes y temas de un foro hijo contar�n en los totales del foro.<br /><br />This will make things notably slower, but means that a parent with no posts in it won\'t show \'0\'.';
$helptxt['fixLongWords'] = 'Esta opci�n divide las palabras que sean m�s largas de cierta longitud en partes, para que no destruyan la apariencia del foro (en lo posible...). Esta opci�n no deber�a establecerse a un valor por debajo de 40. Esta opci�n no funcionar� en foros que usen UTF-8 y una versi�n de PHP inferior a la 4.4.0. Esta opci�n ' . (empty($GLOBALS['context']['utf8']) || version_compare(PHP_VERSION, '4.4.0') != -1 ? '' : 'NO') . ' funcionar� en tu servidor.';
$helptxt['allow_ignore_boards'] = 'Al marcar esta opci�n permitiras a los usuarios seleccionar foros que quieran ignorar.';

$helptxt['who_enabled'] = 'Esta opci�n te permite activar o desactivar la posibilidad de que los usuarios vean qui�n est� en linea navegando el foro, as� como lo que est�n haciendo.';

$helptxt['recycle_enable'] = '&quot;Recicla&quot; temas y mensajes eliminados al foro especificado.';

$helptxt['enableReportPM'] = 'Esta opci�n permite a tus usuarios informar a los administradores sobre mensajes privados que hayan recibido. Puede ser �til para controlar cualquier abuso de los mensajes privados.';
$helptxt['max_pm_recipients'] = 'Esta opci�n te permite establecer el n�mero m�ximo de destinatarios permitidos en un mensaje privado enviado por un usuario del foro. Puede utilizarse para facilitar el bloqueo de abuso de spam en el sistema de Mensajes Privados. Observa que los usuarios con permiso para enviar boletines de noticias est�n exentos de esta restricci�n. Introduce cero para ilimitado.';
$helptxt['pm_posts_verification'] = 'Esta opci�n obligar� a los usuarios a introducir un c�digo mostrado en una imagen de verificaci�n cada vez que manden un mensaje privado. Solamente usuarios con un n�mero de mensajes inferior al establecido necesitar�n introducir el c�digo - esto deberia ayudar contra los scripts automatizados de spam.';
$helptxt['pm_posts_per_hour'] = 'Esto limitar� el n�mero de mensajes privados, los cuales hayan sido enviados por un usuario en el perido de una hora. Esto no afecta a los administradores o moderadores.';

$helptxt['default_personal_text'] = 'Establece el texto por defecto que un usuario tendr� como &quot;texto personal.&quot;';

$helptxt['modlog_enabled'] = 'Guardar logs de todas las acciones de los moderadores.';

$helptxt['guest_hideContacts'] = 'Si esta opci�n est� seleccionada las direcciones de email y los detalles de los mensajeros (ICQ, Y!, MSN)
	de todos tus usuarios se le ocultar�n a los visitantes de tu foro';

$helptxt['registration_method'] = 'Esta opci�n determina que m�todo de registro es usada para las personas que deseen unirse a tu foro. Puedes seleccionarlo entre:<br /><br />
	<ul class="normallist">
		<li>
			<strong>Registro Desactivado:</strong><br />
				Desactiva el proceso de registro, con este m�todo nadie puede registrarse en tu foro.<br />
		</li><li>
			<strong>Registro Inmediato</strong><br />
				Los nuevos usuarios pueden ingresar y publicar inmediatamente despu�s de registrarse en tu foro.<br />
		</li><li>
			<strong>Activaci�n de Usuario</strong><br />
				Cuando esta opci�n est� activada cualquier usuario que se registre en tu foro tendr� un enlace de activaci�n que se le enviar� por email, y que tendr� que visitar antes de poder convertirse usuario v�lido<br />
		</li><li>
			<strong>Aprobaci�n de Usuarios</strong><br />
				Esta opci�n har� que todos los nuevos usuarios que se registren en tu foro necesiten ser aprobados por un administrador para que se puedan volver usuarios v�lidos.
		</li>
	</ul>';
$helptxt['register_openid'] = '<strong>Autenticar con OpenID</strong><br />
	OpenID es una plataforma que permite usar un nombre usuario en m�ltiples sitios de internet, para simplificar la experiencia online. Para usar OpenID, primero necesitas crear una cuenta OpenID - puedes encontrar una lista de proveedores del servicio en <a href="http://openid.net/" target="_blank">El sitio oficial de OpenID</a><br /><br /> Cuando hayas conseguido un cuenta en OpenID, simplemente escribe tu URL de identificaci�n �nica en el cuadro de texto de OpenID y env�ala. Tras esto ser�s llevado a tu proveedor para verificar tu identidad antes de ser devuelto a este sitio.<br /><br /> En tu primera visita a este, deber�s confirmar varios detalles antes de ser reconocido. Una vez hecho esto, podr�s iniciar sesi�n en este sitio y cambiar las opciones OpenID en tu perfil.<br /><br /> Para m�s informaci�n visita <a href="http://openid.net/" target="_blank">El sitio oficial de OpenID</a>.';

$helptxt['send_validation_onChange'] = 'Cuando esta opci�n est� seleccionada todos los usuarios que cambien su direcci�n de email en su perfil tendr�n que reactivar sus cuenta desde el email enviado a la nueva direcci�n';
$helptxt['send_welcomeEmail'] = 'Cuando esta opci�n est� seleccionada a todos los nuevos usuarios se les enviar� un email de bienvenida a tu foro';
$helptxt['password_strength'] = 'Esta opci�n determina el grado de robustez requerido para las contrase�as seleccionadas por los usuarios de tu foro. Cuanto m�s &quot;robusta&quot; sea la contrase�a, m�s dif�cil es comprometer las cuentas de los usuarios.
	Las posibles opciones son:
	<ul class="normallist">
		<li><strong>Baja:</strong> La contrase�a debe contener al menos cuatro caracteres.</li>
		<li><strong>Media:</strong> La contrase�a debe contener al menos ocho caracteres, y no puede ser parte del nombre o direcci�n email del usuario.</li>
		<li><strong>Alta:</strong> Como la Media, excepto que la contrase�a debe contener tambi�n una mezcla de may�sculas, min�sculas y al menos un n�mero.</li>
	</ul>';

$helptxt['coppaAge'] = 'El valor especificado en este cuadro determinar� la edad m�nima que los nuevos usuarios deben tener para que se les conceda acceso inmediato a los foros.
	Durante el proceso de registro se les pedir� que confirmen si son mayores a esa edad, y de no serlo, puede o neg�rsele su solicitud, o suspendarla esperando por la aprobaci�n de los padres - dependiendo del tipo de restricci�n escogida.
	Si se pone 0 en este valor, entonces todas las restricciones de edad se ignorar�n.';
$helptxt['coppaType'] = 'Si las restricciones de edad est�n activas, entonces este valor determinar� qu� pasar� cuando un usuario m�s joven de la edad m�nima intenta registrarse en tu foro. Hay dos posibilidades:
	<ul class="normallist">
		<li>
			<strong>Rechazar su solicitud de registro:</strong><br />
				A cualquier nuevo usuario que no cumpla con la edad m�nima se le rechazar� su solicitud de registro inmediatamente.<br />
		</li><li>
			<strong>Requerir aprobaci�n del Padre o Tutor</strong><br />
				La cuenta de cualquier nuevo usuario que no cumpla con la edad m�nima marcar� como pendiente de autorizaci�n, y se le mostrar� un formulario en la que sus padres o tutores deben dar el permiso expreso para que se convierta en un usuario del foro.
				Tambi�n se les mostrar�n los datos de contacto que se especificaron en la pantalla de configuraci�n, para que puedan enviar el formulario al administrador por correo o fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Los cuadros de contacto son requeridos para que las formas que otorgan el permiso a los usuarios por debajo de la edad m�nima pueda ser enviada al administador del foro. Estos detalles ser�n mostrados a todos los usuarios debajo de la edad m�nima, y son necesarios para la aprobaci�n del padre o tutor. Por lo menos se debe proveer una direcci�n postal o un n�mero de fax.';

$helptxt['allow_hideOnline'] = 'Cuando esta opci�n est� seleccionada todos los usuarios podr�an ocultarle a los dem�s usuarios si est�n conectados (excepto a los administradores). Si est� desactivado, solamente los usuarios que pueden moderar el foro pueden ocultar su presencia. Es importante mencionar que deshabilitando esta opci�n no cambia el estado de ning�n usuario existente - simplemente les impide ocultarse en el futuro.';
$helptxt['make_email_viewable'] = 'Si se activa esta opci�n, en vez de tener las direcciones email ocultas para usuarios normales e invitados, ser�n p�blicamente visibles para todos en el foro. Activar esto pondr� a tus usuarios en grave riesgo de ser v�ctimas de spam debido a los spambots que a buen seguro visitar�n tu foro. Esta opci�n no sobreescribe la opci�n de usuario para ocultar su propia direcci�n de email a los usuarios. <strong>No</strong> se recomienda activar esta opci�n.';
$helptxt['meta_keywords'] = 'Estas palabras clave son enviadas en la salida de cada p�gina para indicar a los motores de b�squeda (y dem�s) el contenido clave de tu sitio. Una coma deber� separar cada palabra de la lista, y no debes utilizar HTML.';

$helptxt['latest_support'] = 'Este panel te muestra algunos de problemas y preguntas m�s comunes de la configuraci�n de tu servidor. No te preocupes, esta informaci�n no se registra en ning�n momento.<br /><br />Si permanece como &quot;Obteniendo informaci�n de soporte...&quot;, tu computadora muy probablemente no se puede conectar a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Aqu� puedes ver algunos de los m�s populares mods, as� como algunos paquetes o mods aleatorios, con instalaciones r�pidas y sencillas.<br /><br />Si esta secci�n no se puede mostrar, probablemente tu computadora no se puede conectar a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Esta �rea muestra algunos de los �ltimos y m�s populares temas de <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.  Puede que no se muestre correctamente si tu computadora no puede encontrar <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Por tu seguridad, la respuesta a tu pregunta (as� como tu contrase�a) est� encriptada de una manera en la que SMF puede decirte solamente si est� correcta, as�, jam�s podr� decirte (�o a alguien m�s, que es lo importante!) cual es tu respuesta o tu contrase�a.';
$helptxt['moderator_why_missing'] = 'Debido a que la moderaci�n se realiza en cada foro, debes hacer a un usuario moderador desde la <a href="javascript:window.open(\'%s?action=manageboards\'); self.close();">interface de manejo de foros</a>.';

$helptxt['permissions'] = 'A trav�s de los permisos les permites o impides a los grupos hacer cosas espec�ficas.<br /><br />Puedes modificar varios foros al mismo tiempo usando las casillas, o busca en los permisos por un grupo espec�fico al hacer clic en \'Modificar.\'';
$helptxt['permissions_board'] = 'Si un foro se especifica como \'Global,\' significa que el foro no tendr� permisos especiales.  \'Local\' significa que tendr� sus propios permisos - separados de los globales.  Esto te permite tener un foro que tiene m�s (o menos) permisos que otro, sin que sea necesario que los especifiques para cada uno de los foros.';
$helptxt['permissions_quickgroups'] = 'Estos te permiten usar la configuraci�n &quot;default&quot; de permisos - est�ndar significa \'nada especial\', restrictivo significa \'como visitante\', moderador significa \'que un moderador tiene\', y por �ltimo \'mantenimiento\' significa permisos muy cercanos a los de un administrador.';
$helptxt['permissions_deny'] = 'Denegar permisos puede ser �til cuando quieres quitar permisos de algunos usuarios. Puedes a�adir un grupo con permiso \'denegado\' a los miembros que deseas denegar un permiso.<br /><br />Util�zalos con cuidado, un permiso denegado prevalece, no importa a que otros grupos pertenezca el usuario.';
$helptxt['permissions_postgroups'] = 'Al activar permisos para grupos basados en el n�mero de mensajes podr�s asignar permisos a usuarios que han publicado una cierta cantidad de mensajes. Los permisos de grupos basados en el n�mero de mensajes se <em>a�den</em> a los permisos de los grupos convencionales.';
$helptxt['membergroup_guests'] = 'El grupo de invitados son todos los usuarios que no est�n conectados.';
$helptxt['membergroup_regular_members'] = 'Los usuarios regulares son todos aquellos que est�n conectados, pero que no tienen asignado un grupo primario.';
$helptxt['membergroup_administrator'] = 'El administrador puede, por definici�n, ver y realizar cualquier cosa en el foro. No se establecen permisos para el administrador.';
$helptxt['membergroup_moderator'] = 'El grupo Moderador es un grupo especial. Los permisos y opciones asignadas a este grupo son aplicables a los moderadores pero solamente <em>en los foros que moderan</em>. Fuera de ellos son como cualquier otro usuario.';
$helptxt['membergroups'] = 'En SMF hay dos tipos de grupos a los que tus usuarios pueden pertenecer. Estos son:
	<ul class="normallist">
		<li><strong>Grupos Regulares:</strong> Un grupo regular es un grupo en el que los usuarios no son autom�ticamente a�adidos. Para a�adir a un usuario al grupo simplemente ve a su perfil y haz clic en &quot;Configuraci�n de la cuenta&quot;. Ah� puedes asignarle todos los grupos regulares a los que deseas que pertenezca.</li>
		<li><strong>Grupos de Mensajes:</strong> A diferencia de los grupos regulares, este tipo de grupos no pueden ser asignados manualmente. En vez de eso, los usuarios son asignados autom�ticamente a un grupo de este tipo cuando alcanzan el m�nimo de mensajes publicados necesarios para pertenecer a dicho grupo.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Puedes editar esos eventos haciendo clic en el asterisco rojo (*) al lado de sus nombres.';

$helptxt['maintenance_backup'] = 'Esta �rea te permite guardar una copia de todos los mensajes, configuraciones, usuarios, y otra informaci�n de tu foro en un archivo muy grande.<br /><br />Es recomendado hacerlo a menudo, probablemente semanalmete, por seguridad.';
$helptxt['maintenance_rot'] = 'Esto te permite <strong>completa</strong> e <strong>irrevocablemente</strong> borrar temas viejos. Es recomendable que intentes hacer un respaldo primero, en caso que accidentalmente borres algo que no deseabas.<br /><br />Usa esta opci�n con cuidado.';
$helptxt['maintenance_members'] = 'Te permite <strong>completa</strong> e <strong>irrevocablemente</strong> eliminar cuentas de usuario de tu foro. Se recomienda <strong>encarecidamente</strong> que se realice una copia de seguridad antes, para casos en los que puedas eliminar algo que realmente no quer�as.<br /><br />Utiliza esta opci�n con cuidado.';

$helptxt['avatar_server_stored'] = 'Permite a los usuarios utilizar avatares guardados en tu servidor. Generalmente, est�n en el mismo directorio que SMF, en el directorio de avatares.<br />Como consejo, si creas subdirectorios en �l, puedes crear &quot;categor�as&quot; de avatares.';
$helptxt['avatar_external'] = 'Al activarlo, los usuarios pueden teclear una URL que enlace con su propio avatar. El inconveniente es que, en algunos casos, pueden utilizar avatares que son muy grandes o retratos que no quieres en tu foro.';
$helptxt['avatar_download_external'] = 'Con esta opci�n activada, se descargar� el avatar del URL especificado por el usuario. Si el proceso fue realizado con �xito, el avatar se tratar� como un avatar subido por el usuario.';
$helptxt['avatar_upload'] = 'Esta opci�n es similar a &quot;Permitir a los usuarios seleccionar un avatar externo&quot;, excepto que tienes un mejor control sobre los avatares, una mejor manera de redimensionarlos y los usuarios no tienen que tener un sitio donde poner sus avatares.<br /><br />Sin embargo, el inconveniente es que puede utilizar mucho espacio de tu servidor.';
$helptxt['avatar_download_png'] = 'Los PNG son m�s grandes, pero ofrecen una mejor calidad de compresi�n. De no estar seleccionado, se usar�a en su lugar JPEG - que generalmente es de menor tama�o, pero con menor calidad.';

$helptxt['disableHostnameLookup'] = 'Esto desactiva la b�squeda de nombres de servidores, que en algunos servidores es muy lento.  Es importante mencionar que �sto har� la restricci�n de accesos menos eficaz.';

$helptxt['search_weight_frequency'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la b�squeda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antig�edad del �ltimo mensaje que coincidi�\'. Todos los valores son relativos, relacionados entre s�, y deben ser enteros positivos.<br /><br />Este factor cuenta la cantidad de mensajes que coincidieron y los divide por el n�mero total de mensajes dentro del tema.';
$helptxt['search_weight_age'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la b�squeda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antig�edad del �ltimo mensaje que coincidi�\'. Todos los valores son relativos, relacionados entre s�, y deben ser enteros positivos.<br /><br />Este factor califica la antig�edad del �ltimo mensaje dentro de un tema. Entre m�s reciente es, mayor su puntuaci�n.';
$helptxt['search_weight_length'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la b�squeda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antig�edad del �ltimo mensaje que coincidi�\'. Todos los valores son relativos, relacionados entre s�, y deben ser enteros positivos.<br /><br />Este factor est� basado en el tama�o del tema. Entre m�s mensajes tenga un tema, mayor su puntuaci�n.';
$helptxt['search_weight_subject'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la b�squeda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antig�edad del �ltimo mensaje que coincidi�\'. Todos los valores son relativos, relacionados entre s�, y deben ser enteros positivos.<br /><br />Este factor revisa si se encuentran coincidencias en el asunto del tema.';
$helptxt['search_weight_first_message'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la b�squeda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antig�edad del �ltimo mensaje que coincidi�\'. Todos los valores son relativos, relacionados entre s�, y deben ser enteros positivos.<br /><br />Este factor revisa si se encuentran coincidencias en el primer mensaje del tema.';
$helptxt['search_weight_sticky'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la b�squeda. Cambia estos factores de peso para que coincida con las cosas que son importantes espec�ficamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antig�edad del �ltimo mensaje que coincidi�\'. Todos los valores son relativos, relacionados entre s�, y deben ser enteros positivos<br /><br />Este factor revisa cuando un tema est� fijado e incrementa su relevancia si lo est�.';
$helptxt['search'] = 'Aqu� puedes ajustar la configuraci�n de la funci�n de b�squeda. Es importante mencionar que aqu� no puedes especificar quien tiene acceso a la funci�n de b�squeda. Usa la pantalla de \'manejar permisos\' en el panel administrativo para eso.';
$helptxt['search_why_use_index'] = 'Un �ndice de b�squeda puede mejorar enormemente la ejecuci�n de las b�squedas en tu foro. Especialmente cuando el n�mero de mensajes de un foro aumenta, buscar sin un �ndice puede llevar bastante tiempo e incrementa la presi�n sobre tu base de datos. Si tu foro tiene m�s de 50.000 mensajes, deber�as considerar el crear un �ndice de b�squeda para asegurar un funcionamiento �ptimo del tu foro.<br /><br />Ten en cuenta que un �ndice de b�squeda puede ocupar espacio. Un �ndice fulltext es un �ndice incorporado a MySQL. Es relativamente compacto (aproximadamente el mismo tama�o que la tabla de mensajes), pero muchas de las palabras no son indexadas y puede ralentizar algunas de las consultas. El �ndice personalizado es a menudo mayor (dependiendo de tu configuraci�n puede triplicar el tama�o de la tabla de mensajes) pero su funcionamiento es mejor que fulltext y relativamente estable.';

$helptxt['see_admin_ip'] = 'A los administradores y moderadores se les muestran las IPs para facilitar la moderaci�n y para hacer m�s f�cil el rastreo de personas indeseables. Recuerda que las direcciones IP no siempre son identificatorias, y que las IPs cambian peri�dicamente.<br /><br />Tambi�n se les permite a los usuarios ver su propia IP.';
$helptxt['see_member_ip'] = 'Tu direcci�n IP es mostrada solamente a t� y a los moderadores. Recuerda que esta informaci�n no es identificatoria y muchas IPs cambian peri�dicamente.<br /><br />No puedes ver las IPs de otros usuarios y ellos no pueden ver la tuya.';
$helptxt['whytwoip'] = 'SMF utiliza varios m�todos para detectar direcciones IP. Usualmente estos dos m�todos obtienen la misma direcci�n pero en algunos casos puede detectarse m�s de una direcci�n. En este caso SMF registrar� ambas, y las utilizar� para bloqueos (etc). Puedes marcar en cualquiera de ellas para vigilar esa IP y bloquearla si es necesario.';

$helptxt['ban_cannot_post'] = 'La restricci�n \'no puede publicar\' establece el modo s�lo-lectura para el usuario restringido. El usuario no puede crear nuevos temas, ni responder a temas ya existentes, ni enviar mensajes privados ni votar en encuestas. Los usuarios restringidos, sin embargo, pueden leer mensajes privados y temas.<br /><br />Se muestra un mensaje de advertencia a usuarios que tiene restringido el acceso de esta manera.';

$helptxt['posts_and_topics'] = '	<ul class="normallist">
		<li>
			<strong>Configuraci�n de Mensajes</strong><br />
			Modifica la configuraci�n relacionada con la publicaci�n de mensajes y la manera en la que se muestran. Puedes tambi�n activar la comprobaci�n ortogr�fica aqu�.
		</li><li>
			<strong>C�digos BBC</strong><br />
			Activa los c�digos que permiten dar formato a los mensajes del foro. Tambi�n se ajusta qu� c�digos se permiten y cu�les no.
		</li><li>
			<strong>Palabras Censuradas</strong>
			Para controlar el lenguaje de tu foro, puedes censurar ciertas palabras. Esta funci�n te permite convertir palabras prohibidas en versiones adecuadas.
		</li><li>
			<strong>Configuraci�n de Temas</strong>
			Modifica la configuraci�n relacionada con temas. El n�mero de temas por p�gina, d�nde est�n activados o no los mensajes pegados, el n�mero de mensajes necesarios para ser un tema candente, etc.
		</li>
	</ul>';
$helptxt['spider_group'] = 'Seleccionando un grupo restrictivo, cuando un invitado es detectado como un rastreador de b�squedas (search crawler) le ser� autom�ticamente asignado cualquier permiso de &quot;denegar&quot; de este grupo, adem�s de los permisos normales de los invitados. Puedes usar esto para proporcionar menor acceso a un motor de b�squeda que el que le proporcionar�as a un invitado normal. Puedes por ejemplo querar crear un nuevo grupo llamado &quot;Ara�as&quot; y seleccionar esto aqu�. Entonces podr�as denegarle a ese grupo el permiso para ver los perfiles, para evitar que las ara�as indexen los perfiles de tus usuarios.<br />Nota: La detecci�n de ara�as no es perfecta y puede ser simulada por usuarios, as� que esta caracter�stica no garantiza que se restringir� el contenido s�lo a aquellos motores de b�squeda que hayas a�adido.';
$helptxt['show_spider_online'] = 'Esta opci�n te permite seleccionar si las ara�as deber�n ser listadas en la lista de usuarios en l�nea en el �ndice del foro y en la p�gina &quot;Qui�n est� en l�nea&quot; page. Las opciones son:
	<ul class="normallist">
		<li>
			<strong>No, en absoluto</strong><br />
			Las ara�as simplemente aparecer�n como invitados para todos los usuarios.
		</li><li>
			<strong>Mostrar la cantidad de ara�as</strong><br />
			El �ndice del foro mostrar� el n�mero de ara�as que est�n visitando el foro en ese momento.
		</li><li>
			<strong>Mostrar los nombres de las ara�as</strong><br />
			Ser� mostrado el nombre de cada ara�a, de manera que los usuarios podr�n ver cu�ntas ara�as de cada tipo est�n visitando el foro en ese momento - esto tiene efecto tanto en el �ndice del foro como en la p�gina de qui�n est� en l�nea.
		</li><li>
			<strong>Mostrar los nombres de las ara�as - S�lo admins</strong><br />
			Como arriba, excepto que s�lo los administradores pueden ver el estado de las ara�as - para el resto de usuarios las ara�as aparecen como invitados.
		</li>
	</ul>';

$helptxt['birthday_email'] = 'Elegir el �ndice del email de cumplea�os que se usar�.  Una vista previa ser� mostrada en los campos Asunto del email y Cuerpo del email.<br /><strong>Nota:</strong> Establecer esta opci�n no activa autom�ticamente los emails de cumplea�os.  Para activarlos usa la p�gina de <a href="%1$s?action=admin;area=scheduledtasks;%3$s=%2$s" target="_blank" class="new_win">Tareas Programadas</a> y activa la tarea de email de cumplea�os.';
$helptxt['pm_bcc'] = 'Al enviar un mensaje personal puedes elegir a�adir un receptor como BCC o &quot;Blind Carbon Copy&quot; (remitente oculto). La identidad de los receptores BCC no es revelada al resto de receptores del mensaje.';

$helptxt['move_topics_maintenance'] = 'Esto permitir� mover todos los posts de un foro a otro.';
$helptxt['maintain_reattribute_posts'] = 'Puedes usar esta funci�n para atribuir posts de invitado de tu foro a un usuario registrado. Esto es �til si, por ejemplo, un usuario borr� su cuenta y cambi� de idea despu�s, decidiendo volver a registrarse; con esta funci�n se le podr�an reasignar sus posts antiguos a la nueva cuenta.';
$helptxt['chmod_flags'] = 'Puedes establecer manualmente los permisos a los que quieres establecer los archivos seleccionados. Para hacer esto introduce el valor de chmod como un valor num�rico (octeto). Nota - estas banderas no tienen efecto en los sistemas operativos de Microsoft Windows.';

$helptxt['postmod'] = 'Esta secci�n permite a los miembros del equipo de moderaci�n (aquellos con los permisos suficientes) aprobar cualquier mensaje o tema antes de que sea mostrado.';

$helptxt['field_show_enclosed'] = 'Enciarra la entrada de usuario dentro de cierto texto o html. Esto te permitir� a�adir m�s proveedores de mensajer�a instant�nea, im�genes, etc. Por ejemplo:<br /><br /> &lt;a href="http://website.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}" /&gt;&lt;/a&gt;<br /><br /> Ten en cuenta que puedes usar las siguientes variables:<br /> <ul class="normallist"> <li>{INPUT} - Entrada especificada por el usuario.</li> <li>{SCRIPTURL} - Sitio web del foro.</li> <li>{IMAGES_URL} - Url al directorio de im�genes en el tema de usuario actual.</li> <li>{DEFAULT_IMAGES_URL} - Url al directorio de im�genes del tema por defecto.</li> </ul> ';

$helptxt['custom_mask'] = 'La m�scara de entrada es importante para la segurodad de tu foro. Validar la entrada de un usuario puede ayudar asegurar que no es usada de una forma que t� no esperas. Proporcionamos varias expresiones regulares simples como muestra.<br /><br /> <div class="smalltext" style="margin: 0 2em"> &quot;[A-Za-z]+&quot; - Coincidencia con todas las letras may�sculas y min�sculas del alfabeto.<br /> &quot;[0-9]+&quot; - Coincidencia con todos los caracteres num�ricos.<br /> &quot;[A-Za-z0-9]{7}&quot; -Coincidencia con todas las letras may�sculas y min�sculas del alfabeto y con todos los caracteres num�ricos siete veces.<br /> &quot;[^0-9]?&quot; - Prohibir la coincidencia con cualquier n�mero.<br /> &quot;^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$&quot; - Permitir �nicamente c�digos hexadecimales de 3 o 6 caracteres.<br /> </div><br /><br /> Adicionalmente, los metacaracteres especiales ?+*^$ y {xx} pueden ser definidos. <div class="smalltext" style="margin: 0 2em"> ? - Ninguna o una coincidencia con la expresi�n previa.<br /> + - Una o m�s la expresi�n previa.<br /> * - Ninguna o m�s de la expresi�n previa.<br /> {xx} - Un n�mero exacto de la expresi�n previa.<br /> {xx,} - Un n�mero exacto o m�s de la expresi�n previa.<br /> {,xx} - Un n�mero exacto o menos de la expresi�n previa.<br /> {xx,yy} - Una coincidencia exacta entre los dos n�meros de la expresi�n previa.<br /> ^ - Comienzo de una cadena.<br /> $ - Final de una cadena.<br /> \\ - Escapa el siguiente car�cter.<br /> </div><br /><br /> M�s informaci�n y t�cnicas avanzadas pueden ser encontradas en internet.';

?>