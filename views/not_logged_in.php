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
//  Module:  views/not_logged_in.php
//
//  Purpose: View someone will get if not logged in yet.
//           Has username & password input fields and links to register
//           new account and to reset password
//
////////////////////////////////////////////////////////////////////////////////
include_once 'config/lang_config.php';
include_once 'translations/' . $lang_file;
?>

<!DOCTYPE html>
<html lang="tl">
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
    <title>Carina | Login</title>
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
  <div id="nav" >
    <a href="login.php?lang=en"><img src="translations/images/flag.en.jpg" /><font size="4"><br></font>
      <?php echo $lang['LANGUAGE_FLAG_ENGLISH'] ?></a></a><font size="4"><br><br></font>
  <a href="login.php?lang=el"><img src="translations/images/flag.el.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_GREEK'] ?></a><font size="4"><br><br></font>
  <a href="login.php?lang=it"><img src="translations/images/flag.it.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_ITALIAN'] ?></a><font size="4"><br><br></font>
  <a href="login.php?lang=es"><img src="translations/images/flag.es.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_SPANISH'] ?></a><font size="4"><br><br></font>
  <a href="login.php?lang=ca"><img src="translations/images/flag.ca.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_CATALAN'] ?></a><font size="4"><br><br></font>     
  <a href="login.php?lang=pt"><img src="translations/images/flag.pt.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_PORTUGUESE'] ?></a><font size="4"><br><br></font>
  <a href="login.php?lang=tl"><img src="translations/images/flag.tl.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_TAGALOG'] ?></a><font size="4"><br><br></font>
</div>
<div class="bg">
  <div class="main">
    <header>
      <div class="row-1">
        <h1> <a class="logo" href="index.php">Carina</a> <strong class="slog"><?php echo $lang['MESSAGE_CARINA']; ?></strong> </h1>
      </div>
      <div class="row-2">
        <nav>
          <ul class="menu">
            <li><a class="active" href="index.php"><?php echo $lang['MESSAGE_WELCOME']; ?></a></li>
          </ul>
        </nav>
      </div>
    </header>           
    <!-- content -->
    <section id="content">
      <div class="padding">
        <div class="wrapper margin-bot">
          <div class="col-3">
            <div class="img-indent3">
              <img src="images/slider-img1.jpg"> <strong class="banner"> <strong class="b1"><?php echo $lang['MESSAGE_WELCOME']; ?><p></p>
                </strong><strong class="b3"><?php echo $lang['MESSAGE_ACCOUNT_LOGIN']; ?></strong></p></p></p>
                <?php
                include('_header.php');
                ?>
                <form method="post" action="login.php" name="loginform">
                  <label class="color-4 p1" for="user_name"><?php echo $lang['WORDING_USERNAME']; ?></label>
                  <input id="user_name" type="text" name="user_name" required autofocus />
                  <label class="color-4 p1" for="user_password"><?php echo $lang['WORDING_PASSWORD']; ?></label>
                  <input id="user_password" type="password" name="user_password" autocomplete="off" required />
                  <input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
                  <label class="color-4 p1" for="user_rememberme"><?php echo $lang['WORDING_REMEMBER_ME']; ?></label>
                  <input class="button-2" type="submit" name="login" value="<?php echo $lang['WORDING_LOGIN']; ?>" />
                  <a href="register.php"><?php echo $lang['WORDING_REGISTER_NEW_ACCOUNT']; ?></a></p>
                  <a href="password_reset.php"><?php echo $lang['WORDING_FORGOT_MY_PASSWORD']; ?></a></p>
                  <a href="login.php"><font color="red">UNDER CONSTRUCTION -  </font><?php echo $lang['WORDING_ADMIN_LOGIN']; ?></a><p></p>            
                </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include('_footer.php'); ?>
