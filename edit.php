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
//  Module:  edit.php
//
//  Purpose: Script and view for edit users profile
//
////////////////////////////////////////////////////////////////////////////////
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
          font-size: 10px;
          display: inline-block;                
      }                     
    </style>        
    <title>Carina | Edit</title>
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
    <a href="edit.php?lang=en"><img src="translations/images/flag.en.jpg" /><font size="4"><br></font>
      <?php echo $lang['LANGUAGE_FLAG_ENGLISH'] ?></a></a><font size="4"><br><br></font>
  <a href="edit.php?lang=el"><img src="translations/images/flag.el.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_GREEK'] ?></a><font size="4"><br><br></font>
  <a href="edit.php?lang=it"><img src="translations/images/flag.it.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_ITALIAN'] ?></a><font size="4"><br><br></font>
  <a href="edit.php?lang=es"><img src="translations/images/flag.es.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_SPANISH'] ?></a><font size="4"><br><br></font>
  <a href="edit.php?lang=ca"><img src="translations/images/flag.ca.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_CATALAN'] ?></a><font size="4"><br><br></font>   
  <a href="edit.php?lang=pt"><img src="translations/images/flag.pt.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_PORTUGUESE'] ?></a><font size="4"><br><br></font>
  <a href="edit.php?lang=tl"><img src="translations/images/flag.tl.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_TAGALOG'] ?></a><font size="4"><br><br></font>
</div>
<body id="page3">
  <!-- header -->
  <div class="bg">
    <div class="main">
      <header>
        <div class="row-1">
          <h1> <a class="logo" href="index.php">Carina</a> <strong class="slog">Collaborative Solar Imaging Annotation</strong> </h1>

        </div>
        <div class="row-2">
          <nav>
            <ul class="menu">
              <li><a class="active" href="edit.php">Edit</a></li>

            </ul>
          </nav>
        </div>
      </header>
      <!-- content -->
      <section id="content">
        <div class="padding">
          <div class="indent">
<?php
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
  exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
  // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
  // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
  require_once('libraries/password_compatibility_library.php');
}

require_once('libraries/password_compatibility_library.php');
// include the config
//echo $GLOBALS['lang_file'];
require_once('config/config.php');

// include the to-be-used language, english by default. feel free to translate your project and include something else
require_once('translations/' . $lang_file);
//require_once 'translations/'.$GLOBALS['lang_file'];
// include the PHPMailer library
require_once('libraries/PHPMailer.php');

// load the login class
require_once('classes/Login.php');

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process.
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
  // the user is logged in. you can do whatever you want here.
  // for demonstration purposes, we simply show the "you are logged in" view.
  include("views/edit.php");
} else {
  // the user is not logged in. you can do whatever you want here.
  // for demonstration purposes, we simply show the "you are not logged in" view.
  include("views/not_logged_in.php");
}
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