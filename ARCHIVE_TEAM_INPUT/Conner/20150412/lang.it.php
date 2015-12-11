<?php

/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// Italian Language File

$lang = array();

// login & registration classes
$lang['MESSAGE_ACCOUNT_LOGIN'] = "Effettua il login o registrati nuovo conto presso il Log In Pagina link a destra";
$lang['MESSAGE_ACCOUNT_NOT_ACTIVATED'] = "Il tuo account verrà attivato con il presente modulo e poi verificata con una mail di conferma.";
$lang['MESSAGE_CAPTCHA_WRONG'] = "Captcha era sbagliato!";
$lang['MESSAGE_COOKIE_INVALID'] = "Biscotto non valido";
$lang['MESSAGE_DATABASE_ERROR'] = "Problema di connessione di database.";
$lang['MESSAGE_EMAIL_ALREADY_EXISTS'] = "Questo indirizzo e-mail  gi registrato. Si prega di utilizzare il \" Ho dimenticato la password\" pagina se non ricordi.";
$lang['MESSAGE_EMAIL_CHANGE_FAILED'] = "Spiacenti, la tua e-mail che cambia non  riuscita.";
$lang['MESSAGE_EMAIL_CHANGED_SUCCESSFULLY'] = "Il tuo indirizzo e-mail  stata cambiata con successo. Nuovo indirizzo email � ";
$lang['MESSAGE_EMAIL_EMPTY'] = "Email non pu� essere vuoto";
$lang['MESSAGE_EMAIL_INVALID'] = "L'indirizzo email non � in un formato e-mail valido";
$lang['MESSAGE_EMAIL_SAME_LIKE_OLD_ONE'] = "Siamo spiacenti, questo indirizzo di posta elettronica � la stessa di quella attuale. Scegliere un altro.";
$lang['MESSAGE_EMAIL_TOO_LONG'] = "Email non pu� essere pi� lungo di 64 caratteri";
$lang['MESSAGE_LINK_PARAMETER_EMPTY'] = "Link Empty dati dei parametri.";
$lang['MESSAGE_LOGGED_OUT'] = "Sei stato disconnesso.";
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
$lang['MESSAGE_LOGIN_FAILED'] = "Accesso non riuscito.";
$lang['MESSAGE_OLD_PASSWORD_WRONG'] = "La password OLD era sbagliato.";
$lang['MESSAGE_PASSWORD_BAD_CONFIRM'] = "Password e password di ripetere non sono la stessa cosa";
$lang['MESSAGE_PASSWORD_CHANGE_FAILED'] = "Spiacenti, la password che cambia non � riuscita.";
$lang['MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY'] = "Password cambiata con successo!";
$lang['MESSAGE_PASSWORD_EMPTY'] = "Campo password era vuoto";
$lang['MESSAGE_PASSWORD_RESET_MAIL_FAILED'] = "Reset password non Posta inviata con successo! errore: ";
$lang['MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT'] = "Reset password inviata correttamente!";
$lang['MESSAGE_PASSWORD_TOO_SHORT'] = "Password ha una lunghezza minima di 6 caratteri";
$lang['MESSAGE_PASSWORD_WRONG'] = "Password errata. riprova.";
$lang['MESSAGE_PASSWORD_WRONG_3_TIMES'] = "Hai inserito una password errata 3 o pi� volte gi�. Si prega di attendere 30 secondi per provare di nuovo.";
$lang['MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL'] = "Siamo spiacenti, tale codice combinazione id/verifica qui...";
$lang['MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL'] = "L'attivazione ha avuto successo! Ora � possibile accedere in!";
$lang['MESSAGE_REGISTRATION_FAILED'] = "Spiacenti, la tua registrazione non � riuscita. Torna indietro e riprovare.";
$lang['MESSAGE_RESET_LINK_HAS_EXPIRED'] = "Il link di ripristino � scaduto. Utilizzare il collegamento ripristinato entro un'ora.";
$lang['MESSAGE_VERIFICATION_MAIL_ERROR'] = "Siamo spiacenti, non siamo riusciti a inviare una mail di verifica. Il tuo account non � stato creato.";
$lang['MESSAGE_VERIFICATION_MAIL_NOT_SENT'] = "Mail di verifica non inviato con successo! errore: ";
$lang['MESSAGE_VERIFICATION_MAIL_SENT'] = "Il tuo account � stato creato con successo e vi hanno inviato una e-mail .Si prega di fare clic sul link di verifica all'interno di quella elettronica.";
$lang['MESSAGE_USER_DOES_NOT_EXIST'] = "L'utente non esiste";
$lang['MESSAGE_USERNAME_BAD_LENGTH'] = "Nome utente non pu� essere inferiore a 2 o pi� di 64 caratteri";
$lang['MESSAGE_USERNAME_CHANGE_FAILED'] = "Spiacenti, il nome utente ridenominazione prescelto fallita";
$lang['MESSAGE_USERNAME_CHANGED_SUCCESSFULLY'] = "Il tuo nome utente  stato modificato con successo. Nuovo nome utente - ";
$lang['MESSAGE_USERNAME_EMPTY'] = "Campo Nome utente era vuoto";
$lang['MESSAGE_USERNAME_EXISTS'] = "Ci dispiace, che il nome utente  gi in uso .Scegliere un altro.";
$lang['MESSAGE_USERNAME_INVALID'] = "Nome utente non si adatta il regime nome: solo AZ e numeri sono permessi, da 2 a 64 caratteri";
$lang['MESSAGE_USERNAME_SAME_LIKE_OLD_ONE'] = "Ci dispiace, che il nome utente  la stessa di quella attuale. Scegliere un altro.";
//  Common Wording/Messages in Pages
$lang['MESSAGE_WELCOME'] = "Benvenuto";
$lang['MESSAGE_CARINA'] = "Collaborative Solar Imaging Annotazione";
$lang['MESSAGE_LOG_IN_PAGE'] = "Login Pagina";
$lang['MESSAGE_CONSTELLATION'] = "Costellazione";
$lang['MESSAGE_CONSTELLATION_INTRO'] = "Carina constel·lació en el cel del sud , el que significa  \"la quilla d'un vaixell\".  Carina conté la segona estrella més brillant al cel nocturn.";
$lang['MESSAGE_AIM'] = "Il nostro obiettivo è";
$lang['MESSAGE_AIM_DEDICATION'] = "Dedito";
$lang['MESSAGE_AIM_INTRO'] = "Per creare un'applicazione web open-source, che raccoglierà dati importanti su buchi coronali.";
$lang['MESSAGE_LOBO'] = "Ognuno è un";
$lang['MESSAGE_LOBO_INTRO'] = "L'Università di New Mexico elettrica e informatica ingegneri vorrebbe introdurre Carina!";
$lang['MESSAGE_MISSION'] = "La nostra missione";
$lang['MESSAGE_CARINA_MISSION'] = 'CARINA Missione Dichiarazione';
$lang['MESSAGE_MISSION_1'] = "L'obiettivo di questo progetto è quello di fornire una applicazione internet collaborativo 
                            (web app) in cui gli utenti saranno in grado di annotare le immagini di osservazione solare. 
                            Gli utenti potranno utilizzare un mouse
                            cliccare lungo il perimetro di fori coronali nelle immagini.
                            I dati annotati saranno affiancati con il rispettivo immagine
                            e reso disponibile per ulteriori analisi dal fornitore immagine.";
