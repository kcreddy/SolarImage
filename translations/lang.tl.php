<?php
////////////////////////////////////////////////////////////////////////////////
//
//  University of New Mexico - School Year 2014 - 2015
//  Senior Design Project - Solar Image Collaboration
//
//  CARINA - Collaborative Solar Imaging Annotation
//
//  Sponsor - Professor Pattichis
//
//  Team - Patrick Lopez PM, Conner Dolan, Edward Sadzewicz, 
//         Cody Shell, Jaclynn Wakley
//
////////////////////////////////////////////////////////////////////////////////
//
//  Module:  translations/lang.ca.php
//
//  Purpose: Tagalog (FILIPINO)Language File
//  
//  Credit:  Translations provided by Gina Lumidaoand her 1st 
//           daughter Gerstine Lumidao
//
////////////////////////////////////////////////////////////////////////////////
/**
* Please note: we can use unencoded characters like ö, é etc here as we use 
* the html5 doctype with utf8 encoding in the application's header 
* (in views/_header.php). To add new languages simply copy this file,
* and create a language switch in your root files.
*/

$lang = array();

// login & registration classes
$lang['MESSAGE_ACCOUNT_LOGIN'] = "Mangyaring mag-log in o magrehistro ng bagong account sa Mag-log Sa Page na link sa kanan";
$lang['MESSAGE_ACCOUNT_NOT_ACTIVATED'] = "Ang iyong account ay na-activate sa form na ito at pagkatapos ay i-verify na may isang email sa pagkumpirma.";
$lang['MESSAGE_CAPTCHA_WRONG'] = "Captcha Mali!";
$lang['MESSAGE_COOKIE_INVALID'] = "Di-wastong cookie";
$lang['MESSAGE_DATABASE_ERROR'] = "Problema sa koneksyon sa database.";
$lang['MESSAGE_EMAIL_ALREADY_EXISTS'] = "Ang email address na ay nakarehistro na . Mangyaring gamitin ang \"Nakalimutan ko ang aking password \" na pahina kung hindi mo matandaan ito.";
$lang['MESSAGE_EMAIL_CHANGE_FAILED'] = "Paumanhin Nabigo ang pagpapalit ng iyong ema.";
$lang['MESSAGE_EMAIL_CHANGED_SUCCESSFULLY'] = "Ang iyong email address succefully nabago. Bagong e-mail address ay";
$lang['MESSAGE_EMAIL_EMPTY'] = "Email Hindi maaaring walang laman";
$lang['MESSAGE_EMAIL_INVALID'] = "Iyong email address ay hindi isang wastong e-mail format";
$lang['MESSAGE_EMAIL_SAME_LIKE_OLD_ONE'] = "Paumanhin, ang email address na ito ay kapareho ng iyong kasalukuyan . Mangyaring pumili ng isa pa.";
$lang['MESSAGE_EMAIL_TOO_LONG'] = "e-mail ay hindi maaaring maging mas mahaba kaysa sa 64 mga character";
$lang['MESSAGE_LINK_PARAMETER_EMPTY'] = "Data parameter laman ang link.";
$lang['MESSAGE_LOGGED_OUT'] = "Ikaw ay nai- log out.";
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
// Jared -- login failed security flaw fixed for all languages 21-May-15
$lang['MESSAGE_LOGIN_FAILED'] = "Subukang muli maling username o password.";
$lang['MESSAGE_OLD_PASSWORD_WRONG'] = "Ang iyong lumang password ay mali.";
$lang['MESSAGE_PASSWORD_BAD_CONFIRM'] = "Password at paulit-ulit na password ay hindi katulad";
$lang['MESSAGE_PASSWORD_CHANGE_FAILED'] = "Paumanhin Nabigo ang pagpapalit ng iyong password.";
$lang['MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY'] = "Matagumpay na nabago ang password!";
$lang['MESSAGE_PASSWORD_EMPTY'] = "Field ng password ay walang laman";
$lang['MESSAGE_PASSWORD_RESET_MAIL_FAILED'] = "Baguhin ang Password mail matagumpay na naipadala! Error: ";
$lang['MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT'] = "Baguhin ang Password matagumpay na naipadala mail!";
$lang['MESSAGE_PASSWORD_TOO_SHORT'] = "Mayroong isang minimum na haba ng 6 na mga character password ";
$lang['MESSAGE_PASSWORD_WRONG'] = "Subukang muli maling username o password.";
$lang['MESSAGE_PASSWORD_WRONG_3_TIMES'] = "Nagpasok ka ng maling username o password ng 3 o higit pang mga beses na . Mangyaring maghintay 30 segundo upang subukang muli.";
$lang['MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL'] = "Paumanhin, walang mga naturang kombinasyon id / verification code dito ...";
$lang['MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL'] = "Activation ay matagumpay Maaari mo na ngayong mag-log in!";
$lang['MESSAGE_REGISTRATION_FAILED'] = "Paumanhin, nabigo ang iyong pagpaparehistro. Mangyaring bumalik at subukan muli.";
$lang['MESSAGE_RESET_LINK_HAS_EXPIRED'] = "Ang iyong link sa pag-reset Nag-expire . Mangyaring gamitin ang link sa pag-reset sa loob ng isang oras.";
$lang['MESSAGE_VERIFICATION_MAIL_ERROR'] = "Paumanhin , hindi namin magpadala sa iyo ng isang pag-verify mail Ang iyong account ay HINDI nagawa na.";
$lang['MESSAGE_VERIFICATION_MAIL_NOT_SENT'] = "Pag-verify ng Mail HINDI matagumpay na naipadala! Error: ";
$lang['MESSAGE_VERIFICATION_MAIL_SENT'] = "Matagumpay naming nagawa ang iyung account at pinadalhan namin ikaw ng email.  Paki-click ang VERIFIKASYONG LINK sa iyung email.";
$lang['MESSAGE_USER_DOES_NOT_EXIST'] = "Ang user na ito ay hindi umiiral";
$lang['MESSAGE_USERNAME_BAD_LENGTH'] = "Ang username ay hindi maaaring maging mas maikli sa 2 o mas mahaba sa 64";
$lang['MESSAGE_USERNAME_CHANGE_FAILED'] = "Paumanhin, nabigo ang iyong pinili Pinapalitan ang pangalan ng username";
$lang['MESSAGE_USERNAME_CHANGED_SUCCESSFULLY'] = "Ang iyong username ay matagumpay na nabago. Bagong username ay - ";
$lang['MESSAGE_USERNAME_EMPTY'] = "Field ng username ay walang laman";
$lang['MESSAGE_USERNAME_EXISTS'] = "Paumanhin, ang username na iyon ay nakuha na. Mangyaring pumili ng isa pa.";
$lang['MESSAGE_USERNAME_INVALID'] = "Hindi kasya ang pangalan scheme Username: lamang A-Z at numero lamang ang pinapayagan , 2-64 character";
$lang['MESSAGE_USERNAME_SAME_LIKE_OLD_ONE'] = "Paumanhin, ang username na iyon ay katulad ng sa iyong kasalukuyan. Mangyaring pumili ng isa pa.";
//  Common Wording/Messages in Pages
$lang['MESSAGE_WELCOME'] = "Maligayang Pagdating";
$lang['MESSAGE_CARINA'] = "Collaborative Solar Imaging Annotation";
$lang['MESSAGE_LOG_IN_PAGE'] = "Mag-log In Pahina";
$lang['MESSAGE_CONSTELLATION'] = "Konstelasyon";
$lang['MESSAGE_CONSTELLATION_INTRO'] = "Carina Konstelasyon sa katimugang kalangitan, na nangangahulugang \"ang kilya ng isang barko\".  Carina ay naglalaman ng ikalawang pinakamaliwanag na bituin sa kalangitan sa gabi.";
$lang['MESSAGE_AIM'] = "Ang aming pakay ay";
$lang['MESSAGE_AIM_DEDICATION'] = "Nakatuon";
$lang['MESSAGE_AIM_INTRO'] = "Upang lumikha ng isang web application na open-source na mangolekta ng mahalagang data sa korona butas.";
$lang['MESSAGE_LOBO'] = "Ang bawat tao'y ay isang";
$lang['MESSAGE_LOBO_INTRO'] = "Ang University of Elektriko at Computer Engineers New Mexico nais na ipakilala Carina!";
$lang['MESSAGE_MISSION'] = "Ang aming Mission";
$lang['MESSAGE_CARINA_MISSION'] = 'Pahayag CARINA Mission';
$lang['MESSAGE_MISSION_1'] = "Ang layunin ng proyektong ito ay upang magbigay ng isang collaborative na 
                            internet application (web app) kung saan ang mga gumagamit ay magagawang upang 
                            i-annotate solar obserbasyonal mga imahe. Gagamitin ng mga gumagamit ng isang mouse
                            mag-click sa kahabaan ng perimeter ng ​​korona butas sa mga larawan.
                            Ang nalagyan ng annotation na data ay sumali sa kasama ang kani-kanilang mga imahe
                            at ginawang magagamit para sa karagdagang pagtatasa ng provider ng imahe.";
