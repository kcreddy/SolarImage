<?php

/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// Greek Language File

$lang = array();

// login & registration classes
$lang['MESSAGE_ACCOUNT_LOGIN'] = 'Parakaloúme syndetheíte í engrafeíte néo logariasmó sto Sýndesi Selída sýndesmo pros ta dexiá';
$lang['MESSAGE_ACCOUNT_NOT_ACTIVATED'] = 'O logariasmós sas den échei energopoiitheí akóma. Parakaló kánte klik sto sýndesmo epivevaiónoun sto email.';
$lang['MESSAGE_CAPTCHA_WRONG'] = 'Captcha ítan láthos!';
$lang['MESSAGE_COOKIE_INVALID'] = 'Ákyri biskóto';
$lang['MESSAGE_DATABASE_ERROR'] = 'Próvlima sýndesis vásis dedoménon.';
$lang['MESSAGE_EMAIL_ALREADY_EXISTS'] = "Aftí i diéfthynsi ilektronikoú tachydromeíou échei ídi katachoritheí. Parakaloúme chrisimopoiíste tin \"Xéchasa ton ko̱dikó mou \" selída, an den to thymámai.";
$lang['MESSAGE_EMAIL_CHANGE_FAILED'] = 'Dystychós, to email sas allázei apétyche.';
$lang['MESSAGE_EMAIL_CHANGED_SUCCESSFULLY'] = 'Diéfthynsi ilektronikoú tachydromeíou sas échei alláxei me epitychía. Néa diéfthynsi̱ ilektronikoú tachydromeíou eínai ';
$lang['MESSAGE_EMAIL_EMPTY'] = 'To email sas den boreí na eínai kenó';
$lang['MESSAGE_EMAIL_INVALID'] = 'I diéfthynsi email sas den eínai énkyri morfí email';
$lang['MESSAGE_EMAIL_SAME_LIKE_OLD_ONE'] = 'Dystychós, aftí i diéfthynsi eínai i ídia me simerinó sas. Parakaló epiléxte éna állo.';
$lang['MESSAGE_EMAIL_TOO_LONG'] = 'To email sas den boreí na eínai megalýtero apó 64 charaktíres';
$lang['MESSAGE_LINK_PARAMETER_EMPTY'] = 'Dedoménon paramétron Kenó sýndesmo.';
$lang['MESSAGE_LOGGED_OUT'] = 'Échete aposyndetheí.';
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
$lang['MESSAGE_LOGIN_FAILED'] = 'I sýndesi apétyche.';
$lang['MESSAGE_OLD_PASSWORD_WRONG'] = 'Palió sas kodikó prósvasis ítan láthos.';
$lang['MESSAGE_PASSWORD_BAD_CONFIRM'] = 'Kodikós prósvasis kai ton kodikó tis epanálipsis den eínai to ídio';
$lang['MESSAGE_PASSWORD_CHANGE_FAILED'] = 'Lypoúmaste, kodikó sas allázei apétyche.';
$lang['MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY'] = 'O kodikós sas állaxe me epitychía!';
$lang['MESSAGE_PASSWORD_EMPTY'] = 'Pedío Kodikós ítan ádeio';
$lang['MESSAGE_PASSWORD_RESET_MAIL_FAILED'] = 'Epanaforás kodikoú prósvasis den allilografía pou apostélletai me epitychía! sfálma: ';
$lang['MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT'] = 'Epanaforás kodikoú prósvasis tachydromeíou estáli epitychós!';
$lang['MESSAGE_PASSWORD_TOO_SHORT'] = 'Kodikós prósvasis échei eláchisto míkos 6 charaktíron';
$lang['MESSAGE_PASSWORD_WRONG'] = 'Láthos kodikós prósvasis. Dokimáste xaná.';
$lang['MESSAGE_PASSWORD_WRONG_3_TIMES'] = 'Échete pliktrologísei lanthasméno kodikó prósvasis 3 í perissóteres forés ídi. Parakaló periménete 30 defterólepta gia na prospathísete xaná.';
$lang['MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL'] = 'Dystychós, den ypárchei tétoio syndyasmó o kodikós id/epalíthefsis edó...';
$lang['MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL'] = 'I energopoíisi ítan epitychís! Boreíte tóra na syndetheíte!';
$lang['MESSAGE_REGISTRATION_FAILED'] = 'Lypoúmaste, apétyche i engrafí sas. Parakaló pigaínete píso kai dokimáste xaná.';
$lang['MESSAGE_RESET_LINK_HAS_EXPIRED'] = 'Sýndesmos epanaforás sas échei líxei. Parakaloúme chrisimopoiíste to sýndesmo epanaforás mésa se mía óra.';
$lang['MESSAGE_VERIFICATION_MAIL_ERROR'] = 'Dystychós, den borésame na sas steílei éna mínyma epivevaíosis. O logariasmós sas échei DEN échoun dimiourgitheí.';
$lang['MESSAGE_VERIFICATION_MAIL_NOT_SENT'] = 'Mail Epalíthefsis den estáli epitychós! sfálma: ';
$lang['MESSAGE_VERIFICATION_MAIL_SENT'] = 'O logariasmós sas échei dimiourgitheí me epitychía kai pou sas échoume steílei éna mínyma ilektronikoú tachydromeíou. Parakaló kánte klik sto sýndesmo epalíthefsis sto plaísio aftís tis allilografías.';
$lang['MESSAGE_USER_DOES_NOT_EXIST'] = 'Aftós o chrístis den ypárchei';
$lang['MESSAGE_USERNAME_BAD_LENGTH'] = 'Ónoma Chrísti den boreí na eínai mikróteri apó 2 í megalýtero apó 64 charaktíres';
$lang['MESSAGE_USERNAME_CHANGE_FAILED'] = 'Lypoúmaste, epiléchthike metonomasía ónoma chrísti sas apétyche';
$lang['MESSAGE_USERNAME_CHANGED_SUCCESSFULLY'] = 'To ónoma chrísti sas échei alláxei me epitychía. Néo ónoma chrísti eínai ';
$lang['MESSAGE_USERNAME_EMPTY'] = 'Ónoma Chrísti toméa ítan ádeio';
$lang['MESSAGE_USERNAME_EXISTS'] = 'Syngnómi, aftó to ónoma chrísti échei ídi liftheí. Parakaló epiléxte éna állo.';
$lang['MESSAGE_USERNAME_INVALID'] = 'Ónoma Chrísti den tairiázei me to kathestós ónoma : móno aZ kai oi arithmoí epitrépetai, 2-64 charaktíres';
$lang['MESSAGE_USERNAME_SAME_LIKE_OLD_ONE'] = 'Lypoúmaste, óti to ónoma chrísti eínai to ídio me to simerinó sas. Parakaló epiléxte éna állo.';
//  Common Wording/Messages in Pages
$lang['MESSAGE_WELCOME'] = 'Kalosórisma';
$lang['MESSAGE_CARINA'] = 'Synergatikí Solar Apeikónisi Scholiasmós';
$lang['MESSAGE_LOG_IN_PAGE'] = 'Sýndesi Selída';
$lang['MESSAGE_CONSTELLATION'] = 'Asterismós';
$lang['MESSAGE_CONSTELLATION_INTRO'] = "Carina Constellation sto nótio ouranó, pou simaínei \"tin karína tou ploíou\". Carina periéchei to déftero foteinótero astéri ston ouranó ti nýchta.";
$lang['MESSAGE_AIM'] = 'Stóchos mas eínai';
$lang['MESSAGE_AIM_DEDICATION'] = 'Afiero̱méno';
$lang['MESSAGE_AIM_INTRO'] = 'Gia na dimiourgísete mia diadiktyakí efarmogí anoichtoú kódika pou tha sylléxei polýtima stoicheía gia tis stefaniaíes opés.';
$lang['MESSAGE_LOBO'] = "O kathénas eínai éna";
$lang['MESSAGE_LOBO_INTRO'] = "To Panepistímio tou Néo Mexikó Ilektrológon Michanikón kai Michanikón Ypologistón tha íthela na eisagágei Carina!";
$lang['MESSAGE_MISSION'] = 'I apostolí mas';
$lang['MESSAGE_CARINA_MISSION'] = 'Dílosi CARINA Apostolí';
$lang['MESSAGE_MISSION_1'] = 'O stóchos aftoú tou érgou eínai na paréchei éna synergatikó
                            diadiktyakís efarmogís ( web app ) sto opoío oi chrístes tha eínai se thési
                            na scholiásete tin iliakí paratírisis eikónes. Oi chrístes tha chrisimopoioún éna pontíki
                            na kánete klik katá míkos tis perimétrou tou stefaniaíes opés stis eikónes.
                            Ta scholiasméni dedoména tha enothoún me tous antístoichous eikóna tou
                            kai diatíthentai gia peraitéro análysi apó ton párocho eikónas.';