$lang['MESSAGE_MISSION_2'] = "Il campo astronomico ha bisogno di questo tipo di tecnologia collaborativa. 
                            Con l' aiuto di questa applicazione annotazioni solare,
                            gli scienziati avranno la capacità di scambiare idee e meglio
                            comprendere le dinamiche del sole che portano a queste espulsioni di massa coronale.";

// views
$lang['WORDING_BACK_TO_LOGIN'] = "Torna Entra pagina";
$lang['WORDING_BACK_TO_HOME'] = 'Torna alla Home Page';
$lang['WORDING_CHANGE_EMAIL'] = "Change email";
$lang['WORDING_CHANGE_PASSWORD'] = "Cambiare la password";
$lang['WORDING_CHANGE_USERNAME'] = "Cambiare il nome utente";
$lang['WORDING_CURRENTLY'] = "attualmente";
$lang['WORDING_EDIT_USER_DATA'] = "Modifica dati utente";
$lang['WORDING_EDIT_YOUR_CREDENTIALS'] = "Sei connesso e puoi modificare le credenziali qui";
$lang['WORDING_FORGOT_MY_PASSWORD'] = "Ho dimenticato la password";
$lang['WORDING_LOGIN'] = "Log in";
$lang['WORDING_LOGOUT'] = "Esci";
$lang['WORDING_NEW_EMAIL'] = "Nuova e-mail";
$lang['WORDING_NEW_PASSWORD'] = "Nuova password";
$lang['WORDING_NEW_PASSWORD_REPEAT'] = "Ripetere nuova password";
$lang['WORDING_NEW_USERNAME'] = "Nuovo nome utente (nome utente non pu� essere vuoto e deve essere personaggi azAZ09 e 2-64)";
$lang['WORDING_OLD_PASSWORD'] = "La vecchia password";
$lang['WORDING_PASSWORD'] = "Password";
$lang['WORDING_PROFILE_PICTURE'] = "La vostra immagine del profilo (da gravatar):";
$lang['WORDING_REGISTER'] = "Register";
$lang['WORDING_REGISTER_NEW_ACCOUNT'] = "Registra un nuovo account";
$lang['WORDING_REGISTRATION_CAPTCHA'] = "Inserisci questi personaggi";
$lang['WORDING_REGISTRATION_EMAIL'] = "E-mail dell'utente (si prega di fornire un indirizzo email esistente ,si otterr una mail di verifica con un link di attivazione)";
$lang['WORDING_REGISTRATION_PASSWORD'] = "Password (minimo 6 caratteri!)";
$lang['WORDING_REGISTRATION_PASSWORD_REPEAT'] = "Password ripetizione";
$lang['WORDING_REGISTRATION_USERNAME'] = "Nome utente (solo lettere e numeri ,da 2 a 64 caratteri)";
$lang['WORDING_REMEMBER_ME'] = "Resta collegato (per 2 settimane)";
$lang['WORDING_REQUEST_PASSWORD_RESET'] = "Richiedi una reimpostazione della password. Inserisci il tuo nome utente e avrai una mail con le istruzioni:";
$lang['WORDING_RESET_PASSWORD'] = "Reimpostare la password";
$lang['WORDING_SUBMIT_NEW_PASSWORD'] = "Invia nuova password";
$lang['WORDING_USERNAME'] = "Nome utente";
$lang['WORDING_YOU_ARE_LOGGED_IN_AS'] = "Siete collegati come - ";
$lang['WORDING_ADMIN_LOGIN'] = "Adminstrator Accedi";
// MENU
$lang['WORDING_MENU_HOME_PAGE'] = 'Casa Pagina';
$lang['WORDING_MENU_GALLERY'] = 'Galleria';
$lang['WORDING_MENU_SERVICES'] = 'Servizi';
$lang['WORDING_MENU_HELP'] = 'Aiuto';
$lang['WORDING_MENU_CONTACT'] = 'Contattaci';
//  LANGUAGE FLAG TAGS
$lang['LANGUAGE_FLAG_ENGLISH'] = 'INGLESE';
$lang['LANGUAGE_FLAG_GREEK'] = 'GRECO';
$lang['LANGUAGE_FLAG_ITALIAN'] = 'ITALIANO';
$lang['LANGUAGE_FLAG_SPANISH'] = 'SPAGNOLO';
$lang['LANGUAGE_FLAG_CATALAN'] = 'CATALANO';
$lang['LANGUAGE_FLAG_PORTUGUESE'] = 'PORTOGHESE';
$lang['LANGUAGE_FLAG_TAGALOG'] = 'TAGALOG';
//  SERVICES PAGE
$lang['WORDING_OUR_SERVICES'] = 'I Nostri Servizi';
$lang['WORDING_UPLOAD_A_PHOTO'] = 'Carica Una Foto';
$lang['WORDING_UPLOAD_DESCRIPTION'] = " - Questa sezione permette all'utente di caricare una posizione "
                                        . "un'immagine da una fonte esterna per le annotazioni . Salverà "
                                        . "la posizione nel database degli utenti per il lavoro futuro .";