$lang['MESSAGE_MISSION_2'] = "Ang patlang ng pang-astronomiya ay nangangailangan ng ganitong uri ng mga pinagsama-samang 
                            teknolohiya. Sa tulong ng solar anotasyon application,
                            siyentipiko ay magkakaroon ng kapasidad upang makipagpalitan ng mga ideya at mas mahusay na
                            maunawaan ang mga dynamics ng araw na humahantong sa mga korona ejections masa.";

// views
$lang['WORDING_BACK_TO_LOGIN'] = "Bumalik sa Pahina Mag-login";
$lang['WORDING_BACK_TO_HOME'] = 'Bumalik sa Home Page';
$lang['WORDING_CHANGE_EMAIL'] = "Baguhin ang e-mail";
$lang['WORDING_CHANGE_PASSWORD'] = "Baguhin ang password ";
$lang['WORDING_CHANGE_USERNAME'] = "Baguhin ang username ";
$lang['WORDING_CURRENTLY'] = "Sa kasalukuyan";
$lang['WORDING_EDIT_USER_DATA'] = "I-edit ang data ng user";
$lang['WORDING_EDIT_YOUR_CREDENTIALS'] = "Naka-log in at maaaring i-edit ang iyong mga kredensyal dito";
$lang['WORDING_FORGOT_MY_PASSWORD'] = "Nakalimutan ko ang aking password ";
$lang['WORDING_LOGIN'] = "Log in";
$lang['WORDING_LOGOUT'] = "Logout";
$lang['WORDING_NEW_EMAIL'] = "bagong email";
$lang['WORDING_NEW_PASSWORD'] = "Bagong password ";
$lang['WORDING_NEW_PASSWORD_REPEAT'] = "Paulit-ulit na bagong password";
$lang['WORDING_NEW_USERNAME'] = "Bagong username ( username ay hindi maaaring walang laman at dapat na azAZ09 at 2-64 character)";
$lang['WORDING_OLD_PASSWORD'] = "ang iyong lumang password";
$lang['WORDING_PASSWORD'] = "Password";
$lang['WORDING_PROFILE_PICTURE'] = "Larawan ng iyong profile ( mula gravatar ):";
$lang['WORDING_REGISTER'] = "Magparehisto ";
$lang['WORDING_REGISTER_NEW_ACCOUNT'] = "Magparehistro ng bagong account";
$lang['WORDING_REGISTRATION_CAPTCHA'] = "Mangyaring ipasok ang mga characters";
$lang['WORDING_REGISTRATION_EMAIL'] = "E-mail user ( mangyaring magbigay ng tunay na email address , makakakuha ka ng isang verification mail na may isang link sa pagsasaaktibo ) ";
$lang['WORDING_REGISTRATION_PASSWORD'] = "Password (min 6 na mga character . !) ";
$lang['WORDING_REGISTRATION_PASSWORD_REPEAT'] = "Paulit-ulit na password";
$lang['WORDING_REGISTRATION_USERNAME'] = "Username ( titik lamang at mga numero, 2-64 character)";
$lang['WORDING_REMEMBER_ME'] = "Panatilihin akong naka-log in (para sa 2 linggo) ";
$lang['WORDING_REQUEST_PASSWORD_RESET'] = "Humiling ng pag-reset ng password. Ipasok ang iyong username at makakakuha ka ng isang mail na may mga tagubilin:";
$lang['WORDING_RESET_PASSWORD'] = "I-reset ang aking password";
$lang['WORDING_SUBMIT_NEW_PASSWORD'] = "Isumite bagong password ";
$lang['WORDING_USERNAME'] = "Username";
$lang['WORDING_YOU_ARE_LOGGED_IN_AS'] = "Naka-log in bilang - ";
$lang['WORDING_ADMIN_LOGIN'] = "Adminstrator Login";
// MENU
$lang['WORDING_MENU_HOME_PAGE'] = 'Hahanan Pahina';
$lang['WORDING_MENU_GALLERY'] = 'Galerya';
$lang['WORDING_MENU_SERVICES'] = 'Mga Serbisyo';
$lang['WORDING_MENU_HELP'] = 'Tulong';
$lang['WORDING_MENU_CONTACT'] = 'Makipag-ugnay sa Amin';
//  LANGUAGE FLAG TAGS
$lang['LANGUAGE_FLAG_ENGLISH'] = 'ENGLISH';
$lang['LANGUAGE_FLAG_GREEK'] = 'GRIYEGO';
$lang['LANGUAGE_FLAG_ITALIAN'] = 'ITALYANO';
$lang['LANGUAGE_FLAG_SPANISH'] = 'ESPANYOL';
$lang['LANGUAGE_FLAG_CATALAN'] = 'KATALAN';
$lang['LANGUAGE_FLAG_PORTUGUESE'] = 'PORTUGES';
$lang['LANGUAGE_FLAG_TAGALOG'] = 'TAGALOG';
//  SERVICES PAGE
$lang['WORDING_OUR_SERVICES'] = 'Ang Aming Mga Serbisyo';
$lang['WORDING_UPLOAD_A_PHOTO'] = 'Mag-upload Ng Isang Larawan';
$lang['WORDING_UPLOAD_DESCRIPTION'] = ' - Ang seksyon na ito ay magbibigay-daan '
                                       . 'mag-upload ng user ang isang lokasyon larawan mula '
                                       . 'sa isang panlabas na pinagmulan para sa mga annotation. '
                                       . 'Ise-save ang lokasyon sa database ng user para sa trabaho sa hinaharap .';
