<?php
/**
* Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
* in the application's header (in views/_header.php). To add new languages simply copy this file,
* and create a language switch in your root files.
*/
// login & registration classes

// Catalonian (Old Romance Version of Spanish) Language File

$lang = array();

$lang['MESSAGE_ACCOUNT_LOGIN'] = 'Si us plau entreu o registre nou compte en entrar Enllaç Pàgina a la dreta';
$lang['MESSAGE_ACCOUNT_NOT_ACTIVATED'] = "El seu compte s'activarà amb aquesta forma i després verificada amb un correu electrònic de confirmació.";
$lang['MESSAGE_CAPTCHA_WRONG'] = 'Captcha incorrecte!';
$lang['MESSAGE_COOKIE_INVALID'] = 'Cookie no valida';
$lang['MESSAGE_DATABASE_ERROR'] = 'Problema de connexió amb la base de dades.';
$lang['MESSAGE_EMAIL_ALREADY_EXISTS'] = 'Aquesta adreça de correu electrònic ja està registrada. Si us plau, utilitza la pàgina \"He oblidat la contrasenya\" si vostè no la recorda.';
$lang['MESSAGE_EMAIL_CHANGE_FAILED'] = 'Ho sentim. El teu canvi d’adreça electrònica a fallat.';
$lang['MESSAGE_EMAIL_CHANGED_SUCCESSFULLY'] = 'La teva adreça de correu electrònic s’ha canviat correctament. La teva nova adreça de correu electrònic és ';
$lang['MESSAGE_EMAIL_EMPTY'] = "L'adreça de correu electrònic no pot estar buida";
$lang['MESSAGE_EMAIL_INVALID'] = 'La seva adreça de correu electrònic no està en un format de correu electrònic vàlid';
$lang['MESSAGE_EMAIL_SAME_LIKE_OLD_ONE'] = "Ho sentim, aquesta adreça de correu electrònic és la mateixa que l'actual. Si us plau escolliu-ne una altra.";
$lang['MESSAGE_EMAIL_TOO_LONG'] = "L'adreça de correu electrònic no pot tenir més de 64 caràcters";
$lang['MESSAGE_LINK_PARAMETER_EMPTY'] = "Dades de paràmetres d'enllaç, buits.";
$lang['MESSAGE_LOGGED_OUT'] = 'Vostè s\'ha tancat la sessió.'; 
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
$lang['MESSAGE_LOGIN_FAILED'] = "Error d'inici de sessió.'; //'Error de connexió";
$lang['MESSAGE_OLD_PASSWORD_WRONG'] = 'La vostra contrasenya ANTIGA estava malament.';
$lang['MESSAGE_PASSWORD_BAD_CONFIRM'] = 'La contrasenya i la contrasenya de repetició no són la mateixa (no coincideixen)';
$lang['MESSAGE_PASSWORD_CHANGE_FAILED'] = 'Ho sentim, el canvi de la seva contrasenya ha fallat.';
$lang['MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY'] = 'Contrasenya canviada amb èxit!!';
$lang['MESSAGE_PASSWORD_EMPTY'] = 'El camp contrasenya estava buit';
$lang['MESSAGE_PASSWORD_RESET_MAIL_FAILED'] = 'Correu electrònic de restabliment de contrasenya, NO enviat amb èxit! Error: ';
$lang['MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT'] = 'Correu electrònic de restabliment de contrasenya, enviat amb èxit!';
$lang['MESSAGE_PASSWORD_TOO_SHORT'] = 'La contrasenya ha de tenir una longitud mínima de 6 caràcters';
$lang['MESSAGE_PASSWORD_WRONG'] = 'Contrasenya incorrecta. Intenta-ho de nou.';
$lang['MESSAGE_PASSWORD_WRONG_3_TIMES'] = 'Ha introduït una contrasenya incorrecta 3 o més vegades. Si us plau, espereu 30 segons per tornar-ho a intentar.';
$lang['MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL'] = "Ho sentim, no s’ha trobat cap combinació de codi id/verificació aquí...";
$lang['MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL'] = "L activacio sha realitzat correctament";
$lang['MESSAGE_REGISTRATION_FAILED'] = 'Ho sentim, el teu registre ha fallat. Si us plau, torna enrere i intenta-ho de nou.';
$lang['MESSAGE_RESET_LINK_HAS_EXPIRED'] = "El seu enllaç de restabliment ha expirat. Utilitzeu l'enllaç de restabliment en el transcurs d'una hora.";
$lang['MESSAGE_VERIFICATION_MAIL_ERROR'] = 'Ho sentim, no hem pogut enviar un correu electrònic de verificació. El teu compte NO ha estat creat.';
$lang['MESSAGE_VERIFICATION_MAIL_NOT_SENT'] = "El correu electrònic de verificació NO s'ha enviat correctament! Error: ";
$lang['MESSAGE_VERIFICATION_MAIL_SENT'] = "El seu compte ha estat creat amb èxit i li hem enviat un correu electrònic. Si us plau, feu clic a L'ENLLAÇ DE VERIFICACIÓ dins d'aquest correu.";
$lang['MESSAGE_USER_DOES_NOT_EXIST'] = 'Aquest usuari no existeix';
$lang['MESSAGE_USERNAME_BAD_LENGTH'] = 'El nom dusuari no pot ser inferior a 2 o superior a 64 caràcters';
$lang['MESSAGE_USERNAME_CHANGE_FAILED'] = 'Ho sentim, el canvi de nom del seu nom d usuari triat a fallat';
$lang['MESSAGE_USERNAME_CHANGED_SUCCESSFULLY'] = 'El seu nom d usuari s ha canviat correctament. El nou nom d usuari és - ';
$lang['MESSAGE_USERNAME_EMPTY'] = 'El camp usuari estava buit';
$lang['MESSAGE_USERNAME_EXISTS'] = 'Ho sentim, aquest nom d usuari ja està en ús. Si us plau escolliu-ne un altre.';
$lang['MESSAGE_USERNAME_INVALID'] = "El nom d usuari no s'ajusta a l'estructura de noms: només a-Z i els números estan permesos, de 2 a 64 caràcters";
$lang['MESSAGE_USERNAME_SAME_LIKE_OLD_ONE'] = "Ho sentim, aquest nom d'usuari és el mateix que l'actual. Si us plau trieu-ne un altre.";
$lang['MESSAGE_WELCOME'] = 'Bienvenida';
$lang['MESSAGE_CARINA'] = 'Col·laboració Solar Imaging Anotació';
$lang['MESSAGE_LOG_IN_PAGE'] = 'Ingrés a la pàginae';
$lang['MESSAGE_CONSTELLATION'] = 'Constel·lació';
$lang['MESSAGE_CONSTELLATION_INTRO'] = "Carina constel·lació en el cel meridional , que significa  \"la quilla d'un vaixell\".  Carina conté la segona estrella més brillant al cel nocturn.";
$lang['MESSAGE_AIM'] = 'El nostre objectiu és';
$lang['MESSAGE_AIM_DEDICATION'] = 'Dedicat';
$lang['MESSAGE_AIM_INTRO'] = 'Per crear una aplicació web de codi obert de recollir dades valuoses sobre els forats coronals.';
$lang['MESSAGE_LOBO'] = 'Tothom és un';
$lang['MESSAGE_LOBO_INTRO'] = "La Universitat d'Elèctrica i Computació Enginyers de Nou Mèxic agradaria introduir Carina!";
$lang['MESSAGE_MISSION'] = 'La nostra Missió';
$lang['MESSAGE_CARINA_MISSION'] = 'Declaració CARINA Missió';
$lang['MESSAGE_MISSION_1'] = "L'objectiu d'aquest projecte és proporcionar una aplicació d'Internet en col·laboració
                            (aplicació web) en què els usuaris podran anotar imatges d'observació solar. 
                            Els usuaris podran utilitzar un ratolí
                            per a seleccionar al llarg del perímetre de forats de la corona en les imatges.
                            Les dades anotats s'uniran amb la seva respectiva imatge
                            i posat a disposició per al seu posterior anàlisi pel proveïdor d'imatge.";
