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
//  Module:  contacts.php
//
//  Purpose: Contacts TAB display
//
////////////////////////////////////////////////////////////////////////////////
include_once 'config/lang_config.php';
include_once 'translations/' . $lang_file;
?>
<!DOCTYPE html>
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
    <title>Carina | <?php echo $lang['WORDING_CONTACT_TAB_TITLE']; ?></title>
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
  <div id="nav" >
    <a href="contacts.php?lang=en"><img src="translations/images/flag.en.jpg" /><font size="4"><br></font>
      <?php echo $lang['LANGUAGE_FLAG_ENGLISH'] ?></a></a><font size="4"><br><br></font>
  <a href="contacts.php?lang=el"><img src="translations/images/flag.el.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_GREEK'] ?></a><font size="4"><br><br></font>
  <a href="contacts.php?lang=it"><img src="translations/images/flag.it.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_ITALIAN'] ?></a><font size="4"><br><br></font>
  <a href="contacts.php?lang=es"><img src="translations/images/flag.es.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_SPANISH'] ?></a><font size="4"><br><br></font>
  <a href="contacts.php?lang=ca"><img src="translations/images/flag.ca.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_CATALAN'] ?></a><font size="4"><br><br></font>     
  <a href="contacts.php?lang=pt"><img src="translations/images/flag.pt.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_PORTUGUESE'] ?></a><font size="4"><br><br></font>
  <a href="contacts.php?lang=tl"><img src="translations/images/flag.tl.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_TAGALOG'] ?></a><font size="4"><br><br></font>
</div> 
<body id="page5">
  <!-- header -->
  <div class="bg">
    <div class="main">
      <header>
        <div class="row-1">
          <h1> <a class="logo" href="index.php">Carina</a> <strong class="slog"><?php echo $lang['MESSAGE_CARINA']; ?></strong> </h1>
          <fieldset>
            <div class="buttons"><a class="button-2"
                                    href="login.php?logout"><?php echo $lang['WORDING_LOGOUT']; ?></a> </div>
            </field>
        </div>
        <div class="row-2">
          <nav>
            <ul class="menu">
              <li><a href="login.php"><?php echo $lang['WORDING_MENU_HOME_PAGE']; ?></a></li>
              <li><a href="gallery.php"><?php echo $lang['WORDING_MENU_GALLERY']; ?></a></li>
              <li><a href="services.php"><?php echo $lang['WORDING_MENU_SERVICES']; ?></a></li>
              <li><a href="help.php"><?php echo $lang['WORDING_MENU_HELP']; ?></a></li>
              <li class="last-item"><a class="active" href="contacts.php"><?php echo $lang['WORDING_MENU_CONTACT']; ?></a></li>
            </ul>
          </nav>
        </div>
      </header>
      <!-- content -->
      <section id="content">
        <div class="padding">
          <div class="wrapper margin-bot">
            <div class="col-3">
              <div class="indent">
                <h2 class="p0"><?php echo $lang['WORDING_CONTACT_FORM']; ?></h2>                                
                <form id="contact-form" action="#" method="post" enctype="multipart/form-data">
                  <fieldset>
                    <label><span class="text-form"><?php echo $lang['WORDING_CONTACT_NAME']; ?></span>
                      <input name="p1" type="text" />
                    </label>
                    <label><span class="text-form"><?php echo $lang['WORDING_CONTACT_EMAIL']; ?></span>
                      <input name="p2" type="text" />
                    </label>
                    <div class="wrapper">
                      <div class="text-form"><?php echo $lang['WORDING_CONTACT_MESSAGE']; ?></div>
                      <textarea></textarea>
                    </div>
                    <div class="buttons"> <a class="button-2" href="contacts.php"><?php echo $lang['WORDING_CONTACT_CLEAR']; ?></a>
                      <a class="button-2" href="contacts.php"><?php echo $lang['WORDING_CONTACT_SEND']; ?></a> </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer>
        <div class="row-top">
          <div class="row-padding">
            <div class="wrapper">
              <div class="aligncenter">
                <p class="p0"><?php echo $lang['WORDING_UNM']; ?></p>
                <p class="p0"><?php echo $lang['WORDING_SDP-SIC']; ?></p>
                <p class="p0"><?php echo $lang['WORDING_TEAM']; ?> - Patrick Lopez PM, Connor Dolan, Edward Sadzewicz, Cody Shell, Jaclynn Wakley</p>
                <p class="p0"><?php echo $lang['WORDING_UNM-SDPW']; ?>  - <a target="popup" href="http://www.unmseniordesign.org">  unmseniordesign.org</a><br>                
                  <!-- {%FOOTER_LINK} -->
              </div>
            </div>
          </div>
        </div>
      </footer> 
      <!-- footer -->
    </div>
  </div>
  <script type="text/javascript">Cufon.now();</script>
</html>