$lang['WORDING_ANNOTATE_DEMO'] = 'Annotate DEMO Image';
$lang['WORDING_ANNOTATE_DEMO_DETAILS'] = 'Practice Annotating Administrator Supplied Image';
$lang['WORDING_SOLAR_RESOURCES'] ='SOLAR DYNAMICS & IMAGES RESOURCES';
$lang['WORDING_SOLAR_RESOURCES_DETAILS'] = " - Research and find images for annotations.";
$lang['WORDING_SOLAR_RESOURCES_LINK_1'] ='SDO | Solar Dynamics Observatory';
$lang['WORDING_SOLAR_RESOURCES_LINK_2'] ='SDO | Browse IMage Directories';
$lang['WORDING_SOLAR_RESOURCES_LINK_3'] ='NASA Solar Dynamics Observatory';
$lang['WORDING_SOLAR_RESOURCES_LINK_4'] ='Stanford Solar Center';
$lang['WORDING_SOLAR_RESOURCES_LINK_5'] ='SOHO - Solar And Heliospheric Observatory';
$lang['WORDING_BROWSE_FOR_IMAGE'] = 'Mag-browse Album Upang Pumili ng Imahe';
$lang['WORDING_BROWSE_IMAGE_DESCRIPTION'] = " - Pumili ng larawan sa mga album upang i-annotate.";
$lang['WORDING_COLLABORATE'] = 'Magtulungan';
$lang['WORDING_COLLABORATE_DESCRIPTION'] = " - Makipag-ugnay sa ibang mga gumagamit upang talakayin ang mga larawan.";
$lang['WORDING_MY_PROFILE'] = 'Ang Aking Profile';
$lang['WORDING_MY_PROFILE_DESCRIPTION'] = " - I-update ang impormasyon sa profile ng user.";
$lang['WORDING_DATA_EXPORT'] = "Mga Anotasyon I-export";
$lang['WORDING_DATA_EXPORT_DETAILS'] = " - Output ng anotasyon data sa CSV file formated. -Prompt ng "
                                        . "gumagamit para sa lokasyon output file.";