$lang['MESSAGE_MISSION_2'] = "El camp astronòmic està en la necessitat d'aquest tipus de tecnologia de col·laboració. 
                            Amb l'ajuda d'aquesta aplicació anotació solar,
                            els científics tindran la capacitat per intercanviar idees i millor
                            comprendre la dinàmica del sol que condueixen a aquestes ejeccions de massa coronal.";

// views
$lang['WORDING_BACK_TO_LOGIN'] = "Tornar a la pàgina d'inici de sessió";
$lang['WORDING_BACK_TO_HOME'] = 'Tornar a la pàgina inicial';
$lang['WORDING_CHANGE_EMAIL'] = 'Canviar correu electrònic';
$lang['WORDING_CHANGE_PASSWORD'] = 'Canviar la contrasenya';
$lang['WORDING_CHANGE_USERNAME'] = "Canviar nom d'usuari";
$lang['WORDING_CURRENTLY'] = 'actualment';
$lang['WORDING_EDIT_USER_DATA'] = "Edita dades d'usuari";
$lang['WORDING_EDIT_YOUR_CREDENTIALS'] = 'Vostè està connectat i pot editar els teus credencials aquí';
$lang['WORDING_FORGOT_MY_PASSWORD'] = 'He oblidat la contrasenya';
$lang['WORDING_LOGIN'] = 'Iniciar sessió';
$lang['WORDING_LOGOUT'] = 'Finalitzar sessió';
$lang['WORDING_NEW_EMAIL'] = 'Nou correu electrònic';
$lang['WORDING_NEW_PASSWORD'] = 'Nova contrasenya';
$lang['WORDING_NEW_PASSWORD_REPEAT'] = 'Repeteix la nova contrasenya';
$lang['WORDING_NEW_USERNAME'] = "Nou nom d'usuari (el nom d'usuari no pot estar buit i ha de ser azAZ09 i 2-64 caràcters)";
$lang['WORDING_OLD_PASSWORD'] = 'La vostra contrasenya ANTIGA';
$lang['WORDING_PASSWORD'] = 'Contrasenya';
$lang['WORDING_PROFILE_PICTURE'] = 'La seva foto de perfil (de gravatar):';
$lang['WORDING_REGISTER'] = 'Registrar';
$lang['WORDING_REGISTER_NEW_ACCOUNT'] = 'Registrar un nou compte';
$lang['WORDING_REGISTRATION_CAPTCHA'] = 'Si us plau entra aquests caràcters';
$lang['WORDING_REGISTRATION_EMAIL'] = "Correu electrònic de l'usuari (si us plau proporcioni una adreça de correu electrònic real, obtindrà un correu de verificació amb un enllaç d'activació)";
$lang['WORDING_REGISTRATION_PASSWORD'] = 'Contrasenya (min. 6 caràcters!)';
$lang['WORDING_REGISTRATION_PASSWORD_REPEAT'] = 'Repetir contrasenya';
$lang['WORDING_REGISTRATION_USERNAME'] = "Nom d'usuari (només lletres i números, 2-64 caràcters)";
$lang['WORDING_REMEMBER_ME'] = 'Mantén-me connectat (durant 2 setmanes)'; //"No tancar sessió (durant 2 setmanes)";
$lang['WORDING_REQUEST_PASSWORD_RESET'] = "Sol·licitar un restabliment de contrasenya. Introdueixi el seu nom d'usuari i obtindràs un correu electrònic amb les instruccions:";
$lang['WORDING_RESET_PASSWORD'] = 'Canviar la contrasenya';
$lang['WORDING_SUBMIT_NEW_PASSWORD'] = 'Enviar contrasenya nova';
$lang['WORDING_USERNAME'] = "Nom d'usuari";
$lang['WORDING_YOU_ARE_LOGGED_IN_AS'] = 'T\'has iniciat la sessió com a - '; //"T'has connectat com a";
$lang['WORDING_ADMIN_LOGIN'] = 'Administrator Login';
// MENU
$lang['WORDING_MENU_HOME_PAGE'] = 'Casa Pagina';
$lang['WORDING_MENU_GALLERY'] = 'Galeria';
$lang['WORDING_MENU_SERVICES'] = 'Serveis';
$lang['WORDING_MENU_HELP'] = 'Ajuda';
$lang['WORDING_MENU_CONTACT'] = 'Contacti\'ns';
//  LANGUAGE FLAG TAGS
$lang['LANGUAGE_FLAG_ENGLISH'] = 'ANGLÈS';
$lang['LANGUAGE_FLAG_GREEK'] = 'GREC';
$lang['LANGUAGE_FLAG_ITALIAN'] = 'ITALIÀ';
$lang['LANGUAGE_FLAG_SPANISH'] = 'ESPANYOL';
$lang['LANGUAGE_FLAG_CATALAN'] = 'CATALÀ';
$lang['LANGUAGE_FLAG_PORTUGUESE'] = 'PORTUGUÈS';
$lang['LANGUAGE_FLAG_TAGALOG'] = 'TAGALOGO';
//  SERVICES PAGE
$lang['WORDING_OUR_SERVICES'] = 'Els Nostres Serveis';
$lang['WORDING_UPLOAD_A_PHOTO'] = 'Pujar una foto';
$lang['WORDING_UPLOAD_DESCRIPTION'] = " - Aquesta secció us permetrà a l'usuari carregar una ubicació de la imatge d'una font externa per anotacions. "
        . "                              Salvarà la ubicació a la base de dades d'usuaris per al treball futur.";
