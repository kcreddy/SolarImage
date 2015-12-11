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
//  Module:  index.php
//
//  Purpose: Default web page
//
////////////////////////////////////////////////////////////////////////////////
include('views/_header.php');
include_once 'config/lang_config.php';
include_once 'translations/' . $lang_file;
?>
<!DOCTYPE html>
<html>
  <head profile="http://www.w3.org/2005/10/profile">
  <link rel="icon" type="image/x-icon" href="images/favicon.png">
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
      
      #twitter {
          position: absolute;
          left: 622px;
          top: 8px;          
      }                     
    </style>
    <title>CARINA</title>
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
    <script type="text/javascript" src="js/tms-0.3.js"></script>
    <script type="text/javascript" src="js/tms_presets.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
     <script type="text/javascript" src="js/html5.js"></script>
     <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
     <![endif]-->
  </head>

  <div id="nav" >
  <a href="index.php?lang=en"><img src="translations/images/flag.en.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_ENGLISH'] ?></a></a><font size="4"><br><br></font>
  <a href="index.php?lang=el"><img src="translations/images/flag.el.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_GREEK'] ?></a><font size="4"><br><br></font>
  <a href="index.php?lang=it"><img src="translations/images/flag.it.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_ITALIAN'] ?></a><font size="4"><br><br></font>
  <a href="index.php?lang=es"><img src="translations/images/flag.es.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_SPANISH'] ?></a><font size="4"><br><br></font>
  <a href="index.php?lang=ca"><img src="translations/images/flag.ca.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_CATALAN'] ?></a><font size="4"><br><br></font>     
  <a href="index.php?lang=pt"><img src="translations/images/flag.pt.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_PORTUGUESE'] ?></a><font size="4"><br><br></font>
  <a href="index.php?lang=tl"><img src="translations/images/flag.tl.jpg" /><font size="4"><br></font>
    <?php echo $lang['LANGUAGE_FLAG_TAGALOG'] ?></a><font size="4"><br><br></font>
</div>

<body id="page1">
  <!-- header -->
  <div class="bg">
    <div class="main">
      <header>
        <div class="row-1">
          <h1> <a class="logo" href="index.php">Carina</a>
            <strong class="slog"><?php echo $lang['MESSAGE_ACCOUNT_LOGIN']; ?></strong></h1>
          <fieldset>
            <div class="buttons"><a class="button-2" href="login.php"><?php echo $lang['MESSAGE_LOG_IN_PAGE']; ?></a> </div>
            </field>                                                                                         
        </div>
        <div class="row-2">
          <nav>
            <ul class="menu">
              <li><a  class="active" href="index.php"><?php echo $lang['MESSAGE_WELCOME']; ?></a></li>
            </ul>
          </nav>
        </div>
        <div class="row-3">
          <div class="slider-wrapper">
            <div class="slider">
              <ul class="items">
                <li><img src="images/slider-img1.jpg" alt=""> 
                  <strong class="banner"> 
                    <strong class="b1"><?php echo $lang['MESSAGE_CONSTELLATION']; ?></strong> 
                    <strong class="b2">Carina</strong> 
                    <strong class="b3"><?php echo $lang['MESSAGE_CONSTELLATION_INTRO']; ?></strong> </strong> </li>
                <li><img src="images/slider-img2.jpg" alt=""> 
                  <strong class="banner"> 
                    <strong class="b1"><?php echo $lang['MESSAGE_AIM']; ?></strong> 
                    <strong class="b2"><?php echo $lang['MESSAGE_AIM_DEDICATION']; ?></strong> 
                    <strong class="b3"><?php echo $lang['MESSAGE_AIM_INTRO']; ?></strong> </strong> </li>
                <li><img src="images/slider-img3.jpg" alt=""> 
                  <strong class="banner"> 
                    <strong class="b1"><?php echo $lang['MESSAGE_LOBO']; ?></strong> 
                    <strong class="b2">Lobo</strong> 
                    <strong class="b3"><?php echo $lang['MESSAGE_LOBO_INTRO']; ?></strong> </strong> </li>
              </ul>
              <a class="prev" href="#">prev</a> <a class="next" href="#">prev</a> </div>
          </div>
        </div>
      </header>
      <!-- content -->
      <section id="content">
        <div class="padding">
         <div class="wrapper"> 
            <div class="col-3">
              <div class="indent">
                <h2><?php echo $lang['MESSAGE_MISSION'] ?></h2>
                <p class="color-4 p1"><?php echo $lang['MESSAGE_MISSION_1'] ?></p>                                                                                                                                          

                <div class="wrapper">
                  <figure class="img-indent3"><img src="images/page1-img1.png" alt="" /></figure>
                  <div class="extra-wrap">
                    <div class="indent2"><?php echo $lang['MESSAGE_MISSION_2'] ?>
                        <div id="twitter">
                            <a class="twitter-timeline" href="https://twitter.com/UNM_CARINA" data-widget-id="607398045420904449", width="350", height="450">Tweets by @UNM_CARINA</a>
							<script src="js/TwitterAPI.js" type="text/javascript"></script>
                        </div>                    	
                    </div>
                  </div>
                </div>                                    
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

              <script type="text/javascript">Cufon.now();</script>
              <script type="text/javascript">
                $(function () {
                    $('.slider')._TMS({
                        prevBu: '.prev',
                        nextBu: '.next',
                        playBu: '.play',
                        duration: 800,
                        easing: 'easeOutQuad',
                        preset: 'simpleFade',
                        pagination: false,
                        slideshow: 5000,
                        numStatus: false,
                        pauseOnHover: true,
                        banners: true,
                        waitBannerAnimation: false,
                        bannerShow: function (banner) {
                            banner.hide().fadeIn(500)
                        },
                        bannerHide: function (banner) {
                            banner.show().fadeOut(500)
                        }
                    });
                })
              </script>
              </html>
