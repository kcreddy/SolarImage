<?php
/**
* Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
* in the application's header (in views/_header.php). To add new languages simply copy this file,
* and create a language switch in your root files.
*/
// login & registration classes

// Spanish Language File

$lang = array();

$lang['MESSAGE_ACCOUNT_LOGIN'] = 'Por favor Inicie sesión o registro nueva cuenta al entrar Enlace Página a la derecha';
$lang['MESSAGE_ACCOUNT_NOT_ACTIVATED'] = "Su cuenta aún no está activada. Por favor, haga clic en el enlace de confirmación en el correo electrónico.";
$lang['MESSAGE_CAPTCHA_WRONG'] = 'Captcha estaba equivocado!';
$lang['MESSAGE_COOKIE_INVALID'] = 'Cookies no válida';
$lang['MESSAGE_DATABASE_ERROR'] = 'Problema de conexión de base de datos.';
$lang['MESSAGE_EMAIL_ALREADY_EXISTS'] = 'Esta dirección de correo electrónico ya está registrada . Por favor, utilice la \"Olvidé mi contraseña \" página si no lo recuerda.';
$lang['MESSAGE_EMAIL_CHANGE_FAILED'] = 'Lo sentimos, tu dirección de correo electrónico no su modificación.';
$lang['MESSAGE_EMAIL_CHANGED_SUCCESSFULLY'] = 'Tu dirección de correo ha sido cambiada con éxito. Nueva dirección de correo electrónico es';
$lang['MESSAGE_EMAIL_EMPTY'] = "El correo electrónico no puede estar vacío";
$lang['MESSAGE_EMAIL_INVALID'] = 'Su dirección de correo electrónico no está en un formato de correo electrónico válida';
$lang['MESSAGE_EMAIL_SAME_LIKE_OLD_ONE'] = "Lo sentimos, dirección de correo electrónico que es la misma que la actual. Por favor elija otro.";
$lang['MESSAGE_EMAIL_TOO_LONG'] = "El correo electrónico no puede ser superior a 64 caracteres";
$lang['MESSAGE_LINK_PARAMETER_EMPTY'] = "Datos de parámetros enlace vacía.";
$lang['MESSAGE_LOGGED_OUT'] = 'Se le ha cerrado la sesión.';
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
$lang['MESSAGE_LOGIN_FAILED'] = 'Error de inicio de sesion.'; 
$lang['MESSAGE_OLD_PASSWORD_WRONG'] = 'Su contraseña VIEJO estaba equivocado.';
$lang['MESSAGE_PASSWORD_BAD_CONFIRM'] = 'Contraseña y la contraseña de repetición no son lo mismo';
$lang['MESSAGE_PASSWORD_CHANGE_FAILED'] = 'Sorry, your password changing failed.';
$lang['MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY'] = 'Contraseña cambiada con éxito!';
$lang['MESSAGE_PASSWORD_EMPTY'] = 'Campo Contraseña estaba vacía';
$lang['MESSAGE_PASSWORD_RESET_MAIL_FAILED'] = 'De restablecimiento de contraseña de correo no enviado con éxito! Error: ';
$lang['MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT'] = 'Electrónico de restablecimiento de contraseña enviado con éxito!';
$lang['MESSAGE_PASSWORD_TOO_SHORT'] = 'Contraseña tiene una longitud mínima de 6 caracteres';
$lang['MESSAGE_PASSWORD_WRONG'] = 'Contraseña incorrecta. Inténtalo de nuevo.';
$lang['MESSAGE_PASSWORD_WRONG_3_TIMES'] = 'Ha introducido una contraseña incorrecta 3 o más veces. Por favor, espere 30 segundos para volver a intentarl.';
$lang['MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL'] = "Lo sentimos, no hay tal combinación del código de identificación/verificación aquí...";
$lang['MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL'] = "Activación se realizó correctamente! Ahora puede iniciar sesión en";
$lang['MESSAGE_REGISTRATION_FAILED'] = 'Lo sentimos, tu inscripción no pudo. Por favor, regrese y vuelva a intentarlo.';
$lang['MESSAGE_RESET_LINK_HAS_EXPIRED'] = "Su vínculo de cambio ha expirado. Utilice el vínculo de cambio dentro de una hora.";
$lang['MESSAGE_VERIFICATION_MAIL_ERROR'] = 'Lo sentimos, no hemos podido enviar un correo electrónico de verificación. Su cuenta no ha sido creada.';
$lang['MESSAGE_VERIFICATION_MAIL_NOT_SENT'] = "El correo de verificación NO ha enviado correctamente! Error: ";
$lang['MESSAGE_VERIFICATION_MAIL_SENT'] = "Su cuenta ha sido creada con éxito y les hemos enviado un correo electrónico. Por favor, haga clic en el enlace de verificación dentro de ese correo.";
$lang['MESSAGE_USER_DOES_NOT_EXIST'] = 'Este usuario no existe';
$lang['MESSAGE_USERNAME_BAD_LENGTH'] = 'Nombre de usuario no puede ser inferior a 2 o más de 64 caracteres';
$lang['MESSAGE_USERNAME_CHANGE_FAILED'] = 'Lo sentimos , su nombre de usuario elegido el cambio de nombre no';
$lang['MESSAGE_USERNAME_CHANGED_SUCCESSFULLY'] = 'Su nombre de usuario se ha cambiado correctamente. Nuevo nombre de usuario es ';
$lang['MESSAGE_USERNAME_EMPTY'] = 'Campo Usuario estaba vacía';
$lang['MESSAGE_USERNAME_EXISTS'] = 'Lo sentimos, ese nombre de usuario ya está en uso. Por favor elija otro.';
$lang['MESSAGE_USERNAME_INVALID'] = "Nombre de usuario no se ajusta a la estructura de nombres : sólo a-Z y los números están permitidos, de 2 a 64 caracteres";
$lang['MESSAGE_USERNAME_SAME_LIKE_OLD_ONE'] = "Lo sentimos, ese nombre de usuario es la misma que la actual. Por favor elija otro.";
//  Common Wording/Messages in Pages
$lang['MESSAGE_WELCOME'] = 'Bienvenida';
$lang['MESSAGE_CARINA'] = 'Colaboración Solar Imaging Anotación';
$lang['MESSAGE_LOG_IN_PAGE'] = 'Ingreso en la página';
$lang['MESSAGE_CONSTELLATION'] = 'Constelación';
$lang['MESSAGE_CONSTELLATION_INTRO'] = "Carina constelación en el cielo del sur, lo que significa \"la quilla de un barco\". Carina contiene la segunda estrella más brillante en el cielo nocturno.";
$lang['MESSAGE_AIM'] = 'Nuestro objetivo es';
$lang['MESSAGE_AIM_DEDICATION'] = 'Dedicado';
$lang['MESSAGE_AIM_INTRO'] = 'Para crear una aplicación web de código abierto que recoger datos valiosos sobre los agujeros coronales.';
$lang['MESSAGE_LOBO'] = 'Todo el mundo es un';
$lang['MESSAGE_LOBO_INTRO'] = "La Universidad de Eléctrica y Computación Ingenieros de Nuevo México gustaría introducir Carina!";
$lang['MESSAGE_MISSION'] = 'Nuestra Mision';
$lang['MESSAGE_CARINA_MISSION'] = 'Declaración CARINA Mision';
$lang['MESSAGE_MISSION_1'] = "El objetivo de este proyecto es proporcionar una colaboración
                            aplicación de Internet (aplicación web) en la que los usuarios podrán
                            para anotar imágenes de observación solar. Los usuarios podrán utilizar un ratón
                            para hacer clic a lo largo del perímetro de agujeros de la corona en las imágenes.
                            Los datos anotados se unirán con su respectiva imagen
                            y puesto a disposición para su posterior análisis por el proveedor de imágenes.";