$lang['WORDING_ANNOTATE_DEMO'] = 'Annotate DEMO Image';
$lang['WORDING_ANNOTATE_DEMO_DETAILS'] = 'Practice Annotating Administrator Supplied Image';
$lang['WORDING_SOLAR_RESOURCES'] ='SOLAR DYNAMICS & IMAGES RESOURCES';
$lang['WORDING_SOLAR_RESOURCES_DETAILS'] = " - Research and find images for annotations.";
$lang['WORDING_SOLAR_RESOURCES_LINK_1'] ='SDO | Solar Dynamics Observatory';
$lang['WORDING_SOLAR_RESOURCES_LINK_2'] ='SDO | Browse IMage Directories';
$lang['WORDING_SOLAR_RESOURCES_LINK_3'] ='NASA Solar Dynamics Observatory';
$lang['WORDING_SOLAR_RESOURCES_LINK_4'] ='Stanford Solar Center';
$lang['WORDING_SOLAR_RESOURCES_LINK_5'] ='SOHO - Solar And Heliospheric Observatory';
$lang['WORDING_BROWSE_FOR_IMAGE'] = 'Sfoglia Album per selezionare l\'immagine';
$lang['WORDING_BROWSE_IMAGE_DESCRIPTION'] = " - Selezionare un'immagine in album di annotare.";
$lang['WORDING_COLLABORATE'] = 'Collaborare';
$lang['WORDING_COLLABORATE_DESCRIPTION'] = " - Contatta altri utenti per discutere le immagini.";
$lang['WORDING_MY_PROFILE'] = 'Il Mio Profilo';
$lang['WORDING_MY_PROFILE_DESCRIPTION'] = " - Aggiornare le informazioni del profilo utente.";
$lang['WORDING_DATA_EXPORT'] = "Annotazioni Export";
$lang['WORDING_DATA_EXPORT_DETAILS'] = " - Dati di annotazione Output in file CSV formattato. "
                                        . "Utente richiesto per la posizione del file di output.";