$lang['WORDING_ANNOTATE_A_PHOTO'] = 'I-annotate ng Isang Larawan';
$lang['WORDING_ANNOTATE_WITH_A_PARTNER'] ='I-annotate Ang Isang Larawan';
$lang['WORDING_ANNOTATE_PHOTO_DESCRIPTION'] = " - Mahanap ng user ang isang nai-save na lokasyon larawan at pagkatapos ay i-annotate .";
$lang['WORDING_ANNOTATE_WITH_A_PARTNER_DESCRIPTION'] = " - Makipagtulungan aktibidad anotasyon.";
//  GALLERY PAGE
$lang['WORDING_LATEST_IMAGE'] = 'Pinakabagong Larawan';
$lang['WORDING_ARCHIVE_SUMMARY'] = 'Buod ng Archive';
$lang['WORDING_COMPLETE_ARCHIVE_SOLAR_IMAGES'] = 'Kumpletuhin ang archive ng solar mga imahe sa pamamagitan ng taon at buwan.';
$lang['WORDING_PREVIOUS_YEARS'] = 'Nakaraang Taon';
$lang['WORDING_ARCHIVE'] = 'Archive';
//  ANNOTATE PHOTO PAGE
$lang['WORDING_ANNOTATE_PHOTO'] = 'Annotate Larawan';
$lang['WORDING_OPERATIONS'] = 'OPERATIONS:  ';
$lang['WORDING_ANNOTATE'] = 'MAGKOMENTARYO';
$lang['WORDING_DELETE_LAST_ANNOTATION_POINT'] = 'TANGGALIN LAST ANOTASYON PUNTO';
$lang['WORDING_DELETE_ALL_POINTS'] = 'TANGGALIN SA LAHAT NG POINTS';
$lang['MESSAGE_ARE_YOU_CERTAIN'] = 'IKAW ILANG?!';
$lang['MESSAGE_CLICK_ANNOTATE_TO_RESUME'] = 'I-click ANNOTATE upang ipagpatuloy ang';
$lang['WORDING_ANNOTATION_SAVE'] = 'I-SAVE';
$lang['WORDING_ANNOTATION_CANCEL'] = 'KANSELAHIN';
$lang['WORDING_ANNOTATION_SUBMIT'] = 'ISUMITE ANG MGA ANOTASYON';
$lang['WORDING_ANNOTATION_REQUEST'] = 'HILING mga anotasyon';
$lang['WORDING_ANNOTATION_QUIT'] = 'Bumalik sa Mga Serbisyo - LAHAT ng mga anotasyon itinapon';
$lang['WORDING_CONNECT'] = 'Paganahin ang Mga Anotasyon Connect';
//  ANNOTATION DATA RETRIEVE
$lang['MESSAGE_ANNOTATION_DATA_RETRIEVED'] = 'Data ng anotasyon Ikinuha Para sa File ng Larawan: ';
//  HELP PAGE
$lang['WORDING_HELP_WHAT_IS'] = 'Ano ang isang korona hole?';
$lang['WORDING_HELP_WHAT_IS_DETAILS'] = 'Putong Ang aming mga sun ay hindi pantay hindi pare-pareho. Mas madilim mas malalamig na bahagi
                                    ng korona ay kilala bilang mga korona butas. Sa mga mas malalamig na
                                    mas madidilim na mga seksyon doon ay mas mababa gas at enerhiya na antas kaysa sa
                                    nakapalibot na lugar. Dahil dito, magnetic ng araw
                                    arko nagdudulot ang patlang na ito solar particle upang makatakas sa ilalim ng araw
                                    sa anyo ng mga solar wind. Kung korona butas maging malaki sapat
                                    mangyari korona mass ejections kotse. Alin ang hindi magandang balita para sa atin sa lupa.';
