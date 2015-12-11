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
        <?php echo $lang['LANGUAGE_FLAG_ENGLISH']?></a></a><font size="4"><br><br></font>
        <a href="help.php?lang=el"><img src="translations/images/flag.el.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_GREEK']?></a><font size="4"><br><br></font>
        <a href="help.php?lang=it"><img src="translations/images/flag.it.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_ITALIAN']?></a><font size="4"><br><br></font>
        <a href="help.php?lang=es"><img src="translations/images/flag.es.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_SPANISH']?></a><font size="4"><br><br></font>
        <a href="help.php?lang=ca"><img src="translations/images/flag.ca.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_CATALAN']?></a><font size="4"><br><br></font>     
        <a href="help.php?lang=pt"><img src="translations/images/flag.pt.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_PORTUGUESE']?></a><font size="4"><br><br></font>
        <a href="help.php?lang=tl"><img src="translations/images/flag.tl.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_TAGALOG']?></a><font size="4"><br><br></font>
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
                                        <time class="tdate-2"22.05.2011&nbsp;</time>
                                              <p class="p1"><a href="#">Upload your own images</a></p>
                                            Quas molestias excepturi sint occaecati cupiditate non provident, similique suntulpa uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </div>
                                    <div class="news indent-bot2">
                                        <time class="tdate-2"22.05.2011&nbsp;</time>  
                                              <p class="p1"><a href="#">Start your first annotation</a></p>
                                            Quas molestias excepturi sint occaecati cupiditate non provident, similique suntulpa uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                                    </div>

                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-news">
                                    <h3 class="color-4 p2">Recent Questions</h3>
                                    <div class="wrapper indent-bot">
                                        <ul class="list-2">
                                            <li><a href="#">How to upload an image</a></li>
                                            <li><a href="#">Cannot find my old annotations</a></li>
                                        </ul>
                                    </div>
                                    <a class="button-2" href="#">Other Questions</a> </div>
                            </div>
                        </div>
                        <div class="wrapper">
                        </div>
                    </div>
                </section>
                <!-- footer -->

                        </div>
                    </div>
                    <script type="text/javascript">Cufon.now();</script>
                    </html>