$lang['MESSAGE_MISSION_2'] = "El campo astronómico está en la necesidad de este tipo de colaboración
                            la tecnología. Con la ayuda de esta aplicación anotación solar,
                            los científicos tendrán la capacidad para intercambiar ideas y mejor
                            comprender la dinámica del sol que conducen a estas eyecciones de masa coronal.";
// views
$lang['WORDING_BACK_TO_LOGIN'] = "Volver a inicio página";
$lang['WORDING_CHANGE_EMAIL'] = 'Cambiar dirección';
$lang['WORDING_CHANGE_PASSWORD'] = 'cambiar la contraseña';
$lang['WORDING_CHANGE_USERNAME'] = "Cambiar nombre de usuario";
$lang['WORDING_CURRENTLY'] = 'actualmente';
$lang['WORDING_EDIT_USER_DATA'] = "Editar datos de usuario";
$lang['WORDING_EDIT_YOUR_CREDENTIALS'] = 'Usted está en el sistema y puede editar sus credenciales aquí';
$lang['WORDING_FORGOT_MY_PASSWORD'] = 'Olvidé mi contraseña';
$lang['WORDING_LOGIN'] = 'Iniciar sesión';
$lang['WORDING_LOGOUT'] = 'Finalizar la sesión';
$lang['WORDING_NEW_EMAIL'] = 'Nueva dirección de correo electrónico';
$lang['WORDING_NEW_PASSWORD'] = 'Nueva contraseña';
$lang['WORDING_NEW_PASSWORD_REPEAT'] = 'Repetir nueva contraseña';
$lang['WORDING_NEW_USERNAME'] = "Nuevo nombre de usuario (nombre de usuario no puede estar vacía y debe ser azAZ09 y 2-64 caracteres)";
$lang['WORDING_OLD_PASSWORD'] = 'Su contraseña ANTIGA';
$lang['WORDING_PASSWORD'] = 'Contraseña';
$lang['WORDING_PROFILE_PICTURE'] = 'Su foto de perfil (de gravatar):';
$lang['WORDING_REGISTER'] = 'Registrarse';
$lang['WORDING_REGISTER_NEW_ACCOUNT'] = 'Registrar una nueva cuenta';
$lang['WORDING_REGISTRATION_CAPTCHA'] = 'Por favor ingrese los caracteres';
$lang['WORDING_REGISTRATION_EMAIL'] = "Correo electrónico del usuario (por favor proporcione una dirección de correo electrónico real, obtendrá un correo de verificación con un enlace de activación)";
$lang['WORDING_REGISTRATION_PASSWORD'] = 'Contraseña (min. 6 caracteres!)';
$lang['WORDING_REGISTRATION_PASSWORD_REPEAT'] = 'Repetir contraseña';
$lang['WORDING_REGISTRATION_USERNAME'] = "Nombre de usuario (sólo letras y números, 2-64 caracteres)";
$lang['WORDING_REMEMBER_ME'] = 'No cerrar sesión (durante 2 semanas)';
$lang['WORDING_REQUEST_PASSWORD_RESET'] = "Solicite un restablecimiento de contraseña. Introduzca su nombre de usuario y obtendrás un correo con instrucciones:";
$lang['WORDING_RESET_PASSWORD'] = 'Cambiar mi contraseña';
$lang['WORDING_SUBMIT_NEW_PASSWORD'] = 'Enviar nueva contraseña';
$lang['WORDING_USERNAME'] = "Nombre de usuario";
$lang['WORDING_YOU_ARE_LOGGED_IN_AS'] = 'Ha iniciado la sesión como ';
$lang['WORDING_ADMIN_LOGIN'] = 'Administrator Login';
// MENU
$lang['WORDING_MENU_HOME_PAGE'] = 'Casa Pagina';
$lang['WORDING_MENU_GALLERY'] = 'Galería';
$lang['WORDING_MENU_SERVICES'] = 'Servicios';
$lang['WORDING_MENU_HELP'] = 'Ayuda';
$lang['WORDING_MENU_CONTACT'] = 'Contáctenos';
//  LANGUAGE FLAG TAGS
$lang['LANGUAGE_FLAG_ENGLISH'] = 'INGLÉS';
$lang['LANGUAGE_FLAG_GREEK'] = 'GRIEGO';
$lang['LANGUAGE_FLAG_ITALIAN'] = 'ITALIANO';
$lang['LANGUAGE_FLAG_SPANISH'] = 'ESPAÑOL';
$lang['LANGUAGE_FLAG_CATALAN'] = 'CATALÁN';
$lang['LANGUAGE_FLAG_PORTUGUESE'] = 'PORTUGUÉS';
$lang['LANGUAGE_FLAG_TAGALOG'] = 'TAGALOGO';
//  SERVICES PAGE
$lang['WORDING_OUR_SERVICES'] = 'Nuestros Servicios';
$lang['WORDING_UPLOAD_A_PHOTO'] = 'Subir Una Foto';
$lang['WORDING_ANNOTATE_A_PHOTO'] = 'Anotar Una Foto';
$lang['WORDING_ANNOTATE_WITH_A_PARTNER'] ='Anotar Con Una Pareja';
$lang['WORDING_EDIT_AN_EXISTING_ANNOTATION'] = 'Editar Una Anotación Existente';
$lang['WORDING_COLLABORATE'] = 'Colaborar';
$lang['WORDING_MY_PROFILE'] = 'Mi Perfil';
$lang['WORDING_UPLOAD_DESCRIPTION'] = '- Esta sección le permitirá al usuario cargar una ubicación de la imagen de una fuente externa para anotaciones . Salvará la ubicación en la base de datos de usuarios para el trabajo futuro.';
$lang['WORDING_ANNOTATE_PHOTO_DESCRIPTION'] = "- El usuario puede localizar una ubicación imagen guardada y luego anotar .";
$lang['WORDING_ANNOTATE_WITH_A_PARTNER_DESCRIPTION'] = "- Colaborar actividad anotación.";
$lang['WORDING_EDIT_AN_EXISTING_ANNOTATION_DESCRIPTION'] = "- Buscar una ubicación de la imagen almacenada modificar / agregar anotaciones .";
$lang['WORDING_COLLABORATE_DESCRIPTION'] = "- Contactar con otros usuarios a discutir sobre imágenes .";
$lang['WORDING_MY_PROFILE_DESCRIPTION'] = "- Información sobre el perfil de usuario de actualización .";
//  GALLERY PAGE
$lang['WORDING_LATEST_IMAGE'] = 'Última Imagen';
$lang['WORDING_ARCHIVE_SUMMARY'] = 'Archivo Resumen';
$lang['WORDING_COMPLETE_ARCHIVE_SOLAR_IMAGES'] = 'Archivo completo de imágenes solares por año y mes.';
$lang['WORDING_PREVIOUS_YEARS'] = 'Años Anteriores';
$lang['WORDING_ARCHIVE'] = 'Archivo';
//  ANNOTATE PHOTO PAGE
$lang['WORDING_ANNOTATE_PHOTO'] = 'Anotar las fotos';
$lang['WORDING_OPERATIONS'] = 'OPERACIONES:  ';
$lang['WORDING_ANNOTATE'] = 'ANOTAR';
$lang['WORDING_DELETE_LAST_ANNOTATION_POINT'] = 'BORRAR PUNTO DE ANOTACIÓN ÚLTIMA';
$lang['WORDING_DELETE_ALL_POINTS'] = 'ELIMINAR TODOS LOS PUNTOS';
$lang['MESSAGE_ARE_YOU_CERTAIN'] = '¿ESTÁ SEGURO?!';
$lang['MESSAGE_CLICK_ANNOTATE_TO_RESUME'] = 'Haga clic ANOTAR para reanudar';
$lang['WORDING_ANNOTATION_SAVE'] = 'SAVE';
$lang['WORDING_ANNOTATION_CANCEL'] = 'CANCELAR';