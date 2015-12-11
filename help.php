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
//  Module:  help.php
//
//  Purpose: Script for Help TAB
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
          height:1200px;
          width:100px;
          float:left;
          padding:30px;
          font-size: 10px;
          display: inline-block;                
      }                      
    </style>        
    <title>Carina | Help</title>
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
    <a href="help.php?lang=en"><img src="translations/images/flag.en.jpg" /><font size="4"><br></font>
      <?php echo $lang['LANGUAGE_FLAG_ENGLISH'] ?></a></a><font size="4"><br><br></font>
  <a href="help.php?lang=el"><img src="translations/images/flag.el.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_GREEK'] ?></a><font size="4"><br><br></font>
  <a href="help.php?lang=it"><img src="translations/images/flag.it.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_ITALIAN'] ?></a><font size="4"><br><br></font>
  <a href="help.php?lang=es"><img src="translations/images/flag.es.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_SPANISH'] ?></a><font size="4"><br><br></font>
  <a href="help.php?lang=ca"><img src="translations/images/flag.ca.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_CATALAN'] ?></a><font size="4"><br><br></font>     
  <a href="help.php?lang=pt"><img src="translations/images/flag.pt.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_PORTUGUESE'] ?></a><font size="4"><br><br></font>
  <a href="help.php?lang=tl"><img src="translations/images/flag.tl.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_TAGALOG'] ?></a><font size="4"><br><br></font>
</div>   
<body id="page2">
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
              <li><a class="active" href="help.php"><?php echo $lang['WORDING_MENU_HELP']; ?></a></li>
              <li class="last-item"><a href="contacts.php"><?php echo $lang['WORDING_MENU_CONTACT']; ?></a></li>
            </ul>
          </nav>
        </div>
      </header>
      <!-- content -->
      <section id="content">
        <div class="padding">
          <div class="wrapper p4">
            <div class="col-3">
              <div class="indent">
                <h2>Help</h2>
                <div class="news indent-bot2">
                  <time class="tdate-2"</time>
                  <p class="p1"><a style="text-decoration:none"><?php echo $lang['WORDING_HELP_WHAT_IS']; ?></a></p>
                  <?php echo $lang['WORDING_HELP_WHAT_IS_DETAILS']; ?><p>
                </div>
                <div class="news indent-bot2">
                  <time class="tdate-2"</time>  
                  <p class="p1"><a style="text-decoration:none"><?php echo $lang['WORDING_HELP_WHAT_DOES']; ?></a></p>
                  <?php echo $lang['WORDING_HELP_WHAT_DOES_DETAILS']; ?><p>                    
                </div>
                <div class="news indent-bot2">
                  <time class="tdate-2"</time>  
                  <p class="p1"><a style="text-decoration:none"><?php echo $lang['WORDING_HELP_HOW_DO']; ?></a></p>
                  <?php echo $lang['WORDING_HELP_HOW_DO_DETAILS']; ?><p>
                </div>
                <div class="news indent-bot2">
                  <time class="tdate-2"</time>  
                  <p class="p1"><a style="text-decoration:none"><?php echo $lang['WORDING_HELP_UPLOADING']; ?></a></p>
                  <?php echo $lang['WORDING_HELP_UPLOADING_DETAILS']; ?><p>
                </div>
                <div class="news indent-bot2">
                  <time class="tdate-2"</time>  
                  <p class="p1"><a style="text-decoration:none"><?php echo $lang['WORDING_HELP_ANNOTATE']; ?></a></p>
                  <?php echo $lang['WORDING_HELP_ANNOTATE_DETAILS']; ?><p>
                </div>
                <div class="news indent-bot2">
                  <time class="tdate-2"</time>  
                  <p class="p1"><a style="text-decoration:none"><?php echo $lang['WORDING_HELP_COMMUNICATE']; ?></a></p>
                  <?php echo $lang['WORDING_HELP_COMMUNICATE_DETAILS']; ?><p>
                </div>
                <div class="news indent-bot2">
                  <time class="tdate-2"</time>  
                  <p class="p1"><a style="text-decoration:none"><?php echo $lang['WORDING_HELP_EXPORTING']; ?></a></p>
                  <?php echo $lang['WORDING_HELP_EXPORTING_DETAILS']; ?><p>
                </div>
              </div>
            </div>
          </div>
          <div class="wrapper">
          </div>
        </div>
      </section>
      <!-- footer -->
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