$lang['WORDING_ANNOTATE_DEMO'] = 'Annotate DEMO Image';
$lang['WORDING_ANNOTATE_DEMO_DETAILS'] = 'Practice Annotating Administrator Supplied Image';
$lang['WORDING_SOLAR_RESOURCES'] ='SOLAR DYNAMICS & IMAGES RESOURCES';
$lang['WORDING_SOLAR_RESOURCES_DETAILS'] = " - Research and find images for annotations.";
$lang['WORDING_SOLAR_RESOURCES_LINK_1'] ='SDO | Solar Dynamics Observatory';
$lang['WORDING_SOLAR_RESOURCES_LINK_2'] ='SDO | Browse IMage Directories';
$lang['WORDING_SOLAR_RESOURCES_LINK_3'] ='NASA Solar Dynamics Observatory';
$lang['WORDING_SOLAR_RESOURCES_LINK_4'] ='Stanford Solar Center';
$lang['WORDING_SOLAR_RESOURCES_LINK_5'] ='SOHO - Solar And Heliospheric Observatory';
$lang['WORDING_ANNOTATE_WITH_A_PARTNER'] ='Anotar Amb Una Parella';
$lang['WORDING_BROWSE_FOR_IMAGE'] = 'Explorar àlbum Per seleccionar una imatge';
$lang['WORDING_BROWSE_IMAGE_DESCRIPTION'] = " - Seleccioneu una imatge en àlbums per anotar.";
$lang['WORDING_COLLABORATE'] = 'Col·laborar';
$lang['WORDING_COLLABORATE_DESCRIPTION'] = " - Contactar amb altres usuaris a discutir sobre imatges.";
$lang['WORDING_MY_PROFILE'] = 'El Meu Perfil';
$lang['WORDING_MY_PROFILE_DESCRIPTION'] = " - Informació sobre el perfil d'usuari d'actualització.";
$lang['WORDING_DATA_EXPORT'] = "Anotacions Exportació";
$lang['WORDING_DATA_EXPORT_DETAILS'] = " - Anotació de dades de sortida en arxiu amb format CSV. Usuari sol·licita la ubicació del fitxer de sortida.";
$lang['WORDING_UNM'] = "Universitat de Nou Mèxic - Any Escolar 2014 - 2015";
$lang['WORDING_SDP-SIC'] = "Projecte Sènior de Disseny - Solar Col·laboració Imatge";
$lang['WORDING_TEAM'] = "equip";
$lang['WORDING_UNM-SDPW'] = "UNM majors projectes de disseny web";
//  GALLERY PAGE
$lang['WORDING_LATEST_IMAGE'] = 'Última Imatge';
$lang['WORDING_ARCHIVE_SUMMARY'] = 'Arxiu Resum';
$lang['WORDING_COMPLETE_ARCHIVE_SOLAR_IMAGES'] = "Arxiu complet d'imatges solars per any i mes.";
$lang['WORDING_PREVIOUS_YEARS'] = 'Anys Anteriors';
$lang['WORDING_ARCHIVE'] = 'Arxiu';
//  ANNOTATE PHOTO PAGE
$lang['WORDING_ANNOTATE_PHOTO'] = 'Anotar Les Fotos';
$lang['WORDING_OPERATIONS'] = 'OPERACIONS:  ';
$lang['WORDING_ANNOTATE'] = 'ESCRIURE';
$lang['WORDING_DELETE_LAST_ANNOTATION_POINT'] = 'ESBORRAR PUNT DE ANOTACIÓ ÚLTIMA';
$lang['WORDING_DELETE_ALL_POINTS'] = 'ELIMINAR TOTS ELS PUNTS';
$lang['MESSAGE_ARE_YOU_CERTAIN'] = 'ESTEU SEGUR?!';
$lang['MESSAGE_CLICK_ANNOTATE_TO_RESUME'] = 'Feu clic ANOTAR per reprendre';
$lang['WORDING_ANNOTATION_SAVE'] = 'SAVE';
$lang['WORDING_ANNOTATION_CANCEL'] = 'CANCEL LAR';
$lang['WORDING_ANNOTATION_SUBMIT'] = 'ENVIAR ANOTACIONS';
$lang['WORDING_ANNOTATION_REQUEST'] = 'ANOTACIONS SOL·LICITUD';
$lang['WORDING_ANNOTATION_QUIT'] = 'Tornar a Serveis - Totes les anotacions rebutjats';
$lang['WORDING_CONNECT'] = 'Habilita Connect Anotacions';
//  ANNOTATION DATA RETRIEVE
$lang['MESSAGE_ANNOTATION_DATA_RETRIEVED'] = 'Anotació de dades recuperats per a arxius d\'imatge: ';
//  HELP PAGE
$lang['WORDING_HELP_WHAT_IS'] = 'Què és un forat a la corona?';
$lang['WORDING_HELP_WHAT_IS_DETAILS'] = 'Corona de Nostre sol és irregular, no uniforme. Parts més fosques fredes
                                    de la corona són coneguts com forats de la corona. En aquests refredador
                                    seccions més fosques que hi ha nivells de gas i energia més baixos que
                                    l\'àrea circumdant. A causa d\'això, el sol magnètica
                                    camp arc causant partícules solars per escapar del sol
                                    en forma de vent solar. Si els forats coronals es tornen prou gran
                                    ocorren coronal cotxe ejeccions de massa. La qual cosa és una mala 
                                    notícia per a nosaltres a la terra.';