$lang['WORDING_ANNOTATE_A_PHOTO'] = 'Annota Una Foto';
$lang['WORDING_ANNOTATE_WITH_A_PARTNER'] ='Annota Con Un Partner';
$lang['WORDING_ANNOTATE_PHOTO_DESCRIPTION'] = " - L'utente può individuare una posizione un'immagine salvata e quindi annotare .";
$lang['WORDING_ANNOTATE_WITH_A_PARTNER_DESCRIPTION'] = " - Collaborare attività di annotazione.";
$lang['WORDING_UNM'] = "University of New Mexico - Anno Scolastico 2014 - 2015";
$lang['WORDING_SDP-SIC'] = "Senior Design Project - Solar Immagine Collaborazione";
$lang['WORDING_TEAM'] = "team";
$lang['WORDING_UNM-SDPW'] = "UNM senior Design Progetti sito";
//  GALLERY PAGE
$lang['WORDING_LATEST_IMAGE'] = 'Ultime Immagine';
$lang['WORDING_ARCHIVE_SUMMARY'] = 'Archivio Sommario';
$lang['WORDING_COMPLETE_ARCHIVE_SOLAR_IMAGES'] = 'Archivio completo di immagini solari per anno e per mese .';
$lang['WORDING_PREVIOUS_YEARS'] = 'Anni Precedenti';
$lang['WORDING_ARCHIVE'] = 'Archivio';
//  ANNOTATE PHOTO PAGE
$lang['WORDING_ANNOTATE_PHOTO'] = 'Annotate Photo';
$lang['WORDING_OPERATIONS'] = 'OPERAZIONI:  ';
$lang['WORDING_ANNOTATE'] = 'ANNOTAZIONE';
$lang['WORDING_DELETE_LAST_ANNOTATION_POINT'] = 'DELETE LAST ANNOTAZIONE POINT';
$lang['WORDING_DELETE_ALL_POINTS'] = 'CANCELLA TUTTI I PUNTI';
$lang['MESSAGE_ARE_YOU_CERTAIN'] = 'SEI SICURO?!';
$lang['MESSAGE_CLICK_ANNOTATE_TO_RESUME'] = 'Clicca ANNOTA per riprendere';
$lang['WORDING_ANNOTATION_SAVE'] = 'SAVE';
$lang['WORDING_ANNOTATION_CANCEL'] = 'ANNULLA';
$lang['WORDING_ANNOTATION_SUBMIT'] = 'INVIA ANNOTAZIONI';
$lang['WORDING_ANNOTATION_REQUEST'] = 'ANNOTAZIONI RICHIESTA';
$lang['WORDING_ANNOTATION_QUIT'] = 'Torna a Servizi - tutte le annotazioni Discarded';
$lang['WORDING_CONNECT'] = 'Abilita Connect Annotazioni';
//  ANNOTATION DATA RETRIEVE
$lang['MESSAGE_ANNOTATION_DATA_RETRIEVED'] = 'I dati di annotazione Estratto per file immagine: ';
//  HELP PAGE
$lang['WORDING_HELP_WHAT_IS'] = 'Che cosa è un buco coronale?';
$lang['WORDING_HELP_WHAT_IS_DETAILS'] = 'Corona di nostro sole è irregolare non è uniforme. Parti più scure fredde
                                    della corona sono noti come fori coronali. In questi cooler
                                    sezioni scure ci sono livelli di gas e di energia inferiori rispetto
                                    l\'area circostante. A causa di questo, il sole del magnetica
                                    campo sarà arco causando particelle solari per sfuggire al sole
                                    in forma di vento solare. Se buchi coronali diventano abbastanza grande
                                    verifica espulsioni di massa coronale auto. Che è una cattiva notizia per noi sulla terra.';