$lang['WORDING_HELP_WHAT_DOES'] = 'Ano ang ibig Carina mayroon ang gagawin sa ilalim ng araw?';
$lang['WORDING_HELP_WHAT_DOES_DETAILS'] = 'Carina ay gumagamit ng malaking userbase ng internet sa pag-aaral, pag-aralan,
                                 at pinaka- mahalaga -annotate ang mga larawan ng sun upang gumawa ng mga talaan ng mga
                                 korona butas. Ang mga anotasyon ng mga imahe na ito ay naka-tala sa isang database
                                 kung saan sila ay maaaring mamaya ay pinag-aralan ng. Pag-alam kung ano ang ginagawa ng aming mga sun ay mahalaga sa
                                 -unawa solar panahon upang protektahan ang aming mga satellite, kapangyarihan at komunikasyon
                                 system, at iba pang mga mahalagang mga electronic na system.';
$lang['WORDING_HELP_HOW_DO'] = 'Paano ako magsisimula?';
$lang['WORDING_HELP_HOW_DO_DETAILS'] = 'Magsisimula ka sa pamamagitan ng paglikha ng isang libreng account. Mula dito maaari mong mag-log in access ang
                                   suite ng mga tool sa tab na mga serbisyo. Narito ay kung saan maaari mong I-edit ang aming profile
                                   impormasyon, mag-upload ng isang larawan, i-annotate ang isang larawan, data sa pag-export ng anotasyon, at
                                   -access ang #carina IRC chatroom sa Mibbit.';
