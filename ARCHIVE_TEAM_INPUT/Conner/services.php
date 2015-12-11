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
            }                     
        </style>        
        <title>Carina | Services</title>
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
        <a href="index.php?lang=en"><img src="translations/images/flag.en.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_ENGLISH']?></a></a><font size="4"><br><br></font>
        <a href="index.php?lang=el"><img src="translations/images/flag.el.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_GREEK']?></a><font size="4"><br><br></font>
        <a href="index.php?lang=it"><img src="translations/images/flag.it.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_ITALIAN']?></a><font size="4"><br><br></font>
        <a href="index.php?lang=es"><img src="translations/images/flag.es.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_SPANISH']?></a><font size="4"><br><br></font>
        <a href="index.php?lang=ca"><img src="translations/images/flag.ca.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_CATALAN']?></a><font size="4"><br><br></font>     
        <a href="index.php?lang=pt"><img src="translations/images/flag.pt.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_PORTUGUESE']?></a><font size="4"><br><br></font>
        <a href="index.php?lang=tl"><img src="translations/images/flag.tl.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_TAGALOG']?></a><font size="4"><br><br></font>
    </div>
<body id="page3">
    <!-- header -->
    <div class="bg">
        <div class="main">
            <header>
                <div class="row-1">
                    <h1> <a class="logo" href="index.php">Carina</a> <strong class="slog"><?php echo $lang['MESSAGE_CARINA']; ?></strong> </h1>
                    <fieldset>
                        <div class="buttons"><a class="button-2"
                                                href="login.php?logout">Log Out</a> </div>
                        </field>
                </div>
                <div class="row-2">
                    <nav>
                        <ul class="menu">
                            <li><a href="login.php"><?php echo $lang['WORDING_MENU_HOME_PAGE']; ?></a></li>
                            <li><a href="gallery.php"><?php echo $lang['WORDING_MENU_GALLERY']; ?></a></li>
                            <li><a class="active" href="services.php"><?php echo $lang['WORDING_MENU_SERVICES']; ?></a></li>
                            <li><a href="help.php"><?php echo $lang['WORDING_MENU_HELP']; ?></a></li>
                            <li class="last-item"><a href="contacts.php"><?php echo $lang['WORDING_MENU_CONTACT']; ?></a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <!-- content -->
            <section id="content">
                <div class="padding">
                    <div class="indent">
                        <h2><?php echo $lang['WORDING_OUR_SERVICES']; ?></h2>
                        <div class="wrapper indent-bot">
                            <div class="col-3">
                                <div class="wrapper">
                                    <figure class="img-indent4"><img src="images/page3-img1.png" alt="" /></figure>
                                    <div class="extra-wrap">
                                        <h6><a href="upload.php" target="popup"><?php echo $lang['WORDING_UPLOAD_A_PHOTO']; ?></a></h6>
                                        <font color="red">UNDER CONSTRUCTION</font><?php echo $lang['WORDING_UPLOAD_DESCRIPTION'];?><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="wrapper">
                                    <figure class="img-indent3"><img src="images/page3-img2.png" alt="" /></figure>
                                    <div class="extra-wrap">
                                        <h6><a href="annotateWithChat.php" target="popup"><?php echo $lang['WORDING_ANNOTATE_A_PHOTO']; ?></a></h6>
                                        <font color="red">ANNOTATION STORAGE WORKING, NEEDS PHOTO SELECTION</font><?php echo $lang['WORDING_ANNOTATE_PHOTO_DESCRIPTION']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper indent-bot2">
                            <div class="col-3">
                                <div class="wrapper">
                                    <figure class="img-indent3"><img src="images/page3-img3.png" alt="" /></figure>
                                    <div class="extra-wrap">
                                        <h6><a href="annotateWithPartner.html" target="popup"><?php echo $lang['WORDING_ANNOTATE_WITH_A_PARTNER']; ?></a></h6>
                                        <font color="red">UNDER CONSTRUCTION</font><?php echo $lang['WORDING_ANNOTATE_WITH_A_PARTNER_DESCRIPTION']; ?></div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="wrapper">
                                    <figure class="img-indent"><img src="images/page3-img4.png" alt="" /></figure>
                                    <div class="extra-wrap">
                                        <h6><a href="annotateExisting.html" target="popup"><?php echo $lang['WORDING_EDIT_AN_EXISTING_ANNOTATION']; ?></a></h6>
                                        <font color="red">UNDER CONSTRUCTION</font><?php echo $lang['WORDING_EDIT_AN_EXISTING_ANNOTATION_DESCRIPTION']; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper p3">
                            <div class="col-3">
                                <div class="wrapper">
                                    <figure class="img-indent3"><img src="images/page3-img5.png" alt="" /></figure>
                                    <div class="extra-wrap">
                                        <h6><a href="collaborate.php"><?php echo $lang['WORDING_COLLABORATE']; ?></a></h6>
                                        <font color="red">CHAT TOOL and ANNOTATION STORAGE WORKING</font><?php echo $lang['WORDING_COLLABORATE_DESCRIPTION']; ?></div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="wrapper">
                                    <figure class="img-indent"><img src="images/page3-img6.png" alt="" /></figure>
                                    <div class="extra-wrap">
                                        <h6><a href="#"><?php echo $lang['WORDING_MY_PROFILE']; ?></a></h6>
                                        <font color="red">UNDER CONSTRUCTION</font><?php echo $lang['WORDING_MY_PROFILE_DESCRIPTION']; ?>
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


