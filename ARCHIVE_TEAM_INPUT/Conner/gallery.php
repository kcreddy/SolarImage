<?php
//include('_header.php');
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
    }                     
        </style>        
        <title>Carina | Gallery</title>
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
        <a href="gallery.php?lang=en"><img src="translations/images/flag.en.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_ENGLISH']?></a></a>
        <a href="gallery.php?lang=el"><img src="translations/images/flag.el.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_GREEK']?></a>
        <a href="gallery.php?lang=it"><img src="translations/images/flag.it.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_ITALIAN']?></a>
        <a href="gallery.php?lang=es"><img src="translations/images/flag.es.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_SPANISH']?></a>
        <a href="gallery.php?lang=ca"><img src="translations/images/flag.ca.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_CATALAN']?></a>      
        <a href="gallery.php?lang=pt"><img src="translations/images/flag.pt.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_PORTUGUESE']?></a>
        <a href="gallery.php?lang=tl"><img src="translations/images/flag.tl.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_TAGALOG']?></a>
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
                                <li><a class="active" href="gallery.php"><?php echo $lang['WORDING_MENU_GALLERY']; ?></a></li>
                                <li><a href="services.php"><?php echo $lang['WORDING_MENU_SERVICES']; ?></a></li>
                                <li><a href="help.php"><?php echo $lang['WORDING_MENU_HELP']; ?></a></li>
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
                                    <h2><?php echo $lang['WORDING_LATEST_IMAGE']; ?></h2>
                                    <div class="news indent-bot2">
                                        <p class="p1"><a href="#"><?php echo $lang['WORDING_ARCHIVE_SUMMARY']; ?></a></p>
                                        <?php echo $lang['WORDING_COMPLETE_ARCHIVE_SOLAR_IMAGES']; ?></div>
                                    <img src="images/folder1/jianxiong.jpg">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-news">
                                    <h3 class="color-4 p2"><?php echo $lang['WORDING_ARCHIVE']; ?></h3>
                                    <div class="wrapper indent-bot">
                                        <ul class="list-2">
                                            <li><a href="#">May 2014</a></li>
                                            <li><a href="#">April 2014</a></li>
                                            <li><a href="#">March 2014</a></li>
                                            <li><a href="#">February 2014</a></li>
                                            <li><a href="#">January 2014</a></li>
                                            <li><a href="#">December 2013</a></li>
                                            <li><a href="#">November 2013</a></li>
                                            <li><a href="#">October 2013</a></li>
                                            <li><a href="#">September 2013</a></li>
                                            <li><a href="#">August 2013</a></li>
                                            <li><a href="#">July 2013</a></li>
                                            <li><a href="#">June 2013</a></li>
                                        </ul>
                                    </div>
                                    <a class="button-2" href="#"><?php echo $lang['WORDING_PREVIOUS_YEARS']; ?></a> </div>
                            </div>
                        </div>
                        <div class="wrapper">
                        </div>
                    </div>
                </section>

                        </div>
                    </div>
                    <script type="text/javascript">Cufon.now();</script>
                    </html>