$lang['WORDING_HELP_WHAT_DOES'] = 'Cosa CARINA a che fare con il sole?';
$lang['WORDING_HELP_WHAT_DOES_DETAILS'] = 'Carina utilizza la grande base di utenti di Internet per studiare, analizzare,
                                 e soprattutto annotare immagini del sole per fare dischi di questi
                                 buchi coronali. Le annotazioni di queste immagini sono registrate in un database
                                 dove possono essere successivamente analizzati. Conoscere ciò che il nostro sole sta facendo è fondamentale per
                                 la comprensione del tempo solare per proteggere la nostra satelliti, il potere e la comunicazione
                                 sistemi, e altri sistemi elettronici vitali.';
$lang['WORDING_HELP_HOW_DO'] = 'Come faccio a iniziare?';
$lang['WORDING_HELP_HOW_DO_DETAILS'] = 'Si inizia con la creazione di un account gratuito. Da qui è possibile accedere in accesso
                                   suite di strumenti nella scheda servizi. Qui è dove è possibile modificare il nostro profilo
                                   informazioni, caricare una foto, annotare una foto, esportare i dati di annotazione, e
                                   accedere alla chatroom #carina IRC su Mibbit.';
$lang['WORDING_HELP_UPLOADING'] = 'Caricamento delle foto';
$lang['WORDING_HELP_UPLOADING_DETAILS'] = 'All\'interno della scheda servizi cliccando sul Carica un link Photo vi porterà
                                           alla pagina di upload, dove è possibile selezionare il file desiderato e caricarlo. ';
$lang['WORDING_HELP_ANNOTATE'] = 'Annota a Photo';
$lang['WORDING_HELP_ANNOTATE_DETAILS'] = 'Cliccando su Sfoglia Album di collegamento Selezione Immagine o Sfoglia Album a
                                          Seleziona Immagine dalla pagina Servizi vi porterà l\'annotazione
                                          utensile. Da qui è possibile selezionare un\'immagine da annotare e iniziare a cercare
                                          per buchi coronali. Iniziare posizionando il cursore del mouse sopra l\'immagine.
                                          Le vostre coordinate del mouse sono visti in tempo reale sopra l\'immagine. Fare clic
                                          e inserire waypoint intorno ai fori coronali nell\'immagine. È possibile eliminare
                                          il vostro ultimo waypoint, cancellare tutti i punti, collegare i punti, e richiesta
                                          annotattions. Mostrando i collegamenti sui waypoint è utile per vedere
                                          il buco coronale. Quando sei felice con il vostro lavoro fare clic su Invia Annotazioni
                                          scrivere le vostre annotazioni nel database.';
$lang['WORDING_HELP_COMMUNICATE'] = 'Comunicare con gli altri in IRC';
$lang['WORDING_HELP_COMMUNICATE_DETAILS'] = 'Quale modo migliore per ottenere aiuto e risposte alle domande che comunicare
                                             con i coetanei. Il link Colaboration sulla scheda Servizi vi porterà a
                                             la pagina colaborazione con un link per accedere al chatroom #carina sulla
                                             lato destro. La stanza si aprirà in una nuova finestra. da qui
                                             è possibile utilizzare un soprannome generata automaticamente o creare il proprio unico. Nel Contempo
                                             on-line si può parlare con gli altri nella stanza principale, o PM ( Personal
                                             MESSAGGIO) individui. Clicca qui per avviare il #carina IRC Chat.';
$lang['WORDING_HELP_EXPORTING'] = 'Esportazione annotazione dei dati';
$lang['WORDING_HELP_EXPORTING_DETAILS'] = 'Il contenuto del database di annotazioni possono essere esportati per ulteriori analisi.';