$lang['MESSAGE_MISSION_2'] = 'To astronomikó toméa échei anánki apó aftó to eídos tis synergasías
                            technología. Me ti voítheia aftoú tou iliakoú efarmogí scholiasmoú ,
                            oi epistímones tha échoun ti dynatótita na antalláxoun idées kai kalýtera
                            katanoísoume ti dynamikí tou íliou pou odigoún se aftés tis stefaniaíes ektináxeis mázas.';
// views
$lang['WORDING_BACK_TO_LOGIN'] = 'Epistrofí sti selída Sýndesi';
$lang['WORDING_CHANGE_EMAIL'] = 'Allagí diéfthynsis ilektronikoú tachydromeíou';
$lang['WORDING_CHANGE_PASSWORD'] = 'Allagí kodikoú prósvasis';
$lang['WORDING_CHANGE_USERNAME'] = 'Allagí onómatos chrísti';
$lang['WORDING_CURRENTLY'] = 'ti stigmí';
$lang['WORDING_EDIT_USER_DATA'] = 'Epexergasía dedoménon chrísti';
$lang['WORDING_EDIT_YOUR_CREDENTIALS'] = 'Échete syndetheí kai na epexergasteíte ta diapisteftíriá sas edó';
$lang['WORDING_FORGOT_MY_PASSWORD'] = 'Xéchasa ton kodikó mou';
$lang['WORDING_LOGIN'] = 'Eísodos';
$lang['WORDING_LOGOUT'] = 'Aposýndesi';
$lang['WORDING_NEW_EMAIL'] = 'Néo e-mail';
$lang['WORDING_NEW_PASSWORD'] = 'Néos kodikós';
$lang['WORDING_NEW_PASSWORD_REPEAT'] = 'Epanalávete to néo kodikó prósvasis';
$lang['WORDING_NEW_USERNAME'] = 'Néo ónoma chrísti (username den boreí na eínai kení kai tha prépei na eínai azAZ09 kai 2-64 charaktíres)';
$lang['WORDING_OLD_PASSWORD'] = 'Palió sas kodikó prósvasis';
$lang['WORDING_PASSWORD'] = 'Kodikós';
$lang['WORDING_PROFILE_PICTURE'] = 'Fotografía tou profíl sas (apó gravatar):';
$lang['WORDING_REGISTER'] = 'Engrafí';
$lang['WORDING_REGISTER_NEW_ACCOUNT'] = 'Dimiourgía néou logariasmoú';
$lang['WORDING_REGISTRATION_CAPTCHA'] = 'Parakaló eiságete tous charaktíres';
$lang['WORDING_REGISTRATION_EMAIL'] = "To email tou chrísti (dóste mia pragmatikí diéfthynsi ilektronikoú tachydromeíou, tha lávete éna mínyma epalíthefsis me sýndesmo energopoíisis)";
$lang['WORDING_REGISTRATION_PASSWORD'] = 'Kodikós prósvasis (min. 6 charaktíres!)';
$lang['WORDING_REGISTRATION_PASSWORD_REPEAT'] = 'Kodikós epanálipsis';
$lang['WORDING_REGISTRATION_USERNAME'] = 'Ónoma Chrísti (móno grámmata kai arithmoús, 2-64 charaktíres)';
$lang['WORDING_REMEMBER_ME'] = 'Na me thymásai (gia 2 evdomádes)';
$lang['WORDING_REQUEST_PASSWORD_RESET'] = "Aítisi epanaforás kodikoú prósvasis. Pliktrologíste to ónoma chrísti sas kai tha lávete éna e-mail me odigíes:";
$lang['WORDING_RESET_PASSWORD'] = 'Epanaforá tou kodikoú prósvasís mou';
$lang['WORDING_SUBMIT_NEW_PASSWORD'] = 'Ypovolí néou kodikoú prósvasis';
$lang['WORDING_USERNAME'] = 'Ónoma Chrísti';
$lang['WORDING_YOU_ARE_LOGGED_IN_AS'] = 'Échete syndetheí os ';
$lang['WORDING_ADMIN_LOGIN'] = 'Diacheiristís Eísodos';
// MENU
$lang['WORDING_MENU_HOME_PAGE'] = 'Archikí Selída';
$lang['WORDING_MENU_GALLERY'] = 'Stoá';
$lang['WORDING_MENU_SERVICES'] = 'Ypiresíes';
$lang['WORDING_MENU_HELP'] = 'Voítheia';
$lang['WORDING_MENU_CONTACT'] = 'Epikoinoníste mazí mas';
//  LANGUAGE FLAG TAGS
$lang['LANGUAGE_FLAG_ENGLISH'] = 'ANGLIKA';
$lang['LANGUAGE_FLAG_GREEK'] = 'ELLINIKI';
$lang['LANGUAGE_FLAG_ITALIAN'] = 'ITALIKI';
$lang['LANGUAGE_FLAG_SPANISH'] = 'ISPANIKA';
$lang['LANGUAGE_FLAG_CATALAN'] = 'CATALAN';
$lang['LANGUAGE_FLAG_PORTUGUESE'] = 'PORTOGALIKI';
$lang['LANGUAGE_FLAG_TAGALOG'] = 'TAGALOG';
//  SERVICES PAGE
$lang['WORDING_OUR_SERVICES'] = 'Oi Ypiresíes Mas';
$lang['WORDING_UPLOAD_A_PHOTO'] = 'Katachoríste Mia Fotografía';
$lang['WORDING_ANNOTATE_A_PHOTO'] = 'Scholiasmós Mia Fotografía';
$lang['WORDING_ANNOTATE_WITH_A_PARTNER'] ='Scholiasmós Me Énan Etaíro';
$lang['WORDING_EDIT_AN_EXISTING_ANNOTATION'] = 'Epexergasteíte Mia Ypárchousa Scholiasmós';
$lang['WORDING_COLLABORATE'] = 'Synergázomai';
$lang['WORDING_MY_PROFILE'] = 'To Profíl Mou';
$lang['WORDING_UPLOAD_DESCRIPTION'] = '- Af̱tí̱ i̱ enóti̱ta tha epitrépoun sto chrí̱sti̱ na anevásete mia thési̱ eikónas apó mia exo̱terikí̱ pi̱gí̱ gia scholiasmoús . Tha só̱sei ti̱n topothesía ti̱s vási̱s dedoméno̱n to̱n chri̱stó̱n gia tis mellontikés ergasíes .';
$lang['WORDING_ANNOTATE_PHOTO_DESCRIPTION'] = "- O chrí̱sti̱s boreí na entopísei mia apothi̱kev̱méni̱ thési̱ ti̱s eikónas kai sti̱ synécheia na scholiásete .";
$lang['WORDING_ANNOTATE_WITH_A_PARTNER_DESCRIPTION'] = "- Synergasía drasti̱rióti̱ta scholiasmoú .";
$lang['WORDING_EDIT_AN_EXISTING_ANNOTATION_DESCRIPTION'] = "- Anazí̱ti̱si̱ gia mia apothi̱kev̱méni̱ thési̱ ti̱s eikónas gia ti̱n tropopoíi̱si̱ / prosthí̱ki̱ scholiasmó̱n .";
$lang['WORDING_COLLABORATE_DESCRIPTION'] = "- Epikoino̱nía me állous chrí̱stes gia na syzi̱tí̱soun tis eikónes .";
$lang['WORDING_MY_PROFILE_DESCRIPTION'] = "- Eni̱méro̱si̱ pli̱roforió̱n profíl chrí̱sti̱.";
//  GALLERY PAGE
$lang['WORDING_LATEST_IMAGE'] = 'Telef̱taía Eikóna';
$lang['WORDING_ARCHIVE_SUMMARY'] = 'Archeío Períli̱psi̱';
$lang['WORDING_COMPLETE_ARCHIVE_SOLAR_IMAGES'] = 'Plí̱res archeío to̱n i̱liakó̱n eikóno̱n aná étos kai mí̱na .';
$lang['WORDING_PREVIOUS_YEARS'] = 'Proi̱goúmena Éti̱';
$lang['WORDING_ARCHIVE'] = 'Archeío';
//  ANNOTATE PHOTO PAGE
$lang['WORDING_ANNOTATE_PHOTO'] = 'Episímansi Fotografía';
$lang['WORDING_OPERATIONS'] = 'ERGASIES:  ';
$lang['WORDING_ANNOTATE'] = 'SCHOLIÁZO';
$lang['WORDING_DELETE_LAST_ANNOTATION_POINT'] = 'DIAGRAFÍ TELEFTAÍAS ENDEIXI SIMEIO';
$lang['WORDING_DELETE_ALL_POINTS'] = 'DELETE ÓLA TA SIMEÍA';
$lang['MESSAGE_ARE_YOU_CERTAIN'] = 'EÍSTE SÍGOUROI?!';
$lang['MESSAGE_CLICK_ANNOTATE_TO_RESUME'] = 'Kánte klik sto koumpí gia na synechísete na scholiásete';
$lang['WORDING_ANNOTATION_SAVE'] = 'APOTHIKEUSI';
$lang['WORDING_ANNOTATION_CANCEL'] = 'AKYROSI';