<?php
//include('views/_header.php');
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
    <title>Carina | Gallery</title>
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
        <a href="gallery.php?lang=en"><img src="translations/images/flag.en.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_ENGLISH']?></a></a><font size="4"><br><br></font>
        <a href="gallery.php?lang=el"><img src="translations/images/flag.el.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_GREEK']?></a><font size="4"><br><br></font>
        <a href="gallery.php?lang=it"><img src="translations/images/flag.it.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_ITALIAN']?></a><font size="4"><br><br></font>
        <a href="gallery.php?lang=es"><img src="translations/images/flag.es.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_SPANISH']?></a><font size="4"><br><br></font>
        <a href="gallery.php?lang=ca"><img src="translations/images/flag.ca.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_CATALAN']?></a><font size="4"><br><br></font>     
        <a href="gallery.php?lang=pt"><img src="translations/images/flag.pt.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_PORTUGUESE']?></a><font size="4"><br><br></font>
        <a href="gallery.php?lang=tl"><img src="translations/images/flag.tl.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_TAGALOG']?></a><font size="4"><br><br></font>
    </div>

  <body id="body" style="overflow: auto;">      
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
                        </fieldset>
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
              <div class="wrapper margin-bot">
                <div class="col-3">
                  <div class="img-indent3">
                    <div id="main_section" style="position: relative; left: 0px; top: 0px; width: 950px; height: 950px;">
                      
<!-- DEMO GALLERY --> 

<head>
<link type="text/css" rel="stylesheet" href="foliogallery/foliogallery.css" />
<link type="text/css" rel="stylesheet" href="colorbox/colorbox.css" />
<script type="text/javascript" src="foliogallery/jquery.1.11.js"></script>
<script type="text/javascript" src="colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    // initiate colorbox
	$('.albumpix').colorbox({rel:'albumpix', maxWidth:'96%', maxHeight:'96%', Slideshow:true});
	$('.vid').colorbox({rel:'albumpix', iframe:true, width:'80%', height:'96%'});
});
</script>
</head>

<body>
<br />
<?php $_REQUEST['fullalbum']=1; include 'foliogallery.php'; ?>
<br />
</body>


<!-- END DEMO GALLERY --> 
				  
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>

            <script type="text/javascript">
              //run the code!
              GetBrowserInfo();
              MainInit();
            </script>
            <!-- footer -->
       

            </div>
            </div>
            </body>
            </html>