$lang['WORDING_HELP_WHAT_DOES'] = 'Què CARINA té a veure amb el sol?';
$lang['WORDING_HELP_WHAT_DOES_DETAILS'] = 'Carina utilitza la gran base d\'usuaris de la Internet per estudiar, analitzar,
                                 i el més important anotar imatges del sol per fer un registre d\'aquests
                                 forats de la corona. Les anotacions d\'aquestes imatges es registren en una base de dades
                                 on més tard es poden analitzar. Saber el que el nostre sol està fent és vital per
                                 entendre clima solar per protegir els nostres satèl·lits, alimentació i comunicació
                                 sistemes, i altres sistemes electrònics vitals.';
$lang['WORDING_HELP_HOW_DO'] = 'Com començo?';
$lang['WORDING_HELP_HOW_DO_DETAILS'] = 'Es comença per la creació d\'un compte gratuïta. Des d\'aquí es pot entrar en l\'accés al
                                   conjunt d\'eines de la fitxa serveis. Aquí és on es pot editar el nostre perfil
                                   informació, pujar una foto, anotar una foto, anotació de dades d\'exportació, i
                                   accedir a la sala de xat IRC #carina a Mibbi.';
$lang['WORDING_HELP_UPLOADING'] = 'Pujar una foto';
$lang['WORDING_HELP_UPLOADING_DETAILS'] = 'Dins de la pestanya serveis clic a l\'enllaç Pujar una foto el portarà
                                           a la pàgina de càrrega, on podeu seleccionar el fitxer desitjat i carregar.';