$lang['WORDING_HELP_UPLOADING'] = '-Upload ng Larawan';
$lang['WORDING_HELP_UPLOADING_DETAILS'] = 'Sa loob ng tab na mga serbisyo ng pag-click sa Mag-upload ng isang link ng larawan ay magdadala sa iyo
                                           sa pahina ng pag-upload kung saan maaari mong piliin ang nais na file at i-upload ito.';
$lang['WORDING_HELP_ANNOTATE'] = 'Annotate ng isang Larawan';
$lang['WORDING_HELP_ANNOTATE_DETAILS'] = 'Ang pag-click sa I-browse ang Album upang Piliin ang Imahe link o Mag-browse ng album
                                          Pumili ng Imahe mula sa pahina ng Mga Serbisyo ay magdadala sa iyo sa anotasyon
                                          tool. Mula dito maaari kang pumili ng isang imahe upang i-annotate at simulan ang hinahanap
                                          para sa korona butas. Magsimula sa pamamagitan ng paglalagay ng iyong cursor ng mouse sa ibabaw ng imahe.
                                          Ang inyong coordinates mouse ay nakikita sa real time sa itaas ng larawan. I-click ang
                                          at ilagay ang mga waypoint sa paligid ng korona butas sa larawan. Maaari mong tanggalin ang
                                          ang iyong huling waypoint, i-clear ang lahat ng mga punto, ikonekta mga puntos, at kahilingan
                                          annotattions. Ipinapakita ang mga koneksyon sa mga waypoint ay mga kapaki-pakinabang na makita ang
                                          ang korona hole. Kapag masaya ka na sa iyong trabaho i-click ang Isumite ang Mga Anotasyon
                                          isulat ang iyong mga anotasyon sa database.';
$lang['WORDING_HELP_COMMUNICATE'] = 'Makipag-ugnay Sa Ang iba sa IRC';
$lang['WORDING_HELP_COMMUNICATE_DETAILS'] = 'Ano ang mas mahusay na paraan upang makakuha ng tulong at mga tanong ang sumagot sa pakikipag
                                             may mga kapantay. Ang link na Colaboration sa tab na Mga Serbisyo Dadalhin ka nito sa
                                             pahina ng colaboration na may link upang i-access ang #carina chatroom sa
                                             kanang bahagi. Chatroom ang magpa-pop out sa isang bagong window. mula dito
                                             maaari kang gumamit ng auto-generated na palayaw o gumawa ng iyong sariling natatanging isa. habang
                                             online na maaari mong makipag-usap sa iba sa pangunahing chatroom, o PM ( Personal
                                             Mensahe ) mga indibidwal. I-click HERE upang ilunsad ang #carina IRC Chatroom.';
$lang['WORDING_HELP_EXPORTING'] = '-Export ng Data Annotation';
$lang['WORDING_HELP_EXPORTING_DETAILS'] = 'Maaaring i- export na ang mga nilalaman ng database ng anotasyon para sa karagdagang pag-aaral.';
// CONTACT US TAB
$lang['WORDING_CONTACT_TAB_TITLE'] = "Makipag-ugnay sa Amin";
$lang['WORDING_CONTACT_FORM'] = "Contact Form";
$lang['WORDING_CONTACT_NAME'] = "Pangalan:";
$lang['WORDING_CONTACT_EMAIL'] = "E-mail:";
$lang['WORDING_CONTACT_MESSAGE'] = "Mensahe:";
$lang['WORDING_CONTACT_CLEAR'] = "Malinaw";
$lang['WORDING_CONTACT_SEND'] = "Magpadala";
// FOOTER
$lang['WORDING_UNM'] = "University of New Mexico - Taon ng Paaralan 2014 - 2015";
$lang['WORDING_SDP-SIC'] = "Disenyo ng Proyekto Senior - Solar Pakikipagtulungan Larawan";
$lang['WORDING_TEAM'] = "Koponan";
$lang['WORDING_UNM-SDPW'] = "Website UNM Senior Design Proyekto";