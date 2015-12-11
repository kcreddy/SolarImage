<?php
//include('_header.php');
include_once 'config/lang_config.php';
include_once 'translations/' . $lang_file;
?>
<html>
    <head>
        <style>
            #nav {
                line-height:30px;
                height:800px;
                width:100px;
                float:left;
                padding:30px;
                font-size: 14px;
                display: inline-block;                
            }                     
        </style>        
        <title>Carina | Register</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
        <script type="text/javascript" src="js/jquery-1.6.min.js"></script>
        <script src="js/cufon-yui.js" type="text/javascript"></script>
        <script src="js/cufon-replace.js" type="text/javascript"></script>
        <script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
        <script src="js/Open_Sans_Light_300.font.js" type="text/javascript"></script>
        <script src="js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script>
        <script src="js/FF-cash.js" type="text/javascript"></script>
        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
        <![endif]-->
    </head>
    <div id="nav">
        <a href="services.php?lang=en"><img src="translations/images/flag.en.jpg" /><font size="4"><br></font>
            <?php echo $lang['LANGUAGE_FLAG_ENGLISH'] ?></a></a><font size="4"><br><br></font>
    <a href="services.php?lang=el"><img src="translations/images/flag.el.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_GREEK'] ?></a><font size="4"><br><br></font>
    <a href="services.php?lang=it"><img src="translations/images/flag.it.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_ITALIAN'] ?></a><font size="4"><br><br></font>
    <a href="services.php?lang=es"><img src="translations/images/flag.es.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_SPANISH'] ?></a><font size="4"><br><br></font>
    <a href="services.php?lang=ca"><img src="translations/images/flag.ca.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_CATALAN'] ?></a><font size="4"><br><br></font>   
    <a href="services.php?lang=pt"><img src="translations/images/flag.pt.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_PORTUGUESE'] ?></a><font size="4"><br><br></font>
    <a href="services.php?lang=tl"><img src="translations/images/flag.tl.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_TAGALOG'] ?></a><font size="4"><br><br></font>
</div>
<body id="page3">
    <!-- header -->
    <div class="bg">
        <div class="main">
            <header>
                <div class="row-1">
                    <h1> <a class="logo" href="index.php">Carina</a> <strong class="slog"><?php echo $lang['MESSAGE_ACCOUNT_NOT_ACTIVATED']; ?></strong> </h1>
               
                </div>
                <div class="row-2">
                    <nav>
                        <ul class="menu">
                            <li><a class="active" href="register.php"><?php echo $lang['WORDING_REGISTER']; ?></a></li>
                           
                        </ul>
                    </nav>
                </div>
            </header>
            <!-- content -->
            <section id="content">
                <div class="padding">
                    <div class="indent">
					<?php

// check for minimum PHP version
//
// CARINA - Minimum PHP version logic removed for testing on server with pre 5.3.7 php version
// Applied patch in "password_compatibility_library.php" module.
// Reference "http://php.net/security/crypt_blowfish.php" for details
/*
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once('libraries/password_compatibility_library.php');
}
 */
// include the config
require_once('config/config.php');

// include the to-be-used language, english by default. feel free to translate your project and include something else
require_once('translations/lang.en.php');

// include the PHPMailer library
require_once('libraries/PHPMailer.php');

// load the registration class
require_once('classes/Registration.php');

// create the registration object. when this object is created, it will do all registration stuff automatically
// so this single line handles the entire registration process.
$registration = new Registration();

// showing the register view (with the registration form, and messages/errors)
include("views/register.php");
?>
                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script type="text/javascript">Cufon.now();</script>
</html>