$lang['WORDING_HELP_ANNOTATE'] = 'Anotar a Photo';
$lang['WORDING_HELP_ANNOTATE_DETAILS'] = 'En fer clic en l\'àlbum Navegar a Seleccioneu enllaç d\'imatge o Examinar Àlbum per
                                          Seleccionar Imatge de la pàgina de serveis el portarà a l\'anotació
                                          eina. Des d\'aquí es pot seleccionar una imatge per anotar i començar a cercar
                                          per forats de la corona. Comenceu per col·locar el cursor del ratolí sobre la imatge.
                                          Les seves coordenades del ratolí es veuen en temps real sobre la imatge. Fes Clic
                                          i col·locar waypoints voltant dels forats coronals en la imatge. Esborreu
                                          el seu últim waypoint, clars tots els punts, connectar punts i sol·licitud
                                          annotattions. Mostrant connexions en els punts de pas és de gran ajuda a veure
                                          l\'orifici coronal. Quan estiguis satisfet amb la teva feina feu clic a Enviar Anotacions
                                          per escriure les seves anotacions a la base de dades.';
$lang['WORDING_HELP_COMMUNICATE'] = 'Comunicar-se amb altres en l\'IRC';
$lang['WORDING_HELP_COMMUNICATE_DETAILS'] = 'Què millor manera d\'obtenir ajuda i respostes a les seves preguntes de la comunicació
                                             amb els seus companys. L\'enllaç Col·laboració en la pestanya Serveis el portarà a
                                             la pàgina de col·laboració amb un enllaç per accedir a la sala de xat a la #carina
                                             costat dret. La sala de xat s\'obrirà en una nova finestra. D\'aquí
                                             pot utilitzar un sobrenom generada automàticament o fer el seu propi únic. Mentre Que
                                             en línia que vostè pot parlar amb altres a la sala de xat principal, o PM ( Personal
                                             Missatge ) individus. Feu clic aquí per iniciar la #carina Chatroom IRC.';
$lang['WORDING_HELP_EXPORTING'] = 'Exportació d\'anotació de dades';
$lang['WORDING_HELP_EXPORTING_DETAILS'] = 'El contingut de la base de dades d\'anotació es poden exportar per al seu posterior anàlisi.';
