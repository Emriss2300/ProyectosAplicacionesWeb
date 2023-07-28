¡Bienvenido a Hueyel Chile Online!
"Actualización Modelo-Vista-Controlador"

Soy Francisco Nuñez, desarrollador de este sistema web dedicado a la Agrupación Folclórica Hueyel de Rancagua. Me complace presentarte las nuevas funcionalidades implementadas en la página para que puedas disfrutar de una experiencia más completa.
Para utilizar estas funciones, asegúrate de contar con un entorno que permita la ejecución de PHP y SQL para el correcto funcionamiento de las consultas y registros en la base de datos.

Registro de Usuarios:

Hemos añadido una nueva característica que te permitirá registrarte en nuestra página y acceder a contenido exclusivo.
Para registrarte, sigue estos sencillos pasos:

En la página de inicio, encontrarás un formulario de "Registro de Usuario".
Completa los campos solicitados, como "Usuario" y "Contraseña".
Haz clic en el botón "Registrarse" para enviar tus datos.
Verificaciones de Registro:

Una vez que te hayas registrado, hemos implementado un sistema de verificación para asegurarnos de que los usuarios sean únicos. Cuando envíes el formulario de registro, la página verificará si el nombre de usuario ya está en uso. Si el nombre de usuario ya existe, te mostraremos un mensaje de error indicándote que elige otro nombre de usuario.

Acceso a la Página de Inicio:

Luego de registrarte con éxito, podrás acceder a la página de inicio de sesión utilizando tus credenciales. Ingresa tu nombre de usuario y contraseña en el formulario de "Inicio de Sesión" en la página principal y haz clic en el botón "Iniciar sesión".

Actualización de la Página Principal:

La página principal ahora muestra un carrusel de imágenes adicionales si has expresado interés en obtener más información sobre la agrupación. Si marcó la casilla de verificación "¿Estás interesado en la información de la página?" en el formulario de inicio, se mostrarán imágenes de diferentes presentaciones y eventos de la agrupación.

Base de Datos "validar":

Para garantizar la persistencia de los datos de los usuarios, hemos implementado una base de datos llamada "validar". Esta base de datos contiene las tablas necesarias para almacenar la información de los usuarios registrados. El archivo SQL llamado "validar.sql" se encuentra en la carpeta contenedora del sistema web y fue utilizado para su desarrollo.

Conexión a la Base de Datos "validar" para los Párrafos:

Además, para asegurar que los párrafos de la página principal se carguen dinámicamente desde la base de datos, hemos configurado la conexión con los siguientes datos:

Servidor: localhost
Usuario de la base de datos: Francisco1234
Clave: 1234
Nombre de la base de datos: validar

Cada vez que accedas a la página principal, los párrafos se cargarán directamente desde la base de datos "validar", lo que nos brinda la flexibilidad de mantener el contenido actualizado y relevante para nuestros usuarios.

Además, estamos siguiendo el patrón Modelo-Vista-Controlador (MVC) en nuestro diseño. Para los códigos encargados del login, hemos dejado los archivos en la misma carpeta contenedora. Mientras que, para los archivos dedicados a la página principal, los hemos organizado en carpetas nuevas para evitar confusiones (carpeta "controlador", carpeta "modelo" y carpeta "Vista") y mantener la separación de funcionalidades.

Esperamos que disfrutes de estas nuevas funcionalidades y que encuentres toda la información que estás buscando sobre la Agrupación Folclórica Hueyel de Rancagua.

Estamos comprometidos con ofrecerte la mejor experiencia posible en Hueyel Chile Online, y esta mejora en los párrafos es un reflejo de nuestro esfuerzo constante por proporcionarte información fresca y valiosa sobre nuestra agrupación folclórica.

¡Gracias por tu apoyo y por ser parte de nuestra comunidad folclórica!

Francisco Nuñez O.
Ingeniería en Informática
Instituto Profesional de Providencia
Programación de Aplicaciones Web
Módulo 4.