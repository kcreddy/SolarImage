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
//  Module:  config/lang_config.php
//
//  Purpose: Language control and config file
//
////////////////////////////////////////////////////////////////////////////////

header('Cache-control: private'); // IE 6 FIX



if (isSet($_GET['lang'])) {
    $lang = $_GET['lang'];

// register the session and set the cookie
    $_SESSION['lang'] = $lang;

    setcookie("lang", $lang, time() + (3600 * 24 * 30));
} else if (isSet($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else if (isSet($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'en';
}

switch ($lang) {
    case 'ca':
        $lang_file = 'lang.ca.php';
        break;
      
    case 'el':
        $lang_file = 'lang.el.php';
        break;
      
    case 'en':
        $lang_file = 'lang.en.php';
        break;
    
    case 'es':
        $lang_file = 'lang.es.php';
        break;
    
    case 'it':
        $lang_file = 'lang.it.php';
        break;

    case 'pt':
        $lang_file = 'lang.pt.php';
        break;

    case 'tl':
        $lang_file = 'lang.tl.php';
        break;


    default:
        $lang_file = 'lang.en.php';
}
$GLOBALS['lang_file'] = $lang_file;
//echo $GLOBALS['lang_file'];
//print("<br />");

//print("In lang_config.php end<br />");
//echo $lang_file;
//print("<br />");
//include_once 'translations/' . $lang_file;
?>
